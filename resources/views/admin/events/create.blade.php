@extends('layouts.app')

@section('title', 'Dashboard - Create Event')

@section('content')
    <div class="space-y-6">
        <nav class="text-[12px] font-medium flex items-center gap-1 text-slate-500">
            <a href="{{ route('events.index') }}" class="hover:text-slate-700 cursor-pointer">
                Events
            </a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" strokeWidth="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="m9 6 6 6-6 6" />
            </svg>
            <span class="text-slate-700">Create Event</span>
        </nav>
    </div>

    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <h1 class="text-[24px] md:text-[26px] font-semibold text-slate-800">
            Create Event
        </h1>
        <div class="flex gap-3">
            <a href="{{ route('events.index') }}"
                class="h-[42px] px-6 rounded-md text-[13px] font-medium bg-[#E0E6F2] hover:bg-[#d6deec] text-slate-700 transition flex items-center">
                Back
            </a>
            <button type="submit" form="create-form"
                class="h-[42px] px-7 rounded-md text-[13px] font-semibold bg-primary-500 hover:bg-primary-600 text-white transition">
                Create Event
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

    <form id="create-form" action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data"
        class="space-y-8">
        @csrf
        <section class="bg-white shadow-card rounded-xl p-6 md:p-8">
            <h2 class="section-title">Event Information</h2>

            <div class="space-y-7">
                <div>
                    <label for="title" class="field-label req">
                        Event Name
                    </label>
                    <input id="title" name="title" type="text" value="{{ old('title') }}" required
                        placeholder="Enter event name"
                        class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('title') border-red-300 @enderror" />
                    @error('title')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="event_type" class="field-label req">
                        Event Type
                    </label>
                    <input id="event_type" name="event_type" type="text" value="{{ old('event_type') }}" required
                        placeholder="Enter event type (e.g., Conference, Workshop)"
                        class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('event_type') border-red-300 @enderror" />
                    @error('event_type')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label for="event_date" class="field-label req">
                            Event Date
                        </label>
                        <input id="event_date" name="event_date" type="date" value="{{ old('event_date') }}" required
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('event_date') border-red-300 @enderror" />
                        @error('event_date')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="start_time" class="field-label req">
                            Start Time
                        </label>
                        <input id="start_time" name="start_time" type="time" value="{{ old('start_time') }}" required
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('start_time') border-red-300 @enderror" />
                        @error('start_time')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="end_time" class="field-label req">
                            End Time
                        </label>
                        <input id="end_time" name="end_time" type="time" value="{{ old('end_time') }}" required
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('end_time') border-red-300 @enderror" />
                        @error('end_time')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="location" class="field-label req">
                            Location
                        </label>
                        <input id="location" name="location" type="text" value="{{ old('location') }}" required
                            placeholder="Enter event location"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('location') border-red-300 @enderror" />
                        @error('location')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="expected_attendees" class="field-label">
                        Expected Number of Attendees
                    </label>
                    <input id="expected_attendees" name="expected_attendees" type="number" min="1"
                        value="{{ old('expected_attendees') }}" placeholder="Enter expected number of attendees"
                        class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('expected_attendees') border-red-300 @enderror" />
                    @error('expected_attendees')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <p class="help-text">
                        Optional field to indicate the expected number of attendees
                    </p>
                </div>

                <div>
                    <label for="description" class="field-label">
                        Description
                    </label>
                    <textarea id="description" name="description" rows="4" placeholder="Enter event description"
                        class="mt-2 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 py-3 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors resize-vertical @error('description') border-red-300 @enderror">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <p class="help-text">
                        Optional description for the event
                    </p>
                </div>

                <div>
                    <label for="image" class="field-label">
                        Event Image
                    </label>
                    <div class="mt-2">
                        <input id="image" name="image" type="file" accept=".jpg,.jpeg,.png,.gif"
                            class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100 border border-[#E3E9F2] rounded-lg @error('image') border-red-300 @enderror" />
                    </div>
                    @error('image')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <p class="help-text">
                        Supported formats: JPG, JPEG, PNG, GIF. Maximum size: 5MB
                    </p>
                </div>

                <div>
                    <label for="status" class="field-label req">
                        Status
                    </label>
                    <select id="status" name="status" required
                        class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('status') border-red-300 @enderror">
                        <option value="upcoming" {{ old('status') == 'upcoming' ? 'selected' : '' }}>Upcoming</option>
                        <option value="ongoing" {{ old('status') == 'ongoing' ? 'selected' : '' }}>Ongoing</option>
                        <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                    </select>
                    @error('status')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </section>
    </form>
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
