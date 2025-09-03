@extends('layouts.app')

@section('title', 'Dashboard - Daftar Produk')

@section('content')
    <h1
        class="text-[22px] md:text-[28px] leading-[30px] md:leading-[36px] font-semibold tracking-normal text-slate-800 mb-6">
        Daftar Produk
    </h1>

    <div class="bg-white rounded-xl shadow-card p-4">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between mb-4">
            <h2 class="text-[15px] font-medium text-slate-800">Produk</h2>
            <button
                class="inline-flex items-center gap-1.5 rounded-md bg-primary-500 hover:bg-primary-600 text-white text-[13px] font-medium px-3.5 py-2 transition self-start">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                Tambah Produk
            </button>
        </div>

        <div class="overflow-x-auto">
            <table class="custom-table w-full min-w-[800px]">
                <thead class="bg-[#E3E7F4] p-2">
                    <tr>
                        <th class="rounded-tl-lg">Nama Produk</th>
                        <th>Varian</th>
                        <th>Tipe Produk</th>
                        <th>Kategori</th>
                        <th>Harga Jual</th>
                        <th>Waktu Dibuat</th>
                        <th>Status</th>
                        <th class="rounded-tr-lg"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="flex items-center gap-3">
                                <img class="w-11 h-11 rounded-md object-cover ring-1 ring-slate-200"
                                    src="https://dummyimage.com/96x96/3139d8/ffffff&text=SFX" alt="" />
                                <div>
                                    <div class="font-medium text-slate-800">Sound Effect</div>
                                    <div class="text-[11px] text-slate-500 font-medium tracking-wide">SND-EFCT</div>
                                </div>
                            </div>
                        </td>
                        <td>1</td>
                        <td>Digital</td>
                        <td><span class="badge">Audio</span></td>
                        <td>Rp 18,000 - Rp 32,000</td>
                        <td>27 Mei 2025</td>
                        <td>
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="peer sr-only" checked />
                                <span class="switch"></span>
                            </label>
                        </td>
                        <td>
                            <button class="p-1.5 rounded-md hover:bg-slate-100 text-slate-500 action-trigger"
                                aria-haspopup="menu" aria-expanded="false">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <circle cx="10" cy="4" r="1" />
                                    <circle cx="10" cy="10" r="1" />
                                    <circle cx="10" cy="16" r="1" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="flex flex-wrap gap-1 items-center justify-end px-2 sm:px-5 py-5 border-t border-slate-100">
            <button
                class="h-8 w-8 flex items-center justify-center rounded-md text-slate-400 border border-slate-200 hover:bg-slate-50">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m15 6-6 6 6 6" />
                </svg>
            </button>
            <button
                class="h-8 min-w-8 px-3 rounded-md text-[12px] font-medium text-white bg-primary-500 border border-primary-500">
                1
            </button>
            <button
                class="h-8 min-w-8 px-3 rounded-md text-[12px] font-medium text-slate-600 bg-white border border-slate-200 hover:bg-slate-50">
                2
            </button>
            <button
                class="h-8 min-w-8 px-3 rounded-md text-[12px] font-medium text-slate-600 bg-white border border-slate-200 hover:bg-slate-50">
                3
            </button>
            <span class="px-2 text-slate-400 text-[12px]">...</span>
            <button
                class="h-8 min-w-8 px-3 rounded-md text-[12px] font-medium text-slate-600 bg-white border border-slate-200 hover:bg-slate-50">
                15
            </button>
            <button
                class="h-8 w-8 flex items-center justify-center rounded-md text-slate-600 border border-slate-200 hover:bg-slate-50">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m9 6 6 6-6 6" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Components -->
    <x-action-popover />
    <x-delete-modal />
@endsection
