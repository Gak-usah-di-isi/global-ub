@extends('core.app')

@section('title', 'Gallery')

@section('content')

    <div class="bg-[#F0F2F4] w-full h-[80px] flex items-center px-4 md:px-8 lg:px-[112px]">
        <div class="flex items-center space-x-4">
            <div class="w-[16px] h-[16px]">
                <img src="/icons/home.svg" alt="Home Icon" class="w-full h-full">
            </div>
            <span class="text-[#29303D] text-[14px] font-light">Home</span>
            <div class="w-[16px] h-[16px]">
                <img src="/icons/arrow-right-chevron.svg" alt="Right Arrow" class="w-full h-full">
            </div>
        </div>
        <div class="flex items-center space-x-4 ml-4">
            <span
                class="{{ request()->is('gallery') ? 'font-medium text-[#29303D]' : 'text-[#29303D] font-light' }} text-xs md:text-[14px]">
                Gallery
            </span>
        </div>
    </div>

    <section
        class="lg:max-w-6xl flex-col lg:flex-row items-center align-middle mx-auto py-10 lg:pt-20 lg:pb-16 px-4 sm:px-6 lg:px-8">
        <h1 class="font-bold text-4xl mb-4 text-center font-playfair">Gallery</h1>
        <p class="text-center text-xl lg:w-[602px] w-full font-inter mx-auto text-neutral-500">
            Access our collection of promotional materials, brochures, and multimedia content
        </p>

        <div
            class="max-w-full lg:max-w-[1216px] h-[200px] md:h-[350px] lg:h-[465px] mt-8 md:mt-12 lg:mt-16 mx-auto relative rounded-[10px] overflow-hidden">
            @foreach ($images as $i => $gallery)
                <div
                    class="absolute inset-0 transition-opacity duration-500 {{ $i === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0' }} slider-item">
                    @php
                        $imgArray = json_decode($gallery->images, true);
                        $firstImg = $imgArray[0] ?? '';
                    @endphp
                    <img src="{{ asset('storage/' . $firstImg) }}" class="w-full h-full object-cover"
                        style="border-radius:10px;" />
                    <div class="absolute inset-0"
                        style="background: linear-gradient(180deg, rgba(17, 17, 17, 0) 0%, #111111 92.72%);"></div>
                    <div
                        class="absolute left-4 md:left-8 lg:left-[60px] bottom-4 md:bottom-8 lg:bottom-[46px] w-[90vw] max-w-[669px] h-auto flex flex-col justify-end gap-2 md:gap-[14px]">
                        <div class="flex items-center gap-2 w-auto h-[20px] mb-1 md:mb-2">
                            <img src="{{ asset('icons/calender-white.svg') }}" class="w-4 h-4 md:w-5 md:h-5"
                                alt="calendar icon">
                            <span
                                class="font-inter font-normal text-[12px] md:text-[14px] leading-[13.29px] text-[#F9FAFB] bg-transparent">
                                {{ \Carbon\Carbon::parse($gallery->created_at)->format('m/d/Y') }}
                            </span>
                        </div>
                        <h2
                            class="font-playfair font-bold text-[20px] md:text-[28px] lg:text-[36px] leading-[24px] md:leading-[32px] lg:leading-[40px] text-[#F9FAFB] mb-1 md:mb-2">
                            {{ $gallery->title }}
                        </h2>
                        <p
                            class="font-inter font-light text-[13px] md:text-[16px] lg:text-[17px] leading-[18px] md:leading-[24px] lg:leading-[29.25px] text-[#F9FAFB] pr-12 break-words">
                            {{ $gallery->description }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <div class="flex gap-2 justify-center">
        @foreach ($images as $i => $gallery)
            <div
                class="slider-dot w-2 h-2 {{ $i === 0 ? 'bg-[#0000FF]' : 'bg-[#6699FF33]' }} rounded-full transition-all duration-300 cursor-pointer">
            </div>
        @endforeach
    </div>

    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid gap-6 p-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($images as $gallery)
                @php
                    $imgArray = json_decode($gallery->images, true);
                    $firstImg = $imgArray[0] ?? '';
                @endphp
                <a href="{{ route('gallery.show', ['slug' => $gallery->slug]) }}">
                    <div
                        class="cursor-pointer bg-white rounded-2xl font-inter overflow-hidden shadow-[0px_4px_20px_-2px_#29303D1A] hover:shadow-[0px_8px_30px_-4px_#29303D1A] transition-shadow duration-300">
                        <img src="{{ asset('storage/' . $firstImg) }}" alt="event" class="w-full h-48 object-cover">
                        <div class="p-5">
                            <span
                                class="inline-block px-4 py-1 text-xs font-medium text-[#BE185D] bg-neutral-200/90 rounded-full">
                                {{ $gallery->category_gallery }}
                            </span>
                            <h3 class="mt-3 text-lg font-semibold font-playfair text-gray-800">
                                {{ $gallery->title }}
                            </h3>
                            <p class="mt-2 text-neutral-500 text-sm">
                                {{ $gallery->description }}
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="w-full flex justify-center items-center mt-10 md:mt-12">
            <div class="flex items-center gap-3 md:gap-4">
                @if ($images->onFirstPage())
                    <button class="w-10 h-10 md:w-12 md:h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                        <img src="/icons/arrow-fix.svg" alt="Previous"
                            class="w-3 h-3 md:w-4 md:h-4 transform rotate-180 opacity-20">
                    </button>
                @else
                    <a href="{{ $images->previousPageUrl() }}"
                        class="w-10 h-10 md:w-12 md:h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                        <img src="/icons/arrow-fix.svg" alt="Previous" class="w-3 h-3 md:w-4 md:h-4 transform rotate-180">
                    </a>
                @endif

                <div class="flex items-center gap-2 md:gap-4 bg-[#F3F4F6] rounded-full p-1 md:p-2">
                    @foreach ($images->getUrlRange(1, $images->lastPage()) as $page => $url)
                        <a href="{{ $url }}"
                            class="w-7 h-7 md:w-9 md:h-9 {{ $images->currentPage() == $page ? 'bg-[#1D4ED8] text-white' : 'text-[#1D4ED8]' }} rounded-full flex justify-center items-center text-xs md:text-sm">
                            {{ $page }}
                        </a>
                    @endforeach
                </div>

                @if ($images->hasMorePages())
                    <a href="{{ $images->nextPageUrl() }}"
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dots = document.querySelectorAll('.slider-dot');
            const slides = document.querySelectorAll('.slider-item');
            let currentIndex = 0;

            function changeSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle('opacity-100', i === index);
                    slide.classList.toggle('z-10', i === index);
                    slide.classList.toggle('opacity-0', i !== index);
                    slide.classList.toggle('z-0', i !== index);
                });
                dots.forEach((d, i) => {
                    d.classList.toggle('bg-[#0000FF]', i === index);
                    d.classList.toggle('bg-[#6699FF33]', i !== index);
                });
            }

            setInterval(function() {
                currentIndex = (currentIndex + 1) % slides.length;
                changeSlide(currentIndex);
            }, 3000);

            dots.forEach((dot, idx) => {
                dot.addEventListener('click', function() {
                    currentIndex = idx;
                    changeSlide(currentIndex);
                });
            });
        });
    </script>
@endsection
