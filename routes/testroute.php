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
/*
 to create new route you need to update the pages
 |app/Http/Kernel.php
 |app/Providers/RouteServiceProvider.php
 */
Route::get('/testroute', function () {
    return 'testroute welcome';
});



