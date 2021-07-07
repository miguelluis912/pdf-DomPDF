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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('generate/pdf', [App\Http\Controllers\PDFController::class, 'generatePDF']);

Route::get('graph', [App\Http\Controllers\GraphPdfController::class, 'index']);
Route::get('download', [App\Http\Controllers\GraphPdfController::class, 'dwn'])->name('download');
