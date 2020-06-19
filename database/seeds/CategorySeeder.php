<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Category();
        $category->name = 'A';
        $category->save();

        $category = new \App\Category();
        $category->name = 'B';
        $category->save();

        $category = new \App\Category();
        $category->name = 'C';
        $category->save();
    }
}
