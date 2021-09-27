<?php
use App\Http\Controllers\ArticleController;
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
    return view('auth.login');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Manager
Route::group(['prefix' =>'manager', 'as' => 'manager.'], function () {
    Route::get('/Article/index', [ArticleController::class, 'index'])->name('article.index');

    Route::view('/dashboard', 'dashboard.manager')->name('dashboard');
});
// Guru
Route::group(['prefix' =>'guru', 'as' => 'guru.'], function () {
    Route::get('/Article/index', [ArticleController::class, 'index'])->name('article.index');
    Route::view('/dashboard', 'dashboard.guru')->name('dashboard');
});

// Siswa
Route::group(['prefix' =>'siswa', 'as' => 'siswa.'], function () {
    Route::view('/dashboard', 'dashboard.siswa')->name('dashboard');
});

require __DIR__ . '/auth.php';
