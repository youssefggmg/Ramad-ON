<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recipe;
use App\Models\catigorie;

class RecipeController extends Controller
{
    public function index(){
        $recipes = recipe::with("comments")->get();
        return view('recipes', compact('recipes'));
    }
    public function form(){
        $catigorys = catigorie::all();
        return view('recipeForm', compact("catigorys"));
    }
    public function create(Request $request){
        $Validation = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
        ]);
        recipe::create([
            'title' => $request->input('title'),
            'description' => $request->input('content'),
            'catigorie_id' => $request->input('category'),
        ]);
        return redirect("/recipe");
    }
}
