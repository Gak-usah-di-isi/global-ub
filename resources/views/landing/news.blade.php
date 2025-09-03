<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
 </head>

 <body class="bg-[#FFFFFF] w-full min-h-screen">
    <div class="max-w-[1440px] mx-auto">

        <nav class="w-full h-20 flex justify-between items-center bg-[#FFFFFFF2] border-b px-4 md:px-8 lg:px-28">

            <div class="flex items-center space-x-4">
                <img src="/images/ub.png" alt="Logo UB" class="h-6 md:h-8">
                <img src="/images/gub.png" alt="Logo Gub" class="h-6 md:h-8">
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
                <span class="text-[#29303D] text-[14px] font-medium">News</span>
            </div>
        </div>

        <section class="news-section py-10 md:py-20 px-4 md:px-8 lg:px-28 bg-white">
            <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">
                <div class="w-full lg:w-[450px] h-[300px] md:h-[400px] lg:h-[465px] rounded-lg overflow-hidden">
                    <img src="/images/rektorat.png" alt="News Image"
                        class="w-full h-full object-cover object-center">
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

                    <h2 class="text-[#29303D] font-playfair text-2xl md:text-3xl lg:text-[36px] font-bold mb-4">UB Signs MOU with Stanford
                        University for
                        Joint Research Program</h2>

                    <p class="text-[#29303DB2] font-inter text-base md:text-[18px] leading-relaxed md:leading-[29.25px] mb-6 md:mb-8">
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
                        <div
                            class="w-[41px] h-[41px] bg-[#E2E4E9] flex items-center justify-center rounded-full shadow-md">
                            <a href="#" target="_blank">
                                <img src="/icons/fb.svg" class="w-5 h-5" alt="Facebook">
                            </a>
                        </div>
                        <div
                            class="w-[41px] h-[41px] bg-[#E2E4E9] flex items-center justify-center rounded-full shadow-md">
                            <a href="#" target="_blank">
                                <img src="/icons/ig.svg" class="w-5 h-5" alt="Instagram">
                            </a>
                        </div>
                        <div
                            class="w-[41px] h-[41px] bg-[#E2E4E9] flex items-center justify-center rounded-full shadow-md">
                            <a href="#" target="_blank">
                                <img src="/icons/tweet.svg" class="w-5 h-5" alt="Twitter">
                            </a>
                        </div>
                        <div
                            class="w-[41px] h-[41px] bg-[#E2E4E9] flex items-center justify-center rounded-full shadow-md">
                            <a href="#" target="_blank">
                                <img src="/icons/link.svg" class="w-5 h-5" alt="Link">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-10 md:py-20 px-4 md:px-8 lg:px-28 bg-white">
            <h2 class="text-2xl md:text-3xl font-playfair font-extrabold text-[#29303D] mb-8 md:mb-14">Related Post</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-[15.94px]">
                <div class="w-full h-auto bg-white rounded-lg flex flex-col gap-4 md:gap-[18px] p-4 md:p-0">
                    <div class="w-full h-[180px] rounded-[12px] overflow-hidden">
                        <img src="/images/rektorat.png" alt="Main News"
                            class="w-full h-full object-cover">
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
                        <img src="/images/rektorat.png" alt="Main News"
                            class="w-full h-full object-cover">
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
                        <img src="/images/rektorat.png" alt="Main News"
                            class="w-full h-full object-cover">
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
                        <img src="/images/rektorat.png" alt="Main News"
                            class="w-full h-full object-cover">
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
                        <img src="/images/rektorat.png" alt="Main News"
                            class="w-full h-full object-cover">
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
                        <img src="/images/rektorat.png" alt="Main News"
                            class="w-full h-full object-cover">
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