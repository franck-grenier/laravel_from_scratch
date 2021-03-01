<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show ($post) {
        $posts = [
            'my-first-post' => 'Incredible amazing first post !',
            'my-second-post' => 'Amazing incredible second post !'
        ];

        if (!array_key_exists($post, $posts)) {
            abort(404);
        }

        return view('posts', [
            'post' => $posts[$post]
        ]);
    }
}
