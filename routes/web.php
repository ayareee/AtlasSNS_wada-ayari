<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FollowsController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



require __DIR__ . '/auth.php';

Route::get('top', [PostsController::class, 'index']);
Route::post('top',[PostsController::class, 'index']);

Route::get('profile', [ProfileController::class, 'profile']);

Route::get('search', [UsersController::class, 'search']);

Route::get('logout', [AuthenticatedSessionController::class, 'logout']);
Route::post('logout', [AuthenticatedSessionController::class, 'logout']);

Route::get('follow-list', [FollowsController::class, 'followList']);
Route::post('follow-list/{userId}', [FollowsController::class, 'store']);

Route::get('follower-list', [FollowsController::class, 'followerList']);
Route::post('follow/{userId}/destroy', [FollowsController::class, 'destroy']);
