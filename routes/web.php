<?php

use App\Http\Controllers\ProfileController;

Route::get('/debug-path', function () {
    return response()->json([
        'public_path' => public_path(),
        'manifest' => public_path('build/manifest.json'),
        'exists' => file_exists(public_path('build/manifest.json')),
    ]);
});
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDownloadCenterController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Admin\AdminEventController;
use App\Http\Controllers\Admin\AdminStudyController;
use App\Http\Controllers\Admin\AdminInnovationController;
use App\Http\Controllers\Admin\AdminTestimonialController;
use App\Http\Controllers\Admin\AdminPartnerController;
use App\Http\Controllers\Admin\AdminStoryController;
use App\Http\Controllers\Admin\AdminGalleryController;
use App\Http\Controllers\Admin\AdminPartnershipController;
use App\Http\Controllers\Admin\AdminIconController;
use App\Http\Controllers\Admin\AdminMerchandiseController;
use App\Http\Controllers\Admin\AdminCarouselController;
use App\Http\Controllers\Admin\AdminRankingController;
use App\Http\Controllers\Admin\AdminAboutSectionController;
use App\Http\Controllers\Admin\AdminProgramController;

use App\Http\Controllers\PartnershipController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\InnovationController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\TestingPageController;
use App\Http\Middleware\CountVisitor;

Route::middleware([CountVisitor::class])->group(function () {
    Route::get('/', [LandingController::class, 'index']);
    Route::get('/about', [AboutController::class, 'index']);
    Route::get('/news', [NewsController::class, 'index']);
    Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');
    Route::get('/event', [EventController::class, 'index'])->name('event.index');
    Route::get('/event/{slug}', [EventController::class, 'show'])->name('event.show');
    Route::get('/innovation', [InnovationController::class, 'index'])->name('innovation.index');
    Route::get('/innovation/{slug}', [InnovationController::class, 'show'])->name('innovation.show');
    Route::get('/partnership', [PartnershipController::class, 'index'])->name('partnership.index');
    // Route::get('/study', [StudyController::class, 'index'])->name('study.index');
    // Route::get('/study/{slug}', [StudyController::class, 'show'])->name('study.show');
    Route::get('/program', [ProgramController::class, 'index'])->name('program.index');
    Route::get('/program/{slug}', [ProgramController::class, 'show'])->name('program.show');
    Route::get('/partner', [PartnerController::class, 'index'])->name('partner.index');
    Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial.index');
    Route::get('/download-center', [DownloadController::class, 'index'])->name('download-center.index');
    Route::get('/download/{downloadCenter:slug}', [DownloadController::class, 'download'])->name('download-center.download');
    Route::get('/download-complete-media-kit', [DownloadController::class, 'downloadAll'])->name('download-center.download-all');
    Route::get('/story', [StoryController::class, 'index'])->name('story.index');
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('/gallery/{slug}', [GalleryController::class, 'show'])->name('gallery.show');
    Route::get('/merchandise', [MerchandiseController::class, 'index'])->name('merchandise');
});

// Language Switcher

