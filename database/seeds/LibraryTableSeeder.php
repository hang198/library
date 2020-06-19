<?php

use Illuminate\Database\Seeder;

class LibraryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $library = new \App\Library();
        $library->name = '01';
        $library->address = '1 hfjkd';
        $library->phone = '1456646646';
        $library->avatar = 'avar.png';
        $library->save();
        $library = new \App\Library();
        $library->name = '02';
        $library->address = '1 hfjkd';
        $library->phone = '1456646646';
        $library->avatar = 'avar.png';
        $library->save();
        $library = new \App\Library();
        $library->name = '03';
        $library->address = '1 hfjkd';
        $library->phone = '1456646646';
        $library->avatar = 'avar.png';
        $library->save();
        $library = new \App\Library();
        $library->name = '04';
        $library->address = '1 hfjkd';
        $library->phone = '1456646646';
        $library->avatar = 'avar.png';
        $library->save();
    }
}
