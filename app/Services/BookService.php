<?php


namespace App\Services;


use App\Book;
use App\Repositories\BookRepository;

class BookService
{
    protected $bookRepo;
    public function __construct(BookRepository $bookRepo)
    {
        $this->bookRepo = $bookRepo;
    }
    public function getAll()
    {
        return $this->bookRepo->getAll();
    }
    public function getBookNotBorrow()
    {
        return $this->bookRepo->getBookNotBorrow();
    }
    public function create($request)
    {
        $book = new Book();
        $book->name = $request->name;
        $book->category_id = $request->category_id;
        $file = $request->file('avatar');
        if ($file) {
            $path = $file->store('images', 'public');
            $book->avatar = $path;

        }        $book->status = $request->status;
        $book->desc = $request->desc;
        $this->bookRepo->save($book);
    }
    public function findById($id)
    {
        return $this->bookRepo->findById($id);
    }
    public function update($request,$book)
    {
        $book->name = $request->name;
        $book->category_id = $request->category_id;
        $file = $request->file('avatar');
        if ($file) {
            $path = $file->store('images', 'public');
            $book->avatar = $path;

        }        $book->status = $request->status;
        $book->desc = $request->desc;
        $this->bookRepo->save($book);
    }
    public function delete($book)
    {
        $this->bookRepo->delete($book);
    }
}