Route::get('/lang/{locale}', [\App\Http\Controllers\LanguageController::class, 'switch'])->name('lang.switch');

Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/download-center', [AdminDownloadCenterController::class, 'index'])->name('download-center.index');
    Route::get('/download-center/create', [AdminDownloadCenterController::class, 'create'])->name('download-center.create');
    Route::post('/download-center', [AdminDownloadCenterController::class, 'store'])->name('download-center.store');
    Route::get('/download-center/{slug}/edit', [AdminDownloadCenterController::class, 'edit'])->name('download-center.edit');
    Route::put('/download-center/{slug}', [AdminDownloadCenterController::class, 'update'])->name('download-center.update');
    Route::delete('/download-center/{slug}', [AdminDownloadCenterController::class, 'destroy'])->name('download-center.destroy');

    Route::get('/news', [AdminNewsController::class, 'index'])->name('news.index');
    Route::get('/news/create', [AdminNewsController::class, 'create'])->name('news.create');
    Route::post('/news', [AdminNewsController::class, 'store'])->name('news.store');
    Route::get('/news/{slug}/edit', [AdminNewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/{slug}', [AdminNewsController::class, 'update'])->name('news.update');
    Route::delete('/news/{slug}', [AdminNewsController::class, 'destroy'])->name('news.destroy');

    Route::get('/events', [AdminEventController::class, 'index'])->name('events.index');
    Route::get('/events/create', [AdminEventController::class, 'create'])->name('events.create');
    Route::post('/events', [AdminEventController::class, 'store'])->name('events.store');
    Route::get('/events/{slug}/edit', [AdminEventController::class, 'edit'])->name('events.edit');
    Route::put('/events/{slug}', [AdminEventController::class, 'update'])->name('events.update');
    Route::delete('/events/{slug}', [AdminEventController::class, 'destroy'])->name('events.destroy');

    // Route::get('/studies', [AdminStudyController::class, 'index'])->name('studies.index');
    // Route::get('/studies/create', [AdminStudyController::class, 'create'])->name('studies.create');
    // Route::post('/studies', [AdminStudyController::class, 'store'])->name('studies.store');
    // Route::get('/studies/{slug}/edit', [AdminStudyController::class, 'edit'])->name('studies.edit');
    // Route::put('/studies/{slug}', [AdminStudyController::class, 'update'])->name('studies.update');
    // Route::delete('/studies/{slug}', [AdminStudyController::class, 'destroy'])->name('studies.destroy');

    Route::get('/innovations', [AdminInnovationController::class, 'index'])->name('innovations.index');
    Route::get('/innovations/create', [AdminInnovationController::class, 'create'])->name('innovations.create');
    Route::post('/innovations', [AdminInnovationController::class, 'store'])->name('innovations.store');
    Route::get('/innovations/{slug}/edit', [AdminInnovationController::class, 'edit'])->name('innovations.edit');
    Route::put('/innovations/{slug}', [AdminInnovationController::class, 'update'])->name('innovations.update');
    Route::delete('/innovations/{slug}', [AdminInnovationController::class, 'destroy'])->name('innovations.destroy');

    Route::get('/programs', [AdminProgramController::class, 'index'])->name('programs.index');
    Route::get('/programs/create', [AdminProgramController::class, 'create'])->name('programs.create');
    Route::post('/programs', [AdminProgramController::class, 'store'])->name('programs.store');
    Route::get('/programs/{slug}/edit', [AdminProgramController::class, 'edit'])->name('programs.edit');
    Route::put('/programs/{slug}', [AdminProgramController::class, 'update'])->name('programs.update');
    Route::delete('/programs/{slug}', [AdminProgramController::class, 'destroy'])->name('programs.destroy');

    Route::get('/galleries', [AdminGalleryController::class, 'index'])->name('galleries.index');
    Route::get('/galleries/create', [AdminGalleryController::class, 'create'])->name('galleries.create');
    Route::post('/galleries', [AdminGalleryController::class, 'store'])->name('galleries.store');
    Route::get('/galleries/{slug}/edit', [AdminGalleryController::class, 'edit'])->name('galleries.edit');
    Route::put('/galleries/{slug}', [AdminGalleryController::class, 'update'])->name('galleries.update');
    Route::delete('/galleries/{slug}', [AdminGalleryController::class, 'destroy'])->name('galleries.destroy');

    Route::get('/partners', [AdminPartnerController::class, 'index'])->name('partners.index');
    Route::get('/partners/create', [AdminPartnerController::class, 'create'])->name('partners.create');
    Route::post('/partners', [AdminPartnerController::class, 'store'])->name('partners.store');
    Route::get('/partners/{slug}/edit', [AdminPartnerController::class, 'edit'])->name('partners.edit');
    Route::put('/partners/{slug}', [AdminPartnerController::class, 'update'])->name('partners.update');
    Route::delete('/partners/{slug}', [AdminPartnerController::class, 'destroy'])->name('partners.destroy');

    Route::get('/partnerships', [AdminPartnershipController::class, 'index'])->name('partnerships.index');
    Route::get('/partnerships/create', [AdminPartnershipController::class, 'create'])->name('partnerships.create');
    Route::post('/partnerships', [AdminPartnershipController::class, 'store'])->name('partnerships.store');
    Route::get('/partnerships/{slug}/edit', [AdminPartnershipController::class, 'edit'])->name('partnerships.edit');
    Route::put('/partnerships/{slug}', [AdminPartnershipController::class, 'update'])->name('partnerships.update');
    Route::delete('/partnerships/{slug}', [AdminPartnershipController::class, 'destroy'])->name('partnerships.destroy');

    Route::get('/stories', [AdminStoryController::class, 'index'])->name('stories.index');
    Route::get('/stories/create', [AdminStoryController::class, 'create'])->name('stories.create');
    Route::post('/stories', [AdminStoryController::class, 'store'])->name('stories.store');
    Route::get('/stories/{slug}/edit', [AdminStoryController::class, 'edit'])->name('stories.edit');
    Route::put('/stories/{slug}', [AdminStoryController::class, 'update'])->name('stories.update');
    Route::delete('/stories/{slug}', [AdminStoryController::class, 'destroy'])->name('stories.destroy');

    Route::get('/testimonials', [AdminTestimonialController::class, 'index'])->name('testimonials.index');
    Route::get('/testimonials/create', [AdminTestimonialController::class, 'create'])->name('testimonials.create');
    Route::post('/testimonials', [AdminTestimonialController::class, 'store'])->name('testimonials.store');
    Route::get('/testimonials/{slug}/edit', [AdminTestimonialController::class, 'edit'])->name('testimonials.edit');
    Route::put('/testimonials/{slug}', [AdminTestimonialController::class, 'update'])->name('testimonials.update');
    Route::delete('/testimonials/{slug}', [AdminTestimonialController::class, 'destroy'])->name('testimonials.destroy');

    Route::get('/icons', [AdminIconController::class, 'index'])->name('icons.index');
    Route::get('/icons/create', [AdminIconController::class, 'create'])->name('icons.create');
    Route::post('/icons', [AdminIconController::class, 'store'])->name('icons.store');
    Route::get('/icons/{slug}/edit', [AdminIconController::class, 'edit'])->name('icons.edit');
    Route::put('/icons/{slug}', [AdminIconController::class, 'update'])->name('icons.update');
    Route::delete('/icons/{slug}', [AdminIconController::class, 'destroy'])->name('icons.destroy');

    Route::get('/merchandise', [AdminMerchandiseController::class, 'index'])->name('merchandise.index');
    Route::get('/merchandise/create', [AdminMerchandiseController::class, 'create'])->name('merchandise.create');
    Route::post('/merchandise', [AdminMerchandiseController::class, 'store'])->name('merchandise.store');
    Route::get('/merchandise/{slug}/edit', [AdminMerchandiseController::class, 'edit'])->name('merchandise.edit');
    Route::put('/merchandise/{slug}', [AdminMerchandiseController::class, 'update'])->name('merchandise.update');
    Route::delete('/merchandise/{slug}', [AdminMerchandiseController::class, 'destroy'])->name('merchandise.destroy');

    Route::get('/carousels', [AdminCarouselController::class, 'index'])->name('carousels.index');
    Route::get('/carousels/create', [AdminCarouselController::class, 'create'])->name('carousels.create');
    Route::post('/carousels', [AdminCarouselController::class, 'store'])->name('carousels.store');
    Route::get('/carousels/{id}/edit', [AdminCarouselController::class, 'edit'])->name('carousels.edit');
    Route::put('/carousels/{id}', [AdminCarouselController::class, 'update'])->name('carousels.update');
    Route::delete('/carousels/{id}', [AdminCarouselController::class, 'destroy'])->name('carousels.destroy');

    Route::get('/rankings', [AdminRankingController::class, 'index'])->name('rankings.index');
    Route::get('/rankings/create', [AdminRankingController::class, 'create'])->name('rankings.create');
    Route::post('/rankings', [AdminRankingController::class, 'store'])->name('rankings.store');
    Route::get('/rankings/{id}/edit', [AdminRankingController::class, 'edit'])->name('rankings.edit');
    Route::put('/rankings/{id}', [AdminRankingController::class, 'update'])->name('rankings.update');
    Route::delete('/rankings/{id}', [AdminRankingController::class, 'destroy'])->name('rankings.destroy');

    Route::get('/about-section', [AdminAboutSectionController::class, 'index'])->name('about-section.index');
    Route::get('/about-section/edit', [AdminAboutSectionController::class, 'edit'])->name('about-section.edit');
    Route::put('/about-section', [AdminAboutSectionController::class, 'update'])->name('about-section.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Testing page — React + API demo, isolated dari project utama
Route::get('/testing', [TestingPageController::class, 'index'])->name('testing.index');

require __DIR__ . '/auth.php';

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
