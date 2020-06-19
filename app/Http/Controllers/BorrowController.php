<?php

namespace App\Http\Controllers;

use App\Book;
use App\Borrow;
use App\Customer;
use App\Services\BookService;
use App\Services\BorrowService;
use App\Services\CustomerService;
use Illuminate\Database\Events\TransactionBeginning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;

class BorrowController extends Controller
{

    protected $customerService;
    protected $bookService;
    protected $borrowService;

    public function __construct(CustomerService $customerService,
                                BookService $bookService,
                                BorrowService $borrowService)
    {
        $this->customerService = $customerService;
        $this->bookService = $bookService;
        $this->borrowService = $borrowService;
    }

    public function index()
    {
        if (!Gate::allows('manage-borrows')) {
            abort(403);
        }
        $borrows = $this->borrowService->getAll();
        return view('manager.borrows.list', compact('borrows'));
    }

    public function create()
    {
        if (!Gate::allows('manage-borrows')) {
            abort(403);
        }
        $customers = $this->customerService->getAll();
        $books = $this->bookService->getBookNotBorrow();
        return view('manager.borrows.add', compact('customers', 'books'));
    }

    public function store(Request $request)
    {
        if (!Gate::allows('manage-borrows')) {
            abort(403);
        }
        DB::beginTransaction();
        try {
            $book = $this->bookService->findById($request->book_id);
            $book->borrow = BorrowConstant::BORROWED;
            $book->save();

            $borrow = new Borrow();
            $borrow->book_id = $request->book_id;
            $borrow->customer_id = $request->customer_id;
            $borrow->day_expected_return = $request->day_expected_return;
            $borrow->day_borrow = date('Y-m-d');
            $borrow->save();
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json(['error' => 'Có lỗi xảy ra! Vui lòng thực hiện lại sau']);
        }
        return response()->json(['success' => 'Cho mượn thành công']);
    }

    public function searchCustomer(Request $request)
    {
        if (!Gate::allows('manage-borrows')) {
            abort(403);
        }
        return Customer::where('name', 'LIKE', '%' . $request->keyword . '%')->get();
    }

    public function searchBook(Request $request)
    {
        if (!Gate::allows('manage-borrows')) {
            abort(403);
        }
        return Book::where('name', 'LIKE', '%' . $request->keyword . '%')->get();
    }

    public function update($idBorrow)
    {
        if (!Gate::allows('manage-borrows')) {
            abort(403);
        }
        DB::beginTransaction();
        try {

            $borrow = $this->borrowService->findById($idBorrow);

            $book = $this->bookService->findById($borrow->book_id);
            $book->borrow = BorrowConstant::RETURN_BOOK;
            $book->save();

            $this->borrowService->update($borrow);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }
        Session::flash('success', 'Trả sách thành công');
        return redirect()->route('borrows.index');
    }
    public function returnList()
    {
        if (!Gate::allows('manage-borrows')) {
            abort(403);
        }
        $borrowsReturn = $this->borrowService->getBorrowReturn();
        return view('manager.borrows.list-return',compact('borrowsReturn'));
    }
}
