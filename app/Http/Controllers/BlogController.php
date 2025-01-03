<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        // Récupérer le dernier article publié
        $featuredArticle = Article::with(['category', 'user'])
            ->where('is_published', true)
            ->latest()
            ->first();

        // Récupérer les articles antérieurs (en excluant le dernier)
        $query = Article::with(['category', 'user'])
            ->where('is_published', true);

        // Si un article est en vedette, l'exclure des résultats
        if ($featuredArticle) {
            $query->where('id', '!=', $featuredArticle->id);
        }

        // Filtrer par catégorie si spécifiée
        if ($request->has('category')) {
            $query->whereHas('category', function($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        $articles = $query->latest()->paginate(9);
        $categories = Category::all();

        return view('pages.blog', compact('featuredArticle', 'articles', 'categories'));
    }

    public function show($slug)
    {
        $article = Article::with(['category', 'user'])
            ->where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        $relatedArticles = Article::with(['category', 'user'])
            ->where('is_published', true)
            ->where('id', '!=', $article->id)
            ->where('category_id', $article->category_id)
            ->latest()
            ->take(3)
            ->get();

        return view('pages.article', compact('article', 'relatedArticles'));
    }
}
