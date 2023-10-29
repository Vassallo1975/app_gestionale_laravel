<?php

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
    return view('welcome');
});
Route::get('/CIAO', function () {
    return view('dashboard');
});
Route::get('/boot', function () {
    return view('boot');
});
Route::get('/gestionale', function () {
    return view('gestionale');
});

Route::get('/products', function () {
    return view('gestionale');
})->name(name: 'products');
Route::get('/orders', function () {
    return view('boot');
})->name(name: 'orders');
Route::get('/customers', function () {
    return view('gestionale');
})->name(name: 'customers');