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

Route::get('/login', function () {
    return view('login');
});



Route::get('/category/create','CategoryController@create')->name('category.create');
Route::post('/category','CategoryController@store')->name('category.store');
Route::get('/category/index','CategoryController@index')->name('category.index');


Route::get('/movie/create','MovieController@create')->name('movie.create');
Route::post('/movie','MovieController@store')->name('movie.store');
Route::get('/movie/index','MovieController@index')->name('movie.index');
Route::get('/movie/{id}','MovieController@show')->name('movie.show');



Route::get('/home','MovieController@home')->name('home');


//php artisan route: --list
//php artisan make:controller StudentController --resource

