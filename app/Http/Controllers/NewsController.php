<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Helpers\TranslationHelper;

class NewsController extends Controller
{
    private array $fields = ['title', 'content'];

    public function index()
    {
        $latestNews = News::latest()->first();
        $latestNews = TranslationHelper::translateModel($latestNews, $this->fields);
        $latestNews->created_at_human = $latestNews->created_at->diffForHumans();
        $latestNewsParagraphs = explode("\n", $latestNews->content);
        $news = News::latest()->paginate(6);
        $news->getCollection()->transform(fn($item) => TranslationHelper::translateModel($item, $this->fields));
        return view('landing.news', compact('latestNews', 'latestNewsParagraphs', 'news'));
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        $news = TranslationHelper::translateModel($news, $this->fields);
        $news->created_at_human = $news->created_at->diffForHumans();
        $paragraphs = explode("\n", $news->content);
        $relatedNews = News::inRandomOrder()->take(3)->get();
        $relatedNews = TranslationHelper::translateCollection($relatedNews, $this->fields);
        return view('landing.detail-news', compact('news', 'paragraphs', 'relatedNews'));
    }
}
