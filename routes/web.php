<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use function Psy\debug;


Route::get('/', [PageController::class, "index"])->name('main-page');
Route::get('/teams', [PageController::class, 'teams'])->name('teams-search-page');
Route::get('/auth', [PageController::class, 'auth'])->name('auth-page');
Route::get('/registration', [PageController::class, 'registration'])->name('reg-page');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/profile/{id?}', [PageController::class, 'profile'])->name('profile-page');

Route::post('/auth', [UserController::class, 'auth'])->name('auth');
Route::post('/registration', [UserController::class, 'registration'])->name('registration');


Route::get('/debug', [AdminController::class, 'debug'])->name('debug');
