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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/super', function () {
    return view('admindashboard');
})->middleware(['auth'])->name('super');

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth'])->name('admin');

// Route::get('/hallo', function () {
//     return view('welcome');
// })->middleware(['auth'])->name('hallo');



require __DIR__.'/auth.php';
