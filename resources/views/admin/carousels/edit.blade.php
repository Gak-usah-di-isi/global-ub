@extends('layouts.app')

@section('title', 'Dashboard - Edit Carousel')

@section('content')
    <div class="space-y-6">
        <nav class="text-[12px] font-medium flex items-center gap-1 text-slate-500">
            <a href="{{ route('carousels.index') }}" class="hover:text-slate-700 cursor-pointer">
                Carousels
            </a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" strokeWidth="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="m9 6 6 6-6 6" />
            </svg>
            <span class="text-slate-700">Edit Carousel</span>
        </nav>
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <h1 class="text-[24px] md:text-[26px] font-semibold text-slate-800">
                Edit Carousel Slide
            </h1>
            <div class="flex gap-3">
                <a href="{{ route('carousels.index') }}"
                    class="h-[42px] px-6 rounded-md text-[13px] font-medium bg-[#E0E6F2] hover:bg-[#d6deec] text-slate-700 transition flex items-center">
                    Back
                </a>
                <button type="submit" form="edit-form"
                    class="h-[42px] px-7 rounded-md text-[13px] font-semibold bg-primary-500 hover:bg-primary-600 text-white transition">
                    Update Carousel
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
        <form id="edit-form" action="{{ route('carousels.update', $carousel->id) }}" method="POST"
            enctype="multipart/form-data" class="space-y-8">
            @csrf
            @method('PUT')
            <section class="bg-white shadow-card rounded-xl p-6 md:p-8">
                <h2 class="section-title">Carousel Information</h2>

                <div class="space-y-7">
                    <div>
                        <label for="title" class="field-label req">
                            Title
                        </label>
                        <input id="title" name="title" type="text" value="{{ old('title', $carousel->title) }}"
                            placeholder="e.g. Turning Insight<br><span class=&quot;text-[#6699FF]&quot;>Into World Impact</span>"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('title')
border-red-300
@enderror" />
                        @error('title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="help-text">
                            You can use HTML tags for styling. Use &lt;br&gt; for line break and &lt;span
                            class="text-[#6699FF]"&gt; for blue color text.
                        </p>
                    </div>

                    <div>
                        <label for="subtitle" class="field-label req">
                            Subtitle
                        </label>
                        <textarea id="subtitle" name="subtitle" rows="3"
                            placeholder="e.g. Building pathways for global engagement through<br>education, culture, and innovation"
                            class="mt-2 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 py-2 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors resize-none @error('subtitle')
border-red-300
@enderror">{{ old('subtitle', $carousel->subtitle) }}</textarea>
                        @error('subtitle')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="help-text">
                            You can use &lt;br&gt; tag for line break in subtitle.
                        </p>
                    </div>

                    <div>
                        <label for="order" class="field-label req">
                            Display Order
                        </label>
                        <input id="order" name="order" type="number" value="{{ old('order', $carousel->order) }}"
                            min="0" placeholder="0"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('order') border-red-300 @enderror" />
                        @error('order')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="help-text">
                            Lower numbers appear first in the carousel
                        </p>
                    </div>

                    <div>
                        <label class="field-label">
                            Carousel Image
                        </label>
                        @if ($carousel->image)
                            <div class="mt-2 mb-4">
                                <img src="{{ asset('storage/' . $carousel->image) }}" alt="Current image"
                                    class="rounded-lg max-h-64 border border-slate-200" />
                                <p class="text-xs text-slate-500 mt-2">Current image</p>
                            </div>
                        @endif
                        <div class="mt-2 border-2 border-dashed border-slate-200 rounded-lg p-6 text-center hover:border-primary-400 transition-colors cursor-pointer"
                            onclick="document.getElementById('image').click()">
                            <div class="flex flex-col items-center gap-2">
                                <svg class="w-12 h-12 text-slate-400" fill="none" stroke="currentColor"
                                    stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                </svg>
                                <p class="text-sm text-slate-600">
                                    <span class="text-primary-600 font-medium">Click to upload</span> or drag and drop
                                </p>
                                <p class="text-xs text-slate-500">PNG, JPG, WEBP up to 2MB (optional - leave empty to keep
                                    current image)</p>
                            </div>
                        </div>
                        <input id="image" name="image" type="file" class="hidden" accept="image/*"
                            onchange="previewImage(event)" />
                        <div id="imagePreview" class="mt-4 hidden">
                            <img src="" alt="Preview" class="rounded-lg max-h-64 mx-auto" />
                        </div>
                        @error('image')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center">
                        <input id="is_active" name="is_active" type="checkbox" value="1"
                            {{ old('is_active', $carousel->is_active) ? 'checked' : '' }}
                            class="w-4 h-4 text-primary-600 bg-gray-100 border-gray-300 rounded focus:ring-primary-500 focus:ring-2" />
                        <label for="is_active" class="ml-2 text-sm font-medium text-slate-700">
                            Active (Show in carousel)
                        </label>
                    </div>
                </div>
            </section>
        </form>
    </div>

    <script>
        function previewImage(event) {
            const preview = document.getElementById('imagePreview');
            const img = preview.querySelector('img');
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    img.src = e.target.result;
                    preview.classList.remove('hidden');
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
