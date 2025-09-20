@extends('core.app')

@section('title', 'Study Page')

@section('content')

    <div class="bg-[#F0F2F4] w-full h-[80px] flex items-center px-4 md:px-8 lg:px-28">
        <div class="flex items-center space-x-4">
            <div class="w-[16px] h-[16px]">
                <img src="{{ asset('icons/home.svg') }}" alt="Home Icon" class="w-full h-full">
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
                class="{{ request()->is('study') ? 'font-medium text-[#29303D]' : 'text-[#29303D] font-light' }} text-xs md:text-[14px]">
                Study in UB
            </span>
        </div>
    </div>

    <section id="study-in-ub"
        class="w-full bg-gradient-to-b from-[#F9FAFB] to-[#F0F2F4] px-4 sm:px-8 md:px-16 lg:px-28 py-10 md:py-16 lg:py-20">
        <div class="max-w-[1280px] mx-auto flex flex-col gap-8 md:gap-12 lg:gap-16">

            <div class="w-full flex flex-col items-center gap-4">
                <h2
                    class="w-full text-center font-playfair font-bold text-2xl md:text-3xl lg:text-[36px] leading-[40px] text-[#29303D]">
                    Study in UB
                </h2>
                <p
                    class="max-w-full md:max-w-[768px] text-center font-inter font-light text-base md:text-lg lg:text-[20px] leading-6 md:leading-7 lg:leading-[28px] text-[#29303DB2]">
                    Discover world-class education opportunities and join our diverse international academic
                    community
                </p>
            </div>

            <div class="w-full mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 lg:gap-8">
                <div class="flex flex-col items-center">
                    <div
                        class="w-full text-center font-inter font-bold text-2xl md:text-3xl lg:text-[36px] leading-[40px] text-[#0000FF]">
                        150+
                    </div>
                    <span class="mt-1 text-[#29303DB2] font-inter text-sm md:text-[14px] leading-5 md:leading-[20px]">Study
                        Programs</span>
                </div>

                <div class="flex flex-col items-center">
                    <div
                        class="w-full text-center font-inter font-bold text-2xl md:text-3xl lg:text-[36px] leading-[40px] text-[#0000FF]">
                        15
                    </div>
                    <span
                        class="mt-1 text-[#29303DB2] font-inter text-sm md:text-[14px] leading-5 md:leading-[20px]">Faculties</span>
                </div>

                <div class="flex flex-col items-center">
                    <div
                        class="w-full text-center font-inter font-bold text-2xl md:text-3xl lg:text-[36px] leading-[40px] text-[#0000FF]">
                        100+
                    </div>
                    <span
                        class="mt-1 text-[#29303DB2] font-inter text-sm md:text-[14px] leading-5 md:leading-[20px]">Partner
                        Universities</span>
                </div>

                <div class="flex flex-col items-center">
                    <div
                        class="w-full text-center font-inter font-bold text-2xl md:text-3xl lg:text-[36px] leading-[40px] text-[#0000FF]">
                        4,500+
                    </div>
                    <span
                        class="mt-1 text-[#29303DB2] font-inter text-sm md:text-[14px] leading-5 md:leading-[20px]">International
                        Students</span>
                </div>
            </div>

            <div class="w-full mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                @foreach ($studies as $study)
                    <div
                        class="w-full max-w-full sm:max-w-[384px] mx-auto h-auto md:h-[550px] bg-white rounded-2xl shadow-md p-6 md:p-8 flex flex-col gap-4 md:gap-6">
                        <div
                            class="w-12 h-12 md:w-16 md:h-16 rounded-2xl flex items-center justify-center bg-gradient-to-br from-[#0000FF] to-[#6699FF]">
                            <img src="{{ asset('storage/' . $study->icon->icon) }}" alt="{{ $study->icon->name }}"
                                class="w-6 h-6 md:w-8 md:h-8">
                        </div>

                        <h3
                            class="font-playfair font-bold text-lg md:text-xl lg:text-[20px] leading-6 md:leading-7 lg:leading-[28px] text-[#29303D]">
                            {{ $study->title }}
                        </h3>

                        <p class="font-inter font-normal text-sm md:text-base leading-5 md:leading-6 text-[#29303DB2]">
                            {{ Str::limit($study->tagline, 80) }}
                        </p>

                        <div class="flex justify-between items-center text-sm md:text-[14px] leading-5 md:leading-[20px]">
                            <span class="flex items-center gap-2 text-[#29303DB2]">
                                <img src="{{ asset('icons/user-black.svg') }}" class="w-4 h-4" alt="user">
                                {{ number_format($study->students_count) }} students
                            </span>
                            <span class="text-[#0000FF] font-medium">{{ $study->duration }}</span>
                        </div>

                        <div class="ck-content">
                            {!! $study->highlights !!}
                        </div>

                        <a href="{{ route('study.show', $study->slug) }}"
                            class="mt-auto w-full h-10 border border-[#E2E4E9] rounded-xl flex items-center justify-center gap-2 px-4 py-2 font-medium text-[#29303D] text-sm md:text-[14px] leading-5 md:leading-[20px] hover:bg-gray-50 transition">
                            Learn More
                            <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="w-full flex justify-center items-center py-8">
                <div class="flex items-center gap-4">
                    @if ($studies->onFirstPage())
                        <button
                            class="w-10 h-10 md:w-12 md:h-12 bg-[#FFFFFF] rounded-full flex justify-center items-center">
                            <img src="/icons/arrow-fix.svg" alt="Previous"
                                class="w-3 h-3 md:w-4 md:h-4 transform rotate-180 opacity-20">
                        </button>
                    @else
                        <a href="{{ $studies->previousPageUrl() }}"
                            class="w-10 h-10 md:w-12 md:h-12 bg-[#FFFFFF] rounded-full flex justify-center items-center">
                            <img src="/icons/arrow-fix.svg" alt="Previous"
                                class="w-3 h-3 md:w-4 md:h-4 transform rotate-180">
                        </a>
                    @endif

                    <div class="flex items-center gap-2 md:gap-4 bg-[#FFFFFF] rounded-full p-1 md:p-2">
                        @foreach ($studies->getUrlRange(1, $studies->lastPage()) as $page => $url)
                            <a href="{{ $url }}"
                                class="w-7 h-7 md:w-9 md:h-9 {{ $studies->currentPage() == $page ? 'bg-[#1D4ED8] text-white' : 'text-[#1D4ED8]' }} rounded-full flex justify-center items-center text-xs md:text-sm">
                                {{ $page }}
                            </a>
                        @endforeach
                    </div>


                    @if ($studies->hasMorePages())
                        <a href="{{ $studies->nextPageUrl() }}"
                            class="w-10 h-10 md:w-12 md:h-12 bg-[#FFFFFF] rounded-full flex justify-center items-center">
                            <img src="/icons/arrow-fix.svg" alt="Next" class="w-3 h-3 md:w-4 md:h-4">
                        </a>
                    @else
                        <button
                            class="w-10 h-10 md:w-12 md:h-12 bg-[#FFFFFF] rounded-full flex justify-center items-center">
                            <img src="/icons/arrow-fix.svg" alt="Next" class="w-3 h-3 md:w-4 md:h-4 opacity-20">
                        </button>
                    @endif
                </div>
            </div>


            <div
                class="w-full max-w-full md:max-w-[1216px] h-auto md:h-[264px] mx-auto bg-white rounded-2xl md:rounded-[24px] p-6 md:p-12 flex flex-col justify-between items-center text-center shadow-lg backdrop-blur-[4px]">
                <h3
                    class="text-xl md:text-2xl lg:text-[30px] font-playfair font-bold leading-7 md:leading-8 lg:leading-[36px] text-black">
                    Ready to Start Your Global Journey?
                </h3>
                <p
                    class="text-base md:text-lg lg:text-[20px] text-[#29303DB2] font-light font-inter leading-6 md:leading-7 lg:leading-[28px] opacity-90 max-w-full md:max-w-[672px] mt-4">
                    Join thousands of international students who have chosen UB as their gateway to academic and
                    professional success
                </p>

                <div class="flex flex-col sm:flex-row gap-3 md:gap-4 mt-6">
                    <a href="#"
                        class="w-full sm:w-[137px] h-11 font-inter font-normal px-4 md:px-8 py-2 md:py-3 rounded-xl bg-gradient-to-r from-[#0000FF] to-[#6699FF] shadow-md backdrop-blur-[4px] text-white text-sm md:text-[13px] font-medium flex items-center justify-center">
                        Apply Now
                    </a>

                    <a href="#"
                        class="w-full sm:w-[198px] h-11 font-inter font-normal px-4 md:px-8 py-2 md:py-3 rounded-xl bg-white border border-[#E2E4E9] text-sm md:text-[13px] font-medium flex items-center justify-center">
                        Download Brochure
                    </a>
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
