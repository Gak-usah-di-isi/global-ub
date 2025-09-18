@extends('core.app')

@section('title', 'Innovation Page')

@section('content')

    <div class="bg-[#F0F2F4] w-full h-[60px] md:h-[80px] flex items-center px-4 sm:px-6 md:px-8 lg:px-[112px]">
        <div class="flex items-center space-x-2 md:space-x-4">
            <div class="w-4 h-4 md:w-[16px] md:h-[16px]">
                <div class="w-[16px] h-[16px]">
                    <img src="/icons/home.svg" alt="Home Icon" class="w-full h-full">
                </div>
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
                class="{{ request()->is('innovation') ? 'font-medium text-[#29303D]' : 'text-[#29303D] font-light' }} text-xs md:text-[14px]">
                Innovation
            </span>
        </div>
    </div>

    <section class="w-full h-auto bg-[#FFFFFF] px-4 py-6 sm:px-6 sm:py-8 md:px-8 md:py-10 lg:px-[80px] lg:py-[50px]">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 md:px-8 flex flex-col gap-6 md:gap-8 lg:gap-[40px]">

            <!-- Header -->
            <div class="w-full flex flex-col items-center gap-4">
                <h3
                    class="text-center font-playfair font-bold text-2xl sm:text-3xl md:text-[36px] leading-tight md:leading-[40px] text-[#29303D]">
                    Brawijaya’s Innovation
                </h3>
                <p
                    class="max-w-full sm:max-w-[672px] text-center font-inter text-sm sm:text-base md:text-[20px] leading-relaxed md:leading-[28px] font-light text-[#29303DB2]">
                    Discover groundbreaking innovations and research outcomes that drive real-world impact.
                </p>
            </div>

            <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                @foreach ($innovations as $innovation)
                    <div class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
                        <div class="w-full h-48 sm:h-64 md:h-[288px]">
                            <img src="{{ asset('storage/' . $innovation->image) }}" alt="{{ $innovation->title }}"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="w-full h-auto p-4 sm:p-6 flex flex-col gap-4">
                            <div class="w-full flex items-center justify-between">
                                <span
                                    class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#6699FF33] text-[#1D4ED8]">
                                    {{ $innovation->innovation_type }}
                                </span>

                            </div>
                            <h3
                                class="font-playfair font-bold text-lg sm:text-xl md:text-[20px] leading-relaxed md:leading-[28px] text-[#29303D]">
                                {{ $innovation->title }}
                            </h3>
                            <p
                                class="font-inter text-sm sm:text-base md:text-[16px] leading-relaxed md:leading-[24px] text-[#29303DB2]">
                                {{ Str::limit($innovation->description, 80) }}
                            </p>
                            <div class="ck-content">
                                {!! $innovation->highlights !!}
                            </div>
                            <a href="#"
                                class="mt-4 w-full h-10 rounded-[10px] border border-[#E2E4E9] flex items-center justify-center gap-2 px-4 bg-white text-[#29303D] font-medium text-sm md:text-[14px] leading-[20px]">
                                Learn More
                                <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- View All Button -->
            <div class="w-full flex justify-center items-center mt-10 md:mt-12">
                <div class="flex items-center gap-3 md:gap-4">
                    @if ($innovations->onFirstPage())
                        <button
                            class="w-10 h-10 md:w-12 md:h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                            <img src="/icons/arrow-fix.svg" alt="Previous"
                                class="w-3 h-3 md:w-4 md:h-4 transform rotate-180 opacity-20">
                        </button>
                    @else
                        <a href="{{ $innovations->previousPageUrl() }}"
                            class="w-10 h-10 md:w-12 md:h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                            <img src="/icons/arrow-fix.svg" alt="Previous"
                                class="w-3 h-3 md:w-4 md:h-4 transform rotate-180">
                        </a>
                    @endif

                    <div class="flex items-center gap-2 md:gap-4 bg-[#F3F4F6] rounded-full p-1 md:p-2">
                        @foreach ($innovations->getUrlRange(1, $innovations->lastPage()) as $page => $url)
                            <a href="{{ $url }}"
                                class="w-7 h-7 md:w-9 md:h-9 {{ $innovations->currentPage() == $page ? 'bg-[#1D4ED8] text-white' : 'text-[#1D4ED8]' }} rounded-full flex justify-center items-center text-xs md:text-sm">
                                {{ $page }}
                            </a>
                        @endforeach
                    </div>

                    @if ($innovations->hasMorePages())
                        <a href="{{ $innovations->nextPageUrl() }}"
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
    <style>
        .ck-content ul {
            display: flex;
            flex-direction: column;
            gap: 2px;
            font-size: 14px;
            line-height: 20px;
            color: #29303D;
            font-family: 'Inter', sans-serif;
            margin-top: 0.5rem;
        }

        .ck-content ul li {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            position: relative;
        }

        .ck-content ul li::before {
            content: '';
            display: inline-block;
            width: 8px;
            height: 8px;
            background: #0000FF;
            border-radius: 9999px;
            margin-right: 8px;
        }
    </style>
@endsection
