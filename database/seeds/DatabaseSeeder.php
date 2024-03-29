<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(LibraryTableSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(BookTableSeeder::class);
        $this->call(CustomerTableSeeder::class);
    }
}
