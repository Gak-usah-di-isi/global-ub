@extends('core.app')

@section('title', 'Merchandise')

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
                Merchandise
            </span>
        </div>
    </div>

    <section class="relative bg-black text-white z-1">
        <img src="{{ asset('/images/Merchandise.png') }}" alt="Merchandise Hero"
            class="w-full h-64 sm:h-80 md:h-96 lg:h-[530px] object-cover opacity-60">
        <div class="absolute inset-0 flex flex-col items-center px-4 text-center">
            <h1
                class="text-3xl mt-[40px] md:mt-[60px] lg:mt-[80px] sm:text-3xl md:text-4xl font-bold font-playfair mb-2 sm:mb-4 leading-10">
                Merchandise</h1>
            <p class="text-sm sm:text-base font-normal font-inter md:text-lg lg:text-xl leading-7">Made with the best
                quality materials, modern design, and great prices.</p>
        </div>
    </section>
    <main class="mx-auto px-4 sm:px-[20px] md:px-[50px] lg:px-[112px] py-6 sm:py-8 lg:py-[80px]">

        <image src="{{ asset('/images/ubMerch.svg') }}" class="sm:w-[100px] md:w-[100px] mb-16 lg:w-[125px]" alt="ub merch">
            <div class="w-full">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
                    <h3 class="text-lg sm:text-xl font-semibold font-inter text-[#29303D] leading-7">124 Products</h3>
                    <div class="flex items-center gap-3">
                        <span class="sm:text-sm md:text-lg font-semibold text-[#29303D] font-inter leading-7">Sort by</span>
                        <select
                            class="px-4 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option>All Product</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Newest</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-6 mb-8">
                    <article class="group cursor-pointer">
                        <div
                            class="relative bg-white rounded-xl overflow-hidden mb-3 border border-gray-200 hover:shadow-lg transition">
                            <span
                                class="absolute top-2 right-2 px-[10px] rounded-full text-sm font-normal leading-7 font-inter text-[#29303D] border bg-white border-[#29303D]">Totebag</span>
                            <div class="aspect-square flex items-center justify-center px-6 pb-2 pt-6 bg-[#F1F1F1]">
                                <img src="{{asset('/images/Totebag.png')}}" alt="Totebag"
                                    class="w-full h-full object-contain">
                            </div>
                        </div>
                        <h4
                            class="font-semibold text-[#29303D] mb-1 text-lg font-inter leading-7 sm:text-base group-hover:text-blue-600 transition">
                            Canvas Totebag UB BRWJY</h4>
                        <span class="flex jusify-between gap-2 w-full align-middle items-center">
                            <p class="text-[#29303D] opacity-[0.8] text-base font-normal font-inter leading-7">Rp110.000</p>
                            <span class="flex w-full gap-2 align-middle items-center justify-end">
                                <img src="{{asset('/images/shopee.png')}}" alt="Totebag" class="size-7 object-contain">
                                <img src="{{asset('/images/tokped.png')}}" alt="Totebag" class="size-10 object-contain">
                            </span>
                        </span>
                    </article>

                    <article class="group cursor-pointer">
                        <div
                            class="relative bg-white rounded-xl overflow-hidden mb-3 border border-gray-200 hover:shadow-lg transition">
                            <span
                                class="absolute top-2 right-2 px-[10px] rounded-full text-sm font-normal leading-7 font-inter text-[#29303D] border bg-white border-[#29303D]">T-Shirt</span>
                            <div class="aspect-square flex items-center justify-center px-6 pb-2 pt-6 bg-[#F1F1F1]">
                                <img src="{{asset('/images/T-Shirt_Mesin.png')}}" alt="T-Shirt_Mesin"
                                    class="w-full h-full object-contain">
                            </div>
                        </div>
                        <h4
                            class="font-semibold text-[#29303D] mb-1 text-lg font-inter leading-7 sm:text-base group-hover:text-blue-600 transition">
                            T-Shirt Mesin Universitas Brawijaya</h4>
                        <p class="text-[#29303D] opacity-[0.8] text-base font-normal font-inter leading-7">Rp110.000</p>
                    </article>

                    <article class="group cursor-pointer">
                        <div
                            class="relative bg-white rounded-xl overflow-hidden mb-3 border border-gray-200 hover:shadow-lg transition">
                            <span
                                class="absolute top-2 right-2 px-[10px] rounded-full text-sm font-normal leading-7 font-inter text-[#29303D] border bg-white border-[#29303D]">Hoodie</span>
                            <div class="aspect-square flex items-center justify-center px-6 pb-2 pt-6 bg-[#F1F1F1]">
                                <img src="{{asset('/images/Zipper_Brawijaya.png')}}" alt="Zipper_Brawijaya"
                                    class="w-full h-full object-contain">
                            </div>
                        </div>
                        <h4
                            class="font-semibold text-[#29303D] mb-1 text-lg font-inter leading-7 sm:text-base group-hover:text-blue-600 transition">
                            Hoodie Zipper Brawijaya Greatness</h4>
                        <p class="text-[#29303D] opacity-[0.8] text-base font-normal font-inter leading-7">Rp210.000</p>
                    </article>

                    <article class="group cursor-pointer">
                        <div
                            class="relative bg-white rounded-xl overflow-hidden mb-3 border border-gray-200 hover:shadow-lg transition">
                            <span
                                class="absolute top-2 right-2 px-[10px] rounded-full text-sm font-normal leading-7 font-inter text-[#29303D] border bg-white border-[#29303D]">T-Shirt</span>
                            <div class="aspect-square flex items-center justify-center px-6 pb-2 pt-6 bg-[#F1F1F1]">
                                <img src="{{asset('/images/T-Shirt_Brawijaya.png')}}" alt="T-Shirt_Brawijaya"
                                    class="w-full h-full object-contain">
                            </div>
                        </div>
                        <h4
                            class="font-semibold text-[#29303D] mb-1 text-lg font-inter leading-7 sm:text-base group-hover:text-blue-600 transition">
                            T-Shirt Brawijaya University</h4>
                        <p class="text-[#29303D] opacity-[0.8] text-base font-normal font-inter leading-7">Rp110.000</p>
                    </article>

                    <article class="group cursor-pointer">
                        <div
                            class="relative bg-white rounded-xl overflow-hidden mb-3 border border-gray-200 hover:shadow-lg transition">
                            <span
                                class="absolute top-2 right-2 px-[10px] rounded-full text-sm font-normal leading-7 font-inter text-[#29303D] border bg-white border-[#29303D]">Long
                                Sleeve</span>
                            <div class="aspect-square flex items-center justify-center px-6 pb-2 pt-6 bg-[#F1F1F1]">
                                <img src="{{asset('/images/Long_Sleeve.png')}}" alt="Long_Sleeve"
                                    class="w-full h-full object-contain">
                            </div>
                        </div>
                        <h4
                            class="font-semibold text-[#29303D] mb-1 text-lg font-inter leading-7 sm:text-base group-hover:text-blue-600 transition">
                            Long Sleeve Universitas Brawijaya</h4>
                        <p class="text-[#29303D] opacity-[0.8] text-base font-normal font-inter leading-7">Rp130.000</p>
                    </article>

                    <article class="group cursor-pointer">
                        <div
                            class="relative bg-white rounded-xl overflow-hidden mb-3 border border-gray-200 hover:shadow-lg transition">
                            <span
                                class="absolute top-2 right-2 px-[10px] rounded-full text-sm font-normal leading-7 font-inter text-[#29303D] border bg-white border-[#29303D]">Shorts</span>
                            <div class="aspect-square flex items-center justify-center px-6 pb-2 pt-6 bg-[#F1F1F1]">
                                <img src="{{asset('/images/Shorts_Brawijaya.png')}}" alt="Shorts_Brawijaya"
                                    class="w-full h-full object-contain">
                            </div>
                        </div>
                        <h4
                            class="font-semibold text-[#29303D] mb-1 text-lg font-inter leading-7 sm:text-base group-hover:text-blue-600 transition">
                            Shorts Universitas Brawijaya</h4>
                        <p class="text-[#29303D] opacity-[0.8] text-base font-normal font-inter leading-7">Rp85.000</p>
                    </article>

                    <article class="group cursor-pointer">
                        <div
                            class="relative bg-white rounded-xl overflow-hidden mb-3 border border-gray-200 hover:shadow-lg transition">
                            <span
                                class="absolute top-2 right-2 px-[10px] rounded-full text-sm font-normal leading-7 font-inter text-[#29303D] border bg-white border-[#29303D]">Polo</span>
                            <div class="aspect-square flex items-center justify-center px-6 pb-2 pt-6 bg-[#F1F1F1]">
                                <img src="{{asset('/images/Polo_Brawijaya.png')}}" alt="Polo_Brawijaya"
                                    class="w-full h-full object-contain">
                            </div>
                        </div>
                        <h4
                            class="font-semibold text-[#29303D] mb-1 text-lg font-inter leading-7 sm:text-base group-hover:text-blue-600 transition">
                            Polo Brawijaya University 1963</h4>
                        <p class="text-[#29303D] opacity-[0.8] text-base font-normal font-inter leading-7">Rp150.000</p>
                    </article>

                    <article class="group cursor-pointer">
                        <div
                            class="relative bg-white rounded-xl overflow-hidden mb-3 border border-gray-200 hover:shadow-lg transition">
                            <span
                                class="absolute top-2 right-2 px-[10px] rounded-full text-sm font-normal leading-7 font-inter text-[#29303D] border bg-white border-[#29303D]">Baseball</span>
                            <div class="aspect-square flex items-center justify-center px-6 pb-2 pt-6 bg-[#F1F1F1]">
                                <img src="{{asset('/images/Baseball_Brawijaya.png')}}" alt="Baseball_Brawijaya"
                                    class="w-full h-full object-contain">
                            </div>
                        </div>
                        <h4
                            class="font-semibold text-[#29303D] mb-1 text-lg font-inter leading-7 sm:text-base group-hover:text-blue-600 transition">
                            Baseball Universitas Brawijaya</h4>
                        <p class="text-[#29303D] opacity-[0.8] text-base font-normal font-inter leading-7">Rp160.000</p>
                    </article>

                    <article class="group cursor-pointer">
                        <div
                            class="relative bg-white rounded-xl overflow-hidden mb-3 border border-gray-200 hover:shadow-lg transition">
                            <span
                                class="absolute top-2 right-2 px-[10px] rounded-full text-sm font-normal leading-7 font-inter text-[#29303D] border bg-white border-[#29303D]">Hoodie</span>
                            <div class="aspect-square flex items-center justify-center px-6 pb-2 pt-6 bg-[#F1F1F1]">
                                <img src="{{asset('/images/Hoodie_Sleeveless_Brawijaya.png')}}"
                                    alt="Hoodie_Sleeveless_Brawijaya" class="w-full h-full object-contain">
                            </div>
                        </div>
                        <h4
                            class="font-semibold text-[#29303D] mb-1 text-lg font-inter leading-7 sm:text-base group-hover:text-blue-600 transition">
                            Hoodie Sleeveless Brawijaya University</h4>
                        <p class="text-[#29303D] opacity-[0.8] text-base font-normal font-inter leading-7">Rp190.000</p>
                    </article>

                    <article class="group cursor-pointer">
                        <div
                            class="relative bg-white rounded-xl overflow-hidden mb-3 border border-gray-200 hover:shadow-lg transition">
                            <span
                                class="absolute top-2 right-2 px-[10px] rounded-full text-sm font-normal leading-7 font-inter text-[#29303D] border bg-white border-[#29303D]">Baseball</span>
                            <div class="aspect-square flex items-center justify-center px-6 pb-2 pt-6 bg-[#F1F1F1]">
                                <img src="{{asset('/images/Baseball2_Brawijaya.png')}}" alt="Baseball2_Brawijaya"
                                    class="w-full h-full object-contain">
                            </div>
                        </div>
                        <h4
                            class="font-semibold text-[#29303D] mb-1 text-lg font-inter leading-7 sm:text-base group-hover:text-blue-600 transition">
                            Baseball Universitas Brawijaya </h4>
                        <p class="text-[#29303D] opacity-[0.8] text-base font-normal font-inter leading-7">Rp150.000</p>
                    </article>

                    <article class="group cursor-pointer">
                        <div
                            class="relative bg-white rounded-xl overflow-hidden mb-3 border border-gray-200 hover:shadow-lg transition">
                            <span
                                class="absolute top-2 right-2 px-[10px] rounded-full text-sm font-normal leading-7 font-inter text-[#29303D] border bg-white border-[#29303D]">Hoodie</span>
                            <div class="aspect-square flex items-center justify-center px-6 pb-2 pt-6 bg-[#F1F1F1]">
                                <img src="{{asset('/images/Hoodie_Zipper_Brawijaya_Grey.png')}}"
                                    alt="Hoodie_Zipper_Brawijaya_Grey" class="w-full h-full object-contain">
                            </div>
                        </div>
                        <h4
                            class="font-semibold text-[#29303D] mb-1 text-lg font-inter leading-7 sm:text-base group-hover:text-blue-600 transition">
                            Hoodie Zipper Brawijaya University | Grey</h4>
                        <p class="text-[#29303D] opacity-[0.8] text-base font-normal font-inter leading-7">Rp260.000</p>
                    </article>

                    <article class="group cursor-pointer">
                        <div
                            class="relative bg-white rounded-xl overflow-hidden mb-3 border border-gray-200 hover:shadow-lg transition">
                            <span
                                class="absolute top-2 right-2 px-[10px] rounded-full text-sm font-normal leading-7 font-inter text-[#29303D] border bg-white border-[#29303D]">Sticker</span>
                            <div class="aspect-square flex items-center justify-center px-6 pb-2 pt-6 bg-[#F1F1F1]">
                                <img src="{{asset('/images/Sticker_Brawijaya.png')}}" alt="Sticker_Brawijaya"
                                    class="w-full h-full object-contain">
                            </div>
                        </div>
                        <h4
                            class="font-semibold text-[#29303D] mb-1 text-lg font-inter leading-7 sm:text-base group-hover:text-blue-600 transition">
                            Sticker Universitas Brawijaya</h4>
                        <p class="text-[#29303D] opacity-[0.8] text-base font-normal font-inter leading-7">Rp5.000</p>
                    </article>
                </div>

                <nav class="flex justify-center items-center gap-3" aria-label="Pagination">
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-full bg-[#F3F4F6] text-gray-500 hover:bg-gray-200 disabled:opacity-50 disabled:cursor-not-allowed"
                        aria-label="Previous" disabled>
                        <image src="{{ asset('/icons/left-arrow2.svg') }}" alt="left-arrow">
                    </button>

                    <div class="flex items-center gap-[12px] bg-[#F3F4F6] rounded-full px-1 py-1">
                        <button
                            class="w-[35px] h-[35px] flex items-center justify-center rounded-full bg-[#29303D] text-white font-medium">1</button>
                        <button
                            class="w-[35px] h-[35px] flex items-center justify-center rounded-full text-[#29303D] hover:bg-gray-200 font-medium">2</button>
                        <button
                            class="w-[35px] h-[35px] flex items-center justify-center rounded-full text-[#29303D] hover:bg-gray-200 font-medium">3</button>
                    </div>

                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-full bg-[#F3F4F6] text-gray-500 hover:bg-gray-200"
                        aria-label="Next">
                        <image src="{{ asset('/icons/righ-arrow2.svg') }}" alt="righ-arrow">
                    </button>
                </nav>
            </div>
    </main>

    <script>
        const menuBtn = document.getElementById('menuBtn');
        const mobileMenuOpen = false;

        menuBtn.addEventListener('click', function () {
            alert('Mobile menu functionality - implement dropdown menu here');
        });
    </script>
@endsection