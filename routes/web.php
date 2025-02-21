<?php

use App\Http\Controllers\PostCommentController;
use Illuminate\Support\Facades\Route;
use App\Models\post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RecipeController;

Route::get('/', [PostController::class,"index"]);
Route::get('/recipe', [RecipeController::class,"index"]);
Route::get('/recipe/form', [RecipeController::class,"form"]);
Route::post('/create/recipe', [RecipeController::class,"create"]);
Route::post('/create/post', [PostController::class,"create"]);
Route::post('/create/postComment', [PostCommentController::class,"create"]);
