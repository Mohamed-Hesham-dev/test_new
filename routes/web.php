<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PostController;
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
    return view('webSite.index');
});
Route::post('/login', [LoginController::class, 'login'])->name('LoginStore');
Route::get('/authLogout', [LoginController::class, 'logout'])->name('authLogout');
Route::get('/index', function () {
    return view('welcome');
});
Route::resource('news', NewsController::class);
Route::resource('posts', PostController::class);
Route::resource('comments', CommentController::class);