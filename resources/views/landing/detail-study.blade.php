@extends('core.app')

@section('title', 'Detail Study Page')

@section('content')

    <div class="bg-[#F0F2F4] w-full h-[80px] flex items-center px-4 md:px-8 lg:px-28">
        <div class="flex items-center space-x-4">
            <div class="w-[16px] h-[16px]">
                <img src="{{ asset('icons/home.svg') }}" alt="Home Icon" class="w-full h-full">
            </div>
            <span class="text-[#29303D] text-[14px] font-light">Home</span>
            <div class="w-[16px] h-[16px]">
                <img src="{{ asset('icons/arrow-right-chevron.svg') }}" alt="Right Arrow" class="w-full h-full">
            </div>
        </div>
        <div class="flex items-center space-x-4 ml-4">
            <span class="text-[#29303D] text-[14px] font-light">Detail Study in UB</span>
        </div>
    </div>

    <section id="study-in-ub"
        class="w-full bg-gradient-to-b from-[#F9FAFB] to-[#F0F2F4] px-4 sm:px-8 md:px-16 lg:px-28 py-10 md:py-16 lg:py-20">
        <div class="max-w-[1280px] mx-auto flex flex-col gap-8 md:gap-12 lg:gap-16">

            <div class="bg-white rounded-[16px] p-[32px] shadow-[0px_4px_20px_-2px_#29303D1A] flex flex-col gap-[24px]">
                <div class="flex flex-col gap-[12px]">
                    <div
                        class="logo-container w-[64px] h-[64px] bg-gradient-to-br from-[#0000FF] to-[#6699FF] rounded-[16px] flex justify-center items-center">
                        <img src="{{ asset('icons/togs.svg') }}" alt="Program Icon" class="w-[32px] h-[32px]">
                    </div>
                    <h3
                        class="font-playfair font-bold text-[20px] leading-[28px] text-[#29303D] md:text-[24px] md:leading-[32px]">
                        International Undergraduate Program
                    </h3>
                    <p
                        class="font-inter font-normal text-[14px] leading-[24px] text-[#29303DB2] md:text-[16px] md:leading-[28px]">
                        Comprehensive bachelor's degree programs taught in English with global perspectives
                    </p>
                </div>

                <p
                    class="font-inter font-normal text-[14px] leading-[24px] text-[#29303DB2] md:text-[16px] md:leading-[28px]">
                    The IUP at Universitas Brawijaya offers globally oriented education with all courses in English
                    and support from international faculty. With 2,500+ students, the program provides exchange
                    opportunities, industry collaborations, and international networks. Emphasizing research and
                    innovation, IUP prepares graduates for careers in multinational companies, global organizations,
                    or further studies at top universities.
                </p>

                <div class="flex justify-between items-center flex-wrap gap-4 md:gap-6">
                    <span class="flex items-center gap-2 text-[#29303DB2] text-[14px] md:text-[16px]">
                        <img src="{{ asset('icons/user-black.svg') }}" alt="user" class="w-4 h-4 md:w-5 md:h-5">
                        2,500+ students
                    </span>
                    <span class="text-[#0000FF] text-[14px] font-medium md:text-[16px]">
                        4 years
                    </span>
                </div>

                <ul
                    class="flex flex-col gap-2 mt-2 text-[14px] leading-[20px] font-inter text-[#29303D] md:text-[16px] md:leading-[24px]">
                    <li class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-[#0000FF] rounded-full"></span>
                        English-taught courses
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-[#0000FF] rounded-full"></span>
                        International faculty
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-[#0000FF] rounded-full"></span>
                        Exchange opportunities
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-[#0000FF] rounded-full"></span>
                        Industry partnerships
                    </li>
                </ul>

                <a href="#"
                    class="mt-auto w-full h-10 border border-[#E2E4E9] rounded-xl flex items-center justify-center gap-2 px-4 py-2 font-medium text-[#29303D] text-sm md:text-[14px] leading-5 md:leading-[20px]">
                    Apply Now
                    <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                </a>
            </div>


            <div class="w-full flex flex-col gap-2">
                <h2
                    class="w-full font-playfair font-bold text-3xl md:text-[10px] lg:text-[30px] leading-[36px] text-[#29303D]">
                    Study
                </h2>

            </div>

            <div class="w-full mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

                <div
                    class="w-full max-w-full sm:max-w-[384px] mx-auto h-auto md:h-[550px] bg-white rounded-2xl shadow-md p-6 md:p-8 flex flex-col gap-4 md:gap-6">
                    <div
                        class="w-12 h-12 md:w-16 md:h-16 rounded-2xl flex items-center justify-center bg-gradient-to-br from-[#0000FF] to-[#6699FF]">
                        <img src="{{ asset('icons/togs.svg') }}" alt="Program Icon" class="w-6 h-6 md:w-8 md:h-8">
                    </div>

                    <h3
                        class="font-playfair font-bold text-lg md:text-xl lg:text-[20px] leading-6 md:leading-7 lg:leading-[28px] text-[#29303D]">
                        International Undergraduate Program
                    </h3>

                    <p class="font-inter font-normal text-sm md:text-base leading-5 md:leading-6 text-[#29303DB2]">
                        Comprehensive bachelor's degree programs taught in English with global perspectives
                    </p>

                    <div class="flex justify-between items-center text-sm md:text-[14px] leading-5 md:leading-[20px]">
                        <span class="flex items-center gap-2 text-[#29303DB2]">
                            <img src="{{ asset('icons/user-black.svg') }}" class="w-4 h-4" alt="user">
                            2,500+ students
                        </span>
                        <span class="text-[#0000FF] font-medium">4 years</span>
                    </div>

                    <ul
                        class="flex flex-col gap-2 mt-2 text-sm md:text-[14px] leading-5 md:leading-[20px] font-inter text-[#29303D]">
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-[#0000FF] rounded-full"></span>
                            English-taught courses</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-[#0000FF] rounded-full"></span>
                            International faculty</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-[#0000FF] rounded-full"></span>
                            Exchange opportunities</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Industry
                            partnerships</li>
                    </ul>

                    <a href="#"
                        class="mt-auto w-full h-10 border border-[#E2E4E9] rounded-xl flex items-center justify-center gap-2 px-4 py-2 font-medium text-[#29303D] text-sm md:text-[14px] leading-5 md:leading-[20px]">
                        Learn More
                        <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                    </a>
                </div>

                <div
                    class="w-full max-w-full sm:max-w-[384px] mx-auto h-auto md:h-[550px] bg-white rounded-2xl shadow-md p-6 md:p-8 flex flex-col gap-4 md:gap-6">
                    <div
                        class="w-12 h-12 md:w-16 md:h-16 rounded-2xl flex items-center justify-center bg-gradient-to-br from-[#0000FF] to-[#6699FF]">
                        <img src="{{ asset('icons/globe.svg') }}" alt="Program Icon" class="w-6 h-6 md:w-8 md:h-8">
                    </div>
                    <h3
                        class="font-playfair font-bold text-lg md:text-xl lg:text-[20px] leading-6 md:leading-7 lg:leading-[28px] text-[#29303D]">
                        Double Degree Programs
                    </h3>
                    <p class="font-inter font-normal text-sm md:text-base leading-5 md:leading-6 text-[#29303DB2]">
                        Earn degrees from both UB and partner universities worldwide
                    </p>
                    <div class="flex justify-between items-center text-sm md:text-[14px] leading-5 md:leading-[20px]">
                        <span class="flex items-center gap-2 text-[#29303DB2]">
                            <img src="{{ asset('icons/user-black.svg') }}" class="w-4 h-4" alt="user">
                            800+ students
                        </span>
                        <span class="text-[#0000FF] font-medium">4–5 years</span>
                    </div>
                    <ul
                        class="flex flex-col gap-2 mt-2 text-sm md:text-[14px] leading-5 md:leading-[20px] font-inter text-[#29303D]">
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Two
                            university degrees</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Study
                            abroad experience</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Global
                            network access</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Enhanced
                            career prospects</li>
                    </ul>
                    <a href="#"
                        class="mt-auto w-full h-10 border border-[#E2E4E9] rounded-xl flex items-center justify-center gap-2 px-4 py-2 font-medium text-[#29303D] text-sm md:text-[14px] leading-5 md:leading-[20px]">
                        Learn More
                        <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                    </a>
                </div>

                <div
                    class="w-full max-w-full sm:max-w-[384px] mx-auto h-auto md:h-[550px] bg-white rounded-2xl shadow-md p-6 md:p-8 flex flex-col gap-4 md:gap-6">
                    <div
                        class="w-12 h-12 md:w-16 md:h-16 rounded-2xl flex items-center justify-center bg-gradient-to-br from-[#0000FF] to-[#6699FF]">
                        <img src="{{ asset('icons/book.svg') }}" alt="Program Icon" class="w-6 h-6 md:w-8 md:h-8">
                    </div>
                    <h3
                        class="font-playfair font-bold text-lg md:text-xl lg:text-[20px] leading-6 md:leading-7 lg:leading-[28px] text-[#29303D]">
                        International Master's
                    </h3>
                    <p class="font-inter font-normal text-sm md:text-base leading-5 md:leading-6 text-[#29303DB2]">
                        Advanced graduate programs with research focus and global collaboration
                    </p>
                    <div class="flex justify-between items-center text-sm md:text-[14px] leading-5 md:leading-[20px]">
                        <span class="flex items-center gap-2 text-[#29303DB2]">
                            <img src="{{ asset('icons/user-black.svg') }}" class="w-4 h-4" alt="user">
                            1,200+ students
                        </span>
                        <span class="text-[#0000FF] font-medium">2 years</span>
                    </div>
                    <ul
                        class="flex flex-col gap-2 mt-2 text-sm md:text-[14px] leading-5 md:leading-[20px] font-inter text-[#29303D]">
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-[#0000FF] rounded-full"></span>
                            Research opportunities</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-[#0000FF] rounded-full"></span>
                            International supervision</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-[#0000FF] rounded-full"></span>
                            Conference participation</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-[#0000FF] rounded-full"></span>
                            Publication support</li>
                    </ul>
                    <a href="#"
                        class="mt-auto w-full h-10 border border-[#E2E4E9] rounded-xl flex items-center justify-center gap-2 px-4 py-2 font-medium text-[#29303D] text-sm md:text-[14px] leading-5 md:leading-[20px]">
                        Learn More
                        <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                    </a>
                </div>

            </div>

            <div class="w-full flex justify-center items-center py-8">
                <div class="flex items-center gap-4">
                    <button class="w-10 h-10 md:w-12 md:h-12 bg-[#FFFFFF] rounded-full flex justify-center items-center">
                        <img src="{{ asset('icons/vector-left.svg') }}" alt="Previous" class="w-3 h-3 md:w-4 md:h-4">
                    </button>

                    <div class="flex items-center gap-2 md:gap-4 bg-[#FFFFFF] rounded-full p-1 md:p-2">
                        <button
                            class="w-7 h-7 md:w-9 md:h-9 bg-[#1D4ED8] text-white rounded-full flex justify-center items-center text-sm md:text-base">
                            1
                        </button>

                        <button
                            class="w-7 h-7 md:w-9 md:h-9 text-[#1D4ED8] flex justify-center items-center text-sm md:text-base">
                            2
                        </button>

                        <button
                            class="w-7 h-7 md:w-9 md:h-9 text-[#1D4ED8] flex justify-center items-center text-sm md:text-base">
                            3
                        </button>
                    </div>

                    <button class="w-10 h-10 md:w-12 md:h-12 bg-[#FFFFFF] rounded-full flex justify-center items-center">
                        <img src="{{ asset('icons/vector-right.svg') }}" alt="Next" class="w-3 h-3 md:w-4 md:h-4">
                    </button>
                </div>
            </div>
        </div>
    </section>

@endsection
