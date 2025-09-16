<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;


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



Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/business', [PageController::class, 'business']);
Route::get('/vision', [PageController::class, 'vision']);
Route::get('/management', [PageController::class, 'management']);
Route::get('/resources', [PageController::class, 'resources']);
Route::get('/businessplan', [PageController::class, 'businessplan']);
Route::get('/clients', [PageController::class, 'clients']);
Route::get('/gallery', [PageController::class, 'gallery']);
Route::get('/contact', [PageController::class, 'contact']);
Route::post('/contact', [ContactController::class, 'send']);
