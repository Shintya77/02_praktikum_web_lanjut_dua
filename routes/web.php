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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);
Route::get('/article', [ArticleController::class, 'article']);

// Route::get('/', function(){
//     echo "Selamat Datang";
// });

// Route::get('/about', function(){
//     echo "Shintya Rahmawati--2041720088";
// });

// Route::get('/articles/{id}', function($id){
//     echo "Halaman artikel dengan ID : ".$id;
// });

// Route::get('/', function () {
//     return view('welcome');
// });
