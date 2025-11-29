@extends('layouts.app')

@section('title', 'Dashboard - Create Program')

@section('content')
    <div class="space-y-6">
        <nav class="text-[12px] font-medium flex items-center gap-1 text-slate-500">
            <a href="{{ route('programs.index') }}" class="hover:text-slate-700 cursor-pointer">
                Programs
            </a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" strokeWidth="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="m9 6 6 6-6 6" />
            </svg>
            <span class="text-slate-700">Create Program</span>
        </nav>


        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <h1 class="text-[24px] md:text-[26px] font-semibold text-slate-800">
                Create Program
            </h1>
            <div class="flex gap-3">
                <a href="{{ route('programs.index') }}"
                    class="h-[42px] px-6 rounded-md text-[13px] font-medium bg-[#E0E6F2] hover:bg-[#d6deec] text-slate-700 transition flex items-center">
                    Back
                </a>
                <button type="submit" form="create-form"
                    class="h-[42px] px-7 rounded-md text-[13px] font-semibold bg-primary-500 hover:bg-primary-600 text-white transition">
                    Create Program
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

        <form id="create-form" action="{{ route('programs.store') }}" method="POST" enctype="multipart/form-data"
            class="space-y-8">
            @csrf
            <section class="bg-white shadow-card rounded-xl p-6 md:p-8">
                <h2 class="section-title">Program Information</h2>

                <div class="space-y-7">
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
                        <label for="program_type" class="field-label req">
                            Program Type
                        </label>
                        <input id="program_type" name="program_type" type="text" value="{{ old('program_type') }}"
                            placeholder="Enter program type"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('program_type') border-red-300 @enderror" />
                        @error('program_type')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="description" class="field-label">
                            Description
                        </label>
                        <textarea id="description" name="description" rows="4" placeholder="Enter description"
                            class="mt-2 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 py-3 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors resize-vertical @error('description') border-red-300 @enderror">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
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

                    <div>
                        <label for="link" class="field-label">
                            Program Link
                        </label>
                        <input id="link" name="link" type="url" value="{{ old('link') }}"
                            placeholder="https://example.com/program"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('link') border-red-300 @enderror" />
                        @error('link')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="help-text">
                            Optional: External URL for more information about the program
                        </p>
                    </div>

                    <div>
                        <label for="report_link" class="field-label">
                            Report Link
                        </label>
                        <input id="report_link" name="report_link" type="url" value="{{ old('report_link') }}"
                            placeholder="https://example.com/report.pdf"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('report_link') border-red-300 @enderror" />
                        @error('report_link')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="help-text">
                            Optional: Link to report file or page (opens in new tab)
                        </p>
                    </div>

                    <div>
                        <label for="video_link" class="field-label">
                            YouTube Video Link
                        </label>
                        <input id="video_link" name="video_link" type="url" value="{{ old('video_link') }}"
                            placeholder="https://www.youtube.com/watch?v=..."
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('video_link') border-red-300 @enderror" />
                        @error('video_link')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="help-text">
                            Optional: YouTube URL to showcase the program (opens in new tab)
                        </p>
                    </div>

                    <div>
                        <label class="field-label">
                            Reference Links (Maximum 5)
                        </label>
                        <div id="references-container" class="space-y-3 mt-2">
                            <div class="reference-item flex gap-2">
                                <input name="references[]" type="url" value="{{ old('references.0') }}"
                                    placeholder="https://example.com/reference-1"
                                    class="h-11 flex-1 rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors" />
                            </div>
                        </div>
                        <button type="button" id="add-reference"
                            class="mt-3 inline-flex items-center gap-1.5 px-3 py-2 text-[13px] font-medium text-primary-600 hover:text-primary-700 hover:bg-primary-50 rounded-md transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            Add Reference Link
                        </button>
                        @error('references')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="help-text">
                            Optional: Add up to 5 reference links that will appear below the Apply Now button
                        </p>
                    </div>

                    <div>
                        <label for="image" class="field-label">
                            Program Image
                        </label>
                        <div class="mt-2">
                            <input id="image" name="image" type="file" accept=".jpg,.jpeg,.png,.gif"
                                class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100 border border-[#E3E9F2] rounded-lg @error('image') border-red-300 @enderror" />
                        </div>
                        @error('image')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="help-text">
                            Supported formats: JPG, JPEG, PNG, GIF. Max size: 5MB
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

            // Reference links dynamic add/remove
            const referencesContainer = document.getElementById('references-container');
            const addReferenceBtn = document.getElementById('add-reference');
            let referenceCount = 1;

            addReferenceBtn.addEventListener('click', function() {
                if (referenceCount >= 5) {
                    alert('Maximum 5 reference links allowed');
                    return;
                }

                const newItem = document.createElement('div');
                newItem.className = 'reference-item flex gap-2';
                newItem.innerHTML = `
                    <input name="references[]" type="url" placeholder="https://example.com/reference-${referenceCount + 1}"
                        class="h-11 flex-1 rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors" />
                    <button type="button" class="remove-reference h-11 px-3 rounded-lg border border-red-200 bg-red-50 text-red-600 hover:bg-red-100 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                `;

                referencesContainer.appendChild(newItem);
                referenceCount++;

                // Update visibility
                updateAddButtonVisibility();
            });

            // Event delegation for remove buttons
            referencesContainer.addEventListener('click', function(e) {
                if (e.target.closest('.remove-reference')) {
                    e.target.closest('.reference-item').remove();
                    referenceCount--;
                    updateAddButtonVisibility();
                }
            });

            function updateAddButtonVisibility() {
                if (referenceCount >= 5) {
                    addReferenceBtn.style.display = 'none';
                } else {
                    addReferenceBtn.style.display = 'inline-flex';
                }
            }
        });
    </script>
@endsection
