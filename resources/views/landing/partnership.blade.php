@extends('core.app')

@section('title', 'Partnership Page')

@section('content')

    <div class="bg-[#F0F2F4] w-full h-[60px] md:h-[80px] flex items-center px-4 sm:px-6 md:px-8 lg:px-[112px]">
        <div class="flex items-center space-x-2 md:space-x-4">
            <div class="w-4 h-4 md:w-[16px] md:h-[16px]">
                <div class="w-[16px] h-[16px]">
                    <img src="{{ asset('icons/home.svg') }}" alt="Home Icon" class="w-full h-full">
                </div>
            </div>
            <a href="/" class="text-[#29303D] text-xs md:text-[14px] font-light hover:text-[#0000FF] transition-colors">
                Home
            </a>
            <div class="w-4 h-4 md:w-[16px] md:h-[16px]">
                <div class="w-[14px] h-[14px]">
                    <img src="/icons/arrow-right-chevron.svg" alt="Right Arrow" class="w-full h-full">
                </div>
            </div>
        </div>
        <div class="flex items-center space-x-2 md:space-x-4 ml-2 md:ml-4">
            <span
                class="{{ request()->is('partnership') ? 'font-medium text-[#29303D]' : 'text-[#29303D] font-light' }} text-xs md:text-[14px]">
                Partnership
            </span>
        </div>
    </div>

    <section id="partner"
        class="w-full h-auto bg-[#FFFFFF] px-4 py-6 sm:px-6 sm:py-8 md:px-8 md:py-10 lg:px-[80px] lg:py-[50px]">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 md:px-8 flex flex-col gap-6 md:gap-8 lg:gap-[40px]">

            <!-- Header -->
            <div class="w-full flex flex-col items-center gap-4">
                <h3
                    class="text-center font-playfair font-bold text-2xl sm:text-3xl md:text-[36px] leading-tight md:leading-[40px] text-[#29303D]">
                    Partnership
                </h3>
                <p
                    class="max-w-full sm:max-w-[672px] text-center font-inter text-sm sm:text-base md:text-[20px] leading-relaxed md:leading-[28px] font-light text-[#29303DB2]">
                    Access our collection of promotional materials, brochures, and
                    multimedia content
                </p>
            </div>

            <!-- Partners Logo Grid -->
            <div
                class="w-full grid grid-cols-4 sm:grid-cols-6 md:grid-cols-8 gap-4 md:gap-6 lg:gap-[24px] items-center justify-items-center">

                @foreach ($partnerships as $partnership)
                    <div
                        class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] 
        shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">

                        <a href="{{ $partnership->website ?? '#' }}" target="_blank" rel="noopener noreferrer"
                            class="block w-full h-full flex items-center justify-center">
                            <img src="{{ asset('storage/' . $partnership->logo) }}" alt="{{ $partnership->name }}"
                                class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                        </a>

                    </div>
                @endforeach


            </div>

            <!-- View All Button -->
            <div class="w-full flex justify-center items-center py-6 md:py-8">
                <div class="flex items-center gap-3 md:gap-4">
                    @if ($partnerships->onFirstPage())
                        <button
                            class="w-10 h-10 md:w-12 md:h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                            <img src="/icons/arrow-fix.svg" alt="Previous"
                                class="w-3 h-3 md:w-4 md:h-4 transform rotate-180 opacity-20">
                        </button>
                    @else
                        <a href="{{ $partnerships->previousPageUrl() }}"
                            class="w-10 h-10 md:w-12 md:h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                            <img src="/icons/arrow-fix.svg" alt="Previous"
                                class="w-3 h-3 md:w-4 md:h-4 transform rotate-180">
                        </a>
                    @endif

                    <div class="flex items-center gap-2 md:gap-4 bg-[#F3F4F6] rounded-full p-1 md:p-2">
                        @foreach ($partnerships->getUrlRange(1, $partnerships->lastPage()) as $page => $url)
                            <a href="{{ $url }}"
                                class="w-7 h-7 md:w-9 md:h-9 {{ $partnerships->currentPage() == $page ? 'bg-[#1D4ED8] text-white' : 'text-[#1D4ED8]' }} rounded-full flex justify-center items-center text-xs md:text-sm">
                                {{ $page }}
                            </a>
                        @endforeach
                    </div>

                    @if ($partnerships->hasMorePages())
                        <a href="{{ $partnerships->nextPageUrl() }}"
                            class="w-10 h-10 md:w-12 md:h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                            <img src="/icons/arrow-fix.svg" alt="Next" class="w-3 h-3 md:w-4 md:h-4">
                        </a>
                    @else
                        <button
                            class="w-10 h-10 md:w-12 md:h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                            <img src="/icons/arrow-fix.svg" alt="Next" class="w-3 h-3 md:w-4 md:h-4 opacity-20">
                        </button>
                    @endif
                </div>
            </div>

        </div>
    </section>

@endsection
