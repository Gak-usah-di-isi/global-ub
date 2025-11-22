@extends('layouts.app')

@section('title', 'Dashboard - Edit About Section')

@section('content')
    <div class="space-y-6">
        <nav class="text-[12px] font-medium flex items-center gap-1 text-slate-500">
            <a href="{{ route('about-section.index') }}" class="hover:text-slate-700 cursor-pointer">
                About Section
            </a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" strokeWidth="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="m9 6 6 6-6 6" />
            </svg>
            <span class="text-slate-700">Edit</span>
        </nav>
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <h1 class="text-[24px] md:text-[26px] font-semibold text-slate-800">
                Edit About Section
            </h1>
            <div class="flex gap-3">
                <a href="{{ route('about-section.index') }}"
                    class="h-[42px] px-6 rounded-md text-[13px] font-medium bg-[#E0E6F2] hover:bg-[#d6deec] text-slate-700 transition flex items-center">
                    Back
                </a>
                <button type="submit" form="edit-form"
                    class="h-[42px] px-7 rounded-md text-[13px] font-semibold bg-primary-500 hover:bg-primary-600 text-white transition">
                    Update About Section
                </button>
            </div>
        </div>
        @if ($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-600 px-4 py-3 rounded-lg text-sm">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form id="edit-form" action="{{ route('about-section.update') }}" method="POST" class="space-y-8">
            @csrf
            @method('PUT')
            <section class="bg-white shadow-card rounded-xl p-6 md:p-8">
                <h2 class="section-title">Statistics Numbers</h2>

                <div class="space-y-7">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="students_count" class="field-label req">
                                Students Count
                            </label>
                            <div class="relative mt-2">
                                <input id="students_count" name="students_count" type="number"
                                    value="{{ old('students_count', $aboutSection->students_count ?? 50000) }}"
                                    placeholder="50000"
                                    class="h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('students_count') border-red-300 @enderror" />
                                <div class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 text-sm">+</div>
                            </div>
                            @error('students_count')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <p class="mt-1 text-xs text-slate-500">Number of students (will show as 50,000+)</p>
                        </div>

                        <div>
                            <label for="programs_count" class="field-label req">
                                Programs Count
                            </label>
                            <div class="relative mt-2">
                                <input id="programs_count" name="programs_count" type="number"
                                    value="{{ old('programs_count', $aboutSection->programs_count ?? 190) }}"
                                    placeholder="190"
                                    class="h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('programs_count') border-red-300 @enderror" />
                                <div class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 text-sm">+</div>
                            </div>
                            @error('programs_count')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <p class="mt-1 text-xs text-slate-500">Number of study programs (will show as 190+)</p>
                        </div>

                        <div>
                            <label for="years_count" class="field-label req">
                                Years Count
                            </label>
                            <div class="relative mt-2">
                                <input id="years_count" name="years_count" type="number"
                                    value="{{ old('years_count', $aboutSection->years_count ?? 60) }}" placeholder="60"
                                    class="h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('years_count') border-red-300 @enderror" />
                                <div class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 text-sm">+</div>
                            </div>
                            @error('years_count')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <p class="mt-1 text-xs text-slate-500">Years of excellence (will show as 60+)</p>
                        </div>

                        <div>
                            <label for="partners_count" class="field-label req">
                                Partners Count
                            </label>
                            <div class="relative mt-2">
                                <input id="partners_count" name="partners_count" type="number"
                                    value="{{ old('partners_count', $aboutSection->partners_count ?? 300) }}"
                                    placeholder="300"
                                    class="h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('partners_count') border-red-300 @enderror" />
                                <div class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 text-sm">+</div>
                            </div>
                            @error('partners_count')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <p class="mt-1 text-xs text-slate-500">Number of partner universities (will show as 300+)</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-white shadow-card rounded-xl p-6 md:p-8">
                <h2 class="section-title">Video Settings</h2>

                <div class="space-y-7">
                    <div>
                        <label for="video_url" class="field-label">
                            YouTube Video URL
                        </label>
                        <input id="video_url" name="video_url" type="url"
                            value="{{ old('video_url', $aboutSection->video_url ?? '') }}"
                            placeholder="https://www.youtube.com/watch?v=VIDEO_ID or https://youtu.be/VIDEO_ID"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('video_url') border-red-300 @enderror" />
                        @error('video_url')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="mt-1 text-xs text-slate-500">
                            Enter any YouTube URL format - it will be automatically converted to embed format
                        </p>
                    </div>

                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                        <div class="flex gap-3">
                            <div class="flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold text-blue-900 mb-1">How to add YouTube video</h4>
                                <ol class="text-xs text-blue-800 space-y-1 list-decimal list-inside">
                                    <li>Go to your YouTube video</li>
                                    <li>Copy the URL from your browser address bar</li>
                                    <li>Paste it here - any format works!</li>
                                    <li>Examples: https://www.youtube.com/watch?v=VIDEO_ID or https://youtu.be/VIDEO_ID</li>
                                    <li>The system will automatically convert it to the correct format</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-white shadow-card rounded-xl p-6 md:p-8">
                <h2 class="section-title">Global Achievements</h2>

                <div class="space-y-7">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="achievement_1_value" class="field-label req">
                                Achievement 1 - Value
                            </label>
                            <input id="achievement_1_value" name="achievement_1_value" type="text"
                                value="{{ old('achievement_1_value', $aboutSection->achievement_1_value ?? '57') }}"
                                placeholder="57"
                                class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('achievement_1_value') border-red-300 @enderror" />
                            @error('achievement_1_value')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="achievement_1_label" class="field-label req">
                                Achievement 1 - Label
                            </label>
                            <input id="achievement_1_label" name="achievement_1_label" type="text"
                                value="{{ old('achievement_1_label', $aboutSection->achievement_1_label ?? 'Countries Represented') }}"
                                placeholder="Countries Represented"
                                class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('achievement_1_label') border-red-300 @enderror" />
                            @error('achievement_1_label')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="achievement_2_value" class="field-label req">
                                Achievement 2 - Value
                            </label>
                            <input id="achievement_2_value" name="achievement_2_value" type="text"
                                value="{{ old('achievement_2_value', $aboutSection->achievement_2_value ?? '100+') }}"
                                placeholder="100+"
                                class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('achievement_2_value') border-red-300 @enderror" />
                            @error('achievement_2_value')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="achievement_2_label" class="field-label req">
                                Achievement 2 - Label
                            </label>
                            <input id="achievement_2_label" name="achievement_2_label" type="text"
                                value="{{ old('achievement_2_label', $aboutSection->achievement_2_label ?? 'International Partner Institutions') }}"
                                placeholder="International Partner Institutions"
                                class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('achievement_2_label') border-red-300 @enderror" />
                            @error('achievement_2_label')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="achievement_3_value" class="field-label req">
                                Achievement 3 - Value
                            </label>
                            <input id="achievement_3_value" name="achievement_3_value" type="text"
                                value="{{ old('achievement_3_value', $aboutSection->achievement_3_value ?? 'Top 700') }}"
                                placeholder="Top 700"
                                class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('achievement_3_value') border-red-300 @enderror" />
                            @error('achievement_3_value')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="achievement_3_label" class="field-label req">
                                Achievement 3 - Label
                            </label>
                            <input id="achievement_3_label" name="achievement_3_label" type="text"
                                value="{{ old('achievement_3_label', $aboutSection->achievement_3_label ?? 'QS World University Rankings') }}"
                                placeholder="QS World University Rankings"
                                class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('achievement_3_label') border-red-300 @enderror" />
                            @error('achievement_3_label')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="achievement_4_value" class="field-label req">
                                Achievement 4 - Value
                            </label>
                            <input id="achievement_4_value" name="achievement_4_value" type="text"
                                value="{{ old('achievement_4_value', $aboutSection->achievement_4_value ?? '50+') }}"
                                placeholder="50+"
                                class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('achievement_4_value') border-red-300 @enderror" />
                            @error('achievement_4_value')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="achievement_4_label" class="field-label req">
                                Achievement 4 - Label
                            </label>
                            <input id="achievement_4_label" name="achievement_4_label" type="text"
                                value="{{ old('achievement_4_label', $aboutSection->achievement_4_label ?? 'Global Mobility Programs') }}"
                                placeholder="Global Mobility Programs"
                                class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('achievement_4_label') border-red-300 @enderror" />
                            @error('achievement_4_label')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="achievement_5_value" class="field-label req">
                                Achievement 5 - Value
                            </label>
                            <input id="achievement_5_value" name="achievement_5_value" type="text"
                                value="{{ old('achievement_5_value', $aboutSection->achievement_5_value ?? 'Top 150') }}"
                                placeholder="Top 150"
                                class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('achievement_5_value') border-red-300 @enderror" />
                            @error('achievement_5_value')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="achievement_5_label" class="field-label req">
                                Achievement 5 - Label
                            </label>
                            <input id="achievement_5_label" name="achievement_5_label" type="text"
                                value="{{ old('achievement_5_label', $aboutSection->achievement_5_label ?? 'UI GreenMetric World University') }}"
                                placeholder="UI GreenMetric World University"
                                class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('achievement_5_label') border-red-300 @enderror" />
                            @error('achievement_5_label')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
@endsection
