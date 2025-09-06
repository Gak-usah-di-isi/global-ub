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
                    class="text-[#29303D] font-inter font-medium text-[15px] leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors">Home</a>
                <a href="/about"
                    class="text-[#29303D] font-inter font-medium text-[15px] leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors">About</a>
                <a href="/news"
                    class="text-[#29303D] font-inter font-medium text-[15px] leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors">News</a>
                <a href="/event"
                    class="text-[#29303D] font-inter font-medium text-[15px] leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors">Event</a>
                <a href="/study"
                    class="text-[#29303D] font-inter font-medium text-[15px] leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors">Study
                    in UB</a>
                <a href="#"
                    class="text-[#29303D] font-inter font-medium text-[15px] leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors">Partnership</a>
                <a href="#"
                    class="text-[#29303D] font-inter font-medium text-[15px] leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors">Gallery</a>
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
                    <a href="/"
                        class="text-[#29303D] font-inter font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">Home</a>
                    <a href="/about"
                        class="text-[#29303D] font-inter font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">About</a>
                    <a href="/news"
                        class="text-[#29303D] font-inter font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">News</a>
                    <a href="/event"
                        class="text-[#29303D] font-inter font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">Event</a>
                    <a href="/study"
                        class="text-[#29303D] font-inter font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">Study
                        in UB</a>
                    <a href="#"
                        class="text-[#29303D] font-inter font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">Partnership</a>
                    <a href="#"
                        class="text-[#29303D] font-inter font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">Gallery</a>
                </div>
            </div>
        </nav>

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
                <span class="text-[#29303D] text-[14px] font-medium">Event</span>
            </div>
        </div>

        <section id="events"
            class="w-full h-auto bg-[#FFFFFF] px-4 py-10 sm:px-8 md:px-16 md:py-16 lg:px-20 lg:py-20 xl:px-[80px] xl:py-[80px]">
            <div class="max-w-[1280px] mx-auto px-4 sm:px-6 md:px-8 flex flex-col gap-8 md:gap-10 lg:gap-[40px]">
                <div class="w-full flex flex-col items-center gap-4 md:gap-[16px]">
                    <h2
                        class="text-center font-playfair font-bold text-2xl sm:text-3xl md:text-[32px] lg:text-[36px] leading-[32px] sm:leading-[40px] text-[#29303D]">
                        Upcoming Events
                    </h2>
                    <p
                        class="max-w-full md:max-w-[672px] text-center font-inter text-base sm:text-lg md:text-[18px] lg:text-[20px] leading-6 sm:leading-7 md:leading-[24px] lg:leading-[28px] font-light text-[#29303DB2] px-2 sm:px-0">
                        Join our international events and connect with the global academic community
                    </p>
                </div>

                <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-6 lg:gap-[32px]">
                    <article
                        class="w-full h-auto sm:h-[648px] bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
                        <div class="w-full h-[200px] sm:h-[250px] md:h-[288px]">
                            <img src="/images/conference.jpg" alt="International Education Fair 2024"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="w-full h-auto p-4 sm:p-5 md:p-[24px] flex flex-col gap-4 md:gap-[16px]">
                            <div class="w-full flex items-center justify-between">
                                <span
                                    class="inline-flex items-center rounded-full px-2 py-1 md:px-[12px] md:py-[4px] text-xs md:text-[12px] leading-4 md:leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                    Education Fair
                                </span>
                                <span
                                    class="inline-flex items-center rounded-full px-2 py-1 md:px-[12px] md:py-[4px] text-xs md:text-[12px] leading-4 md:leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                    upcoming
                                </span>
                            </div>
                            <h3
                                class="font-playfair font-bold text-lg md:text-xl lg:text-[20px] leading-6 md:leading-7 lg:leading-[28px] text-[#29303D]">
                                International Education Fair 2024
                            </h3>
                            <p
                                class="font-inter text-sm md:text-base lg:text-[16px] leading-5 md:leading-6 lg:leading-[24px] text-[#29303DB2]">
                                Meet representatives from top universities worldwide and explore study abroad...
                            </p>
                            <div
                                class="flex flex-col gap-2 text-xs md:text-sm lg:text-[14px] leading-4 md:leading-5 lg:leading-[20px] text-[#29303D99] font-inter">
                                <div class="flex items-center gap-2">
                                    <img src="/icons/calender.svg" class="w-4 h-4" alt="">
                                    Thursday, February 15, 2024
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="/icons/clock.svg" class="w-4 h-4" alt="">
                                    09:00 - 17:00
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="/icons/location.svg" class="w-4 h-4" alt="">
                                    UB Convention Center
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="/icons/user-black.svg" class="w-4 h-4" alt="">
                                    500+ expected attendees
                                </div>
                            </div>
                            <a href="#"
                                class="mt-4 md:mt-auto w-full h-10 md:h-[40px] rounded-[10px] border border-[#E2E4E9] flex items-center justify-center gap-2 md:gap-[8px] px-4 md:px-[17px] py-2 md:pt-[9.5px] md:pb-[10.5px] bg-white text-[#29303D] font-medium text-sm md:text-[14px] leading-5 md:leading-[20px]">
                                Register Now
                                <img src="/icons/arrow-right-black.svg" class="w-4 h-4" alt="">
                            </a>
                        </div>
                    </article>

                    <article
                        class="w-full h-auto sm:h-[648px] bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
                        <div class="w-full h-[200px] sm:h-[250px] md:h-[288px]">
                            <img src="/images/present.jpg" alt="Global Research Symposium"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="w-full h-auto p-4 sm:p-5 md:p-[24px] flex flex-col gap-4 md:gap-[16px]">
                            <div class="w-full flex items-center justify-between">
                                <span
                                    class="inline-flex items-center rounded-full px-2 py-1 md:px-[12px] md:py-[4px] text-xs md:text-[12px] leading-4 md:leading-[16px] font-medium bg-[#EDE9FE] text-[#6D28D9]">
                                    Symposium
                                </span>
                                <span
                                    class="inline-flex items-center rounded-full px-2 py-1 md:px-[12px] md:py-[4px] text-xs md:text-[12px] leading-4 md:leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                    upcoming
                                </span>
                            </div>
                            <h3
                                class="font-playfair font-bold text-lg md:text-xl lg:text-[20px] leading-6 md:leading-7 lg:leading-[28px] text-[#29303D]">
                                Global Research Symposium
                            </h3>
                            <p
                                class="font-inter text-sm md:text-base lg:text-[16px] leading-5 md:leading-6 lg:leading-[24px] text-[#29303DB2]">
                                Leading researchers present cutting-edge findings in sustainability and innovation
                            </p>
                            <div
                                class="flex flex-col gap-2 text-xs md:text-sm lg:text-[14px] leading-4 md:leading-5 lg:leading-[20px] text-[#29303D99] font-inter">
                                <div class="flex items-center gap-2">
                                    <img src="/icons/calender.svg" class="w-4 h-4" alt="">
                                    Thursday, February 22, 2024
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="/icons/clock.svg" class="w-4 h-4" alt="">
                                    08:30 - 16:00
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="/icons/location.svg" class="w-4 h-4" alt="">
                                    Academic Hall UB
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="/icons/user-black.svg" class="w-4 h-4" alt="">
                                    300+ expected attendees
                                </div>
                            </div>
                            <a href="#"
                                class="mt-4 md:mt-auto w-full h-10 md:h-[40px] rounded-[10px] border border-[#E2E4E9] flex items-center justify-center gap-2 md:gap-[8px] px-4 md:px-[17px] py-2 md:pt-[9.5px] md:pb-[10.5px] bg-white text-[#29303D] font-medium text-sm md:text-[14px] leading-5 md:leading-[20px]">
                                Register Now
                                <img src="/icons/arrow-right-black.svg" class="w-4 h-4" alt="">
                            </a>
                        </div>
                    </article>

                    <article
                        class="w-full h-auto sm:h-[648px] bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
                        <div class="w-full h-[200px] sm:h-[250px] md:h-[288px]">
                            <img src="/images/fest.jpg" alt="International Cultural Festival"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="w-full h-auto p-4 sm:p-5 md:p-[24px] flex flex-col gap-4 md:gap-[16px]">
                            <div class="w-full flex items-center justify-between">
                                <span
                                    class="inline-flex items-center rounded-full px-2 py-1 md:px-[12px] md:py-[4px] text-xs md:text-[12px] leading-4 md:leading-[16px] font-medium bg-[#FCE7F3] text-[#DB2777]">
                                    Cultural Event
                                </span>
                                <span
                                    class="inline-flex items-center rounded-full px-2 py-1 md:px-[12px] md:py-[4px] text-xs md:text-[12px] leading-4 md:leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                    upcoming
                                </span>
                            </div>
                            <h3
                                class="font-playfair font-bold text-lg md:text-xl lg:text-[20px] leading-6 md:leading-7 lg:leading-[28px] text-[#29303D]">
                                International Cultural Festival
                            </h3>
                            <p
                                class="font-inter text-sm md:text-base lg:text-[16px] leading-5 md:leading-6 lg:leading-[24px] text-[#29303DB2]">
                                Celebrate diversity with cultural performances, food, and traditions from...
                            </p>
                            <div
                                class="flex flex-col gap-2 text-xs md:text-sm lg:text-[14px] leading-4 md:leading-5 lg:leading-[20px] text-[#29303D99] font-inter">
                                <div class="flex items-center gap-2">
                                    <img src="/icons/calender.svg" class="w-4 h-4" alt="">
                                    Friday, March 1, 2024
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="/icons/clock.svg" class="w-4 h-4" alt="">
                                    10:00 - 22:00
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="/icons/location.svg" class="w-4 h-4" alt="">
                                    UB Campus Plaza
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="/icons/user-black.svg" class="w-4 h-4" alt="">
                                    1000+ expected attendees
                                </div>
                            </div>
                            <a href="#"
                                class="mt-4 md:mt-auto w-full h-10 md:h-[40px] rounded-[10px] border border-[#E2E4E9] flex items-center justify-center gap-2 md:gap-[8px] px-4 md:px-[17px] py-2 md:pt-[9.5px] md:pb-[10.5px] bg-white text-[#29303D] font-medium text-sm md:text-[14px] leading-5 md:leading-[20px]">
                                Register Now
                                <img src="/icons/arrow-right-black.svg" class="w-4 h-4" alt="">
                            </a>
                        </div>
                    </article>

                    <article
                        class="w-full h-auto sm:h-[648px] bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
                        <div class="w-full h-[200px] sm:h-[250px] md:h-[288px]">
                            <img src="/images/conference.jpg" alt="International Education Fair 2024"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="w-full h-auto p-4 sm:p-5 md:p-[24px] flex flex-col gap-4 md:gap-[16px]">
                            <div class="w-full flex items-center justify-between">
                                <span
                                    class="inline-flex items-center rounded-full px-2 py-1 md:px-[12px] md:py-[4px] text-xs md:text-[12px] leading-4 md:leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                    Education Fair
                                </span>
                                <span
                                    class="inline-flex items-center rounded-full px-2 py-1 md:px-[12px] md:py-[4px] text-xs md:text-[12px] leading-4 md:leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                    upcoming
                                </span>
                            </div>
                            <h3
                                class="font-playfair font-bold text-lg md:text-xl lg:text-[20px] leading-6 md:leading-7 lg:leading-[28px] text-[#29303D]">
                                International Education Fair 2024
                            </h3>
                            <p
                                class="font-inter text-sm md:text-base lg:text-[16px] leading-5 md:leading-6 lg:leading-[24px] text-[#29303DB2]">
                                Meet representatives from top universities worldwide and explore study abroad...
                            </p>
                            <div
                                class="flex flex-col gap-2 text-xs md:text-sm lg:text-[14px] leading-4 md:leading-5 lg:leading-[20px] text-[#29303D99] font-inter">
                                <div class="flex items-center gap-2">
                                    <img src="/icons/calender.svg" class="w-4 h-4" alt="">
                                    Thursday, February 15, 2024
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="/icons/clock.svg" class="w-4 h-4" alt="">
                                    09:00 - 17:00
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="/icons/location.svg" class="w-4 h-4" alt="">
                                    UB Convention Center
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="/icons/user-black.svg" class="w-4 h-4" alt="">
                                    500+ expected attendees
                                </div>
                            </div>
                            <a href="#"
                                class="mt-4 md:mt-auto w-full h-10 md:h-[40px] rounded-[10px] border border-[#E2E4E9] flex items-center justify-center gap-2 md:gap-[8px] px-4 md:px-[17px] py-2 md:pt-[9.5px] md:pb-[10.5px] bg-white text-[#29303D] font-medium text-sm md:text-[14px] leading-5 md:leading-[20px]">
                                Register Now
                                <img src="/icons/arrow-right-black.svg" class="w-4 h-4" alt="">
                            </a>
                        </div>
                    </article>

                    <article
                        class="w-full h-auto sm:h-[648px] bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
                        <div class="w-full h-[200px] sm:h-[250px] md:h-[288px]">
                            <img src="/images/present.jpg" alt="Global Research Symposium"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="w-full h-auto p-4 sm:p-5 md:p-[24px] flex flex-col gap-4 md:gap-[16px]">
                            <div class="w-full flex items-center justify-between">
                                <span
                                    class="inline-flex items-center rounded-full px-2 py-1 md:px-[12px] md:py-[4px] text-xs md:text-[12px] leading-4 md:leading-[16px] font-medium bg-[#EDE9FE] text-[#6D28D9]">
                                    Symposium
                                </span>
                                <span
                                    class="inline-flex items-center rounded-full px-2 py-1 md:px-[12px] md:py-[4px] text-xs md:text-[12px] leading-4 md:leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                    upcoming
                                </span>
                            </div>
                            <h3
                                class="font-playfair font-bold text-lg md:text-xl lg:text-[20px] leading-6 md:leading-7 lg:leading-[28px] text-[#29303D]">
                                Global Research Symposium
                            </h3>
                            <p
                                class="font-inter text-sm md:text-base lg:text-[16px] leading-5 md:leading-6 lg:leading-[24px] text-[#29303DB2]">
                                Leading researchers present cutting-edge findings in sustainability and innovation
                            </p>
                            <div
                                class="flex flex-col gap-2 text-xs md:text-sm lg:text-[14px] leading-4 md:leading-5 lg:leading-[20px] text-[#29303D99] font-inter">
                                <div class="flex items-center gap-2">
                                    <img src="/icons/calender.svg" class="w-4 h-4" alt="">
                                    Thursday, February 22, 2024
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="/icons/clock.svg" class="w-4 h-4" alt="">
                                    08:30 - 16:00
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="/icons/location.svg" class="w-4 h-4" alt="">
                                    Academic Hall UB
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="/icons/user-black.svg" class="w-4 h-4" alt="">
                                    300+ expected attendees
                                </div>
                            </div>
                            <a href="#"
                                class="mt-4 md:mt-auto w-full h-10 md:h-[40px] rounded-[10px] border border-[#E2E4E9] flex items-center justify-center gap-2 md:gap-[8px] px-4 md:px-[17px] py-2 md:pt-[9.5px] md:pb-[10.5px] bg-white text-[#29303D] font-medium text-sm md:text-[14px] leading-5 md:leading-[20px]">
                                Register Now
                                <img src="/icons/arrow-right-black.svg" class="w-4 h-4" alt="">
                            </a>
                        </div>
                    </article>

                    <article
                        class="w-full h-auto sm:h-[648px] bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
                        <div class="w-full h-[200px] sm:h-[250px] md:h-[288px]">
                            <img src="/images/fest.jpg" alt="International Cultural Festival"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="w-full h-auto p-4 sm:p-5 md:p-[24px] flex flex-col gap-4 md:gap-[16px]">
                            <div class="w-full flex items-center justify-between">
                                <span
                                    class="inline-flex items-center rounded-full px-2 py-1 md:px-[12px] md:py-[4px] text-xs md:text-[12px] leading-4 md:leading-[16px] font-medium bg-[#FCE7F3] text-[#DB2777]">
                                    Cultural Event
                                </span>
                                <span
                                    class="inline-flex items-center rounded-full px-2 py-1 md:px-[12px] md:py-[4px] text-xs md:text-[12px] leading-4 md:leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                    upcoming
                                </span>
                            </div>
                            <h3
                                class="font-playfair font-bold text-lg md:text-xl lg:text-[20px] leading-6 md:leading-7 lg:leading-[28px] text-[#29303D]">
                                International Cultural Festival
                            </h3>
                            <p
                                class="font-inter text-sm md:text-base lg:text-[16px] leading-5 md:leading-6 lg:leading-[24px] text-[#29303DB2]">
                                Celebrate diversity with cultural performances, food, and traditions from...
                            </p>
                            <div
                                class="flex flex-col gap-2 text-xs md:text-sm lg:text-[14px] leading-4 md:leading-5 lg:leading-[20px] text-[#29303D99] font-inter">
                                <div class="flex items-center gap-2">
                                    <img src="/icons/calender.svg" class="w-4 h-4" alt="">
                                    Friday, March 1, 2024
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="/icons/clock.svg" class="w-4 h-4" alt="">
                                    10:00 - 22:00
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="/icons/location.svg" class="w-4 h-4" alt="">
                                    UB Campus Plaza
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="/icons/user-black.svg" class="w-4 h-4" alt="">
                                    1000+ expected attendees
                                </div>
                            </div>
                            <a href="#"
                                class="mt-4 md:mt-auto w-full h-10 md:h-[40px] rounded-[10px] border border-[#E2E4E9] flex items-center justify-center gap-2 md:gap-[8px] px-4 md:px-[17px] py-2 md:pt-[9.5px] md:pb-[10.5px] bg-white text-[#29303D] font-medium text-sm md:text-[14px] leading-5 md:leading-[20px]">
                                Register Now
                                <img src="/icons/arrow-right-black.svg" class="w-4 h-4" alt="">
                            </a>
                        </div>
                    </article>

                </div>

                <div class="w-full flex justify-center items-center py-6 md:py-8">
                    <div class="flex items-center gap-3 md:gap-4">
                        <button
                            class="w-10 h-10 md:w-12 md:h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
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

                        <button
                            class="w-10 h-10 md:w-12 md:h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                            <img src="/icons/vector-right.svg" alt="Next" class="w-3 h-3 md:w-4 md:h-4">
                        </button>
                    </div>
                </div>

                <div
                    class="w-full max-w-[1216px] h-auto md:h-[264px] mx-auto bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-2xl md:rounded-[24px] p-6 md:p-8 lg:p-[48px] flex flex-col justify-between items-center text-center shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px]">
                    <h3
                        class="text-xl md:text-2xl lg:text-[30px] font-playfair font-bold leading-7 md:leading-8 lg:leading-[36px] text-white">
                        Don't Miss Any Events </h3>
                    <p
                        class="text-base md:text-lg lg:text-[20px] font-light font-inter leading-6 md:leading-7 lg:leading-[28px] text-white opacity-90 max-w-full md:max-w-[672px] mt-2 md:mt-4 px-2 md:px-0">
                        Subscribe to our event calendar and be the first to know about
                        upcoming international activities.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-3 md:gap-4 mt-4 md:mt-6 w-full sm:w-auto">
                        <a href="#"
                            class="w-full sm:w-[200px] md:w-[230px] h-10 md:h-[44px] font-inter font-normal px-4 md:px-[33px] py-2 md:py-[12px] rounded-[10px] border border-white/20 bg-white/10 shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px] text-white font-inter font-medium text-sm md:text-[14px] flex items-center justify-center">
                            View Full Calendar
                        </a>
                        <a href="#"
                            class="w-full sm:w-[200px] md:w-[230px] h-10 md:h-[44px] font-inter font-normal px-4 md:px-[33px] py-2 md:py-[12px] rounded-[10px] border border-white/20 bg-white/10 shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px] text-white font-inter font-medium text-sm md:text-[14px] flex items-center justify-center">
                            Subscribe to Updates
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-[#29303D] w-full">
            <div class="max-w-[1280px] mx-auto px-6 sm:px-8 py-12 sm:py-16 gap-12">
                <div class="flex flex-col lg:flex-row gap-12">
                    <div class="flex flex-col gap-2 w-full lg:w-1/3">
                        <div class="flex flex-col gap-4">
                            <div class="flex gap-4 items-center">
                                <img src="{{ asset('images/ub.png') }}" alt="UB Logo" class="w-10 h-10">
                                <img src="{{ asset('icons/gub.svg') }}" alt="Globalizing Logo"
                                    class="h-10 max-w-[120px] sm:max-w-[150px] lg:max-w-[200px]">
                            </div>
                            <p class="text-[#FFFFFF] text-sm mt-2 font-inter font-light">Inspiring Change, Uniting
                                Civilizations</p>
                        </div>

                        <div class="flex flex-col gap-4 mt-4">
                            <h3 class="text-white text-sm font-bold font-inter">Direktorat Kerjasama Universitas
                                Brawijaya</h3>

                            <div class="flex items-start gap-2">
                                <img src="{{ asset('icons/location-blue.svg') }}" alt="Map Icon"
                                    class="w-4 h-4 mt-1">
                                <p class="text-white text-sm font-light font-inter">Jl. Veteran, Ketawanggede, Kec.
                                    Lowokwaru, Kota Malang, Jawa Timur 65145, Indonesia</p>
                            </div>

                            <div class="flex items-center gap-2">
                                <img src="{{ asset('icons/telp-blue.svg') }}" alt="Phone Icon" class="w-4 h-4">
                                <p class="text-white text-sm font-light font-inter">+62 341 551611</p>
                            </div>

                            <div class="flex items-center gap-2">
                                <img src="{{ asset('icons/email-blue.svg') }}" alt="Email Icon" class="w-4 h-4">
                                <p class="text-white text-sm font-light font-inter">gub@ub.ac.id</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-6 w-full lg:w-1/3">
                        <h4 class="text-white text-lg font-playfair ">Connect With Us</h4>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <button
                                class="w-full h-[44px] bg-[#FFFFFF1A] rounded-[12px] flex items-center gap-[12px] px-[12px]">
                                <img src="{{ asset('icons/fb-blue.svg') }}" alt="Facebook Icon"
                                    class="w-[20px] h-[20px]">
                                <p class="text-white text-sm font-inter font-light leading-[20px]">Facebook</p>
                            </button>
                            <button
                                class="w-full h-[44px] bg-[#FFFFFF1A] rounded-[12px] flex items-center gap-[12px] px-[12px]">
                                <img src="{{ asset('icons/linkedin-blue.svg') }}" alt="LinkedIn Icon"
                                    class="w-[20px] h-[20px]">
                                <p class="text-white text-sm font-inter font-light leading-[20px]">LinkedIn</p>
                            </button>
                            <button
                                class="w-full h-[44px] bg-[#FFFFFF1A] rounded-[12px] flex items-center gap-[12px] px-[12px]">
                                <img src="{{ asset('icons/ig-blue.svg') }}" alt="Instagram Icon"
                                    class="w-[20px] h-[20px]">
                                <p class="text-white text-sm font-inter font-light leading-[20px]">Instagram</p>
                            </button>
                            <button
                                class="w-full h-[44px] bg-[#FFFFFF1A] rounded-[12px] flex items-center gap-[12px] px-[12px]">
                                <img src="{{ asset('icons/yt-blue.svg') }}" alt="YouTube Icon"
                                    class="w-[20px] h-[20px]">
                                <p class="text-white text-sm font-inter font-light leading-[20px]">YouTube</p>
                            </button>
                        </div>
                    </div>

                    <div class="flex flex-col gap-4 w-full lg:w-1/3">
                        <h4 class="text-white text-lg font-playfair">Visitor</h4>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-white text-sm">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('icons/user.svg') }}" alt="Visits Today Icon" class="w-4 h-4">
                                <span>93 Visits Today</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('icons/user.svg') }}" alt="Total Visits Icon" class="w-4 h-4">
                                <span>12,627 Visits</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('icons/user.svg') }}" alt="Visitors Today Icon" class="w-4 h-4">
                                <span>44 Visitors Today</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('icons/user.svg') }}" alt="Total Visitors Icon" class="w-4 h-4">
                                <span>8,155 Visitors</span>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h5 class="text-white text-lg font-playfair  mb-2">Newsletter</h5>
                            <input type="email" placeholder="Enter your email"
                                class="w-full h-[41px] p-[11px] bg-[#FFFFFF1A] rounded-[12px] border border-t-[1px] border-[#FFFFFF33] text-white" />
                            <button
                                class="w-full h-[36px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-[10px] text-white mt-4 shadow-[0px_4px_20px_-2px_#29303D1A]">
                                Subscribe
                            </button>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <hr class="w-full h-[1px] border-t border-[#FFFFFF33] opacity-100" />
                </div>

                <div class="flex flex-col sm:flex-row justify-between items-center mt-6 gap-4">
                    <div class="text-white text-sm font-inter font-light leading-[20px] text-center sm:text-left">
                        © 2024 Universitas Brawijaya Direktorat Kerjasama, All Right Reserved.
                    </div>
                    <div class="flex flex-wrap justify-center sm:justify-end gap-[20px]">
                        <a href="#" class="text-white text-sm font-inter font-light leading-[20px]">Privacy
                            Policy</a>
                        <a href="#" class="text-white text-sm font-inter font-light leading-[20px]">Terms of
                            Service</a>
                        <a href="#" class="text-white text-sm font-inter font-light leading-[20px]">Sitemap</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            const button = this;
            const spans = button.querySelectorAll('span');

            if (mobileMenu.classList.contains('invisible')) {
                mobileMenu.classList.remove('-translate-y-full', 'opacity-0', 'invisible');
                mobileMenu.classList.add('translate-y-0', 'opacity-100', 'visible');

                spans[0].classList.add('rotate-45', 'translate-y-1.5');
                spans[1].classList.add('opacity-0');
                spans[2].classList.add('-rotate-45', '-translate-y-1.5');
            } else {
                mobileMenu.classList.add('-translate-y-full', 'opacity-0', 'invisible');
                mobileMenu.classList.remove('translate-y-0', 'opacity-100', 'visible');

                spans[0].classList.remove('rotate-45', 'translate-y-1.5');
                spans[1].classList.remove('opacity-0');
                spans[2].classList.remove('-rotate-45', '-translate-y-1.5');
            }
        });

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
