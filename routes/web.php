<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WebController;

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

<<<<<<< HEAD
Route::get('/', 'WebController@index');
=======
Route::get('/', function () {
    $article = App\Models\Post::all();
    
    // dd($article);
    return view('home',compact('article'));
});
>>>>>>> 1b302f146d05c808eef05466e0c178787f8586ac
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/kurikulum', function () {
    return view('kurikulum');
});
Route::get('/kontakkami', function () {
    return view('kontakkami');
});
Route::get('/hubin', function () {
    return view('hubin');
});
Route::get('/artikel', function () {
    return view('artikel');
});
Route::get('/fotoguru', function () {
    return view('fotoguru');
});
Route::get('/sarpras', function () {
    return view('sarpras');
});
Route::get('/kesiswaan', function () {
    return view('kesiswaan');
});




// Manager
Route::group(['prefix' => 'manager', 'middleware' => ['auth:manager']], function () {
    // Route::get('/Article/index', [ArticleController::class, 'index'])-all>name('article.index');
    Route::post('/Article/post', [ArticleController::class, 'store'])->name('article.store');
    Route::get('/Article/edit/{id}', [ArticleController::class, 'edit'])->name('article.edit');
    Route::delete('/Article/delete/{id}', [ArticleController::class, 'delete'])->name('article.delete');
    Route::get('/dashboard', function () {
        $categories = App\Models\Category::all();
        $article = App\Models\Post::where('author_id',Auth::guard('manager')->id())->get();
        // dd($article);
        return view('dashboard.manager',compact('categories','article'));
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
