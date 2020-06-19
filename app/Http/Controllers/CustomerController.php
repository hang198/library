<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCustomerRequest;
use App\Services\CustomerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    protected $customerService;
    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }
    public function index()
    {
        if (!Gate::allows('crud-customers')) {
            abort(403);
        }
        $customers = $this->customerService->getAll();
        return view('manager.customers.list',compact('customers'));
    }
    public function create()
    {
        if (!Gate::allows('crud-customers')) {
            abort(403);
        }
        return view('manager.customers.create');
    }
    public function store(CreateCustomerRequest $request)
    {
        if (!Gate::allows('crud-customers')) {
            abort(403);
        }
        $this->customerService->create($request);
        Session::flash('success', 'Thêm thành công');
        return redirect()->route('customers.index');
    }
    public function edit($id)
    {
        if (!Gate::allows('crud-customers')) {
            abort(403);
        }
        $customer = $this->customerService->findById($id);
        return view('manager.customers.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        if (!Gate::allows('crud-customers')) {
            abort(403);
        }
        $customer = $this->customerService->findById($id);
        $this->customerService->update($request, $customer);
        Session::flash('success', 'Cập nhật thành công');
        return redirect()->route('customers.index');
    }

    public function destroy($id)
    {
        if (!Gate::allows('crud-customers')) {
            abort(403);
        }
        $customer = $this->customerService->findById($id);
        $this->customerService->delete($customer);
        Session::flash('success', 'Xóa thành công');
        return redirect()->route('customers.index');
    }

    public function showCustomer($id)
    {
        return $this->customerService->findById($id);
    }



}
