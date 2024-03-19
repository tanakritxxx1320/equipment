<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Middleware\Admin;
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
    return redirect()->route('login');
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
    return redirect()->route('login');
});
Auth::routes();

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('admin', [Admincontroller::class, 'index'])->name('admin.index');
    Route::get('addeq', [Admincontroller::class, 'addeq'])->name('admin.addeq');
    Route::post('store', [Admincontroller::class, 'store'])->name('admin.store');
    Route::get('delete',[Admincontroller::class, 'delete'])->name('admin.delete');
    //Route::get('edit/{id}', [Admincontroller::class,'edit'])->name('admin.edit');
    Route::post('update',[Admincontroller::class,'update'])->name('admin.update');
    Route::get('edit/{eq_code}', [Admincontroller::class,'edit'])->name('admin.edit');

});


Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::get('auth', fn() => (new User())->isAdmin() ? "TRUE" : "FALSE");
