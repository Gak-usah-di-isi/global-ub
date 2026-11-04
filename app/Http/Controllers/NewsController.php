<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');

        $query = News::latest();
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        $news = $query->paginate(6)->withQueryString();

        $latestNews = News::latest()->first();
        $latestNewsParagraphs = [];
        if ($latestNews) {
            $latestNews->created_at_human = $latestNews->created_at->diffForHumans();
            $latestNewsParagraphs = explode("\n", $latestNews->content);
        }

        return view('landing.news', compact('latestNews', 'latestNewsParagraphs', 'news', 'search'));
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        $news->created_at_human = $news->created_at->diffForHumans();
        $paragraphs = explode("\n", $news->content);
        $relatedNews = News::inRandomOrder()->take(3)->get();
        return view('landing.detail-news', compact('news', 'paragraphs', 'relatedNews'));
    }
}
