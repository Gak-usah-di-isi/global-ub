@extends('core.app')

@section('title', 'Innovation ' . $innovation->title)

@section('content')

    <div class="bg-[#F0F2F4] w-full h-[80px] flex items-center px-4 md:px-8 lg:px-28">
        <div class="flex items-center space-x-4">
            <div class="w-[16px] h-[16px]">
                <img src="{{ asset('icons-site/home.svg') }}" alt="Home Icon" class="w-full h-full">
            </div>
            <a href="/" class="text-[#29303D] text-xs md:text-[14px] font-light hover:text-[#0000FF] transition-colors">
                Home
            </a>
            <div class="w-[16px] h-[16px]">
                <div class="w-[14px] h-[14px]">
                    <img src="/icons-site/arrow-right-chevron.svg" alt="Right Arrow" class="w-full h-full">
                </div>
            </div>
        </div>
        <div class="flex items-center space-x-4 ml-4">
            <a href="{{ route('innovation.index') }}"
                class="text-[#29303D] text-xs md:text-[14px] font-light hover:text-[#0000FF] transition-colors">
                Innovation
            </a>
            <div class="w-[16px] h-[16px]">
                <div class="w-[14px] h-[14px]">
                    <img src="/icons-site/arrow-right-chevron.svg" alt="Right Arrow" class="w-full h-full">
                </div>
            </div>
        </div>
        <div class="flex items-center space-x-4 ml-4">
            <span class="font-medium text-[#29303D] text-xs md:text-[14px] font-light transition-colors">
                {{ $innovation->title }}
            </span>
        </div>
    </div>

    <section class="innovation-section py-10 md:py-20 px-4 md:px-8 lg:px-28 bg-white">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">
            <div class="w-full lg:w-[450px] h-[370px] md:h-[400px] lg:h-[550px] rounded-lg overflow-hidden">
                <img src="{{ asset('storage/' . $innovation->image) }}" alt="{{ $innovation->title }}"
                    class="w-full h-full object-cover object-center">
            </div>

            <div class="w-full lg:w-[669px]">
                <div class="flex flex-col gap-[12px] mb-4">
                    <span
                        class="inline-flex items-center rounded-full px-3 py-1 text-sm leading-[20px] font-medium bg-[#6699FF33] text-[#1D4ED8] w-fit">
                        {{ $innovation->innovation_type }}
                    </span>
                </div>

                <h2 class="text-[#29303D] font-playfair text-2xl md:text-3xl lg:text-[36px] font-bold mb-4">
                    {{ $innovation->title }}
                </h2>

                <div
                    class="text-[#29303DB2] font-inter text-base md:text-[18px] leading-relaxed md:leading-[29.25px] mb-6 md:mb-8 space-y-4">
                    <p>{{ $innovation->description }}</p>
                </div>

                <div class="ck-content highlight-content mb-6">
                    {!! $innovation->highlights !!}
                </div>

                <div class="flex gap-4 mt-6 md:mt-8">
                    <div class="w-[41px] h-[41px] bg-[#E2E4E9] flex items-center justify-center rounded-full shadow-md">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                            target="_blank">
                            <img src="{{ asset('icons-site/fb.svg') }}" class="w-5 h-5" alt="Facebook">
                        </a>
                    </div>
                    <div class="w-[41px] h-[41px] bg-[#E2E4E9] flex items-center justify-center rounded-full shadow-md">
                        <a href="https://www.instagram.com" target="_blank">
                            <img src="{{ asset('icons-site/ig.svg') }}" class="w-5 h-5" alt="Instagram">
                        </a>
                    </div>
                    <div class="w-[41px] h-[41px] bg-[#E2E4E9] flex items-center justify-center rounded-full shadow-md">
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($innovation->title) }}"
                            target="_blank">
                            <img src="{{ asset('icons-site/tweet.svg') }}" class="w-5 h-5" alt="Twitter">
                        </a>
                    </div>
                    <div class="w-[41px] h-[41px] bg-[#E2E4E9] flex items-center justify-center rounded-full shadow-md">
                        <a href="{{ url()->current() }}" target="_blank" title="Click to Copy URL">
                            <img src="{{ asset('icons-site/link.svg') }}" class="w-5 h-5" alt="Copy Link">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 md:py-20 px-4 md:px-8 lg:px-28 bg-gradient-to-b from-[#F9FAFB] to-[#F0F2F4]">
        <div class="max-w-[1280px] mx-auto">
            <h2 class="text-2xl md:text-3xl font-playfair font-extrabold text-[#29303D] mb-8 md:mb-14">
                Related Innovations
            </h2>

            <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                @foreach ($relatedInnovations as $relatedInnovation)
                    <div class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
                        <div class="w-full h-48 sm:h-64 md:h-[288px]">
                            <img src="{{ asset('storage/' . $relatedInnovation->image) }}"
                                alt="{{ $relatedInnovation->title }}" class="w-full h-full object-cover">
                        </div>
                        <div class="w-full h-auto p-4 sm:p-6 flex flex-col gap-4">
                            <div class="w-full flex items-center justify-between">
                                <span
                                    class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#6699FF33] text-[#1D4ED8]">
                                    {{ $relatedInnovation->innovation_type }}
                                </span>
                            </div>
                            <h3
                                class="font-playfair font-bold text-lg sm:text-xl md:text-[20px] leading-relaxed md:leading-[28px] text-[#29303D]">
                                {{ $relatedInnovation->title }}
                            </h3>
                            <p
                                class="font-inter text-sm sm:text-base md:text-[16px] leading-relaxed md:leading-[24px] text-[#29303DB2]">
                                {{ Str::limit($relatedInnovation->description, 80) }}
                            </p>
                            <div class="ck-content">
                                {!! $relatedInnovation->highlights !!}
                            </div>
                            <a href="{{ route('innovation.show', $relatedInnovation->slug) }}"
                                class="mt-4 w-full h-10 rounded-[10px] border border-[#E2E4E9] flex items-center justify-center gap-2 px-4 bg-white text-[#29303D] font-medium text-sm md:text-[14px] leading-[20px] hover:bg-gray-50 transition">
                                Learn More
                                <img src="{{ asset('icons-site/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <style>
        .ck-content ul {
            display: flex;
            flex-direction: column;
            gap: 2px;
            font-size: 14px;
            line-height: 20px;
            color: #29303D;
            font-family: 'Inter', sans-serif;
            margin-top: 0.5rem;
        }

        .highlight-content ul {
            display: flex;
            flex-direction: column;
            gap: 8px;
            font-size: 16px;
            line-height: 20px;
            color: #29303D;
            font-family: 'Inter', sans-serif;
            margin-top: 0.5rem;
        }

        .ck-content ul li {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            position: relative;
        }

        .ck-content ul li::before {
            content: '';
            display: inline-block;
            width: 8px;
            height: 8px;
            background: #0000FF;
            border-radius: 9999px;
            margin-right: 8px;
        }
    </style>
@endsection
