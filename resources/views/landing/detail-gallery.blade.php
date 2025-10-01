@extends('core.app')

@section('title', 'Gallery ' . $image->title)

@section('content')

    <div class="bg-[#F0F2F4] w-full h-[80px] flex items-center px-4 md:px-8 lg:px-[112px]">
        <div class="flex items-center space-x-4">
            <div class="w-[16px] h-[16px]">
                <img src="/icons/home.svg" alt="Home Icon" class="w-full h-full">
            </div>
            <a href="/" class="text-[#29303D] text-xs md:text-[14px] font-light hover:text-[#0000FF] transition-colors">
                Home
            </a>
            <div class="w-[16px] h-[16px]">
                <div class="w-[14px] h-[14px]">
                    <img src="/icons/arrow-right-chevron.svg" alt="Right Arrow" class="w-full h-full">
                </div>
            </div>
        </div>
        <div class="flex items-center space-x-4 ml-4">
            <a href="/gallery"
                class="text-[#29303D] text-xs md:text-[14px] font-light hover:text-[#0000FF] transition-colors">
                Gallery
            </a>
            <div class="w-[16px] h-[16px]">
                <div class="w-[14px] h-[14px]">
                    <img src="/icons/arrow-right-chevron.svg" alt="Right Arrow" class="w-full h-full">
                </div>
            </div>
        </div>
        <div class="flex items-center space-x-4 ml-4">
            <span class="font-medium text-[#29303D] text-xs md:text-[14px] font-light transition-colors">
                {{ $image->title }}
            </span>
        </div>
    </div>

    <section class="py-10 md:py-14 px-4 md:px-8 lg:px-28 bg-white">
        <div class="w-full mx-auto flex flex-col">

            <div class="flex justify-between items-center w-full max-w-[1200px] h-[24px] py-4 md:py-8">
                <span
                    class="inline-block rounded-full bg-[#F0F2F4] px-3 py-1 text-[#BE185D] font-inter font-medium text-[12px]">
                    {{ $image->category_gallery }}
                </span>
                <span class="flex items-center gap-2 text-[#29303DB2] text-[14px]">
                    <img src="/icons/calender.svg" class="w-5 h-5" alt="calendar icon">
                    {{ \Carbon\Carbon::parse($image->created_at)->format('m/d/Y') }}
                </span>
            </div>

            <div class="w-full max-w-[1216px] flex flex-col gap-6">
                <h2 class="font-playfair font-bold text-[36px] leading-[40px] text-[#29303D]">
                    {{ $image->title }}
                </h2>
                <p class="font-inter text-[18px] leading-[29.25px] text-[#29303DB2]">
                    {{ $image->description }}
                </p>
            </div>

            @php
                $imgArray = json_decode($image->images, true);
            @endphp
            <div class="w-full max-w-[1200px] mx-auto mt-8 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-[30px]">
                @foreach ($imgArray as $index => $img)
                    <div class="aspect-square rounded-[21px] overflow-hidden bg-neutral-100 flex items-center justify-center cursor-pointer"
                        onclick="openModal({{ $index }})" data-img="{{ asset('storage/' . $img) }}">
                        <img src="{{ asset('storage/' . $img) }}" alt="gallery image" class="w-full h-full object-cover"
                            style="border-radius:20.95px;" />
                    </div>
                @endforeach
            </div>
            <!-- Modal Gallery -->
            <div id="galleryModal" class="fixed inset-0 hidden z-50 flex items-center justify-center p-4">
                <div class="absolute inset-0 backdrop-blur-sm bg-black/90" onclick="closeModal()"></div>
                <div class="relative w-full max-w-3xl mx-auto">
                    <button id="closeButton" onclick="closeModal()"
                        class="absolute -top-12 right-0 text-white hover:text-gray-300 transition-colors z-10">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                    <div class="flex justify-center items-center w-full">
                        <img id="modalImage" src="" class="max-w-full max-h-[70vh] object-contain cursor-pointer"
                            onclick="closeModal()" />
                    </div>
                </div>
            </div>
            <div class="flex gap-4 mt-6 md:mt-8">
                <div class="w-[41px] h-[41px] bg-[#E2E4E9] flex items-center justify-center rounded-full">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                        target="_blank">
                        <img src="/icons/fb.svg" class="w-5 h-5" alt="Facebook">
                    </a>
                </div>
                <div class="w-[41px] h-[41px] bg-[#E2E4E9] flex items-center justify-center rounded-full">
                    <a href="https://www.instagram.com" target="_blank">
                        <img src="/icons/ig.svg" class="w-5 h-5" alt="Instagram">
                    </a>
                </div>
                <div class="w-[41px] h-[41px] bg-[#E2E4E9] flex items-center justify-center rounded-full">
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($image->title) }}"
                        target="_blank">
                        <img src="/icons/tweet.svg" class="w-5 h-5" alt="Twitter">
                    </a>
                </div>
                <div class="w-[41px] h-[41px] bg-[#E2E4E9] flex items-center justify-center rounded-full">
                    <a href="{{ url()->current() }}" target="_blank" title="Click to Copy URL">
                        <img src="/icons/link.svg" class="w-5 h-5" alt="Copy Link">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script>
        const imageList = [
            @foreach ($imgArray as $img)
                "{{ asset('storage/' . $img) }}",
            @endforeach
        ];

        let currentIndex = 0;

        function openModal(index) {
            document.getElementById("galleryModal").classList.remove("hidden");
            document.body.classList.add("overflow-hidden");
            currentIndex = index;

            const modalImage = document.getElementById("modalImage");
            modalImage.src = imageList[index];

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

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const modalImage = document.getElementById("modalImage");
            modalImage.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
            modalImage.style.opacity = '0';
            modalImage.style.transform = 'scale(0.9)';
        });
    </script>

    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-3xl font-playfair text-neutral-800 font-bold mb-8">Gallery</h1>
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($images as $gallery)
                @php
                    $imgArray = json_decode($gallery->images, true);
                    $firstImg = $imgArray[0] ?? '';
                @endphp
                <a href="{{ route('gallery.show', ['slug' => $gallery->slug]) }}">
                    <div
                        class="cursor-pointer bg-white rounded-2xl font-inter overflow-hidden shadow-[0px_4px_20px_-2px_#29303D1A] hover:shadow-[0px_8px_30px_-4px_#29303D1A] transition-shadow duration-300">
                        <img src="{{ asset('storage/' . $firstImg) }}" alt="event" class="w-full h-48 object-cover">
                        <div class="p-5">
                            <span
                                class="inline-block px-4 py-1 text-xs font-medium text-[#BE185D] bg-neutral-200/90 rounded-full">
                                {{ $gallery->category_gallery }}
                            </span>
                            <h3 class="mt-3 text-lg font-semibold font-playfair text-gray-800">
                                {{ $gallery->title }}
                            </h3>
                            <p class="mt-2 text-neutral-500 text-sm">
                                {{ $gallery->description }}
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection
