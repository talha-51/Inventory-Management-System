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

Route::get('/', 'LoginController@index')->name('login.index');
Route::post('/', 'LoginController@verifyUser')->name('login.verifyUser');

Route::get('/logout', 'LoginController@logout')->name('login.logout');



Route::middleware('userSess')->group(function () {

    Route::get('/user/home', 'UserController@index')->name('user.index');

    Route::get('/user/userList', 'UserController@userList')->name('user.userList');

    Route::get('/user/addUser', 'UserController@addUser')->name('user.addUser');
    Route::post('/user/addUser', 'UserController@verifyNewUser')->name('user.verifyNewUser');

    Route::get('/user/deleteUser/{id}', 'UserController@deleteUser')->name('user.deleteUser');



    Route::get('/product/productList', 'ProductController@productList')->name('product.productList');

    Route::get('/product/addProduct', 'ProductController@addProduct')->name('product.addProduct');
    Route::post('/product/addProduct', 'ProductController@insertProduct')->name('product.insertProduct');

    Route::get('/product/editProduct/{id}', 'ProductController@editProduct')->name('product.editProduct');
    Route::post('/product/editProduct/{id}', 'ProductController@updateProduct')->name('product.updateProduct');

    Route::get('/product/deleteProduct/{id}', 'ProductController@deleteProduct')->name('product.deleteProduct');
});
