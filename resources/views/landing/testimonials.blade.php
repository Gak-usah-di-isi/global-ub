<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Study Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-[#FFFFFF] w-full min-h-screen">
    <div class="max-w-[1440px] mx-auto">
        <nav
            class="w-full h-20 flex justify-between items-center bg-[#FFFFFFF2] border-b px-4 sm:px-6 md:px-8 lg:px-28">
            <div class="flex items-center space-x-2 sm:space-x-4">
                <img src="/images/ub.png" alt="Logo UB" class="h-6 sm:h-7 md:h-8">
                <img src="/images/gub.png" alt="Logo Gub" class="h-6 sm:h-7 md:h-8">
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

            <div class="flex items-center space-x-3 sm:space-x-4">
                <button
                    class="bg-[#0000FF] text-white py-2 px-3 md:px-4 rounded-[10px] w-[68px] md:w-[78px] h-[34px] md:h-[36px] flex items-center gap-[6px] md:gap-[8px]">
                    <span class="font-medium text-[12px] md:text-[14px] leading-[24px] tracking-normal">Eng</span>
                    <img src="/icons/globe.svg" alt="Globe Icon" class="w-4 h-4 md:w-5 md:h-5">
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
                        class="text-[#29303D] font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">Home</a>
                    <a href="/about"
                        class="text-[#29303D] font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">About</a>
                    <a href="/news"
                        class="text-[#29303D] font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">News</a>
                    <a href="/event"
                        class="text-[#29303D] font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">Event</a>
                    <a href="/study"
                        class="text-[#29303D] font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">Study
                        in UB</a>
                    <a href="#"
                        class="text-[#29303D] font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">Partnership</a>
                    <a href="#"
                        class="text-[#29303D] font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">Gallery</a>
                </div>
            </div>
        </nav>

        <div
            class="bg-[#F0F2F4] w-full min-h-[60px] md:min-h-[80px] flex flex-wrap items-center px-4 sm:px-6 md:px-8 lg:px-28 py-2 md:py-0">
            <div class="flex items-center space-x-2 sm:space-x-4">
                <div class="w-[16px] h-[16px]">
                    <img src="{{ asset('icons/home.svg') }}" alt="Home Icon" class="w-full h-full">
                </div>
                <span class="text-[#29303D] text-[13px] sm:text-[14px] font-medium">Home</span>
                <div class="w-[16px] h-[16px]">
                    <img src="{{ asset('icons/arrow-right-chevron.svg') }}" alt="Right Arrow" class="w-full h-full">
                </div>
            </div>
            <div class="flex items-center space-x-2 sm:space-x-4 ml-2 sm:ml-4">
                <span class="text-[#29303D] text-[13px] sm:text-[14px] font-medium">Profiles & Testimonials</span>
            </div>
        </div>

        <section id="study-in-ub"
            class="w-full bg-gradient-to-b from-[#F9FAFB] to-[#F0F2F4] px-4 sm:px-6 md:px-16 lg:px-[90px] py-10 md:py-16 lg:py-[64px]">
            <div class="max-w-[1280px] mx-auto flex flex-col gap-8 md:gap-12 lg:gap-16">

                <div class="w-full flex flex-col items-center gap-4">
                    <h2
                        class="w-full text-center font-playfair font-bold text-2xl md:text-3xl lg:text-[36px] leading-[36px] md:leading-[40px] text-[#29303D]">
                        Profiles & Testimonials
                    </h2>
                    <p
                        class="text-center font-inter font-light text-sm sm:text-base md:text-lg lg:text-xl leading-6 md:leading-7 lg:leading-[28px] text-[#29303DB2]">
                        Discover inspiring stories from our alumni, international partners, and global <br
                            class="hidden sm:block" /> researchers who are making a difference worldwide
                    </p>
                </div>

                <div
                    class="w-full mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 lg:gap-[32px]">

                    <article
                        class="w-full max-w-sm lg:w-[600px] bg-white rounded-2xl shadow-[0px_4px_20px_-2px_rgba(41,48,61,0.10)] p-6 sm:p-7 md:p-8">
                        <header class="flex items-center gap-4">
                            <div class="relative">
                                <img src="{{ asset('images/Prof_Michael.png') }}" alt="Profile photo"
                                    class="w-16 h-16 rounded-full object-cover" />
                                <img src="{{ asset('icons/star_testi.svg') }}" alt="Badge icon"
                                    class="w-[24px] h-[24px] absolute -mt-[20px] right-0" />
                            </div>
                            <div>
                                <h3 class="text-base font-bold text-[#1C2B39] font-playfair">Prof. Michael Johnson</h3>
                                <p class="text-sm font-normal text-[#29303D] opacity-[0.7] font-inter">Director of
                                    International Relations</p>
                                <p class="text-sm font-medium text-[#0000FF] font-inter">Oxford University</p>
                            </div>
                        </header>

                        <section class="mt-4">
                            <p
                                class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                International Partner</p>
                        </section>

                        <blockquote class="mt-4">
                            <img src="{{ asset('icons/quote.svg') }}" alt="Quote icon"
                                class="w-[28px] h-[28px] sm:w-[33px] sm:h-[33px] mb-2" />
                            <p class="text-[#29303D] opacity-[0.8] text-sm sm:text-base leading-relaxed font-inter">
                                “Our collaboration with UB has been exceptional. Their students bring fresh perspectives
                                and innovative solutions to our joint research projects.”</p>
                        </blockquote>

                        <section class="mt-4 space-y-2 text-xs sm:text-sm text-gray-500 font-inter">
                            <p class="flex items-center gap-2">
                                <img src="{{ asset('icons/location.svg') }}" alt="Location icon" class="w-4 h-4" />
                                Oxford, UK
                            </p>
                            <p class="flex items-center gap-2">
                                <img src="{{ asset('icons/education.svg') }}" alt="Calendar icon" class="w-4 h-4" />
                                Partnership since 2019
                            </p>
                        </section>

                        <section class="mt-6">
                            <h4 class="text-base font-semibold font-playfair text-[#29303D]">Key Achievements</h4>
                            <ul class="mt-2 space-y-1 text-xs sm:text-sm text-gray-600 font-inter list-none">
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                    <p class="text-[#29303D] opacity-[0.7]">50+ joint research projects</p>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                    <p class="text-[#29303D] opacity-[0.7]">Student exchange programs</p>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                    <p class="text-[#29303D] opacity-[0.7]">International conferences</p>
                                </li>
                            </ul>
                        </section>

                        <footer class="mt-6">
                            <button
                                class="w-full flex items-center justify-center gap-2 py-2 border border-gray-200 rounded-lg font-inter text-sm font-medium text-[#29303D] hover:bg-gray-50">
                                View Full Story
                                <img src="{{ asset('images/play.svg') }}" alt="Arrow icon" class="w-4 h-4" />
                            </button>
                        </footer>
                    </article>

                    <article
                        class="w-full max-w-sm lg:w-[600px] bg-white rounded-2xl shadow-[0px_4px_20px_-2px_rgba(41,48,61,0.10)] p-6 sm:p-7 md:p-8">
                        <header class="flex items-center gap-4">
                            <div class="relative">
                                <img src="{{ asset('images/Prof_Michael.png') }}" alt="Profile photo"
                                    class="w-16 h-16 rounded-full object-cover" />
                                <img src="{{ asset('icons/star_testi.svg') }}" alt="Badge icon"
                                    class="w-[24px] h-[24px] absolute -mt-[20px] right-0" />
                            </div>
                            <div>
                                <h3 class="text-base font-bold text-[#1C2B39] font-playfair">Prof. Michael Johnson</h3>
                                <p class="text-sm font-normal text-[#29303D] opacity-[0.7] font-inter">Director of
                                    International Relations</p>
                                <p class="text-sm font-medium text-[#0000FF] font-inter">Oxford University</p>
                            </div>
                        </header>

                        <section class="mt-4">
                            <p
                                class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                International Partner</p>
                        </section>

                        <blockquote class="mt-4">
                            <img src="{{ asset('icons/quote.svg') }}" alt="Quote icon"
                                class="w-[28px] h-[28px] sm:w-[33px] sm:h-[33px] mb-2" />
                            <p class="text-[#29303D] opacity-[0.8] text-sm sm:text-base leading-relaxed font-inter">
                                “Our collaboration with UB has been exceptional. Their students bring fresh perspectives
                                and innovative solutions to our joint research projects.”</p>
                        </blockquote>

                        <section class="mt-4 space-y-2 text-xs sm:text-sm text-gray-500 font-inter">
                            <p class="flex items-center gap-2">
                                <img src="{{ asset('icons/location.svg') }}" alt="Location icon" class="w-4 h-4" />
                                Oxford, UK
                            </p>
                            <p class="flex items-center gap-2">
                                <img src="{{ asset('icons/education.svg') }}" alt="Calendar icon" class="w-4 h-4" />
                                Partnership since 2019
                            </p>
                        </section>

                        <section class="mt-6">
                            <h4 class="text-base font-semibold font-playfair text-[#29303D]">Key Achievements</h4>
                            <ul class="mt-2 space-y-1 text-xs sm:text-sm text-gray-600 font-inter list-none">
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                    <p class="text-[#29303D] opacity-[0.7]">50+ joint research projects</p>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                    <p class="text-[#29303D] opacity-[0.7]">Student exchange programs</p>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                    <p class="text-[#29303D] opacity-[0.7]">International conferences</p>
                                </li>
                            </ul>
                        </section>

                        <footer class="mt-6">
                            <button
                                class="w-full flex items-center justify-center gap-2 py-2 border border-gray-200 rounded-lg font-inter text-sm font-medium text-[#29303D] hover:bg-gray-50">
                                View Full Story
                                <img src="{{ asset('images/play.svg') }}" alt="Arrow icon" class="w-4 h-4" />
                            </button>
                        </footer>
                    </article>

                    <article
                        class="w-full max-w-sm lg:w-[600px] bg-white rounded-2xl shadow-[0px_4px_20px_-2px_rgba(41,48,61,0.10)] p-6 sm:p-7 md:p-8">
                        <header class="flex items-center gap-4">
                            <div class="relative">
                                <img src="{{ asset('images/Prof_Michael.png') }}" alt="Profile photo"
                                    class="w-16 h-16 rounded-full object-cover" />
                                <img src="{{ asset('icons/star_testi.svg') }}" alt="Badge icon"
                                    class="w-[24px] h-[24px] absolute -mt-[20px] right-0" />
                            </div>
                            <div>
                                <h3 class="text-base font-bold text-[#1C2B39] font-playfair">Prof. Michael Johnson</h3>
                                <p class="text-sm font-normal text-[#29303D] opacity-[0.7] font-inter">Director of
                                    International Relations</p>
                                <p class="text-sm font-medium text-[#0000FF] font-inter">Oxford University</p>
                            </div>
                        </header>

                        <section class="mt-4">
                            <p
                                class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                International Partner</p>
                        </section>

                        <blockquote class="mt-4">
                            <img src="{{ asset('icons/quote.svg') }}" alt="Quote icon"
                                class="w-[28px] h-[28px] sm:w-[33px] sm:h-[33px] mb-2" />
                            <p class="text-[#29303D] opacity-[0.8] text-sm sm:text-base leading-relaxed font-inter">
                                “Our collaboration with UB has been exceptional. Their students bring fresh perspectives
                                and innovative solutions to our joint research projects.”</p>
                        </blockquote>

                        <section class="mt-4 space-y-2 text-xs sm:text-sm text-gray-500 font-inter">
                            <p class="flex items-center gap-2">
                                <img src="{{ asset('icons/location.svg') }}" alt="Location icon" class="w-4 h-4" />
                                Oxford, UK
                            </p>
                            <p class="flex items-center gap-2">
                                <img src="{{ asset('icons/education.svg') }}" alt="Calendar icon" class="w-4 h-4" />
                                Partnership since 2019
                            </p>
                        </section>

                        <section class="mt-6">
                            <h4 class="text-base font-semibold font-playfair text-[#29303D]">Key Achievements</h4>
                            <ul class="mt-2 space-y-1 text-xs sm:text-sm text-gray-600 font-inter list-none">
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                    <p class="text-[#29303D] opacity-[0.7]">50+ joint research projects</p>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                    <p class="text-[#29303D] opacity-[0.7]">Student exchange programs</p>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                    <p class="text-[#29303D] opacity-[0.7]">International conferences</p>
                                </li>
                            </ul>
                        </section>

                        <footer class="mt-6">
                            <button
                                class="w-full flex items-center justify-center gap-2 py-2 border border-gray-200 rounded-lg font-inter text-sm font-medium text-[#29303D] hover:bg-gray-50">
                                View Full Story
                                <img src="{{ asset('images/play.svg') }}" alt="Arrow icon" class="w-4 h-4" />
                            </button>
                        </footer>
                    </article>

                    <article
                        class="w-full max-w-sm lg:w-[600px] bg-white rounded-2xl shadow-[0px_4px_20px_-2px_rgba(41,48,61,0.10)] p-6 sm:p-7 md:p-8">
                        <header class="flex items-center gap-4">
                            <div class="relative">
                                <img src="{{ asset('images/Prof_Michael.png') }}" alt="Profile photo"
                                    class="w-16 h-16 rounded-full object-cover" />
                                <img src="{{ asset('icons/star_testi.svg') }}" alt="Badge icon"
                                    class="w-[24px] h-[24px] absolute -mt-[20px] right-0" />
                            </div>
                            <div>
                                <h3 class="text-base font-bold text-[#1C2B39] font-playfair">Prof. Michael Johnson</h3>
                                <p class="text-sm font-normal text-[#29303D] opacity-[0.7] font-inter">Director of
                                    International Relations</p>
                                <p class="text-sm font-medium text-[#0000FF] font-inter">Oxford University</p>
                            </div>
                        </header>

                        <section class="mt-4">
                            <p
                                class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                International Partner</p>
                        </section>

                        <blockquote class="mt-4">
                            <img src="{{ asset('icons/quote.svg') }}" alt="Quote icon"
                                class="w-[28px] h-[28px] sm:w-[33px] sm:h-[33px] mb-2" />
                            <p class="text-[#29303D] opacity-[0.8] text-sm sm:text-base leading-relaxed font-inter">
                                “Our collaboration with UB has been exceptional. Their students bring fresh perspectives
                                and innovative solutions to our joint research projects.”</p>
                        </blockquote>

                        <section class="mt-4 space-y-2 text-xs sm:text-sm text-gray-500 font-inter">
                            <p class="flex items-center gap-2">
                                <img src="{{ asset('icons/location.svg') }}" alt="Location icon" class="w-4 h-4" />
                                Oxford, UK
                            </p>
                            <p class="flex items-center gap-2">
                                <img src="{{ asset('icons/education.svg') }}" alt="Calendar icon" class="w-4 h-4" />
                                Partnership since 2019
                            </p>
                        </section>

                        <section class="mt-6">
                            <h4 class="text-base font-semibold font-playfair text-[#29303D]">Key Achievements</h4>
                            <ul class="mt-2 space-y-1 text-xs sm:text-sm text-gray-600 font-inter list-none">
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                    <p class="text-[#29303D] opacity-[0.7]">50+ joint research projects</p>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                    <p class="text-[#29303D] opacity-[0.7]">Student exchange programs</p>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                    <p class="text-[#29303D] opacity-[0.7]">International conferences</p>
                                </li>
                            </ul>
                        </section>

                        <footer class="mt-6">
                            <button
                                class="w-full flex items-center justify-center gap-2 py-2 border border-gray-200 rounded-lg font-inter text-sm font-medium text-[#29303D] hover:bg-gray-50">
                                View Full Story
                                <img src="{{ asset('images/play.svg') }}" alt="Arrow icon" class="w-4 h-4" />
                            </button>
                        </footer>
                    </article>
                </div>

                <div class="w-full flex justify-center items-center py-5">
                    <div class="flex items-center gap-2 sm:gap-4">
                        <button
                            class="w-9 h-9 md:w-10 md:h-10 bg-[#FFFFFF] rounded-full flex justify-center items-center">
                            <img src="{{ asset('icons/vector-left.svg') }}" alt="Previous"
                                class="w-3 h-3 md:w-4 md:h-4">
                        </button>

                        <div class="flex items-center gap-1 sm:gap-2 md:gap-4 bg-[#FFFFFF] rounded-full p-1 md:p-2">
                            <button
                                class="w-7 h-7 md:w-9 md:h-9 bg-[#1D4ED8] text-white rounded-full flex justify-center items-center text-xs sm:text-sm md:text-base">1</button>
                            <button
                                class="w-7 h-7 md:w-9 md:h-9 text-[#1D4ED8] flex justify-center items-center text-xs sm:text-sm md:text-base">2</button>
                            <button
                                class="w-7 h-7 md:w-9 md:h-9 text-[#1D4ED8] flex justify-center items-center text-xs sm:text-sm md:text-base">3</button>
                        </div>

                        <button
                            class="w-9 h-9 md:w-10 md:h-10 bg-[#FFFFFF] rounded-full flex justify-center items-center">
                            <img src="{{ asset('icons/vector-right.svg') }}" alt="Next"
                                class="w-3 h-3 md:w-4 md:h-4">
                        </button>
                    </div>
                </div>

            </div>
        </section>

        <footer class="bg-[#29303D] w-full">
            <div class="max-w-[1280px] mx-auto px-8 py-16 gap-12">
                <div class="flex gap-12">
                    <div class="flex flex-col gap-2 w-1/3">
                        <div class="flex flex-col gap-4">
                            <div class="flex gap-4">
                                <img src="{{ asset('images/ub.png') }}" alt="UB Logo" class="w-10 h-10">
                                <img src="{{ asset('icons/gub.svg') }}" alt="Globalizing Logo" class="w-30 h-10">
                            </div>

                            <p class="text-[#FFFFFF] text-sm mt-2 font-inter font-light">Inspiring Change, Uniting
                                Civilizations</p>
                        </div>

                        <div class="flex flex-col gap-4 mt-4">
                            <div class="flex items-center gap-2">
                                <h3 class="text-white text-sm font-bold font-inter">Direktorat Kerjasama Universitas
                                    Brawijaya</h3>
                            </div>

                            <div class="flex items-center gap-2">
                                <img src="{{ asset('icons/location-blue.svg') }}" alt="Map Icon" class="w-4 h-4">
                                <p class="text-white text-sm font-light font-inter">Jl. Veteran, Ketawanggede, Kec.
                                    Lowokwaru, Kota Malang,
                                    Jawa Timur 65145, Indonesia</p>
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

                    <div class="flex flex-col gap-8 w-1/3">
                        <h4 class="text-white text-lg font-playfair font-semibold">Connect With Us</h4>
                        <div class="flex gap-4">
                            <button
                                class="w-[178.67px] h-[44px] bg-[#FFFFFF1A] rounded-[12px] flex items-center gap-[12px] p-[12px]">
                                <img src="{{ asset('icons/fb-blue.svg') }}" alt="Facebook Icon"
                                    class="w-[20px] h-[20px]">
                                <p class="text-white text-sm font-inter font-light leading-[20px]">Facebook</p>
                            </button>
                            <button
                                class="w-[178.67px] h-[44px] bg-[#FFFFFF1A] rounded-[12px] flex items-center gap-[12px] p-[12px]">
                                <img src="{{ asset('icons/linkedin-blue.svg') }}" alt="LinkedIn Icon"
                                    class="w-[20px] h-[20px]">
                                <p class="text-white text-sm font-inter font-light leading-[20px]">LinkedIn</p>
                            </button>
                        </div>

                        <div class="flex gap-4">
                            <button
                                class="w-[178.67px] h-[44px] bg-[#FFFFFF1A] rounded-[12px] flex items-center gap-[12px] p-[12px]">
                                <img src="{{ asset('icons/ig-blue.svg') }}" alt="Instagram Icon"
                                    class="w-[20px] h-[20px]">
                                <p class="text-white text-sm font-inter font-light leading-[20px]">Instagram</p>
                            </button>
                            <button
                                class="w-[178.67px] h-[44px] bg-[#FFFFFF1A] rounded-[12px] flex items-center gap-[12px] p-[12px]">
                                <img src="{{ asset('icons/yt-blue.svg') }}" alt="YouTube Icon"
                                    class="w-[20px] h-[20px]">
                                <p class="text-white text-sm font-inter font-light leading-[20px]">YouTube</p>
                            </button>
                        </div>
                    </div>

                    <div class="flex flex-col gap-4 w-1/3">
                        <h4 class="text-white text-lg font-playfair font-semibold">Visitor</h4>
                        <div class="grid grid-cols-2 gap-4 text-white text-sm">
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
                            <h5 class="text-white text-lg font-playfair font-semibold mb-2">Newsletter</h5>
                            <input type="email" placeholder="Enter your email"
                                class="w-[373.33px] h-[41px] p-[11px] bg-[#FFFFFF1A] rounded-[12px] border border-t-[1px] border-[#FFFFFF33] text-white" />
                            <button
                                class="w-[373.67px] h-[36px] p-[7.5px_152.85px_8.5px_152.82px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-[10px] text-white mt-4 shadow-[0px_4px_20px_-2px_#29303D1A]">
                                Subscribe
                            </button>
                        </div>
                    </div>

                </div>

                <div class="flex gap-12 mt-8">
                    <hr class="w-[1216px] h-[1px] border-t-[1px] border-[#FFFFFF33] opacity-100" />
                </div>

                <div class="flex justify-between items-center mt-8">
                    <div class="text-white text-sm font-inter font-light leading-[20px]">
                        © 2024 Universitas Brawijaya Direktorat Kerjasama, All Right Reserved.
                    </div>

                    <div class="flex gap-[20px]">
                        <a href="#" class="text-white text-sm font-inter font-light leading-[20px]">
                            Privacy Policy
                        </a>
                        <a href="#" class="text-white text-sm font-inter font-light leading-[20px]">
                            Terms of Service
                        </a>
                        <a href="#" class="text-white text-sm font-inter font-light leading-[20px]">
                            Sitemap
                        </a>
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
