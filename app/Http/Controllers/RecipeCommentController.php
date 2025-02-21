<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recipe_comment;

class RecipeCommentController extends Controller
{
    public function create(Request $request)
    {
        $validate = $request->validate(["content" => "required|string"]);
        recipe_comment::create([
            'recipe_id' => $request->Recipe_id,
            'content' => $request->content
        ]);
        return redirect()->back();
    }
}
