<?php


namespace App\Repositories;


use App\Borrow;

class BorrowRepository extends BaseRepository
{
    protected $borrow;
    public function __construct(Borrow $borrow)
    {
        $this->borrow = $borrow;
    }
    public function getAll()
    {
        return $this->borrow->where('day_return', null)->get();
    }
    public function findById($id)
    {
        return $this->borrow->findOrFail($id);
    }
    public function getBorrowReturn()
    {
        return $this->borrow->where('day_return','<>', null)->get();
    }

}
