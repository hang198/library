<?php


namespace App\Repositories;


use App\Book;

class BookRepository extends BaseRepository
{
    protected $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    public function getAll()
    {
        return $this->book->all();
    }

    public function getBookNotBorrow()
    {
        return $this->book->where('borrow','0')->get();
    }

    public function findById($id)
    {
        return $this->book->findOrFail($id);
    }
}
