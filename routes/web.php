<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

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
    ]);
});

Route::get('/ticket', function() {
    return view('pages.ticket', [
    ]);
});

Route::get('/about', function() {
    return view('pages.about',[
    ]);
});

Route::get('/contact', function() {
    return view('pages.contact',[
    ]);
});

Route::get('/ticket/hololive', function() {
    return view('pages.product.hololive',[
    ]);
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.admin.dashboard');
     });
});

Route::get('/dashboard/create', function() {
    return view('pages.admin.add',[
    ]);
});

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'profile'])->name('profile');
Route::post('/store/{id}', [App\Http\Controllers\ProfileController::class, 'store'])->name('store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::post('/dashboard/create', [App\Http\Controllers\DashboardController::class, 'store'])->name('store');
Route::delete('/dashboard/destroy/{$id}', [App\Http\Controllers\DashboardController::class, 'destroy'])->name('destroy');
Route::get('/dashboard/edit/{$id}', [App\Http\Controllers\DashboardController::class, 'edit'])->name('edit');*/
Route::get('/dashboard/print_pdf', [App\Http\Controllers\DashboardController::class, 'print_pdf'])->name('print_pdf');

Route::resource('/dashboard', DashboardController::class);