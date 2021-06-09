<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Route fro Category
Route::get('category-list', 'CategoryController@categoryList')->name('categoryList');
Route::get('add-new-category', 'CategoryController@addNewCategory')->name('addNewCategory');
Route::post('create', 'CategoryController@saveCategory')->name('saveCategory');
