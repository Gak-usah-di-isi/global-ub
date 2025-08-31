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

        <nav class="w-full h-20 flex justify-between items-center bg-[#FFFFFFF2] border-b px-28">
            <div class="flex items-center space-x-4">
                <img src="{{ asset('/images/ub.png') }}" alt="Logo UB" class="h-8">
                <img src="{{ asset('/images/gub.png') }}" alt="Logo Gub" class="h-8">
            </div>
            <div class="flex items-center space-x-8">
                <a href="#" class="text-[#29303D] font-medium text-[15px] leading-[24px] tracking-normal">Home</a>
                <a href="#"
                    class="text-[#29303D] font-medium text-[15px] leading-[24px] tracking-normal">About</a>
                <a href="#" class="text-[#29303D] font-medium text-[15px] leading-[24px] tracking-normal">News</a>
                <a href="#"
                    class="text-[#29303D] font-medium text-[15px] leading-[24px] tracking-normal">Event</a>
                <a href="#" class="text-[#29303D] font-medium text-[15px] leading-[24px] tracking-normal">Study in
                    UB</a>
                <a href="#"
                    class="text-[#29303D] font-medium text-[15px] leading-[24px] tracking-normal">Partnership</a>
                <a href="#"
                    class="text-[#29303D] font-medium text-[15px] leading-[24px] tracking-normal">Gallery</a>
            </div>
            <div class="flex items-center">
                <button
                    class="bg-[#0000FF] text-white py-2 px-4 rounded-[10px] w-[78px] h-[36px] flex items-center gap-[8px]">
                    <span class="font-medium text-[14px] leading-[24px] tracking-normal">Eng</span>
                    <img src="{{ asset('icons/globe.svg') }}" alt="Globe Icon" class="w-5 h-5">
                </button>
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

        <section class="w-full h-[660px] bg-[#F0F2F4] py-20">
            <div class="max-w-[1280px] mx-auto px-8">
                <h1 class="text-[38px] font-extrabold text-center text-[#29303D] font-playfair">
                    University Ranking
                </h1>
                <h2 class="text-[20px] font-inter font-normal text-center text-[#29303DB2] mt-2 mb-8">
                    Recognized globally for academic excellence and research innovation
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-16">
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
                            QS World University Rankings</p>
                        <span class="font-medium text-[#0000FF]">2024</span>
                    </div>

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
                            QS World University Rankings</p>
                        <span class="font-medium text-[#0000FF]">2024</span>
                    </div>

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
                            Times Higher Education</p>
                        <span class="font-medium text-[#0000FF]">2024</span>
                    </div>

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

        {{-- <section class="w-full h-[665px] bg-white pt-20 px-[112px]">
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

                    <img src="{{ asset('/images/about.png') }}" alt="UB Image" class="w-full h-full object-cover">

                    <div class="absolute inset-0 flex justify-center items-center">
                        <div
                            class="w-[78px] h-[78px] bg-[#FFFFFF33] rounded-full flex justify-center items-center shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-filter backdrop-blur-[2px] opacity-90">
                            <img src="{{ asset('icons/play.svg') }}" alt="Play Button" class="w-9 h-9">
                        </div>

                    </div>
                    <div class="absolute inset-0 flex justify-center items-center mt-28">
                        <span class="text-center text-white font-playfair font-semibold text-[20px] leading-[28px]">
                            University Profile Video
                        </span>
                    </div>
                    <div class="absolute inset-0 flex justify-center items-center mt-44">
                        <p
                            class="text-center text-white font-inter font-light text-[16px] leading-[28px] text-[#29303DB2] p-2 rounded-lg opacity-80">
                            Discover our journey towards global excellence
                        </p>
                    </div>
                    <div
                        class="absolute -bottom-100 right-10 w-[220.08px] h-[80px] max-w-[220px] rounded-[16px] bg-white p-4 shadow-[0px_8px_25px_-8px_#0000FF4D] mt-72">
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
        </section> --}}
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
    </div>
</body>

</html>
