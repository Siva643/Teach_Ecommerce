<?php

use App\Http\Controllers\Slideradd;
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
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
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

Route::get('detail/{id}',[productadd::class,'detail']);

/* Add Slider */

Route::get('/slideradd',[Slideradd::class,'index']);
Route::post('/createslider',[Slideradd::class,'create'])->name('createslider');
Route::get('/readslider',[Slideradd::class,'read']);
Route::get('editslider/{id}',[Slideradd::class,'edit']);
Route::post('updateslider/{id}',[Slideradd::class,'update']);
Route::get('deleteslider/{id}',[Slideradd::class,'delete']);

/* cart */

Route::post('/add_to_cart',[ProductController::class,'addToCart']);
Route::get('cartlist',[ProductController::class,'cartList']);

/* search */

Route::get('search',[ProductController::class,'search']);

/* Remove cart */

Route::get('/removecart/{id}',[ProductController::class,'removeCart']);

/* Order now */

Route::get('/ordernow',[ProductController::class,'orderNow']);
Route::post('/orderplace',[ProductController::class,'orderPlace']);
Route::get('/myorders',[ProductController::class,'myOrders']);



