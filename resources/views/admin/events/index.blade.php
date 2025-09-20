@extends('layouts.app')

@section('title', 'Dashboard - Events')

@section('content')
    <h1
        class="text-[22px] md:text-[28px] leading-[30px] md:leading-[36px] font-semibold tracking-normal text-slate-800 mb-6">
        Event Management
    </h1>

    @if (session('success'))
        <div class="bg-green-50 border border-green-200 text-green-600 px-4 py-3 rounded-lg text-sm mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-xl shadow-card p-4">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between mb-4">
            <h2 class="text-[15px] font-medium text-slate-800">Events</h2>
            <a href="{{ route('events.create') }}"
                class="inline-flex items-center gap-1.5 rounded-md bg-primary-500 hover:bg-primary-600 text-white text-[13px] font-medium px-3.5 py-2 transition self-start">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                Add Event
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="custom-table w-full min-w-[800px]">
                <thead class="bg-[#E3E7F4] p-2">
                    <tr>
                        <th class="rounded-tl-lg">Image</th>
                        <th>Event Name</th>
                        <th>Event Type</th>
                        <th>Date & Time</th>
                        <th>Location</th>
                        <th>Expected Attendees</th>
                        <th>Status</th>
                        <th class="rounded-tr-lg">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($events as $event)
                        <tr>
                            <td>
                                @if ($event->image)
                                    <img src="{{ asset('storage/' . $event->image) }}" alt="Event Image"
                                        class="w-12 h-12 object-cover rounded-md border border-slate-200" />
                                @else
                                    <span class="text-slate-400">No image</span>
                                @endif
                            </td>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->event_type }}</td>
                            <td>
                                {{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}
                                <br>
                                {{ \Carbon\Carbon::parse($event->start_time)->format('h:i A') }} -
                                {{ \Carbon\Carbon::parse($event->end_time)->format('h:i A') }}
                            </td>
                            <td>{{ $event->location }}</td>
                            <td>{{ $event->expected_attendees }}</td>
                            <td>
                                @if ($event->status === 'upcoming')
                                    <span
                                        class="inline-block px-2 py-1 text-[12px] font-medium bg-green-100 text-green-800 rounded-full">
                                        Upcoming
                                    </span>
                                @elseif ($event->status === 'ongoing')
                                    <span
                                        class="inline-block px-2 py-1 text-[12px] font-medium bg-blue-100 text-blue-800 rounded-full">
                                        Ongoing
                                    </span>
                                @else
                                    <span
                                        class="inline-block px-2 py-1 text-[12px] font-medium bg-gray-100 text-gray-800 rounded-full">
                                        Past
                                    </span>
                                @endif
                            </td>
                            <td>
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('events.edit', $event->slug) }}"
                                        class="p-1.5 rounded-md hover:bg-blue-50 text-blue-600 transition" title="Edit">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </a>
                                    <form action="{{ route('events.destroy', $event->slug) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this event?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="p-1.5 rounded-md hover:bg-red-50 text-red-600 transition" title="Delete">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center py-8 text-slate-500">
                                <div class="flex flex-col items-center gap-2">
                                    <svg class="w-5 h-5 {{ request()->routeIs('events.*') ? 'text-primary-600' : 'text-slate-600' }}"
                                        fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                    </svg>
                                    <span>No Events found</span>
                                    <a href="{{ route('events.create') }}"
                                        class="text-primary-500 hover:text-primary-600 text-sm font-medium">
                                        Create your first Event
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if ($events->hasPages())
            <div class="mt-6">
                {{ $events->links() }}
            </div>
        @endif
    </div>
@endsection
