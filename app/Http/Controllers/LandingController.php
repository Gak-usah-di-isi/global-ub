<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Icon;
use App\Models\Event;
use App\Models\Partnership;
use App\Models\News;
use App\Models\Testimonial;
use App\Models\Innovation;
use App\Models\DownloadCenter;
use App\Models\Carousel;
use App\Models\Ranking;
use App\Models\AboutSection;
use App\Models\Story;
use App\Helpers\TranslationHelper;

class LandingController extends Controller
{
    public function index()
    {
        $carousels = Carousel::where('is_active', true)->orderBy('order', 'asc')->get();
        $carousels = TranslationHelper::translateCollection($carousels, ['title', 'subtitle']);

        $rankings = Ranking::with('icon')->where('is_active', true)->orderBy('order', 'asc')->get();

        $programs = Program::latest()->take(3)->get();
        $programs = TranslationHelper::translateCollection($programs, ['title', 'description', 'highlights']);

        $events = Event::latest()->take(3)->get();
        $events = TranslationHelper::translateCollection($events, ['title', 'description']);

        $partnerships = Partnership::latest()->take(8)->get();

        $latestNews = News::latest()->first();
        $latestNews = TranslationHelper::translateModel($latestNews, ['title', 'content']);
        $latestNews->created_at_human = $latestNews->created_at->diffForHumans();

        $news = News::latest()->take(4)->get();
        $news = TranslationHelper::translateCollection($news, ['title', 'content']);

        $testimonials = Testimonial::latest()->take(3)->get();
        $testimonials = TranslationHelper::translateCollection($testimonials, ['position', 'testimonial', 'key_achievements']);

        $innovations = Innovation::latest()->take(3)->get();
        $innovations = TranslationHelper::translateCollection($innovations, ['title', 'description', 'highlights']);

        $downloads = DownloadCenter::with('icon')->latest()->take(3)->get();

        $aboutSection = AboutSection::first();
        if ($aboutSection) {
            $aboutSection = TranslationHelper::translateModel($aboutSection, [
                'achievement_1_label', 'achievement_2_label', 'achievement_3_label',
                'achievement_4_label', 'achievement_5_label',
            ]);
        }

        $stories = Story::latest()->take(5)->get();
        $stories = TranslationHelper::translateCollection($stories, ['title', 'description']);
        $featuredStory = $stories->first();
        $storyList = $stories->skip(1)->take(4);

        return view('landing.index', compact('carousels', 'rankings', 'programs', 'events', 'partnerships', 'latestNews', 'news', 'testimonials', 'innovations', 'downloads', 'aboutSection', 'featuredStory', 'storyList'));
    }
}
