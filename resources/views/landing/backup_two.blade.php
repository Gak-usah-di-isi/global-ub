<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 3000,
            },
        });
    </script>
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
                <span class="text-[#29303D] text-[14px] font-medium">Event</span>
            </div>
        </div>

        <section
            class="lg:max-w-6xl flex-col lg:flex-row items-center align-middle mx-auto py-10 lg:pt-20 lg:pb-16 px-4 sm:px-6 lg:px-8">
            <h1 class="font-bold text-4xl mb-4 text-center font-playfair">Gallery</h1>
            <p class="text-center text-xl lg:w-[602px] w-full font-inter mx-auto text-neutral-500">
                Access our collection of promotional materials, brochures, and multimedia content
            </p>

            <div class="max-w-6xl mt-16 mx-auto">
                <!-- Slider main container -->
                <div class="swiper rounded-2xl overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('images/slider.jpg') }}" class="w-full h-[400px] object-cover" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/slider.jpg') }}" class="w-full h-[400px] object-cover" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('images/slider.jpg') }}" class="w-full h-[400px] object-cover" />
                        </div>
                        <!-- Pagination di luar slider -->
                        <div class="swiper-pagination mt-8 z-10"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Card Section -->
        <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid gap-6 p-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach (['conference.jpg', 'slider.jpg', 'slider.jpg'] as $index => $img)
                    <div onclick="openModal({{ $index }})"
                        class="cursor-pointer bg-white rounded-2xl font-inter overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                        <img src="{{ asset('images/' . $img) }}" alt="event" class="w-full h-48 object-cover">
                        <div class="p-5">
                            <span
                                class="inline-block px-4 py-1 text-xs font-medium text-[#BE185D] bg-neutral-200/90 rounded-full">
                                Cultural Event
                            </span>
                            <h3 class="mt-3 text-lg font-semibold font-playfair text-gray-800">
                                Event {{ $index + 1 }}
                            </h3>
                            <p class="mt-2 text-neutral-500 text-sm">
                                Sharing insights and innovations from global scholars and UB researchers.
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Modal -->
        <div id="galleryModal" class="fixed inset-0 hidden z-50">
            <!-- Background Blur -->
            <div class="absolute inset-0 backdrop-blur-sm bg-black/90" onclick="closeModal()"></div>

            <!-- Konten Modal -->
            <div class="relative flex flex-col items-center justify-center min-h-full p-4">
                <!-- Header dengan Close Button -->
                <button id="closeButton" onclick="closeModal()"
                    class="fixed top-6 right-6 z-[60] bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-full p-3 text-white transition-all duration-200 hover:scale-110 pointer-events-auto">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

                <!-- Main Image Container - Full Screen -->
                <div class="relative w-full h-full flex justify-center items-center">
                    <!-- Single Image Display -->
                    <div class="w-full h-full flex justify-center items-center p-4">
                        <img id="modalImage" src=""
                            class="max-w-full max-h-full object-contain cursor-pointer" onclick="closeModal()" />
                    </div>
                </div>
            </div>

            <footer class="bg-[#29303D] w-full">
                <div class="max-w-[1280px] mx-auto px-6 sm:px-8 py-12 sm:py-16 gap-12">
                    <div class="flex flex-col lg:flex-row gap-12">
                        <div class="flex flex-col gap-2 w-full lg:w-1/3">
                            <div class="flex flex-col gap-4">
                                <div class="flex gap-4 items-center">
                                    <img src="{{ asset('images/ub.png') }}" alt="UB Logo" class="w-10 h-10">
                                    <img src="{{ asset('icons/gub.svg') }}" alt="Globalizing Logo"
                                        class="h-10 max-w-[120px] sm:max-w-[150px] lg:max-w-[200px]">
                                </div>
                                <p class="text-[#FFFFFF] text-sm mt-2 font-inter font-light">Inspiring Change, Uniting
                                    Civilizations</p>
                            </div>

                            <div class="flex flex-col gap-4 mt-4">
                                <h3 class="text-white text-sm font-bold font-inter">Direktorat Kerjasama Universitas
                                    Brawijaya</h3>

                                <div class="flex items-start gap-2">
                                    <img src="{{ asset('icons/location-blue.svg') }}" alt="Map Icon"
                                        class="w-4 h-4 mt-1">
                                    <p class="text-white text-sm font-light font-inter">Jl. Veteran, Ketawanggede, Kec.
                                        Lowokwaru, Kota Malang, Jawa Timur 65145, Indonesia</p>
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

                        <div class="flex flex-col gap-6 w-full lg:w-1/3">
                            <h4 class="text-white text-lg font-playfair ">Connect With Us</h4>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <button
                                    class="w-full h-[44px] bg-[#FFFFFF1A] rounded-[12px] flex items-center gap-[12px] px-[12px]">
                                    <img src="{{ asset('icons/fb-blue.svg') }}" alt="Facebook Icon"
                                        class="w-[20px] h-[20px]">
                                    <p class="text-white text-sm font-inter font-light leading-[20px]">Facebook</p>
                                </button>
                                <button
                                    class="w-full h-[44px] bg-[#FFFFFF1A] rounded-[12px] flex items-center gap-[12px] px-[12px]">
                                    <img src="{{ asset('icons/linkedin-blue.svg') }}" alt="LinkedIn Icon"
                                        class="w-[20px] h-[20px]">
                                    <p class="text-white text-sm font-inter font-light leading-[20px]">LinkedIn</p>
                                </button>
                                <button
                                    class="w-full h-[44px] bg-[#FFFFFF1A] rounded-[12px] flex items-center gap-[12px] px-[12px]">
                                    <img src="{{ asset('icons/ig-blue.svg') }}" alt="Instagram Icon"
                                        class="w-[20px] h-[20px]">
                                    <p class="text-white text-sm font-inter font-light leading-[20px]">Instagram</p>
                                </button>
                                <button
                                    class="w-full h-[44px] bg-[#FFFFFF1A] rounded-[12px] flex items-center gap-[12px] px-[12px]">
                                    <img src="{{ asset('icons/yt-blue.svg') }}" alt="YouTube Icon"
                                        class="w-[20px] h-[20px]">
                                    <p class="text-white text-sm font-inter font-light leading-[20px]">YouTube</p>
                                </button>
                            </div>
                        </div>

                        <div class="flex flex-col gap-4 w-full lg:w-1/3">
                            <h4 class="text-white text-lg font-playfair">Visitor</h4>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-white text-sm">
                                <div class="flex items-center gap-2">
                                    <img src="{{ asset('icons/user.svg') }}" alt="Visits Today Icon"
                                        class="w-4 h-4">
                                    <span>93 Visits Today</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="{{ asset('icons/user.svg') }}" alt="Total Visits Icon"
                                        class="w-4 h-4">
                                    <span>12,627 Visits</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="{{ asset('icons/user.svg') }}" alt="Visitors Today Icon"
                                        class="w-4 h-4">
                                    <span>44 Visitors Today</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="{{ asset('icons/user.svg') }}" alt="Total Visitors Icon"
                                        class="w-4 h-4">
                                    <span>8,155 Visitors</span>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h5 class="text-white text-lg font-playfair  mb-2">Newsletter</h5>
                                <input type="email" placeholder="Enter your email"
                                    class="w-full h-[41px] p-[11px] bg-[#FFFFFF1A] rounded-[12px] border border-t-[1px] border-[#FFFFFF33] text-white" />
                                <button
                                    class="w-full h-[36px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-[10px] text-white mt-4 shadow-[0px_4px_20px_-2px_#29303D1A]">
                                    Subscribe
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <hr class="w-full h-[1px] border-t border-[#FFFFFF33] opacity-100" />
                    </div>

                    <div class="flex flex-col sm:flex-row justify-between items-center mt-6 gap-4">
                        <div class="text-white text-sm font-inter font-light leading-[20px] text-center sm:text-left">
                            © 2024 Universitas Brawijaya Direktorat Kerjasama, All Right Reserved.
                        </div>
                        <div class="flex flex-wrap justify-center sm:justify-end gap-[20px]">
                            <a href="#" class="text-white text-sm font-inter font-light leading-[20px]">Privacy
                                Policy</a>
                            <a href="#" class="text-white text-sm font-inter font-light leading-[20px]">Terms of
                                Service</a>
                            <a href="#"
                                class="text-white text-sm font-inter font-light leading-[20px]">Sitemap</a>
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

        <script>
            let currentIndex = 0;
            const imageList = [
                "{{ asset('images/conference.jpg') }}",
                "{{ asset('images/slider.jpg') }}",
                "{{ asset('images/slider.jpg') }}"
            ];


            function openModal(index) {
                document.getElementById("galleryModal").classList.remove("hidden");
                document.body.classList.add("overflow-hidden");
                currentIndex = index;

                // Set the image source
                const modalImage = document.getElementById("modalImage");
                modalImage.src = imageList[index];

                // Add animation
                setTimeout(() => {
                    modalImage.style.opacity = '1';
                    modalImage.style.transform = 'scale(1)';
                }, 50);
            }

            function closeModal() {
                const modalImage = document.getElementById("modalImage");
                modalImage.style.opacity = '0';
                modalImage.style.transform = 'scale(0.9)';

                setTimeout(() => {
                    document.getElementById("galleryModal").classList.add("hidden");
                    document.body.classList.remove("overflow-hidden");
                }, 200);
            }

            // Close modal with Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeModal();
                }
            });

            // Initialize the main slider on page load
            document.addEventListener('DOMContentLoaded', function() {
                new Swiper('.swiper', {
                    loop: true,
                    autoplay: {
                        delay: 5000,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                });

                // Set initial styles for modal image
                const modalImage = document.getElementById("modalImage");
                modalImage.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                modalImage.style.opacity = '0';
                modalImage.style.transform = 'scale(0.9)';
            });
        </script>
</body>



</html>
