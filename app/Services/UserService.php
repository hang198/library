<?php


namespace App\Services;


use App\Repositories\UserRepository;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    protected $userRepo;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function getAll()
    {
        return $this->userRepo->getAll();
    }

    public function create($request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->role = $request->role;
        $this->userRepo->save($user);
    }

    public function findById($id)
    {
        return $this->userRepo->findById($id);
    }
    public function update($request,$user)
    {
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->role = $request->role;
        $this->userRepo->save($user);
    }
    public function delete($user)
    {
        $this->userRepo->delete($user);
    }
    public function restore($user)
    {
        $this->userRepo->restore($user);
    }
    public function findByIdIntoTrash($id)
    {
        return $this->userRepo->findByIdIntoTrash($id);
    }
    public function getUsersFromTrash()
    {
        return $this->userRepo->getUsersFromTrash();
    }
    public function forceDelete($user)
    {
        $this->userRepo->forceDelete($user);
    }

}
