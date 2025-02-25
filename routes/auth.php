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

    Route::get('login', [RegisteredUserController::class, 'top']);
    Route::post('login', [RegisteredUserController::class, 'top']);

    Route::get('register', [RegisteredUserController::class, 'create']);
    Route::post('register', [RegisteredUserController::class, 'store']);


    Route::get('added', [RegisteredUserController::class, 'added']);
    Route::post('added', [RegisteredUserController::class, 'added']);

    Route::get('top',[RegisteredUserController::class,'index']);


    Route::group(['middleware' => ['loginUserCheck']], function() {
  //ここに実行したい処理を記述だが、どのように記述すれば良いのか分からない…




});

});
