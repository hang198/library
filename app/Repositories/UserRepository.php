<?php


namespace App\Repositories;


use App\User;

class UserRepository extends BaseRepository
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getAll()
    {
        return $this->user->all();
    }

    public function findById($id)
    {
        return $this->user->findOrFail($id);
    }

    public function findByIdIntoTrash($id)
    {
        return $this->user->onlyTrashed()->find($id);
    }

    public function getUsersFromTrash()
    {
        return $this->user->onlyTrashed()->get();
    }

    public function forceDelete($user)
    {
        $user->forceDelete();
    }
}
