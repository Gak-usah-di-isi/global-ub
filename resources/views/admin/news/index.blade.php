@extends('layouts.app')

@section('title', 'Dashboard - News')

@section('content')
    <h1
        class="text-[22px] md:text-[28px] leading-[30px] md:leading-[36px] font-semibold tracking-normal text-slate-800 mb-6">
        News
    </h1>

    @if (session('success'))
        <div class="bg-green-50 border border-green-200 text-green-600 px-4 py-3 rounded-lg text-sm mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-xl shadow-card p-4">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between mb-4">
            <h2 class="text-[15px] font-medium text-slate-800">News</h2>
            <a href="{{ route('news.create') }}"
                class="inline-flex items-center gap-1.5 rounded-md bg-primary-500 hover:bg-primary-600 text-white text-[13px] font-medium px-3.5 py-2 transition self-start">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                Add News
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="custom-table w-full min-w-[800px]">
                <thead class="bg-[#E3E7F4] p-2">
                    <tr>
                        <th>Image</th>
                        <th>Content</th>
                        <th>Created</th>
                        <th class="rounded-tr-lg">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($newsItems as $item)
                        <tr>
                            <td>
                                @if ($item->image)
                                    <div class="flex items-center gap-3">
                                        <img class="w-11 h-11 rounded-md object-cover ring-1 ring-slate-200"
                                            src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" />
                                        <div>
                                            <div class="font-medium text-slate-800">{{ Str::limit($item->title, 20) }}</div>
                                        </div>
                                    </div>
                                @else
                                    <div
                                        class="w-11 h-11 rounded-md bg-slate-100 flex items-center justify-center text-slate-400 ring-1 ring-slate-200">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 00-9.78 2.096A4.001 4.001 0 003 15zM15 19l-3-3m0 0l-3-3m3 3l3-3m-3 3l-3 3" />
                                        </svg>
                                    </div>
                                @endif
                            </td>
                            <td>
                                <div class="text-[13px] text-slate-600">
                                    {{ Str::limit($item->content, 100) }}
                                </div>
                            </td>
                            <td>{{ $item->created_at->format('d M Y') }}</td>
                            <td>
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('news.edit', $item->slug) }}"
                                        class="p-1.5 rounded-md hover:bg-blue-50 text-blue-600 transition" title="Edit">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </a>
                                    <form action="{{ route('news.destroy', $item->slug) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="p-1.5 rounded-md hover:bg-red-50 text-red-600 transition" title="Delete"
                                            onclick="return confirm('Are you sure you want to delete this file?')">
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
                            <td colspan="5" class="text-center py-8 text-slate-500">
                                No download files available
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($newsItems->hasPages())
            <div class="mt-6">
                {{ $newsItems->links() }}
            </div>
        @endif
    </div>
@endsection
