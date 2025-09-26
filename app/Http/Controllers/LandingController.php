<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Study;
use App\Models\Icon;
use App\Models\Event;
use App\Models\Partnership;
use App\Models\News;
use App\Models\Testimonial;
use App\Models\Innovation;
use App\Models\DownloadCenter;

class LandingController extends Controller
{
    public function index()
    {
        $studies = Study::with('icon')->latest()->take(3)->get();
        $events = Event::latest()->take(3)->get();
        $partnerships = Partnership::latest()->take(8)->get();
        $latestNews = News::latest()->first();
        $latestNews->created_at_human = $latestNews->created_at->diffForHumans();
        $news = News::latest()->take(4)->get();
        $testimonials = Testimonial::latest()->take(3)->get();
        $innovations = Innovation::latest()->take(3)->get();
        $downloads = DownloadCenter::with('icon')->latest()->take(3)->get();
        return view('landing.index', compact('studies', 'events', 'partnerships', 'latestNews', 'news', 'testimonials', 'innovations', 'downloads'));
    }
}
