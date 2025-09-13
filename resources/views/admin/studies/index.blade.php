@extends('layouts.app')

@section('title', 'Dashboard - Studies')

@section('content')
    <h1
        class="text-[22px] md:text-[28px] leading-[30px] md:leading-[36px] font-semibold tracking-normal text-slate-800 mb-6">
        Study Program Management
    </h1>

    @if (session('success'))
        <div class="bg-green-50 border border-green-200 text-green-600 px-4 py-3 rounded-lg text-sm mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-xl shadow-card p-4">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between mb-4">
            <h2 class="text-[15px] font-medium text-slate-800">Study Programs</h2>
            <a href="{{ route('studies.create') }}"
                class="inline-flex items-center gap-1.5 rounded-md bg-primary-500 hover:bg-primary-600 text-white text-[13px] font-medium px-3.5 py-2 transition self-start">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                Add Study Program
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="custom-table w-full min-w-[800px]">
                <thead class="bg-[#E3E7F4] p-2">
                    <tr>
                        <th class="rounded-tl-lg">Icon</th>
                        <th>Program Title</th>
                        <th>Tagline</th>
                        <th>Description</th>
                        <th>Students Count</th>
                        <th>Duration</th>
                        <th>Created Date</th>
                        <th class="rounded-tr-lg">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($studies as $study)
                        <tr>
                            <td>
                                @if ($study->icon_class)
                                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center">
                                        <i class="{{ $study->icon_class }} text-primary-600 text-lg"></i>
                                    </div>
                                @else
                                    <div class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-graduation-cap text-gray-400 text-lg"></i>
                                    </div>
                                @endif
                            </td>
                            <td>{{ $study->title }}</td>
                            <td>{{ $study->tagline ?? '-' }}</td>
                            <td>{{ $study->description ? \Illuminate\Support\Str::limit($study->description, 50) : 'No description' }}
                            </td>
                            <td>{{ number_format($study->students_count) }} students</td>
                            <td>{{ $study->duration }}</td>
                            <td>{{ $study->created_at->format('d M Y') }}</td>
                            <td>
                                <div class="flex items-center gap-2">
                                    <a href="{{ route('studies.edit', $study->slug) }}"
                                        class="p-1.5 rounded-md hover:bg-blue-50 text-blue-600 transition" title="Edit">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </a>
                                    <form action="{{ route('studies.destroy', $study->slug) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="p-1.5 rounded-md hover:bg-red-50 text-red-600 transition" title="Delete"
                                            onclick="return confirm('Are you sure you want to delete this study program?')">
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
                                    <svg class="w-5 h-5 {{ request()->routeIs('studies.*') ? 'text-primary-600' : 'text-slate-600' }}"
                                        fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                    </svg>
                                    <span>No study programs found</span>
                                    <a href="{{ route('studies.create') }}"
                                        class="text-primary-500 hover:text-primary-600 text-sm font-medium">
                                        Create your first study program
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($studies->hasPages())
            <div class="mt-6">
                {{ $studies->links() }}
            </div>
        @endif
    </div>
@endsection
