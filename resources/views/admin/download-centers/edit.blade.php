@extends('layouts.app')

@section('title', 'Dashboard - Edit Download Center')

@section('content')
    <div class="space-y-6">

        <nav class="text-[12px] font-medium flex items-center gap-1 text-slate-500">
            <a href="{{ route('download-center.index') }}" class="hover:text-slate-700 cursor-pointer">
                Download Center
            </a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" strokeWidth="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="m9 6 6 6-6 6" />
            </svg>
            <span class="text-slate-700">Edit File</span>
        </nav>

        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <h1 class="text-[24px] md:text-[26px] font-semibold text-slate-800">
                Edit Download File
            </h1>
            <div class="flex gap-3">
                <a href="{{ route('download-center.index') }}"
                    class="h-[42px] px-6 rounded-md text-[13px] font-medium bg-[#E0E6F2] hover:bg-[#d6deec] text-slate-700 transition flex items-center">
                    Back
                </a>
                <button type="submit" form="edit-form"
                    class="h-[42px] px-7 rounded-md text-[13px] font-semibold bg-primary-500 hover:bg-primary-600 text-white transition">
                    Update File
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
        <form id="edit-form" action="{{ route('download-center.update', $downloadCenter->slug) }}" method="POST"
            enctype="multipart/form-data" class="space-y-8">
            @csrf
            @method('PUT')
            <section class="bg-white shadow-card rounded-xl p-6 md:p-8">
                <h2 class="section-title">File Information</h2>

                <div class="space-y-7">
                    <div>
                        <label class="field-label">Choose Icon</label>
                        <div class="flex gap-4 flex-wrap">
                            @foreach ($icons as $icon)
                                <label class="flex flex-col items-center cursor-pointer">
                                    <input type="radio" name="icon_id" value="{{ $icon->id }}"
                                        {{ old('icon_id', $study->icon_id) == $icon->id ? 'checked' : '' }}>
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
                            File Title
                        </label>
                        <input id="title" name="title" type="text"
                            value="{{ old('title', $downloadCenter->title) }}" required placeholder="Enter file title"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('title') border-red-300 @enderror" />
                        @error('title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="description" class="field-label">
                            Description
                        </label>
                        <textarea id="description" name="description" rows="4" placeholder="Enter file description"
                            class="mt-2 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 py-3 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors resize-vertical @error('description') border-red-300 @enderror">{{ old('description', $downloadCenter->description) }}</textarea>
                        @error('description')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="help-text">
                            Optional description for the file
                        </p>
                    </div>

                    @if ($downloadCenter->file)
                        <div>
                            <label class="field-label">Current File</label>
                            <div class="mt-2 p-3 bg-slate-50 rounded-lg flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    <span class="text-sm text-slate-700">{{ basename($downloadCenter->file) }}</span>
                                </div>
                                <a href="{{ asset('storage/' . $downloadCenter->file) }}" target="_blank"
                                    class="text-primary-500 hover:text-primary-600 text-sm font-medium">
                                    Download
                                </a>
                            </div>
                        </div>
                    @endif

                    <div>
                        <label for="file" class="field-label">
                            @if ($downloadCenter->file)
                                Replace File
                            @else
                                File Upload
                            @endif
                        </label>
                        <div class="mt-2">
                            <input id="file" name="file" type="file"
                                accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx"
                                class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100 border border-[#E3E9F2] rounded-lg @error('file') border-red-300 @enderror" />
                        </div>
                        @error('file')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="help-text">
                            @if ($downloadCenter->file)
                                Leave empty to keep current file.
                            @endif
                            Supported formats: JPG, JPEG, PNG, PDF, DOC, DOCX, XLS, XLSX, PPT, PPTX. Maximum size: 10MB
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
@endsection
