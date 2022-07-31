<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseUserController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ReplyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index']);
Route::resource('/course', CourseController::class)->only(['index', 'show']);
Route::resource('/course-user', CourseUserController::class)->only(['store', 'destroy']);
Route::resource('/review', ReviewController::class)->only(['store', 'destroy']);
Route::resource('/reply', ReplyController::class)->only(['store', 'destroy']);
