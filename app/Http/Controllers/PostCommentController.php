<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post_comment;

class PostCommentController extends Controller
{
    public function create(Request $request)
    {
        $validate = $request->validate(["content" => "required|string"]);
        post_comment::create([
            'post_id' => $request->Post_id,
            'content' => $request->content
        ]);
        return redirect()->back();
    }
}
