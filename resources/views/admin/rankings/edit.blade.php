@extends('layouts.app')

@section('title', 'Dashboard - Edit Ranking')

@section('content')
    <div class="space-y-6">
        <nav class="text-[12px] font-medium flex items-center gap-1 text-slate-500">
            <a href="{{ route('rankings.index') }}" class="hover:text-slate-700 cursor-pointer">
                Rankings
            </a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" strokeWidth="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="m9 6 6 6-6 6" />
            </svg>
            <span class="text-slate-700">Edit Ranking</span>
        </nav>
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <h1 class="text-[24px] md:text-[26px] font-semibold text-slate-800">
                Edit University Ranking
            </h1>
            <div class="flex gap-3">
                <a href="{{ route('rankings.index') }}"
                    class="h-[42px] px-6 rounded-md text-[13px] font-medium bg-[#E0E6F2] hover:bg-[#d6deec] text-slate-700 transition flex items-center">
                    Back
                </a>
                <button type="submit" form="edit-form"
                    class="h-[42px] px-7 rounded-md text-[13px] font-semibold bg-primary-500 hover:bg-primary-600 text-white transition">
                    Update Ranking
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
        <form id="edit-form" action="{{ route('rankings.update', $ranking->id) }}" method="POST"
            enctype="multipart/form-data" class="space-y-8">
            @csrf
            @method('PUT')
            <section class="bg-white shadow-card rounded-xl p-6 md:p-8">
                <h2 class="section-title">Ranking Information</h2>

                <div class="space-y-7">
                    <div>
                        <label class="field-label req">Select Icon</label>
                        <div class="mt-2 grid grid-cols-4 sm:grid-cols-6 md:grid-cols-8 gap-3">
                            @foreach ($icons as $icon)
                                <label class="flex flex-col items-center cursor-pointer">
                                    <input type="radio" name="icon_id" value="{{ $icon->id }}"
                                        {{ old('icon_id', $ranking->icon_id) == $icon->id ? 'checked' : '' }}>
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
                            Title
                        </label>
                        <input id="title" name="title" type="text" value="{{ old('title', $ranking->title) }}"
                            placeholder="e.g. Top 5"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('title') border-red-300 @enderror" />
                        @error('title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="subtitle" class="field-label req">
                            Subtitle
                        </label>
                        <input id="subtitle" name="subtitle" type="text"
                            value="{{ old('subtitle', $ranking->subtitle) }}"
                            placeholder="e.g. Indonesian University (Webometric)"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('subtitle') border-red-300 @enderror" />
                        @error('subtitle')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="description" class="field-label req">
                            Description
                        </label>
                        <textarea id="description" name="description" rows="3" placeholder="e.g. Leading in digital academic visibility"
                            class="mt-2 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 py-2 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors resize-none @error('description') border-red-300 @enderror">{{ old('description', $ranking->description) }}</textarea>
                        @error('description')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="year" class="field-label req">
                            Year
                        </label>
                        <input id="year" name="year" type="text" value="{{ old('year', $ranking->year) }}"
                            placeholder="e.g. 2024"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('year') border-red-300 @enderror" />
                        @error('year')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="order" class="field-label">
                            Display Order
                        </label>
                        <input id="order" name="order" type="number" value="{{ old('order', $ranking->order) }}"
                            min="0" placeholder="0"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('order') border-red-300 @enderror" />
                        @error('order')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="help-text">Lower numbers appear first. Leave at 0 for automatic ordering.</p>
                    </div>

                    <div class="flex items-center gap-3 pt-2">
                        <input id="is_active" name="is_active" type="checkbox" value="1"
                            {{ old('is_active', $ranking->is_active) ? 'checked' : '' }}
                            class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 rounded focus:ring-primary-500 focus:ring-2" />
                        <label for="is_active" class="text-sm font-medium text-slate-700">
                            Active
                        </label>
                    </div>
                </div>
            </section>
        </form>
    </div>
@endsection
