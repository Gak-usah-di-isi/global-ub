@extends('layouts.app')

@section('title', 'Dashboard - Partnership Map')

@section('content')
    <div class="space-y-6">
        <h1 class="text-[22px] md:text-[28px] leading-[30px] md:leading-[36px] font-semibold tracking-normal text-slate-800">
            Partnership Map Management
        </h1>

        @if (session('success'))
            <div class="bg-green-50 border border-green-200 text-green-600 px-4 py-3 rounded-lg text-sm">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-xl shadow-card p-4 md:p-6">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between mb-5">
                <div>
                    <h2 class="text-[16px] font-semibold text-slate-800">Titik Kolaborasi Map</h2>
                    <p class="text-xs text-slate-500 mt-0.5">Kelola titik lokasi kerjasama asal (UB) dan tujuan (dalam/luar negeri) beserta mitra dan program.</p>
                </div>
                <div class="flex items-center gap-2">
                    <a href="{{ route('partnership-map.index') }}" target="_blank"
                        class="inline-flex items-center gap-1.5 rounded-md bg-slate-100 hover:bg-slate-200 text-slate-700 text-[13px] font-medium px-3.5 py-2 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                        </svg>
                        Lihat Peta Publik
                    </a>
                    <a href="{{ route('partnership-maps.create') }}"
                        class="inline-flex items-center gap-1.5 rounded-md bg-primary-500 hover:bg-primary-600 text-white text-[13px] font-medium px-3.5 py-2 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        Tambah Titik Map
                    </a>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="custom-table w-full min-w-[900px]">
                    <thead class="bg-[#E3E7F4] p-2">
                        <tr>
                            <th class="rounded-tl-lg">Mitra (Partnership)</th>
                            <th>Titik Asal</th>
                            <th>Titik Tujuan & Lokasi</th>
                            <th>Program Kolaborasi</th>
                            <th>Status Marker</th>
                            <th class="rounded-tr-lg">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($partnershipMaps as $map)
                            <tr>
                                <td>
                                    <div class="flex items-center gap-3">
                                        @if ($map->partnership && $map->partnership->logo)
                                            <img src="{{ asset('storage/' . $map->partnership->logo) }}" alt="{{ $map->partnership->name }}"
                                                class="w-10 h-10 object-contain rounded-lg border border-slate-200 bg-white p-1">
                                        @else
                                            <div class="w-10 h-10 rounded-lg bg-slate-100 flex items-center justify-center text-slate-400 border border-slate-200">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21" />
                                                </svg>
                                            </div>
                                        @endif
                                        <div>
                                            <div class="font-semibold text-slate-800 text-[14px]">
                                                {{ $map->partnership->name ?? 'Mitra Dihapus' }}
                                            </div>
                                            @if ($map->role)
                                                <div class="text-[12px] text-slate-500 font-light">{{ $map->role }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="font-medium text-slate-800 text-[13px]">
                                        {{ $map->origin_name }}
                                    </div>
                                    <div class="text-[11px] text-slate-500 font-mono mt-0.5">
                                        [{{ number_format($map->origin_latitude, 4) }}, {{ number_format($map->origin_longitude, 4) }}]
                                    </div>
                                </td>
                                <td>
                                    <div class="font-semibold text-slate-800 text-[13px]">
                                        {{ $map->destination_name }}
                                    </div>
                                    <div class="text-[12px] text-slate-500">
                                        {{ $map->city_name ? $map->city_name . ', ' : '' }}{{ $map->country_name }}
                                    </div>
                                    <div class="text-[11px] text-slate-500 font-mono mt-0.5">
                                        [{{ number_format($map->latitude, 4) }}, {{ number_format($map->longitude, 4) }}]
                                    </div>
                                </td>
                                <td>
                                    @php
                                        $program = $map->effective_program;
                                    @endphp
                                    @if ($program)
                                        <div class="max-w-[220px]">
                                            <a href="{{ route('program.show', $program->slug) }}" target="_blank"
                                                class="text-primary-600 hover:text-primary-700 font-medium text-[13px] hover:underline line-clamp-2">
                                                {{ $program->title }}
                                            </a>
                                            <span class="inline-block mt-0.5 text-[10px] text-slate-500 bg-slate-100 rounded px-1.5 py-0.5">
                                                {{ $map->program_id ? 'Explicit Link' : 'Linked via Partner' }}
                                            </span>
                                        </div>
                                    @else
                                        <span class="text-xs text-slate-400 italic">Belum ada program</span>
                                    @endif
                                </td>
                                <td>
                                    <span class="inline-flex items-center rounded-full px-2.5 py-1 text-[11px] font-medium
                                        {{ $map->status === 'Highlighted' || $map->status === 'Strategic' ? 'bg-[#FEE2E2] text-[#DC2626]' : 'bg-[#DCFCE7] text-[#15803D]' }}">
                                        {{ $map->status }}
                                    </span>
                                </td>
                                <td>
                                    <div class="flex items-center gap-2">
                                        <a href="{{ route('partnership-maps.edit', $map->id) }}"
                                            class="p-1.5 rounded-md hover:bg-blue-50 text-blue-600 transition" title="Edit">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </a>
                                        <form action="{{ route('partnership-maps.destroy', $map->id) }}" method="POST"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus titik map ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-1.5 rounded-md hover:bg-red-50 text-red-600 transition" title="Hapus">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
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
                                <td colspan="6" class="text-center py-10 text-slate-500">
                                    <div class="flex flex-col items-center gap-2">
                                        <svg class="w-12 h-12 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0z" />
                                        </svg>
                                        <span class="text-slate-600 font-medium">Belum ada titik kolaborasi pada Partnership Map</span>
                                        <a href="{{ route('partnership-maps.create') }}"
                                            class="text-primary-500 hover:text-primary-600 text-sm font-medium">
                                            Tambahkan titik pertama Anda
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if ($partnershipMaps->hasPages())
                <div class="mt-6 flex justify-center">
                    {{ $partnershipMaps->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
