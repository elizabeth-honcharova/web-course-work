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

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'main']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/portfolio', [MainController::class, 'portfolio']);

Route::post('/send', [MainController::class, 'validate_form'])->name('send-msg');
