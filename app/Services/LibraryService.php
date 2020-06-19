<?php


namespace App\Services;


use App\Library;
use App\Repositories\LibraryRepository;

class LibraryService
{
    protected $libraryRepo;
    public function __construct(LibraryRepository $libraryRepo)
    {
        $this->libraryRepo = $libraryRepo;
    }
    public function getAll()
    {
        return $this->libraryRepo->getAll();
    }
    public function create($request)
    {
        $library = new Library();
        $library->name = $request->name;
        $library->address = $request->address;
        $library->phone = $request->phone;
        $file = $request->file('avatar');
        if ($file) {
            //upload img len server
            $path = $file->store('images', 'public');
            $library->avatar = $path;

        }
        $this->libraryRepo->save($library);
    }
    public function findById($id)
    {
        return $this->libraryRepo->findById($id);
    }
    public function delete($library)
    {
        $this->libraryRepo->delete($library);
    }
    public function update($request, $library)
    {
        $library->name = $request->name;
        $library->address = $request->address;
        $library->phone = $request->phone;
        $file = $request->file('avatar');
        if ($file) {
            //upload img len server
            $path = $file->store('images', 'public');
            $library->avatar = $path;

        }
        $this->libraryRepo->save($library);
    }
}
