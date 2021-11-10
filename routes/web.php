<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ProductController, UserController};




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
    return view('auth.login');
});

Route::get('/ingreso', [UserController ::class, 'login'])->name('login.index');
Route::get('/register', [UserControllerroller ::class, 'register'])->name('register.index');
Route::get('/products',[ProductController::class,'index'])->name('products.index');