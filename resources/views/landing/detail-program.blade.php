@extends('core.app')

@section('title', 'Program ' . $program->title)

@section('content')

    <div class="bg-[#F0F2F4] w-full h-[80px] flex items-center px-4 md:px-8 lg:px-28">
        <div class="flex items-center space-x-4">
            <div class="w-[16px] h-[16px]">
                <img src="{{ asset(config('app.icon_path') . '/home.svg') }}" alt="Home Icon" class="w-full h-full">
            </div>
            <a href="/" class="text-[#29303D] text-xs md:text-[14px] font-light hover:text-[#0000FF] transition-colors">
                Home
            </a>
            <div class="w-[16px] h-[16px]">
                <div class="w-[14px] h-[14px]">
                    <img src="{{ asset(config('app.icon_path') . '/arrow-right-chevron.svg" alt="Right Arrow" class="w-full h-full">
                </div>
            </div>
        </div>
        <div class="flex items-center space-x-4 ml-4">
            <a href="{{ route('program.index') }}"
                class="text-[#29303D] text-xs md:text-[14px] font-light hover:text-[#0000FF] transition-colors">
                Program
            </a>
            <div class="w-[16px] h-[16px]">
                <div class="w-[14px] h-[14px]">
                    <img src="{{ asset(config('app.icon_path') . '/arrow-right-chevron.svg" alt="Right Arrow" class="w-full h-full">
                </div>
            </div>
        </div>
        <div class="flex items-center space-x-4 ml-4">
            <span class="font-medium text-[#29303D] text-xs md:text-[14px] font-light transition-colors">
                {{ $program->title }}
            </span>
        </div>
    </div>

    <section class="program-section py-10 md:py-20 px-4 md:px-8 lg:px-28 bg-white">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">
            <div class="w-full lg:w-[450px] h-[370px] md:h-[400px] lg:h-[550px] rounded-lg overflow-hidden">
                <img src="{{ asset('storage/' . $program->image) }}" alt="{{ $program->title }}"
                    class="w-full h-full object-cover object-center">
            </div>

            <div class="w-full lg:w-[669px]">
                <div class="flex flex-col gap-[12px] mb-4">
                    <span
                        class="inline-flex items-center rounded-full px-3 py-1 text-sm leading-[20px] font-medium bg-[#6699FF33] text-[#1D4ED8] w-fit">
                        {{ $program->program_type }}
                    </span>
                </div>

                <h2 class="text-[#29303D] font-playfair text-2xl md:text-3xl lg:text-[36px] font-bold mb-4">
                    {{ $program->title }}
                </h2>

                <div
                    class="text-[#29303DB2] font-inter text-base md:text-[18px] leading-relaxed md:leading-[29.25px] mb-6 md:mb-8 space-y-4">
                    <p>{{ $program->description }}</p>
                </div>

                <div class="ck-content highlight-content mb-6">
                    {!! $program->highlights !!}
                </div>

                @if ($program->report_link || $program->video_link)
                    <div class="flex items-center mt-8 gap-x-2 flex-wrap">
                        @if ($program->report_link)
                            <div
                                class="flex items-center align-middle justify-center size-10 rounded-full text-neutral-600 bg-neutral-200 p-2 hover:bg-neutral-300 transition">
                                <a href="{{ $program->report_link }}" target="_blank" rel="noopener noreferrer"
                                    title="Open Report">
                                    <img src="{{ asset(config('app.icon_path') . '/file.svg" class="w-5 h-5" alt="Report">
                                </a>
                            </div>
                        @endif
                        @if ($program->video_link)
                            <div
                                class="flex items-center align-middle justify-center size-10 rounded-full text-neutral-600 bg-neutral-200 p-2 hover:bg-neutral-300 transition">
                                <a href="{{ $program->video_link }}" target="_blank" rel="noopener noreferrer"
                                    title="Watch on YouTube">
                                    <img src="{{ asset(config('app.icon_path') . '/yt-blue.svg" class="w-5 h-5" alt="YouTube">
                                </a>
                            </div>
                        @endif
                    </div>
                @endif

                @if ($program->references && count($program->references) > 0)
                    <div class="mt-8">
                        <h3 class="text-[#29303D] font-playfair text-base md:text-[18px] font-normal mb-4">
                            Reference Related Program
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            @foreach ($program->references as $index => $reference)
                                @if (!empty($reference))
                                    <a href="{{ $reference }}" target="_blank" rel="noopener noreferrer"
                                        class="group flex items-center gap-2 p-3 bg-[#F9FAFB] hover:bg-[#F0F2F4] rounded-[10px] border border-[#E2E4E9] hover:border-[#0000FF] transition-all duration-200">
                                        <div
                                            class="flex items-center justify-center w-8 h-8 rounded-full bg-white border border-[#E2E4E9] group-hover:bg-gradient-to-r group-hover:from-[#0000FF] group-hover:to-[#6699FF] group-hover:border-transparent transition-all duration-200 flex-shrink-0">
                                            <img src="{{ asset(config('app.icon_path') . '/link.svg"
                                                class="w-4 h-4 group-hover:brightness-0 group-hover:invert transition-all duration-200"
                                                alt="Link">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p
                                                class="text-[#29303D] font-inter text-xs md:text-[13px] font-medium group-hover:text-[#0000FF] transition-colors truncate">
                                                {{ isset($program->reference_titles[$index]) && !empty($program->reference_titles[$index]) ? $program->reference_titles[$index] : 'Reference Link ' . ($index + 1) }}
                                            </p>
                                            <p class="text-[#29303DB2] font-inter text-[10px] md:text-[11px] truncate">
                                                {{ $reference }}
                                            </p>
                                        </div>
                                        <svg class="w-4 h-4 text-[#29303DB2] group-hover:text-[#0000FF] transition-colors flex-shrink-0"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

                @if ($program->link)
                    <div class="mt-8">
                        <a href="{{ $program->link }}" target="_blank"
                            class="inline-flex items-center justify-center gap-2 px-8 py-3 bg-gradient-to-r from-[#0000FF] to-[#6699FF] text-white rounded-[10px] font-medium text-base hover:shadow-lg transition-all">
                            Apply Now
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <section class="py-10 md:py-20 px-4 md:px-8 lg:px-28 bg-gradient-to-b from-[#F9FAFB] to-[#F0F2F4]">
        <div class="max-w-[1280px] mx-auto">
            <h2 class="text-2xl md:text-3xl font-playfair font-extrabold text-[#29303D] mb-8 md:mb-14">
                Related Programs
            </h2>

            <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                @foreach ($relatedPrograms as $relatedProgram)
                    <div class="w-full h-auto bg-white rounded-[16px] shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
                        <div class="w-full h-48 sm:h-64 md:h-[288px]">
                            <img src="{{ asset('storage/' . $relatedProgram->image) }}" alt="{{ $relatedProgram->title }}"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="w-full h-auto p-4 sm:p-6 flex flex-col gap-4">
                            <div class="w-full flex items-center justify-between">
                                <span
                                    class="inline-flex items-center rounded-full px-2 py-1 text-xs leading-[16px] font-medium bg-[#6699FF33] text-[#1D4ED8]">
                                    {{ $relatedProgram->program_type }}
                                </span>
                            </div>
                            <h3
                                class="font-playfair font-bold text-lg sm:text-xl md:text-[20px] leading-relaxed md:leading-[28px] text-[#29303D]">
                                {{ $relatedProgram->title }}
                            </h3>
                            <p
                                class="font-inter text-sm sm:text-base md:text-[16px] leading-relaxed md:leading-[24px] text-[#29303DB2]">
                                {{ Str::limit($relatedProgram->description, 80) }}
                            </p>
                            <div class="ck-content">
                                {!! $relatedProgram->highlights !!}
                            </div>
                            <a href="{{ route('program.show', $relatedProgram->slug) }}"
                                class="mt-4 w-full h-10 rounded-[10px] border border-[#E2E4E9] flex items-center justify-center gap-2 px-4 bg-white text-[#29303D] font-medium text-sm md:text-[14px] leading-[20px] hover:bg-gray-50 transition">
                                Learn More
                                <img src="{{ asset(config('app.icon_path') . '/arrow-right-black.svg') }}" class="w-4 h-4" alt="">
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
