<?php

use App\Http\Controllers\Homecontroller;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [Homecontroller::class, 'index']);
Route::get('/about', function () {
    return view('about');
});
Route::get('/computer', function () {
    return view('computer');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/laptop', function () {
    return view('laptop');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/product', function () {
    return view('product');
});