@extends('core.app')

@section('title', 'Detail Event Page')

@section('content')

    <div class="bg-[#F0F2F4] w-full h-[80px] flex items-center px-4 md:px-8 lg:px-[112px]">
        <div class="flex items-center space-x-4">
            <div class="w-[16px] h-[16px]">
                <img src="/icons/home.svg" alt="Home Icon" class="w-full h-full">
            </div>
            <span class="text-[#29303D] text-[14px] font-light">Home</span>
            <div class="w-[16px] h-[16px]">
                <img src="/icons/arrow-right-chevron.svg" alt="Right Arrow" class="w-full h-full">
            </div>
        </div>
        <div class="flex items-center space-x-4 ml-4">
            <span class="text-[#29303D] text-[14px] font-light">Event</span>
        </div>
    </div>

    <section
        class="lg:max-w-6xl flex-col lg:flex-row items-center align-middle mx-auto py-10 lg:pt-20 lg:pb-16 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-8 items-start w-full justify-between gap-x-10">
            <div class="lg:w-5/12 w-full">
                <img src=" {{ asset('images/poster.jpg') }}" class="w-full rounded-xl h-auto" alt="poster">
            </div>
            <div class="lg:w-7/12 gap-4 w-full justify-between flex h-auto flex-col">
                <div class="">
                    <span
                        class="py-1 px-4 text-sm text-blue-700 font-inter mb-4 w-fit block bg-blue-50 font-normal rounded-full">Education
                        Fair</span>
                    <h1 class="font-bold text-3xl mb-4 font-playfair">International Education Fair 2024</h1>
                    <p class="font-inter max-w-xl text-neutral-500 leading-6">Join us at the International Education
                        Fair 2024 to meet representatives from leading universities around the world. Discover study
                        abroad opportunities, explore scholarship options, and gain valuable insights into
                        international programs, admissions processes, and career pathways. This is your chance to
                        connect directly with global education experts and plan your academic future with confidence
                    </p>
                    <div class="flex flex-col gap-1 text-neutral-500 my-4">
                        <span class="flex items-center align-middle gap-2"><img src="{{ asset('icons/calender.svg') }}"
                                alt="calendrr">Thursday, February 15,
                            2024</span>
                        <span class="flex items-center align-middle gap-2"><img src="{{ asset('icons/clock.svg') }}"
                                alt="clock">09:00 - 17:00</span>
                        <span class="flex items-center align-middle gap-2"><img src="{{ asset('icons/location.svg') }}"
                                alt="location">UB Convention Center</span>
                        <span class="flex items-center align-middle text-neutral-500 gap-2"><img
                                src="{{ asset('icons/user-black.svg') }}" alt="people">500+ Expected
                            Attendance</span>
                    </div>
                    <a
                        class="inline-block bg-white text-neutral-800 border border-neutral-200 shadow-[0px_4px_20px_-2px_#29303D1A] font-inter w-fit py-3 font-medium px-8 rounded-xl mb-4">Register
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

        <!-- Cards -->
        <div class="w-full grid grid-cols-1 py-8 lg:py-16 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Card 1 -->
            <article
                class="w-full bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden flex flex-col">

                <!-- Top image -->
                <div class="w-full h-56 sm:h-64">
                    <img src="{{ asset('images/conference.jpg') }}" alt="International Education Fair 2024"
                        class="w-full h-full object-cover">
                </div>

                <!-- Bottom content -->
                <div class="flex flex-col flex-1 p-6 gap-4">
                    <!-- badges -->
                    <div class="flex items-center justify-between">
                        <span
                            class="inline-flex items-center rounded-full px-3 py-1 text-xs font-medium bg-[#DCFCE7] text-[#15803D]">
                            Education Fair
                        </span>
                        <span
                            class="inline-flex items-center rounded-full px-3 py-1 text-xs font-medium bg-[#DCFCE7] text-[#15803D]">
                            Upcoming
                        </span>
                    </div>

                    <!-- title -->
                    <h3 class="font-playfair font-bold text-lg sm:text-xl text-[#29303D]">
                        International Education Fair 2024
                    </h3>

                    <!-- description -->
                    <p class="font-inter line-clamp-2 text-sm sm:text-base text-[#29303DB2]">
                        Meet representatives from top universities worldwide and explore study abroad
                    </p>

                    <!-- meta -->
                    <div class="flex flex-col gap-2 text-sm text-[#29303D99] font-inter">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('icons/calender.svg') }}" class="w-4 h-4" alt="">
                            Thursday, February 15, 2024
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('icons/clock.svg') }}" class="w-4 h-4" alt="">
                            09:00 - 17:00
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('icons/location.svg') }}" class="w-4 h-4" alt="">
                            UB Convention Center
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('icons/user-black.svg') }}" class="w-4 h-4" alt="">
                            500+ expected attendees
                        </div>
                    </div>

                    <!-- CTA -->
                    <a href="#"
                        class="mt-auto w-full h-10 rounded-lg border border-[#E2E4E9] flex items-center justify-center gap-2 px-4 bg-white text-[#29303D] font-medium text-sm">
                        Register Now
                        <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                    </a>
                </div>
            </article>

            <!-- Card 2 -->
            <article
                class="w-full bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden flex flex-col">

                <!-- Top image -->
                <div class="w-full h-56 sm:h-64">
                    <img src="{{ asset('images/present.jpg') }}" alt="Global Research Symposium"
                        class="w-full h-full object-cover">
                </div>

                <!-- Bottom content -->
                <div class="flex flex-col flex-1 p-6 gap-4">
                    <!-- badges -->
                    <div class="flex items-center justify-between">
                        <span
                            class="inline-flex items-center rounded-full px-3 py-1 text-xs font-medium bg-[#EDE9FE] text-[#6D28D9]">
                            Symposium
                        </span>
                        <span
                            class="inline-flex items-center rounded-full px-3 py-1 text-xs font-medium bg-[#DCFCE7] text-[#15803D]">
                            Upcoming
                        </span>
                    </div>

                    <!-- title -->
                    <h3 class="font-playfair font-bold text-lg sm:text-xl text-[#29303D]">
                        Global Research Symposium
                    </h3>

                    <!-- description -->
                    <p class="font-inter line-clamp-2 text-sm sm:text-base text-[#29303DB2]">
                        Leading researchers present cutting-edge findings in sustainability and innovation
                    </p>

                    <!-- meta -->
                    <div class="flex flex-col gap-2 text-sm text-[#29303D99] font-inter">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('icons/calender.svg') }}" class="w-4 h-4" alt="">
                            Thursday, February 22, 2024
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('icons/clock.svg') }}" class="w-4 h-4" alt="">
                            08:30 - 16:00
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('icons/location.svg') }}" class="w-4 h-4" alt="">
                            Academic Hall UB
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('icons/user-black.svg') }}" class="w-4 h-4" alt="">
                            300+ expected attendees
                        </div>
                    </div>

                    <!-- CTA -->
                    <a href="#"
                        class="mt-auto w-full h-10 rounded-lg border border-[#E2E4E9] flex items-center justify-center gap-2 px-4 bg-white text-[#29303D] font-medium text-sm">
                        Register Now
                        <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                    </a>
                </div>
            </article>

            <!-- Card 3 -->
            <article
                class="w-full bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden flex flex-col">

                <!-- Top image -->
                <div class="w-full h-56 sm:h-64">
                    <img src="{{ asset('images/festival.jpg') }}" alt="International Cultural Festival"
                        class="w-full h-full object-cover">
                </div>

                <!-- Bottom content -->
                <div class="flex flex-col flex-1 p-6 gap-4">
                    <!-- badges -->
                    <div class="flex items-center justify-between">
                        <span
                            class="inline-flex items-center rounded-full px-3 py-1 text-xs font-medium bg-[#FCE7F3] text-[#DB2777]">
                            Cultural Event
                        </span>
                        <span
                            class="inline-flex items-center rounded-full px-3 py-1 text-xs font-medium bg-[#DCFCE7] text-[#15803D]">
                            Upcoming
                        </span>
                    </div>

                    <!-- title -->
                    <h3 class="font-playfair font-bold text-lg sm:text-xl text-[#29303D]">
                        International Cultural Festival
                    </h3>

                    <!-- description -->
                    <p class="font-inter line-clamp-2 text-sm sm:text-base text-[#29303DB2]">
                        Celebrate diversity with cultural performances, food, and traditions from
                    </p>

                    <!-- meta -->
                    <div class="flex flex-col gap-2 text-sm text-[#29303D99] font-inter">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('icons/calender.svg') }}" class="w-4 h-4" alt="">
                            Friday, March 1, 2024
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('icons/clock.svg') }}" class="w-4 h-4" alt="">
                            10:00 - 22:00
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('icons/location.svg') }}" class="w-4 h-4" alt="">
                            UB Campus Plaza
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('icons/user-black.svg') }}" class="w-4 h-4" alt="">
                            1000+ expected attendees
                        </div>
                    </div>

                    <!-- CTA -->
                    <a href="#"
                        class="mt-auto w-full h-10 rounded-lg border border-[#E2E4E9] flex items-center justify-center gap-2 px-4 bg-white text-[#29303D] font-medium text-sm">
                        Register Now
                        <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                    </a>
                </div>
            </article>

        </div>
    </section>

@endsection
