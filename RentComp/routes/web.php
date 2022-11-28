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

Route::get('/welcome', function () {
    return view('welcome',[
        "name" => "admin",
        "role" => "admin"
    ]);
});

Route::get('/', function () {
    return view('welcome',[
        "name" => "admin",
        "role" => "admin"
    ]);
});

Route::get('/peminjaman', function () {
    return view('peminjaman',[
        "id" => "1",
        "name" => "admin",
        "role" => "admin",
        "barang" => "resistor",
        "jumlah" => "10"
    ]);
});

Route::get('/stok', function () {
    return view('stok',[
        "id" => "1",
        "name" => "admin",
        "role" => "admin",
        "barang" => "resistor",
        "jumlah" => "10"
    ]);
});

Route::get('/dipinjam', function () {
    return view('dipinjam',[
        "id" => "1",
        "name" => "admin",
        "role" => "admin",
        "barang" => "resistor",
        "jumlah" => "10"
    ]);
});

Route::get('/history', function () {
    return view('history',[
        "name" => "admin",
        "role" => "admin"
    ]);
});