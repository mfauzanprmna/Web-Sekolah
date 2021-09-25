<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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




// Manager
Route::group(['prefix' => 'manager', 'middleware' => ['auth:manager']], function () {
    Route::get('/Article/index', [ArticleController::class, 'index'])->name('article.index');
    Route::get('/dashboard', function () {
        return view('dashboard.manager');
    })->name('dashboard.manager');
});
// Guru
Route::group(['prefix' => 'guru', 'middleware' => ['auth:guru']], function () {
    Route::get('/Article/index', [ArticleController::class, 'index'])->name('article.index');

    Route::get('/dashboard', function () {
        return view('dashboard.guru');
    })->name('dashboard.guru');
});

// Siswa
Route::group(['prefix' => 'siswa', 'middleware' => ['auth:siswa']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard.siswa');
    })->name('dashboard.siswa');
});




require __DIR__ . '/auth.php';
