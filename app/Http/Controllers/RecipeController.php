<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recipe;

class RecipeController extends Controller
{
    public function index(){
        $recipes = recipe::with("comments")->get();
        return view('recipes', compact('recipes'));
    }
}
