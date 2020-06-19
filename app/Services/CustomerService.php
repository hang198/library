<?php


namespace App\Services;


use App\Customer;
use App\Repositories\CustomerRepository;

class CustomerService
{
    protected $customerRepo;
    public function __construct(CustomerRepository $customerRepo)
    {
        $this->customerRepo = $customerRepo;
    }
    public function getAll()
    {
        return $this->customerRepo->getAll();
    }
    public function findById($id)
    {
        return $this->customerRepo->findById($id);
    }
    public function create($request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->codeID = $request->codeID;
        $customer->class = $request->class;
        $customer->dob = $request->dob;
        $this->customerRepo->save($customer);
    }
    public function update($request,$customer)
    {
        $customer->name = $request->name;
        $customer->codeID = $request->codeID;
        $customer->class = $request->class;
        $customer->dob = $request->dob;
        $this->customerRepo->save($customer);
    }
    public function delete($customer)
    {
        $this->customerRepo->delete($customer);
    }
}
