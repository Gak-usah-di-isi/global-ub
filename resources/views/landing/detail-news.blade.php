@extends('layouts.landingPartials.app')

@section('title', 'Home | Globalizing UB')

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
                <mask id="mask0_492_4349" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="25">
                    <rect y="0.890625" width="24" height="24" fill="#D9D9D9" />
                </mask>
                <g mask="url(#mask0_492_4349)">
                    <path d="M13.2924 12.8905L8.69238 8.29051L9.40013 7.58276L14.7079 12.8905L9.40013 18.1983L8.69238 17.4905L13.2924 12.8905Z" fill="#29303D" />
                </g>
            </svg>


            <!-- Events -->
            <span>
                News
            </span>

            <!-- Separator -->
            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_492_4349" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="25">
                    <rect y="0.890625" width="24" height="24" fill="#D9D9D9" />
                </mask>
                <g mask="url(#mask0_492_4349)">
                    <path d="M13.2924 12.8905L8.69238 8.29051L9.40013 7.58276L14.7079 12.8905L9.40013 18.1983L8.69238 17.4905L13.2924 12.8905Z" fill="#29303D" />
                </g>
            </svg>

            <!-- Events -->
            <span>
                Berita Internasional Terbaru
            </span>

        </nav>
    </div>
</div>
<section class="lg:max-w-6xl mx-auto px-4 sm:px-6 py-12 lg:py-20 lg:px-8">
    <div class="w-full mx-auto mb-8">
        <img src="{{asset('images/hero.png')}}" class="h-full rounded-xl w-full bg-cover bg-center" alt="">
    </div>
    <div class="flex w-full text-xs mt-12 mb-4 text-neutral-400">
        <span class="flex items-center align-middle gap-x-1 mr-4">
            <img src="{{asset('icons/calender.svg')}}" alt="">1/15/2025
        </span>
        <span class="flex items-center align-middle gap-x-1">
            <img src="{{asset('icons/clock.svg')}}" alt="">3 min read
        </span>
    </div>
    <h1 class="text-3xl font-playfair text-neutral-800 font-bold mb-4">UB Signs MOU with Stanford University for Joint Research Program</h1>
    <p class="text-neutral-600 text-justify font-inter text-sm mb-4">
        Universitas Brawijaya (UB) officially signed a Memorandum of Understanding (MoU) with Stanford University on January 15, 2024, marking a significant milestone in UB’s journey toward global collaboration. The agreement focuses on joint research, academic exchange, and student development, with a special emphasis on sustainable technology and innovation.
    </p>
    <p class="text-neutral-600 text-justify font-inter text-sm mb-4">

        The partnership aims to foster collaborative research addressing pressing global issues such as climate change, green technology, digital transformation, and sustainable agriculture. Both universities agreed to encourage faculty-to-faculty cooperation, joint publications, and knowledge-sharing platforms that will strengthen the scientific community at an international level.
    </p>
    <p class="text-neutral-600 text-justify font-inter text-sm mb-4">

        In addition to research collaboration, the MoU also highlights student mobility opportunities. UB students will have the chance to participate in exchange programs, short courses, and joint seminars at Stanford University. Similarly, Stanford students and faculty will be welcomed at UB, particularly to explore Indonesia’s rich biodiversity, culture, and innovation potential.
    </p>
    <p class="text-neutral-600 text-justify font-inter text-sm mb-4">

        “This partnership is a testament to UB’s commitment to advancing education and research on a global scale,” said UB’s Rector during the signing ceremony. “We believe this collaboration will open new horizons for our students and researchers, enabling them to contribute to real-world solutions that benefit society.”
    </p>
    <p class="text-neutral-600 text-justify font-inter text-sm mb-4">
        The signing of the MoU reflects UB’s strategic vision of strengthening international networks and building its reputation as a leading research university in Asia. With Stanford University as one of its partners, UB takes a bold step toward becoming a global hub for knowledge, innovation, and cross-cultural learning.
    </p>
    <div class="flex items-end mt-14 align-bottom gap-x-2">
        <div class="flex items-center align-middle justify-center size-10 rounded-full text-neutral-600 bg-neutral-200 p-2"><img src="{{asset('icons/facebook.svg')}}" alt="facebook"></div>
        <div class="flex items-center align-middle justify-center size-10 rounded-full text-neutral-600 bg-neutral-200 p-2"><img src="{{asset('icons/instagram.svg')}}" alt="instagram"></div>
        <div class="flex items-center align-middle justify-center size-10 rounded-full text-neutral-600 bg-neutral-200 p-2"><img src="{{asset('icons/twitter.svg')}}" alt="twitter"></div>
        <div class="flex items-center align-middle justify-center size-10 rounded-full text-neutral-600 bg-neutral-200 p-2"><img src="{{asset('icons/url.svg')}}" alt="url"></div>
    </div>
