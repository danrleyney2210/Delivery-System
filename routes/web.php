<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('index');

Route::get('/cardapio', function () {
    return view('cardapio');
})->name('cardapio');

Route::get('/pedidos', function () {
    return view('pedidos');
})->name('pedidos');


//Rota para tela de login
Route::get('/login', function () {
    return view('/login.login');
})->name('login');
//Rota para cadastro
Route::get('/register', function () {
    return view('/login.register');
})->name('register');
//Rota para página inicial Dahsboard
Route::get('/dashboard', function () {
    return view('system-delivery-adm.index');
})->name('dashboard');
