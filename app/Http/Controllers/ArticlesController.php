<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function showAll () {
        return view('spatial/articles', [
            'articles' => Article::latest()->get()
        ]);
    }

    public function showOne ($article) {
        return view('spatial/article', [
            'article' => Article::where('id', $article)->firstOrFail()
        ]);
    }
}
