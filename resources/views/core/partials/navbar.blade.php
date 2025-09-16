<nav
    class="w-full h-20 flex justify-between items-center bg-[#FFFFFFF2] border-b px-4 md:px-8 lg:px-28 sticky top-0 z-50">

    <div class="flex items-center space-x-4">
        <img src="{{ asset('/images/ub.png') }}" alt="Logo UB" class="h-8 md:h-10">
        <img src="{{ asset('/icons/gub-nav.svg') }}" alt="Logo Gub" class="h-6 md:h-8">
    </div>

    <div class="hidden lg:flex items-center space-x-6 xl:space-x-8">
        <a href="/"
            class="{{ request()->is('/') ? 'font-medium text-[#29303D]' : 'font-light text-[#29303D99]' }} text-[15px] leading-[24px] tracking-normal hover:text-[#29303D] transition-colors">Home</a>
        <a href="/about"
            class="{{ request()->is('about') ? 'font-medium text-[#29303D]' : 'font-light text-[#29303D99]' }} text-[15px] leading-[24px] tracking-normal hover:text-[#29303D] transition-colors">About</a>
        <a href="/news"
            class="{{ request()->is('news') ? 'font-medium text-[#29303D]' : 'font-light text-[#29303D99]' }} text-[15px] leading-[24px] tracking-normal hover:text-[#29303D] transition-colors">News</a>
        <a href="/event"
            class="{{ request()->is('event') ? 'font-medium text-[#29303D]' : 'font-light text-[#29303D99]' }} text-[15px] leading-[24px] tracking-normal hover:text-[#29303D] transition-colors">Event</a>
        <a href="/study"
            class="{{ request()->is('study') ? 'font-medium text-[#29303D]' : 'font-light text-[#29303D99]' }} text-[15px] leading-[24px] tracking-normal hover:text-[#29303D] transition-colors">Study
            in UB</a>
        <a href="/partner"
            class="{{ request()->is('partner') ? 'font-medium text-[#29303D]' : 'font-light text-[#29303D99]' }} text-[15px] leading-[24px] tracking-normal hover:text-[#29303D] transition-colors">Partner</a>
        <a href="/gallery"
            class="{{ request()->is('gallery') ? 'font-medium text-[#29303D]' : 'font-light text-[#29303D99]' }} text-[15px] leading-[24px] tracking-normal hover:text-[#29303D] transition-colors">Gallery</a>
    </div>


    <div class="flex items-center space-x-4">
        <button
            class="bg-[#0000FF] text-white py-2 px-3 md:px-4 rounded-[10px] w-[82px] md:w-[98px] h-[36px] flex items-center justify-between gap-[6px] md:gap-[8px]">
            <img src="{{ asset('icons/globe.svg') }}" alt="Globe Icon" class="w-4 h-4 md:w-5 md:h-5">
            <span
                class="font-medium text-[12px] md:text-[14px] leading-[24px] tracking-normal text-center flex-1">Eng</span>
            <img src="{{ asset('icons/arrow-down.svg') }}" alt="Arrow Down Icon">
        </button>

        <button id="mobile-menu-button" class="lg:hidden flex flex-col justify-center items-center w-8 h-8 space-y-1">
            <span class="block w-6 h-0.5 bg-[#29303D] transition-all duration-300"></span>
            <span class="block w-6 h-0.5 bg-[#29303D] transition-all duration-300"></span>
            <span class="block w-6 h-0.5 bg-[#29303D] transition-all duration-300"></span>
        </button>
    </div>

    <div id="mobile-menu"
        class="absolute top-20 left-0 right-0 bg-white border-b shadow-lg transform -translate-y-full opacity-0 invisible transition-all duration-300 lg:hidden z-50">
        <div class="flex flex-col space-y-4 p-6">
            <a href="/"
                class="text-[#29303D] font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">Home</a>
            <a href="/about"
                class="text-[#29303D] font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">About</a>
            <a href="/news"
                class="text-[#29303D] font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">News</a>
            <a href="/event"
                class="text-[#29303D] font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">Event</a>
            <a href="/study"
                class="text-[#29303D] font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">Study
                in UB</a>
            <a href="/partner"
                class="text-[#29303D] font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">Partner</a>
            <a href="/gallery"
                class="text-[#29303D] font-medium text-[16px] text-center leading-[24px] tracking-normal hover:text-[#0000FF] transition-colors py-2">Gallery</a>
        </div>
    </div>
</nav>
