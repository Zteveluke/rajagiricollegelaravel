<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\BookController;

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

Route::get("/book", [BookController::class, 'create']);
Route::get("/bus", [BusController::class, 'create']);
Route::get("/student", [StudentController::class, 'create']);
Route::get("/", [FacultyController::class, 'create']);
Route::post("/facultyread", [FacultyController::class, 'store']);
Route::post("/studentread", [StudentController::class, 'store']);
Route::post("/busread", [BusController::class, 'store']);
Route::post("/bookread", [BookController::class, 'store']);