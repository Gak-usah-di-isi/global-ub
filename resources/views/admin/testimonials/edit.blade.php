@extends('layouts.app')

@section('title', 'Dashboard - Edit Testimonial')

@section('content')
    <div class="space-y-6">
        <nav class="text-[12px] font-medium flex items-center gap-1 text-slate-500">
            <a href="{{ route('testimonials.index') }}" class="hover:text-slate-700 cursor-pointer">
                Testimonials
            </a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" strokeWidth="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="m9 6 6 6-6 6" />
            </svg>
            <span class="text-slate-700">Edit Testimonial</span>
        </nav>
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <h1 class="text-[24px] md:text-[26px] font-semibold text-slate-800">
                Edit Testimonial
            </h1>
            <div class="flex gap-3">
                <a href="{{ route('testimonials.index') }}"
                    class="h-[42px] px-6 rounded-md text-[13px] font-medium bg-[#E0E6F2] hover:bg-[#d6deec] text-slate-700 transition flex items-center">
                    Back
                </a>
                <button type="submit" form="edit-form"
                    class="h-[42px] px-7 rounded-md text-[13px] font-semibold bg-primary-500 hover:bg-primary-600 text-white transition">
                    Update Testimonial
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

        <form id="edit-form" action="{{ route('testimonials.update', $testimonial->slug) }}" method="POST"
            enctype="multipart/form-data" class="space-y-8">
            @csrf
            @method('PUT')

            <section class="bg-white shadow-card rounded-xl p-6 md:p-8">
                <h2 class="section-title">Testimonial Information</h2>
                <div class="space-y-7">
                    <div>
                        <label for="name" class="field-label req">Name</label>
                        <input id="name" name="name" type="text" value="{{ old('name', $testimonial->name) }}"
                            placeholder="Enter name"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('name') border-red-300 @enderror" />
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="position" class="field-label req">Position</label>
                        <input id="position" name="position" type="text"
                            value="{{ old('position', $testimonial->position) }}" placeholder="Enter position"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('position') border-red-300 @enderror" />
                        @error('position')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="organization" class="field-label req">Organization</label>
                        <input id="organization" name="organization" type="text"
                            value="{{ old('organization', $testimonial->organization) }}" placeholder="Enter organization"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('organization') border-red-300 @enderror" />
                        @error('organization')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="testimonial_type" class="field-label req">Testimonial Type</label>
                        <input id="testimonial_type" name="testimonial_type" type="text"
                            value="{{ old('testimonial_type', $testimonial->testimonial_type) }}"
                            placeholder="Enter testimonial type"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('testimonial_type') border-red-300 @enderror" />
                        @error('testimonial_type')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="testimonial" class="field-label req">Testimonial</label>
                        <textarea id="testimonial" name="testimonial" rows="4" placeholder="Enter testimonial content"
                            class="mt-2 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 py-2 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors resize-none @error('testimonial') border-red-300 @enderror">{{ old('testimonial', $testimonial->testimonial) }}</textarea>
                        @error('testimonial')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="location" class="field-label req">Location</label>
                        <input id="location" name="location" type="text"
                            value="{{ old('location', $testimonial->location) }}" placeholder="Enter location"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('location') border-red-300 @enderror" />
                        @error('location')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="partnership_since" class="field-label">
                            Partnership Since
                        </label>
                        <input id="partnership_since" name="partnership_since" type="text"
                            value="{{ old('partnership_since', $testimonial->partnership_since) }}"
                            placeholder="Enter partnership since"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('partnership_since') border-red-300 @enderror" />
                        @error('partnership_since')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>


                    <div>
                        <label for="key_achievements" class="field-label">Key Achievements</label>
                        <textarea id="key_achievements" name="key_achievements" rows="3" placeholder="Enter key achievements (optional)"
                            class="mt-2 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 py-2 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors resize-none @error('key_achievements') border-red-300 @enderror">{{ old('key_achievements', $testimonial->key_achievements) }}</textarea>
                        @error('key_achievements')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="help-text">You can list key achievements or highlights related to this testimonial. This
                            field is optional.</p>
                    </div>

                    @if ($testimonial->photo)
                        <div>
                            <label class="field-label">Current Photo</label>
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $testimonial->photo) }}" alt="Current Testimonial Photo"
                                    class="max-w-xs rounded-md border border-slate-200" />
                            </div>
                        </div>
                    @endif

                    <div>
                        <label for="photo" class="field-label">
                            @if ($testimonial->photo)
                                Replace Photo
                            @else
                                Upload Photo
                            @endif
                        </label>
                        <div class="mt-2">
                            <input id="photo" name="photo" type="file" accept="image/*"
                                class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100 border border-[#E3E9F2] rounded-lg @error('photo') border-red-300 @enderror" />
                        </div>
                        @error('photo')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="help-text">
                            @if ($testimonial->photo)
                                Leave empty to keep the current photo.
                            @endif
                            Supported formats: JPG, JPEG, PNG, GIF. Maximum size: 10MB
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