</section>

<section class="lg:max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-playfair text-neutral-800 font-bold mb-8">Related Post</h1>
    <div class="lg:grid grid-cols-1 md:grid-cols-2 gap-4 lg:grid-cols-3">
        <a href="#" class="my-2 inline-block mb-2">
            <img src="{{asset('images/hero-bg.jpg')}}" class="rounded-lg h-40 w-full bg-cover bg-center" alt="">
            <h1 class="font-playfair font-bold my-4 line-clamp-2 leading-tight text-lg">UB Attracts 2,254 International Students through BISS 2025 Scholarship</h1>
            <p class="text-sm font-inter line-clamp-2 text-neutral-600 my-4">Universitas Brawijaya has once again achieved a remarkable milestone in attracting international students through the Brawijaya International Student Scholarship (BISS) 2025</p>
            <div class="flex items-center align-middle justify-between font-inter w-full text-xs mb-2 text-neutral-500">
                <div class="flex items-center align-middle w-full">
                    <span class="flex items-center align-middle gap-x-2 mr-4">
                        <img src="{{asset('icons/calender.svg')}}" alt="">1/15/2025
                    </span>
                    <span class="flex items-center align-middle gap-x-2">
                        <img src="{{asset('icons/clock.svg')}}" alt="">3 min read
                    </span>
                </div>
                <img src="{{asset('icons/arrow-right.svg')}}" class="size-4" alt="">
            </div>
        </a>
        <a href="#" class="my-2 inline-block mb-2">
            <img src="{{asset('images/hero-bg.jpg')}}" class="rounded-lg h-40 w-full bg-cover bg-center" alt="">
            <h1 class="font-playfair font-bold my-4 line-clamp-2 leading-tight text-lg">UB Attracts 2,254 International Students through BISS 2025 Scholarship</h1>
            <p class="text-sm font-inter line-clamp-2 text-neutral-600 my-4">Universitas Brawijaya has once again achieved a remarkable milestone in attracting international students through the Brawijaya International Student Scholarship (BISS) 2025</p>
            <div class="flex items-center align-middle justify-between font-inter w-full text-xs mb-2 text-neutral-500">
                <div class="flex items-center align-middle w-full">
                    <span class="flex items-center align-middle gap-x-2 mr-4">
                        <img src="{{asset('icons/calender.svg')}}" alt="">1/15/2025
                    </span>
                    <span class="flex items-center align-middle gap-x-2">
                        <img src="{{asset('icons/clock.svg')}}" alt="">3 min read
                    </span>
                </div>
                <img src="{{asset('icons/arrow-right.svg')}}" class="size-4" alt="">
            </div>
        </a>
        <a href="#" class="my-2 inline-block mb-2">
            <img src="{{asset('images/hero-bg.jpg')}}" class="rounded-lg h-40 w-full bg-cover bg-center" alt="">
            <h1 class="font-playfair font-bold my-4 line-clamp-2 leading-tight text-lg">UB Attracts 2,254 International Students through BISS 2025 Scholarship</h1>
            <p class="text-sm font-inter line-clamp-2 text-neutral-600 my-4">Universitas Brawijaya has once again achieved a remarkable milestone in attracting international students through the Brawijaya International Student Scholarship (BISS) 2025</p>
            <div class="flex items-center align-middle justify-between font-inter w-full text-xs mb-2 text-neutral-500">
                <div class="flex items-center align-middle w-full">
                    <span class="flex items-center align-middle gap-x-2 mr-4">
                        <img src="{{asset('icons/calender.svg')}}" alt="">1/15/2025
                    </span>
                    <span class="flex items-center align-middle gap-x-2">
                        <img src="{{asset('icons/clock.svg')}}" alt="">3 min read
                    </span>
                </div>
                <img src="{{asset('icons/arrow-right.svg')}}" class="size-4" alt="">
            </div>
        </a>
    </div>

</section>
@endsection