<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseUserController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\ProfileController;
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
Route::resource('/courses', CourseController::class)->only(['index', 'show']);
Route::group(['middleware' => 'auth'], function () {
    Route::resource('/course-user', CourseUserController::class)->only(['store'])->middleware('canJoin');
    Route::resource('/course-user', CourseUserController::class)->only(['destroy', 'update']);
    Route::resource('/reviews', ReviewController::class)->only(['store'])->middleware('canReview');
    Route::resource('/reviews', ReviewController::class)->only(['destroy', 'update']);
    Route::resource('/replies', ReplyController::class)->only(['store', 'destroy', 'update']);
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
});
