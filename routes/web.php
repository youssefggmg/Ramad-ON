<?php

use App\Http\Controllers\PostCommentController;
use Illuminate\Support\Facades\Route;
use App\Models\post;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class,"index"]);
Route::post('/create/post', [PostController::class,"create"]);
Route::post('/create/postComment', [PostCommentController::class,"create"]);
