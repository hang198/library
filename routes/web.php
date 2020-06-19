<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('admin');
})->middleware('auth');

Auth::routes();

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::prefix('users')->group(function () {
        Route::get('/', 'UserController@index')->name('users.index');
        Route::get('/trash', 'UserController@getTrash')->name('users.trash');
        Route::get('/create', 'UserController@create')->name('users.create');
        Route::post('/create', 'UserController@store')->name('users.store');
        Route::get('/{id}/edit', 'UserController@edit')->name('users.edit');
        Route::post('/{id}/update', 'UserController@update')->name('users.update');
        Route::get('/{id}/delete', 'UserController@destroy')->name('users.destroy');
        Route::get('/{id}/restore', 'UserController@restore')->name('users.restore');
        Route::get('/{id}/forceDelete', 'UserController@forceDelete')->name('users.forceDelete');
    });

    Route::prefix('libraries')->group(function () {
        Route::get('/', 'LibraryController@index')->name('libraries.index');
        Route::get('/create', 'LibraryController@create')->name('libraries.create');
        Route::post('/create', 'LibraryController@store')->name('libraries.store');
        Route::get('/{id}/edit', 'LibraryController@edit')->name('libraries.edit');
        Route::post('/{id}/update', 'LibraryController@update')->name('libraries.update');
        Route::get('/{id}/delete', 'LibraryController@destroy')->name('libraries.destroy');
    });

    Route::prefix('books')->group(function () {
        Route::get('/', 'BookController@index')->name('books.index');
        Route::get('/create', 'BookController@create')->name('books.create');
        Route::post('/create', 'BookController@store')->name('books.store');
        Route::get('/{id}/edit', 'BookController@edit')->name('books.edit');
        Route::get('/{id}/update', 'BookController@update')->name('books.update');
        Route::get('/{id}/delete', 'BookController@destroy')->name('books.destroy');
        Route::get('/{id}/', 'BookController@getBook')->name('customers.showBook');

    });

    Route::prefix('categories')->group(function () {
        Route::get('/', 'CategoryController@index')->name('categories.index');
        Route::get('/create', 'CategoryController@create')->name('categories.create');
        Route::post('/create', 'CategoryController@store')->name('categories.store');
        Route::get('/{id}/edit', 'CategoryController@edit')->name('categories.edit');
        Route::post('/{id}/update', 'CategoryController@update')->name('categories.update');
        Route::get('/{id}/delete', 'CategoryController@destroy')->name('categories.destroy');
    });

    Route::prefix('customers')->group(function () {
        Route::get('/', 'CustomerController@index')->name('customers.index');
        Route::get('/create', 'CustomerController@create')->name('customers.create');
        Route::post('/create', 'CustomerController@store')->name('customers.store');
        Route::get('/{id}/edit', 'CustomerController@edit')->name('customers.edit');
        Route::post('/{id}/update', 'CustomerController@update')->name('customers.update');
        Route::get('/{id}/delete', 'CustomerController@destroy')->name('customers.destroy');
        Route::get('/{id}', 'CustomerController@showCustomer')->name('customers.showCustomer');
    });

    Route::prefix('borrows')->group(function () {
        Route::get('/', 'BorrowController@index')->name('borrows.index');
        Route::get('/return', 'BorrowController@returnList')->name('borrows.return');
        Route::get('/create', 'BorrowController@create')->name('borrows.create');
        Route::post('/store', 'BorrowController@store')->name('borrows.store');
        Route::get('/{id}/update', 'BorrowController@update')->name('borrows.update');
        Route::get('/searchCustomer', 'BorrowController@searchCustomer');
        Route::get('/searchBook', 'BorrowController@searchBook');
    });
});
