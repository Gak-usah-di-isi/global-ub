@extends('core.app')

@section('title', 'News Page')

@section('content')
    <div class="bg-[#F0F2F4] w-full h-[80px] flex items-center px-4 md:px-8 lg:px-[112px]">
        <div class="flex items-center space-x-4">
            <div class="w-[16px] h-[16px]">
                <img src="/icons/home.svg" alt="Home Icon" class="w-full h-full">
            </div>
            <a href="/" class="text-[#29303D] text-xs md:text-[14px] font-light hover:text-[#0000FF] transition-colors">
                Home
            </a>
            <div class="w-[16px] h-[16px]">
                <div class="w-[14px] h-[14px]">
                    <img src="/icons/arrow-right-chevron.svg" alt="Right Arrow" class="w-full h-full">
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

    <section class="news-section py-10 md:py-20 px-4 md:px-8 lg:px-28 bg-white">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">
            <div class="w-full lg:w-[450px] h-[300px] md:h-[400px] lg:h-[465px] rounded-lg overflow-hidden">
                <img src="{{ asset('storage/' . $latestNews->image) }}" alt="{{ $latestNews->title }}"
                    class="w-full h-full object-cover object-center">
            </div>

            <div class="w-full lg:w-[669px]">
                <div class="flex gap-3 mb-4">
                    <span class="flex items-center gap-1 text-[#29303D99] text-[14px]">
                        <img src="/icons/calender.svg" class="w-4 h-4" alt="calendar icon">
                        {{ $latestNews->created_at->format('m/d/Y') }}
                    </span>
                    <span class="flex items-center gap-1 text-[#29303D99] text-[14px]">
                        <img src="/icons/clock.svg" class="w-4 h-4" alt="clock icon">
                        {{ $latestNews->created_at_human }}
                    </span>
                </div>

                <h2 class="text-[#29303D] font-playfair text-2xl md:text-3xl lg:text-[36px] font-bold mb-4">
                    {{ $latestNews->title }}</h2>

                <p
                    class="text-[#29303DB2] font-inter text-base md:text-[18px] leading-relaxed md:leading-[29.25px] mb-6 md:mb-8">
                    {{ $latestNews->content }}
                </p>

                <a href="{{ route('news.show', $latestNews->slug) }}"
                    class="w-[140px] h-[44px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] text-white rounded-[10px] shadow-[0px_4px_20px_-2px_#29303D1A] flex items-center justify-center text-center py-[11.5px] px-[32px] text-[14px] font-medium">
                    Read More
                </a>

                <div class="flex gap-4 mt-6 md:mt-8">
                    <div class="w-[41px] h-[41px] bg-[#E2E4E9] flex items-center justify-center rounded-full shadow-md">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                            target="_blank">
                            <img src="/icons/fb.svg" class="w-5 h-5" alt="Facebook">
                        </a>
                    </div>
                    <div class="w-[41px] h-[41px] bg-[#E2E4E9] flex items-center justify-center rounded-full shadow-md">
                        <a href="https://www.instagram.com" target="_blank">
                            <img src="/icons/ig.svg" class="w-5 h-5" alt="Instagram">
                        </a>
                    </div>
                    <div class="w-[41px] h-[41px] bg-[#E2E4E9] flex items-center justify-center rounded-full shadow-md">
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($latestNews->title) }}"
                            target="_blank">
                            <img src="/icons/tweet.svg" class="w-5 h-5" alt="Twitter">
                        </a>
                    </div>
                    <div class="w-[41px] h-[41px] bg-[#E2E4E9] flex items-center justify-center rounded-full shadow-md">
                        <a href="{{ url()->current() }}" target="_blank" title="Click to Copy URL">
                            <img src="/icons/link.svg" class="w-5 h-5" alt="Copy Link">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-10 md:py-20 px-4 md:px-8 lg:px-28 bg-white">
        <h2 class="text-2xl md:text-3xl font-playfair font-extrabold text-[#29303D] mb-8 md:mb-14">Related Post
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-[15.94px]">
            @foreach ($news as $newsItem)
                <div class="w-full h-auto bg-white rounded-lg flex flex-col gap-4 md:gap-[18px] p-4 md:p-0">
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
                                <img src="/icons/calender.svg" class="w-4 h-4" alt="">
                                {{ $newsItem->created_at->format('m/d/Y') }}
                            </span>
                            <span class="flex items-center gap-1">
                                <img src="/icons/clock.svg" class="w-4 h-4" alt="">
                                {{ $newsItem->created_at->diffForHumans() }}
                            </span>
                        </div>
                        <a href="{{ route('news.show', $newsItem->slug) }}">
                            <img src="/icons/arrow-right.svg" class="w-5 h-5 hover:scale-110 transition-transform"
                                alt="">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="w-full flex justify-center items-center mt-10 md:mt-12">
            <div class="flex items-center gap-3 md:gap-4">
                @if ($news->onFirstPage())
                    <button class="w-10 h-10 md:w-12 md:h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                        <img src="/icons/arrow-fix.svg" alt="Previous"
                            class="w-3 h-3 md:w-4 md:h-4 transform rotate-180 opacity-20">
                    </button>
                @else
                    <a href="{{ $news->previousPageUrl() }}"
                        class="w-10 h-10 md:w-12 md:h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                        <img src="/icons/arrow-fix.svg" alt="Previous" class="w-3 h-3 md:w-4 md:h-4 transform rotate-180">
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
                        <img src="/icons/arrow-fix.svg" alt="Next" class="w-3 h-3 md:w-4 md:h-4">
                    </a>
                @else
                    <button class="w-10 h-10 md:w-12 md:h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                        <img src="/icons/arrow-fix.svg" alt="Next" class="w-3 h-3 md:w-4 md:h-4 opacity-20">
                    </button>
                @endif
            </div>
        </div>
    </section>

@endsection
