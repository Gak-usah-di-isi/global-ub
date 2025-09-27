@extends('layouts.app')

@section('title', 'Dashboard - Create Gallery')

@section('content')
    <div class="space-y-6">
        <nav class="text-[12px] font-medium flex items-center gap-1 text-slate-500">
            <a href="{{ route('galleries.index') }}" class="hover:text-slate-700 cursor-pointer">
                Galleries
            </a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" strokeWidth="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="m9 6 6 6-6 6" />
            </svg>
            <span class="text-slate-700">Create Gallery</span>
        </nav>

        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <h1 class="text-[24px] md:text-[26px] font-semibold text-slate-800">
                Create New Gallery
            </h1>
            <div class="flex gap-3">
                <a href="{{ route('galleries.index') }}"
                    class="h-[42px] px-6 rounded-md text-[13px] font-medium bg-[#E0E6F2] hover:bg-[#d6deec] text-slate-700 transition flex items-center">
                    Back
                </a>
                <button type="submit" form="create-form"
                    class="h-[42px] px-7 rounded-md text-[13px] font-semibold bg-primary-500 hover:bg-primary-600 text-white transition">
                    Create Gallery
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

        <form id="create-form" action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data"
            class="space-y-8">
            @csrf
            <section class="bg-white shadow-card rounded-xl p-6 md:p-8">
                <h2 class="section-title">Gallery Information</h2>

                <div class="space-y-7">
                    <div>
                        <label for="title" class="field-label req">
                            Gallery Title
                        </label>
                        <input id="title" name="title" type="text" value="{{ old('title') }}"
                            placeholder="Enter gallery title"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('title') border-red-300 @enderror" />
                        @error('title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="category_gallery" class="field-label req">
                            Gallery Category
                        </label>
                        <input id="category_gallery" name="category_gallery" type="text"
                            value="{{ old('category_gallery') }}"
                            placeholder="Enter gallery category (e.g., Events, Activities, Campus)"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('category_gallery') border-red-300 @enderror" />
                        @error('category_gallery')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="description" class="field-label">
                            Description
                        </label>
                        <textarea id="description" name="description" rows="4" placeholder="Enter gallery description"
                            class="mt-2 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 py-3 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors resize-vertical @error('description') border-red-300 @enderror">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="help-text">
                            Optional description for the gallery
                        </p>
                    </div>

                    <div>
                        <label class="field-label req">
                            Gallery Images
                        </label>
                        <div id="image-inputs" class="space-y-3">
                            <div class="image-input-group">
                                <div class="flex items-center gap-3">
                                    <input name="images[]" type="file" accept="image/*"
                                        class="flex-1 text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100 border border-[#E3E9F2] rounded-lg @error('images') border-red-300 @enderror" />
                                    <button type="button" onclick="removeImageInput(this)"
                                        class="remove-btn hidden px-3 py-2 text-red-600 hover:text-red-800 text-sm border border-red-300 rounded-md hover:bg-red-50">
                                        Remove
                                    </button>
                                </div>
                                <div class="image-preview mt-2 hidden">
                                    <img class="preview-img w-20 h-20 object-cover rounded-lg border-2 border-gray-200"
                                        src="" alt="Preview">
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 flex gap-2">
                            <button type="button" onclick="addImageInput()"
                                class="inline-flex items-center gap-1.5 px-3 py-2 text-sm font-medium text-primary-600 bg-primary-50 border border-primary-200 rounded-md hover:bg-primary-100">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
                                Add Another Image
                            </button>
                        </div>

                        @error('images')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        @error('images.*')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="help-text">
                            Supported formats: JPEG, JPG, PNG, GIF, WEBP. Maximum size: 5MB per image.
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
            color: #374151;
            display: block;
        }

        .field-label.req::after {
            content: ' *';
            color: #EF4444;
        }

        .section-title {
            font-size: 16px;
            font-weight: 600;
            color: #1E293B;
            margin-bottom: 24px;
            padding-bottom: 12px;
            border-bottom: 1px solid #E2E8F0;
        }

        .help-text {
            font-size: 12px;
            color: #64748B;
            margin-top: 4px;
        }

        .preview-image {
            width: 100%;
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
            border: 2px solid #E2E8F0;
        }
    </style>

    <script>
        let imageInputCount = 1;

        function addImageInput() {

            const imageInputsContainer = document.getElementById('image-inputs');
            const newInputGroup = document.createElement('div');
            newInputGroup.className = 'image-input-group';

            newInputGroup.innerHTML = `
                <div class="flex items-center gap-3">
                    <input name="images[]" type="file" accept="image/*" 
                        class="flex-1 text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100 border border-[#E3E9F2] rounded-lg" />
                    <button type="button" onclick="removeImageInput(this)" 
                        class="remove-btn px-3 py-2 text-red-600 hover:text-red-800 text-sm border border-red-300 rounded-md hover:bg-red-50">
                        Remove
                    </button>
                </div>
                <div class="image-preview mt-2 hidden">
                    <img class="preview-img w-20 h-20 object-cover rounded-lg border-2 border-gray-200" src="" alt="Preview">
                </div>
            `;

            imageInputsContainer.appendChild(newInputGroup);
            imageInputCount++;

            // Add event listener to the new input
            const newInput = newInputGroup.querySelector('input[type="file"]');
            newInput.addEventListener('change', handleImagePreview);

            updateRemoveButtons();
        }

        function removeImageInput(button) {
            const inputGroup = button.closest('.image-input-group');
            inputGroup.remove();
            imageInputCount--;
            updateRemoveButtons();
        }

        function updateRemoveButtons() {
            const removeButtons = document.querySelectorAll('.remove-btn');
            removeButtons.forEach(btn => {
                if (imageInputCount > 1) {
                    btn.classList.remove('hidden');
                } else {
                    btn.classList.add('hidden');
                }
            });
        }

        function handleImagePreview(event) {
            const file = event.target.files[0];
            const inputGroup = event.target.closest('.image-input-group');
            const previewContainer = inputGroup.querySelector('.image-preview');
            const previewImg = inputGroup.querySelector('.preview-img');

            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    previewContainer.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            } else {
                previewContainer.classList.add('hidden');
            }
        }

        // Initialize event listeners
        document.addEventListener('DOMContentLoaded', function() {
            // Add event listener to initial input
            const initialInput = document.querySelector('input[name="images[]"]');
            if (initialInput) {
                initialInput.addEventListener('change', handleImagePreview);
            }
        });
    </script>
@endsection
