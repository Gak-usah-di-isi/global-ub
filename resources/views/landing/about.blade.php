@extends('core.app')

@section('title', 'About Globalizing UB')

@section('content')
    <div class="bg-[#F0F2F4] w-full h-[80px] flex items-center px-4 md:px-8 lg:px-[112px]">
        <div class="flex items-center space-x-4">
            <div class="w-[16px] h-[16px]">
                <img src="/icons-site/home.svg" alt="Home Icon" class="w-full h-full">
            </div>
            <a href="/" class="text-[#29303D] text-xs md:text-[14px] font-light hover:text-[#0000FF] transition-colors">
                Home
            </a>
            <div class="w-[16px] h-[16px]">
                <div class="w-[14px] h-[14px]">
                    <img src="/icons-site/arrow-right-chevron.svg" alt="Right Arrow" class="w-full h-full">
                </div>
            </div>
        </div>
        <div class="flex items-center space-x-4 ml-4">
            <span
                class="{{ request()->is('about') ? 'font-medium text-[#29303D]' : 'text-[#29303D] font-light' }} text-xs md:text-[14px]">
                About
            </span>
        </div>
    </div>

    <div class="w-full h-auto bg-white pt-8 md:pt-10 px-4 sm:px-6 md:px-8 lg:px-[112px] pb-0 sm:pb-0 lg:pb-12">
        <div id="aboutPageSection" class="max-w-[1440px] mx-auto flex flex-col lg:flex-row gap-8 md:gap-12 lg:gap-[64px]">
            <div class="w-full lg:w-1/2 xl:w-[576px]">
                <h2
                    class="text-2xl sm:text-3xl md:text-[36px] font-playfair font-extrabold leading-tight md:leading-[48px] text-[#29303D]">
                    {{ __('landing.about.title') }}
                </h2>
                <p
                    class="mt-4 text-base sm:text-lg md:text-[18px] font-light font-inter leading-relaxed md:leading-[29.25px] text-[#29303DB2]">
                    {{ __('landing.about.description') }}
                </p>

                <div class="mt-6 md:mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-center gap-2">
                        <div
                            class="w-10 h-10 md:w-[48px] md:h-[48px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-[12px] flex items-center justify-center">
                            <img src="{{ asset('icons-site/user.svg') }}" alt="Students Icon" class="w-[24px] h-[24px]" />
                        </div>
                        <div>
                            <p id="aboutPageCounter1" class="font-semibold text-sm md:text-[16px] text-[#29303D]">0+</p>
                            <p class="text-xs md:text-[14px] text-[#29303DB2]">Partners</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div
                            class="w-10 h-10 md:w-[48px] md:h-[48px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-[12px] flex items-center justify-center">
                            <img src="{{ asset('icons-site/book.svg') }}" alt="Programs Icon" class="w-[24px] h-[24px]" />
                        </div>
                        <div>
                            <p id="aboutPageCounter2" class="font-semibold text-sm md:text-[16px] text-[#29303D]">0+</p>
                            <p class="text-xs md:text-[14px] text-[#29303DB2]">Programs</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div
                            class="w-10 h-10 md:w-[48px] md:h-[48px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-[12px] flex items-center justify-center">
                            <img src="{{ asset('icons-site/achievement.svg') }}" alt="Years Icon"
                                class="w-[24px] h-[24px]" />
                        </div>
                        <div>
                            <p id="aboutPageCounter3" class="font-semibold text-sm md:text-[16px] text-[#29303D]">0+</p>
                            <p class="text-xs md:text-[14px] text-[#29303DB2]">Prototype/Product</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div
                            class="w-10 h-10 md:w-[48px] md:h-[48px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-[12px] flex items-center justify-center">
                            <img src="{{ asset('icons-site/partner.svg') }}" alt="Partners Icon"
                                class="w-[24px] h-[24px]" />
                        </div>
                        <div>
                            <p id="aboutPageCounter4" class="font-semibold text-sm md:text-[16px] text-[#29303D]">0+</p>
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

            <div class="relative">
                <div id="about-video-trigger"
                    class="w-full lg:w-[576px] h-[250px] sm:h-[300px] md:h-[324px] rounded-[16px] overflow-hidden relative mt-0 md:mt-12 lg:mt-24 cursor-pointer"
                    style="box-shadow: 0px 8px 25px -8px #0000FF4D;">
                    <div class="absolute inset-0">
                        <img src="{{ asset('/images/about-new.png') }}" alt="UB Image" class="w-full h-full object-cover">
                    </div>

                    <div
                        class="absolute inset-0 bg-gradient-to-br from-[rgba(0,0,255,0.6)] to-[rgba(102,153,255,0.6)] rounded-[16px]">
                    </div>

                    <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white z-10">
                        <button id="about-play-button" type="button"
                            class="relative z-20 flex items-center justify-center w-16 h-16 md:w-20 md:h-20 rounded-full bg-white bg-opacity-20 backdrop-blur-sm mb-6 hover:bg-opacity-30 transition-all">
                            <img src='{{ asset('icons-site/play.svg') }}' alt="Play"
                                class="w-6 h-6 md:w-8 md:h-8 text-white" />
                        </button>

                        <h3 class="font-playfair font-bold text-lg md:text-xl lg:text-2xl text-white mb-2">
                            Watch Our Story
                        </h3>

                        <p class="font-inter font-normal text-sm md:text-base text-white opacity-90">
                            Discover what makes UB special
                        </p>
                    </div>
                </div>

                <div
                    class="absolute -bottom-6 -right-2 sm:-bottom-8 sm:-right-4 md:-bottom-2 md:-right-6 lg:bottom-2 lg:-right-6 w-[160px] sm:w-[180px] md:w-[200px] lg:w-[220px] h-[50px] sm:h-[65px] md:h-[70px] lg:h-[80px] rounded-[12px] md:rounded-[16px] bg-white border border-[#E2E4E9] p-2 sm:p-3 md:p-4 z-20 shadow-[0px_4px_20px_-2px_#29303D1A]">
                    <div class="flex items-center gap-2 sm:gap-3 w-full h-full">
                        <div
                            class="w-8 h-8 sm:w-10 sm:h-10 md:w-[48px] md:h-[48px] rounded-full flex items-center justify-center bg-[linear-gradient(135deg,#0000FF_0%,#6699FF_100%)]">
                            <img src="{{ asset('icons-site/partner.svg') }}" alt="Global Network Icon"
                                class="w-4 h-4 sm:w-5 sm:h-5 md:w-6 md:h-6">
                        </div>
                        <div class="flex-1 min-w-0">
                            <p
                                class="font-inter font-semibold text-xs sm:text-[13px] md:text-[14px] leading-[1.2] sm:leading-[1.3] md:leading-[24px] text-[#29303D] truncate">
                                Global Network
                            </p>
                            <p
                                class="font-inter font-normal text-[10px] sm:text-[11px] md:text-[12px] leading-[1.1] sm:leading-[1.2] md:leading-[20px] text-[#29303DB2] truncate">
                                Worldwide Connections
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
                    Showcasing international recognition and strengthened global presence.
                </p>
            </div>

            <div
                class="w-full mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 md:gap-[32px] place-items-center">
                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-full text-center font-inter font-bold text-2xl md:text-[36px] leading-tight text-[#0000FF]">
                        {{ $aboutSection->achievement_1_value ?? '57' }}
                    </div>
                    <span
                        class="mt-1 text-[#29303DB2] font-inter text-sm md:text-[14px]">{{ $aboutSection->achievement_1_label ?? 'Countries Represented' }}</span>
                </div>

                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-full text-center font-inter font-bold text-2xl md:text-[36px] leading-tight text-[#0000FF]">
                        {{ $aboutSection->achievement_2_value ?? '100+' }}
                    </div>
                    <span
                        class="mt-1 text-[#29303DB2] font-inter text-sm md:text-[14px]">{{ $aboutSection->achievement_2_label ?? 'International Partner Institutions' }}</span>
                </div>

                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-full text-center font-inter font-bold text-2xl md:text-[36px] leading-tight text-[#0000FF]">
                        {{ $aboutSection->achievement_3_value ?? 'Top 700' }}
                    </div>
                    <span
                        class="mt-1 text-[#29303DB2] font-inter text-sm md:text-[14px]">{{ $aboutSection->achievement_3_label ?? 'QS World University Rankings' }}</span>
                </div>

                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-full text-center font-inter font-bold text-2xl md:text-[36px] leading-tight text-[#0000FF]">
                        {{ $aboutSection->achievement_4_value ?? '50+' }}
                    </div>
                    <span
                        class="mt-1 text-[#29303DB2] font-inter text-sm md:text-[14px]">{{ $aboutSection->achievement_4_label ?? 'Global Mobility Programs' }}</span>
                </div>

                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-full text-center font-inter font-bold text-2xl md:text-[36px] leading-tight text-[#0000FF]">
                        {{ $aboutSection->achievement_5_value ?? 'Top 150' }}
                    </div>
                    <span
                        class="mt-1 text-[#29303DB2] font-inter text-sm md:text-[14px]">{{ $aboutSection->achievement_5_label ?? 'UI GreenMetric World University' }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full bg-gradient-to-b from-[#F9FAFB] to-[#F0F2F4] py-8 md:py-[80px] sm:px-6 lg:px-[112px]">
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
                        <img src="{{ asset('icons-site/editor_choice.svg') }}" alt="Programs Icon"
                            class="w-[24px] h-[24px]" />
                    </div>
                    <p class="text-center font-inter font-light text-sm md:text-[14px] text-[#29303D]">
                        Provide high-quality education with international standards.
                    </p>
                </div>

                <div class="bg-white shadow-md p-6 md:p-[32px] rounded-[16px]">
                    <div
                        class="w-12 h-12 md:w-[64px] md:h-[68px] bg-[#F9FAFB] rounded-full flex justify-center items-center mx-auto mb-4 md:mb-[16px]">
                        <img src="{{ asset('icons-site/globe_book.svg') }}" alt="Programs Icon"
                            class="w-[24px] h-[24px]" />
                    </div>
                    <p class="text-center font-inter font-light text-sm md:text-[14px] text-[#29303D]">
                        Foster global collaboration in research and innovation.
                    </p>
                </div>

                <div class="bg-white shadow-md p-6 md:p-[32px] rounded-[16px]">
                    <div
                        class="w-12 h-12 md:w-[64px] md:h-[68px] bg-[#F9FAFB] rounded-full flex justify-center items-center mx-auto mb-4 md:mb-[16px]">
                        <img src="{{ asset('icons-site/emoji_language.svg') }}" alt="Programs Icon"
                            class="w-[24px] h-[24px]" />
                    </div>
                    <p class="text-center font-inter font-light text-sm md:text-[14px] text-[#29303D]">
                        Support student mobility and international career opportunities.
                    </p>
                </div>

                <div class="bg-white shadow-md p-6 md:p-[32px] rounded-[16px]">
                    <div
                        class="w-12 h-12 md:w-[64px] md:h-[68px] bg-[#F9FAFB] rounded-full flex justify-center items-center mx-auto mb-4 md:mb-[16px]">
                        <img src="{{ asset('icons-site/diversity_2.svg') }}" alt="Programs Icon"
                            class="w-[24px] h-[24px]" />
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function animateCounter(element, target, duration) {
                let start = 0;
                const increment = target / (duration / 16);
                const timer = setInterval(() => {
                    start += increment;
                    if (start >= target) {
                        element.textContent = target.toLocaleString() + '+';
                        clearInterval(timer);
                    } else {
                        element.textContent = Math.floor(start).toLocaleString() + '+';
                    }
                }, 16);
            }

            let aboutPageStarted = false;
            const aboutPageSection = document.getElementById('aboutPageSection');

            const aboutPageObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !aboutPageStarted) {
                        aboutPageStarted = true;

                        const counter1 = document.getElementById('aboutPageCounter1');
                        const counter2 = document.getElementById('aboutPageCounter2');
                        const counter3 = document.getElementById('aboutPageCounter3');
                        const counter4 = document.getElementById('aboutPageCounter4');

                        animateCounter(counter1, {{ $aboutSection->students_count ?? 50000 }},
                            3000);
                        animateCounter(counter2, {{ $aboutSection->programs_count ?? 190 }}, 3000);
                        animateCounter(counter3, {{ $aboutSection->years_count ?? 60 }}, 3000);
                        animateCounter(counter4, {{ $aboutSection->partners_count ?? 300 }}, 3000);
                    }
                });
            }, {
                threshold: 0.3
            });

            if (aboutPageSection) {
                aboutPageObserver.observe(aboutPageSection);
            }

            const videoTrigger = document.getElementById('about-video-trigger');
            const videoModal = document.getElementById('about-video-modal');
            const videoIframe = document.getElementById('about-video-iframe');
            const closeModalBtn = document.getElementById('about-close-modal');
            const playButton = document.getElementById('about-play-button');

            function convertToYouTubeEmbed(url) {
                if (!url) return '';

                let videoId = '';

                const patterns = [
                    /(?:youtube\.com\/watch\?v=)([a-zA-Z0-9_-]{11})/,
                    /(?:youtu\.be\/)([a-zA-Z0-9_-]{11})/,
                    /(?:youtube\.com\/embed\/)([a-zA-Z0-9_-]{11})/,
                    /(?:youtube\.com\/v\/)([a-zA-Z0-9_-]{11})/
                ];

                for (let i = 0; i < patterns.length; i++) {
                    const match = url.match(patterns[i]);
                    if (match && match[1]) {
                        videoId = match[1];
                        break;
                    }
                }

                return videoId ? `https://www.youtube.com/embed/${videoId}` : url;
            }

            function openVideoModal() {
                const rawUrl = '{{ $aboutSection->video_url ?? 'https://www.youtube.com/embed/Xg0r7XJ4lSY' }}';
                const embedBaseUrl = convertToYouTubeEmbed(rawUrl);
                const currentOrigin = window.location.origin;
                const embedUrl = embedBaseUrl +
                    '?autoplay=1&rel=0&modestbranding=1&playsinline=1&enablejsapi=1&origin=' + encodeURIComponent(
                        currentOrigin) + '&widget_referrer=' + encodeURIComponent(currentOrigin);

                videoIframe.src = embedUrl;
                videoModal.classList.remove('hidden');
                videoModal.classList.add('flex');
                document.body.style.overflow = 'hidden';

                if (playButton) {
                    playButton.style.display = 'none';
                }
            }

            function closeVideoModal() {
                if (videoIframe) {
                    videoIframe.src = '';
                }
                videoModal.classList.add('hidden');
                videoModal.classList.remove('flex');
                document.body.style.overflow = 'auto';
                if (playButton) {
                    playButton.style.display = '';
                }
            }

            if (videoTrigger) {
                videoTrigger.addEventListener('click', openVideoModal);
            }

            if (closeModalBtn) {
                closeModalBtn.addEventListener('click', closeVideoModal);
            }

            if (videoModal) {
                videoModal.addEventListener('click', function(e) {
                    if (e.target === videoModal) {
                        closeVideoModal();
                    }
                });
            }
        });
    </script>

    <div id="about-video-modal" class="fixed inset-0 bg-black bg-opacity-75 z-50 hidden items-center justify-center p-4">
        <div class="relative w-full max-w-4xl mx-auto">
            <button id="about-close-modal"
                class="absolute -top-12 right-0 text-white hover:text-gray-300 transition-colors z-10">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>

            <div class="bg-white rounded-lg overflow-hidden">
                <div class="aspect-video">
                    <iframe id="about-video-iframe" width="100%" height="100%" src="" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen referrerpolicy="strict-origin-when-cross-origin">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
