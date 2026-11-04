@extends('core.app')

@section('title', 'News')

@section('content')
    <div class="bg-[#F0F2F4] w-full h-[80px] flex items-center px-4 md:px-8 lg:px-[112px]">
        <div class="flex items-center space-x-4">
            <div class="w-[16px] h-[16px]">
                <img src="/icons-site/home.svg" alt="Home Icon" class="w-full h-full">
            </div>
            <a href="/" class="text-[#29303D] text-xs md:text-[14px] font-light hover:text-[#0000FF] transition-colors">
                Home
            </a>
            <div class="w-[16px] h-[16px]">
                <div class="w-[14px] h-[14px]">
                    <img src="/icons-site/arrow-right-chevron.svg" alt="Right Arrow" class="w-full h-full">
                </div>
            </div>
        </div>
        <div class="flex items-center space-x-4 ml-4">
            <span
                class="{{ request()->is('news') ? 'font-medium text-[#29303D]' : 'text-[#29303D] font-light' }} text-xs md:text-[14px]">
                News
            </span>
        </div>
    </div>

    @if ($latestNews && !request('search'))
        <section class="news-section py-10 md:py-20 px-4 md:px-8 lg:px-28 bg-white">
            <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">
                <div class="w-full lg:w-[450px] h-[300px] md:h-[400px] lg:h-[465px] rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $latestNews->image) }}" alt="{{ $latestNews->title }}"
                        class="w-full h-full object-cover object-center">
                </div>

                <div class="w-full lg:w-[669px]">
                    <div class="flex gap-3 mb-4">
                        <span class="flex items-center gap-1 text-[#29303D99] text-[14px]">
                            <img src="/icons-site/calender.svg" class="w-4 h-4" alt="calendar icon">
                            {{ $latestNews->created_at->format('m/d/Y') }}
                        </span>
                        <span class="flex items-center gap-1 text-[#29303D99] text-[14px]">
                            <img src="/icons-site/clock.svg" class="w-4 h-4" alt="clock icon">
                            {{ $latestNews->created_at_human }}
                        </span>
                    </div>

                    <h2 class="text-[#29303D] font-playfair text-2xl md:text-3xl lg:text-[36px] font-bold mb-4">
                        {{ $latestNews->title }}</h2>

                    <div
                        class="text-[#29303DB2] font-inter text-base md:text-[18px] leading-relaxed md:leading-[29.25px] mb-6 md:mb-8 space-y-4">
                        @foreach (array_slice($latestNewsParagraphs, 0, 3) as $paragraph)
                            @if (trim($paragraph))
                                <p>{{ $paragraph }}</p>
                            @endif
                        @endforeach
                        @if (count($latestNewsParagraphs) > 3)
                            <p>...</p>
                        @endif
                    </div>

                    <a href="{{ route('news.show', $latestNews->slug) }}"
                        class="w-[140px] h-[44px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] text-white rounded-[10px] shadow-[0px_4px_20px_-2px_#29303D1A] flex items-center justify-center text-center py-[11.5px] px-[32px] text-[14px] font-medium">
                        Read More
                    </a>

                    <div class="flex gap-4 mt-6 md:mt-8">
                        <div class="w-[41px] h-[41px] bg-[#E2E4E9] flex items-center justify-center rounded-full shadow-md">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                target="_blank">
                                <img src="/icons-site/fb.svg" class="w-5 h-5" alt="Facebook">
                            </a>
                        </div>
                        <div class="w-[41px] h-[41px] bg-[#E2E4E9] flex items-center justify-center rounded-full shadow-md">
                            <a href="https://www.instagram.com" target="_blank">
                                <img src="/icons-site/ig.svg" class="w-5 h-5" alt="Instagram">
                            </a>
                        </div>
                        <div class="w-[41px] h-[41px] bg-[#E2E4E9] flex items-center justify-center rounded-full shadow-md">
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($latestNews->title) }}"
                                target="_blank">
                                <img src="/icons-site/tweet.svg" class="w-5 h-5" alt="Twitter">
                            </a>
                        </div>
                        <div class="w-[41px] h-[41px] bg-[#E2E4E9] flex items-center justify-center rounded-full shadow-md">
                            <a href="{{ url()->current() }}" target="_blank" title="Click to Copy URL">
                                <img src="/icons-site/link.svg" class="w-5 h-5" alt="Copy Link">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endif

    <section class="py-10 md:py-16 md:px-8 lg:px-28 bg-white">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8 md:mb-12">
            <div>
                <h2 id="section-title" class="text-2xl md:text-3xl font-playfair font-extrabold text-[#29303D]">
                    {{ request('search') ? 'Search Results' : 'Related Post' }}
                </h2>
                <div id="search-summary">
                    @if (request('search'))
                        <p class="text-sm text-[#29303DB2] mt-1">
                            Showing results for "<strong>{{ request('search') }}</strong>" ({{ $news->total() }} found)
                        </p>
                    @endif
                </div>
            </div>

            <!-- Compact Live Search Bar -->
            <div class="w-full sm:w-[280px]">
                <div class="relative flex items-center bg-[#F8FAFE] border border-[#E2E4E9] rounded-lg h-[38px] px-3 focus-within:border-[#0000FF] focus-within:bg-white focus-within:ring-2 focus-within:ring-[#0000FF]/15 transition-all shadow-xs">
                    <svg class="w-4 h-4 text-slate-400 mr-2.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
                    </svg>
                    <input type="text" id="live-search-input" value="{{ request('search') }}"
                        placeholder="Search news..."
                        autocomplete="off"
                        class="w-full bg-transparent border-none text-[13px] text-[#29303D] placeholder:text-slate-400 focus:outline-none focus:ring-0 p-0">
                    <button type="button" id="live-search-clear" class="p-1 text-slate-400 hover:text-slate-600 transition {{ request('search') ? '' : 'hidden' }}" title="Clear search">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div id="news-results-container" class="transition-opacity duration-200">
            @if ($news->isEmpty())
                <div class="w-full py-16 flex flex-col items-center justify-center text-center">
                    <div class="w-16 h-16 rounded-full bg-slate-100 flex items-center justify-center mb-4 text-slate-400">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
                        </svg>
                    </div>
                    <h4 class="font-playfair text-xl font-bold text-[#29303D] mb-1">No News Found</h4>
                    <p class="text-sm text-[#29303DB2] max-w-md">We couldn't find any news articles matching your search. Please try different keywords.</p>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-[15.94px]">
                    @foreach ($news as $newsItem)
                        <a href="{{ route('news.show', $newsItem->slug) }}"
                            class="w-full h-auto bg-white rounded-lg flex flex-col gap-4 md:gap-[18px] p-4 md:p-0">
                            <div class="w-full h-[180px] rounded-[12px] overflow-hidden">
                                <img src="{{ asset('storage/' . $newsItem->image) }}" alt="{{ $newsItem->title }}"
                                    class="w-full h-full object-cover">
                            </div>

                            <h3 class="text-lg md:text-[18px] text-[#29303D] font-playfair font-extrabold">
                                {{ $newsItem->title }}
                            </h3>

                            <p
                                class="text-sm md:text-[15px] font-inter font-light leading-relaxed md:leading-[29px] text-[#29303DB2]">
                                {{ Str::limit($newsItem->content, 80) }}
                            </p>

                            <div class="flex items-center justify-between text-sm md:text-[14px] text-[#29303DB2]">
                                <div class="flex gap-2 md:gap-4">
                                    <span class="flex items-center gap-1">
                                        <img src="/icons-site/calender.svg" class="w-4 h-4" alt="">
                                        {{ $newsItem->created_at->format('m/d/Y') }}
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <img src="/icons-site/clock.svg" class="w-4 h-4" alt="">
                                        {{ $newsItem->created_at->diffForHumans() }}
                                    </span>
                                </div>
                                <span>
                                    <img src="/icons-site/arrow-right.svg" class="w-5 h-5 hover:scale-110 transition-transform"
                                        alt="">
                                </span>
                            </div>
                        </a>
                    @endforeach
                </div>

                @if ($news->hasPages())
                    <div class="w-full flex justify-center items-center mt-10 md:mt-12">
                        <div class="flex items-center gap-3 md:gap-4">
                            @if ($news->onFirstPage())
                                <button class="w-10 h-10 md:w-12 md:h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                                    <img src="/icons-site/arrow-fix.svg" alt="Previous"
                                        class="w-3 h-3 md:w-4 md:h-4 transform rotate-180 opacity-20">
                                </button>
                            @else
                                <a href="{{ $news->previousPageUrl() }}"
                                    class="w-10 h-10 md:w-12 md:h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                                    <img src="/icons-site/arrow-fix.svg" alt="Previous"
                                        class="w-3 h-3 md:w-4 md:h-4 transform rotate-180">
                                </a>
                            @endif

                            <div class="flex items-center gap-2 md:gap-4 bg-[#F3F4F6] rounded-full p-1 md:p-2">
                                @foreach ($news->getUrlRange(1, $news->lastPage()) as $page => $url)
                                    <a href="{{ $url }}"
                                        class="w-7 h-7 md:w-9 md:h-9 {{ $news->currentPage() == $page ? 'bg-[#1D4ED8] text-white' : 'text-[#1D4ED8]' }} rounded-full flex justify-center items-center text-xs md:text-sm">
                                        {{ $page }}
                                    </a>
                                @endforeach
                            </div>

                            @if ($news->hasMorePages())
                                <a href="{{ $news->nextPageUrl() }}"
                                    class="w-10 h-10 md:w-12 md:h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                                    <img src="/icons-site/arrow-fix.svg" alt="Next" class="w-3 h-3 md:w-4 md:h-4">
                                </a>
                            @else
                                <button class="w-10 h-10 md:w-12 md:h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                                    <img src="/icons-site/arrow-fix.svg" alt="Next" class="w-3 h-3 md:w-4 md:h-4 opacity-20">
                                </button>
                            @endif
                        </div>
                    </div>
                @endif
            @endif
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById('live-search-input');
            const clearBtn = document.getElementById('live-search-clear');
            const container = document.getElementById('news-results-container');
            const titleEl = document.getElementById('section-title');
            const summaryEl = document.getElementById('search-summary');
            let timer = null;

            function performSearch(query) {
                const url = new URL(window.location.origin + window.location.pathname);
                if (query.trim()) {
                    url.searchParams.set('search', query.trim());
                }

                if (container) container.style.opacity = '0.5';

                fetch(url.toString(), {
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                })
                .then(res => res.text())
                .then(html => {
                    const doc = new DOMParser().parseFromString(html, 'text/html');
                    const newContent = doc.getElementById('news-results-container');
                    if (newContent && container) {
                        container.innerHTML = newContent.innerHTML;
                        container.style.opacity = '1';
                    }
                    const newTitle = doc.getElementById('section-title');
                    if (newTitle && titleEl) {
                        titleEl.innerText = newTitle.innerText;
                    }
                    const newSummary = doc.getElementById('search-summary');
                    if (newSummary && summaryEl) {
                        summaryEl.innerHTML = newSummary.innerHTML;
                    }
                    window.history.replaceState({}, '', url.toString());
                })
                .catch(err => {
                    console.error(err);
                    if (container) container.style.opacity = '1';
                });
            }

            if (input) {
                input.addEventListener('input', function() {
                    const val = this.value;
                    if (clearBtn) {
                        if (val.trim()) {
                            clearBtn.classList.remove('hidden');
                        } else {
                            clearBtn.classList.add('hidden');
                        }
                    }

                    clearTimeout(timer);
                    timer = setTimeout(() => {
                        performSearch(val);
                    }, 250);
                });
            }

            if (clearBtn) {
                clearBtn.addEventListener('click', function() {
                    if (input) input.value = '';
                    clearBtn.classList.add('hidden');
                    performSearch('');
                });
            }
        });
    </script>
@endsection
