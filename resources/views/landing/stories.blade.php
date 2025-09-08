@extends('core.app')

@section('title', 'Stories Page')

@section('content')

    <div class="bg-[#F0F2F4] w-full h-[80px] flex items-center px-4 md:px-8 lg:px-28">
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
            <span class="text-[#29303D] text-[14px] font-medium">Watch Their Stories</span>
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

                <article
                    class="story-card w-full max-w-[380px] h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden cursor-pointer transition-transform hover:scale-105"
                    data-video="dQw4w9WgXcQ" data-title="International Student Experience"
                    data-description="Sarah shares her journey from Malaysia to UB and how she found her passion in engineering.">
                    <div class="w-full h-48 relative group">
                        <img src="{{ asset('images/story1.png') }}" alt="International Student Story"
                            class="w-full h-full object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                                <img src="{{ asset('icons/play1.svg') }}" alt="Play Button" class="w-6 h-6 ml-1">
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-auto p-4 sm:p-6 flex flex-col gap-4">
                        <div class="w-full flex items-center justify-between">
                            <p
                                class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#D7E4FF] text-[#1D4ED8]">
                                Student Story
                            </p>
                        </div>
                        <h3
                            class="font-playfair font-bold text-lg lg:text-xl leading-relaxed md:leading-[28px] text-[#29303D]">
                            International Student Experience
                        </h3>
                        <p
                            class="font-inter text-sm md:text-base lg:text-base font-normal leading-normal text-[#29303D] opacity-[0.7]">
                            Sarah shares her journey from Malaysia to UB and how she found her passion in
                            engineering.
                        </p>
                    </div>
                </article>

                <article
                    class="story-card w-full max-w-[380px] h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden cursor-pointer transition-transform hover:scale-105"
                    data-video="jNQXAC9IVRw" data-title="Research Collaboration Success"
                    data-description="Dr. Ahmed discusses breakthrough research projects with international partners.">
                    <div class="w-full h-48 relative group">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=300&fit=crop"
                            alt="Research Story" class="w-full h-full object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                                <img src="{{ asset('icons/play1.svg') }}" alt="Play Button" class="w-6 h-6 ml-1">
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-auto p-4 sm:p-6 flex flex-col gap-4">
                        <div class="w-full flex items-center justify-between">
                            <p
                                class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#D7E4FF] text-[#1D4ED8]">
                                Research
                            </p>
                        </div>
                        <h3
                            class="font-playfair font-bold text-lg lg:text-xl leading-relaxed md:leading-[28px] text-[#29303D]">
                            Research Collaboration Success
                        </h3>
                        <p
                            class="font-inter text-sm md:text-base lg:text-base font-normal leading-normal text-[#29303D] opacity-[0.7]">
                            Dr. Ahmed discusses breakthrough research projects with international partners.
                        </p>
                    </div>
                </article>

                <article
                    class="story-card w-full max-w-[380px] h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden cursor-pointer transition-transform hover:scale-105"
                    data-video="M7lc1UVf-VE" data-title="Cultural Exchange Program"
                    data-description="Maria talks about her transformative cultural exchange experience at UB.">
                    <div class="w-full h-48 relative group">
                        <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?w=400&h=300&fit=crop"
                            alt="Cultural Exchange Story" class="w-full h-full object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                                <img src="{{ asset('icons/play1.svg') }}" alt="Play Button" class="w-6 h-6 ml-1">
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-auto p-4 sm:p-6 flex flex-col gap-4">
                        <div class="w-full flex items-center justify-between">
                            <p
                                class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#D7E4FF] text-[#1D4ED8]">
                                Cultural Exchange
                            </p>
                        </div>
                        <h3
                            class="font-playfair font-bold text-lg lg:text-xl leading-relaxed md:leading-[28px] text-[#29303D]">
                            Cultural Exchange Program
                        </h3>
                        <p
                            class="font-inter text-sm md:text-base lg:text-base font-normal leading-normal text-[#29303D] opacity-[0.7]">
                            Maria talks about her transformative cultural exchange experience at UB.
                        </p>
                    </div>
                </article>

                <article
                    class="story-card w-full max-w-[380px] h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden cursor-pointer transition-transform hover:scale-105"
                    data-video="9bZkp7q19f0" data-title="Alumni Success Story"
                    data-description="John shares how his UB education launched his career in technology.">
                    <div class="w-full h-48 relative group">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&h=300&fit=crop"
                            alt="Alumni Success Story" class="w-full h-full object-cover">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                                <img src="{{ asset('icons/play1.svg') }}" alt="Play Button" class="w-6 h-6 ml-1">
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-auto p-4 sm:p-6 flex flex-col gap-4">
                        <div class="w-full flex items-center justify-between">
                            <p
                                class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#D7E4FF] text-[#1D4ED8]">
                                Alumni
                            </p>
                        </div>
                        <h3
                            class="font-playfair font-bold text-lg lg:text-xl leading-relaxed md:leading-[28px] text-[#29303D]">
                            Alumni Success Story
                        </h3>
                        <p
                            class="font-inter text-sm md:text-base lg:text-base font-normal leading-normal text-[#29303D] opacity-[0.7]">
                            John shares how his UB education launched his career in technology.
                        </p>
                    </div>
                </article>

            </div>

            <div class="w-full flex justify-center items-center py-8">
                <div class="flex items-center gap-4">
                    <button
                        class="w-10 h-10 md:w-12 md:h-12 bg-[#FFFFFF] rounded-full flex justify-center items-center shadow-md hover:shadow-lg transition-shadow">
                        <svg class="w-3 h-3 md:w-4 md:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </button>

                    <div class="flex items-center gap-2 md:gap-4 bg-[#FFFFFF] rounded-full p-1 md:p-2 shadow-md">
                        <button
                            class="w-7 h-7 md:w-9 md:h-9 bg-[#1D4ED8] text-white rounded-full flex justify-center items-center text-sm md:text-base">
                            1
                        </button>

                        <button
                            class="w-7 h-7 md:w-9 md:h-9 text-[#1D4ED8] flex justify-center items-center text-sm md:text-base hover:bg-blue-50 rounded-full transition-colors">
                            2
                        </button>

                        <button
                            class="w-7 h-7 md:w-9 md:h-9 text-[#1D4ED8] flex justify-center items-center text-sm md:text-base hover:bg-blue-50 rounded-full transition-colors">
                            3
                        </button>
                    </div>

                    <button
                        class="w-10 h-10 md:w-12 md:h-12 bg-[#FFFFFF] rounded-full flex justify-center items-center shadow-md hover:shadow-lg transition-shadow">
                        <svg class="w-3 h-3 md:w-4 md:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    </div>

    <div id="video-modal" class="fixed inset-0 bg-black bg-opacity-75 z-50 hidden items-center justify-center p-4">
        <div class="relative w-full max-w-4xl mx-auto">
            <button id="close-modal"
                class="absolute -top-12 right-0 text-white hover:text-gray-300 transition-colors z-10">
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

                {{-- <div class="p-6">
                    <h3 id="video-title" class="font-playfair font-bold text-xl lg:text-2xl text-[#29303D] mb-2"></h3>
                    <p id="video-description" class="font-inter text-base text-[#29303D] opacity-70"></p>
                </div> --}}
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        const videoModal = document.getElementById('video-modal');
        const videoIframe = document.getElementById('video-iframe');
        // const videoTitle = document.getElementById('video-title');
        // const videoDescription = document.getElementById('video-description');
        const closeModalBtn = document.getElementById('close-modal');

        function openVideoModal(videoId, title, description) {
            const embedUrl = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0`;
            videoIframe.src = embedUrl;
            // videoTitle.textContent = title;
            // videoDescription.textContent = description;
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
