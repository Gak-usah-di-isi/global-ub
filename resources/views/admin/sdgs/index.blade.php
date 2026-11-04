@extends('layouts.app')

@section('title', 'Dashboard - Master SDGs')

@section('content')
    <div class="space-y-6">
        <h1 class="text-[22px] md:text-[28px] leading-[30px] md:leading-[36px] font-semibold tracking-normal text-slate-800">
            Master SDGs Management
        </h1>

        @if (session('success'))
            <div class="bg-green-50 border border-green-200 text-green-600 px-4 py-3 rounded-lg text-sm">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-xl shadow-card p-4 md:p-6">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between mb-5">
                <div>
                    <h2 class="text-[16px] font-semibold text-slate-800">Daftar Sustainable Development Goals (SDGs)</h2>
                    <p class="text-xs text-slate-500 mt-0.5">Kelola data master target SDGs, nomor urut, icon, dan warna untuk dipilih pada Program.</p>
                </div>
                <div class="flex items-center gap-2">
                    <a href="{{ route('sdgs.create') }}"
                        class="inline-flex items-center gap-1.5 rounded-md bg-primary-500 hover:bg-primary-600 text-white text-[13px] font-medium px-3.5 py-2 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        Tambah Master SDG
                    </a>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="custom-table w-full min-w-[800px]">
                    <thead class="bg-[#E3E7F4] p-2">
                        <tr>
                            <th class="rounded-tl-lg w-16 text-center">Urutan</th>
                            <th class="w-20 text-center">Icon</th>
                            <th>Nama SDG</th>
                            <th class="w-32">Warna Identitas</th>
                            <th>Deskripsi Target</th>
                            <th class="w-28 text-center">Dipakai di Program</th>
                            <th class="rounded-tr-lg w-24 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($sdgs as $sdg)
                            <tr>
                                <td class="text-center font-bold text-slate-700">
                                    {{ $sdg->order_number }}
                                </td>
                                <td class="text-center">
                                    <img src="{{ $sdg->icon_url }}" alt="{{ $sdg->name }}"
                                        class="w-11 h-11 object-contain rounded-md shadow-xs mx-auto border border-slate-200 bg-white p-1" />
                                </td>
                                <td>
                                    <div class="font-semibold text-slate-800 text-[14px]">
                                        {{ $sdg->name }}
                                    </div>
                                    <div class="text-[11px] text-slate-400 mt-0.5 font-mono">
                                        ID #{{ $sdg->id }}
                                    </div>
                                </td>
                                <td>
                                    <div class="flex items-center gap-2">
                                        <span class="w-5 h-5 rounded-full shrink-0 border border-slate-300 shadow-xs"
                                            style="background-color: {{ $sdg->color }}"></span>
                                        <span class="text-xs font-mono font-medium text-slate-700 uppercase">
                                            {{ $sdg->color }}
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs text-slate-600 line-clamp-2 max-w-md">
                                        {{ $sdg->description ?: '—' }}
                                    </p>
                                </td>
                                <td class="text-center">
                                    @php
                                        $count = $sdg->programs_count;
                                    @endphp
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold
                                        {{ $count > 0 ? 'bg-emerald-50 text-emerald-700 border border-emerald-200' : 'bg-slate-100 text-slate-500' }}">
                                        {{ $count }} Program
                                    </span>
                                </td>
                                <td class="text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="{{ route('sdgs.edit', $sdg->id) }}"
                                            class="p-1.5 rounded-md hover:bg-blue-50 text-blue-600 transition" title="Edit">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </a>
                                        <form action="{{ route('sdgs.destroy', $sdg->id) }}" method="POST"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus master SDG ini?');">
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
                                <td colspan="7" class="text-center py-10 text-slate-500">
                                    <div class="flex flex-col items-center gap-2">
                                        <span>Belum ada data Master SDG.</span>
                                        <a href="{{ route('sdgs.create') }}" class="text-primary-500 hover:underline text-sm font-medium">
                                            Tambah Master SDG baru
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if ($sdgs->hasPages())
                <div class="mt-6 flex justify-center">
                    {{ $sdgs->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
