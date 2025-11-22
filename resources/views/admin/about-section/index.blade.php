@extends('layouts.app')

@section('title', 'Dashboard - About Section')

@section('content')
    <h1
        class="text-[22px] md:text-[28px] leading-[30px] md:leading-[36px] font-semibold tracking-normal text-slate-800 mb-6">
        About Section Management
    </h1>

    @if (session('success'))
        <div class="bg-green-50 border border-green-200 text-green-600 px-4 py-3 rounded-lg text-sm mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-xl shadow-card p-4 md:p-6">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between mb-4">
            <h2 class="text-[15px] font-medium text-slate-800">About Section Statistics</h2>
            <a href="{{ route('about-section.edit') }}"
                class="inline-flex items-center gap-1.5 rounded-md bg-primary-500 hover:bg-primary-600 text-white text-[13px] font-medium px-3.5 py-2 transition self-start">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>
                Edit About Section
            </a>
        </div>

        @if ($aboutSection)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-6">
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg p-5 border border-blue-200">
                    <div class="flex items-center gap-3 mb-2">
                        <div class="w-10 h-10 rounded-md object-contain ring-1 ring-slate-200 p-2">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="text-3xl font-bold text-slate-800 mb-1">{{ number_format($aboutSection->students_count) }}+
                    </div>
                    <div class="text-sm text-slate-600 font-medium">Students</div>
                </div>

                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg p-5 border border-blue-200">
                    <div class="flex items-center gap-3 mb-2">
                        <div class="w-10 h-10 rounded-md object-contain ring-1 ring-slate-200 p-2">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                        </div>
                    </div>
                    <div class="text-3xl font-bold text-slate-800 mb-1">{{ number_format($aboutSection->programs_count) }}+
                    </div>
                    <div class="text-sm text-slate-600 font-medium">Study Programs</div>
                </div>

                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg p-5 border border-blue-200">
                    <div class="flex items-center gap-3 mb-2">
                        <div
                            class="w-10 h-10 rounded-md object-contain ring-1 ring-slate-200 p-2 flex items-center justify-center">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 002.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 012.916.52 6.003 6.003 0 01-5.395 4.972m0 0a6.726 6.726 0 01-2.749 1.35m0 0a6.772 6.772 0 01-3.044 0" />
                            </svg>
                        </div>
                    </div>
                    <div class="text-3xl font-bold text-slate-800 mb-1">{{ number_format($aboutSection->years_count) }}+
                    </div>
                    <div class="text-sm text-slate-600 font-medium">Years of Excellence</div>
                </div>

                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg p-5 border border-blue-200">
                    <div class="flex items-center gap-3 mb-2">
                        <div
                            class="w-10 h-10 rounded-md object-contain ring-1 ring-slate-200 p-2 flex items-center justify-center">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525" />
                            </svg>
                        </div>
                    </div>
                    <div class="text-3xl font-bold text-slate-800 mb-1">{{ number_format($aboutSection->partners_count) }}+
                    </div>
                    <div class="text-sm text-slate-600 font-medium">Partner Universities</div>
                </div>
            </div>

            <div class="mt-6 p-5 bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg">
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 rounded-lg bg-blue-500 flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-sm font-semibold text-slate-800 mb-1">Video URL</h3>
                        @if ($aboutSection->video_url)
                            <a href="{{ $aboutSection->video_url }}" target="_blank"
                                class="text-sm text-blue-600 hover:text-blue-700 underline break-all">
                                {{ $aboutSection->video_url }}
                            </a>
                        @else
                            <p class="text-sm text-slate-500">No video URL set</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="mt-6">
                <h3 class="text-lg font-semibold text-slate-800 mb-4">Global Achievements</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
                    <div class="bg-white rounded-lg p-4 border border-slate-200">
                        <div class="text-2xl font-bold text-blue-600 mb-1">{{ $aboutSection->achievement_1_value }}</div>
                        <div class="text-xs text-slate-600">{{ $aboutSection->achievement_1_label }}</div>
                    </div>
                    <div class="bg-white rounded-lg p-4 border border-slate-200">
                        <div class="text-2xl font-bold text-blue-600 mb-1">{{ $aboutSection->achievement_2_value }}</div>
                        <div class="text-xs text-slate-600">{{ $aboutSection->achievement_2_label }}</div>
                    </div>
                    <div class="bg-white rounded-lg p-4 border border-slate-200">
                        <div class="text-2xl font-bold text-blue-600 mb-1">{{ $aboutSection->achievement_3_value }}</div>
                        <div class="text-xs text-slate-600">{{ $aboutSection->achievement_3_label }}</div>
                    </div>
                    <div class="bg-white rounded-lg p-4 border border-slate-200">
                        <div class="text-2xl font-bold text-blue-600 mb-1">{{ $aboutSection->achievement_4_value }}</div>
                        <div class="text-xs text-slate-600">{{ $aboutSection->achievement_4_label }}</div>
                    </div>
                    <div class="bg-white rounded-lg p-4 border border-slate-200">
                        <div class="text-2xl font-bold text-blue-600 mb-1">{{ $aboutSection->achievement_5_value }}</div>
                        <div class="text-xs text-slate-600">{{ $aboutSection->achievement_5_label }}</div>
                    </div>
                </div>
            </div>
        @else
            <div class="text-center py-12">
                <svg class="w-16 h-16 mx-auto text-slate-300 mb-4" fill="none" stroke="currentColor" stroke-width="1.5"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                </svg>
                <p class="text-slate-600 mb-4">No about section data available</p>
                <a href="{{ route('about-section.edit') }}"
                    class="inline-flex items-center gap-1.5 rounded-md bg-primary-500 hover:bg-primary-600 text-white text-[13px] font-medium px-4 py-2 transition">
                    Create About Section
                </a>
            </div>
        @endif
    </div>
@endsection
