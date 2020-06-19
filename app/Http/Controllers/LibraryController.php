<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLibraryRequest;
use App\Library;
use App\Services\LibraryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;


class LibraryController extends Controller
{
    protected $libraryService;

    public function __construct(LibraryService $libraryService)
    {
        $this->libraryService = $libraryService;
    }

    public function index()
    {
        if (!Gate::allows('crud-libraries')) {
            abort(403);
        }
        $libraries = $this->libraryService->getAll();
        return view('admin.libraries.list', compact('libraries'));
    }

    public function create()
    {
        if (!Gate::allows('crud-libraries')) {
            abort(403);
        }
        return view('admin.libraries.create');
    }

    public function store(CreateLibraryRequest $request)
    {
        if (!Gate::allows('crud-libraries')) {
            abort(403);
        }
        $this->libraryService->create($request);
        toastr()->success('Thêm thành công!');
        return redirect()->route('libraries.index');
    }
    public function edit($id)
    {
        if (!Gate::allows('crud-libraries')) {
            abort(403);
        }
        $library = $this->libraryService->findById($id);
        return view('admin.libraries.edit',compact('library'));
    }
    public function update(Request $request,$id)
    {
        if (!Gate::allows('crud-libraries')) {
            abort(403);
        }
        $library = $this->libraryService->findById($id);
        $this->libraryService->update($request,$library);
        toastr()->success('Cập nhật thành công!');
        return redirect()->route('libraries.index');
    }
    public function destroy($id)
    {
        if (!Gate::allows('crud-libraries')) {
            abort(403);
        }
        $library = $this->libraryService->findById($id);
        $this->libraryService->delete($library);
        toastr()->success('Xóa thành công!');
        return redirect()->route('libraries.index');
    }
}
