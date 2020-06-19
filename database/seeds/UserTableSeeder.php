<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'hang';
        $user->phone = '1345678';
        $user->email  = 'hang@gmail.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('12345678');
        $user->address = 'hn';
        $user->avatar = 'fghjk';
        $user->role = \App\Http\Controllers\RoleConstant::ADMIN;
        $user->save();

        $user = new \App\User();
        $user->name = 'minh';
        $user->phone = '1345678';
        $user->email  = 'minh@gmail.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('12345678');
        $user->address = 'hd';
        $user->avatar = 'fghjk';
        $user->role = \App\Http\Controllers\RoleConstant::MANAGEMENT;
        $user->save();

        $user = new \App\User();
        $user->name = 'ha';
        $user->phone = '1345678';
        $user->email  = 'ha@gmail.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('12345678') ;
        $user->address = 'hn';
        $user->avatar = 'fghjk';
        $user->role = \App\Http\Controllers\RoleConstant::ADMIN;
        $user->save();
    }
}
