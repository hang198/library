<?php


namespace App\Repositories;


use App\Customer;

class CustomerRepository extends BaseRepository
{
    protected $customer;
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }
    public function getAll()
    {
        return $this->customer->all();
    }
    public function findById($id)
    {
        return $this->customer->findOrFail($id);
    }
}
