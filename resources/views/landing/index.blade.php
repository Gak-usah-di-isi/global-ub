@extends('core.app')

@section('title', 'Landing Page')

@section('content')
    <section class="relative w-full h-[800px] md:h-[700px] lg:h-[600px] max-w-[1440px] mx-auto">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/hero-bg.jpg') }}')">
            <div class="absolute inset-0 bg-gradient-to-r from-[#0000FF] to-[#6699FF] opacity-90"></div>
        </div>
        <div
            class="absolute top-1/2 transform -translate-y-1/2 w-full flex flex-col md:flex-row items-center justify-between px-4 sm:px-8 md:px-12 lg:px-[120px] gap-8 md:gap-0">
            <div
                class="text-container flex flex-col gap-4 sm:gap-6 w-full md:w-1/2 lg:w-[779px] max-w-full md:max-w-[896px] text-center md:text-left">
                <h1
                    class="text-4xl sm:text-5xl md:text-6xl lg:text-[72px] font-bold leading-tight md:leading-[72px] tracking-normal text-white font-playfair">
                    Inspiring Change,<br><span class="text-[#6699FF]">Uniting Civilizations</span>
                </h1>
                <h2
                    class="text-lg sm:text-xl md:text-[24px] font-light leading-relaxed md:leading-[24px] text-white font-inter tracking-normal">
                    Leading research and innovation on the global stage
                </h2>
                <div class="flex flex-col sm:flex-row gap-3 justify-center md:justify-start">
                    <button
                        class="bg-[#FFFFFF1A] border border-[#FFFFFF33] shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px] text-[#0000FF] py-2 px-4 sm:px-[33px] rounded-[12px] w-full sm:w-[220px] h-[56px] flex items-center justify-center gap-2">
                        <span class="font-medium font-inter text-sm sm:text-[14px] leading-[24px] text-white">Explore
                            Programs</span>
                        <img src="{{ asset('icons/play.svg') }}" alt="Play Icon" class="w-4 h-4">
                    </button>

                    <button
                        class="bg-[#FFFFFF1A] border border-[#FFFFFF4D] shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px] text-[#0000FF] py-2 px-4 sm:px-[41px] rounded-[12px] w-full sm:w-[179px] h-[56px]">
                        <span class="font-medium font-inter text-sm sm:text-[14px] leading-[24px] text-white">Watch
                            Video</span>
                    </button>
                </div>
            </div>
            <div
                class="image-container w-full md:w-1/2 lg:w-[380px] h-[300px] sm:h-[350px] md:h-[390px] rounded-[20px] overflow-hidden mt-4 md:mt-0">
                <img src="{{ asset('/images/hero-content.jpg') }}" alt="Image" class="w-full h-full object-cover">
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

    <section class="w-full h-auto bg-[#F0F2F4] py-12 md:py-20 lg:px-[112px]">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 md:px-8 lg:px-[0px]">
            <h1 class="text-2xl sm:text-3xl md:text-[38px] font-extrabold text-center text-[#29303D] font-playfair">
                University Ranking
            </h1>
            <h2
                class="text-base sm:text-lg md:text-[20px] font-inter font-normal text-center text-[#29303DB2] mt-2 mb-6 md:mb-8">
                Recognized globally for academic excellence and research innovation
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 md:gap-8 mt-8 md:mt-16">
                <div class="bg-white rounded-lg shadow-[0px_4px_20px_-2px_#29303D1A] p-6 md:p-8 flex flex-col items-center">
                    <div
                        class="w-12 h-12 md:w-[64px] md:h-[64px] bg-[#F9FAFB] rounded-full flex justify-center items-center mb-4">
                        <img src="{{ asset('icons/trophy.svg') }}" alt="Icon 1"
                            class="w-6 h-6 md:w-[32px] md:h-[32px] opacity-100" />
                    </div>
                    <h3 class="text-xl md:text-[24px] font-inter font-bold text-[#29303D] text-center mt-2 mb-2">
                        Top 5</h3>
                    <p class="font-inter font-bold text-center mb-2 text-[#29303DCC]">Indonesia Universities</p>
                    <p
                        class="text-[#29303D99] text-center mb-2 font-bold font-normal text-sm md:text-[14px] leading-[20px] tracking-normal">
                        QS World University Rankings
                    </p>
                    <span class="font-medium text-[#0000FF]">2024</span>
                </div>

                <div class="bg-white rounded-lg shadow-[0px_4px_20px_-2px_#29303D1A] p-6 md:p-8 flex flex-col items-center">
                    <div
                        class="w-12 h-12 md:w-[64px] md:h-[64px] bg-[#F9FAFB] rounded-full flex justify-center items-center mb-4">
                        <img src="{{ asset('icons/globe-blue.svg') }}" alt="Icon 2"
                            class="w-6 h-6 md:w-[32px] md:h-[32px] opacity-100" />
                    </div>
                    <h3 class="text-xl md:text-[24px] font-inter font-bold text-[#29303D] text-center mt-2 mb-2">
                        #401-450</h3>
                    <p class="text-[#29303DCC] font-inter font-bold text-center mb-2">World Universities</p>
                    <p
                        class="text-[#29303D99] text-center mb-2 font-bold font-normal text-sm md:text-[14px] leading-[20px] tracking-normal">
                        QS World University Rankings
                    </p>
                    <span class="font-medium text-[#0000FF]">2024</span>
                </div>

                <div class="bg-white rounded-lg shadow-[0px_4px_20px_-2px_#29303D1A] p-6 md:p-8 flex flex-col items-center">
                    <div
                        class="w-12 h-12 md:w-[64px] md:h-[64px] bg-[#F9FAFB] rounded-full flex justify-center items-center mb-4">
                        <img src="{{ asset('icons/up.svg') }}" alt="Icon 3"
                            class="w-6 h-6 md:w-[32px] md:h-[32px] opacity-100" />
                    </div>
                    <h3 class="text-xl md:text-[24px] font-inter font-bold text-[#29303D] text-center mt-2 mb-2">
                        Top 3</h3>
                    <p class="text-[#29303DCC] font-inter font-bold text-center mb-2">Research Impact</p>
                    <p
                        class="text-[#29303D99] text-center mb-2 font-bold font-normal text-sm md:text-[14px] leading-[20px] tracking-normal">
                        Times Higher Education
                    </p>
                    <span class="font-medium text-[#0000FF]">2024</span>
                </div>

                <div class="bg-white rounded-lg shadow-[0px_4px_20px_-2px_#29303D1A] p-6 md:p-8 flex flex-col items-center">
                    <div
                        class="w-12 h-12 md:w-[64px] md:h-[64px] bg-[#F9FAFB] rounded-full flex justify-center items-center mb-4">
                        <img src="{{ asset('icons/star.svg') }}" alt="Icon 4"
                            class="w-6 h-6 md:w-[32px] md:h-[32px] opacity-100" />
                    </div>
                    <h3 class="text-xl md:text-[24px] font-inter font-extrabold text-[#29303D] text-center mt-2 mb-2">
                        5 Stars
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

    <section class="w-full h-auto bg-white pt-8 md:pt-10 px-4 sm:px-6 md:px-8 lg:px-[112px] pb-0 sm:pb-0 lg:pb-12">
        <div class="max-w-[1440px] mx-auto flex flex-col lg:flex-row gap-8 md:gap-12 lg:gap-[64px]">
            <div class="w-full lg:w-1/2 xl:w-[576px]">
                <h2
                    class="text-2xl sm:text-3xl md:text-[36px] font-playfair font-extrabold leading-tight md:leading-[48px] text-[#29303D]">
                    About Globalizing UB
                </h2>
                <p
                    class="mt-4 text-base sm:text-lg md:text-[18px] font-light font-inter leading-relaxed md:leading-[29.25px] text-[#29303DB2]">
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
                            <img src="{{ asset('icons/user.svg') }}" alt="Students Icon" class="w-[24px] h-[24px]" />
                        </div>
                        <div>
                            <p class="font-semibold text-sm md:text-[16px] text-[#29303D]">50,000+</p>
                            <p class="text-xs md:text-[14px] text-[#29303DB2]">Students</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div
                            class="w-10 h-10 md:w-[48px] md:h-[48px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-[12px] flex items-center justify-center">
                            <img src="{{ asset('icons/book.svg') }}" alt="Programs Icon" class="w-[24px] h-[24px]" />
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
                                class="w-[24px] h-[24px]" />
                        </div>
                        <div>
                            <p class="font-semibold text-sm md:text-[16px] text-[#29303D]">60+</p>
                            <p class="text-xs md:text-[14px] text-[#29303DB2]">Years of Excellence</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div
                            class="w-10 h-10 md:w-[48px] md:h-[48px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-[12px] flex items-center justify-center">
                            <img src="{{ asset('icons/partner.svg') }}" alt="Partners Icon" class="w-[24px] h-[24px]" />
                        </div>
                        <div>
                            <p class="font-semibold text-sm md:text-[16px] text-[#29303D]">100+</p>
                            <p class="text-xs md:text-[14px] text-[#29303DB2]">Partner Universities</p>
                        </div>
                    </div>
                </div>

                <div class="mt-8 md:mt-12 flex flex-col sm:flex-row gap-4 md:gap-[16px]">
                    <a href="#"
                        class="w-full sm:w-[150px] h-[44px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] text-white rounded-[10px] shadow-md flex items-center justify-center text-center py-[11.5px] px-[32px] text-sm md:text-[14px] font-medium">
                        Learn More
                    </a>

                    <a href="#"
                        class="w-full sm:w-[200px] h-[44px] bg-white text-[#29303D] border border-[#E2E4E9] rounded-[10px] flex items-center justify-center text-center py-[11.5px] px-[33px] text-sm md:text-[14px] font-medium hover:bg-gray-50">
                        Download Brochure
                    </a>
                </div>
            </div>

            <div class="relative">
                <div class="w-full lg:w-[576px] h-[250px] sm:h-[300px] md:h-[324px] rounded-[16px] overflow-hidden relative mt-0 md:mt-12 lg:mt-24"
                    style="box-shadow: 0px 8px 25px -8px #0000FF4D;">
                    <!-- Background Image -->
                    <div class="absolute inset-0">
                        <img src="{{ asset('/images/about-new.png') }}" alt="UB Image"
                            class="w-full h-full object-cover">
                    </div>

                    <!-- Gradient Overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-[rgba(0,0,255,0.6)] to-[rgba(102,153,255,0.6)] rounded-[16px]">
                    </div>

                    <!-- Video Content Container -->
                    <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white z-10">
                        <!-- Play Button -->
                        <button
                            class="relative z-20 flex items-center justify-center w-16 h-16 md:w-20 md:h-20 rounded-full bg-white bg-opacity-20 backdrop-blur-sm mb-6">
                            <img src='{{ asset('icons/play.svg') }}' alt="Play"
                                class="w-6 h-6 md:w-8 md:h-8 text-white" />
                        </button>

                        <!-- Title -->
                        <h3 class="font-playfair font-bold text-lg md:text-xl lg:text-2xl text-white mb-2">
                            University Profile Video
                        </h3>

                        <!-- Subtitle -->
                        <p class="font-inter font-normal text-sm md:text-base text-white opacity-90">
                            Discover our journey towards global excellence
                        </p>
                    </div>
                </div>

                <!-- Global Network Card - Positioned relative to the wrapper -->
                <div
                    class="absolute -bottom-6 -right-2 sm:-bottom-8 sm:-right-4 md:-bottom-8 md:-right-6 lg:bottom-16 lg:-right-6 w-[160px] sm:w-[180px] md:w-[200px] lg:w-[220px] h-[50px] sm:h-[65px] md:h-[70px] lg:h-[80px] rounded-[12px] md:rounded-[16px] bg-white border border-[#E2E4E9] p-2 sm:p-3 md:p-4 z-20 shadow-[0px_4px_20px_-2px_#29303D1A]">
                    <div class="flex items-center gap-2 sm:gap-3 w-full h-full">
                        <div
                            class="w-8 h-8 sm:w-10 sm:h-10 md:w-[48px] md:h-[48px] rounded-full flex items-center justify-center bg-[linear-gradient(135deg,#0000FF_0%,#6699FF_100%)]">
                            <img src="{{ asset('icons/partner.svg') }}" alt="Global Network Icon"
                                class="w-4 h-4 sm:w-5 sm:h-5 md:w-6 md:h-6">
                        </div>
                        <div class="flex-1 min-w-0">
                            <p
                                class="font-inter font-semibold text-xs sm:text-[13px] md:text-[14px] leading-[1.2] sm:leading-[1.3] md:leading-[24px] text-[#29303D] truncate">
                                Global Network
                            </p>
                            <p
                                class="font-inter font-normal text-[10px] sm:text-[11px] md:text-[12px] leading-[1.1] sm:leading-[1.2] md:leading-[20px] text-[#29303DB2] truncate">
                                Connected worldwide
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="news" class="w-full bg-[#FFFFFF] py-10 px-4 sm:px-8 md:px-12 lg:px-[112px]">
        <div class="max-w-[1280px] mx-auto h-auto">
            <div class="w-full text-center mb-8 md:mb-12">
                <h2
                    class="text-2xl sm:text-3xl md:text-[36px] font-bold leading-tight md:leading-[40px] text-[#29303D] font-playfair">
                    News
                </h2>
                <p
                    class="mt-2 md:mt-4 text-base sm:text-lg md:text-[20px] leading-relaxed md:leading-[28px] font-inter font-light text-[#29303DB2]">
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

                    <p
                        class="text-base sm:text-lg md:text-[18px] font-inter font-light leading-relaxed md:leading-[29px] text-[#29303DB2]">
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
                            <p class="text-xs sm:text-[13px] font-inter font-light text-[#29303DB2] mt-1">1/12/2024
                                • 4 min
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
                            <p class="text-xs sm:text-[13px] font-inter font-light text-[#29303DB2] mt-1">1/10/2024
                                • 2 min
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
                            <p class="text-xs sm:text-[13px] font-inter font-light text-[#29303DB2] mt-1">1/8/2024
                                • 3 min
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
                            <p class="text-xs sm:text-[13px] font-inter font-light text-[#29303DB2] mt-1">1/5/2024
                                • 2 min
                                read</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="flex justify-center mt-8 md:mt-16">
                <a href="#"
                    class="w-full max-w-[193px] h-[44px] bg-white border border-[#E2E4E9] rounded-[10px] flex items-center justify-center gap-[8px] px-[33px] pt-[11.5px] pb-[12.5px] text-[#29303D] font-medium text-sm md:text-[14px] leading-[20px] hover:bg-gray-50">
                    View All News
                    <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                </a>
            </div>

        </div>
    </section>

    <section id="study-in-ub"
        class="w-full h-auto bg-gradient-to-b from-[#F9FAFB] to-[#F0F2F4] px-4 sm:px-6 md:px-8 lg:px-[80px] py-8 md:py-[100px] lg:py-20">
        <div class="max-w-[1280px] h-auto mx-auto px-4 sm:px-6 md:px-8 lg:px-[32px] flex flex-col gap-8 md:gap-[64px]">
            <div class="w-full flex flex-col items-center gap-4">
                <h2
                    class="w-full text-center font-playfair font-bold text-2xl sm:text-3xl md:text-[36px] leading-tight md:leading-[40px] text-[#29303D]">
                    Study in UB
                </h2>
                <p
                    class="max-w-full md:max-w-[768px] text-center font-inter font-light text-base sm:text-lg md:text-[20px] leading-relaxed md:leading-[28px] text-[#29303DB2]">
                    Discover world-class education opportunities and join our diverse international
                    academic community
                </p>
            </div>

            <div class="w-full mx-auto grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 lg:gap-[32px] place-items-center">
                <div class="flex flex-col items-center">
                    <div
                        class="w-full text-center font-inter font-bold text-xl sm:text-2xl md:text-[36px] leading-tight md:leading-[40px] text-[#0000FF]">
                        150+
                    </div>
                    <span class="mt-1 text-[#29303DB2] font-inter text-xs sm:text-sm md:text-[14px] leading-[20px]">Study
                        Programs</span>
                </div>

                <div class="flex flex-col items-center">
                    <div
                        class="w-full text-center font-inter font-bold text-xl sm:text-2xl md:text-[36px] leading-tight md:leading-[40px] text-[#0000FF]">
                        15
                    </div>
                    <span
                        class="mt-1 text-[#29303DB2] font-inter text-xs sm:text-sm md:text-[14px] leading-[20px]">Faculties</span>
                </div>

                <div class="flex flex-col items-center">
                    <div
                        class="w-full text-center font-inter font-bold text-xl sm:text-2xl md:text-[36px] leading-tight md:leading-[40px] text-[#0000FF]">
                        100+
                    </div>
                    <span class="mt-1 text-[#29303DB2] font-inter text-xs sm:text-sm md:text-[14px] leading-[20px]">Partner
                        Universities</span>
                </div>

                <div class="flex flex-col items-center">
                    <div
                        class="w-full text-center font-inter font-bold text-xl sm:text-2xl md:text-[36px] leading-tight md:leading-[40px] text-[#0000FF]">
                        4,500+
                    </div>
                    <span
                        class="mt-1 text-[#29303DB2] font-inter text-xs sm:text-sm md:text-[14px] leading-[20px]">International
                        Students</span>
                </div>
            </div>

            <div class="w-full mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 lg:gap-[32px]">
                <div
                    class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] p-6 md:p-[32px] flex flex-col gap-4 md:gap-[24px]">
                    <div
                        class="w-12 h-12 md:w-[64px] md:h-[64px] rounded-[16px] flex items-center justify-center bg-gradient-to-br from-[#0000FF] to-[#6699FF]">
                        <img src="{{ asset('icons/togs.svg') }}" alt="Program Icon" class="w-6 h-6 md:w-8 md:h-8">
                    </div>

                    <h3
                        class="font-playfair font-bold text-lg md:text-[20px] leading-relaxed md:leading-[28px] text-[#29303D]">
                        International Undergraduate Program
                    </h3>

                    <p
                        class="font-inter font-normal text-sm md:text-[16px] leading-relaxed md:leading-[24px] text-[#29303DB2]">
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
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-[#0000FF] rounded-full"></span>
                            English-taught courses</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-[#0000FF] rounded-full"></span>
                            International faculty</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-[#0000FF] rounded-full"></span>
                            Exchange opportunities</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-[#0000FF] rounded-full"></span>
                            Industry partnerships</li>
                    </ul>

                    <a href="#"
                        class="mt-4 md:mt-auto w-full h-10 border border-[#E2E4E9] rounded-[10px] flex items-center justify-center gap-2 px-[17px] py-[10px] font-medium text-[#29303D] text-xs md:text-[14px] leading-[20px] hover:bg-gray-50">
                        Learn More
                        <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                    </a>
                </div>

                <div
                    class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] p-6 md:p-[32px] flex flex-col gap-4 md:gap-[24px]">
                    <div
                        class="w-12 h-12 md:w-[64px] md:h-[64px] rounded-[16px] flex items-center justify-center bg-gradient-to-br from-[#0000FF] to-[#6699FF]">
                        <img src="{{ asset('icons/globe.svg') }}" alt="Program Icon" class="w-6 h-6 md:w-8 md:h-8">
                    </div>
                    <h3
                        class="font-playfair font-bold text-lg md:text-[20px] leading-relaxed md:leading-[28px] text-[#29303D]">
                        Double Degree Programs
                    </h3>
                    <p
                        class="font-inter font-normal text-sm md:text-[16px] leading-relaxed md:leading-[24px] text-[#29303DB2]">
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
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Two
                            university degrees</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Study
                            abroad experience</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-[#0000FF] rounded-full"></span> Global
                            network access</li>
                        <li class="flex items-center gap-2"><span class="w-2 h-2 bg-[#0000FF] rounded-full"></span>
                            Enhanced career prospects</li>
                    </ul>
                    <a href="#"
                        class="mt-4 md:mt-auto w-full h-10 border border-[#E2E4E9] rounded-[10px] flex items-center justify-center gap-2 px-[17px] py-[10px] font-medium text-[#29303D] text-xs md:text-[14px] leading-[20px] hover:bg-gray-50">
                        Learn More
                        <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                    </a>
                </div>

                <div
                    class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] p-6 md:p-[32px] flex flex-col gap-4 md:gap-[24px]">
                    <div
                        class="w-12 h-12 md:w-[64px] md:h-[64px] rounded-[16px] flex items-center justify-center bg-gradient-to-br from-[#0000FF] to-[#6699FF]">
                        <img src="{{ asset('icons/book.svg') }}" alt="Program Icon" class="w-6 h-6 md:w-8 md:h-8">
                    </div>
                    <h3
                        class="font-playfair font-bold text-lg md:text-[20px] leading-relaxed md:leading-[28px] text-[#29303D]">
                        International Master’s
                    </h3>
                    <p
                        class="font-inter font-normal text-sm md:text-[16px] leading-relaxed md:leading-[24px] text-[#29303DB2]">
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
                        class="mt-4 md:mt-auto w-full h-10 border border-[#E2E4E9] rounded-[10px] flex items-center justify-center gap-2 px-[17px] py-[10px] font-medium text-[#29303D] text-xs md:text-[14px] leading-[20px] hover:bg-gray-50">
                        Learn More
                        <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                    </a>
                </div>

            </div>


        </div>
    </section>

    <section id="events"
        class="w-full h-auto bg-[#FFFFFF] px-4 py-8 sm:px-6 sm:py-10 md:px-8 md:py-12 lg:px-[80px] lg:py-[80px]">
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
                            class="mt-4 w-full h-10 rounded-[10px] border border-[#E2E4E9] flex items-center justify-center gap-2 px-4 bg-white text-[#29303D] font-medium text-sm md:text-[14px] leading-[20px] hover:bg-gray-50">
                            Register Now
                            <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
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
                            class="mt-4 w-full h-10 rounded-[10px] border border-[#E2E4E9] flex items-center justify-center gap-2 px-4 bg-white text-[#29303D] font-medium text-sm md:text-[14px] leading-[20px] hover:bg-gray-50">
                            Register Now
                            <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
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
                            class="mt-4 w-full h-10 rounded-[10px] border border-[#E2E4E9] flex items-center justify-center gap-2 px-4 bg-white text-[#29303D] font-medium text-sm md:text-[14px] leading-[20px] hover:bg-gray-50">
                            Register Now
                            <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                        </a>
                    </div>
                </article>

            </div>
        </div>

        <div class="flex justify-center">
            <a href="#"
                class="mt-8 md:mt-16 w-full max-w-[195px] h-[44px] bg-white border border-[#E2E4E9] rounded-[10px] flex items-center justify-center gap-[8px] px-[33px] pt-[11.5px] pb-[12.5px] text-[#29303D] font-medium text-sm md:text-[14px] leading-[20px] hover:bg-gray-50">
                View All Events
                <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
            </a>
        </div>
    </section>

    <section id="downloadCenter"
        class="w-full h-auto bg-[#FFFFFF] px-4 py-8 sm:px-6 sm:py-10 md:px-8 md:py-12 lg:px-[80px] lg:py-[40px]">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 md:px-8 flex flex-col gap-6 md:gap-8 lg:gap-[40px]">
            <div class="w-full flex flex-col items-center gap-4">
                <h2
                    class="text-center font-playfair font-bold text-2xl sm:text-3xl md:text-[36px] leading-tight md:leading-[40px] text-[#29303D]">
                    Download Center
                </h2>
                <p
                    class="max-w-full sm:max-w-[672px] text-center font-inter text-sm sm:text-base md:text-[20px] leading-relaxed md:leading-[28px] font-light text-[#29303DB2]">
                    Access our collection of promotional materials, brochures and multimedia content
                </p>
            </div>

            <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
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
        </div>

        <div class="py-8 md:py-12 lg:py-[80px] px-4 sm:px-6 md:px-8 lg:px-[30px]">
            <div
                class="w-full max-w-full md:max-w-[1216px] h-auto md:h-[264px] mx-auto bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-[24px] p-6 md:p-[48px] flex flex-col justify-between items-center text-center shadow-lg">
                <h3 class="text-xl md:text-[30px] font-playfair font-bold leading-tight text-white">
                    Need Everything?
                </h3>

                <p
                    class="text-base md:text-[20px] font-light font-inter leading-relaxed text-white opacity-90 max-w-full md:max-w-[672px] mt-4">
                    Download our complete media kit with all brochures, posters, and promotional materials in one
                    package
                </p>

                <div class="flex justify-center mt-6 md:mt-6">
                    <a href="#"
                        class="w-full h-[48px] font-inter font-normal text-sm md:text-[15px] px-[33px] py-[12px] rounded-[10px] border border-white/20 bg-white/10 text-white flex items-center justify-center">
                        Download Complete Media Kit
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="events" class="w-full h-auto bg-[#FFFFFF] px-4 sm:px-6  md:px-8  lg:px-[80px]">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 md:px-8 flex flex-col gap-6 md:gap-8 lg:gap-[40px]">
            <div class="w-full flex flex-col items-center gap-4">
                <h2
                    class="text-center font-playfair font-bold text-2xl sm:text-3xl md:text-[36px] leading-tight md:leading-[40px] text-[#29303D]">
                    Brawijaya's Innovation
                </h2>
                <p
                    class="max-w-full sm:max-w-[672px] text-center font-inter text-sm sm:text-base md:text-[20px] leading-relaxed md:leading-[28px] font-light text-[#29303DB2]">
                    Discover groundbreaking innovations and research outcomes that drive real-world impact.
                </p>
            </div>

            <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <article
                    class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
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
                            class="mt-4 w-full h-10 rounded-[10px] border border-[#E2E4E9] flex items-center justify-center gap-2 px-4 bg-white text-[#29303D] font-medium text-sm md:text-[14px] leading-[20px] hover:bg-gray-50">
                            Register Now
                            <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                        </a>
                    </div>
                </article>

                <article
                    class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
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
                            class="mt-4 w-full h-10 rounded-[10px] border border-[#E2E4E9] flex items-center justify-center gap-2 px-4 bg-white text-[#29303D] font-medium text-sm md:text-[14px] leading-[20px] hover:bg-gray-50">
                            Register Now
                            <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                        </a>
                    </div>
                </article>

                <article
                    class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
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
                            class="mt-4 w-full h-10 rounded-[10px] border border-[#E2E4E9] flex items-center justify-center gap-2 px-4 bg-white text-[#29303D] font-medium text-sm md:text-[14px] leading-[20px] hover:bg-gray-50">
                            Register Now
                            <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                        </a>
                    </div>
                </article>

            </div>
        </div>

        <div class="flex justify-center mb-8">
            <a href="#"
                class="mt-8 md:mt-16 w-full max-w-[195px] h-[44px] bg-white border border-[#E2E4E9] rounded-[10px] flex items-center justify-center gap-[8px] px-[33px] pt-[11.5px] pb-[12.5px] text-[#29303D] font-medium text-sm md:text-[14px] leading-[20px] hover:bg-gray-50">
                View All Events
                <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
            </a>
        </div>
    </section>

    <section
        class="w-full h-auto bg-gradient-to-b from-[#F9FAFB] to-[#F0F2F4] px-4 sm:px-6 md:px-8 lg:px-[80px] py-10 md:py-16 lg:py-[64px]">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 md:px-8 flex flex-col gap-6 md:gap-8 lg:gap-[40px]">

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

            <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

                <article
                    class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_rgba(41,48,61,0.10)] p-4 sm:p-6 md:p-6">
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
                    class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_rgba(41,48,61,0.10)] p-4 sm:p-6 md:p-6">
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
                    class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_rgba(41,48,61,0.10)] p-4 sm:p-6 md:p-6">
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

            <div
                class="w-full max-w-[1216px] bg-white rounded-[24px] shadow-[0px_4px_20px_-2px_rgba(41,48,61,0.10)] border border-[#F0F2F4] px-4 md:px-8 lg:px-[48px] py-8 md:py-12 lg:py-[48px] flex flex-col gap-12 md:gap-[48px]">
                <!-- Heading & Description -->
                <div class="flex flex-col items-center gap-4 max-w-[1120px] mx-auto">
                    <h3
                        class="w-full text-center font-playfair font-bold text-[30px] md:text-[36px] leading-[36px] text-[#29303D]">
                        Watch Their Stories</h3>
                    <p
                        class="max-w-[632px] text-center font-inter text-base md:text-lg lg:text-xl font-normal leading-[28px] text-[#29303DB2]">
                        Hear directly from our global community about their transformative experiences at UB</p>
                </div>
                <!-- Content: Video & List -->
                <div class="w-full flex flex-col md:flex-row gap-8 md:gap-[32px] max-w-[1120px] mx-auto">
                    <!-- Left: Video Thumbnail -->
                    <div
                        class="w-full md:w-[544px] h-[240px] md:h-[368px] rounded-[16px] overflow-hidden relative flex items-center justify-center bg-gradient-to-br from-[#0000FF] via-[#6699FF] to-[#6699FF]">
                        <img src='{{ asset('images/bromo.png') }}' alt="Alumni Success Stories"
                            class="absolute inset-0 w-full h-full object-cover" />
                        <!-- Gradient overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-[#0000FF] to-[#6699FF] opacity-60 rounded-[16px]">
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-20 rounded-[16px]"></div>

                        <!-- Play button in center -->
                        <button
                            class="relative z-20 flex items-center justify-center w-16 h-16 md:w-20 md:h-20 rounded-full bg-white bg-opacity-20 backdrop-blur-sm">
                            <img src='{{ asset('icons/play.svg') }}' alt="Play"
                                class="w-6 h-6 md:w-8 md:h-8 text-white" />
                        </button>

                        <!-- Text overlay at bottom -->
                        <div class="absolute bottom-4 left-4 z-10 w-[calc(100%-32px)] max-w-[512px]">
                            <div class="bg-black bg-opacity-50 backdrop-blur-sm rounded-[12px] p-3">
                                <h4 class="text-white font-playfair font-semibold text-lg md:text-xl leading-6">
                                    Alumni
                                    Success Stories</h4>
                                <p class="text-white font-inter font-light text-xs md:text-sm mt-1 opacity-90">From
                                    Malang to
                                    the World</p>
                            </div>
                        </div>
                    </div>
                    <!-- Right: List of Stories -->
                    <div class="w-full md:w-[544px] flex flex-col gap-2 md:gap-4 justify-center">
                        <!-- List Item 1 -->
                        <button
                            class="flex items-center gap-2 w-full h-[80px] p-4 rounded-[12px] bg-[#F9FAFB] hover:bg-[#F0F2F4] transition">
                            <span class="flex items-center justify-center w-12 h-12 rounded-[12px] bg-[#0000FF1A]">
                                <img src='{{ asset('icons/play.svg') }}' alt="Play" class="w-6 h-6" />
                            </span>
                            <span class="flex flex-col items-start justify-center">
                                <span
                                    class="font-inter font-semibold text-[11px] sm:text-sm md:text-base text-[#29303D]">International
                                    Partnership Highlights</span>
                                <span class="font-inter text-xs sm:text-xs text-[#29303DB2]">3-5 min watch</span>
                            </span>
                        </button>
                        <!-- List Item 2 -->
                        <button
                            class="flex items-center gap-2 w-full h-[80px] p-4 rounded-[12px] bg-[#F9FAFB] hover:bg-[#F0F2F4] transition">
                            <span class="flex items-center justify-center w-12 h-12 rounded-[12px] bg-[#0000FF1A]">
                                <img src='{{ asset('icons/play.svg') }}' alt="Play" class="w-6 h-6" />
                            </span>
                            <span class="flex flex-col items-start justify-center">
                                <span
                                    class="font-inter font-semibold text-[11px] sm:text-sm md:text-base text-[#29303D]">Research
                                    Collaboration
                                    Success</span>
                                <span class="font-inter text-xs sm:text-xs text-[#29303DB2]">3-5 min watch</span>
                            </span>
                        </button>
                        <!-- List Item 3 -->
                        <button
                            class="flex items-center gap-2 w-full h-[80px] p-4 rounded-[12px] bg-[#F9FAFB] hover:bg-[#F0F2F4] transition">
                            <span class="flex items-center justify-center w-12 h-12 rounded-[12px] bg-[#0000FF1A]">
                                <img src='{{ asset('icons/play.svg') }}' alt="Play" class="w-6 h-6" />
                            </span>
                            <span class="flex flex-col items-start justify-center">
                                <span
                                    class="font-inter font-semibold text-[11px] sm:text-sm md:text-base text-[#29303D]">Student
                                    Exchange
                                    Experiences</span>
                                <span class="font-inter text-xs sm:text-xs text-[#29303DB2]">3-5 min watch</span>
                            </span>
                        </button>
                        <!-- List Item 4 -->
                        <button
                            class="flex items-center gap-2 w-full h-[80px] p-4 rounded-[12px] bg-[#F9FAFB] hover:bg-[#F0F2F4] transition">
                            <span class="flex items-center justify-center w-12 h-12 rounded-[12px] bg-[#0000FF1A]">
                                <img src='{{ asset('icons/play.svg') }}' alt="Play" class="w-6 h-6" />
                            </span>
                            <span class="flex flex-col items-start justify-center">
                                <span
                                    class="font-inter font-semibold text-[11px] sm:text-sm md:text-base text-[#29303D]">Faculty
                                    Global
                                    Impact
                                    Stories</span>
                                <span class="font-inter text-xs sm:text-xs text-[#29303DB2]">3-5 min watch</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="partner"
        class="w-full h-auto bg-[#FFFFFF] px-4 py-6 sm:px-6 sm:py-8 md:px-8 md:py-10 lg:px-[80px] lg:py-[50px]">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 md:px-8 flex flex-col gap-6 md:gap-8 lg:gap-[40px]">

            <!-- Header -->
            <div class="w-full flex flex-col items-center gap-4">
                <h3
                    class="text-center font-playfair font-bold text-2xl sm:text-3xl md:text-[36px] leading-tight md:leading-[40px] text-[#29303D]">
                    Partnership
                </h3>
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

            </div>

            <!-- View All Button -->
            <div class="flex justify-center mt-6 md:mt-10">
                <a href="#"
                    class="flex items-center gap-2 px-6 py-3 bg-white border border-[#E2E4E9] rounded-[10px] text-[#29303D] font-medium text-sm md:text-[14px] leading-[20px] hover:bg-gray-50 transition-colors">
                    View All Partner
                    <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="Arrow">
                </a>
            </div>

        </div>
    </section>

@endsection
