<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\CommentController;

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

Route::get('/home', [HomeController::class,'home'] );

Route::prefix('prodi')->group(function () {
    Route::get('/manajemen-informatika', [ProdiController::class,'prodi1'] );
    Route::get('/teknik-informatika', [ProdiController::class,'prodi2'] );
});

Route::get('/news/{id}', [NewsController::class,'news'] );

Route::prefix('sarana')->group(function () {
    Route::get('/perkantoran', [SaranaController::class,'sarana1'] );
    Route::get('/laboratorium', [SaranaController::class,'sarana2'] );
    Route::get('/kelas', [SaranaController::class,'sarana3'] );
    Route::get('/lainnya', [SaranaController::class,'sarana4'] );
});

Route::get('/about', [AboutusController::class,'about'] );

Route::get('/comment/{nama}/{pesan}', [CommentController::class,'comment'] );
