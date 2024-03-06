<?php

use App\Http\Controllers\Admincontroller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Route::get('/equipdata', function () {
    return view('equipdata');
})->name('equipdata');

Route::get('aboutyou', function () {
    return view('aboutyou');
})->name('aboutyou');

Route::get('edit', function () {
    return view('edit');
})->name('edit');

Route::fallback(function () {
    return "<h1>ไม่พบหน้าเว็บ</h1>";
});
Auth::routes();

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('admin', [Admincontroller::class, 'index'])->name('admin.index');
    Route::get('addeq', fn() => view('addeq'))->name('addeq');
    Route::post('store', [Admincontroller::class, 'store'])->name('admin.store');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('auth', fn() => (new User())->isAdmin() ? "TRUE" : "FALSE");
