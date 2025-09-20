@extends('layouts.app')

@section('title', 'Dashboard - Create Partnership')

@section('content')
    <div class="space-y-6">
        <nav class="text-[12px] font-medium flex items-center gap-1 text-slate-500">
            <a href="{{ route('partnerships.index') }}" class="hover:text-slate-700 cursor-pointer">
                Partnerships
            </a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" strokeWidth="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="m9 6 6 6-6 6" />
            </svg>
            <span class="text-slate-700">Create Partnership</span>
        </nav>

        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <h1 class="text-[24px] md:text-[26px] font-semibold text-slate-800">
                Create New Partnership
            </h1>
            <div class="flex gap-3">
                <a href="{{ route('partnerships.index') }}"
                    class="h-[42px] px-6 rounded-md text-[13px] font-medium bg-[#E0E6F2] hover:bg-[#d6deec] text-slate-700 transition flex items-center">
                    Back
                </a>
                <button type="submit" form="create-form"
                    class="h-[42px] px-7 rounded-md text-[13px] font-semibold bg-primary-500 hover:bg-primary-600 text-white transition">
                    Create Partnership
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

        <form id="create-form" action="{{ route('partnerships.store') }}" method="POST" enctype="multipart/form-data"
            class="space-y-8">
            @csrf
            <section class="bg-white shadow-card rounded-xl p-6 md:p-8">
                <h2 class="section-title">Partnership Information</h2>

                <div class="space-y-7">
                    <div>
                        <label for="name" class="field-label req">
                            Partnership Name
                        </label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}"
                            placeholder="Enter partnership name"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('name') border-red-300 @enderror" />
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="website" class="field-label">
                            Website URL
                        </label>
                        <input id="website" name="website" type="url" value="{{ old('website') }}"
                            placeholder="https://example.com"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('website') border-red-300 @enderror" />
                        @error('website')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="help-text">
                            Optional website URL for the partnership
                        </p>
                    </div>

                    <div>
                        <label for="logo" class="field-label">
                            Partnership Logo
                        </label>
                        <div class="mt-2">
                            <input id="logo" name="logo" type="file" accept="image/*"
                                class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100 border border-[#E3E9F2] rounded-lg @error('logo') border-red-300 @enderror" />
                        </div>
                        @error('logo')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="help-text">
                            Supported formats: JPEG, JPG, PNG, GIF, WEBP. Maximum size: 5MB
                        </p>

                        <!-- Logo Preview -->
                        <div id="logo-preview" class="hidden mt-3">
                            <label class="field-label">Preview</label>
                            <img id="preview-img"
                                class="mt-2 w-32 h-32 object-contain rounded-lg border-2 border-gray-200 bg-gray-50"
                                src="" alt="Logo Preview">
                        </div>
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
    </style>

    <script>
        document.getElementById('logo').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const previewContainer = document.getElementById('logo-preview');
            const previewImg = document.getElementById('preview-img');

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
        });
    </script>
@endsection
