<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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


Route::get('/Nama', function () {
    return ('hello semuanya');
});


Route::get('/Nama', function () {
    return view('Nama');
});

Route::view('/Nama', 'Nama', ['name' => 'hendrik']);

Route::get('/user', [UserController::class, 'index' ]);

Route::redirect('/Nama', '/sayhello', 301);

Route::get('/produk', function () {
    return "ini daftar prodak";
});

Route::get('/produk/{id}', function ($id) {
    return "ini adalah produk nomor".$id;
})->name("produk");

Route::get('/hello/{name}', function ($name) {
    return view ('home', ['name' => $name]);
})->name("nama-route");

Route::prefix("identitas")->group(function() {
    
    Route::get('nama', function () {
        return "Rizka ramadhani suparman";
    });
    Route::get('kelas', function () {
        return "XI - PPLG2";
    });
    Route::get('tempatlahir', function () {
        return "Depok";
    });
    Route::get('tanggallahir', function () {
        return "15 Oktober 2006";
    });
    Route::get('alamat', function () {
        return "JL.bdb Delima RT/01 RW/15";
    });
});

Route::post('/admin', function() {
    return view ('Admin/index');
});

Route::get('/Login', function () {
    return view('Auth/Login');
});