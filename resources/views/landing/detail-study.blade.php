@extends('core.app')

@section('title', 'Study ' . $study->title)

@section('content')

    <div class="bg-[#F0F2F4] w-full h-[80px] flex items-center px-4 md:px-8 lg:px-28">
        <div class="flex items-center space-x-4">
            <div class="w-[16px] h-[16px]">
                <img src="{{ asset('icons/home.svg') }}" alt="Home Icon" class="w-full h-full">
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
            <a href="/study"
                class="text-[#29303D] text-xs md:text-[14px] font-light hover:text-[#0000FF] transition-colors">
                Study
            </a>
            <div class="w-[16px] h-[16px]">
                <div class="w-[14px] h-[14px]">
                    <img src="/icons/arrow-right-chevron.svg" alt="Right Arrow" class="w-full h-full">
                </div>
            </div>
        </div>
        <div class="flex items-center space-x-4 ml-4">
            <span class="font-medium text-[#29303D] text-xs md:text-[14px] font-light transition-colors">
                {{ $study->title }}
            </span>
        </div>
    </div>

    <section id="study-in-ub"
        class="w-full bg-gradient-to-b from-[#F9FAFB] to-[#F0F2F4] px-4 sm:px-8 md:px-16 lg:px-28 py-10 md:py-16 lg:py-20">
        <div class="max-w-[1280px] mx-auto flex flex-col gap-8 md:gap-12 lg:gap-16">

            <div class="bg-white rounded-[16px] p-[32px] shadow-[0px_4px_20px_-2px_#29303D1A] flex flex-col gap-[24px]">
                <div class="flex flex-col gap-[12px]">
                    <div
                        class="logo-container w-[64px] h-[64px] bg-gradient-to-br from-[#0000FF] to-[#6699FF] rounded-[16px] flex justify-center items-center">
                        <img src="{{ asset('storage/' . $study->icon->icon) }}" alt="{{ $study->icon->name }}"
                            class="w-[32px] h-[32px]">
                    </div>
                    <h3
                        class="font-playfair font-bold text-[20px] leading-[28px] text-[#29303D] md:text-[24px] md:leading-[32px]">
                        {{ $study->title }}
                    </h3>
                    <p
                        class="font-inter font-normal text-[14px] leading-[24px] text-[#29303DB2] md:text-[16px] md:leading-[28px]">
                        {{ $study->tagline }}
                    </p>
                </div>

                <p
                    class="font-inter font-normal text-[14px] leading-[24px] text-[#29303DB2] md:text-[16px] md:leading-[28px]">
                    {{ $study->description }}
                </p>

                <div class="flex justify-between items-center flex-wrap gap-4 md:gap-6">
                    <span class="flex items-center gap-2 text-[#29303DB2] text-[14px] md:text-[16px]">
                        <img src="{{ asset('icons/user-black.svg') }}" alt="user" class="w-4 h-4 md:w-5 md:h-5">
                        {{ number_format($study->students_count) }} students
                    </span>
                    <span class="text-[#0000FF] text-[14px] font-medium md:text-[16px]">
                        {{ $study->duration }}
                    </span>
                </div>

                <div class="ck-content highlight-content">
                    {!! $study->highlights !!}
                </div>

                <a href="#"
                    class="mt-auto w-full h-10 border border-[#E2E4E9] rounded-xl flex items-center justify-center gap-2 px-4 py-2 font-medium text-[#29303D] text-sm md:text-[14px] leading-5 md:leading-[20px] hover:bg-gray-50">
                    Apply Now
                    <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                </a>
            </div>


            <div class="w-full flex flex-col gap-2">
                <h2
                    class="w-full font-playfair font-bold text-3xl md:text-[10px] lg:text-[30px] leading-[36px] text-[#29303D]">
                    Related Study
                </h2>

            </div>

            <div class="w-full mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                @foreach ($relatedStudies as $studies)
                    <div
                        class="w-full max-w-full sm:max-w-[384px] mx-auto h-auto md:h-[550px] bg-white rounded-2xl shadow-md p-6 md:p-8 flex flex-col gap-4 md:gap-6">
                        <div
                            class="w-12 h-12 md:w-16 md:h-16 rounded-2xl flex items-center justify-center bg-gradient-to-br from-[#0000FF] to-[#6699FF]">
                            <img src="{{ asset('storage/' . $studies->icon->icon) }}" alt="{{ $studies->icon->name }}"
                                class="w-6 h-6 md:w-8 md:h-8">
                        </div>

                        <h3
                            class="font-playfair font-bold text-lg md:text-xl lg:text-[20px] leading-6 md:leading-7 lg:leading-[28px] text-[#29303D]">
                            {{ $studies->title }}
                        </h3>

                        <p class="font-inter font-normal text-sm md:text-base leading-5 md:leading-6 text-[#29303DB2]">
                            {{ $studies->tagline }}
                        </p>

                        <div class="flex justify-between items-center text-sm md:text-[14px] leading-5 md:leading-[20px]">
                            <span class="flex items-center gap-2 text-[#29303DB2]">
                                <img src="{{ asset('icons/user-black.svg') }}" class="w-4 h-4" alt="user">
                                {{ number_format($studies->students_count) }} students
                            </span>
                            <span class="text-[#0000FF] font-medium">{{ $studies->duration }}</span>
                        </div>

                        <div class="ck-content">
                            {!! $studies->highlights !!}
                        </div>

                        <a href="{{ route('study.show', $studies->slug) }}"
                            class="mt-auto w-full h-10 border border-[#E2E4E9] rounded-xl flex items-center justify-center gap-2 px-4 py-2 font-medium text-[#29303D] text-sm md:text-[14px] leading-5 md:leading-[20px] hover:bg-gray-50">
                            Learn More
                            <img src="{{ asset('icons/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
                        </a>
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
