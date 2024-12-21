<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//user controller routes
Route::get('/', [UserController::class,"showCorrectHomepage"]);
Route::post('/register', [UserController::class, "register"]);
Route::post('/login', [UserController::class, "login"]);
Route::post('/logout', [UserController::class, "logout"]);

//blogpost
Route::get('/create-post', [PostController::class, 'showCreateForm']);
Route::post('/create-post', [PostController::class, 'storeNewPost']);
Route::get('/post/{post}', [PostController::class, 'viewSinglePost']);
