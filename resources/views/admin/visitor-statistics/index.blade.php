@extends('layouts.app')

@section('title', 'Dashboard - Visitor Statistics')

@section('content')
    <h1
        class="text-[22px] md:text-[28px] leading-[30px] md:leading-[36px] font-semibold tracking-normal text-slate-800 mb-6">
        Visitor Statistics
    </h1>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-card p-6 border-l-4 border-[#0000FF]">
            <div class="flex items-center justify-between mb-4">
                <div
                    class="w-12 h-12 bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
            </div>
            <h3 class="text-3xl font-bold text-slate-800 mb-1">{{ number_format($totalVisits) }}</h3>
            <p class="text-slate-600 text-sm">Total Visits</p>
        </div>

        <div class="bg-white rounded-xl shadow-card p-6 border-l-4 border-[#6699FF]">
            <div class="flex items-center justify-between mb-4">
                <div
                    class="w-12 h-12 bg-gradient-to-r from-[#6699FF] to-[#0000FF] rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
            </div>
            <h3 class="text-3xl font-bold text-slate-800 mb-1">{{ number_format($totalVisitors) }}</h3>
            <p class="text-slate-600 text-sm">Unique Visitors</p>
        </div>

        <div class="bg-white rounded-xl shadow-card p-6 border-l-4 border-[#0000FF]">
            <div class="flex items-center justify-between mb-4">
                <div
                    class="w-12 h-12 bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>
            <h3 class="text-3xl font-bold text-slate-800 mb-1">{{ number_format($totalCountries) }}</h3>
            <p class="text-slate-600 text-sm">Countries Reached</p>
        </div>

        <div class="bg-white rounded-xl shadow-card p-6 border-l-4 border-[#6699FF]">
            <div class="flex items-center justify-between mb-4">
                <div
                    class="w-12 h-12 bg-gradient-to-r from-[#6699FF] to-[#0000FF] rounded-lg flex items-center justify-center text-2xl">
                    {{ $topCountry?->flag_emoji ?? '🌐' }}
                </div>
            </div>
            <h3 class="text-xl font-bold text-slate-800 mb-1 truncate">{{ $topCountry?->country_name ?? '—' }}</h3>
            <p class="text-slate-600 text-sm">Top Country</p>
        </div>
    </div>

    @if (session('success'))
        <div class="bg-green-50 border border-green-200 text-green-600 px-4 py-3 rounded-lg text-sm mb-6">
            {{ session('success') }}
        </div>
    @endif

    <!-- Country Breakdown -->
    <div class="bg-white rounded-xl shadow-card p-4">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between mb-4">
            <h2 class="text-[15px] font-medium text-slate-800">Visits by Country</h2>
            <p class="text-xs text-slate-400">Country is detected automatically from each visitor's IP address.</p>
        </div>

        <div class="overflow-x-auto">
            <table class="custom-table w-full min-w-[720px]">
                <thead class="bg-[#E3E7F4] p-2">
                    <tr>
                        <th class="rounded-tl-lg">#</th>
                        <th>Country</th>
                        <th>Total Visits</th>
                        <th>Unique Visitors</th>
                        <th>Share</th>
                        <th class="rounded-tr-lg">Last Visit</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($countries as $index => $country)
                        @php
                            $percentage = $totalVisits > 0 ? round(($country->total_visits / $totalVisits) * 100, 1) : 0;
                        @endphp
                        <tr>
                            <td>
                                <span class="text-slate-500">{{ $index + 1 }}</span>
                            </td>
                            <td>
                                <div class="flex items-center gap-2">
                                    <span class="text-xl leading-none">{{ $country->flag_emoji }}</span>
                                    <div>
                                        <div class="font-medium text-slate-800">{{ $country->country_name }}</div>
                                        <div class="text-[11px] text-slate-400 uppercase">{{ $country->country_code }}</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="font-semibold text-slate-800">{{ number_format($country->total_visits) }}</span>
                            </td>
                            <td>
                                <span class="text-slate-700">{{ number_format($country->unique_visitors) }}</span>
                            </td>
                            <td>
                                <div class="flex items-center gap-2 min-w-[140px]">
                                    <div class="flex-1 h-2 rounded-full bg-slate-100 overflow-hidden">
                                        <div class="h-full rounded-full bg-gradient-to-r from-[#0000FF] to-[#6699FF]"
                                            style="width: {{ $percentage }}%"></div>
                                    </div>
                                    <span class="text-xs text-slate-500 w-10 text-right">{{ $percentage }}%</span>
                                </div>
                            </td>
                            <td>
                                <span class="text-slate-600 text-xs">
                                    {{ $country->last_visited_at?->format('d M Y, H:i') ?? '—' }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-8 text-slate-500">
                                <svg class="w-12 h-12 mx-auto mb-3 text-slate-400" fill="none" stroke="currentColor"
                                    stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p class="text-sm">No visitor data yet.</p>
                                <p class="text-xs text-slate-400 mt-1">Statistics will appear here once the site
                                    receives visits.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
