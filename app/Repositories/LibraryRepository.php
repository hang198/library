<?php


namespace App\Repositories;


use App\Library;

class LibraryRepository extends BaseRepository
{
    protected $library;
    public function __construct(Library $library)
    {
        $this->library = $library;
    }
    public function getAll()
    {
        return $this->library->all();
    }
    public function findById($id)
    {
        return $this->library->findOrFail($id);
    }


}
