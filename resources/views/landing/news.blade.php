@extends('core.app')

@section('title', 'News Page')

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
            <span class="text-[#29303D] text-[14px] font-light">News</span>
        </div>
    </div>

    <section class="news-section py-10 md:py-20 px-4 md:px-8 lg:px-28 bg-white">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">
            <div class="w-full lg:w-[450px] h-[300px] md:h-[400px] lg:h-[465px] rounded-lg overflow-hidden">
                <img src="/images/rektorat.png" alt="News Image" class="w-full h-full object-cover object-center">
            </div>

            <div class="w-full lg:w-[669px]">
                <div class="flex gap-3 mb-4">
                    <span class="flex items-center gap-1 text-[#29303D99] text-[14px]">
                        <img src="/icons/calender.svg" class="w-4 h-4" alt="calendar icon">
                        1/15/2024
                    </span>
                    <span class="flex items-center gap-1 text-[#29303D99] text-[14px]">
                        <img src="/icons/clock.svg" class="w-4 h-4" alt="clock icon">
                        3 min read
                    </span>
                </div>

                <h2 class="text-[#29303D] font-playfair text-2xl md:text-3xl lg:text-[36px] font-bold mb-4">UB Signs
                    MOU with Stanford
                    University for
                    Joint Research Program</h2>

                <p
                    class="text-[#29303DB2] font-inter text-base md:text-[18px] leading-relaxed md:leading-[29.25px] mb-6 md:mb-8">
                    Universitas Brawijaya (UB) officially signed a Memorandum of Understanding (MoU) with Stanford
                    University on January 15, 2024, marking a significant milestone in UB’s journey toward global
                    collaboration. The agreement focuses on joint research, academic exchange, and student
                    development, with a special emphasis on sustainable technology and innovation.
                </p>

                <a href="#"
                    class="w-[140px] h-[44px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] text-white rounded-[10px] shadow-[0px_4px_20px_-2px_#29303D1A] flex items-center justify-center text-center py-[11.5px] px-[32px] text-[14px] font-medium">
                    Read More
                </a>

                <div class="flex gap-4 mt-6 md:mt-8">
                    <div class="w-[41px] h-[41px] bg-[#E2E4E9] flex items-center justify-center rounded-full shadow-md">
                        <a href="#" target="_blank">
                            <img src="/icons/fb.svg" class="w-5 h-5" alt="Facebook">
                        </a>
                    </div>
                    <div class="w-[41px] h-[41px] bg-[#E2E4E9] flex items-center justify-center rounded-full shadow-md">
                        <a href="#" target="_blank">
                            <img src="/icons/ig.svg" class="w-5 h-5" alt="Instagram">
                        </a>
                    </div>
                    <div class="w-[41px] h-[41px] bg-[#E2E4E9] flex items-center justify-center rounded-full shadow-md">
                        <a href="#" target="_blank">
                            <img src="/icons/tweet.svg" class="w-5 h-5" alt="Twitter">
                        </a>
                    </div>
                    <div class="w-[41px] h-[41px] bg-[#E2E4E9] flex items-center justify-center rounded-full shadow-md">
                        <a href="#" target="_blank">
                            <img src="/icons/link.svg" class="w-5 h-5" alt="Link">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-10 md:py-20 px-4 md:px-8 lg:px-28 bg-white">
        <h2 class="text-2xl md:text-3xl font-playfair font-extrabold text-[#29303D] mb-8 md:mb-14">Related Post
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-[15.94px]">
            <div class="w-full h-auto bg-white rounded-lg flex flex-col gap-4 md:gap-[18px] p-4 md:p-0">
                <div class="w-full h-[180px] rounded-[12px] overflow-hidden">
                    <img src="/images/rektorat.png" alt="Main News" class="w-full h-full object-cover">
                </div>

                <h3 class="text-lg md:text-[18px] text-[#29303D] font-playfair font-extrabold">
                    UB Signs MOU with Stanford University for Joint Research Program
                </h3>

                <p class="text-sm md:text-[15px] font-inter font-light leading-relaxed md:leading-[29px] text-[#29303DB2]">
                    Universitas Brawijaya establishes new partnership with Stanford University focusing on
                    sustainable technology research and student development.
                </p>

                <div class="flex items-center justify-between text-sm md:text-[14px] text-[#29303DB2]">
                    <div class="flex gap-2 md:gap-4">
                        <span class="flex items-center gap-1">
                            <img src="/icons/calender.svg" class="w-4 h-4" alt="">
                            1/15/2024
                        </span>
                        <span class="flex items-center gap-1">
                            <img src="/icons/clock.svg" class="w-4 h-4" alt="">
                            3 min read
                        </span>
                    </div>
                    <div>
                        <img src="/icons/arrow-right.svg" class="w-5 h-5" alt="">
                    </div>
                </div>
            </div>

            <div class="w-full h-auto bg-white rounded-lg flex flex-col gap-4 md:gap-[18px] p-4 md:p-0">
                <div class="w-full h-[180px] rounded-[12px] overflow-hidden">
                    <img src="/images/rektorat.png" alt="Main News" class="w-full h-full object-cover">
                </div>

                <h3 class="text-lg md:text-[18px] text-[#29303D] font-playfair font-extrabold">
                    UB Signs MOU with Stanford University for Joint Research Program
                </h3>

                <p class="text-sm md:text-[15px] font-inter font-light leading-relaxed md:leading-[29px] text-[#29303DB2]">
                    Universitas Brawijaya establishes new partnership with Stanford University focusing on
                    sustainable technology research and student development.
                </p>

                <div class="flex items-center justify-between text-sm md:text-[14px] text-[#29303DB2]">
                    <div class="flex gap-2 md:gap-4">
                        <span class="flex items-center gap-1">
                            <img src="/icons/calender.svg" class="w-4 h-4" alt="">
                            1/15/2024
                        </span>
                        <span class="flex items-center gap-1">
                            <img src="/icons/clock.svg" class="w-4 h-4" alt="">
                            3 min read
                        </span>
                    </div>
                    <div>
                        <img src="/icons/arrow-right.svg" class="w-5 h-5" alt="">
                    </div>
                </div>
            </div>

            <div class="w-full h-auto bg-white rounded-lg flex flex-col gap-4 md:gap-[18px] p-4 md:p-0">
                <div class="w-full h-[180px] rounded-[12px] overflow-hidden">
                    <img src="/images/rektorat.png" alt="Main News" class="w-full h-full object-cover">
                </div>

                <h3 class="text-lg md:text-[18px] text-[#29303D] font-playfair font-extrabold">
                    UB Signs MOU with Stanford University for Joint Research Program
                </h3>

                <p class="text-sm md:text-[15px] font-inter font-light leading-relaxed md:leading-[29px] text-[#29303DB2]">
                    Universitas Brawijaya establishes new partnership with Stanford University focusing on
                    sustainable technology research and student development.
                </p>

                <div class="flex items-center justify-between text-sm md:text-[14px] text-[#29303DB2]">
                    <div class="flex gap-2 md:gap-4">
                        <span class="flex items-center gap-1">
                            <img src="/icons/calender.svg" class="w-4 h-4" alt="">
                            1/15/2024
                        </span>
                        <span class="flex items-center gap-1">
                            <img src="/icons/clock.svg" class="w-4 h-4" alt="">
                            3 min read
                        </span>
                    </div>
                    <div>
                        <img src="/icons/arrow-right.svg" class="w-5 h-5" alt="">
                    </div>
                </div>
            </div>

            <div class="w-full h-auto bg-white rounded-lg flex flex-col gap-4 md:gap-[18px] p-4 md:p-0">
                <div class="w-full h-[180px] rounded-[12px] overflow-hidden">
                    <img src="/images/rektorat.png" alt="Main News" class="w-full h-full object-cover">
                </div>

                <h3 class="text-lg md:text-[18px] text-[#29303D] font-playfair font-extrabold">
                    UB Signs MOU with Stanford University for Joint Research Program
                </h3>

                <p class="text-sm md:text-[15px] font-inter font-light leading-relaxed md:leading-[29px] text-[#29303DB2]">
                    Universitas Brawijaya establishes new partnership with Stanford University focusing on
                    sustainable technology research and student development.
                </p>

                <div class="flex items-center justify-between text-sm md:text-[14px] text-[#29303DB2]">
                    <div class="flex gap-2 md:gap-4">
                        <span class="flex items-center gap-1">
                            <img src="/icons/calender.svg" class="w-4 h-4" alt="">
                            1/15/2024
                        </span>
                        <span class="flex items-center gap-1">
                            <img src="/icons/clock.svg" class="w-4 h-4" alt="">
                            3 min read
                        </span>
                    </div>
                    <div>
                        <img src="/icons/arrow-right.svg" class="w-5 h-5" alt="">
                    </div>
                </div>
            </div>

            <div class="w-full h-auto bg-white rounded-lg flex flex-col gap-4 md:gap-[18px] p-4 md:p-0">
                <div class="w-full h-[180px] rounded-[12px] overflow-hidden">
                    <img src="/images/rektorat.png" alt="Main News" class="w-full h-full object-cover">
                </div>

                <h3 class="text-lg md:text-[18px] text-[#29303D] font-playfair font-extrabold">
                    UB Signs MOU with Stanford University for Joint Research Program
                </h3>

                <p class="text-sm md:text-[15px] font-inter font-light leading-relaxed md:leading-[29px] text-[#29303DB2]">
                    Universitas Brawijaya establishes new partnership with Stanford University focusing on
                    sustainable technology research and student development.
                </p>

                <div class="flex items-center justify-between text-sm md:text-[14px] text-[#29303DB2]">
                    <div class="flex gap-2 md:gap-4">
                        <span class="flex items-center gap-1">
                            <img src="/icons/calender.svg" class="w-4 h-4" alt="">
                            1/15/2024
                        </span>
                        <span class="flex items-center gap-1">
                            <img src="/icons/clock.svg" class="w-4 h-4" alt="">
                            3 min read
                        </span>
                    </div>
                    <div>
                        <img src="/icons/arrow-right.svg" class="w-5 h-5" alt="">
                    </div>
                </div>
            </div>

            <div class="w-full h-auto bg-white rounded-lg flex flex-col gap-4 md:gap-[18px] p-4 md:p-0">
                <div class="w-full h-[180px] rounded-[12px] overflow-hidden">
                    <img src="/images/rektorat.png" alt="Main News" class="w-full h-full object-cover">
                </div>

                <h3 class="text-lg md:text-[18px] text-[#29303D] font-playfair font-extrabold">
                    UB Signs MOU with Stanford University for Joint Research Program
                </h3>

                <p class="text-sm md:text-[15px] font-inter font-light leading-relaxed md:leading-[29px] text-[#29303DB2]">
                    Universitas Brawijaya establishes new partnership with Stanford University focusing on
                    sustainable technology research and student development.
                </p>

                <div class="flex items-center justify-between text-sm md:text-[14px] text-[#29303DB2]">
                    <div class="flex gap-2 md:gap-4">
                        <span class="flex items-center gap-1">
                            <img src="/icons/calender.svg" class="w-4 h-4" alt="">
                            1/15/2024
                        </span>
                        <span class="flex items-center gap-1">
                            <img src="/icons/clock.svg" class="w-4 h-4" alt="">
                            3 min read
                        </span>
                    </div>
                    <div>
                        <img src="/icons/arrow-right.svg" class="w-5 h-5" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
