@extends('layouts.app')

@section('title', 'Dashboard - Galleries')

@section('content')
    <h1
        class="text-[22px] md:text-[28px] leading-[30px] md:leading-[36px] font-semibold tracking-normal text-slate-800 mb-6">
        Gallery Management
    </h1>

    @if (session('success'))
        <div class="bg-green-50 border border-green-200 text-green-600 px-4 py-3 rounded-lg text-sm mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-xl shadow-card p-4">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between mb-4">
            <h2 class="text-[15px] font-medium text-slate-800">Galleries</h2>
            <a href="{{ route('galleries.create') }}"
                class="inline-flex items-center gap-1.5 rounded-md bg-primary-500 hover:bg-primary-600 text-white text-[13px] font-medium px-3.5 py-2 transition self-start">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                Add Gallery
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="custom-table w-full min-w-[800px]">
                <thead class="bg-[#E3E7F4] p-2">
                    <tr>
                        <th class="rounded-tl-lg">Images</th>
                        <th>Gallery Title</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Created</th>
                        <th class="rounded-tr-lg">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($galleries as $gallery)
                        <tr>
                            <td>
                                @php
                                    $images = json_decode($gallery->images, true) ?? [];
                                    $imageCount = count($images);
                                @endphp
                                <div class="flex items-center gap-2">
                                    @if ($imageCount > 0 && isset($images[0]))
                                        <img src="{{ asset('storage/' . $images[0]) }}" alt="Gallery thumbnail"
                                            class="w-10 h-10 object-cover rounded-lg">
                                    @endif
                                    <span class="text-sm text-gray-600">
                                        {{ $imageCount }} image{{ $imageCount != 1 ? 's' : '' }}
                                    </span>
                                </div>
                            </td>
                            <td>{{ $gallery->title }}</td>
                            <td>
                                <span class="px-2 py-1 bg-primary-100 text-primary-700 rounded-full text-xs font-medium">
                                    {{ $gallery->category_gallery }}
                                </span>
                            </td>
                            <td>
                                @if ($gallery->description)
                                    {{ Str::limit($gallery->description, 50) }}
                                @else
                                    <span class="text-gray-400">No description</span>
                                @endif
                            </td>
                            <td>{{ $gallery->created_at->format('d M Y') }}</td>
                            <td>
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('galleries.edit', $gallery->slug) }}"
                                        class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </a>
                                    <form action="{{ route('galleries.destroy', $gallery->slug) }}" method="POST"
                                        class="inline-block"
                                        onsubmit="return confirm('Are you sure you want to delete this gallery?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800 text-sm font-medium">
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
                                    <svg class="w-4 h-4 {{ request()->routeIs('galleries.*') ? 'text-primary-600' : 'text-slate-600' }}"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M19,0H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V5A5.006,5.006,0,0,0,19,0ZM5,2H19a3,3,0,0,1,3,3V19a2.951,2.951,0,0,1-.3,1.285l-9.163-9.163a5,5,0,0,0-7.072,0L2,14.586V5A3,3,0,0,1,5,2ZM5,22a3,3,0,0,1-3-3V17.414l4.878-4.878a3,3,0,0,1,4.244,0L20.285,21.7A2.951,2.951,0,0,1,19,22Z" />
                                        <path
                                            d="M16,10.5A3.5,3.5,0,1,0,12.5,7,3.5,3.5,0,0,0,16,10.5Zm0-5A1.5,1.5,0,1,1,14.5,7,1.5,1.5,0,0,1,16,5.5Z" />
                                    </svg>
                                    <span>No Galleries found</span>
                                    <a href="{{ route('galleries.create') }}"
                                        class="text-primary-500 hover:text-primary-600 text-sm font-medium">
                                        Create your first Gallery
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($galleries->hasPages())
            <div class="mt-6 flex justify-center">
                {{ $galleries->links() }}
            </div>
        @endif
    </div>
@endsection
