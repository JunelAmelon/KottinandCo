<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_articles' => Article::count(),
            'published_articles' => Article::where('is_published', true)->count(),
            'draft_articles' => Article::where('is_published', false)->count(),
            'recent_articles' => Article::latest()->take(5)->get(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
