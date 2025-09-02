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
                <a href="#"
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

        <section class="relative w-full h-[700px] max-w-[1440px] mx-auto">
            <div class="absolute inset-0 bg-[url('../../../public/images/hero-bg.jpg')] bg-cover bg-center">
                <div class="absolute inset-0 bg-gradient-to-r from-[#0000FF] to-[#6699FF] opacity-90"></div>
            </div>
            <div
                class="absolute top-1/2 transform -translate-y-1/2 w-full flex items-center justify-between px-[120px]">
                <div class="text-container flex flex-col gap-[24px]"
                    style="width: 779px; height: 288px; max-width: 896px;">
                    <h1 class="text-[72px] font-bold leading-[72px] tracking-normal text-white font-playfair">
                        Inspiring Change,<br><span class="text-[#6699FF]">Uniting Civilizations</span>
                    </h1>
                    <h2 class="text-[24px] font-light leading-[24px] text-white font-inter tracking-normal">
                        Leading research and innovation on the global stage
                    </h2>
                    <div class="flex gap-[8px]">

                        <button
                            class="bg-[#FFFFFF1A] border border-[#FFFFFF33] shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px] text-[#0000FF] py-2 px-[33px] rounded-[12px] w-[220px] h-[56px] flex items-center gap-2">
                            <span class="font-medium font-inter text-[14px] leading-[24px] text-white">Explore
                                Programs</span>
                            <img src="{{ asset('icons/play.svg') }}" alt="Play Icon" class="w-6 h-6">
                        </button>

                        <button
                            class="bg-[#FFFFFF1A] border border-[#FFFFFF4D] shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px] text-[#0000FF] py-2 px-[41px] rounded-[12px] w-[179px] h-[56px]">
                            <span class="font-medium font-inter text-[14px] leading-[24px] text-white">Watch
                                Video</span>
                        </button>
                    </div>
                </div>
                <div class="image-container w-[380px] h-[390px] rounded-[20px] overflow-hidden">
                    <img src="{{ asset('/images/hero-content.jpg') }}" alt="Image"
                        class="w-full h-full object-cover">
                </div>
            </div>

            <div
                class="absolute top-1/2 left-7 transform -translate-y-1/2 p-2 bg-[#FFFFFF1A] rounded-full shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px]">
                <button class="w-12 h-12 flex justify-center items-center text-white">
                    <img src="{{ asset('icons/left-arrow.svg') }}" alt="Previous" class="w-6 h-6">
                </button>
            </div>
            <div
                class="absolute top-1/2 right-7 transform -translate-y-1/2 p-2 bg-[#FFFFFF1A] rounded-full shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px]">
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

        <section class="w-full h-auto bg-[#F0F2F4] py-20">
            <div class="max-w-[1280px] mx-auto px-8">
                <h1 class="text-[38px] font-extrabold text-center text-[#29303D] font-playfair">
                    University Ranking
                </h1>
                <h2 class="text-[20px] font-inter font-normal text-center text-[#29303DB2] mt-2 mb-8">
                    Recognized globally for academic excellence and research innovation
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mt-16">
                    <!-- Card 1 -->
                    <div
                        class="bg-white rounded-lg shadow-[0px_4px_20px_-2px_#29303D1A] p-8 flex flex-col items-center">
                        <div class="w-[64px] h-[64px] bg-[#F9FAFB] rounded-full flex justify-center items-center mb-4">
                            <img src="{{ asset('icons/trophy.svg') }}" alt="Icon 1"
                                class="w-[32px] h-[32px] opacity-100" />
                        </div>
                        <h3 class="text-[24px] font-inter font-bold text-[#29303D] text-center mt-2 mb-2">Top 5</h3>
                        <p class="font-inter font-bold text-center mb-2 text-[#29303DCC]">Indonesia Universities</p>
                        <p
                            class="text-[#29303D99] text-center mb-2 font-bold font-normal text-[14px] leading-[20px] tracking-normal">
                            QS World University Rankings
                        </p>
                        <span class="font-medium text-[#0000FF]">2024</span>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="bg-white rounded-lg shadow-[0px_4px_20px_-2px_#29303D1A] p-8 flex flex-col items-center">
                        <div class="w-[64px] h-[64px] bg-[#F9FAFB] rounded-full flex justify-center items-center mb-4">
                            <img src="{{ asset('icons/globe-blue.svg') }}" alt="Icon 2"
                                class="w-[32px] h-[32px] opacity-100" />
                        </div>
                        <h3 class="text-[24px] font-inter font-bold text-[#29303D] text-center mt-2 mb-2">#401-450</h3>
                        <p class="text-[#29303DCC] font-inter font-bold text-center mb-2">World Universities</p>
                        <p
                            class="text-[#29303D99] text-center mb-2 font-bold font-normal text-[14px] leading-[20px] tracking-normal">
                            QS World University Rankings
                        </p>
                        <span class="font-medium text-[#0000FF]">2024</span>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="bg-white rounded-lg shadow-[0px_4px_20px_-2px_#29303D1A] p-8 flex flex-col items-center">
                        <div class="w-[64px] h-[64px] bg-[#F9FAFB] rounded-full flex justify-center items-center mb-4">
                            <img src="{{ asset('icons/up.svg') }}" alt="Icon 3"
                                class="w-[32px] h-[32px] opacity-100" />
                        </div>
                        <h3 class="text-[24px] font-inter font-bold text-[#29303D] text-center mt-2 mb-2">Top 3</h3>
                        <p class="text-[#29303DCC] font-inter font-bold text-center mb-2">Research Impact</p>
                        <p
                            class="text-[#29303D99] text-center mb-2 font-bold font-normal text-[14px] leading-[20px] tracking-normal">
                            Times Higher Education
                        </p>
                        <span class="font-medium text-[#0000FF]">2024</span>
                    </div>

                    <!-- Card 4 -->
                    <div
                        class="bg-white rounded-lg shadow-[0px_4px_20px_-2px_#29303D1A] p-8 flex flex-col items-center">
                        <div class="w-[64px] h-[64px] bg-[#F9FAFB] rounded-full flex justify-center items-center mb-4">
                            <img src="{{ asset('icons/star.svg') }}" alt="Icon 4"
                                class="w-[32px] h-[32px] opacity-100" />
                        </div>
                        <h3 class="text-[24px] font-inter font-extrabold text-[#29303D] text-center mt-2 mb-2">5 Stars
                        </h3>
                        <p class="text-[#29303DCC] font-inter font-bold text-center mb-2">Overall Rating</p>
                        <p
                            class="text-[#29303D99] text-center mb-2 font-bold font-normal text-[14px] leading-[20px] tracking-normal">
                            QS Stars Rating
                        </p>
                        <span class="font-medium text-[#0000FF]">2024</span>
                    </div>
                </div>

                <!-- Button Section -->
                <div class="flex justify-center mt-16 rounded-full">
                    <button
                        class="bg-[#FFFFFFB2] text-[#29303D] py-[12px] px-[24px] rounded-full w-[504px] h-[48px] flex items-center justify-center gap-[5px]">
                        <img src="{{ asset('icons/up.svg') }}" alt="Arrow Right Icon" class="w-5 h-5">
                        <span class="font-medium font-inter text-[14px] leading-[24px]">
                            Consistently improving in global rankings year over year
                        </span>
                    </button>
                </div>

            </div>
        </section>

        <section class="w-full h-[665px] bg-white pt-20 px-[112px]">
            <div class="max-w-[1440px] mx-auto flex gap-[64px]">
                <!-- Left Container: About -->
                <div class="w-[576px]">
                    <h2 class="text-[36px] font-playfair font-extrabold leading-[48px] text-[#29303D]">About
                        Globalizing
                        UB
                    </h2>
                    <p class="mt-4 text-[18px] font-light font-inter leading-[29.25px] text-[#29303DB2]">
                        Brawijaya University is one of Indonesia's leading universities, committed to becoming a
                        world-class university. Through the Globalizing UB program, we provide international-quality
                        education that connects students with global opportunities. With over 60 years of experience in
                        education, UB has produced top-notch graduates who contribute to national and international
                        development.
                    </p>

                    <!-- Icons -->
                    <div class="mt-8 grid grid-cols-2 gap-4">
                        <div class="flex items-center gap-2">
                            <div
                                class="w-[48px] h-[48px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-[12px] flex items-center justify-center">
                                <img src="{{ asset('icons/user.svg') }}" alt="Students Icon"
                                    class="w-[24px] h-[24px]" />
                            </div>
                            <div>
                                <p class="font-semibold text-[16px] text-[#29303D]">50,000+</p>
                                <p class="text-[14px] text-[#29303DB2]">Students</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <div
                                class="w-[48px] h-[48px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-[12px] flex items-center justify-center">
                                <img src="{{ asset('icons/book.svg') }}" alt="Programs Icon"
                                    class="w-[24px] h-[24px]" />
                            </div>
                            <div>
                                <p class="font-semibold text-[16px] text-[#29303D]">150+</p>
                                <p class="text-[14px] text-[#29303DB2]">Study Programs</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <div
                                class="w-[48px] h-[48px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-[12px] flex items-center justify-center">
                                <img src="{{ asset('icons/achievement.svg') }}" alt="Years Icon"
                                    class="w-[24px] h-[24px]" />
                            </div>
                            <div>
                                <p class="font-semibold text-[16px] text-[#29303D]">60+</p>
                                <p class="text-[14px] text-[#29303DB2]">Years of Excellence</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <div
                                class="w-[48px] h-[48px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-[12px] flex items-center justify-center">
                                <img src="{{ asset('icons/partner.svg') }}" alt="Partners Icon"
                                    class="w-[24px] h-[24px]" />
                            </div>
                            <div>
                                <p class="font-semibold text-[16px] text-[#29303D]">100+ </p>
                                <p class="text-[14px] text-[#29303DB2]">Partner Universities</p>
                            </div>
                        </div>
                    </div>

                    <!-- Button Container -->
                    <div class="mt-12 flex gap-[16px]">
                        <!-- Learn More Button -->
                        <a href="#"
                            class="w-[140px] h-[44px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] text-white rounded-[10px] shadow-[0px_4px_20px_-2px_#29303D1A] flex items-center justify-center text-center py-[11.5px] px-[32px] text-[14px] font-medium">
                            Learn More
                        </a>

                        <!-- Download Brochure Button -->
                        <a href="#"
                            class="w-[198px] h-[44px] bg-white text-[#29303D] border border-[#E2E4E9] rounded-[10px] flex items-center justify-center text-center py-[11.5px] px-[33px] text-[14px] font-medium">
                            Download Brochure
                        </a>
                    </div>

                </div>

                <div class="w-[576px] h-[324px] rounded-[16px] overflow-hidden flex justify-center items-center mt-24">


                    <img src="{{ asset('/images/about-shadow.png') }}" alt="UB Image">

                    <div
                        class="absolute -bottom-100 right-12 w-[220.08px] h-[80px] max-w-[220px] rounded-[16px] bg-white p-4 shadow-[0px_8px_25px_-8px_#0000FF4D] mt-72">
                        <div class="w-[205.08px] h-[48px] flex items-center gap-3">
                            <!-- Icon circle -->
                            <div
                                class="w-[48px] h-[48px] rounded-full flex items-center justify-center bg-[linear-gradient(135deg,#0000FF_0%,#6699FF_100%)]">
                                <img src="{{ asset('icons/partner.svg') }}" alt="Global Network Icon"
                                    class="w-6 h-6">
                            </div>
                            <!-- Texts -->
                            <div class="w-[145px] h-[44px] leading-none">
                                <p class="font-inter font-semibold text-[14px] leading-[24px] text-[#29303D]">
                                    Global Network
                                </p>
                                <p class="font-inter font-normal text-[12px] leading-[20px] text-[#29303DB2]">
                                    Connected worldwide
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section id="news" class="w-full bg-[#FFFFFF] py-10 px-[112px]">
            <div class="max-w-[1280px] mx-auto h-[740px]">

                <!-- Heading -->
                <div class="w-full text-center mb-12">
                    <h2 class="text-[36px] font-bold leading-[40px] text-[#29303D] font-playfair">
                        News
                    </h2>
                    <p class="mt-4 text-[20px] leading-[28px] font-inter font-light text-[#29303DB2]">
                        Stay updated with the latest international activities and achievements
                        from Universitas Brawijaya
                    </p>
                </div>

                <!-- Content -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                    <!-- Left Big Card -->
                    <div class="flex flex-col gap-4">
                        <div class="w-[592px] h-[239px] rounded-[12px] overflow-hidden">
                            <img src="{{ asset('images/rektorat.png') }}" alt="Main News"
                                class="w-full h-full object-cover">
                        </div>

                        <h3 class="text-[24px] text-[#29303D] font-playfair font-extrabold">
                            UB Signs MOU with Stanford University for Joint Research Program
                        </h3>

                        <p class="text-[18px] font-inter font-light leading-[29px] text-[#29303DB2]">
                            Universitas Brawijaya establishes new partnership with Stanford University
                            focusing on sustainable technology research and stude ..
                        </p>
                        <div class="flex items-center justify-between text-[14px] text-[#29303DB2]">
                            <div class="flex gap-4">
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

                    <!-- Right Small List -->
                    <div class="flex flex-col gap-8">
                        <!-- Item -->
                        <div class="flex gap-4">
                            <img src="{{ asset('images/conference.jpg') }}" alt=""
                                class="w-[96px] h-[86px] rounded-lg object-cover">
                            <div>
                                <span
                                    class="text-[12px] font-inter font-medium text-green-600 bg-green-100 px-2 py-0.5 rounded-full">Event</span>
                                <h4 class="text-[16px] font-playfair font-semibold text-[#29303D] mt-1">
                                    International Conference on Climate Change hosted by UB
                                </h4>
                                <p class="text-[13px] font-inter font-light text-[#29303DB2] mt-1">1/12/2024 • 4 min
                                    read</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <img src="{{ asset('images/branch.jpg') }}" alt=""
                                class="w-[96px] h-[86px] rounded-lg object-cover">
                            <div>
                                <span
                                    class="text-[12px] font-inter font-medium text-yellow-700 bg-yellow-100 px-2 py-0.5 rounded-full">Achievement</span>
                                <h4 class="text-[16px] font-playfair font-semibold text-[#29303D] mt-1">
                                    UB Students Win Gold at International Innovation Competition
                                </h4>
                                <p class="text-[13px] font-inter font-light text-[#29303DB2] mt-1">1/10/2024 • 2 min
                                    read</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <img src="{{ asset('images/student.jpg') }}" alt=""
                                class="w-[96px] h-[86px] rounded-lg object-cover">
                            <div>
                                <span
                                    class="text-[12px] font-inter font-medium text-purple-700 bg-purple-100 px-2 py-0.5 rounded-full">Academic</span>
                                <h4 class="text-[16px] font-playfair font-semibold text-[#29303D] mt-1">
                                    New Double Degree Program with University of Melbourne
                                </h4>
                                <p class="text-[13px] font-inter font-light text-[#29303DB2] mt-1">1/8/2024 • 3 min
                                    read</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <img src="{{ asset('images/work.jpg') }}" alt=""
                                class="w-[96px] h-[86px] rounded-lg object-cover">
                            <div>
                                <span
                                    class="text-[12px] font-inter font-medium text-pink-700 bg-pink-100 px-2 py-0.5 rounded-full">Alumni</span>
                                <h4 class="text-[16px] font-playfair font-semibold text-[#29303D] mt-1">
                                    Global Alumni Network Reaches 10,000 Members Worldwide
                                </h4>
                                <p class="text-[13px] font-inter font-light text-[#29303DB2] mt-1">1/5/2024 • 2 min
                                    read</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Button -->
                <div class="flex justify-center mt-16">
                    <a href="#"
                        class="w-[193px] h-[44px] bg-white border border-[#E2E4E9] rounded-[10px] flex items-center justify-center gap-[8px] px-[33px] pt-[11.5px] pb-[12.5px] text-[#29303D] font-medium text-[14px] leading-[20px]">
                        View All News
                        <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                    </a>
                </div>

            </div>
        </section>

        <section id="study-in-ub"
            class="w-full h-[992px] bg-gradient-to-b from-[#F9FAFB] to-[#F0F2F4] px-[80px] py-[80px]">
            <!-- inner container 1280 / px-32 -->
            <div class="max-w-[1280px] h-[832px] mx-auto px-[32px] flex flex-col gap-[64px]">

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

                </div>


            </div>
        </section>

        <section id="events"
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
