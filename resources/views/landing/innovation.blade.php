@extends('core.app')

@section('title', 'Innovation Page')

@section('content')

    <div class="bg-[#F0F2F4] w-full h-[60px] md:h-[80px] flex items-center px-4 sm:px-6 md:px-8 lg:px-[112px]">
        <div class="flex items-center space-x-2 md:space-x-4">
            <div class="w-4 h-4 md:w-[16px] md:h-[16px]">
                <svg class="w-full h-full" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                    </path>
                </svg>
            </div>
            <span class="text-[#29303D] text-xs md:text-[14px] font-light">Home</span>
            <div class="w-4 h-4 md:w-[16px] md:h-[16px]">
                <svg class="w-full h-full" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
        </div>
        <div class="flex items-center space-x-2 md:space-x-4 ml-2 md:ml-4">
            <span class="text-[#29303D] text-xs md:text-[14px] font-light">Innovation</span>
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
                <article class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
                    <div class="w-full h-48 sm:h-64 md:h-[288px]">
                        <img src="{{ asset('images/International.svg') }}" alt="International Education Fair 2024"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="w-full h-auto p-4 sm:p-6 flex flex-col gap-4">
                        <div class="w-full flex items-center justify-between">
                            <span
                                class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                Education Fair
                            </span>

                        </div>
                        <h3
                            class="font-playfair font-bold text-lg sm:text-xl md:text-[20px] leading-relaxed md:leading-[28px] text-[#29303D]">
                            International Education Fair 2024
                        </h3>
                        <p
                            class="font-inter text-sm sm:text-base md:text-[16px] leading-relaxed md:leading-[24px] text-[#29303DB2]">
                            Meet representatives from top universities worldwide and explore study abroad...
                        </p>
                        <div
                            class="flex flex-col gap-2 text-xs sm:text-sm md:text-[14px] leading-relaxed md:leading-[20px] text-[#29303D99] font-inter">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('icons/calender.svg') }}" class="w-4 h-4" alt="">
                                Thursday, February 15, 2024
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('icons/clock.svg') }}" class="w-4 h-4" alt="">
                                09:00 - 17:00
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('icons/location.svg') }}" class="w-4 h-4" alt="">
                                UB Convention Center
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('icons/user-black.svg') }}" class="w-4 h-4" alt="">
                                500+ expected attendees
                            </div>
                        </div>
                        <a href="#"
                            class="mt-4 w-full h-10 rounded-[10px] border border-[#E2E4E9] flex items-center justify-center gap-2 px-4 bg-white text-[#29303D] font-medium text-sm md:text-[14px] leading-[20px]">
                            Register Now
                            <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                        </a>
                    </div>
                </article>

                <article class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
                    <div class="w-full h-48 sm:h-64 md:h-[288px]">
                        <img src="{{ asset('images/Cultural.svg') }}" alt="Global Research Symposium"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="w-full h-auto p-4 sm:p-6 flex flex-col gap-4">
                        <div class="w-full flex items-center justify-between">
                            <span
                                class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#EDE9FE] text-[#6D28D9]">
                                Symposium
                            </span>

                        </div>
                        <h3
                            class="font-playfair font-bold text-lg sm:text-xl md:text-[20px] leading-relaxed md:leading-[28px] text-[#29303D]">
                            Global Research Symposium
                        </h3>
                        <p
                            class="font-inter text-sm sm:text-base md:text-[16px] leading-relaxed md:leading-[24px] text-[#29303DB2]">
                            Leading researchers present cutting-edge findings in sustainability and innovation
                        </p>
                        <div
                            class="flex flex-col gap-2 text-xs sm:text-sm md:text-[14px] leading-relaxed md:leading-[20px] text-[#29303D99] font-inter">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('icons/calender.svg') }}" class="w-4 h-4" alt="">
                                Thursday, February 22, 2024
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('icons/clock.svg') }}" class="w-4 h-4" alt="">
                                08:30 - 16:00
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('icons/location.svg') }}" class="w-4 h-4" alt="">
                                Academic Hall UB
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('icons/user-black.svg') }}" class="w-4 h-4" alt="">
                                300+ expected attendees
                            </div>
                        </div>
                        <a href="#"
                            class="mt-4 w-full h-10 rounded-[10px] border border-[#E2E4E9] flex items-center justify-center gap-2 px-4 bg-white text-[#29303D] font-medium text-sm md:text-[14px] leading-[20px]">
                            Register Now
                            <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                        </a>
                    </div>
                </article>

                <article class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
                    <div class="w-full h-48 sm:h-64 md:h-[288px]">
                        <img src="{{ asset('images/Festival.svg') }}" alt="International Cultural Festival"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="w-full h-auto p-4 sm:p-6 flex flex-col gap-4">
                        <div class="w-full flex items-center justify-between">
                            <span
                                class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#FCE7F3] text-[#DB2777]">
                                Cultural Event
                            </span>
                            <span
                                class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                upcoming
                            </span>
                        </div>
                        <h3
                            class="font-playfair font-bold text-lg sm:text-xl md:text-[20px] leading-relaxed md:leading-[28px] text-[#29303D]">
                            International Cultural Festival
                        </h3>
                        <p
                            class="font-inter text-sm sm:text-base md:text-[16px] leading-relaxed md:leading-[24px] text-[#29303DB2]">
                            Celebrate diversity with cultural performances, food, and traditions from...
                        </p>
                        <div
                            class="flex flex-col gap-2 text-xs sm:text-sm md:text-[14px] leading-relaxed md:leading-[20px] text-[#29303D99] font-inter">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('icons/calender.svg') }}" class="w-4 h-4" alt="">
                                Friday, March 1, 2024
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('icons/clock.svg') }}" class="w-4 h-4" alt="">
                                10:00 - 22:00
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('icons/location.svg') }}" class="w-4 h-4" alt="">
                                UB Campus Plaza
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('icons/user-black.svg') }}" class="w-4 h-4" alt="">
                                1000+ expected attendees
                            </div>
                        </div>
                        <a href="#"
                            class="mt-4 w-full h-10 rounded-[10px] border border-[#E2E4E9] flex items-center justify-center gap-2 px-4 bg-white text-[#29303D] font-medium text-sm md:text-[14px] leading-[20px]">
                            Register Now
                            <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                        </a>
                    </div>
                </article>

            </div>

            <!-- View All Button -->
            <div class="w-full flex justify-center items-center py-6 md:py-8">
                <div class="flex items-center gap-3 md:gap-4">
                    <button class="w-10 h-10 md:w-12 md:h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                        <img src="/icons/vector-left.svg" alt="Previous" class="w-3 h-3 md:w-4 md:h-4">
                    </button>

                    <div class="flex items-center gap-2 md:gap-4 bg-[#F3F4F6] rounded-full p-1 md:p-2">
                        <button
                            class="w-7 h-7 md:w-9 md:h-9 bg-[#1D4ED8] text-white rounded-full flex justify-center items-center text-xs md:text-sm">
                            1
                        </button>

                        <button
                            class="w-7 h-7 md:w-9 md:h-9 text-[#1D4ED8] flex justify-center items-center text-xs md:text-sm">
                            2
                        </button>

                        <button
                            class="w-7 h-7 md:w-9 md:h-9 text-[#1D4ED8] flex justify-center items-center text-xs md:text-sm">
                            3
                        </button>
                    </div>

                    <button class="w-10 h-10 md:w-12 md:h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                        <img src="/icons/vector-right.svg" alt="Next" class="w-3 h-3 md:w-4 md:h-4">
                    </button>
                </div>
            </div>

        </div>
    </section>

@endsection
