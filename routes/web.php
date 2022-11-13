<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
// About Route
Route::get('/', [PagesController::class, 'index']);
Route::get('/blog', [PagesController::class, 'about']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/authors', [PagesController::class, 'authors']);
// Category Routes
Route::get('/category/world', [PagesController::class, 'world']);
Route::get('/category/sports', [PagesController::class, 'sports']);
Route::get('/category/technology', [PagesController::class, 'technology']);
Route::get('/category/design', [PagesController::class, 'design']);
Route::get('/category/culture', [PagesController::class, 'culture']);
Route::get('/category/business', [PagesController::class, 'business']);
Route::get('/category/politics', [PagesController::class, 'politics']);
Route::get('/category/opinion', [PagesController::class, 'opinion']);
Route::get('/category/health', [PagesController::class, 'health']);
Route::get('/category/travel', [PagesController::class, 'travel']);
Route::get('/category/science', [PagesController::class, 'science']);




// Route::get('/users/{id}/{name}',function($id,$name){
//     return 'This is user '.$name .' with id '.$id;
// });

Route::resource('posts', 'App\Http\Controllers\PostController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
