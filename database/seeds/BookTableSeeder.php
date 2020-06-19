<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new \App\Book();
        $book->name = 'Được việc';
        $book->category_id = 1;
        $book->avatar = 'avar.png';
        $book->status = 1;
        $book->desc = 'Bí kíp làm nhân viên bình thường';
        $book->borrow = 1;
        $book->save();

        $book = new \App\Book();
        $book->name = 'Đắc nhân tâm';
        $book->category_id = 2;
        $book->avatar = 'avar.png';
        $book->status = 0;
        $book->desc = 'Hạt giống tâm hồn';
        $book->borrow = 0;
        $book->save();
    }
}
