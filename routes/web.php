<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/login', [PageController::class, 'login']);

Route::get('/', [PageController::class, 'index']);
Route::get('/compare', [PageController::class, 'compare']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/element', [PageController::class, 'element']);

Route::get('/blog', [PageController::class, 'blog']);
Route::get('/blog2', [PageController::class, 'blog2']);
Route::get('/post', [PageController::class, 'post']);

Route::get('/product', [PageController::class, 'product']);
Route::get('/product2', [PageController::class, 'product2']);

Route::get('/cart', [PageController::class, 'cart']);
Route::get('/wishlist', [PageController::class, 'wishlist']);

Route::get('/catalog-list', [PageController::class, 'cataloglist']);
Route::get('/catalog-gallery', [PageController::class, 'cataloggallery']);
Route::get('/catalog-table', [PageController::class, 'catalogtable']);
