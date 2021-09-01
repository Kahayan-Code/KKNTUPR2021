<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\OrgController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PotenController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;


Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);


Route::group(['middleware' => 'auth'], function () {
    Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
    Route::post('register', [AuthController::class, 'register']);

    Route::resource('posts', PostController::class);
    Route::resource('tags', TagController::class);
    Route::resource('orgs', OrgController::class);
    Route::resource('demos', DemoController::class);
    Route::resource('potens', PotenController::class);
    Route::resource('profiles', ProfileController::class);

    // Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
