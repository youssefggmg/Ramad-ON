<?php

use Illuminate\Support\Facades\Route;
use App\Models\post;

Route::get('/', function () {
    return view('welcome');
});
