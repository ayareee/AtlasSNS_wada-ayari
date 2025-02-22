<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FollowsController;

use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    Route::get('login', [AuthenticatedSessionController::class, 'create']);
    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('register', [RegisteredUserController::class, 'create']);
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('added', [RegisteredUserController::class, 'added']);
    Route::post('added', [RegisteredUserController::class, 'added']);

    Route::get('top',[RegisteredUserController::class,'index']);

    Route::get('follow-list', [FollowsController::class, 'followList']);
    Route::post('follow-list/{userId}', [FollowsController::class, 'store']);

    Route::get('follower-list', [FollowsController::class, 'followerList']);
    Route::post('follow/{userId}/destroy', [FollowsController::class, 'destroy']);

    Route::get('logout', [AuthenticatedSessionController::class, 'logout']);

    Route::group(['middleware' => ['loginUserCheck']], function() {
  //ここに実行したい処理を記述だが、どのように記述すれば良いのか分からない…




});

});
