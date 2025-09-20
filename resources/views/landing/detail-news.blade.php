@extends('core.app')

@section('title', 'Detail News')

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
            <a href="/news"
                class="text-[#29303D] text-xs md:text-[14px] font-light hover:text-[#0000FF] transition-colors">
                News
            </a>
            <div class="w-[16px] h-[16px]">
                <div class="w-[14px] h-[14px]">
                    <img src="/icons/arrow-right-chevron.svg" alt="Right Arrow" class="w-full h-full">
                </div>
            </div>
        </div>
        <div class="flex items-center space-x-4 ml-4">
            <span class="font-medium text-[#29303D] text-xs md:text-[14px] font-light transition-colors">
                {{ $news->title }}
            </span>
        </div>
    </div>

    <section class="lg:max-w-6xl mx-auto px-4 sm:px-6 py-12 lg:py-20 lg:px-8">
        <div class="w-full mx-auto mb-8">
            <img src="{{ asset('storage/' . $news->image) }}" class="h-full rounded-xl w-full bg-cover bg-center"
                alt="{{ $news->title }}">
        </div>
        <div class="flex w-full text-xs mt-12 mb-4 text-neutral-400">
            <span class="flex items-center align-middle gap-x-1 mr-4">
                <img src="{{ asset('icons/calender.svg') }}" alt="">
                {{ $news->created_at->format('m/d/Y') }}
            </span>
            <span class="flex items-center align-middle gap-x-1">
                <img src="{{ asset('icons/clock.svg') }}" alt="">
                {{ $news->created_at_human }}
            </span>
        </div>
        <h1 class="text-3xl font-playfair text-neutral-800 font-bold mb-4">{{ $news->title }}</h1>
        <p class="text-neutral-600 text-justify font-inter text-sm mb-4">
        <div id="news-content">
            @foreach ($paragraphs as $paragraph)
                <p class="text-neutral-600 text-justify font-inter text-sm mb-4">
                    {{ $paragraph }}
                </p>
            @endforeach
        </div>
        </p>
        <div class="flex items-end mt-14 align-bottom gap-x-2">
            <div
                class="flex items-center align-middle justify-center size-10 rounded-full text-neutral-600 bg-neutral-200 p-2">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank">
                    <img src="/icons/fb.svg" class="w-5 h-5" alt="Facebook">
                </a>
            </div>
            <div
                class="flex items-center align-middle justify-center size-10 rounded-full text-neutral-600 bg-neutral-200 p-2">
                <a href="https://www.instagram.com" target="_blank">
                    <img src="/icons/ig.svg" class="w-5 h-5" alt="Instagram">
                </a>
            </div>
            <div
                class="flex items-center align-middle justify-center size-10 rounded-full text-neutral-600 bg-neutral-200 p-2">
                <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($news->title) }}"
                    target="_blank">
                    <img src="/icons/tweet.svg" class="w-5 h-5" alt="Twitter">
                </a>
            </div>
            <div
                class="flex items-center align-middle justify-center size-10 rounded-full text-neutral-600 bg-neutral-200 p-2">
                <a href="{{ url()->current() }}" target="_blank" title="Click to Copy URL">
                    <img src="/icons/link.svg" class="w-5 h-5" alt="Copy Link">
                </a>
            </div>
        </div>
    </section>

    <section class="lg:max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
        <h1 class="text-3xl font-playfair text-neutral-800 font-bold mb-8">Related Post</h1>
        <div class="lg:grid grid-cols-1 md:grid-cols-2 gap-4 lg:grid-cols-3">
            @foreach ($relatedNews as $related)
                <a href="{{ route('news.show', $related->slug) }}" class="my-2 inline-block mb-2">
                    <img src="{{ asset('storage/' . $related->image) }}" class="rounded-lg h-40 w-full bg-cover bg-center"
                        alt="{{ $related->title }}">
                    <h1 class="font-playfair font-bold my-4 line-clamp-2 leading-tight text-lg">{{ $related->title }}</h1>
                    <p class="text-sm font-inter line-clamp-2 text-neutral-600 my-4">
                        {{ Str::limit($related->content, 100) }}</p>
                    <div
                        class="flex items-center align-middle justify-between font-inter w-full text-xs mb-2 text-neutral-500">
                        <div class="flex items-center align-middle w-full">
                            <span class="flex items-center align-middle gap-x-2 mr-4">
                                <img src="{{ asset('icons/calender.svg') }}" alt="">
                                {{ $related->created_at->format('m/d/Y') }}
                            </span>
                            <span class="flex items-center align-middle gap-x-2">
                                <img src="{{ asset('icons/clock.svg') }}"
                                    alt="">{{ $related->created_at->diffForHumans() }}
                            </span>
                        </div>
                        <img src="{{ asset('icons/arrow-right.svg') }}" class="size-4" alt="">
                    </div>
                </a>
            @endforeach
        </div>

    </section>
@endsection
