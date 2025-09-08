@extends('core.app')

@section('title', 'Testimonial Page')

@section('content')

    <div
        class="bg-[#F0F2F4] w-full min-h-[60px] md:min-h-[80px] flex flex-wrap items-center px-4 sm:px-6 md:px-8 lg:px-28 py-2 md:py-0">
        <div class="flex items-center space-x-2 sm:space-x-4">
            <div class="w-[16px] h-[16px]">
                <img src="{{ asset('icons/home.svg') }}" alt="Home Icon" class="w-full h-full">
            </div>
            <span class="text-[#29303D] text-[13px] sm:text-[14px] font-medium">Home</span>
            <div class="w-[16px] h-[16px]">
                <img src="{{ asset('icons/arrow-right-chevron.svg') }}" alt="Right Arrow" class="w-full h-full">
            </div>
        </div>
        <div class="flex items-center space-x-2 sm:space-x-4 ml-2 sm:ml-4">
            <span class="text-[#29303D] text-[13px] sm:text-[14px] font-medium">Profiles & Testimonials</span>
        </div>
    </div>

    <section
        class="w-full h-auto bg-gradient-to-b from-[#F9FAFB] to-[#F0F2F4] px-4 sm:px-6 md:px-8 lg:px-[80px] py-10 md:py-16 lg:py-[64px]">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 md:px-8 flex flex-col gap-6 md:gap-8 lg:gap-[40px]">

            <div class="w-full flex flex-col items-center gap-4">
                <h2
                    class="w-full text-center font-playfair font-bold text-2xl md:text-3xl lg:text-[36px] leading-[36px] md:leading-[40px] text-[#29303D]">
                    Profiles & Testimonials
                </h2>
                <p
                    class="text-center font-inter font-light text-sm sm:text-base md:text-lg lg:text-xl leading-6 md:leading-7 lg:leading-[28px] text-[#29303DB2]">
                    Discover inspiring stories from our alumni, international partners, and global <br
                        class="hidden sm:block" /> researchers who are making a difference worldwide
                </p>
            </div>

            <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

                <article
                    class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_rgba(41,48,61,0.10)] p-4 sm:p-6 md:p-6">
                    <header class="flex items-center gap-4">
                        <div class="relative">
                            <img src="{{ asset('images/Prof_Michael.png') }}" alt="Profile photo"
                                class="w-16 h-16 rounded-full object-cover" />
                            <img src="{{ asset('icons/star_testi.svg') }}" alt="Badge icon"
                                class="w-[24px] h-[24px] absolute -mt-[20px] right-0" />
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-[#1C2B39] font-playfair">Prof. Michael Johnson</h3>
                            <p class="text-sm font-normal text-[#29303D] opacity-[0.7] font-inter">Director of
                                International Relations</p>
                            <p class="text-sm font-medium text-[#0000FF] font-inter">Oxford University</p>
                        </div>
                    </header>

                    <section class="mt-4">
                        <p
                            class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                            International Partner</p>
                    </section>

                    <blockquote class="mt-4">
                        <img src="{{ asset('icons/quote.svg') }}" alt="Quote icon"
                            class="w-[28px] h-[28px] sm:w-[33px] sm:h-[33px] mb-2" />
                        <p class="text-[#29303D] opacity-[0.8] text-sm sm:text-base leading-relaxed font-inter">
                            “Our collaboration with UB has been exceptional. Their students bring fresh perspectives
                            and innovative solutions to our joint research projects.”</p>
                    </blockquote>

                    <section class="mt-4 space-y-2 text-xs sm:text-sm text-gray-500 font-inter">
                        <p class="flex items-center gap-2">
                            <img src="{{ asset('icons/location.svg') }}" alt="Location icon" class="w-4 h-4" />
                            Oxford, UK
                        </p>
                        <p class="flex items-center gap-2">
                            <img src="{{ asset('icons/education.svg') }}" alt="Calendar icon" class="w-4 h-4" />
                            Partnership since 2019
                        </p>
                    </section>

                    <section class="mt-6">
                        <h4 class="text-base font-semibold font-playfair text-[#29303D]">Key Achievements</h4>
                        <ul class="mt-2 space-y-1 text-xs sm:text-sm text-gray-600 font-inter list-none">
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                <p class="text-[#29303D] opacity-[0.7]">50+ joint research projects</p>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                <p class="text-[#29303D] opacity-[0.7]">Student exchange programs</p>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                <p class="text-[#29303D] opacity-[0.7]">International conferences</p>
                            </li>
                        </ul>
                    </section>

                    <footer class="mt-6">
                        <button
                            class="w-full flex items-center justify-center gap-2 py-2 border border-gray-200 rounded-lg font-inter text-sm font-medium text-[#29303D] hover:bg-gray-50">
                            View Full Story
                            <img src="{{ asset('images/play.svg') }}" alt="Arrow icon" class="w-4 h-4" />
                        </button>
                    </footer>
                </article>

                <article
                    class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_rgba(41,48,61,0.10)] p-4 sm:p-6 md:p-6">
                    <header class="flex items-center gap-4">
                        <div class="relative">
                            <img src="{{ asset('images/Prof_Michael.png') }}" alt="Profile photo"
                                class="w-16 h-16 rounded-full object-cover" />
                            <img src="{{ asset('icons/star_testi.svg') }}" alt="Badge icon"
                                class="w-[24px] h-[24px] absolute -mt-[20px] right-0" />
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-[#1C2B39] font-playfair">Prof. Michael Johnson</h3>
                            <p class="text-sm font-normal text-[#29303D] opacity-[0.7] font-inter">Director of
                                International Relations</p>
                            <p class="text-sm font-medium text-[#0000FF] font-inter">Oxford University</p>
                        </div>
                    </header>

                    <section class="mt-4">
                        <p
                            class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                            International Partner</p>
                    </section>

                    <blockquote class="mt-4">
                        <img src="{{ asset('icons/quote.svg') }}" alt="Quote icon"
                            class="w-[28px] h-[28px] sm:w-[33px] sm:h-[33px] mb-2" />
                        <p class="text-[#29303D] opacity-[0.8] text-sm sm:text-base leading-relaxed font-inter">
                            “Our collaboration with UB has been exceptional. Their students bring fresh perspectives
                            and innovative solutions to our joint research projects.”</p>
                    </blockquote>

                    <section class="mt-4 space-y-2 text-xs sm:text-sm text-gray-500 font-inter">
                        <p class="flex items-center gap-2">
                            <img src="{{ asset('icons/location.svg') }}" alt="Location icon" class="w-4 h-4" />
                            Oxford, UK
                        </p>
                        <p class="flex items-center gap-2">
                            <img src="{{ asset('icons/education.svg') }}" alt="Calendar icon" class="w-4 h-4" />
                            Partnership since 2019
                        </p>
                    </section>

                    <section class="mt-6">
                        <h4 class="text-base font-semibold font-playfair text-[#29303D]">Key Achievements</h4>
                        <ul class="mt-2 space-y-1 text-xs sm:text-sm text-gray-600 font-inter list-none">
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                <p class="text-[#29303D] opacity-[0.7]">50+ joint research projects</p>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                <p class="text-[#29303D] opacity-[0.7]">Student exchange programs</p>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                <p class="text-[#29303D] opacity-[0.7]">International conferences</p>
                            </li>
                        </ul>
                    </section>

                    <footer class="mt-6">
                        <button
                            class="w-full flex items-center justify-center gap-2 py-2 border border-gray-200 rounded-lg font-inter text-sm font-medium text-[#29303D] hover:bg-gray-50">
                            View Full Story
                            <img src="{{ asset('images/play.svg') }}" alt="Arrow icon" class="w-4 h-4" />
                        </button>
                    </footer>
                </article>

                <article
                    class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_rgba(41,48,61,0.10)] p-4 sm:p-6 md:p-6">
                    <header class="flex items-center gap-4">
                        <div class="relative">
                            <img src="{{ asset('images/Prof_Michael.png') }}" alt="Profile photo"
                                class="w-16 h-16 rounded-full object-cover" />
                            <img src="{{ asset('icons/star_testi.svg') }}" alt="Badge icon"
                                class="w-[24px] h-[24px] absolute -mt-[20px] right-0" />
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-[#1C2B39] font-playfair">Prof. Michael Johnson</h3>
                            <p class="text-sm font-normal text-[#29303D] opacity-[0.7] font-inter">Director of
                                International Relations</p>
                            <p class="text-sm font-medium text-[#0000FF] font-inter">Oxford University</p>
                        </div>
                    </header>

                    <section class="mt-4">
                        <p
                            class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                            International Partner</p>
                    </section>

                    <blockquote class="mt-4">
                        <img src="{{ asset('icons/quote.svg') }}" alt="Quote icon"
                            class="w-[28px] h-[28px] sm:w-[33px] sm:h-[33px] mb-2" />
                        <p class="text-[#29303D] opacity-[0.8] text-sm sm:text-base leading-relaxed font-inter">
                            “Our collaboration with UB has been exceptional. Their students bring fresh perspectives
                            and innovative solutions to our joint research projects.”</p>
                    </blockquote>

                    <section class="mt-4 space-y-2 text-xs sm:text-sm text-gray-500 font-inter">
                        <p class="flex items-center gap-2">
                            <img src="{{ asset('icons/location.svg') }}" alt="Location icon" class="w-4 h-4" />
                            Oxford, UK
                        </p>
                        <p class="flex items-center gap-2">
                            <img src="{{ asset('icons/education.svg') }}" alt="Calendar icon" class="w-4 h-4" />
                            Partnership since 2019
                        </p>
                    </section>

                    <section class="mt-6">
                        <h4 class="text-base font-semibold font-playfair text-[#29303D]">Key Achievements</h4>
                        <ul class="mt-2 space-y-1 text-xs sm:text-sm text-gray-600 font-inter list-none">
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                <p class="text-[#29303D] opacity-[0.7]">50+ joint research projects</p>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                <p class="text-[#29303D] opacity-[0.7]">Student exchange programs</p>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                <p class="text-[#29303D] opacity-[0.7]">International conferences</p>
                            </li>
                        </ul>
                    </section>

                    <footer class="mt-6">
                        <button
                            class="w-full flex items-center justify-center gap-2 py-2 border border-gray-200 rounded-lg font-inter text-sm font-medium text-[#29303D] hover:bg-gray-50">
                            View Full Story
                            <img src="{{ asset('images/play.svg') }}" alt="Arrow icon" class="w-4 h-4" />
                        </button>
                    </footer>
                </article>

                <article
                    class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_rgba(41,48,61,0.10)] p-4 sm:p-6 md:p-6">
                    <header class="flex items-center gap-4">
                        <div class="relative">
                            <img src="{{ asset('images/Prof_Michael.png') }}" alt="Profile photo"
                                class="w-16 h-16 rounded-full object-cover" />
                            <img src="{{ asset('icons/star_testi.svg') }}" alt="Badge icon"
                                class="w-[24px] h-[24px] absolute -mt-[20px] right-0" />
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-[#1C2B39] font-playfair">Prof. Michael Johnson</h3>
                            <p class="text-sm font-normal text-[#29303D] opacity-[0.7] font-inter">Director of
                                International Relations</p>
                            <p class="text-sm font-medium text-[#0000FF] font-inter">Oxford University</p>
                        </div>
                    </header>

                    <section class="mt-4">
                        <p
                            class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                            International Partner</p>
                    </section>

                    <blockquote class="mt-4">
                        <img src="{{ asset('icons/quote.svg') }}" alt="Quote icon"
                            class="w-[28px] h-[28px] sm:w-[33px] sm:h-[33px] mb-2" />
                        <p class="text-[#29303D] opacity-[0.8] text-sm sm:text-base leading-relaxed font-inter">
                            “Our collaboration with UB has been exceptional. Their students bring fresh perspectives
                            and innovative solutions to our joint research projects.”</p>
                    </blockquote>

                    <section class="mt-4 space-y-2 text-xs sm:text-sm text-gray-500 font-inter">
                        <p class="flex items-center gap-2">
                            <img src="{{ asset('icons/location.svg') }}" alt="Location icon" class="w-4 h-4" />
                            Oxford, UK
                        </p>
                        <p class="flex items-center gap-2">
                            <img src="{{ asset('icons/education.svg') }}" alt="Calendar icon" class="w-4 h-4" />
                            Partnership since 2019
                        </p>
                    </section>

                    <section class="mt-6">
                        <h4 class="text-base font-semibold font-playfair text-[#29303D]">Key Achievements</h4>
                        <ul class="mt-2 space-y-1 text-xs sm:text-sm text-gray-600 font-inter list-none">
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                <p class="text-[#29303D] opacity-[0.7]">50+ joint research projects</p>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                <p class="text-[#29303D] opacity-[0.7]">Student exchange programs</p>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                <p class="text-[#29303D] opacity-[0.7]">International conferences</p>
                            </li>
                        </ul>
                    </section>

                    <footer class="mt-6">
                        <button
                            class="w-full flex items-center justify-center gap-2 py-2 border border-gray-200 rounded-lg font-inter text-sm font-medium text-[#29303D] hover:bg-gray-50">
                            View Full Story
                            <img src="{{ asset('images/play.svg') }}" alt="Arrow icon" class="w-4 h-4" />
                        </button>
                    </footer>
                </article>

                <article
                    class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_rgba(41,48,61,0.10)] p-4 sm:p-6 md:p-6">
                    <header class="flex items-center gap-4">
                        <div class="relative">
                            <img src="{{ asset('images/Prof_Michael.png') }}" alt="Profile photo"
                                class="w-16 h-16 rounded-full object-cover" />
                            <img src="{{ asset('icons/star_testi.svg') }}" alt="Badge icon"
                                class="w-[24px] h-[24px] absolute -mt-[20px] right-0" />
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-[#1C2B39] font-playfair">Prof. Michael Johnson</h3>
                            <p class="text-sm font-normal text-[#29303D] opacity-[0.7] font-inter">Director of
                                International Relations</p>
                            <p class="text-sm font-medium text-[#0000FF] font-inter">Oxford University</p>
                        </div>
                    </header>

                    <section class="mt-4">
                        <p
                            class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                            International Partner</p>
                    </section>

                    <blockquote class="mt-4">
                        <img src="{{ asset('icons/quote.svg') }}" alt="Quote icon"
                            class="w-[28px] h-[28px] sm:w-[33px] sm:h-[33px] mb-2" />
                        <p class="text-[#29303D] opacity-[0.8] text-sm sm:text-base leading-relaxed font-inter">
                            “Our collaboration with UB has been exceptional. Their students bring fresh perspectives
                            and innovative solutions to our joint research projects.”</p>
                    </blockquote>

                    <section class="mt-4 space-y-2 text-xs sm:text-sm text-gray-500 font-inter">
                        <p class="flex items-center gap-2">
                            <img src="{{ asset('icons/location.svg') }}" alt="Location icon" class="w-4 h-4" />
                            Oxford, UK
                        </p>
                        <p class="flex items-center gap-2">
                            <img src="{{ asset('icons/education.svg') }}" alt="Calendar icon" class="w-4 h-4" />
                            Partnership since 2019
                        </p>
                    </section>

                    <section class="mt-6">
                        <h4 class="text-base font-semibold font-playfair text-[#29303D]">Key Achievements</h4>
                        <ul class="mt-2 space-y-1 text-xs sm:text-sm text-gray-600 font-inter list-none">
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                <p class="text-[#29303D] opacity-[0.7]">50+ joint research projects</p>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                <p class="text-[#29303D] opacity-[0.7]">Student exchange programs</p>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                <p class="text-[#29303D] opacity-[0.7]">International conferences</p>
                            </li>
                        </ul>
                    </section>

                    <footer class="mt-6">
                        <button
                            class="w-full flex items-center justify-center gap-2 py-2 border border-gray-200 rounded-lg font-inter text-sm font-medium text-[#29303D] hover:bg-gray-50">
                            View Full Story
                            <img src="{{ asset('images/play.svg') }}" alt="Arrow icon" class="w-4 h-4" />
                        </button>
                    </footer>
                </article>
                <article
                    class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_rgba(41,48,61,0.10)] p-4 sm:p-6 md:p-6">
                    <header class="flex items-center gap-4">
                        <div class="relative">
                            <img src="{{ asset('images/Prof_Michael.png') }}" alt="Profile photo"
                                class="w-16 h-16 rounded-full object-cover" />
                            <img src="{{ asset('icons/star_testi.svg') }}" alt="Badge icon"
                                class="w-[24px] h-[24px] absolute -mt-[20px] right-0" />
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-[#1C2B39] font-playfair">Prof. Michael Johnson</h3>
                            <p class="text-sm font-normal text-[#29303D] opacity-[0.7] font-inter">Director of
                                International Relations</p>
                            <p class="text-sm font-medium text-[#0000FF] font-inter">Oxford University</p>
                        </div>
                    </header>

                    <section class="mt-4">
                        <p
                            class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#DCFCE7] text-[#15803D]">
                            International Partner</p>
                    </section>

                    <blockquote class="mt-4">
                        <img src="{{ asset('icons/quote.svg') }}" alt="Quote icon"
                            class="w-[28px] h-[28px] sm:w-[33px] sm:h-[33px] mb-2" />
                        <p class="text-[#29303D] opacity-[0.8] text-sm sm:text-base leading-relaxed font-inter">
                            “Our collaboration with UB has been exceptional. Their students bring fresh perspectives
                            and innovative solutions to our joint research projects.”</p>
                    </blockquote>

                    <section class="mt-4 space-y-2 text-xs sm:text-sm text-gray-500 font-inter">
                        <p class="flex items-center gap-2">
                            <img src="{{ asset('icons/location.svg') }}" alt="Location icon" class="w-4 h-4" />
                            Oxford, UK
                        </p>
                        <p class="flex items-center gap-2">
                            <img src="{{ asset('icons/education.svg') }}" alt="Calendar icon" class="w-4 h-4" />
                            Partnership since 2019
                        </p>
                    </section>

                    <section class="mt-6">
                        <h4 class="text-base font-semibold font-playfair text-[#29303D]">Key Achievements</h4>
                        <ul class="mt-2 space-y-1 text-xs sm:text-sm text-gray-600 font-inter list-none">
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                <p class="text-[#29303D] opacity-[0.7]">50+ joint research projects</p>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                <p class="text-[#29303D] opacity-[0.7]">Student exchange programs</p>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-[#1D4ED8]"></span>
                                <p class="text-[#29303D] opacity-[0.7]">International conferences</p>
                            </li>
                        </ul>
                    </section>

                    <footer class="mt-6">
                        <button
                            class="w-full flex items-center justify-center gap-2 py-2 border border-gray-200 rounded-lg font-inter text-sm font-medium text-[#29303D] hover:bg-gray-50">
                            View Full Story
                            <img src="{{ asset('images/play.svg') }}" alt="Arrow icon" class="w-4 h-4" />
                        </button>
                    </footer>
                </article>
            </div>
            <div class="w-full flex justify-center items-center py-8">
                <div class="flex items-center gap-4">
                    <button class="w-10 h-10 md:w-12 md:h-12 bg-[#FFFFFF] rounded-full flex justify-center items-center">
                        <img src="{{ asset('icons/vector-left.svg') }}" alt="Previous" class="w-3 h-3 md:w-4 md:h-4">
                    </button>

                    <div class="flex items-center gap-2 md:gap-4 bg-[#FFFFFF] rounded-full p-1 md:p-2">
                        <button
                            class="w-7 h-7 md:w-9 md:h-9 bg-[#1D4ED8] text-white rounded-full flex justify-center items-center text-sm md:text-base">
                            1
                        </button>

                        <button
                            class="w-7 h-7 md:w-9 md:h-9 text-[#1D4ED8] flex justify-center items-center text-sm md:text-base">
                            2
                        </button>

                        <button
                            class="w-7 h-7 md:w-9 md:h-9 text-[#1D4ED8] flex justify-center items-center text-sm md:text-base">
                            3
                        </button>
                    </div>

                    <button class="w-10 h-10 md:w-12 md:h-12 bg-[#FFFFFF] rounded-full flex justify-center items-center">
                        <img src="{{ asset('icons/vector-right.svg') }}" alt="Next" class="w-3 h-3 md:w-4 md:h-4">
                    </button>
                </div>
            </div>

        </div>
    </section>

@endsection
