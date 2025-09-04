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

        <div class="bg-[#F0F2F4] w-full h-[80px] flex items-center px-4 md:px-8 lg:px-28">
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
                <span class="text-[#29303D] text-[14px] font-medium">Detail Study in UB</span>
            </div>
        </div>

        <section id="study-in-ub"
            class="w-full bg-gradient-to-b from-[#F9FAFB] to-[#F0F2F4] px-4 sm:px-8 md:px-16 lg:px-28 py-10 md:py-16 lg:py-20">
            <div class="max-w-[1280px] mx-auto flex flex-col gap-8 md:gap-12 lg:gap-16">

                <div
                    class="bg-white rounded-[16px] p-[32px] shadow-[0px_4px_20px_-2px_#29303D1A] flex flex-col gap-[24px]">
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
                            <img src="{{ asset('icons/togs.svg') }}" alt="Program Icon"
                                class="w-6 h-6 md:w-8 md:h-8">
                        </div>

                        <h3
                            class="font-playfair font-bold text-lg md:text-xl lg:text-[20px] leading-6 md:leading-7 lg:leading-[28px] text-[#29303D]">
                            International Undergraduate Program
                        </h3>

                        <p class="font-inter font-normal text-sm md:text-base leading-5 md:leading-6 text-[#29303DB2]">
                            Comprehensive bachelor's degree programs taught in English with global perspectives
                        </p>

                        <div
                            class="flex justify-between items-center text-sm md:text-[14px] leading-5 md:leading-[20px]">
                            <span class="flex items-center gap-2 text-[#29303DB2]">
                                <img src="{{ asset('icons/user-black.svg') }}" class="w-4 h-4" alt="user">
                                2,500+ students
                            </span>
                            <span class="text-[#0000FF] font-medium">4 years</span>
                        </div>

                        <ul
                            class="flex flex-col gap-2 mt-2 text-sm md:text-[14px] leading-5 md:leading-[20px] font-inter text-[#29303D]">
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span>
                                English-taught courses</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span>
                                International faculty</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span>
                                Exchange opportunities</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Industry partnerships</li>
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
                            <img src="{{ asset('icons/globe.svg') }}" alt="Program Icon"
                                class="w-6 h-6 md:w-8 md:h-8">
                        </div>
                        <h3
                            class="font-playfair font-bold text-lg md:text-xl lg:text-[20px] leading-6 md:leading-7 lg:leading-[28px] text-[#29303D]">
                            Double Degree Programs
                        </h3>
                        <p class="font-inter font-normal text-sm md:text-base leading-5 md:leading-6 text-[#29303DB2]">
                            Earn degrees from both UB and partner universities worldwide
                        </p>
                        <div
                            class="flex justify-between items-center text-sm md:text-[14px] leading-5 md:leading-[20px]">
                            <span class="flex items-center gap-2 text-[#29303DB2]">
                                <img src="{{ asset('icons/user-black.svg') }}" class="w-4 h-4" alt="user">
                                800+ students
                            </span>
                            <span class="text-[#0000FF] font-medium">4–5 years</span>
                        </div>
                        <ul
                            class="flex flex-col gap-2 mt-2 text-sm md:text-[14px] leading-5 md:leading-[20px] font-inter text-[#29303D]">
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
                            class="mt-auto w-full h-10 border border-[#E2E4E9] rounded-xl flex items-center justify-center gap-2 px-4 py-2 font-medium text-[#29303D] text-sm md:text-[14px] leading-5 md:leading-[20px]">
                            Learn More
                            <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                        </a>
                    </div>

                    <div
                        class="w-full max-w-full sm:max-w-[384px] mx-auto h-auto md:h-[550px] bg-white rounded-2xl shadow-md p-6 md:p-8 flex flex-col gap-4 md:gap-6">
                        <div
                            class="w-12 h-12 md:w-16 md:h-16 rounded-2xl flex items-center justify-center bg-gradient-to-br from-[#0000FF] to-[#6699FF]">
                            <img src="{{ asset('icons/book.svg') }}" alt="Program Icon"
                                class="w-6 h-6 md:w-8 md:h-8">
                        </div>
                        <h3
                            class="font-playfair font-bold text-lg md:text-xl lg:text-[20px] leading-6 md:leading-7 lg:leading-[28px] text-[#29303D]">
                            International Master's
                        </h3>
                        <p class="font-inter font-normal text-sm md:text-base leading-5 md:leading-6 text-[#29303DB2]">
                            Advanced graduate programs with research focus and global collaboration
                        </p>
                        <div
                            class="flex justify-between items-center text-sm md:text-[14px] leading-5 md:leading-[20px]">
                            <span class="flex items-center gap-2 text-[#29303DB2]">
                                <img src="{{ asset('icons/user-black.svg') }}" class="w-4 h-4" alt="user">
                                1,200+ students
                            </span>
                            <span class="text-[#0000FF] font-medium">2 years</span>
                        </div>
                        <ul
                            class="flex flex-col gap-2 mt-2 text-sm md:text-[14px] leading-5 md:leading-[20px] font-inter text-[#29303D]">
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
                            class="mt-auto w-full h-10 border border-[#E2E4E9] rounded-xl flex items-center justify-center gap-2 px-4 py-2 font-medium text-[#29303D] text-sm md:text-[14px] leading-5 md:leading-[20px]">
                            Learn More
                            <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                        </a>
                    </div>

                </div>

                <div class="w-full flex justify-center items-center py-8">
                    <div class="flex items-center gap-4">
                        <button
                            class="w-10 h-10 md:w-12 md:h-12 bg-[#FFFFFF] rounded-full flex justify-center items-center">
                            <img src="{{ asset('icons/vector-left.svg') }}" alt="Previous"
                                class="w-3 h-3 md:w-4 md:h-4">
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

                        <button
                            class="w-10 h-10 md:w-12 md:h-12 bg-[#FFFFFF] rounded-full flex justify-center items-center">
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
                    <div class="text-white text-sm font-inter font-normal leading-[20px]">
                        © 2024 Universitas Brawijaya Direktorat Kerjasama, All Right Reserved.
                    </div>

                    <div class="flex gap-[20px]">
                        <a href="#" class="text-white text-sm font-['Font 2'] font-normal leading-[20px]">
                            Privacy Policy
                        </a>
                        <a href="#" class="text-white text-sm font-['Font 2'] font-normal leading-[20px]">
                            Terms of Service
                        </a>
                        <a href="#" class="text-white text-sm font-['Font 2'] font-normal leading-[20px]">
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
