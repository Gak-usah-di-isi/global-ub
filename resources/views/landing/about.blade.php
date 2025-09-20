@extends('core.app')

@section('title', 'About Page')

@section('content')
    <div class="bg-[#F0F2F4] w-full h-[80px] flex items-center px-4 md:px-8 lg:px-[112px]">
        <div class="flex items-center space-x-4">
            <div class="w-[16px] h-[16px]">
                <img src="/icons/home.svg" alt="Home Icon" class="w-full h-full">
            </div>
            <span class="text-[#29303D] text-[14px] font-light">Home</span>
            <div class="w-[16px] h-[16px]">
                <img src="/icons/arrow-right-chevron.svg" alt="Right Arrow" class="w-full h-full">
            </div>
        </div>
        <div class="flex items-center space-x-4 ml-4">
            <span class="text-[#29303D] text-[14px] font-light">About</span>
        </div>
    </div>

    <div class="w-full h-auto bg-white pt-8 md:pt-10 px-4 sm:px-6 md:px-8 lg:px-[112px] pb-0 sm:pb-0 lg:pb-12">
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
                            <img src="{{ asset('icons/achievement.svg') }}" alt="Years Icon" class="w-[24px] h-[24px]" />
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
                        class="w-full sm:w-[200px] h-[44px] bg-white text-[#29303D] border border-[#E2E4E9] rounded-[10px] flex items-center justify-center text-center py-[11.5px] px-[33px] text-sm md:text-[14px] font-medium">
                        Download Brochure
                    </a>
                </div>
            </div>

            <div
                class="w-full lg:w-[576px] h-[250px] sm:h-[300px] md:h-[324px] rounded-[16px] overflow-hidden flex justify-center items-center mt-0 md:mt-12 lg:mt-24 relative">
                <div class="right-0 lg:pr-[20px]">
                    <img src="{{ asset('/images/about-shadow.png') }}" alt="UB Image" class="w-full h-full object-cover">
                </div>

                <div
                    class="absolute border border-[#E2E4E9] border-1 -buttom-0 sm:bottom-0 md:-bottom-0 lg:-bottom-0 right-4 sm:right-6 md:right-8 lg:-right-0 w-[160px] sm:w-[180px] md:w-[200px] lg:w-[220px] h-[60px] sm:h-[65px] md:h-[70px] lg:h-[80px] rounded-[12px] md:rounded-[16px] bg-white p-2 sm:p-3 md:p-4 bottom-1">
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
    </div>

    <div class="w-full bg-white px-4 sm:px-6 md:px-8 lg:px-[70px] py-8 md:py-12">
        <div class="max-w-[1280px] h-auto mx-auto px-4 md:px-[32px] flex flex-col gap-8 md:gap-[64px]">
            <div class="w-full flex flex-col items-center gap-4">
                <h2
                    class="w-full text-center font-playfair font-extrabold text-2xl md:text-[34px] leading-tight text-[#29303D]">
                    Global Achievements
                </h2>
                <p
                    class="max-w-full md:max-w-[768px] text-center font-inter font-light text-base md:text-[20px] leading-relaxed text-[#29303DB2]">
                    Showcasing international recognition and outstanding global contributions.
                </p>
            </div>

            <div
                class="w-full mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-[32px] place-items-center">
                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-full text-center font-inter font-bold text-2xl md:text-[36px] leading-tight text-[#0000FF]">
                        QS Asia
                    </div>
                    <span class="mt-1 text-[#29303DB2] font-inter text-sm md:text-[14px]">University Ranking</span>
                </div>

                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-full text-center font-inter font-bold text-2xl md:text-[36px] leading-tight text-[#0000FF]">
                        5000+
                    </div>
                    <span class="mt-1 text-[#29303DB2] font-inter text-sm md:text-[14px]">International students &
                        alumni from 50+ countries</span>
                </div>

                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-full text-center font-inter font-bold text-2xl md:text-[36px] leading-tight text-[#0000FF]">
                        Top 10
                    </div>
                    <span class="mt-1 text-[#29303DB2] font-inter text-sm md:text-[14px]">In Indonesia</span>
                </div>

                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-full text-center font-inter font-bold text-2xl md:text-[36px] leading-tight text-[#0000FF]">
                        150+
                    </div>
                    <span class="mt-1 text-[#29303DB2] font-inter text-sm md:text-[14px]">International
                        Programs</span>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full bg-gradient-to-b from-[#F9FAFB] to-[#F0F2F4] py-8 md:py-[80px] px-4 sm:px-6 lg:px-[112px]">
        <div class="max-w-[1280px] mx-auto px-4 md:px-[32px] gap-8 md:gap-[64px] lg:px-[0px]">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-2xl md:text-[36px] font-playfair font-extrabold leading-tight text-[#29303D]">
                    Our Vision & Mission
                </h2>
                <p class="mt-4 text-base md:text-[18px] font-inter font-normal leading-relaxed text-[#29303DB2]">
                    To become a world-class university that contributes to global knowledge and sustainable
                    development.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-[32px] mb-12 md:mb-[64px]">
                <div class="bg-white shadow-md p-6 md:p-[32px] rounded-[16px]">
                    <div
                        class="w-12 h-12 md:w-[64px] md:h-[68px] bg-[#F9FAFB] rounded-full flex justify-center items-center mx-auto mb-4 md:mb-[16px]">
                        <img src="{{ asset('icons/editor_choice.svg') }}" alt="Programs Icon" class="w-[24px] h-[24px]" />
                    </div>
                    <p class="text-center font-inter font-light text-sm md:text-[14px] text-[#29303D]">
                        Provide high-quality education with international standards.
                    </p>
                </div>

                <div class="bg-white shadow-md p-6 md:p-[32px] rounded-[16px]">
                    <div
                        class="w-12 h-12 md:w-[64px] md:h-[68px] bg-[#F9FAFB] rounded-full flex justify-center items-center mx-auto mb-4 md:mb-[16px]">
                        <img src="{{ asset('icons/globe_book.svg') }}" alt="Programs Icon" class="w-[24px] h-[24px]" />
                    </div>
                    <p class="text-center font-inter font-light text-sm md:text-[14px] text-[#29303D]">
                        Foster global collaboration in research and innovation.
                    </p>
                </div>

                <div class="bg-white shadow-md p-6 md:p-[32px] rounded-[16px]">
                    <div
                        class="w-12 h-12 md:w-[64px] md:h-[68px] bg-[#F9FAFB] rounded-full flex justify-center items-center mx-auto mb-4 md:mb-[16px]">
                        <img src="{{ asset('icons/emoji_language.svg') }}" alt="Programs Icon"
                            class="w-[24px] h-[24px]" />
                    </div>
                    <p class="text-center font-inter font-light text-sm md:text-[14px] text-[#29303D]">
                        Support student mobility and international career opportunities.
                    </p>
                </div>

                <div class="bg-white shadow-md p-6 md:p-[32px] rounded-[16px]">
                    <div
                        class="w-12 h-12 md:w-[64px] md:h-[68px] bg-[#F9FAFB] rounded-full flex justify-center items-center mx-auto mb-4 md:mb-[16px]">
                        <img src="{{ asset('icons/diversity_2.svg') }}" alt="Programs Icon" class="w-[24px] h-[24px]" />
                    </div>
                    <p class="text-center font-inter font-light text-sm md:text-[14px] text-[#29303D]">
                        Encourage cultural exchange and diversity.
                    </p>
                </div>
            </div>

            <div
                class="w-full max-w-full md:max-w-[1216px] h-auto md:h-[264px] mx-auto bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-[24px] p-6 md:p-[48px] flex flex-col justify-between items-center text-center shadow-lg">
                <h3 class="text-xl md:text-[30px] font-playfair font-bold leading-tight text-white">
                    Your Journey Starts Here!
                </h3>

                <p
                    class="text-base md:text-[20px] font-light font-inter leading-relaxed text-white opacity-90 max-w-full md:max-w-[672px] mt-4">
                    From academics to global exposure, UB provides the platform you need to shape your future and
                    make a difference worldwide.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 mt-6">
                    <a href="#"
                        class="w-full sm:w-[163px] h-[44px] font-inter font-normal px-[33px] py-[12px] rounded-[10px] border border-white/20 bg-white/10 text-white flex items-center justify-center">
                        Get Started
                    </a>
                    <a href="#"
                        class="w-full sm:w-[163px] h-[44px] font-inter font-normal px-[33px] py-[12px] rounded-[10px] border border-white/20 bg-white/10 text-white flex items-center justify-center">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
