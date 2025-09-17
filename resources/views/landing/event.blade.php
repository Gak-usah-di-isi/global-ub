@extends('core.app')

@section('title', 'Events')

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
                class="{{ request()->is('event') ? 'font-medium text-[#29303D]' : 'text-[#29303D] font-light' }} text-xs md:text-[14px]">
                Event
            </span>
        </div>
    </div>

    <section id="events"
        class="w-full h-auto bg-[#FFFFFF] px-4 py-10 sm:px-8 md:px-16 md:py-16 lg:px-20 lg:py-20 xl:px-[80px] xl:py-[80px]">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 md:px-8 flex flex-col gap-8 md:gap-10 lg:gap-[40px]">
            <div class="w-full flex flex-col items-center gap-4 md:gap-[16px]">
                <h2
                    class="text-center font-playfair font-bold text-2xl sm:text-3xl md:text-[32px] lg:text-[36px] leading-[32px] sm:leading-[40px] text-[#29303D]">
                    Upcoming Events
                </h2>
                <p
                    class="max-w-full md:max-w-[672px] text-center font-inter text-base sm:text-lg md:text-[18px] lg:text-[20px] leading-6 sm:leading-7 md:leading-[24px] lg:leading-[28px] font-light text-[#29303DB2] px-2 sm:px-0">
                    Join our international events and connect with the global academic community
                </p>
            </div>

            <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                @foreach ($events as $event)
                    <article
                        class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
                        <div class="w-full h-48 sm:h-64 md:h-[288px]">
                            <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="w-full h-auto p-4 sm:p-6 flex flex-col gap-4">
                            <div class="w-full flex items-center justify-between">
                                <span
                                    class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#6699FF33] text-[#1D4ED8]">
                                    {{ $event->event_type }}
                                </span>
                                <span
                                    class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                                    {{ $event->status }}
                                </span>
                            </div>
                            <h3
                                class="font-playfair font-bold text-lg sm:text-xl md:text-[20px] leading-relaxed md:leading-[28px] text-[#29303D]">
                                {{ $event->title }}
                            </h3>
                            <p
                                class="font-inter text-sm sm:text-base md:text-[16px] leading-relaxed md:leading-[24px] text-[#29303DB2]">
                                {{ Str::limit($event->description, 100, '...') }}
                            </p>
                            <div
                                class="flex flex-col gap-2 text-xs sm:text-sm md:text-[14px] leading-relaxed md:leading-[20px] text-[#29303D99] font-inter">
                                <div class="flex items-center gap-2">
                                    <img src="{{ asset('icons/calender.svg') }}" class="w-4 h-4" alt="">
                                    {{ \Carbon\Carbon::parse($event->date)->format('F j, Y') }}
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="{{ asset('icons/clock.svg') }}" class="w-4 h-4" alt="">
                                    {{ \Carbon\Carbon::parse($event->start_time)->format('g:i A') }} -
                                    {{ \Carbon\Carbon::parse($event->end_time)->format('g:i A') }}
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="{{ asset('icons/location.svg') }}" class="w-4 h-4" alt="">
                                    {{ $event->location }}
                                </div>
                                <div class="flex items-center gap-2">
                                    <img src="{{ asset('icons/user-black.svg') }}" class="w-4 h-4" alt="">
                                    {{ $event->expected_attendees }}+ expected attendees
                                </div>
                            </div>
                            <a href="#"
                                class="mt-4 w-full h-10 rounded-[10px] border border-[#E2E4E9] flex items-center justify-center gap-2 px-4 bg-white text-[#29303D] font-medium text-sm md:text-[14px] leading-[20px] hover:hover:bg-gray-50">
                                Register Now
                                <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="w-full flex justify-center items-center py-6 md:py-8">
                <div class="flex items-center gap-3 md:gap-4">
                    @if ($events->onFirstPage())
                        <button
                            class="w-10 h-10 md:w-12 md:h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                            <img src="/icons/arrow-fix.svg" alt="Previous"
                                class="w-3 h-3 md:w-4 md:h-4 transform rotate-180 opacity-20">
                        </button>
                    @else
                        <a href="{{ $events->previousPageUrl() }}"
                            class="w-10 h-10 md:w-12 md:h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                            <img src="/icons/arrow-fix.svg" alt="Previous"
                                class="w-3 h-3 md:w-4 md:h-4 transform rotate-180">
                        </a>
                    @endif

                    <div class="flex items-center gap-2 md:gap-4 bg-[#F3F4F6] rounded-full p-1 md:p-2">
                        @foreach ($events->getUrlRange(1, $events->lastPage()) as $page => $url)
                            <a href="{{ $url }}"
                                class="w-7 h-7 md:w-9 md:h-9 {{ $events->currentPage() == $page ? 'bg-[#1D4ED8] text-white' : 'text-[#1D4ED8]' }} rounded-full flex justify-center items-center text-xs md:text-sm">
                                {{ $page }}
                            </a>
                        @endforeach
                    </div>

                    @if ($events->hasMorePages())
                        <a href="{{ $events->nextPageUrl() }}"
                            class="w-10 h-10 md:w-12 md:h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                            <img src="/icons/arrow-fix.svg" alt="Next" class="w-3 h-3 md:w-4 md:h-4">
                        </a>
                    @else
                        <button
                            class="w-10 h-10 md:w-12 md:h-12 bg-[#F3F4F6] rounded-full flex justify-center items-center">
                            <img src="/icons/arrow-fix.svg" alt="Next" class="w-3 h-3 md:w-4 md:h-4 opacity-20">
                        </button>
                    @endif
                </div>
            </div>

            <div
                class="w-full max-w-[1216px] h-auto md:h-[264px] mx-auto bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-2xl md:rounded-[24px] p-6 md:p-8 lg:p-[48px] flex flex-col justify-between items-center text-center shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px]">
                <h3
                    class="text-xl md:text-2xl lg:text-[30px] font-playfair font-bold leading-7 md:leading-8 lg:leading-[36px] text-white">
                    Don't Miss Any Events </h3>
                <p
                    class="text-base md:text-lg lg:text-[20px] font-light font-inter leading-6 md:leading-7 lg:leading-[28px] text-white opacity-90 max-w-full md:max-w-[672px] mt-2 md:mt-4 px-2 md:px-0">
                    Subscribe to our event calendar and be the first to know about
                    upcoming international activities.
                </p>

                <div class="flex flex-col sm:flex-row gap-3 md:gap-4 mt-4 md:mt-6 w-full sm:w-auto">
                    <a href="#"
                        class="w-full sm:w-[200px] md:w-[230px] h-10 md:h-[44px] font-inter font-normal px-4 md:px-[33px] py-2 md:py-[12px] rounded-[10px] border border-white/20 bg-white/10 shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px] text-white font-inter font-medium text-sm md:text-[14px] flex items-center justify-center">
                        View Full Calendar
                    </a>
                    <a href="#"
                        class="w-full sm:w-[200px] md:w-[230px] h-10 md:h-[44px] font-inter font-normal px-4 md:px-[33px] py-2 md:py-[12px] rounded-[10px] border border-white/20 bg-white/10 shadow-[0px_8px_25px_-8px_#0000FF4D] backdrop-blur-[4px] text-white font-inter font-medium text-sm md:text-[14px] flex items-center justify-center">
                        Subscribe to Updates
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
