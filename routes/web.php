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


Route::get('/', function() {
    return view('pages.home', [
        "title" => "home"
    ]);
});

Route::get('/ticket', function() {
    return view('pages.ticket', [
        "title" => "ticket"
    ]);
});

Route::get('/about', function() {
    return view('pages.about',[
        "title" => "about"
    ]);
});

Route::get('/contact', function() {
    return view('pages.contact',[
        "title" => "contact"
    ]);
});

Route::get('/ticket/hololive', function() {
    return view('pages.product.hololive',[
        "title" => "hololive"
    ]);
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
     });
});

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'profile'])->name('profile');
Route::post('/upload', [App\Http\Controllers\ProfileController::class, 'upload'])->name('upload');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');