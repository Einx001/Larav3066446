<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\ProfileController;

Route::get('category/create', [CategoryController::class, 'create']);
Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');

Route::get('user/create', [UserController::class, 'create']);
Route::post('user/store', [UserController::class, 'store'])->name('user.store');

Route::get('post/create', [PostController::class, 'create']);
Route::post('post/store', [PostController::class, 'store'])->name('post.store');

Route::get('roles/store', [RolesController::class, 'store']);
Route::post('roles/store', [RolesController::class, 'store'])->name('roles.store');

Route::get('profiles/store', [ProfileController::class, 'store']);
Route::post('profiles/store', [ProfileController::class, 'store'])->name('profiles.store');