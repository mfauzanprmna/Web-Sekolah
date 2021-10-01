<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HubinController;
use App\Http\Controllers\WebController;
use App\Models\Alumni;
use App\Models\Jurusan;
use Illuminate\Support\Facades\App;

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
// Route::get('/',[WebController::class,'index']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/', 'WebController@index');
Route::get('/profile', 'WebController@profiletb');
Route::get('/artikel', function () {
    $settings = App\Models\Setting::all();
    $article = App\Models\Post::all();
    return view('artikel', compact('settings', 'article'));
});

Route::get('/kurikulum', function () {
    $settings = App\Models\Setting::all();
    return view('kurikulum', compact('settings'));
});
Route::get('/kontakkami', function () {
    $settings = App\Models\Setting::all();

    return view('kontakkami', compact('settings'));
});
Route::get('/hubin', [HubinController::class, 'index']);
// $settings = App\Models\Setting::all();
Route::get('/fotoguru', function () {
    $settings = App\Models\Setting::all();

    return view('fotoguru', compact('settings'));
});
Route::get('/sarpras', function () {
    $settings = App\Models\Setting::all();

    return view('sarpras', compact('settings'));
});
Route::get('/kesiswaan', function () {
    $settings = App\Models\Setting::all();

    return view('kesiswaan', compact('settings'));
});




// Manager
Route::group(['prefix' => 'manager', 'middleware' => ['auth:manager']], function () {
    // Route::get('/Article/index', [ArticleController::class, 'index'])-all>name('article.index');
    Route::get('/Article/tambah', [ArticleController::class, 'tambah'])->name('article.tambah');
    Route::post('/Article/post', [ArticleController::class, 'store'])->name('article.store');
    Route::get('/Article/edit/{id}', [ArticleController::class, 'edit'])->name('article.edit');
    Route::delete('/Article/delete/{id}', [ArticleController::class, 'delete'])->name('article.delete');
    Route::patch('/Article/update/{id}', [ArticleController::class, 'update'])->name('article.update');
    Route::get('/dashboard', function () {
        $article = App\Models\Post::where('author_id', Auth::guard('manager')->id())->get();
        // dd($article);
        return view('dashboard.dashboard', compact('article'));
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
        return view('dashboard.dashboard');
    })->name('dashboard.siswa');
});




require __DIR__ . '/auth.php';
