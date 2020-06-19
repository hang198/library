<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer();
        $customer->name = 'Ha';
        $customer->codeID = 'C00001';
        $customer->class = 'A1';
        $customer->dob = '1998-03-09';
        $customer->save();

        $customer = new Customer();
        $customer->name = 'Ha';
        $customer->codeID = 'C00002';
        $customer->class = 'A2';
        $customer->dob = '1997-05-01';
        $customer->save();

        $customer = new Customer();
        $customer->name = 'Ha';
        $customer->codeID = 'C00003';
        $customer->class = 'A3';
        $customer->dob = '1991-11-01';
        $customer->save();
    }
}
