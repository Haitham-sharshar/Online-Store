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








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Dashboard Routes
 Route::prefix('dashboard')->group(function(){
    Route::get('/','Dashboard\HomeController@index');
    Route::resource('categories','Dashboard\CategoryController');
    Route::resource('products','Dashboard\ProductController');
    Route::resource('orders','Dashboard\OrderController');
    Route::post('update-status','Dashboard\OrderController@updateStatus');
 });

Route::prefix('site')->group(function(){
    Route::get('/','HomeController@index');
});

// make new Role

Route::get('newRole',function(){
//    $owner = \App\Models\Role::create([
//        'name' => 'owner',
//        'display_name' => 'Project Owner', // optional
//        'description' => 'User is the owner of a given project', // optional
//    ]);

    $admin = \App\Models\Role::create([
        'name' => 'admin',
        'display_name' => 'User Administrator', // optional
        'description' => 'User is allowed to manage and edit other users', // optional
    ]);
    return back();
})->name('newRole');


Route::group(['middleware'=>['role:administrator']], function(){
    Route::resource('users','Dashboard/UserController');
    Route::resource('permission','Permission/UserController');
    Route::resource('roles','Dashboard/RolesController');
});