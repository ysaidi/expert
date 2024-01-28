<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test1', function () {
    return 'welcome';
});

// route with parameter how to pass
Route::get('/test2/{id}', function ($id) {
    return $id;
});

// route with parameter how to pass
Route::get('/test3/{id}', function ($id) {
    return $id;
}) -> name('a'); //we give this route a name to call it with this name

// route with parameter how to pass accept with para or without
Route::get('/test4/{id?}', function () {
    return 'welcome';
}) -> name('b');

//How to user the grouping and prefix

Route::group(['prefix' => 'users'],function(){
  Route::get('/',function(){
    return 'test grouping cocept';
  });

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
