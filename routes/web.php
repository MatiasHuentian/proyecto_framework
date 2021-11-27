<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ProductController, UserController , PageController};




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

// Route::get('/home' , [PageController::class , 'index'] );

Route::get('/', [UserController ::class, 'login' ] );
// Route::get('/login', [UserController ::class, 'login' ]);
// Route::post('/login_user', [UserController ::class, 'user_login' ]);
// Route::get('/register', [UserController ::class, 'register' ]);
// Route::post('/register_user', [UserController ::class, 'user_register' ]);

Route::get('/productos',[ProductController::class,'index' ]);
Route::get('/productos/editar',[ProductController::class,'edit' ]);
Route::post('/productos/actualizar',[ProductController::class,'update' ]);
Route::get('/productos/create',[ProductController::class,'create' ]);
Route::post('/productos/store' , [ ProductController::class,'store' ] );

Route::post('/productos/subir_bajar' , [ ProductController::class,'subir_bajar' ] );

Route::post('/productos/delete' , [ ProductController::class,'delete' ] );
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
