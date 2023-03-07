<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
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
    return view('welcome');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutUsController::class, 'about'])->name('about-us');
Route::get('/product', [ProductController::class, 'product'])->name('product');
Route::get('/program', [ProgramController::class, 'program'])->name('program');

// product
Route::prefix('/product')->group(function () {
    Route::get('/web', [ProductController::class, 'web']);
    Route::get('/seo', [ProductController::class, 'seo']);
    Route::get('/page', [ProductController::class, 'page']);
});
// program
Route::prefix('/program')->group(function () {
    Route::get('/seo-analysis', [ProgramController::class, 'seo_analysis']);
    Route::get('/website-reporting', [ProgramController::class, 'website_reporting']);
    Route::get('/performance-tests', [ProgramController::class, 'performance_tests']);
    Route::get('/data-analysis', [ProgramController::class, 'data_analysis']);
});

// News
Route::get('/news', [NewsController::class, 'kabar']);

// Contact-us
Route::resource('contact-us', ContactUsController::class);