<?php

use App\Http\Controllers\productadd;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

//Route::get('/', function () {
   // return view('product');
//});
Route::get('/login', function () {
    return view('login');
});
Route::post("loginpost",[UserController::class,'login']);
Route::get("/",[ProductController::class,'index']);

Route::get('detail',[ProductController::class,'product']);
Route::get('register',[ProductController::class,'register']);
//Route::view('/register','register');
//Route::view('/login','login');


Route::get('login',[ProductController::class,'login']);
Route::post('registerpost',[ProductController::class,'registerpost'])->name('form.register');
//Route::post('/loginpost',[UserController::class,'login']);

/* Product add */
Route::get('/productadd',[productadd::class,'index']);
Route::post('/create',[productadd::class,'create'])->name('create');
Route::get('/read',[productadd::class,'read']);
Route::get('edit/{id}',[productadd::class,'edit']);
Route::post('update/{id}',[productadd::class,'update']);
Route::get('delete/{id}',[productadd::class,'delete']);





