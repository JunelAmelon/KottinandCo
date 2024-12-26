<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Article::where('is_published', true)
            ->orderBy('created_at', 'desc')
            ->paginate(9);

        return view('pages.blog', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        return view('pages.article', compact('article'));
    }
}
