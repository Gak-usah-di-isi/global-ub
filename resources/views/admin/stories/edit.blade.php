@extends('layouts.app')

@section('title', 'Dashboard - Edit Story')

@section('content')
    <div class="space-y-6">
        <nav class="text-[12px] font-medium flex items-center gap-1 text-slate-500">
            <a href="{{ route('stories.index') }}" class="hover:text-slate-700 cursor-pointer">Stories</a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="m9 6 6 6-6 6" />
            </svg>
            <span class="text-slate-700">Edit Story</span>
        </nav>

        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <h1 class="text-[24px] md:text-[26px] font-semibold text-slate-800">Edit Story</h1>
            <div class="flex gap-3">
                <a href="{{ route('stories.index') }}"
                    class="h-[42px] px-6 rounded-md text-[13px] font-medium bg-[#E0E6F2] hover:bg-[#d6deec] text-slate-700 transition flex items-center">Back</a>
                <button type="submit" form="edit-form"
                    class="h-[42px] px-7 rounded-md text-[13px] font-semibold bg-primary-500 hover:bg-primary-600 text-white transition">Save
                    Changes</button>
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

        <form id="edit-form" action="{{ route('stories.update', $story->slug) }}" method="POST"
            enctype="multipart/form-data" class="space-y-8">
            @csrf
            @method('PUT')
            <section class="bg-white shadow-card rounded-xl p-6 md:p-8">
                <h2 class="section-title">Story Information</h2>

                <div class="space-y-7">
                    <div>
                        <label for="title" class="field-label req">Title</label>
                        <input id="title" name="title" type="text" value="{{ old('title', $story->title) }}"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none @error('title') border-red-300 @enderror">
                        @error('title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="category_story" class="field-label req">Category</label>
                        <input id="category_story" name="category_story" type="text"
                            value="{{ old('category_story', $story->category_story) }}"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none @error('category_story') border-red-300 @enderror">
                        @error('category_story')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="description" class="field-label req">Description</label>
                        <textarea id="description" name="description" rows="4"
                            class="mt-2 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 py-3 text-[13px] focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none resize-vertical @error('description') border-red-300 @enderror">{{ old('description', $story->description) }}</textarea>
                        @error('description')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="video_url" class="field-label">Video URL</label>
                        <input id="video_url" name="video_url" type="url"
                            value="{{ old('video_url', $story->video_url) }}"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none @error('video_url') border-red-300 @enderror">
                        @error('video_url')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    @if ($story->thumbnail)
                        <div>
                            <label class="field-label">Current Thumbnail</label>
                            <img src="{{ asset('storage/' . $story->thumbnail) }}"
                                class="max-w-xs mt-2 rounded-md border border-slate-200" />
                        </div>
                    @endif

                    <div>
                        <label for="thumbnail" class="field-label">
                            @if ($story->thumbnail)
                                Replace Thumbnail
                            @else
                                Upload Thumbnail
                            @endif
                        </label>
                        <input id="thumbnail" name="thumbnail" type="file" accept="image/*"
                            class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100 border border-[#E3E9F2] rounded-lg @error('thumbnail') border-red-300 @enderror">
                        @error('thumbnail')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
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
    </style>
@endsection
