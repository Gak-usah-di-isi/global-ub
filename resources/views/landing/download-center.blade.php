@extends('core.app')

@section('title', 'Landing Page')

@section('content')

    <div class="bg-[#F0F2F4] w-full h-[80px] flex items-center px-4 md:px-8 lg:px-[112px]">
        <div class="flex items-center space-x-4">
            <div class="w-[16px] h-[16px]">
                <img src="/icons/home.svg" alt="Home Icon" class="w-full h-full">
            </div>
            <span class="text-[#29303D] text-[14px] font-medium">Home</span>
            <div class="w-[16px] h-[16px]">
                <img src="/icons/arrow-right-chevron.svg" alt="Right Arrow" class="w-full h-full">
            </div>
        </div>
        <div class="flex items-center space-x-4 ml-4">
            <span class="text-[#29303D] text-[14px] font-medium">News</span>
        </div>
    </div>

    <section
        class="lg:max-w-6xl flex-col lg:flex-row items-center align-middle mx-auto py-10 lg:pt-20 lg:pb-16 px-4 sm:px-6 lg:px-8">
        <h1 class="font-bold text-3xl mb-4 text-center font-playfair">Download Center</h1>
        <p class="text-center lg:w-[602px] w-full font-inter mx-auto text-lg text-neutral-500">Access our collection
            of promotional materials, brochures, and multimedia content</p>

        <div class="inline-flex mt-16 justify-end w-full mb-4">
            <button
                class="flex items-center gap-2 px-4 py-2 rounded-xl border border-blue-400 bg-blue-50 text-blue-600 font-medium hover:bg-blue-100 transition">
                File Type
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
        </div>

        <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            <article
                class="w-full max-w-[400px] sm:max-w-md lg:max-w-lg h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden mx-auto">
                <div class="px-4 sm:px-[25px] py-4 sm:py-[25px] w-full">
                    <div class="flex items-start gap-3 sm:gap-[16px] mb-6">
                        <div class="p-2 sm:p-[12px] bg-[#F9FAFB] rounded-xl flex-shrink-0 flex items-center justify-center">
                            <img src="{{ asset('icons/file.svg') }}" class="w-6 h-6" alt="File icon">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3
                                class="text-[#29303D] text-sm sm:text-base font-playfair font-semibold leading-5 sm:leading-6 mb-1">
                                University Profile Brochure
                            </h3>
                            <p
                                class="text-xs sm:text-sm text-[#29303D] opacity-[0.7] font-normal font-inter leading-4 sm:leading-tight">
                                Complete overview of UB programs and facilities
                            </p>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mb-4 sm:mb-6">
                        <div class="flex gap-3 sm:gap-[16px] items-center">
                            <span
                                class="text-xs sm:text-sm font-medium font-inter leading-tight text-[#29303D] opacity-[0.6]">PDF</span>
                            <span
                                class="text-xs sm:text-sm font-inter font-normal leading-tight text-[#29303D] opacity-[0.6]">5.2
                                MB</span>
                        </div>

                        <div class="flex gap-1 sm:gap-[4px] items-center">
                            <img src="{{ asset('icons/download.svg') }}" class="w-3 h-3 sm:w-4 sm:h-4 opacity-60"
                                alt="Download">
                            <span
                                class="text-xs sm:text-sm font-inter font-normal leading-tight text-[#29303D] opacity-[0.6]">2.5k</span>
                        </div>
                    </div>

                    <button
                        class="w-full px-3 sm:px-[17px] justify-center items-center border border-[#E2E4E9] rounded-[10px] flex gap-2 sm:gap-[8px] py-2 sm:py-[10px] bg-white text-[#29303D] font-medium text-xs sm:text-sm leading-[18px] sm:leading-[20px] hover:bg-gray-50 transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        <img src="{{ asset('icons/download.svg') }}" class="w-3 h-3 sm:w-4 sm:h-4" alt="Download">
                        <span class="text-xs sm:text-sm font-medium font-inter leading-tight text-[#29303D]">Download</span>
                    </button>
                </div>
            </article>

            <article
                class="w-full max-w-[400px] sm:max-w-md lg:max-w-lg h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden mx-auto">
                <div class="px-4 sm:px-[25px] py-4 sm:py-[25px] w-full">
                    <div class="flex items-start gap-3 sm:gap-[16px] mb-6">
                        <div class="p-2 sm:p-[12px] bg-[#F9FAFB] rounded-xl flex-shrink-0 flex items-center justify-center">
                            <img src="{{ asset('icons/file.svg') }}" class="w-6 h-6" alt="File icon">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3
                                class="text-[#29303D] text-sm sm:text-base font-playfair font-semibold leading-5 sm:leading-6 mb-1">
                                University Profile Brochure
                            </h3>
                            <p
                                class="text-xs sm:text-sm text-[#29303D] opacity-[0.7] font-normal font-inter leading-4 sm:leading-tight">
                                Complete overview of UB programs and facilities
                            </p>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mb-4 sm:mb-6">
                        <div class="flex gap-3 sm:gap-[16px] items-center">
                            <span
                                class="text-xs sm:text-sm font-medium font-inter leading-tight text-[#29303D] opacity-[0.6]">PDF</span>
                            <span
                                class="text-xs sm:text-sm font-inter font-normal leading-tight text-[#29303D] opacity-[0.6]">5.2
                                MB</span>
                        </div>

                        <div class="flex gap-1 sm:gap-[4px] items-center">
                            <img src="{{ asset('icons/download.svg') }}" class="w-3 h-3 sm:w-4 sm:h-4 opacity-60"
                                alt="Download">
                            <span
                                class="text-xs sm:text-sm font-inter font-normal leading-tight text-[#29303D] opacity-[0.6]">2.5k</span>
                        </div>
                    </div>

                    <button
                        class="w-full px-3 sm:px-[17px] justify-center items-center border border-[#E2E4E9] rounded-[10px] flex gap-2 sm:gap-[8px] py-2 sm:py-[10px] bg-white text-[#29303D] font-medium text-xs sm:text-sm leading-[18px] sm:leading-[20px] hover:bg-gray-50 transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        <img src="{{ asset('icons/download.svg') }}" class="w-3 h-3 sm:w-4 sm:h-4" alt="Download">
                        <span class="text-xs sm:text-sm font-medium font-inter leading-tight text-[#29303D]">Download</span>
                    </button>
                </div>
            </article>

            <article
                class="w-full max-w-[400px] sm:max-w-md lg:max-w-lg h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden mx-auto">
                <div class="px-4 sm:px-[25px] py-4 sm:py-[25px] w-full">
                    <div class="flex items-start gap-3 sm:gap-[16px] mb-6">
                        <div class="p-2 sm:p-[12px] bg-[#F9FAFB] rounded-xl flex-shrink-0 flex items-center justify-center">
                            <img src="{{ asset('icons/file.svg') }}" class="w-6 h-6" alt="File icon">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3
                                class="text-[#29303D] text-sm sm:text-base font-playfair font-semibold leading-5 sm:leading-6 mb-1">
                                University Profile Brochure
                            </h3>
                            <p
                                class="text-xs sm:text-sm text-[#29303D] opacity-[0.7] font-normal font-inter leading-4 sm:leading-tight">
                                Complete overview of UB programs and facilities
                            </p>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mb-4 sm:mb-6">
                        <div class="flex gap-3 sm:gap-[16px] items-center">
                            <span
                                class="text-xs sm:text-sm font-medium font-inter leading-tight text-[#29303D] opacity-[0.6]">PDF</span>
                            <span
                                class="text-xs sm:text-sm font-inter font-normal leading-tight text-[#29303D] opacity-[0.6]">5.2
                                MB</span>
                        </div>

                        <div class="flex gap-1 sm:gap-[4px] items-center">
                            <img src="{{ asset('icons/download.svg') }}" class="w-3 h-3 sm:w-4 sm:h-4 opacity-60"
                                alt="Download">
                            <span
                                class="text-xs sm:text-sm font-inter font-normal leading-tight text-[#29303D] opacity-[0.6]">2.5k</span>
                        </div>
                    </div>

                    <button
                        class="w-full px-3 sm:px-[17px] justify-center items-center border border-[#E2E4E9] rounded-[10px] flex gap-2 sm:gap-[8px] py-2 sm:py-[10px] bg-white text-[#29303D] font-medium text-xs sm:text-sm leading-[18px] sm:leading-[20px] hover:bg-gray-50 transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        <img src="{{ asset('icons/download.svg') }}" class="w-3 h-3 sm:w-4 sm:h-4" alt="Download">
                        <span class="text-xs sm:text-sm font-medium font-inter leading-tight text-[#29303D]">Download</span>
                    </button>
                </div>
            </article>

            <article
                class="w-full max-w-[400px] sm:max-w-md lg:max-w-lg h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden mx-auto">
                <div class="px-4 sm:px-[25px] py-4 sm:py-[25px] w-full">
                    <div class="flex items-start gap-3 sm:gap-[16px] mb-6">
                        <div
                            class="p-2 sm:p-[12px] bg-[#F9FAFB] rounded-xl flex-shrink-0 flex items-center justify-center">
                            <img src="{{ asset('icons/file.svg') }}" class="w-6 h-6" alt="File icon">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3
                                class="text-[#29303D] text-sm sm:text-base font-playfair font-semibold leading-5 sm:leading-6 mb-1">
                                University Profile Brochure
                            </h3>
                            <p
                                class="text-xs sm:text-sm text-[#29303D] opacity-[0.7] font-normal font-inter leading-4 sm:leading-tight">
                                Complete overview of UB programs and facilities
                            </p>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mb-4 sm:mb-6">
                        <div class="flex gap-3 sm:gap-[16px] items-center">
                            <span
                                class="text-xs sm:text-sm font-medium font-inter leading-tight text-[#29303D] opacity-[0.6]">PDF</span>
                            <span
                                class="text-xs sm:text-sm font-inter font-normal leading-tight text-[#29303D] opacity-[0.6]">5.2
                                MB</span>
                        </div>

                        <div class="flex gap-1 sm:gap-[4px] items-center">
                            <img src="{{ asset('icons/download.svg') }}" class="w-3 h-3 sm:w-4 sm:h-4 opacity-60"
                                alt="Download">
                            <span
                                class="text-xs sm:text-sm font-inter font-normal leading-tight text-[#29303D] opacity-[0.6]">2.5k</span>
                        </div>
                    </div>

                    <button
                        class="w-full px-3 sm:px-[17px] justify-center items-center border border-[#E2E4E9] rounded-[10px] flex gap-2 sm:gap-[8px] py-2 sm:py-[10px] bg-white text-[#29303D] font-medium text-xs sm:text-sm leading-[18px] sm:leading-[20px] hover:bg-gray-50 transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        <img src="{{ asset('icons/download.svg') }}" class="w-3 h-3 sm:w-4 sm:h-4" alt="Download">
                        <span
                            class="text-xs sm:text-sm font-medium font-inter leading-tight text-[#29303D]">Download</span>
                    </button>
                </div>
            </article>

            <article
                class="w-full max-w-[400px] sm:max-w-md lg:max-w-lg h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden mx-auto">
                <div class="px-4 sm:px-[25px] py-4 sm:py-[25px] w-full">
                    <div class="flex items-start gap-3 sm:gap-[16px] mb-6">
                        <div
                            class="p-2 sm:p-[12px] bg-[#F9FAFB] rounded-xl flex-shrink-0 flex items-center justify-center">
                            <img src="{{ asset('icons/file.svg') }}" class="w-6 h-6" alt="File icon">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3
                                class="text-[#29303D] text-sm sm:text-base font-playfair font-semibold leading-5 sm:leading-6 mb-1">
                                University Profile Brochure
                            </h3>
                            <p
                                class="text-xs sm:text-sm text-[#29303D] opacity-[0.7] font-normal font-inter leading-4 sm:leading-tight">
                                Complete overview of UB programs and facilities
                            </p>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mb-4 sm:mb-6">
                        <div class="flex gap-3 sm:gap-[16px] items-center">
                            <span
                                class="text-xs sm:text-sm font-medium font-inter leading-tight text-[#29303D] opacity-[0.6]">PDF</span>
                            <span
                                class="text-xs sm:text-sm font-inter font-normal leading-tight text-[#29303D] opacity-[0.6]">5.2
                                MB</span>
                        </div>

                        <div class="flex gap-1 sm:gap-[4px] items-center">
                            <img src="{{ asset('icons/download.svg') }}" class="w-3 h-3 sm:w-4 sm:h-4 opacity-60"
                                alt="Download">
                            <span
                                class="text-xs sm:text-sm font-inter font-normal leading-tight text-[#29303D] opacity-[0.6]">2.5k</span>
                        </div>
                    </div>

                    <button
                        class="w-full px-3 sm:px-[17px] justify-center items-center border border-[#E2E4E9] rounded-[10px] flex gap-2 sm:gap-[8px] py-2 sm:py-[10px] bg-white text-[#29303D] font-medium text-xs sm:text-sm leading-[18px] sm:leading-[20px] hover:bg-gray-50 transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        <img src="{{ asset('icons/download.svg') }}" class="w-3 h-3 sm:w-4 sm:h-4" alt="Download">
                        <span
                            class="text-xs sm:text-sm font-medium font-inter leading-tight text-[#29303D]">Download</span>
                    </button>
                </div>
            </article>

            <article
                class="w-full max-w-[400px] sm:max-w-md lg:max-w-lg h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden mx-auto">
                <div class="px-4 sm:px-[25px] py-4 sm:py-[25px] w-full">
                    <div class="flex items-start gap-3 sm:gap-[16px] mb-6">
                        <div
                            class="p-2 sm:p-[12px] bg-[#F9FAFB] rounded-xl flex-shrink-0 flex items-center justify-center">
                            <img src="{{ asset('icons/file.svg') }}" class="w-6 h-6" alt="File icon">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3
                                class="text-[#29303D] text-sm sm:text-base font-playfair font-semibold leading-5 sm:leading-6 mb-1">
                                University Profile Brochure
                            </h3>
                            <p
                                class="text-xs sm:text-sm text-[#29303D] opacity-[0.7] font-normal font-inter leading-4 sm:leading-tight">
                                Complete overview of UB programs and facilities
                            </p>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mb-4 sm:mb-6">
                        <div class="flex gap-3 sm:gap-[16px] items-center">
                            <span
                                class="text-xs sm:text-sm font-medium font-inter leading-tight text-[#29303D] opacity-[0.6]">PDF</span>
                            <span
                                class="text-xs sm:text-sm font-inter font-normal leading-tight text-[#29303D] opacity-[0.6]">5.2
                                MB</span>
                        </div>

                        <div class="flex gap-1 sm:gap-[4px] items-center">
                            <img src="{{ asset('icons/download.svg') }}" class="w-3 h-3 sm:w-4 sm:h-4 opacity-60"
                                alt="Download">
                            <span
                                class="text-xs sm:text-sm font-inter font-normal leading-tight text-[#29303D] opacity-[0.6]">2.5k</span>
                        </div>
                    </div>

                    <button
                        class="w-full px-3 sm:px-[17px] justify-center items-center border border-[#E2E4E9] rounded-[10px] flex gap-2 sm:gap-[8px] py-2 sm:py-[10px] bg-white text-[#29303D] font-medium text-xs sm:text-sm leading-[18px] sm:leading-[20px] hover:bg-gray-50 transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        <img src="{{ asset('icons/download.svg') }}" class="w-3 h-3 sm:w-4 sm:h-4" alt="Download">
                        <span
                            class="text-xs sm:text-sm font-medium font-inter leading-tight text-[#29303D]">Download</span>
                    </button>
                </div>
            </article>

        </div>
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
    </section>

    <div
        class="lg:max-w-6xl flex-col lg:flex-row items-center align-middle mx-auto py-10 lg:pt-20 lg:pb-16 px-4 sm:px-6 lg:px-8 font-inter">
        <div class="rounded-3xl bg-gradient-to-r from-[#0000FF] to-[#6699FF] p-10 text-center text-white">
            <!-- Title -->
            <h2 class="text-[30px] font-playfair font-bold mb-3">Need Everything?</h2>

            <!-- Description -->
            <p class="font-thin text-[20px] lg:max-w-2xl mx-auto mb-6">
                Download our complete media kit with all brochures, posters, and
                promotional materials in one package
            </p>

            <!-- Button -->
            <a href="#"
                class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 transition border border-white/20 text-white px-12 py-3 rounded-lg text-sm font-medium">
                Download Complete Media Kit
                <img src="{{ asset('icons/arrow-right-white.svg') }}" alt="">
            </a>
        </div>
    </div>

@endsection
