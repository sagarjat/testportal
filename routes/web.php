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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::post('/submit', [App\Http\Controllers\HomeController::class, 'submit'])->name('home');


Auth::routes();

Route::get('/submitexam', function () {
    return view('submit');
});


Auth::routes();

Route::get('/view', [App\Http\Controllers\HomeController::class, 'getresult'])->name('home');

Auth::routes();

Route::get('/viewdetails/{id}', [App\Http\Controllers\HomeController::class, 'getresultdetails'])->name('home');


Auth::routes();

Route::get('/starttest', [App\Http\Controllers\HomeController::class, 'starttest'])->name('home');


Auth::routes();
Route::post('/participents', [App\Http\Controllers\HomeController::class, 'getAllUser'])->name('home');


Auth::routes();
Route::get('/participents', [App\Http\Controllers\HomeController::class, 'getAllUser'])->name('home');


Auth::routes();
Route::get('/instruction', function () {
    return view('instruction');
});