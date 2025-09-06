@extends('layouts.landingPartials.app')

@section('title', 'Gallery | Globalizing UB')

@section('content')
<div class="bg-gray-100 h-16 flex items-center">
    <div class="w-full max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex py-4 items-center font-inter text-sm text-gray-600 space-x-2">
            <!-- Home -->
            <a href="#" class="flex items-center align-middle hover:text-indigo-600">
                <img src="{{asset('icons/home.svg')}}" alt="home" class="w-3 h-3 mr-3">
                Home
            </a>

            <!-- Separator -->
            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.2924 12.8905L8.69238 8.29051L9.40013 7.58276L14.7079 12.8905L9.40013 18.1983L8.69238 17.4905L13.2924 12.8905Z" fill="#29303D" />
            </svg>

            <!-- Events -->
            <span>
                Gallery
            </span>
        </nav>
    </div>
</div>

<section class="lg:max-w-6xl flex-col lg:flex-row items-center align-middle mx-auto py-10 lg:pt-20 lg:pb-16 px-4 sm:px-6 lg:px-8">
    <h1 class="font-bold text-4xl mb-4 text-center font-playfair">Gallery</h1>
    <p class="text-center text-xl lg:w-[602px] w-full font-inter mx-auto text-neutral-500">
        Access our collection of promotional materials, brochures, and multimedia content
    </p>

    <div class="max-w-6xl mt-16 mx-auto">
        <!-- Slider main container -->
        <div class="swiper rounded-2xl overflow-hidden">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{asset('images/slider.jpg')}}" class="w-full h-[400px] object-cover" />
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/slider.jpg')}}" class="w-full h-[400px] object-cover" />
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/slider.jpg')}}" class="w-full h-[400px] object-cover" />
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
        @foreach (['conference.jpg','slider.jpg','slider.jpg'] as $index => $img)
        <div
            onclick="openModal({{ $index }})"
            class="cursor-pointer bg-white rounded-2xl font-inter overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
            <img src="{{ asset('images/'.$img) }}" alt="event" class="w-full h-48 object-cover">
            <div class="p-5">
                <span class="inline-block px-4 py-1 text-xs font-medium text-[#BE185D] bg-neutral-200/90 rounded-full">
                    Cultural Event
                </span>
                <h3 class="mt-3 text-lg font-semibold font-playfair text-gray-800">
                    Event {{ $index+1 }}
                </h3>
                <p class="mt-2 text-neutral-500 text-sm">
                    Short description here...
                </p>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Modal -->
<div id="galleryModal" class="fixed inset-0 hidden z-50">
    <!-- Background Blur -->
    <div class="absolute inset-0 backdrop-blur-sm bg-black/70" onclick="closeModal()"></div>

    <!-- Konten Modal -->
    <div class="relative flex flex-col items-center justify-center min-h-full p-4">
        <!-- Header dengan Close Button -->
        <button id="closeButton" onclick="closeModal()"
            class="fixed top-6 right-6 z-[60] bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-full p-3 text-white transition-all duration-200 hover:scale-110 pointer-events-auto">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Main Image Container -->
        <div class="relative w-full max-w-4xl bg-white rounded-2xl overflow-hidden shadow-2xl">
            <!-- Navigation Buttons -->
            <button onclick="previousImage()"
                class="absolute left-4 top-1/2 transform -translate-y-1/2 z-20 bg-black/50 hover:bg-black/70 text-white rounded-full p-3 transition-all duration-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>

            <button onclick="nextImage()"
                class="absolute right-4 top-1/2 transform -translate-y-1/2 z-20 bg-black/50 hover:bg-black/70 text-white rounded-full p-3 transition-all duration-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <!-- Swiper utama -->
            <div class="swiper mainSwiper h-[400px] lg:h-[500px]">
                <div class="swiper-wrapper">
                    <div class="swiper-slide flex justify-center items-center">
                        <img src="{{ asset('images/conference.jpg') }}" class="max-w-full max-h-full object-contain" />
                    </div>
                    <div class="swiper-slide flex justify-center items-center">
                        <img src="{{ asset('images/slider.jpg') }}" class="max-w-full max-h-full object-contain" />
                    </div>
                    <div class="swiper-slide flex justify-center items-center">
                        <img src="{{ asset('images/slider.jpg') }}" class="max-w-full max-h-full object-contain" />
                    </div>
                </div>
            </div>

            <!-- Image Counter -->
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-black/50 text-white px-3 py-1 rounded-full text-sm">
                <span id="currentSlide">1</span> / <span id="totalSlides">3</span>
            </div>
        </div>

        <!-- Thumbnails Container -->
        <div class="w-full max-w-4xl mt-6 flex justify-center space-x-2">
            @foreach(['conference.jpg', 'slider.jpg', 'slider.jpg'] as $index => $img)
            <div id="thumb-{{ $index }}"
                onclick="goToSlide({{ $index }})"
                class="cursor-pointer w-20 h-20 rounded-lg overflow-hidden border-2 border-white/30 transition-all duration-200 hover:border-white">
                <img src="{{ asset('images/'.$img) }}" class="w-full h-full object-cover" />
                <div class="absolute inset-0 bg-black/40 opacity-60 hover:opacity-0 transition-opacity duration-200"></div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    let mainSwiper;
    let currentIndex = 0;
    const totalImages = 3;
    const imageList = [
        "{{ asset('images/conference.jpg') }}",
        "{{ asset('images/slider.jpg') }}",
        "{{ asset('images/slider.jpg') }}"
    ];

    function openModal(index) {
        document.getElementById("galleryModal").classList.remove("hidden");
        document.body.classList.add("overflow-hidden");
        currentIndex = index;

        if (!mainSwiper) {
            mainSwiper = new Swiper(".mainSwiper", {
                spaceBetween: 0,
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                on: {
                    slideChange: function() {
                        currentIndex = this.activeIndex;
                        updateThumbnails();
                        updateCounter();
                    }
                }
            });
        }

        mainSwiper.slideTo(index);
        updateThumbnails();
        updateCounter();
    }

    function closeModal() {
        document.getElementById("galleryModal").classList.add("hidden");
        document.body.classList.remove("overflow-hidden");
    }

    function nextImage() {
        if (currentIndex < totalImages - 1) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        mainSwiper.slideTo(currentIndex);
    }

    function previousImage() {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = totalImages - 1;
        }
        mainSwiper.slideTo(currentIndex);
    }

    function goToSlide(index) {
        currentIndex = index;
        mainSwiper.slideTo(index);
    }

    function updateThumbnails() {
        const thumbs = document.querySelectorAll('[id^="thumb-"]');
        thumbs.forEach((thumb, index) => {
            if (index === currentIndex) {
                thumb.classList.remove('border-white/30');
                thumb.classList.add('border-white');
                thumb.querySelector('div').classList.add('opacity-0');
            } else {
                thumb.classList.remove('border-white');
                thumb.classList.add('border-white/30');
                thumb.querySelector('div').classList.remove('opacity-0');
            }
        });
    }

    function updateCounter() {
        document.getElementById('currentSlide').textContent = currentIndex + 1;
        document.getElementById('totalSlides').textContent = totalImages;
    }

    // Close modal with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeModal();
        }
        if (e.key === 'ArrowLeft') {
            previousImage();
        }
        if (e.key === 'ArrowRight') {
            nextImage();
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
    });
</script>

@endsection