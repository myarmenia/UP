<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use  App\Http\Controllers\PermissionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Profile\ProfileController;
use App\Services\FileUploadService;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Models\Course\UserCourse;
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
Auth::routes(['verify'=>true]);
Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['auth', 'verified'],'prefix' => 'profile'], function() {
    Route::get('/', [ProfileController::class, 'index'])->name('profile');
    Route::get('/settings', [ProfileController::class, 'settings'])->name('profileSettings');
    Route::group(['prefix' => 'course'], function() {
    Route::get('/create_author', [ProfileController::class, 'createAuthor'])->name('createAuthor');
    Route::post('/create_author/store', [UserCourse::class, 'store'])->name('createAuthorStore');
    Route::get('/create_author_task', [ProfileController::class, 'createAuthorTask'])->name('createAuthorTask');
    Route::get('/create_author_lesson', [ProfileController::class, 'createAuthorLesson'])->name('createAuthorLesson');
    });
});


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('permissions', PermissionController::class);
});

Route::get('get_file',[FileUploadService::class,'get_file'])->name('get_file');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
