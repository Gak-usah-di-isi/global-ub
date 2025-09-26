@extends('core.app')

@section('title', 'Detail Event Page')

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
            <a href="/event"
                class="text-[#29303D] text-xs md:text-[14px] font-light hover:text-[#0000FF] transition-colors">
                Events
            </a>
            <div class="w-[16px] h-[16px]">
                <div class="w-[14px] h-[14px]">
                    <img src="/icons/arrow-right-chevron.svg" alt="Right Arrow" class="w-full h-full">
                </div>
            </div>
        </div>
        <div class="flex items-center space-x-4 ml-4">
            <span class="font-medium text-[#29303D] text-xs md:text-[14px] font-light transition-colors">
                {{ $event->title }}
            </span>
        </div>
    </div>

    <section
        class="lg:max-w-6xl flex-col lg:flex-row items-center align-middle mx-auto py-10 lg:pt-20 lg:pb-16 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-8 items-start w-full justify-between gap-x-10">
            <div class="lg:w-5/12 w-full">
                <img src=" {{ asset('storage/' . $event->image) }}" class="w-full rounded-xl h-auto" alt="poster">
            </div>
            <div class="lg:w-7/12 gap-4 w-full justify-between flex h-auto flex-col">
                <div class="">
                    <span
                        class="py-1 px-4 text-sm text-blue-700 font-inter mb-4 w-fit block bg-blue-50 font-normal rounded-full">{{ $event->event_type }}</span>
                    <h1 class="font-bold text-3xl mb-4 font-playfair">{{ $event->title }}</h1>
                    <p class="font-inter max-w-xl text-neutral-500 leading-6">
                        {{ $event->description }}
                    </p>
                    <div class="flex flex-col gap-1 text-neutral-500 my-4">
                        <span class="flex items-center align-middle gap-2"><img src="{{ asset('icons/calender.svg') }}"
                                alt="calender">{{ \Carbon\Carbon::parse($event->event_date)->format('F j, Y') }}</span>
                        <span class="flex items-center align-middle gap-2"><img src="{{ asset('icons/clock.svg') }}"
                                alt="clock">{{ \Carbon\Carbon::parse($event->start_time)->format('g:i A') }} -
                            {{ \Carbon\Carbon::parse($event->end_time)->format('g:i A') }}</span>
                        <span class="flex items-center align-middle gap-2"><img src="{{ asset('icons/location.svg') }}"
                                alt="location">{{ $event->location }}</span>
                        <span class="flex items-center align-middle text-neutral-500 gap-2"><img
                                src="{{ asset('icons/user-black.svg') }}" alt="people">{{ $event->expected_attendees }}
                            Expected
                            Attendance</span>
                    </div>
                    <a
                        class="inline-block text-neutral-800 border border-neutral-200 font-inter w-fit py-3 font-medium px-8 rounded-xl mb-4 hover:bg-gray-50">Register
                        Now</a>
                </div>
                <div class="flex items-end align-bottom gap-x-2">
                    <div
                        class="flex items-center align-middle justify-center size-10 rounded-full text-neutral-600 bg-neutral-200 p-2">
                        <img src="{{ asset('icons/fb.svg') }}" alt="facebook">
                    </div>
                    <div
                        class="flex items-center align-middle justify-center size-10 rounded-full text-neutral-600 bg-neutral-200 p-2">
                        <img src="{{ asset('icons/ig.svg') }}" alt="instagram">
                    </div>
                    <div
                        class="flex items-center align-middle justify-center size-10 rounded-full text-neutral-600 bg-neutral-200 p-2">
                        <img src="{{ asset('icons/tweet.svg') }}" alt="twitter">
                    </div>
                    <div
                        class="flex items-center align-middle justify-center size-10 rounded-full text-neutral-600 bg-neutral-200 p-2">
                        <img src="{{ asset('icons/link.svg') }}" alt="url">
                    </div>
                </div>
            </div>

        </div>

    </section>
    <section class="lg:max-w-6xl flex flex-col mx-auto px-4 sm:px-6 lg:px-8 mb-8">
        <h1 class="font-bold text-3xl font-playfair">Events</h1>

        <div class="w-full grid grid-cols-1 py-8 lg:py-16 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($relatedEvents as $event)
                <div
                    class="w-full bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden flex flex-col">

                    <div class="w-full h-56 sm:h-64">
                        <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}"
                            class="w-full h-full object-cover">
                    </div>

                    <div class="flex flex-col flex-1 p-6 gap-4">
                        <div class="flex items-center justify-between">
                            <span
                                class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#6699FF33] text-[#1D4ED8]">
                                {{ $event->event_type }}
                            </span>
                            <span
                                class="inline-flex items-center rounded-full px-3 py-1 text-xs font-medium bg-[#DCFCE7] text-[#15803D]">
                                {{ $event->status }}
                            </span>
                        </div>

                        <h3 class="font-playfair font-bold text-lg sm:text-xl text-[#29303D]">
                            {{ $event->title }}
                        </h3>

                        <p class="font-inter line-clamp-2 text-sm sm:text-base text-[#29303DB2]">
                            {{ Str::limit($event->description, 100, '...') }}
                        </p>

                        <div class="flex flex-col gap-2 text-sm text-[#29303D99] font-inter">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('icons/calender.svg') }}" class="w-4 h-4" alt="">
                                {{ \Carbon\Carbon::parse($event->event_date)->format('F j, Y') }}
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
                                {{ $event->expected_attendees }} expected attendees
                            </div>
                        </div>

                        <a href="{{ route('event.show', $event->slug) }}"
                            class="mt-auto w-full h-10 rounded-lg border border-[#E2E4E9] flex items-center justify-center gap-2 px-4 text-[#29303D] font-medium text-sm hover:bg-gray-50">
                            Learn More
                            <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection
