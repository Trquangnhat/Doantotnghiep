<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccController;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\PostADcontroller;

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login_action', [AuthController::class, 'login_action']);
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register_action', [AuthController::class, 'register_action']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::post('upload/services', [UploadController::class, 'store']);
Route::middleware(['auth'])->group(function () {

  Route::prefix('admin')->group(function () {

    Route::get('/', [Controller::class, 'index'])->name('admin');
    Route::get('main', [Controller::class, 'index']);

    Route::prefix('accs')->group(function () {
      Route::get('add', [AccController::class, 'create']);
      Route::post('add', [AccController::class, 'store']);
      Route::get('list', [AccController::class, 'index']);
      Route::get('listAdmin', [AccController::class, 'index2']);
      Route::get('edit/{acc}', [AccController::class, 'show']);
      Route::post('edit/{acc}', [AccController::class, 'update']);
      Route::DELETE('destroy', [AccController::class, 'destroy']);
    });

    Route::prefix('menus')->group(function () {
      Route::get('add', [MenuController::class, 'create']);
      Route::post('add', [MenuController::class, 'store']);
      Route::get('list', [MenuController::class, 'index']);
      Route::get('edit/{menu}', [MenuController::class, 'show']);
      Route::post('edit/{menu}', [MenuController::class, 'update']);
      Route::DELETE('destroy', [MenuController::class, 'destroy']);
    });
    Route::prefix('posts')->group(function () {
      Route::get('daduyet', [PostADcontroller::class, 'index']);
      Route::get('chuaduyet', [PostADcontroller::class, 'index2']);
      Route::get('bikhoa', [PostADcontroller::class, 'index3']);
      Route::get('edit/{post}', [PostADcontroller::class, 'show']);
      Route::post('edit/{post}', [PostADcontroller::class, 'update']);
    });
  });
  Route::middleware(['auth'])->group(function () {

    Route::prefix('user')->group(function () {

      Route::get('/newfeed', [UserController::class, 'show']);
      Route::get('/profile', [UserController::class, 'index']);
      Route::get('/editprofile', [UserController::class, 'editprofile']);
      Route::post('/editprofile', [UserController::class, 'store']);
      Route::get('/post', [PostController::class, 'crpost']);
      Route::post('/post', [PostController::class, 'store']);
      Route::get('/listpost', [PostController::class, 'list']);
      Route::get('/detailpost/{post}', [PostController::class, 'detail']);
    });
  });
});
Route::get('/', [UserController::class, 'show'])->name('show');
