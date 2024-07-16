<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ReactionController extends Controller
{
    public function __invoke(Post $post, Request $request)
    {
        $post->toggleReaction($request->reaction);
    }
}
