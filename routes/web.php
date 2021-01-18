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

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/postlogin', 'LoginController@postlogin');
Route::get('/signup', 'LoginController@signup');
Route::post('postsignup', 'LoginController@postsignup');
Route::get('/logout', 'LoginController@logout');



Route::group(['middleware' => ['auth','checkRole:admin']],function(){

    // Route::get('/', function () {
    //     return view('welcome');
    // });
    // Route::get('/dashboard', 'PagesController@index');

    // User
    Route::get('/user', 'UsersController@index');
    Route::get('/user/create', 'UsersController@create');
    // Route::get('/user/create/customer', 'UsersController@createCust');
    // Route::get('/user/create/pedagang', 'UsersController@createPedagang');
    Route::post('/user', 'UsersController@store');
    Route::post('/user/cust', 'UsersController@storeCust');
    Route::post('/user/pedagang', 'UsersController@storePedagang');
    
});

Route::group(['middleware' => ['auth','checkRole:admin,user']],function(){

    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/dashboard', 'PagesController@index');


    //Kategori Produk
    Route::get('/category', 'CategoriesController@index');
    Route::get('/category/create', 'CategoriesController@create');
    Route::post('/category', 'CategoriesController@store');

});