<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-[#FFFFFF] w-full min-h-screen">
    <div class="max-w-[1440px] mx-auto">

        <nav class="w-full h-20 flex justify-between items-center bg-[#FFFFFFF2] border-b px-4 md:px-8 lg:px-28">

            <div class="flex items-center space-x-4">
                <img src="{{ asset('/images/ub.png') }}" alt="Logo UB" class="h-6 md:h-8">
                <img src="{{ asset('/images/gub.png') }}" alt="Logo Gub" class="h-6 md:h-8">
            </div>

            <div class="hidden lg:flex items-center space-x-6 xl:space-x-8">
                <a href="/"
                    class="text-[#29303D] font-medium text-[15px] leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors">Home</a>
                <a href="/about"
                    class="text-[#29303D] font-medium text-[15px] leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors">About</a>
                <a href="/news"
                    class="text-[#29303D] font-medium text-[15px] leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors">News</a>
                <a href="/event"
                    class="text-[#29303D] font-medium text-[15px] leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors">Event</a>
                <a href="/study"
                    class="text-[#29303D] font-medium text-[15px] leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors">Study
                    in UB</a>
                <a href="#"
                    class="text-[#29303D] font-medium text-[15px] leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors">Partnership</a>
                <a href="#"
                    class="text-[#29303D] font-medium text-[15px] leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors">Gallery</a>
            </div>

            <div class="flex items-center space-x-4">
                <button
                    class="bg-[#0000FF] text-white py-2 px-3 md:px-4 rounded-[10px] w-[70px] md:w-[78px] h-[36px] flex items-center gap-[6px] md:gap-[8px]">
                    <span class="font-medium text-[12px] md:text-[14px] leading-[24px] tracking-normal">Eng</span>
                    <img src="{{ asset('icons/globe.svg') }}" alt="Globe Icon" class="w-4 h-4 md:w-5 md:h-5">
                </button>

                <button id="mobile-menu-button"
                    class="lg:hidden flex flex-col justify-center items-center w-8 h-8 space-y-1">
                    <span class="block w-6 h-0.5 bg-[#29303D] transition-all duration-300"></span>
                    <span class="block w-6 h-0.5 bg-[#29303D] transition-all duration-300"></span>
                    <span class="block w-6 h-0.5 bg-[#29303D] transition-all duration-300"></span>
                </button>
            </div>

            <div id="mobile-menu"
                class="absolute top-20 left-0 right-0 bg-white border-b shadow-lg transform -translate-y-full opacity-0 invisible transition-all duration-300 lg:hidden z-50">
                <div class="flex flex-col space-y-4 p-6">
                    <a href="#"
                        class="text-[#29303D] font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">Home</a>
                    <a href="#"
                        class="text-[#29303D] font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">About</a>
                    <a href="#"
                        class="text-[#29303D] font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">News</a>
                    <a href="#"
                        class="text-[#29303D] font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">Event</a>
                    <a href="#"
                        class="text-[#29303D] font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">Study
                        in UB</a>
                    <a href="#"
                        class="text-[#29303D] font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">Partnership</a>
                    <a href="#"
                        class="text-[#29303D] font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">Gallery</a>
                </div>
            </div>
        </nav>

        <div class="bg-[#F0F2F4] w-full h-[80px] flex items-center px-[112px]">
            <div class="flex items-center space-x-4">
                <div class="w-[16px] h-[16px]">
                    <img src="{{ asset('icons/home.svg') }}" alt="Home Icon" class="w-full h-full">
                </div>
                <span class="text-[#29303D] text-[14px] font-medium">Home</span>
                <div class="w-[16px] h-[16px]">
                    <img src="{{ asset('icons/arrow-right-chevron.svg') }}" alt="Right Arrow" class="w-full h-full">
                </div>
            </div>
            <div class="flex items-center space-x-4 ml-4">
                <span class="text-[#29303D] text-[14px] font-medium">Study in UB</span>
            </div>
        </div>

        <section id="study-in-ub"
            class="w-full bg-gradient-to-b from-[#F9FAFB] to-[#F0F2F4] px-[16px] sm:px-[32px] md:px-[80px] py-[40px] sm:py-[60px] md:py-[80px]">
            <!-- Inner container -->
            <div class="max-w-[1280px] mx-auto flex flex-col gap-[64px]">

                <!-- Heading -->
                <div class="w-full flex flex-col items-center gap-4">
                    <h2
                        class="w-[1216px] text-center font-playfair font-bold text-[36px] leading-[40px] text-[#29303D]">
                        Study in UB
                    </h2>
                    <p
                        class="max-w-[768px] text-center font-inter font-light text-[20px] leading-[28px] text-[#29303DB2]">
                        Discover world-class education opportunities and join our diverse international
                        academic community
                    </p>
                </div>

                <!-- Metrics row -->
                <div class="w-[1216px] mx-auto grid grid-cols-2 md:grid-cols-4 gap-[32px] place-items-center">
                    <!-- item -->
                    <div class="flex flex-col items-center">
                        <div
                            class="w-[280px] text-center font-inter font-bold text-[36px] leading-[40px] text-[#0000FF]">
                            150+
                        </div>
                        <span class="mt-1 text-[#29303DB2] font-inter text-[14px] leading-[20px]">Study Programs</span>
                    </div>

                    <div class="flex flex-col items-center">
                        <div
                            class="w-[280px] text-center font-inter font-bold text-[36px] leading-[40px] text-[#0000FF]">
                            15
                        </div>
                        <span class="mt-1 text-[#29303DB2] font-inter text-[14px] leading-[20px]">Faculties</span>
                    </div>

                    <div class="flex flex-col items-center">
                        <div
                            class="w-[280px] text-center font-inter font-bold text-[36px] leading-[40px] text-[#0000FF]">
                            100+
                        </div>
                        <span class="mt-1 text-[#29303DB2] font-inter text-[14px] leading-[20px]">Partner
                            Universities</span>
                    </div>

                    <div class="flex flex-col items-center">
                        <div
                            class="w-[280px] text-center font-inter font-bold text-[36px] leading-[40px] text-[#0000FF]">
                            4,500+
                        </div>
                        <span class="mt-1 text-[#29303DB2] font-inter text-[14px] leading-[20px]">International
                            Students</span>
                    </div>
                </div>

                <!-- Cards Section -->
                <div class="w-[1216px] mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[32px]">

                    <!-- Card 1 -->
                    <div
                        class="w-[384px] h-[550px] bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] p-[32px] flex flex-col gap-[24px]">
                        <!-- Icon -->
                        <div
                            class="w-[64px] h-[64px] rounded-[16px] flex items-center justify-center bg-gradient-to-br from-[#0000FF] to-[#6699FF]">
                            <img src="{{ asset('icons/togs.svg') }}" alt="Program Icon" class="w-8 h-8">
                        </div>

                        <!-- Title -->
                        <h3 class="font-playfair font-bold text-[20px] leading-[28px] text-[#29303D]">
                            International Undergraduate Program
                        </h3>

                        <!-- Description -->
                        <p class="font-inter font-normal text-[16px] leading-[24px] text-[#29303DB2]">
                            Comprehensive bachelor’s degree programs taught in English with global perspectives
                        </p>

                        <!-- Meta -->
                        <div class="flex justify-between items-center text-[14px] leading-[20px]">
                            <span class="flex items-center gap-2 text-[#29303DB2]">
                                <img src="{{ asset('icons/user-black.svg') }}" class="w-4 h-4" alt="user">
                                2,500+ students
                            </span>
                            <span class="text-[#0000FF] font-medium">4 years</span>
                        </div>

                        <!-- List -->
                        <ul class="flex flex-col gap-2 mt-2 text-[14px] leading-[20px] font-inter text-[#29303D]">
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> English-taught courses</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> International faculty</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Exchange opportunities</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Industry partnerships</li>
                        </ul>

                        <!-- Button -->
                        <a href="#"
                            class="mt-auto w-[320px] h-[40px] border border-[#E2E4E9] rounded-[10px] flex items-center justify-center gap-[8px] px-[17px] py-[10px] font-medium text-[#29303D] text-[14px] leading-[20px]">
                            Learn More
                            <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                        </a>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="w-[384px] h-[550px] bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] p-[32px] flex flex-col gap-[24px]">
                        <div
                            class="w-[64px] h-[64px] rounded-[16px] flex items-center justify-center bg-gradient-to-br from-[#0000FF] to-[#6699FF]">
                            <img src="{{ asset('icons/globe.svg') }}" alt="Program Icon" class="w-8 h-8">
                        </div>
                        <h3 class="font-playfair font-bold text-[20px] leading-[28px] text-[#29303D]">
                            Double Degree Programs
                        </h3>
                        <p class="font-inter font-normal text-[16px] leading-[24px] text-[#29303DB2]">
                            Earn degrees from both UB and partner universities worldwide
                        </p>
                        <div class="flex justify-between items-center text-[14px] leading-[20px]">
                            <span class="flex items-center gap-2 text-[#29303DB2]">
                                <img src="{{ asset('icons/user-black.svg') }}" class="w-4 h-4" alt="user">
                                800+ students
                            </span>
                            <span class="text-[#0000FF] font-medium">4–5 years</span>
                        </div>
                        <ul class="flex flex-col gap-2 mt-2 text-[14px] leading-[20px] font-inter text-[#29303D]">
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Two university degrees</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Study abroad experience</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Global network access</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Enhanced career prospects</li>
                        </ul>
                        <a href="#"
                            class="mt-auto w-[320px] h-[40px] border border-[#E2E4E9] rounded-[10px] flex items-center justify-center gap-[8px] px-[17px] py-[10px] font-medium text-[#29303D] text-[14px] leading-[20px]">
                            Learn More
                            <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                        </a>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="w-[384px] h-[550px] bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] p-[32px] flex flex-col gap-[24px]">
                        <div
                            class="w-[64px] h-[64px] rounded-[16px] flex items-center justify-center bg-gradient-to-br from-[#0000FF] to-[#6699FF]">
                            <img src="{{ asset('icons/book.svg') }}" alt="Program Icon" class="w-8 h-8">
                        </div>
                        <h3 class="font-playfair font-bold text-[20px] leading-[28px] text-[#29303D]">
                            International Master’s
                        </h3>
                        <p class="font-inter font-normal text-[16px] leading-[24px] text-[#29303DB2]">
                            Advanced graduate programs with research focus and global collaboration
                        </p>
                        <div class="flex justify-between items-center text-[14px] leading-[20px]">
                            <span class="flex items-center gap-2 text-[#29303DB2]">
                                <img src="{{ asset('icons/user-black.svg') }}" class="w-4 h-4" alt="user">
                                1,200+ students
                            </span>
                            <span class="text-[#0000FF] font-medium">2 years</span>
                        </div>
                        <ul class="flex flex-col gap-2 mt-2 text-[14px] leading-[20px] font-inter text-[#29303D]">
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Research opportunities</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> International supervision</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Conference participation</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Publication support</li>
                        </ul>
                        <a href="#"
                            class="mt-auto w-[320px] h-[40px] border border-[#E2E4E9] rounded-[10px] flex items-center justify-center gap-[8px] px-[17px] py-[10px] font-medium text-[#29303D] text-[14px] leading-[20px]">
                            Learn More
                            <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                        </a>
                    </div>

                    <!-- Card 1 -->
                    <div
                        class="w-[384px] h-[550px] bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] p-[32px] flex flex-col gap-[24px]">
                        <!-- Icon -->
                        <div
                            class="w-[64px] h-[64px] rounded-[16px] flex items-center justify-center bg-gradient-to-br from-[#0000FF] to-[#6699FF]">
                            <img src="{{ asset('icons/togs.svg') }}" alt="Program Icon" class="w-8 h-8">
                        </div>

                        <!-- Title -->
                        <h3 class="font-playfair font-bold text-[20px] leading-[28px] text-[#29303D]">
                            International Undergraduate Program
                        </h3>

                        <!-- Description -->
                        <p class="font-inter font-normal text-[16px] leading-[24px] text-[#29303DB2]">
                            Comprehensive bachelor’s degree programs taught in English with global perspectives
                        </p>

                        <!-- Meta -->
                        <div class="flex justify-between items-center text-[14px] leading-[20px]">
                            <span class="flex items-center gap-2 text-[#29303DB2]">
                                <img src="{{ asset('icons/user-black.svg') }}" class="w-4 h-4" alt="user">
                                2,500+ students
                            </span>
                            <span class="text-[#0000FF] font-medium">4 years</span>
                        </div>

                        <!-- List -->
                        <ul class="flex flex-col gap-2 mt-2 text-[14px] leading-[20px] font-inter text-[#29303D]">
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> English-taught courses</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> International faculty</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Exchange opportunities</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Industry partnerships</li>
                        </ul>

                        <!-- Button -->
                        <a href="#"
                            class="mt-auto w-[320px] h-[40px] border border-[#E2E4E9] rounded-[10px] flex items-center justify-center gap-[8px] px-[17px] py-[10px] font-medium text-[#29303D] text-[14px] leading-[20px]">
                            Learn More
                            <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                        </a>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="w-[384px] h-[550px] bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] p-[32px] flex flex-col gap-[24px]">
                        <div
                            class="w-[64px] h-[64px] rounded-[16px] flex items-center justify-center bg-gradient-to-br from-[#0000FF] to-[#6699FF]">
                            <img src="{{ asset('icons/globe.svg') }}" alt="Program Icon" class="w-8 h-8">
                        </div>
                        <h3 class="font-playfair font-bold text-[20px] leading-[28px] text-[#29303D]">
                            Double Degree Programs
                        </h3>
                        <p class="font-inter font-normal text-[16px] leading-[24px] text-[#29303DB2]">
                            Earn degrees from both UB and partner universities worldwide
                        </p>
                        <div class="flex justify-between items-center text-[14px] leading-[20px]">
                            <span class="flex items-center gap-2 text-[#29303DB2]">
                                <img src="{{ asset('icons/user-black.svg') }}" class="w-4 h-4" alt="user">
                                800+ students
                            </span>
                            <span class="text-[#0000FF] font-medium">4–5 years</span>
                        </div>
                        <ul class="flex flex-col gap-2 mt-2 text-[14px] leading-[20px] font-inter text-[#29303D]">
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Two university degrees</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Study abroad experience</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Global network access</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Enhanced career prospects</li>
                        </ul>
                        <a href="#"
                            class="mt-auto w-[320px] h-[40px] border border-[#E2E4E9] rounded-[10px] flex items-center justify-center gap-[8px] px-[17px] py-[10px] font-medium text-[#29303D] text-[14px] leading-[20px]">
                            Learn More
                            <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                        </a>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="w-[384px] h-[550px] bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] p-[32px] flex flex-col gap-[24px]">
                        <div
                            class="w-[64px] h-[64px] rounded-[16px] flex items-center justify-center bg-gradient-to-br from-[#0000FF] to-[#6699FF]">
                            <img src="{{ asset('icons/book.svg') }}" alt="Program Icon" class="w-8 h-8">
                        </div>
                        <h3 class="font-playfair font-bold text-[20px] leading-[28px] text-[#29303D]">
                            International Master’s
                        </h3>
                        <p class="font-inter font-normal text-[16px] leading-[24px] text-[#29303DB2]">
                            Advanced graduate programs with research focus and global collaboration
                        </p>
                        <div class="flex justify-between items-center text-[14px] leading-[20px]">
                            <span class="flex items-center gap-2 text-[#29303DB2]">
                                <img src="{{ asset('icons/user-black.svg') }}" class="w-4 h-4" alt="user">
                                1,200+ students
                            </span>
                            <span class="text-[#0000FF] font-medium">2 years</span>
                        </div>
                        <ul class="flex flex-col gap-2 mt-2 text-[14px] leading-[20px] font-inter text-[#29303D]">
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Research opportunities</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> International supervision</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Conference participation</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Publication support</li>
                        </ul>
                        <a href="#"
                            class="mt-auto w-[320px] h-[40px] border border-[#E2E4E9] rounded-[10px] flex items-center justify-center gap-[8px] px-[17px] py-[10px] font-medium text-[#29303D] text-[14px] leading-[20px]">
                            Learn More
                            <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                        </a>
                    </div>

                </div>

                <div class="w-full flex justify-center items-center py-8">
                    <div class="flex items-center gap-4">
                        <!-- Left Arrow Button -->
                        <button class="w-12 h-12 bg-[#FFFFFF] rounded-full flex justify-center items-center">
                            <img src="{{ asset('icons/vector-left.svg') }}" alt="Previous" class="w-4 h-4">
                        </button>

                        <!-- Pagination Items -->
                        <div class="flex items-center gap-4 bg-[#FFFFFF] rounded-full p-2">
                            <!-- Page 1 (Active) -->
                            <button
                                class="w-9 h-9 bg-[#1D4ED8] text-white rounded-full flex justify-center items-center">
                                1
                            </button>

                            <!-- Page 2 -->
                            <button class="w-9 h-9 text-[#1D4ED8] flex justify-center items-center">
                                2
                            </button>

                            <!-- Page 3 -->
                            <button class="w-9 h-9 text-[#1D4ED8] flex justify-center items-center">
                                3
                            </button>
                        </div>

                        <!-- Right Arrow Button -->
                        <button class="w-12 h-12 bg-[#FFFFFF] rounded-full flex justify-center items-center">
                            <img src="{{ asset('icons/vector-right.svg') }}" alt="Next" class="w-4 h-4">
                        </button>
                    </div>
                </div>

                <div
                    class="w-full max-w-[1216px] h-[264px] mx-auto bg-white rounded-[24px] p-[48px] flex flex-col justify-between items-center text-center shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px]">
                    <h3 class="text-[30px] font-playfair font-bold leading-[36px] text-black">Ready to Start Your
                        Global Journey?
                    </h3>
                    <p
                        class="text-[20px] text-[#29303DB2] font-light font-inter leading-[28px] opacity-90 max-w-[672px] mt-4">
                        Join thousands of international students who have chosen UB as their
                        gateway to academic and professional success
                    </p>

                    <!-- Buttons -->
                    <div class="flex gap-4 mt-6">
                        <!-- Apply Now Button -->
                        <a href="#"
                            class="w-[137px] h-[44px] font-inter font-normal px-[32px] py-[11.5px] rounded-[10px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] shadow-[0px_4px_20px_-2px_#29303D1A] backdrop-blur-[4px] text-white text-[13px] font-medium flex items-center justify-center">
                            Apply Now
                        </a>

                        <!-- Download Brochure Button -->
                        <a href="#"
                            class="w-[198px] h-[44px] font-inter font-normal px-[33px] py-[12.5px] rounded-[10px] bg-white border border-[#E2E4E9] text-[13px] font-medium flex items-center justify-center">
                            Download Brochure
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section id="events"
            class="w-full h-auto bg-[#FFFFFF] px-[16px] py-[40px] sm:px-[32px] md:px-[80px] md:py-[80px]">
            <div class="max-w-[1280px] mx-auto px-[16px] sm:px-[32px] flex flex-col gap-[40px]">

                <!-- Heading -->
                <div class="w-full flex flex-col items-center gap-[16px]">
                    <h2
                        class="text-center font-playfair font-bold text-[32px] sm:text-[36px] leading-[40px] text-[#29303D]">
                        Upcoming Events
                    </h2>
                    <p
                        class="max-w-[672px] text-center font-inter text-[16px] sm:text-[20px] leading-[24px] sm:leading-[28px] font-light text-[#29303DB2]">
                        Join our international events and connect with the global academic community
                    </p>
                </div>

                <!-- Cards -->
                <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-[24px] md:gap-[32px]">

                    <!-- Card 1 -->
                    <article
                        class="w-full sm:w-[384px] h-[648px] bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
                        <div class="w-full h-[288px]">
                            <img src="{{ asset('images/conference.jpg') }}" alt="International Education Fair 2024"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="w-full h-[360px] p-[16px] sm:p-[24px] flex flex-col gap-[16px]">
                            <div class="w-full flex items-center justify-between">
                                <span
                                    class="inline-flex items-center rounded-full px-[12px] py-[4px] text-[12px] leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                    Education Fair
                                </span>
                                <span
                                    class="inline-flex items-center rounded-full px-[12px] py-[4px] text-[12px] leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                    upcoming
                                </span>
                            </div>
                            <h3
                                class="font-playfair font-bold text-[18px] sm:text-[20px] leading-[24px] sm:leading-[28px] text-[#29303D]">
                                International Education Fair 2024
                            </h3>
                            <p
                                class="font-inter text-[14px] sm:text-[16px] leading-[20px] sm:leading-[24px] text-[#29303DB2]">
                                Meet representatives from top universities worldwide and explore study abroad...
                            </p>
                            <div
                                class="flex flex-col gap-2 text-[12px] sm:text-[14px] leading-[16px] sm:leading-[20px] text-[#29303D99] font-inter">
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
                                class="mt-auto w-full sm:w-[336px] h-[40px] rounded-[10px] border border-[#E2E4E9] flex items-center justify-center gap-[8px] px-[17px] pt-[9.5px] pb-[10.5px] bg-white text-[#29303D] font-medium text-[14px] leading-[20px]">
                                Register Now
                                <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4"
                                    alt="">
                            </a>
                        </div>
                    </article>

                    <!-- Card 2 -->
                    <article
                        class="w-full sm:w-[384px] h-[648px] bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
                        <div class="w-full h-[288px]">
                            <img src="{{ asset('images/present.jpg') }}" alt="Global Research Symposium"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="w-full h-[360px] p-[16px] sm:p-[24px] flex flex-col gap-[16px]">
                            <div class="w-full flex items-center justify-between">
                                <span
                                    class="inline-flex items-center rounded-full px-[12px] py-[4px] text-[12px] leading-[16px] font-medium bg-[#EDE9FE] text-[#6D28D9]">
                                    Symposium
                                </span>
                                <span
                                    class="inline-flex items-center rounded-full px-[12px] py-[4px] text-[12px] leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                    upcoming
                                </span>
                            </div>
                            <h3
                                class="font-playfair font-bold text-[18px] sm:text-[20px] leading-[24px] sm:leading-[28px] text-[#29303D]">
                                Global Research Symposium
                            </h3>
                            <p
                                class="font-inter text-[14px] sm:text-[16px] leading-[20px] sm:leading-[24px] text-[#29303DB2]">
                                Leading researchers present cutting-edge findings in sustainability and innovation
                            </p>
                            <div
                                class="flex flex-col gap-2 text-[12px] sm:text-[14px] leading-[16px] sm:leading-[20px] text-[#29303D99] font-inter">
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
                                class="mt-auto w-full sm:w-[336px] h-[40px] rounded-[10px] border border-[#E2E4E9] flex items-center justify-center gap-[8px] px-[17px] pt-[9.5px] pb-[10.5px] bg-white text-[#29303D] font-medium text-[14px] leading-[20px]">
                                Register Now
                                <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4"
                                    alt="">
                            </a>
                        </div>
                    </article>

                    <!-- Card 3 -->
                    <article
                        class="w-full sm:w-[384px] h-[648px] bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
                        <div class="w-full h-[288px]">
                            <img src="{{ asset('images/fest.jpg') }}" alt="International Cultural Festival"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="w-full h-[360px] p-[16px] sm:p-[24px] flex flex-col gap-[16px]">
                            <div class="w-full flex items-center justify-between">
                                <span
                                    class="inline-flex items-center rounded-full px-[12px] py-[4px] text-[12px] leading-[16px] font-medium bg-[#FCE7F3] text-[#DB2777]">
                                    Cultural Event
                                </span>
                                <span
                                    class="inline-flex items-center rounded-full px-[12px] py-[4px] text-[12px] leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                    upcoming
                                </span>
                            </div>
                            <h3
                                class="font-playfair font-bold text-[18px] sm:text-[20px] leading-[24px] sm:leading-[28px] text-[#29303D]">
                                International Cultural Festival
                            </h3>
                            <p
                                class="font-inter text-[14px] sm:text-[16px] leading-[20px] sm:leading-[24px] text-[#29303DB2]">
                                Celebrate diversity with cultural performances, food, and traditions from...
                            </p>
                            <div
                                class="flex flex-col gap-2 text-[12px] sm:text-[14px] leading-[16px] sm:leading-[20px] text-[#29303D99] font-inter">
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
                                class="mt-auto w-full sm:w-[336px] h-[40px] rounded-[10px] border border-[#E2E4E9] flex items-center justify-center gap-[8px] px-[17px] pt-[9.5px] pb-[10.5px] bg-white text-[#29303D] font-medium text-[14px] leading-[20px]">
                                Register Now
                                <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4"
                                    alt="">
                            </a>
                        </div>
                    </article>

                    <!-- Card 1 -->
                    <article
                        class="w-full sm:w-[384px] h-[648px] bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
                        <div class="w-full h-[288px]">
                            <img src="{{ asset('images/conference.jpg') }}" alt="International Education Fair 2024"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="w-full h-[360px] p-[16px] sm:p-[24px] flex flex-col gap-[16px]">
                            <div class="w-full flex items-center justify-between">
                                <span
                                    class="inline-flex items-center rounded-full px-[12px] py-[4px] text-[12px] leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                    Education Fair
                                </span>
                                <span
                                    class="inline-flex items-center rounded-full px-[12px] py-[4px] text-[12px] leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                    upcoming
                                </span>
                            </div>
                            <h3
                                class="font-playfair font-bold text-[18px] sm:text-[20px] leading-[24px] sm:leading-[28px] text-[#29303D]">
                                International Education Fair 2024
                            </h3>
                            <p
                                class="font-inter text-[14px] sm:text-[16px] leading-[20px] sm:leading-[24px] text-[#29303DB2]">
                                Meet representatives from top universities worldwide and explore study abroad...
                            </p>
                            <div
                                class="flex flex-col gap-2 text-[12px] sm:text-[14px] leading-[16px] sm:leading-[20px] text-[#29303D99] font-inter">
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
                                class="mt-auto w-full sm:w-[336px] h-[40px] rounded-[10px] border border-[#E2E4E9] flex items-center justify-center gap-[8px] px-[17px] pt-[9.5px] pb-[10.5px] bg-white text-[#29303D] font-medium text-[14px] leading-[20px]">
                                Register Now
                                <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4"
                                    alt="">
                            </a>
                        </div>
                    </article>

                    <!-- Card 2 -->
                    <article
                        class="w-full sm:w-[384px] h-[648px] bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
                        <div class="w-full h-[288px]">
                            <img src="{{ asset('images/present.jpg') }}" alt="Global Research Symposium"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="w-full h-[360px] p-[16px] sm:p-[24px] flex flex-col gap-[16px]">
                            <div class="w-full flex items-center justify-between">
                                <span
                                    class="inline-flex items-center rounded-full px-[12px] py-[4px] text-[12px] leading-[16px] font-medium bg-[#EDE9FE] text-[#6D28D9]">
                                    Symposium
                                </span>
                                <span
                                    class="inline-flex items-center rounded-full px-[12px] py-[4px] text-[12px] leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                    upcoming
                                </span>
                            </div>
                            <h3
                                class="font-playfair font-bold text-[18px] sm:text-[20px] leading-[24px] sm:leading-[28px] text-[#29303D]">
                                Global Research Symposium
                            </h3>
                            <p
                                class="font-inter text-[14px] sm:text-[16px] leading-[20px] sm:leading-[24px] text-[#29303DB2]">
                                Leading researchers present cutting-edge findings in sustainability and innovation
                            </p>
                            <div
                                class="flex flex-col gap-2 text-[12px] sm:text-[14px] leading-[16px] sm:leading-[20px] text-[#29303D99] font-inter">
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
                                class="mt-auto w-full sm:w-[336px] h-[40px] rounded-[10px] border border-[#E2E4E9] flex items-center justify-center gap-[8px] px-[17px] pt-[9.5px] pb-[10.5px] bg-white text-[#29303D] font-medium text-[14px] leading-[20px]">
                                Register Now
                                <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4"
                                    alt="">
                            </a>
                        </div>
                    </article>

                    <!-- Card 3 -->
                    <article
                        class="w-full sm:w-[384px] h-[648px] bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
                        <div class="w-full h-[288px]">
                            <img src="{{ asset('images/fest.jpg') }}" alt="International Cultural Festival"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="w-full h-[360px] p-[16px] sm:p-[24px] flex flex-col gap-[16px]">
                            <div class="w-full flex items-center justify-between">
                                <span
                                    class="inline-flex items-center rounded-full px-[12px] py-[4px] text-[12px] leading-[16px] font-medium bg-[#FCE7F3] text-[#DB2777]">
                                    Cultural Event
                                </span>
                                <span
                                    class="inline-flex items-center rounded-full px-[12px] py-[4px] text-[12px] leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                    upcoming
                                </span>
                            </div>
                            <h3
                                class="font-playfair font-bold text-[18px] sm:text-[20px] leading-[24px] sm:leading-[28px] text-[#29303D]">
                                International Cultural Festival
                            </h3>
                            <p
                                class="font-inter text-[14px] sm:text-[16px] leading-[20px] sm:leading-[24px] text-[#29303DB2]">
                                Celebrate diversity with cultural performances, food, and traditions from...
                            </p>
                            <div
                                class="flex flex-col gap-2 text-[12px] sm:text-[14px] leading-[16px] sm:leading-[20px] text-[#29303D99] font-inter">
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
                                class="mt-auto w-full sm:w-[336px] h-[40px] rounded-[10px] border border-[#E2E4E9] flex items-center justify-center gap-[8px] px-[17px] pt-[9.5px] pb-[10.5px] bg-white text-[#29303D] font-medium text-[14px] leading-[20px]">
                                Register Now
                                <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4"
                                    alt="">
                            </a>
                        </div>
                    </article>

                </div>

                <div class="w-full flex justify-center items-center py-8">
                    <div class="flex items-center gap-4">
                        <!-- Left Arrow Button -->
                        <button class="w-12 h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                            <img src="{{ asset('icons/vector-left.svg') }}" alt="Previous" class="w-4 h-4">
                        </button>

                        <!-- Pagination Items -->
                        <div class="flex items-center gap-4 bg-[#F3F4F6] rounded-full p-2">
                            <!-- Page 1 (Active) -->
                            <button
                                class="w-9 h-9 bg-[#1D4ED8] text-white rounded-full flex justify-center items-center">
                                1
                            </button>

                            <!-- Page 2 -->
                            <button class="w-9 h-9 text-[#1D4ED8] flex justify-center items-center">
                                2
                            </button>

                            <!-- Page 3 -->
                            <button class="w-9 h-9 text-[#1D4ED8] flex justify-center items-center">
                                3
                            </button>
                        </div>

                        <!-- Right Arrow Button -->
                        <button class="w-12 h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                            <img src="{{ asset('icons/vector-right.svg') }}" alt="Next" class="w-4 h-4">
                        </button>
                    </div>
                </div>

                <div
                    class="w-full max-w-[1216px] h-[264px] mx-auto bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-[24px] p-[48px] flex flex-col justify-between items-center text-center shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px]">
                    <h3 class="text-[30px] font-playfair font-bold leading-[36px] text-white">Don't Miss Any Events
                    </h3>
                    <p
                        class="text-[20px] font-light font-inter leading-[28px] text-white opacity-90 max-w-[672px] mt-4">
                        Subscribe to our event calendar and be the first to know about
                        upcoming international activities.
                    </p>

                    <!-- Buttons -->
                    <div class="flex gap-4 mt-6">
                        <a href="#"
                            class="w-[230px] h-[44px] font-inter font-normal px-[33px] py-[12px] rounded-[10px] border border-white/20 bg-white/10 shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px] text-white font-inter font-medium text-[14px] flex items-center justify-center">
                            View Full Calendar
                        </a>
                        <a href="#"
                            class="w-[230px] h-[44px] font-inter font-normal px-[33px] py-[12px] rounded-[10px] border border-white/20 bg-white/10 shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px] text-white font-inter font-medium text-[14px] flex items-center justify-center">
                            Subscribe to Updates
                        </a>
                    </div>

                </div>

            </div>
        </section> --}}


    </div>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            const button = this;
            const spans = button.querySelectorAll('span');

            if (mobileMenu.classList.contains('invisible')) {
                // Show menu
                mobileMenu.classList.remove('-translate-y-full', 'opacity-0', 'invisible');
                mobileMenu.classList.add('translate-y-0', 'opacity-100', 'visible');

                // Transform hamburger to X
                spans[0].classList.add('rotate-45', 'translate-y-1.5');
                spans[1].classList.add('opacity-0');
                spans[2].classList.add('-rotate-45', '-translate-y-1.5');
            } else {
                // Hide menu
                mobileMenu.classList.add('-translate-y-full', 'opacity-0', 'invisible');
                mobileMenu.classList.remove('translate-y-0', 'opacity-100', 'visible');

                // Transform X back to hamburger
                spans[0].classList.remove('rotate-45', 'translate-y-1.5');
                spans[1].classList.remove('opacity-0');
                spans[2].classList.remove('-rotate-45', '-translate-y-1.5');
            }
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileMenuButton = document.getElementById('mobile-menu-button');

            if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
                if (!mobileMenu.classList.contains('invisible')) {
                    const spans = mobileMenuButton.querySelectorAll('span');
                    mobileMenu.classList.add('-translate-y-full', 'opacity-0', 'invisible');
                    mobileMenu.classList.remove('translate-y-0', 'opacity-100', 'visible');

                    spans[0].classList.remove('rotate-45', 'translate-y-1.5');
                    spans[1].classList.remove('opacity-0');
                    spans[2].classList.remove('-rotate-45', '-translate-y-1.5');
                }
            }
        });
    </script>
</body>



</html>
