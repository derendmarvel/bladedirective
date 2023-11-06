<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\CampusController;
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

Route::get('/', [CampusController::class, 'index']);
Route::get('/campus/{id}', [CampusController::class, 'show']);
Route::get('/student', [StudentController::class, 'index']);
Route::get('/student/{nim}', [StudentController::class, 'show']);