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

    <section id="innovation-detail"
        class="w-full bg-gradient-to-b from-[#F9FAFB] to-[#F0F2F4] px-4 sm:px-8 md:px-16 lg:px-28 py-10 md:py-16 lg:py-20">
        <div class="max-w-[1280px] mx-auto flex flex-col gap-8 md:gap-12 lg:gap-16">

            <div class="bg-white rounded-[16px] p-[32px] shadow-[0px_4px_20px_-2px_#29303D1A] flex flex-col gap-[24px]">
                <div class="w-full h-[300px] md:h-[400px] lg:h-[500px] rounded-[16px] overflow-hidden">
                    <img src="{{ asset('storage/' . $innovation->image) }}" alt="{{ $innovation->title }}"
                        class="w-full h-full object-cover">
                </div>

                <div class="flex flex-col gap-[12px]">
                    <span
                        class="inline-flex items-center rounded-full px-3 py-1 text-sm leading-[20px] font-medium bg-[#6699FF33] text-[#1D4ED8] w-fit">
                        {{ $innovation->innovation_type }}
                    </span>
                    <h3
                        class="font-playfair font-bold text-[24px] leading-[32px] text-[#29303D] md:text-[32px] md:leading-[40px]">
                        {{ $innovation->title }}
                    </h3>
                </div>

                <p
                    class="font-inter font-normal text-[16px] leading-[28px] text-[#29303DB2] md:text-[18px] md:leading-[32px]">
                    {{ $innovation->description }}
                </p>

                <div class="ck-content highlight-content">
                    {!! $innovation->highlights !!}
                </div>
            </div>


            <div class="w-full flex flex-col gap-2">
                <h2
                    class="w-full font-playfair font-bold text-2xl md:text-3xl lg:text-[30px] leading-[36px] text-[#29303D]">
                    Related Innovations
                </h2>
            </div>

            <div class="w-full mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
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
