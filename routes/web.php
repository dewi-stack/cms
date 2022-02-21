<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
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
 /* Praktikum 1

Route::get('/', function () {
    echo "Selamat Datang";
});

Route::get('about', function() {
    return view('welcome');
});

Route::get('articles/{id}', function($id) {
    echo "Ini adalah halaman Artikel dengan ID: ".$id;
});
*/

/* Praktikum 2
Route::get('/', [PageController::class,'index']);

Route::get('/about', [PageController::class,'about']);

Route::get('/articles/{id}', [PageController::class,'articles']);

Route::get('/', [HomeController::class,'index']);

Route::get('/about', [AboutController::class,'about']);

Route::get('/articles/{id}', [ArticleController::class,'articles']);

*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'project'], function()){
    Route::get('/', '')
}
