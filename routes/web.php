<?php

use App\Http\Controllers\PorfolioController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('/home', [PorfolioController::class, 'index']);
Route::get('/resume', [PorfolioController::class, 'resume']);
Route::get('/projects', [PorfolioController::class, 'projects']);

Route::get('/contact', [PorfolioController::class, 'contact']);
Route::post('/contact', [PorfolioController::class, 'contactForm']);
