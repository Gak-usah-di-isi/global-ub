@extends('layouts.app')

@section('title', 'Dashboard - Create Study Program')

@section('content')
    <div class="space-y-6">
        <nav class="text-[12px] font-medium flex items-center gap-1 text-slate-500">
            <a href="{{ route('studies.index') }}" class="hover:text-slate-700 cursor-pointer">
                Study Programs
            </a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" strokeWidth="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="m9 6 6 6-6 6" />
            </svg>
            <span class="text-slate-700">Create Study Program</span>
        </nav>
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <h1 class="text-[24px] md:text-[26px] font-semibold text-slate-800">
                Create Study Program
            </h1>
            <div class="flex gap-3">
                <a href="{{ route('studies.index') }}"
                    class="h-[42px] px-6 rounded-md text-[13px] font-medium bg-[#E0E6F2] hover:bg-[#d6deec] text-slate-700 transition flex items-center">
                    Back
                </a>
                <button type="submit" form="create-form"
                    class="h-[42px] px-7 rounded-md text-[13px] font-semibold bg-primary-500 hover:bg-primary-600 text-white transition">
                    Create Study Program
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
        <form id="create-form" action="{{ route('studies.store') }}" method="POST" class="space-y-8">
            @csrf
            <section class="bg-white shadow-card rounded-xl p-6 md:p-8">
                <h2 class="section-title">Program Information</h2>

                <div class="space-y-7">
                    <div>
                        <label class="field-label">Choose Icon</label>
                        <div class="flex gap-4 flex-wrap">
                            @foreach ($icons as $icon)
                                <label class="flex flex-col items-center cursor-pointer">
                                    <input type="radio" name="icon_id" value="{{ $icon->id }}"
                                        {{ old('icon_id') == $icon->id ? 'checked' : '' }}>
                                    <img src="{{ asset('storage/' . $icon->icon) }}" alt="{{ $icon->name }}"
                                        class="w-12 h-12 object-cover rounded-md border border-slate-200 mt-1 bg-[#6699FF33]" />
                                </label>
                            @endforeach
                        </div>
                        @error('icon_id')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="title" class="field-label req">
                            Program Title
                        </label>
                        <input id="title" name="title" type="text" value="{{ old('title') }}"
                            placeholder="Enter program title"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('title') border-red-300 @enderror" />
                        @error('title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="tagline" class="field-label">
                            Program Tagline
                        </label>
                        <input id="tagline" name="tagline" type="text" value="{{ old('tagline') }}"
                            placeholder="Enter program tagline or motto"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('tagline') border-red-300 @enderror" />
                        @error('tagline')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="help-text">
                            Optional: A short catchy phrase that describes the program
                        </p>
                    </div>

                    <div>
                        <label for="description" class="field-label req">
                            Program Description
                        </label>
                        <textarea id="description" name="description" rows="4" placeholder="Enter program description"
                            class="mt-2 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 py-2 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors resize-none @error('description') border-red-300 @enderror">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-7">
                        <div>
                            <label for="students_count" class="field-label req">
                                Students Count
                            </label>
                            <input id="students_count" name="students_count" type="number"
                                value="{{ old('students_count') }}" placeholder="Enter number of students" min="1"
                                class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('students_count') border-red-300 @enderror" />
                            @error('students_count')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="duration" class="field-label req">
                                Duration
                            </label>
                            <input id="duration" name="duration" type="text" value="{{ old('duration') }}"
                                placeholder="e.g., 4 years, 2 semesters"
                                class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('duration') border-red-300 @enderror" />
                            @error('duration')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="highlights" class="field-label">
                            Program Highlights
                        </label>
                        <textarea id="highlights" name="highlights" rows="3" placeholder="Enter key highlights or features of the program"
                            class="mt-2 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 py-2 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors resize-none @error('highlights') border-red-300 @enderror">{{ old('highlights') }}</textarea>
                        @error('highlights')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="help-text">
                            Optional: Key features, specializations, or unique aspects of the program
                        </p>
                    </div>
                </div>
            </section>
        </form>
    </div>

    <style>
        .field-label {
            font-size: 13px;
            font-weight: 500;
            color: #1e293b;
        }

        .req:after {
            content: " *";
            color: #dc2626;
            font-weight: 600;
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 18px;
        }

        .help-text {
            font-size: 11px;
            color: #64748b;
            margin-top: 6px;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (window.ClassicEditor) {
                ClassicEditor
                    .create(document.querySelector('#highlights'))
                    .catch(error => {
                        console.error(error);
                    });
            }
        });
    </script>
@endsection
