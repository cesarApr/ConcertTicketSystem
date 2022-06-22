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

Auth::routes();

Route::group(['middleware' => ['auth']], function()
{
    /**
    * Logout Route
    */
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
});