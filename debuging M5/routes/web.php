<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\M5Controller;

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
    return view('layouts_m5.home-before');
});
// Route::resource('/layouts_m5', M5Controller::class);

Route::get('/register', function () {
    return view('register');
});

Route::get('/layouts_m5/login', function () {
    return view('layouts_m5.login');
});
Route::get('/layouts_m5/home-after', function () {
    return view('layouts_m5.home-after');
});
Route::get('/layouts_m5/add', function () {
    return view('layouts_m5.add');
});
Route::get('/layouts_m5/profil', function () {
    return view('layouts_m5.profil');
});
Route::get('/layouts_m5/list-car', function () {
    $mobil = DB::select('showrooms')->get();
    return view('layouts_m5.profil', ['mobil' => $mobil]);
});
Route::get('/layouts_m5/edit', function () {
    return view('layouts_m5.edit');
});
Route::get('/layouts_m5/detail', function () {
    return view('layouts_m5.detail');
});
// Route::resource('layouts_m5', M5Controller::class);
Route::get('/layouts_m5', 'App\Http\Controllers\M5Controller@create');
Route::post('/layouts_m5', 'App\Http\Controllers\M5Controller@store');
