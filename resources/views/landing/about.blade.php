<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Page</title>
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
                <span class="text-[#29303D] text-[14px] font-medium">About</span>
            </div>
        </div>


        <div class="w-full h-[665px] bg-white pt-10 px-[112px]">
            <div class="max-w-[1440px] mx-auto flex gap-[64px]">

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

                    <div class="mt-12 flex gap-[16px]">

                        <a href="#"
                            class="w-[140px] h-[44px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] text-white rounded-[10px] shadow-[0px_4px_20px_-2px_#29303D1A] flex items-center justify-center text-center py-[11.5px] px-[32px] text-[14px] font-medium">
                            Learn More
                        </a>

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

                            <div
                                class="w-[48px] h-[48px] rounded-full flex items-center justify-center bg-[linear-gradient(135deg,#0000FF_0%,#6699FF_100%)]">
                                <img src="{{ asset('icons/partner.svg') }}" alt="Global Network Icon"
                                    class="w-6 h-6">
                            </div>

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
        </div>

        <div class="w-full bg-[#FFFFF] to-[#F0F2F4] px-[70px] py-[20px]">
            <div class="max-w-[1280px] h-[300px] mx-auto px-[32px] flex flex-col gap-[64px]">

                <div class="w-full flex flex-col items-center gap-4">
                    <h2
                        class="w-[1216px] text-center font-playfair font-extrabold text-[34px] leading-[40px] text-[#29303D]">
                        Global Achievements
                    </h2>
                    <p
                        class="max-w-[768px] text-center font-inter font-light text-[20px] leading-[26px] text-[#29303DB2]">
                        Showcasing international recognition and outstanding global contributions.
                    </p>
                </div>

                <div class="w-[1216px] mx-auto grid grid-cols-2 md:grid-cols-4 gap-[32px] place-items-center">
                    <div class="flex flex-col items-center">
                        <div
                            class="w-[280px] text-center font-inter font-bold text-[36px] leading-[40px] text-[#0000FF]">
                            QS Asia
                        </div>
                        <span class="mt-1 text-[#29303DB2] font-inter text-[14px] leading-[20px]">University
                            Ranking</span>
                    </div>

                    <div class="flex flex-col items-center">
                        <div
                            class="w-[280px] text-center font-inter font-bold text-[36px] leading-[40px] text-[#0000FF]">
                            5000+
                        </div>
                        <span
                            class="mt-1 text-[#29303DB2] font-inter text-[14px] leading-[20px] text-center">International
                            students & alumni from 50+ countries</span>
                    </div>

                    <div class="flex flex-col items-center">
                        <div
                            class="w-[280px] text-center font-inter font-bold text-[36px] leading-[40px] text-[#0000FF]">
                            Top 10
                        </div>
                        <span class="mt-1 text-[#29303DB2] font-inter text-[14px] leading-[20px]">In Indonesia</span>
                    </div>

                    <div class="flex flex-col items-center">
                        <div
                            class="w-[280px] text-center font-inter font-bold text-[36px] leading-[40px] text-[#0000FF]">
                            150+
                        </div>
                        <span class="mt-1 text-[#29303DB2] font-inter text-[14px] leading-[20px]">International
                            Programs</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full bg-gradient-to-b from-[#F9FAFB] to-[#F0F2F4] py-[80px]">
            <div class="max-w-[1280px] mx-auto px-[32px] gap-[64px]">

                <div class="text-center mb-16">
                    <h2 class="text-[36px] font-playfair font-extrabold leading-[40px] text-[#29303D]">
                        Our Vision & Mission
                    </h2>
                    <p class="mt-[16px] text-[18px] font-inter font-normal leading-[28px] text-[#29303DB2]">
                        To become a world-class university that contributes to global knowledge and sustainable
                        development.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-[32px] mb-[64px]">
                    <div class="bg-white shadow-[0px_4px_20px_-2px_#29303D1A] p-[32px] rounded-[16px]">
                        <div
                            class="w-[64px] h-[68px] bg-[#F9FAFB] rounded-full flex justify-center items-center mx-auto mb-[16px]">
                            <img src="{{ asset('icons/editor_choice.svg') }}" alt="Programs Icon"
                                class="w-[24px] h-[24px]" />
                        </div>
                        <p class="text-center font-inter font-light text-[14px] text-[#29303D]">
                            Provide high-quality education with international standards.
                        </p>
                    </div>

                    <div class="bg-white shadow-[0px_4px_20px_-2px_#29303D1A] p-[32px] rounded-[16px]">
                        <div
                            class="w-[64px] h-[68px] bg-[#F9FAFB] rounded-full flex justify-center items-center mx-auto mb-[16px]">
                            <img src="{{ asset('icons/globe_book.svg') }}" alt="Programs Icon"
                                class="w-[24px] h-[24px]" />
                        </div>
                        <p class="text-center font-inter font-light text-[14px] text-[#29303D]">
                            Foster global collaboration in research and innovation.
                        </p>
                    </div>

                    <div class="bg-white shadow-[0px_4px_20px_-2px_#29303D1A] p-[32px] rounded-[16px]">
                        <div
                            class="w-[64px] h-[68px] bg-[#F9FAFB] rounded-full flex justify-center items-center mx-auto mb-[16px]">
                            <img src="{{ asset('icons/emoji_language.svg') }}" alt="Programs Icon"
                                class="w-[24px] h-[24px]" />
                        </div>
                        <p class="text-center font-inter font-light text-[14px] text-[#29303D]">
                            Support student mobility and international career opportunities.
                        </p>
                    </div>

                    <div class="bg-white shadow-[0px_4px_20px_-2px_#29303D1A] p-[32px] rounded-[16px]">
                        <div
                            class="w-[64px] h-[68px] bg-[#F9FAFB] rounded-full flex justify-center items-center mx-auto mb-[16px]">
                            <img src="{{ asset('icons/diversity_2.svg') }}" alt="Programs Icon"
                                class="w-[24px] h-[24px]" />
                        </div>
                        <p class="text-center font-inter font-light text-[14px] text-[#29303D]">
                            Encourage cultural exchange and diversity.
                        </p>
                    </div>
                </div>

                <div
                    class="w-full max-w-[1216px] h-[264px] mx-auto bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-[24px] p-[48px] flex flex-col justify-between items-center text-center shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px]">

                    <h3 class="text-[30px] font-playfair font-bold leading-[36px] text-white">
                        Your Journey Starts Here!
                    </h3>

                    <p
                        class="text-[20px] font-light font-inter leading-[28px] text-white opacity-90 max-w-[672px] mt-4">
                        From academics to global exposure, UB provides the platform you need to shape your future and
                        make a difference worldwide.
                    </p>

                    <div class="flex gap-4 mt-6">
                        <a href="#"
                            class="w-[163px] h-[44px] font-inter font-normal px-[33px] py-[12px] rounded-[10px] border border-white/20 bg-white/10 shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px] text-white flex items-center justify-center">
                            Get Started
                        </a>
                        <a href="#"
                            class="w-[163px] h-[44px] font-inter font-normal px-[33px] py-[12px] rounded-[10px] border border-white/20 bg-white/10 shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px] text-white flex items-center justify-center">
                            Learn More
                        </a>
                    </div>

                </div>
            </div>
        </div>

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
