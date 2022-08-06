<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseUserController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\LessonUserController;
use App\Http\Controllers\ProgramUserController;
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
Route::resource('/lessons', LessonController::class)->only('show');
Route::resource('/programs', ProgramController::class)->only('show');
Route::group(['middleware' => 'auth'], function () {
    Route::resource('/course-user', CourseUserController::class)->only(['store'])->middleware('canJoin');
    Route::resource('/course-user', CourseUserController::class)->only(['destroy', 'update']);
    Route::resource('/reviews', ReviewController::class)->only(['store'])->middleware('canReview');
    Route::resource('/reviews', ReviewController::class)->only(['destroy', 'update']);
    Route::resource('/replies', ReplyController::class)->only(['store', 'destroy', 'update']);
    Route::resource('/profile', ProfileController::class)->only(['index', 'update']);
    Route::resource('/lesson-user', LessonUserController::class)->only('store')->middleware('IsLearnedLesson');
    Route::resource('/program-user', ProgramUserController::class)->only('store')->middleware('IsLearnedProgram');
});
