<?php

use App\Http\Controllers\Pagamentos\TesteController;
use App\Http\Controllers\GenericController;
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


Route::get('/', [GenericController::class, 'index']);
Route::get('/product', [GenericController::class, 'product']);
Route::get('/contact', [GenericController::class, 'contact']);
Route::get('/about', [GenericController::class, 'about']);
Route::get('/blog-single', [GenericController::class, 'blogsingle']);
Route::get('/blog', [GenericController::class, 'blog']);
Route::get('/checkout', [GenericController::class, 'checkout']);
Route::get('/faqs', [GenericController::class, 'faqs']);
Route::get('/help', [GenericController::class, 'help']);
Route::get('/payment', [GenericController::class, 'payment']);
Route::get('/privacy', [GenericController::class, 'privacy']);
Route::get('/product2', [GenericController::class, 'product2']);
Route::get('/single', [GenericController::class, 'single']);
Route::get('/single2', [GenericController::class, 'single2']);
Route::get('/terms', [GenericController::class, 'terms']);


Route::Post('/TestCon', [TesteController::class, 'Teste']);