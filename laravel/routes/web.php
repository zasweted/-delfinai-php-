<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NiceController as N;
use App\Http\Controllers\BlogController as B;

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

Route::get('/eziukas', fn() => '<h1>EZIUKAS<h1>');
Route::get('/bebras', function () {return '<h1>BEBRAS<h1>';});

Route::get('/fun/{kiek}/{abc?}', [N::class, 'fun']);

Route::get('/suma', [N::class, 'showForm'])->name('form');
Route::post('/suma', [N::class, 'doForm'])->name('calculate');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('blog')->group(function () {
    Route::get('/', [B::class, 'index'])->name('index');
    Route::get('/create', [B::class, 'create'])->name('create');
    Route::post('/create', [B::class, 'store'])->name('store');
});