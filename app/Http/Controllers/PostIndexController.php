<?php

namespace App\Http\Controllers;

class PostIndexController extends Controller
{
    public function __invoke()
    {
        return inertia()->render('Posts/Index');
    }
}
