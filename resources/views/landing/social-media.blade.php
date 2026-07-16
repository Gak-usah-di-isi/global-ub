@extends('core.app')

@section('title', 'Social Media')

@section('content')
    <div class="bg-[#F0F2F4] w-full h-[80px] flex items-center px-4 md:px-8 lg:px-[112px] overflow-hidden">
        <div class="flex items-center space-x-4 min-w-0">
            <div class="w-[16px] h-[16px] shrink-0">
                <img src="/icons-site/home.svg" alt="Home Icon" class="w-full h-full">
            </div>
            <a href="/"
                class="text-[#29303D] text-xs md:text-[14px] font-light hover:text-[#0000FF] transition-colors whitespace-nowrap">
                Home
            </a>
            <div class="w-[16px] h-[16px] shrink-0">
                <div class="w-[14px] h-[14px]">
                    <img src="/icons-site/arrow-right-chevron.svg" alt="Right Arrow" class="w-full h-full">
                </div>
            </div>
            <span class="text-[#29303D] text-xs md:text-[14px] font-medium whitespace-nowrap">
                Social Media
            </span>
        </div>
    </div>

    <section class="w-full bg-white px-4 py-10 sm:px-8 md:px-16 md:py-16 lg:px-20 lg:py-20 xl:px-[80px] overflow-hidden">
        <div class="max-w-[1280px] mx-auto flex flex-col gap-10 md:gap-12">
            <div class="flex flex-col items-center text-center gap-4">
                <div class="inline-flex items-center gap-2 rounded-full border border-[#E2E4E9] bg-[#F9FAFB] px-4 py-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-[#0000FF]"></span>
                    <span class="text-xs md:text-sm font-medium text-[#29303D]">Integrated Social Feed</span>
                </div>
                <h1
                    class="font-playfair font-bold text-3xl sm:text-4xl md:text-[40px] lg:text-[48px] leading-tight text-[#29303D]">
                    Social Media
                </h1>
                <p
                    class="max-w-[760px] font-inter text-base sm:text-lg md:text-[18px] leading-7 text-[#29303DB2] font-light px-2 sm:px-0">
                    Stay connected with Globalizing UB through a single, consistent page for official social updates.
                    Instagram is live now, while Facebook and LinkedIn will follow in the same layout.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6">
                @foreach ($platforms as $platform)
                    <div
                        class="rounded-[20px] border border-[#E2E4E9] bg-white p-5 md:p-6 shadow-[0px_4px_20px_-2px_#29303D1A]">
                        <div class="flex items-center justify-between gap-3 mb-4">
                            <h2 class="font-playfair font-bold text-xl md:text-2xl text-[#29303D]">
                                {{ $platform['name'] }}
                            </h2>
                            <span
                                class="inline-flex items-center rounded-full px-3 py-1 text-xs font-medium {{ $platform['status'] === 'Live' ? 'bg-[#DCFCE7] text-[#15803D]' : 'bg-[#EEF2FF] text-[#4F46E5]' }}">
                                {{ $platform['status'] }}
                            </span>
                        </div>
                        <p class="font-inter text-sm md:text-[15px] leading-6 text-[#29303DB2] font-light">
                            {{ $platform['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>

            <div class="flex flex-col gap-4 md:gap-6">
                <div class="flex items-center justify-between gap-4 flex-wrap">
                    <div>
                        <h2 class="font-playfair font-bold text-2xl sm:text-3xl md:text-[36px] text-[#29303D]">
                            Instagram Highlights
                        </h2>
                        <p class="font-inter text-sm sm:text-base md:text-[18px] text-[#29303DB2] font-light mt-2">
                            Live feed from the official Globalizing UB Instagram account.
                        </p>
                    </div>
                    <a href="https://www.instagram.com/globalizingub/" target="_blank" rel="noopener noreferrer"
                        class="inline-flex items-center gap-2 rounded-[12px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] px-4 py-3 text-white text-sm md:text-[14px] font-medium shadow-[0px_8px_25px_-8px_#0000FF4D]">
                        Follow on Instagram
                        <img src="/icons-site/arrow-right.svg" alt="Arrow" class="w-4 h-4">
                    </a>
                </div>

                <div
                    class="rounded-[28px] border border-[#E2E4E9] bg-white shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
                    <div
                        class="p-4 sm:p-6 border-b border-[#E2E4E9] flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <h3 class="font-playfair font-bold text-xl sm:text-2xl text-[#29303D]">
                                Globalizing UB Instagram Feed
                            </h3>
                            <p class="font-inter text-sm text-[#29303DB2] font-light mt-1">
                                Embedded directly from Elfsight.
                            </p>
                        </div>
                        <a href="https://www.instagram.com/globalizingub/" target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center gap-2 text-[#0000FF] text-sm font-medium hover:underline">
                            Open Instagram profile
                            <img src="/icons-site/arrow-right.svg" alt="" class="w-3.5 h-3.5">
                        </a>
                    </div>

                    <div class="p-2 sm:p-4 bg-[#F9FAFB]">
                        <!-- Elfsight Instagram Feed | Globalizing UB -->
                        <script src="https://elfsightcdn.com/platform.js" async></script>
                        <div class="elfsight-app-9307aeb6-67d0-4791-82a7-88571af5827e" data-elfsight-app-lazy></div>
                    </div>
                </div>
            </div>

            <div
                class="rounded-[24px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] px-6 py-8 md:px-8 md:py-10 lg:px-12 lg:py-12 text-white shadow-[0px_8px_25px_-8px_#0000FF4D]">
                <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
                    <div class="max-w-[760px]">
                        <h2 class="font-playfair font-bold text-2xl sm:text-3xl md:text-[36px] leading-tight">
                            One page for every social update
                        </h2>
                        <p class="font-inter text-sm sm:text-base md:text-[18px] leading-7 font-light mt-3 text-white/90">
                            This section is ready to expand when Facebook and LinkedIn content is added later, while the
                            current Instagram feed stays the primary showcase.
                        </p>
                    </div>
                    <a href="https://www.instagram.com/globalizingub/" target="_blank" rel="noopener noreferrer"
                        class="inline-flex items-center justify-center rounded-[12px] border border-white/20 bg-white/10 px-5 py-3 font-medium text-sm md:text-[14px] backdrop-blur-[4px] hover:bg-white/15 transition-colors">
                        Visit Official Account
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
