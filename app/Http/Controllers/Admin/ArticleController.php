<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required',
            'content' => 'required',
        ]);

        $article = Article::create([
            'title' => $validated['title'],
            'slug' => Str::slug($validated['title']),
            'excerpt' => $validated['excerpt'],
            'content' => $validated['content'],
            'is_published' => $request->has('is_published'),
        ]);

        return redirect()->route('admin.articles.index')
            ->with('success', 'Article créé avec succès.');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.form', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required',
            'content' => 'required',
        ]);

        $article->update([
            'title' => $validated['title'],
            'slug' => Str::slug($validated['title']),
            'excerpt' => $validated['excerpt'],
            'content' => $validated['content'],
            'is_published' => $request->has('is_published'),
        ]);

        return redirect()->route('admin.articles.index')
            ->with('success', 'Article mis à jour avec succès.');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('admin.articles.index')
            ->with('success', 'Article supprimé avec succès.');
    }
}
