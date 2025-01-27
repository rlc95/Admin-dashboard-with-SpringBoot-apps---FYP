<?php

use App\Http\Controllers\Config\User\UserController;
use App\Http\Controllers\Config\Admin\AdminController;

use Illuminate\Support\Facades\Route;

/* == Start USER Component ==*/
//--Page route
Route::get('Users', [UserController::class, 'indexHome'])->name('user_homes');
Route::post('UserStore', [UserController::class, 'userStore'])->name('user_store');
//Route::get('SignUP', [AdminController::class, 'signUp'])->name('login');