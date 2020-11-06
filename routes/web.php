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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/oldwelcome', function () {
    return view('oldwelcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/uploads', function () {
    $file = request()->file('upload'); //->store('uploads');
    $ext = $file->guessClientExtension();
    $date = date('Y-m-d-H-i-s');
    $file->storeAs('uploads', $date . ".{$ext}");
    return back();
});

Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');

Route::get('/contact', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');
