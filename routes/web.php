<?php

use App\Http\Controllers\WebsiteController;
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

Route::get('/', [WebsiteController::class, 'home']);

Route::get('/about', [WebsiteController::class, 'about']);

Route::get('/contact', [WebsiteController::class, 'contact']);

Route::get('/menu', [WebsiteController::class, 'menu']);

Route::get('/booking', [WebsiteController::class, 'booking']);
