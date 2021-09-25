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

Route::get('/', 'WebController@index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/managers', function () {
    return view('dashboard.manager');
})->name('manager');

Route::get('/guru', function () {
    return view('dashboard.guru');
})->name('guru');

Route::get('/siswa', function () {
    return view('dashboard.siswa');
})->name('siswa');

require __DIR__.'/auth.php';
