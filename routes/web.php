<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('template', function () {
    return view('template');
});
Route::get('siswa', [SiswaController::class, 'index']);
Route::get('tambahsiswa', [SiswaController::class, 'create']);
Route::get('tambahsiswa', [SiswaController::class, 'store']);

Route::resource('siswa', SiswaController::class);
Auth::routes();

/* Route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*Route::get('/comment',function () {
  return view('comment');
});

 //Middleware 
Route::middleware(['auth'])->group(function () {
    //Route::get('/comments', [App\Http\Controllers\CommentController::class, 'index'])->name('comments.index');
    //Route::post('/comments', [App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');
    //Route::put('/comments/{comment}', [App\Http\Controllers\CommentController::class, 'update'])->name('comments.update');
    //Route::delete('/comments/{comment}', [App\Http\Controllers\CommentController::class, 'destroy'])->name('comments.destroy');
});*/



use App\Http\Controllers\UserController;

Route::get('/landing', [UserController::class, 'index'])->middleware('auth')->name('landing');
