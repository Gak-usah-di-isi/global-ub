@extends('core.app')

@section('title', 'Landing Page')

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
                class="{{ request()->is('download-center') ? 'font-medium text-[#29303D]' : 'text-[#29303D] font-light' }} text-xs md:text-[14px]">
                Download Center
            </span>
        </div>
    </div>

    <section
        class="lg:max-w-6xl flex-col lg:flex-row items-center align-middle mx-auto py-10 lg:pt-20 px-4 sm:px-6 lg:px-8">
        <h1 class="font-bold text-3xl mb-4 text-center font-playfair">Download Center</h1>
        <p class="text-center lg:w-[602px] w-full font-inter mx-auto text-lg text-neutral-500">Access our collection
            of promotional materials, brochures, and multimedia content</p>

        <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 mt-16">
            @foreach ($downloads as $download)
                <div
                    class="w-full max-w-[400px] sm:max-w-md lg:max-w-lg h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden mx-auto">
                    <div class="px-4 sm:px-[25px] py-4 sm:py-[25px] w-full">
                        <div class="flex items-start gap-3 sm:gap-[16px] mb-6">
                            <div
                                class="p-2 sm:p-[12px] bg-[#F9FAFB] rounded-xl flex-shrink-0 flex items-center justify-center">
                                <img src="{{ asset('storage/' . $download->icon->icon) }}" class="w-6 h-6" alt="File icon">
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3
                                    class="text-[#29303D] text-sm sm:text-base font-playfair font-semibold leading-5 sm:leading-6 mb-1">
                                    {{ $download->title }}
                                </h3>
                                <p
                                    class="text-xs sm:text-sm text-[#29303D] opacity-[0.7] font-normal font-inter leading-4 sm:leading-tight">
                                    {{ $download->description }}
                                </p>
                            </div>
                        </div>

                        <div class="flex justify-between items-center mb-4 sm:mb-6">
                            <div class="flex gap-3 sm:gap-[16px] items-center">
                                <span
                                    class="text-xs sm:text-sm font-medium font-inter leading-tight text-[#29303D] opacity-[0.6]">{{ strtoupper(pathinfo($download->file, PATHINFO_EXTENSION)) }}</span>
                                <span
                                    class="text-xs sm:text-sm font-inter font-normal leading-tight text-[#29303D] opacity-[0.6]">
                                    @php
                                        $size = Storage::disk('public')->exists($download->file)
                                            ? Storage::disk('public')->size($download->file)
                                            : 0;
                                    @endphp
                                    @if ($size < 1048576)
                                        {{ number_format($size / 1024, 1) }} KB
                                    @else
                                        {{ number_format($size / 1048576, 1) }} MB
                                    @endif
                                </span>
                            </div>

                            <div class="flex gap-1 sm:gap-[4px] items-center">
                                <img src="{{ asset('icons/download.svg') }}" class="w-3 h-3 sm:w-4 sm:h-4 opacity-60"
                                    alt="Download">
                                <span
                                    class="text-xs sm:text-sm font-inter font-normal leading-tight text-[#29303D] opacity-[0.6]">
                                    @php
                                        $redisKey = 'download_center:' . $download->id;
                                        $downloadCount = \Illuminate\Support\Facades\Redis::get($redisKey) ?? 0;
                                    @endphp
                                    {{ number_format($downloadCount) }}
                                </span>
                            </div>
                        </div>

                        <a href="{{ route('download-center.download', $download->slug) }}"
                            class="w-full px-3 sm:px-[17px] justify-center items-center border border-[#E2E4E9] rounded-[10px] flex gap-2 sm:gap-[8px] py-2 sm:py-[10px] bg-white text-[#29303D] font-medium text-xs sm:text-sm leading-[18px] sm:leading-[20px] hover:bg-gray-50 transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                            <img src="{{ asset('icons/download.svg') }}" class="w-3 h-3 sm:w-4 sm:h-4" alt="Download">
                            <span
                                class="text-xs sm:text-sm font-medium font-inter leading-tight text-[#29303D]">Download</span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="w-full flex justify-center items-center py-6 md:py-8">
            <div class="flex items-center gap-3 md:gap-4">
                @if ($downloads->onFirstPage())
                    <button class="w-10 h-10 md:w-12 md:h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                        <img src="/icons/arrow-fix.svg" alt="Previous"
                            class="w-3 h-3 md:w-4 md:h-4 transform rotate-180 opacity-20">
                    </button>
                @else
                    <a href="{{ $downloads->previousPageUrl() }}"
                        class="w-10 h-10 md:w-12 md:h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                        <img src="/icons/arrow-fix.svg" alt="Previous" class="w-3 h-3 md:w-4 md:h-4 transform rotate-180">
                    </a>
                @endif

                <div class="flex items-center gap-2 md:gap-4 bg-[#F3F4F6] rounded-full p-1 md:p-2">
                    @foreach ($downloads->getUrlRange(1, $downloads->lastPage()) as $page => $url)
                        <a href="{{ $url }}"
                            class="w-7 h-7 md:w-9 md:h-9 {{ $downloads->currentPage() == $page ? 'bg-[#1D4ED8] text-white' : 'text-[#1D4ED8]' }} rounded-full flex justify-center items-center text-xs md:text-sm">
                            {{ $page }}
                        </a>
                    @endforeach
                </div>

                @if ($downloads->hasMorePages())
                    <a href="{{ $downloads->nextPageUrl() }}"
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

    <div
        class="lg:max-w-6xl flex-col lg:flex-row items-center align-middle mx-auto py-10 lg:pt-10 lg:pb-16 px-4 sm:px-6 lg:px-8 font-inter">
        <div class="rounded-3xl bg-gradient-to-r from-[#0000FF] to-[#6699FF] p-10 text-center text-white">

            <h2 class="text-[30px] font-playfair font-bold mb-3">Need Everything?</h2>

            <p class="font-thin text-[20px] lg:max-w-2xl mx-auto mb-6">
                Download our complete media kit with all brochures, posters, and
                promotional materials in one package
            </p>

            <a href="#"
                class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 transition border border-white/20 text-white px-12 py-3 rounded-lg text-sm font-medium">
                Download Complete Media Kit
                <img src="{{ asset('icons/arrow-right-white.svg') }}" alt="">
            </a>
        </div>
    </div>

@endsection
