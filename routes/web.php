<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});

Route::view('/register', 'register');
Route::view('/login', 'login');
Route::post('login',[UserController::class, 'login']);
Route::post('register',[UserController::class, 'register']);
Route::get('/',[ProductController::class, 'index']);
Route::get('detail/{id}',[ProductController::class, 'detail']);
Route::get('search',[ProductController::class, 'search']);
Route::post('add_to_cart',[ProductController::class, 'addToCart']);
Route::get('cartlist',[ProductController::class, 'cartList']);
Route::get('removecart/{id}',[ProductController::class, 'removeCart']);
Route::get('ordernow',[ProductController::class, 'orderNow']);
Route::post('orderplace',[ProductController::class, 'orderPlace']);
Route::get('myorder',[ProductController::class, 'myOrder']);
Route::post('/addproduct',[ProductController::class, 'addProduct']);
Route::view('/addproduct', 'addproduct');


