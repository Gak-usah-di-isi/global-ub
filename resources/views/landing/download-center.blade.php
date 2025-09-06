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
                Download Center
            </span>
        </nav>
    </div>
</div>

<section class="lg:max-w-6xl flex-col lg:flex-row items-center align-middle mx-auto py-10 lg:pt-20 lg:pb-16 px-4 sm:px-6 lg:px-8">
    <h1 class="font-bold text-3xl mb-4 text-center font-playfair">Download Center</h1>
    <p class="text-center lg:w-[602px] w-full font-inter mx-auto text-lg text-neutral-500">Access our collection of promotional materials, brochures, and multimedia content</p>

    <div class="inline-flex mt-16 justify-end w-full mb-4">
        <button
            class="flex items-center gap-2 px-4 py-2 rounded-xl border border-blue-400 bg-blue-50 text-blue-600 font-medium hover:bg-blue-100 transition">
            File Type
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
    </div>

    <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="max-w-md w-full bg-white p-6 font-inter rounded-3xl border border-neutral-200 flex flex-col gap-4">
            <!-- Header -->
            <div class="flex items-start gap-3">
                <!-- Icon -->
                <div class="flex items-center justify-center min-w-12 min-h-12 max-w-12 max-h-12 rounded-lg bg-neutral-100">
                    <img src="{{asset('icons/pdf.svg')}}" alt="">
                </div>
                <div>
                    <h2 class="text-gray-900 font-playfair mb-1 font-semibold">University Profile Brochure</h2>
                    <p class="text-gray-500 font-inter text-sm">Complete overview of UB programs and facilities</p>
                </div>
            </div>

            <!-- File Info -->
            <div class="flex items-center justify-between text-sm">
                <div class="flex items-center gap-2">
                    <span class="font-medium text-neutral-600">PDF</span>
                    <span class="text-neutral-600">5.2 MB</span>
                </div>
                <div class="flex text-neutral-500 items-center gap-1">
                    <img src="{{asset('icons/download.svg')}}" class="text-neutral-400" alt="">
                    <span class="font-normal">2.5k</span>
                </div>
            </div>

            <!-- Button -->
            <button class="w-full align-middle py-2.5 rounded-xl border border-gray-200 flex items-center justify-center gap-4 text-nautral-800 font-medium hover:bg-gray-50 hover:border-gray-300 transition">
                <img src="{{asset('icons/download.svg')}}" alt="">
                Download
            </button>
        </div>
        <div class="max-w-md w-full bg-white p-6 font-inter rounded-3xl border border-neutral-200 flex flex-col gap-4">
            <!-- Header -->
            <div class="flex items-start gap-3">
                <!-- Icon -->
                <div class="flex items-center justify-center min-w-12 min-h-12 max-w-12 max-h-12 rounded-lg bg-neutral-100">
                    <img src="{{asset('icons/pdf.svg')}}" alt="">
                </div>
                <div>
                    <h2 class="text-gray-900 font-playfair mb-1 font-semibold">University Profile Brochure</h2>
                    <p class="text-gray-500 font-inter text-sm">Complete overview of UB programs and facilities</p>
                </div>
            </div>

            <!-- File Info -->
            <div class="flex items-center justify-between text-sm">
                <div class="flex items-center gap-2">
                    <span class="font-medium text-neutral-600">PDF</span>
                    <span class="text-neutral-600">5.2 MB</span>
                </div>
                <div class="flex text-neutral-500 items-center gap-1">
                    <img src="{{asset('icons/download.svg')}}" class="text-neutral-400" alt="">
                    <span class="font-normal">2.5k</span>
                </div>
            </div>

            <!-- Button -->
            <button class="w-full align-middle py-2.5 rounded-xl border border-gray-200 flex items-center justify-center gap-4 text-nautral-800 font-medium hover:bg-gray-50 hover:border-gray-300 transition">
                <img src="{{asset('icons/download.svg')}}" alt="">
                Download
            </button>
        </div>
        <div class="max-w-md w-full bg-white p-6 font-inter rounded-3xl border border-neutral-200 flex flex-col gap-4">
            <!-- Header -->
            <div class="flex items-start gap-3">
                <!-- Icon -->
                <div class="flex items-center justify-center min-w-12 min-h-12 max-w-12 max-h-12 rounded-lg bg-neutral-100">
                    <img src="{{asset('icons/pdf.svg')}}" alt="">
                </div>
                <div>
                    <h2 class="text-gray-900 font-playfair mb-1 font-semibold">University Profile Brochure</h2>
                    <p class="text-gray-500 font-inter text-sm">Complete overview of UB programs and facilities</p>
                </div>
            </div>

            <!-- File Info -->
            <div class="flex items-center justify-between text-sm">
                <div class="flex items-center gap-2">
                    <span class="font-medium text-neutral-600">PDF</span>
                    <span class="text-neutral-600">5.2 MB</span>
                </div>
                <div class="flex text-neutral-500 items-center gap-1">
                    <img src="{{asset('icons/download.svg')}}" class="text-neutral-400" alt="">
                    <span class="font-normal">2.5k</span>
                </div>
            </div>

            <!-- Button -->
            <button class="w-full align-middle py-2.5 rounded-xl border border-gray-200 flex items-center justify-center gap-4 text-nautral-800 font-medium hover:bg-gray-50 hover:border-gray-300 transition">
                <img src="{{asset('icons/download.svg')}}" alt="">
                Download
            </button>
        </div>
    </div>
</section>

<div class="lg:max-w-6xl flex-col lg:flex-row items-center align-middle mx-auto py-10 lg:pt-20 lg:pb-16 px-4 sm:px-6 lg:px-8 font-inter">
    <div class="rounded-3xl bg-gradient-to-r from-[#0000FF] to-[#6699FF] p-10 text-center text-white">
        <!-- Title -->
        <h2 class="text-[30px] font-playfair font-bold mb-3">Need Everything?</h2>

        <!-- Description -->
        <p class="font-thin text-[20px] lg:max-w-2xl mx-auto mb-6">
            Download our complete media kit with all brochures, posters, and
            promotional materials in one package
        </p>

        <!-- Button -->
        <a href="#"
            class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 transition border border-white/20 text-white px-12 py-3 rounded-lg text-sm font-medium">
            Download Complete Media Kit
            <img src="{{asset('icons/arrow-right-white.svg')}}" alt="">
        </a>
    </div>
</div>




@endsection