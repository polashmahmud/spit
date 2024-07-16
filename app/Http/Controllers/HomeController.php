<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;

class HomeController extends Controller
{
    public function __invoke()
    {
        return inertia()->render('Home', [
            'posts' => PostResource::collection(
                Post::latest()->paginate()
            )
        ]);
    }
}
