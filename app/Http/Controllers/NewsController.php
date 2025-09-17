<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $latestNews = News::latest()->first();
        $latestNews->created_at_human = $latestNews->created_at->diffForHumans();
        $news = News::latest()->paginate(6);
        return view('landing.news', compact('latestNews', 'news'));
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
