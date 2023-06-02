<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\InteractiveSessionController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\UserAuthController;
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

Route::middleware(['redirect.prefix'])->get('/login', function () {
    return view('auth.login');
});


Route::get('/', function () {
    return view('frontend.index');
});
route::get('list', [UserAuthController::class, 'list'])->name('list');
Route::prefix('cms/')->middleware('guest:admin,trainer,student')->group(function () {
    route::get('{guard}/login', [UserAuthController::class, 'showLogin'])->name('view.login');
});
Route::prefix('cms/admin')->middleware(['auth:admin,student,trainer'])->group(function () {

    Route::resource('categories', CategoryController::class);
    Route::post('categories_update/{category}', [CategoryController::class, 'update'])->name('categories_update');

    Route::resource('courses', CourseController::class);
    Route::post('courses_update/{id}', [CourseController::class, 'update'])->name('courses_update');

    Route::resource('interactive_session', InteractiveSessionController::class);
    Route::post('interactive_session_update/{id}', [InteractiveSessionController::class, 'update'])->name('interactive_session_update');

    Route::resource('offers', OffersController::class);
    Route::post('offers_update/{id}', [OffersController::class, 'update'])->name('offers_update');

    Route::resource('trainers', TrainerController::class);
    Route::post('trainers_update/{id}', [TrainerController::class, 'update'])->name('trainers_update');

    Route::resource('students', StudentController::class);
    Route::post('students_update/{id}', [StudentController::class, 'update'])->name('students_update');
});
