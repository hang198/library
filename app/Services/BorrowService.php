<?php


namespace App\Services;


use App\Repositories\BorrowRepository;

class BorrowService
{
    protected $borrowRepo;
    public function __construct(BorrowRepository $borrowRepository)
    {
        $this->borrowRepo = $borrowRepository;
    }
    public function getAll()
    {
        return $this->borrowRepo->getAll();
    }
    public function findById($id)
    {
        return $this->borrowRepo->findById($id);
    }
    public function update($borrow)
    {
        $borrow->day_return = date('Y-m-d');
        $this->borrowRepo->save($borrow);
    }
    public function getBorrowReturn()
    {
        return $this->borrowRepo->getBorrowReturn();
    }

}
