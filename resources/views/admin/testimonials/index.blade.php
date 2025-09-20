@extends('layouts.app')

@section('title', 'Dashboard - Testimonial')

@section('content')
    <h1
        class="text-[22px] md:text-[28px] leading-[30px] md:leading-[36px] font-semibold tracking-normal text-slate-800 mb-6">
        Testimonial Management
    </h1>

    @if (session('success'))
        <div class="bg-green-50 border border-green-200 text-green-600 px-4 py-3 rounded-lg text-sm mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-xl shadow-card p-4">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between mb-4">
            <h2 class="text-[15px] font-medium text-slate-800">Testimonial List</h2>
            <a href="{{ route('testimonials.create') }}"
                class="inline-flex items-center gap-1.5 rounded-md bg-primary-500 hover:bg-primary-600 text-white text-[13px] font-medium px-3.5 py-2 transition self-start">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                Add Testimonial
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="custom-table w-full min-w-[800px]">
                <thead class="bg-[#E3E7F4] p-2">
                    <tr>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Organization</th>
                        <th>Created</th>
                        <th class="rounded-tr-lg">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($testimonials as $testimonial)
                        <tr>
                            <td>
                                @if ($testimonial->photo)
                                    <img class="w-11 h-11 rounded-md object-cover ring-1 ring-slate-200"
                                        src="{{ asset('storage/' . $testimonial->photo) }}"
                                        alt="{{ $testimonial->name }}" />
                                @else
                                    <div
                                        class="w-11 h-11 rounded-md bg-slate-100 text-slate-400 ring-1 ring-slate-200 flex items-center justify-center">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 00-9.78 2.096A4.001 4.001 0 003 15zM15 19l-3-3m0 0l-3-3m3 3l3-3m-3 3l-3 3" />
                                        </svg>
                                    </div>
                                @endif
                            </td>
                            <td>{{ $testimonial->name }}</td>
                            <td>{{ $testimonial->position }}</td>
                            <td>{{ $testimonial->organization }}</td>
                            <td>{{ $testimonial->created_at->format('d M Y') }}</td>
                            <td>
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('testimonials.edit', $testimonial->slug) }}"
                                        class="p-1.5 rounded-md hover:bg-blue-50 text-blue-600 transition" title="Edit">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </a>
                                    <form action="{{ route('testimonials.destroy', $testimonial->slug) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="p-1.5 rounded-md hover:bg-red-50 text-red-600 transition"
                                            onclick="return confirm('Are you sure you want to delete this testimonial?')">
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
                            <td colspan="6" class="text-center py-8 text-slate-500">
                                <div class="flex flex-col items-center gap-2">
                                    <svg class="w-5 h-5 {{ request()->routeIs('testimonials.*') ? 'text-primary-600' : 'text-slate-600' }}"
                                        fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                    </svg>
                                    <span>No Testimonials found</span>
                                    <a href="{{ route('testimonials.create') }}"
                                        class="text-primary-500 hover:text-primary-600 text-sm font-medium">
                                        Create your first Testimonial
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($testimonials->hasPages())
            <div class="mt-6">
                {{ $testimonials->links() }}
            </div>
        @endif
    </div>
@endsection
