<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Http\Requests\CreateUserRequest;
use App\Imports\UsersImport;
use App\Repositories\UserRepository;
use App\Services\UserService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'test.xlsx');
    }

    public function import()
    {
        Excel::import(new UsersImport, request()->file('file'));

        return back();
    }

    public function index()
    {
        if (!Gate::allows('crud-users')) {
            abort(403);
        }
        $users = $this->userService->getAll();
        return view('admin.users.list', compact('users'));
    }

    public function create()
    {
        if (!Gate::allows('crud-users')) {
            abort(403);
        }
        return view('admin.users.create');
    }

    public function store(CreateUserRequest $request)
    {
        if (!Gate::allows('crud-users')) {
            abort(403);
        }
        $this->userService->create($request);
        toastr()->success('Thêm thành công!');
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        if (!Gate::allows('crud-users')) {
            abort(403);
        }

        $user = $this->userService->findById($id);

        if ($user->id == 1) {
            abort(403);
        }

        if ($user->id == Auth::id()) {
            abort(403);
        }

        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        if (!Gate::allows('crud-users')) {
            abort(403);
        }
        $user = $this->userService->findById($id);

        if ($user->id == 1) {
            abort(403);
        }

        if ($user->id == Auth::id()) {
            abort(403);
        }

        $this->userService->update($request, $user);
        toastr()->success('Cập nhật thành công!');
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        if (!Gate::allows('crud-users')) {
            abort(403);
        }
        $user = $this->userService->findById($id);

        if ($user->id == 1) {
            abort(403);
        }

        if ($user->id == Auth::id()) {
            abort(403);
        }
        $this->userService->delete($user);
        toastr()->success('Xóa thành công!');
        return redirect()->route('users.index');
    }

    public function restore($id)
    {
        if (!Gate::allows('crud-users')) {
            abort(403);
        }
        $user = $this->userService->findByIdIntoTrash($id);
        $this->userService->restore($user);
        toastr()->success('Phục hồi thành công!');
        return redirect()->route('users.trash');
    }

    public function getTrash()
    {
        if (!Gate::allows('crud-users')) {
            abort(403);
        }
        $usersOfTrash = $this->userService->getUsersFromTrash();
        return view('admin.users.trash', compact('usersOfTrash'));
    }

    public function forceDelete($id)
    {
        if (!Gate::allows('crud-users')) {
            abort(403);
        }
        $userOfForce = $this->userService->findByIdIntoTrash($id);
        $this->userService->forceDelete($userOfForce);
        toastr()->success('Xóa vĩnh viễn thành công!');
        return redirect()->route('users.trash');
    }

}
