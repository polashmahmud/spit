<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
           'image' => ['required', 'image'],
            'description' => ['nullable', 'string', 'max:255'],
        ]);

        $request->user()->posts()->create([
            'image' => $request->file('image')->store('posts', 'public'),
            'description' => $request->description,
            'is_published' => true,
        ]);

        return back();
    }
}
