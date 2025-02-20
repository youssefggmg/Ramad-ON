<?php

use Illuminate\Support\Facades\Route;
use App\Models\post;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class,"index"]);
