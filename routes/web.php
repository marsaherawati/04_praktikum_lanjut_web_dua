<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactUsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/product', [ProductController::class, 'index'])->name('product.index');

Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

Route::prefix('/program')->group(function () {
    Route::get('/', [ProgramController::class, 'index'])->name('program.index');
    Route::get('/{id}', [ProgramController::class, 'show'])->name('program.show');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::resource('contact-us', ContactUsController::class)->only([
    'index', 'store'
]);
