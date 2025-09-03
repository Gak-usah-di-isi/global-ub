<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
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

        <section class="relative w-full h-[800px] md:h-[700px] lg:h-[600px] max-w-[1440px] mx-auto">
            <div class="absolute inset-0 bg-[url('../../../public/images/hero-bg.jpg')] bg-cover bg-center">
                <div class="absolute inset-0 bg-gradient-to-r from-[#0000FF] to-[#6699FF] opacity-90"></div>
            </div>
            <div
                class="absolute top-1/2 transform -translate-y-1/2 w-full flex flex-col md:flex-row items-center justify-between px-4 sm:px-8 md:px-12 lg:px-[120px] gap-8 md:gap-0">
                <div class="text-container flex flex-col gap-4 sm:gap-6 w-full md:w-1/2 lg:w-[779px] max-w-full md:max-w-[896px] text-center md:text-left">
                    <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-[72px] font-bold leading-tight md:leading-[72px] tracking-normal text-white font-playfair">
                        Inspiring Change,<br><span class="text-[#6699FF]">Uniting Civilizations</span>
                    </h1>
                    <h2 class="text-lg sm:text-xl md:text-[24px] font-light leading-relaxed md:leading-[24px] text-white font-inter tracking-normal">
                        Leading research and innovation on the global stage
                    </h2>
                    <div class="flex flex-col sm:flex-row gap-3 justify-center md:justify-start">
                        <button
                            class="bg-[#FFFFFF1A] border border-[#FFFFFF33] shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px] text-[#0000FF] py-2 px-4 sm:px-[33px] rounded-[12px] w-full sm:w-[220px] h-[56px] flex items-center justify-center gap-2">
                            <span class="font-medium font-inter text-sm sm:text-[14px] leading-[24px] text-white">Explore
                                Programs</span>
                            <img src="{{ asset('icons/play.svg') }}" alt="Play Icon" class="w-6 h-6">
                        </button>

                        <button
                            class="bg-[#FFFFFF1A] border border-[#FFFFFF4D] shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px] text-[#0000FF] py-2 px-4 sm:px-[41px] rounded-[12px] w-full sm:w-[179px] h-[56px]">
                            <span class="font-medium font-inter text-sm sm:text-[14px] leading-[24px] text-white">Watch
                                Video</span>
                        </button>
                    </div>
                </div>
                <div class="image-container w-full md:w-1/2 lg:w-[380px] h-[300px] sm:h-[350px] md:h-[390px] rounded-[20px] overflow-hidden mt-4 md:mt-0">
                    <img src="{{ asset('/images/hero-content.jpg') }}" alt="Image"
                        class="w-full h-full object-cover">
                </div>
            </div>

            <div
                class="hidden md:flex absolute top-1/2 left-7 transform -translate-y-1/2 p-2 bg-[#FFFFFF1A] rounded-full shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px]">
                <button class="w-12 h-12 flex justify-center items-center text-white">
                    <img src="{{ asset('icons/left-arrow.svg') }}" alt="Previous" class="w-6 h-6">
                </button>
            </div>
            <div
                class="hidden md:flex absolute top-1/2 right-7 transform -translate-y-1/2 p-2 bg-[#FFFFFF1A] rounded-full shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px]">
                <button class="w-12 h-12 flex justify-center items-center text-white">
                    <img src="{{ asset('icons/right-arrow.svg') }}" alt="Next" class="w-6 h-6">
                </button>
            </div>

            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex gap-2">
                <div class="w-2 h-2 bg-[#FFFFFF80] rounded-full transition-all duration-300"></div>
                <div class="w-2 h-2 bg-[#FFFFFF80] rounded-full transition-all duration-300"></div>
                <div class="w-2 h-2 bg-[#FFFFFF] rounded-full transition-all duration-300"></div>
                <div class="w-2 h-2 bg-[#FFFFFF80] rounded-full transition-all duration-300"></div>
                <div class="w-2 h-2 bg-[#FFFFFF80] rounded-full transition-all duration-300"></div>
            </div>
        </section>

        <section class="w-full h-auto bg-[#F0F2F4] py-12 md:py-20">
            <div class="max-w-[1280px] mx-auto px-4 sm:px-6 md:px-8">
                <h1 class="text-2xl sm:text-3xl md:text-[38px] font-extrabold text-center text-[#29303D] font-playfair">
                    University Ranking
                </h1>
                <h2 class="text-base sm:text-lg md:text-[20px] font-inter font-normal text-center text-[#29303DB2] mt-2 mb-6 md:mb-8">
                    Recognized globally for academic excellence and research innovation
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 md:gap-8 mt-8 md:mt-16">
                    <div class="bg-white rounded-lg shadow-[0px_4px_20px_-2px_#29303D1A] p-6 md:p-8 flex flex-col items-center">
                        <div class="w-12 h-12 md:w-[64px] md:h-[64px] bg-[#F9FAFB] rounded-full flex justify-center items-center mb-4">
                            <img src="{{ asset('icons/trophy.svg') }}" alt="Icon 1"
                                class="w-6 h-6 md:w-[32px] md:h-[32px] opacity-100" />
                        </div>
                        <h3 class="text-xl md:text-[24px] font-inter font-bold text-[#29303D] text-center mt-2 mb-2">Top 5</h3>
                        <p class="font-inter font-bold text-center mb-2 text-[#29303DCC]">Indonesia Universities</p>
                        <p
                            class="text-[#29303D99] text-center mb-2 font-bold font-normal text-sm md:text-[14px] leading-[20px] tracking-normal">
                            QS World University Rankings
                        </p>
                        <span class="font-medium text-[#0000FF]">2024</span>
                    </div>

                    <div class="bg-white rounded-lg shadow-[0px_4px_20px_-2px_#29303D1A] p-6 md:p-8 flex flex-col items-center">
                        <div class="w-12 h-12 md:w-[64px] md:h-[64px] bg-[#F9FAFB] rounded-full flex justify-center items-center mb-4">
                            <img src="{{ asset('icons/globe-blue.svg') }}" alt="Icon 2"
                                class="w-6 h-6 md:w-[32px] md:h-[32px] opacity-100" />
                        </div>
                        <h3 class="text-xl md:text-[24px] font-inter font-bold text-[#29303D] text-center mt-2 mb-2">#401-450</h3>
                        <p class="text-[#29303DCC] font-inter font-bold text-center mb-2">World Universities</p>
                        <p
                            class="text-[#29303D99] text-center mb-2 font-bold font-normal text-sm md:text-[14px] leading-[20px] tracking-normal">
                            QS World University Rankings
                        </p>
                        <span class="font-medium text-[#0000FF]">2024</span>
                    </div>

                    <div class="bg-white rounded-lg shadow-[0px_4px_20px_-2px_#29303D1A] p-6 md:p-8 flex flex-col items-center">
                        <div class="w-12 h-12 md:w-[64px] md:h-[64px] bg-[#F9FAFB] rounded-full flex justify-center items-center mb-4">
                            <img src="{{ asset('icons/up.svg') }}" alt="Icon 3"
                                class="w-6 h-6 md:w-[32px] md:h-[32px] opacity-100" />
                        </div>
                        <h3 class="text-xl md:text-[24px] font-inter font-bold text-[#29303D] text-center mt-2 mb-2">Top 3</h3>
                        <p class="text-[#29303DCC] font-inter font-bold text-center mb-2">Research Impact</p>
                        <p
                            class="text-[#29303D99] text-center mb-2 font-bold font-normal text-sm md:text-[14px] leading-[20px] tracking-normal">
                            Times Higher Education
                        </p>
                        <span class="font-medium text-[#0000FF]">2024</span>
                    </div>
 
                    <div class="bg-white rounded-lg shadow-[0px_4px_20px_-2px_#29303D1A] p-6 md:p-8 flex flex-col items-center">
                        <div class="w-12 h-12 md:w-[64px] md:h-[64px] bg-[#F9FAFB] rounded-full flex justify-center items-center mb-4">
                            <img src="{{ asset('icons/star.svg') }}" alt="Icon 4"
                                class="w-6 h-6 md:w-[32px] md:h-[32px] opacity-100" />
                        </div>
                        <h3 class="text-xl md:text-[24px] font-inter font-extrabold text-[#29303D] text-center mt-2 mb-2">5 Stars
                        </h3>
                        <p class="text-[#29303DCC] font-inter font-bold text-center mb-2">Overall Rating</p>
                        <p
                            class="text-[#29303D99] text-center mb-2 font-bold font-normal text-sm md:text-[14px] leading-[20px] tracking-normal">
                            QS Stars Rating
                        </p>
                        <span class="font-medium text-[#0000FF]">2024</span>
                    </div>
                </div>

                <div class="flex justify-center mt-8 md:mt-16 rounded-full">
                    <button
                        class="bg-[#FFFFFFB2] text-[#29303D] py-3 px-4 md:py-[12px] md:px-[24px] rounded-full w-full max-w-[504px] h-12 md:h-[48px] flex items-center justify-center gap-2">
                        <img src="{{ asset('icons/up.svg') }}" alt="Arrow Right Icon" class="w-4 h-4 md:w-5 md:h-5">
                        <span class="font-medium font-inter text-sm md:text-[14px] leading-[24px]">
                            Consistently improving in global rankings year over year
                        </span>
                    </button>
                </div>

            </div>
        </section>

        <section class="w-full h-auto md:h-[665px] bg-white pt-12 md:pt-20 px-4 sm:px-8 md:px-12 lg:px-[112px]">
            <div class="max-w-[1440px] mx-auto flex flex-col md:flex-row gap-8 md:gap-12 lg:gap-[64px]">
                <div class="w-full md:w-1/2 lg:w-[576px]">
                    <h2 class="text-2xl sm:text-3xl md:text-[36px] font-playfair font-extrabold leading-tight md:leading-[48px] text-[#29303D]">About
                        Globalizing UB
                    </h2>
                    <p class="mt-4 text-base sm:text-lg md:text-[18px] font-light font-inter leading-relaxed md:leading-[29.25px] text-[#29303DB2]">
                        Brawijaya University is one of Indonesia's leading universities, committed to becoming a
                        world-class university. Through the Globalizing UB program, we provide international-quality
                        education that connects students with global opportunities. With over 60 years of experience in
                        education, UB has produced top-notch graduates who contribute to national and international
                        development.
                    </p>

                    <div class="mt-6 md:mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="flex items-center gap-2">
                            <div
                                class="w-10 h-10 md:w-[48px] md:h-[48px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-[12px] flex items-center justify-center">
                                <img src="{{ asset('icons/user.svg') }}" alt="Students Icon"
                                    class="w-5 h-5 md:w-[24px] md:h-[24px]" />
                            </div>
                            <div>
                                <p class="font-semibold text-sm md:text-[16px] text-[#29303D]">50,000+</p>
                                <p class="text-xs md:text-[14px] text-[#29303DB2]">Students</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <div
                                class="w-10 h-10 md:w-[48px] md:h-[48px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-[12px] flex items-center justify-center">
                                <img src="{{ asset('icons/book.svg') }}" alt="Programs Icon"
                                    class="w-5 h-5 md:w-[24px] md:h-[24px]" />
                            </div>
                            <div>
                                <p class="font-semibold text-sm md:text-[16px] text-[#29303D]">150+</p>
                                <p class="text-xs md:text-[14px] text-[#29303DB2]">Study Programs</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <div
                                class="w-10 h-10 md:w-[48px] md:h-[48px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-[12px] flex items-center justify-center">
                                <img src="{{ asset('icons/achievement.svg') }}" alt="Years Icon"
                                    class="w-5 h-5 md:w-[24px] md:h-[24px]" />
                            </div>
                            <div>
                                <p class="font-semibold text-sm md:text-[16px] text-[#29303D]">60+</p>
                                <p class="text-xs md:text-[14px] text-[#29303DB2]">Years of Excellence</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <div
                                class="w-10 h-10 md:w-[48px] md:h-[48px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-[12px] flex items-center justify-center">
                                <img src="{{ asset('icons/partner.svg') }}" alt="Partners Icon"
                                    class="w-5 h-5 md:w-[24px] md:h-[24px]" />
                            </div>
                            <div>
                                <p class="font-semibold text-sm md:text-[16px] text-[#29303D]">100+ </p>
                                <p class="text-xs md:text-[14px] text-[#29303DB2]">Partner Universities</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 md:mt-12 flex flex-col sm:flex-row gap-3 md:gap-[16px]">
                        <a href="#"
                            class="w-full sm:w-[140px] lg:w-[158px] h-[44px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] text-white rounded-[10px] shadow-[0px_4px_20px_-2px_#29303D1A] flex items-center justify-center text-center py-[11.5px] px-[32px] text-sm md:text-[14px] font-medium">
                            Learn More
                        </a>

                        <a href="#"
                            class="w-full sm:w-[198px] lg:w-[216px] h-[44px] bg-white text-[#29303D] border border-[#E2E4E9] rounded-[10px] flex items-center justify-center text-center py-[11.5px] px-[33px] text-sm md:text-[14px] font-medium">
                            Download Brochure
                        </a>
                    </div>

                </div>

                <div class="w-full md:w-1/2 lg:w-[576px] h-[250px] sm:h-[300px] md:h-[324px] rounded-[16px] overflow-hidden flex justify-center items-center mt-6 md:mt-24 relative">
                    <img src="{{ asset('/images/about-shadow.png') }}" alt="UB Image" class="w-full h-full object-cover">

                    <div class="absolute -bottom-20 md:-bottom-100 right-4 md:right-12 w-[180px] md:w-[220.08px] h-[70px] md:h-[80px] max-w-[220px] rounded-[16px] bg-white p-3 md:p-4 shadow-[0px_8px_25px_-8px_#0000FF4D] mt-72">
                        <div class="w-full flex items-center gap-3">
                            <div class="w-10 h-10 md:w-[48px] md:h-[48px] rounded-full flex items-center justify-center bg-[linear-gradient(135deg,#0000FF_0%,#6699FF_100%)]">
                                <img src="{{ asset('icons/partner.svg') }}" alt="Global Network Icon"
                                    class="w-5 h-5 md:w-6 md:h-6">
                            </div>
                            <div class="w-[calc(100%-60px)] leading-none">
                                <p class="font-inter font-semibold text-xs md:text-[14px] leading-tight md:leading-[24px] text-[#29303D]">
                                    Global Network
                                </p>
                                <p class="font-inter font-normal text-xs md:text-[12px] leading-tight md:leading-[20px] text-[#29303DB2]">
                                    Connected worldwide
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section id="news" class="w-full bg-[#FFFFFF] py-10 px-4 sm:px-8 md:px-12 lg:px-[112px]">
            <div class="max-w-[1280px] mx-auto h-auto md:h-[740px]">
                <div class="w-full text-center mb-8 md:mb-12">
                    <h2 class="text-2xl sm:text-3xl md:text-[36px] font-bold leading-tight md:leading-[40px] text-[#29303D] font-playfair">
                        News
                    </h2>
                    <p class="mt-2 md:mt-4 text-base sm:text-lg md:text-[20px] leading-relaxed md:leading-[28px] font-inter font-light text-[#29303DB2]">
                        Stay updated with the latest international activities and achievements
                        from Universitas Brawijaya
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                    <div class="flex flex-col gap-4">
                        <div class="w-full h-[200px] sm:h-[239px] rounded-[12px] overflow-hidden">
                            <img src="{{ asset('images/rektorat.png') }}" alt="Main News"
                                class="w-full h-full object-cover">
                        </div>

                        <h3 class="text-xl sm:text-2xl md:text-[24px] text-[#29303D] font-playfair font-extrabold">
                            UB Signs MOU with Stanford University for Joint Research Program
                        </h3>

                        <p class="text-base sm:text-lg md:text-[18px] font-inter font-light leading-relaxed md:leading-[29px] text-[#29303DB2]">
                            Universitas Brawijaya establishes new partnership with Stanford University
                            focusing on sustainable technology research and stude ..
                        </p>
                        <div class="flex items-center justify-between text-sm md:text-[14px] text-[#29303DB2]">
                            <div class="flex flex-col sm:flex-row gap-2 sm:gap-4">
                                <span class="flex items-center gap-1">
                                    <img src="{{ asset('icons/calender.svg') }}" class="w-4 h-4" alt="">
                                    1/15/2024
                                </span>
                                <span class="flex items-center gap-1">
                                    <img src="{{ asset('icons/clock.svg') }}" class="w-4 h-4" alt="">
                                    3 min read
                                </span>
                            </div>
                            <div>
                                <img src="{{ asset('icons/arrow-right.svg') }}" class="w-5 h-5" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-6 md:gap-8">
                        <div class="flex gap-4">
                            <img src="{{ asset('images/conference.jpg') }}" alt=""
                                class="w-16 h-16 sm:w-[96px] sm:h-[86px] rounded-lg object-cover">
                            <div>
                                <span
                                    class="text-xs font-inter font-medium text-green-600 bg-green-100 px-2 py-0.5 rounded-full">Event</span>
                                <h4 class="text-sm sm:text-[16px] font-playfair font-semibold text-[#29303D] mt-1">
                                    International Conference on Climate Change hosted by UB
                                </h4>
                                <p class="text-xs sm:text-[13px] font-inter font-light text-[#29303DB2] mt-1">1/12/2024 • 4 min
                                    read</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <img src="{{ asset('images/branch.jpg') }}" alt=""
                                class="w-16 h-16 sm:w-[96px] sm:h-[86px] rounded-lg object-cover">
                            <div>
                                <span
                                    class="text-xs font-inter font-medium text-yellow-700 bg-yellow-100 px-2 py-0.5 rounded-full">Achievement</span>
                                <h4 class="text-sm sm:text-[16px] font-playfair font-semibold text-[#29303D] mt-1">
                                    UB Students Win Gold at International Innovation Competition
                                </h4>
                                <p class="text-xs sm:text-[13px] font-inter font-light text-[#29303DB2] mt-1">1/10/2024 • 2 min
                                    read</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <img src="{{ asset('images/student.jpg') }}" alt=""
                                class="w-16 h-16 sm:w-[96px] sm:h-[86px] rounded-lg object-cover">
                            <div>
                                <span
                                    class="text-xs font-inter font-medium text-purple-700 bg-purple-100 px-2 py-0.5 rounded-full">Academic</span>
                                <h4 class="text-sm sm:text-[16px] font-playfair font-semibold text-[#29303D] mt-1">
                                    New Double Degree Program with University of Melbourne
                                </h4>
                                <p class="text-xs sm:text-[13px] font-inter font-light text-[#29303DB2] mt-1">1/8/2024 • 3 min
                                    read</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <img src="{{ asset('images/work.jpg') }}" alt=""
                                class="w-16 h-16 sm:w-[96px] sm:h-[86px] rounded-lg object-cover">
                            <div>
                                <span
                                    class="text-xs font-inter font-medium text-pink-700 bg-pink-100 px-2 py-0.5 rounded-full">Alumni</span>
                                <h4 class="text-sm sm:text-[16px] font-playfair font-semibold text-[#29303D] mt-1">
                                    Global Alumni Network Reaches 10,000 Members Worldwide
                                </h4>
                                <p class="text-xs sm:text-[13px] font-inter font-light text-[#29303DB2] mt-1">1/5/2024 • 2 min
                                    read</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="flex justify-center mt-8 md:mt-16">
                    <a href="#"
                        class="w-full max-w-[193px] h-[44px] bg-white border border-[#E2E4E9] rounded-[10px] flex items-center justify-center gap-[8px] px-[33px] pt-[11.5px] pb-[12.5px] text-[#29303D] font-medium text-sm md:text-[14px] leading-[20px]">
                        View All News
                        <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                    </a>
                </div>

            </div>
        </section>

        <section id="study-in-ub" class="w-full h-auto bg-gradient-to-b from-[#F9FAFB] to-[#F0F2F4] px-4 sm:px-6 md:px-8 lg:px-[80px] py-8 md:py-[80px]">
            <div class="max-w-[1280px] h-auto mx-auto px-4 sm:px-6 md:px-8 lg:px-[32px] flex flex-col gap-8 md:gap-[64px]">
                <div class="w-full flex flex-col items-center gap-4">
                    <h2 class="w-full text-center font-playfair font-bold text-2xl sm:text-3xl md:text-[36px] leading-tight md:leading-[40px] text-[#29303D]">
                        Study in UB
                    </h2>
                    <p class="max-w-full md:max-w-[768px] text-center font-inter font-light text-base sm:text-lg md:text-[20px] leading-relaxed md:leading-[28px] text-[#29303DB2]">
                        Discover world-class education opportunities and join our diverse international
                        academic community
                    </p>
                </div>

                <div class="w-full mx-auto grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 lg:gap-[32px] place-items-center">
                    <div class="flex flex-col items-center">
                        <div class="w-full text-center font-inter font-bold text-xl sm:text-2xl md:text-[36px] leading-tight md:leading-[40px] text-[#0000FF]">
                            150+
                        </div>
                        <span class="mt-1 text-[#29303DB2] font-inter text-xs sm:text-sm md:text-[14px] leading-[20px]">Study Programs</span>
                    </div>

                    <div class="flex flex-col items-center">
                        <div class="w-full text-center font-inter font-bold text-xl sm:text-2xl md:text-[36px] leading-tight md:leading-[40px] text-[#0000FF]">
                            15
                        </div>
                        <span class="mt-1 text-[#29303DB2] font-inter text-xs sm:text-sm md:text-[14px] leading-[20px]">Faculties</span>
                    </div>

                    <div class="flex flex-col items-center">
                        <div class="w-full text-center font-inter font-bold text-xl sm:text-2xl md:text-[36px] leading-tight md:leading-[40px] text-[#0000FF]">
                            100+
                        </div>
                        <span class="mt-1 text-[#29303DB2] font-inter text-xs sm:text-sm md:text-[14px] leading-[20px]">Partner
                            Universities</span>
                    </div>

                    <div class="flex flex-col items-center">
                        <div class="w-full text-center font-inter font-bold text-xl sm:text-2xl md:text-[36px] leading-tight md:leading-[40px] text-[#0000FF]">
                            4,500+
                        </div>
                        <span class="mt-1 text-[#29303DB2] font-inter text-xs sm:text-sm md:text-[14px] leading-[20px]">International
                            Students</span>
                    </div>
                </div>

                <div class="w-full mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 lg:gap-[32px]">
                    <div class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] p-6 md:p-[32px] flex flex-col gap-4 md:gap-[24px]">
                        <div class="w-12 h-12 md:w-[64px] md:h-[64px] rounded-[16px] flex items-center justify-center bg-gradient-to-br from-[#0000FF] to-[#6699FF]">
                            <img src="{{ asset('icons/togs.svg') }}" alt="Program Icon" class="w-6 h-6 md:w-8 md:h-8">
                        </div>

                        <h3 class="font-playfair font-bold text-lg md:text-[20px] leading-relaxed md:leading-[28px] text-[#29303D]">
                            International Undergraduate Program
                        </h3>

                        <p class="font-inter font-normal text-sm md:text-[16px] leading-relaxed md:leading-[24px] text-[#29303DB2]">
                            Comprehensive bachelor’s degree programs taught in English with global perspectives
                        </p>

                        <div class="flex justify-between items-center text-xs md:text-[14px] leading-[20px]">
                            <span class="flex items-center gap-2 text-[#29303DB2]">
                                <img src="{{ asset('icons/user-black.svg') }}" class="w-4 h-4" alt="user">
                                2,500+ students
                            </span>
                            <span class="text-[#0000FF] font-medium">4 years</span>
                        </div>

                        <ul class="flex flex-col gap-2 mt-2 text-xs md:text-[14px] leading-[20px] font-inter text-[#29303D]">
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> English-taught courses</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> International faculty</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Exchange opportunities</li>
                            <li class="flex items-center gap-2"><span
                                    class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Industry partnerships</li>
                        </ul>

                        <a href="#"
                            class="mt-4 md:mt-auto w-full h-10 border border-[#E2E4E9] rounded-[10px] flex items-center justify-center gap-2 px-[17px] py-[10px] font-medium text-[#29303D] text-xs md:text-[14px] leading-[20px]">
                            Learn More
                            <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                        </a>
                    </div>

                    <div class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] p-6 md:p-[32px] flex flex-col gap-4 md:gap-[24px]">
                        <div class="w-12 h-12 md:w-[64px] md:h-[64px] rounded-[16px] flex items-center justify-center bg-gradient-to-br from-[#0000FF] to-[#6699FF]">
                            <img src="{{ asset('icons/globe.svg') }}" alt="Program Icon" class="w-6 h-6 md:w-8 md:h-8">
                        </div>
                        <h3 class="font-playfair font-bold text-lg md:text-[20px] leading-relaxed md:leading-[28px] text-[#29303D]">
                            Double Degree Programs
                        </h3>
                        <p class="font-inter font-normal text-sm md:text-[16px] leading-relaxed md:leading-[24px] text-[#29303DB2]">
                            Earn degrees from both UB and partner universities worldwide
                        </p>
                        <div class="flex justify-between items-center text-xs md:text-[14px] leading-[20px]">
                            <span class="flex items-center gap-2 text-[#29303DB2]">
                                <img src="{{ asset('icons/user-black.svg') }}" class="w-4 h-4" alt="user">
                                800+ students
                            </span>
                            <span class="text-[#0000FF] font-medium">4–5 years</span>
                        </div>
                        <ul class="flex flex-col gap-2 mt-2 text-xs md:text-[14px] leading-[20px] font-inter text-[#29303D]">
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
                            class="mt-4 md:mt-auto w-full h-10 border border-[#E2E4E9] rounded-[10px] flex items-center justify-center gap-2 px-[17px] py-[10px] font-medium text-[#29303D] text-xs md:text-[14px] leading-[20px]">
                            Learn More
                            <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                        </a>
                    </div>

                    <div class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] p-6 md:p-[32px] flex flex-col gap-4 md:gap-[24px]">
                        <div  class="w-12 h-12 md:w-[64px] md:h-[64px] rounded-[16px] flex items-center justify-center bg-gradient-to-br from-[#0000FF] to-[#6699FF]">
                            <img src="{{ asset('icons/book.svg') }}" alt="Program Icon" class="w-6 h-6 md:w-8 md:h-8">
                        </div>
                        <h3 class="font-playfair font-bold text-lg md:text-[20px] leading-relaxed md:leading-[28px] text-[#29303D]">
                            International Master’s
                        </h3>
                        <p class="font-inter font-normal text-sm md:text-[16px] leading-relaxed md:leading-[24px] text-[#29303DB2]">
                            Advanced graduate programs with research focus and global collaboration
                        </p>
                        <div class="flex justify-between items-center text-xs md:text-[14px] leading-[20px]">
                            <span class="flex items-center gap-2 text-[#29303DB2]">
                                <img src="{{ asset('icons/user-black.svg') }}" class="w-4 h-4" alt="user">
                                1,200+ students
                            </span>
                            <span class="text-[#0000FF] font-medium">2 years</span>
                        </div>
                        <ul class="flex flex-col gap-2 mt-2 text-xs md:text-[14px] leading-[20px] font-inter text-[#29303D]">
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
                            class="mt-4 md:mt-auto w-full h-10 border border-[#E2E4E9] rounded-[10px] flex items-center justify-center gap-2 px-[17px] py-[10px] font-medium text-[#29303D] text-xs md:text-[14px] leading-[20px]">
                            Learn More
                            <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                        </a>
                    </div>

                </div>


            </div>
        </section>

        <section id="events" class="w-full h-auto bg-[#FFFFFF] px-4 py-8 sm:px-6 sm:py-10 md:px-8 md:py-12 lg:px-[80px] lg:py-[80px]">
            <div class="max-w-[1280px] mx-auto px-4 sm:px-6 md:px-8 flex flex-col gap-6 md:gap-8 lg:gap-[40px]">
                <div class="w-full flex flex-col items-center gap-4">
                    <h2
                        class="text-center font-playfair font-bold text-2xl sm:text-3xl md:text-[36px] leading-tight md:leading-[40px] text-[#29303D]">
                        Upcoming Events
                    </h2>
                    <p
                        class="max-w-full sm:max-w-[672px] text-center font-inter text-sm sm:text-base md:text-[20px] leading-relaxed md:leading-[28px] font-light text-[#29303DB2]">
                        Join our international events and connect with the global academic community
                    </p>
                </div>

                <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                    <article
                        class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
                        <div class="w-full h-48 sm:h-64 md:h-[288px]">
                            <img src="{{ asset('images/conference.jpg') }}" alt="International Education Fair 2024"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="w-full h-auto p-4 sm:p-6 flex flex-col gap-4">
                            <div class="w-full flex items-center justify-between">
                                <span
                                    class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                    Education Fair
                                </span>
                                <span
                                    class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                    upcoming
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
                                <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4"
                                    alt="">
                            </a>
                        </div>
                    </article>

                    <article
                        class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
                        <div class="w-full h-48 sm:h-64 md:h-[288px]">
                            <img src="{{ asset('images/present.jpg') }}" alt="Global Research Symposium"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="w-full h-auto p-4 sm:p-6 flex flex-col gap-4">
                            <div class="w-full flex items-center justify-between">
                                <span
                                    class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#EDE9FE] text-[#6D28D9]">
                                    Symposium
                                </span>
                                <span
                                    class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                    upcoming
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
                                <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4"
                                    alt="">
                            </a>
                        </div>
                    </article>
                    
                    <article
                        class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
                        <div class="w-full h-48 sm:h-64 md:h-[288px]">
                            <img src="{{ asset('images/fest.jpg') }}" alt="International Cultural Festival"
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
                                <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4"
                                    alt="">
                            </a>
                        </div>
                    </article>

                </div>
            </div>
        </section>


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