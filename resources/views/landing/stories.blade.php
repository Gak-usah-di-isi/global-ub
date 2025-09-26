@extends('core.app')

@section('title', 'Stories Page')

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
            <span
                class="{{ request()->is('story') ? 'font-medium text-[#29303D]' : 'text-[#29303D] font-light' }} text-xs md:text-[14px]">
                Story
            </span>
        </div>
    </div>

    <section id="study-in-ub"
        class="w-full bg-gradient-to-b from-[#F9FAFB] to-[#F0F2F4] px-4 sm:px-8 md:px-16 lg:px-28 py-10 md:py-16 lg:py-20">
        <div class="max-w-[1280px] mx-auto flex flex-col gap-8 md:gap-12 lg:gap-16">

            <div class="w-full flex flex-col items-center gap-4">
                <h2
                    class="w-full text-center font-playfair font-bold text-2xl md:text-3xl lg:text-[36px] leading-[40px] text-[#29303D]">
                    Watch Their Stories
                </h2>
                <p
                    class="text-center font-inter font-light text-base md:text-lg lg:text-xl leading-6 md:leading-7 lg:leading-[28px] text-[#29303DB2]">
                    Hear directly from our global community about their transformative <br />experiences at UB
                </p>
            </div>

            <div class="w-full mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                @foreach ($stories as $story)
                    @php
                        preg_match(
                            '/(?:youtu\.be\/|youtube\.com\/(?:watch\?v=|embed\/|v\/|shorts\/))([\w-]+)/',
                            $story->video_url,
                            $matches,
                        );
                        $videoId = $matches[1] ?? '';
                    @endphp
                    <div class="story-card w-full max-w-[380px] h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden cursor-pointer"
                        data-video="{{ $videoId }}" data-title="{{ $story->title }}"
                        data-description="{{ $story->description }}">
                        <div class="w-full h-48 relative group">
                            <img src="{{ asset('storage/' . ($story->thumbnail ?? $story->image)) }}"
                                alt="{{ $story->title }}" class="w-full h-full object-cover">
                            <div
                                class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 opacity-100 transition-opacity duration-300">
                                <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                                    <img src="{{ asset('icons/play1.svg') }}" alt="Play Button" class="w-6 h-6 ml-1">
                                </div>
                            </div>
                        </div>
                        <div class="w-full h-auto p-4 sm:p-6 flex flex-col gap-4">
                            <div class="w-full flex items-center justify-between">
                                <p
                                    class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#D7E4FF] text-[#1D4ED8]">
                                    {{ $story->category_story }}
                                </p>
                            </div>
                            <h3
                                class="font-playfair font-bold text-lg lg:text-xl leading-relaxed md:leading-[28px] text-[#29303D]">
                                {{ $story->title }}
                            </h3>
                            <p
                                class="font-inter text-sm md:text-base lg:text-base font-normal leading-normal text-[#29303D] opacity-[0.7]">
                                {{ $story->description }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>

        <div class="w-full flex justify-center items-center py-8">
            <div class="flex items-center gap-4">
                @if ($stories->onFirstPage())
                    <button class="w-10 h-10 md:w-12 md:h-12 bg-[#FFFFFF] rounded-full flex justify-center items-center">
                        <img src="/icons/arrow-fix.svg" alt="Previous"
                            class="w-3 h-3 md:w-4 md:h-4 transform rotate-180 opacity-20">
                    </button>
                @else
                    <a href="{{ $stories->previousPageUrl() }}"
                        class="w-10 h-10 md:w-12 md:h-12 bg-[#FFFFFF] rounded-full flex justify-center items-center">
                        <img src="/icons/arrow-fix.svg" alt="Previous" class="w-3 h-3 md:w-4 md:h-4 transform rotate-180">
                    </a>
                @endif

                <div class="flex items-center gap-2 md:gap-4 bg-[#FFFFFF] rounded-full p-1 md:p-2">
                    @foreach ($stories->getUrlRange(1, $stories->lastPage()) as $page => $url)
                        <a href="{{ $url }}"
                            class="w-7 h-7 md:w-9 md:h-9 {{ $stories->currentPage() == $page ? 'bg-[#1D4ED8] text-white' : 'text-[#1D4ED8]' }} rounded-full flex justify-center items-center text-xs md:text-sm">
                            {{ $page }}
                        </a>
                    @endforeach
                </div>


                @if ($stories->hasMorePages())
                    <a href="{{ $stories->nextPageUrl() }}"
                        class="w-10 h-10 md:w-12 md:h-12 bg-[#FFFFFF] rounded-full flex justify-center items-center">
                        <img src="/icons/arrow-fix.svg" alt="Next" class="w-3 h-3 md:w-4 md:h-4">
                    </a>
                @else
                    <button class="w-10 h-10 md:w-12 md:h-12 bg-[#FFFFFF] rounded-full flex justify-center items-center">
                        <img src="/icons/arrow-fix.svg" alt="Next" class="w-3 h-3 md:w-4 md:h-4 opacity-20">
                    </button>
                @endif
            </div>
        </div>
    </section>

    </div>

    <div id="video-modal" class="fixed inset-0 bg-black bg-opacity-75 z-50 hidden items-center justify-center p-4">
        <div class="relative w-full max-w-4xl mx-auto">
            <button id="close-modal" class="absolute -top-12 right-0 text-white hover:text-gray-300 transition-colors z-10">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>

            <div class="bg-white rounded-lg overflow-hidden">
                <div class="aspect-video">
                    <iframe id="video-iframe" width="100%" height="100%" src="" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        const videoModal = document.getElementById('video-modal');
        const videoIframe = document.getElementById('video-iframe');
        const closeModalBtn = document.getElementById('close-modal');

        function openVideoModal(videoId, title, description) {
            const embedUrl = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0`;
            videoIframe.src = embedUrl;
            videoModal.classList.remove('hidden');
            videoModal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeVideoModal() {
            videoIframe.src = '';
            videoModal.classList.add('hidden');
            videoModal.classList.remove('flex');
            document.body.style.overflow = 'auto';
        }

        document.querySelectorAll('.story-card').forEach(card => {
            card.addEventListener('click', function() {
                const videoId = this.dataset.video;
                const title = this.dataset.title;
                const description = this.dataset.description;
                openVideoModal(videoId, title, description);
            });
        });

        closeModalBtn.addEventListener('click', closeVideoModal);

        videoModal.addEventListener('click', function(e) {
            if (e.target === videoModal) {
                closeVideoModal();
            }
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !videoModal.classList.contains('hidden')) {
                closeVideoModal();
            }
        });
    </script>
@endpush
