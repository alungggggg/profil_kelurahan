<?php

use App\Models\Article;
use App\Models\feedback;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\lkkController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\umkmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\fkController;
use App\Http\Controllers\guestController;

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

Route::get('/', [guestController::class, 'home'])->name('home');
Route::get('/lembaga', [guestController::class,'lembaga']);

// login admin
Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'loginView')->middleware('guest');
    // Route::post('/login', 'login')->middleware('throttle:login');
    Route::post('/login', 'login');
    Route::get('/logout', 'logout');
});

// menu admin
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    //profil
    Route::get('/profil', function () {
        return view('profil');
    });

    //pelayanan
    Route::get('/pelayanan', function () {
        return view('pelayanan');
    });

    // article
    Route::get('article', [ArticleController::class, 'show']);
    Route::get('/article/add', [ArticleController::class, 'addView']);
    Route::post('/article/add', [ArticleController::class, 'add']);
    Route::get('/article/{id}', [ArticleController::class, 'detail']);
    Route::get('/article/update/{id}', [ArticleController::class, 'updateView']);
    Route::put('/article/update/{id}', [ArticleController::class, 'update']);


    // umkm
    Route::get('/umkm', [umkmController::class, 'show']);
    Route::get('/umkm/add', function () {
        return view('umkm.add');
    });
    Route::post('/umkm/add', [umkmController::class, 'add']);
    Route::get('umkm/update/{id}', [umkmController::class, 'updateView']);
    Route::put('umkm/update/{id}', [umkmController::class, 'update']);
    Route::get('umkm/delete/{id}', [umkmController::class, 'delete']);

    // lkk
    Route::get('/lkk', [lkkController::class, 'show']);
    Route::get('/lkk/add', function () {
        return view('lkk.add');
    });
    Route::post('/lkk/add', [lkkController::class, 'add']);
    Route::get('/lkk/update/{id}', [lkkController::class, 'updateView']);
    Route::put('/lkk/update/{id}', [lkkController::class, 'update']);
    Route::get('/lkk/delete/{id}', [lkkController::class, 'delete']);

    // fk belum
    Route::get('/fk', [fkController::class, 'show']);
    Route::get('/fk/add', function () {
        return view('fk.add');
    });
    Route::post('/fk/add', [fkController::class, 'add']);
    Route::get('/fk/update/{id}', [fkController::class, 'updateView']);
    Route::put('/fk/update/{id}', [fkController::class, 'update']);
    Route::get('/fk/delete/{id}', [fkController::class, 'delete']);

    // user
    Route::get('/user', [userController::class, 'show']);
    Route::get('/user/add', [UserController::class, 'addView']);
    Route::post('/user/add', [userController::class, 'add']);
    Route::get('/user/update/{id}', [userController::class, 'updateView']);
    Route::put('/user/update/{id}', [userController::class, 'update']);
    Route::get('/user/delete/{id}', [userController::class, 'delete']);

    Route::get('/test', function () {
        dd(Auth::user()->lkk_id);
    });
});

Route::get('/testfeed', function () {
    return view('testfeed');
});
Route::post('/feedback', [FeedController::class, 'add'])->middleware('throttle:feedback');