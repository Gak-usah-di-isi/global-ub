@extends('core.app')

@section('title', 'Partnership Page')

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
            <span class="text-[#29303D] text-xs md:text-[14px] font-medium">Home</span>
            <div class="w-4 h-4 md:w-[16px] md:h-[16px]">
                <svg class="w-full h-full" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
        </div>
        <div class="flex items-center space-x-2 md:space-x-4 ml-2 md:ml-4">
            <span class="text-[#29303D] text-xs md:text-[14px] font-medium">Partnership</span>
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

                <!-- Partner 1 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-1.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 2 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-2.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 3 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-3.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 4 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-4.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 5 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-5.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 6 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-6.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 7 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-7.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 8 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-8.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 1 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-1.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 2 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-2.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 3 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-3.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 4 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-4.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 5 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-5.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 6 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-6.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 7 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-7.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 8 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-8.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 1 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-1.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 2 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-2.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 3 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-3.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 4 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-4.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 5 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-5.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 6 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-6.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 7 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-7.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 8 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-8.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 1 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-1.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 2 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-2.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 3 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-3.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 4 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-4.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 5 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-5.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 6 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-6.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 7 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-7.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

                <!-- Partner 8 -->
                <div
                    class="flex items-center justify-center w-full h-[60px] md:h-[80px] p-2 md:p-3 bg-white rounded-[8px] md:rounded-[12px] shadow-[0px_2px_8px_-2px_rgba(41,48,61,0.05)] hover:shadow-[0px_4px_16px_-2px_rgba(41,48,61,0.10)] transition-shadow">
                    <img src="{{ asset('images/partner-8.png') }}" alt="Partner University"
                        class="max-w-full max-h-full object-contain opacity-70 hover:opacity-100 transition-opacity">
                </div>

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
