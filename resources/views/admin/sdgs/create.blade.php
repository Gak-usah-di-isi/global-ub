@extends('layouts.app')

@section('title', 'Dashboard - Tambah Master SDG')

@section('content')
    <div class="space-y-6">
        <nav class="text-[12px] font-medium flex items-center gap-1 text-slate-500">
            <a href="{{ route('sdgs.index') }}" class="hover:text-slate-700 cursor-pointer">
                Master SDGs
            </a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" strokeWidth="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="m9 6 6 6-6 6" />
            </svg>
            <span class="text-slate-700">Tambah SDG</span>
        </nav>

        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <h1 class="text-[24px] md:text-[26px] font-semibold text-slate-800">
                    Tambah Master SDG
                </h1>
                <p class="text-xs md:text-sm text-slate-500 mt-1">
                    Buat target SDG baru dengan nomor urut, icon kustom (atau preset), dan warna identitas.
                </p>
            </div>
            <div class="flex gap-3">
                <a href="{{ route('sdgs.index') }}"
                    class="h-[42px] px-6 rounded-md text-[13px] font-medium bg-[#E0E6F2] hover:bg-[#d6deec] text-slate-700 transition flex items-center">
                    Batal
                </a>
                <button type="submit" form="create-sdg-form"
                    class="h-[42px] px-7 rounded-md text-[13px] font-semibold bg-primary-500 hover:bg-primary-600 text-white transition flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Simpan SDG
                </button>
            </div>
        </div>

        @if ($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-600 px-4 py-3 rounded-lg text-sm">
                <ul class="list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="create-sdg-form" action="{{ route('sdgs.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
            @csrf

            <section class="bg-white shadow-card rounded-xl p-6 md:p-8 space-y-6">
                <h2 class="text-[18px] font-semibold text-slate-800 pb-3 border-b border-slate-100">
                    Informasi Target SDG
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label for="order_number" class="field-label req block text-[13px] font-medium text-slate-700">
                            Nomor Urut SDG <span class="text-red-500">*</span>
                        </label>
                        <input id="order_number" name="order_number" type="number" min="1"
                            value="{{ old('order_number', $nextOrder) }}" required
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('order_number') border-red-300 @enderror" />
                        @error('order_number')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label for="name" class="field-label req block text-[13px] font-medium text-slate-700">
                            Nama SDG <span class="text-red-500">*</span>
                        </label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}" required
                            placeholder="Contoh: No Poverty / Digital Literacy for Community"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('name') border-red-300 @enderror" />
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label for="color" class="field-label req block text-[13px] font-medium text-slate-700">
                            Warna Identitas (Hex) <span class="text-red-500">*</span>
                        </label>
                        <div class="mt-2 flex items-center gap-3">
                            <input id="color-picker" type="color" value="{{ old('color', '#0000FF') }}"
                                class="w-11 h-11 rounded-lg border border-[#E3E9F2] p-1 cursor-pointer bg-white" />
                            <input id="color" name="color" type="text" value="{{ old('color', '#0000FF') }}" required
                                placeholder="#E5243B"
                                class="h-11 flex-1 rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] font-mono text-slate-800 uppercase focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('color') border-red-300 @enderror" />
                        </div>
                        @error('color')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label for="description" class="field-label block text-[13px] font-medium text-slate-700">
                            Deskripsi Target SDG (Opsional)
                        </label>
                        <textarea id="description" name="description" rows="2"
                            placeholder="Ringkasan penjelasan target atau fokus dari SDG ini..."
                            class="mt-2 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 py-2.5 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors">{{ old('description') }}</textarea>
                    </div>
                </div>

                {{-- Icon Selector: Upload OR Preset --}}
                <div class="pt-4 border-t border-slate-100 space-y-4">
                    <h3 class="text-[15px] font-semibold text-slate-800">
                        Pilih atau Upload Icon SDG
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        {{-- Opsi A: Upload Kustom --}}
                        <div class="p-4 rounded-xl border border-slate-200 bg-slate-50 space-y-3">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-primary-600"></span>
                                <h4 class="text-[13px] font-semibold text-slate-800">Opsi A: Upload Icon File Kustom</h4>
                            </div>
                            <p class="text-xs text-slate-500">Upload file SVG, PNG, atau JPG gambar SDG baru (maks. 2MB).</p>
                            <input type="file" name="icon_file" id="icon_file" accept=".svg,.png,.jpg,.jpeg"
                                class="block w-full text-xs text-slate-600 file:mr-3 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100 cursor-pointer" />
                            @error('icon_file')
                                <p class="text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Opsi B: Info Preset --}}
                        <div class="p-4 rounded-xl border border-slate-200 bg-slate-50 space-y-2">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                                <h4 class="text-[13px] font-semibold text-slate-800">Opsi B: Pilih dari Preset Bawaan</h4>
                            </div>
                            <p class="text-xs text-slate-500">
                                Atau pilih salah satu icon resmi standar UN dari daftar di bawah jika tidak mengunggah file baru.
                            </p>
                            <div id="selected-preset-badge" class="text-xs font-medium text-primary-600 pt-1">
                                Preset Terpilih: <span id="selected-preset-name" class="font-bold">Belum dipilih</span>
                            </div>
                        </div>
                    </div>

                    {{-- Grid Preset Icons --}}
                    <div>
                        <div class="text-xs font-medium text-slate-700 mb-2.5">Preset Icon Tersedia:</div>
                        <div class="grid grid-cols-4 sm:grid-cols-6 md:grid-cols-9 gap-2.5">
                            @foreach ($presetIcons as $icon)
                                <label class="preset-card cursor-pointer p-2 rounded-lg border border-slate-200 bg-white hover:border-primary-400 hover:shadow-xs transition flex flex-col items-center gap-1.5 group">
                                    <input type="radio" name="preset_icon" value="{{ $icon }}"
                                        {{ old('preset_icon') === $icon ? 'checked' : '' }} class="sr-only" />
                                    <img src="{{ asset('images/sgds/' . $icon) }}" alt="{{ $icon }}" class="w-10 h-10 object-contain" />
                                    <span class="text-[10px] text-slate-500 font-mono truncate max-w-full group-hover:text-primary-600">
                                        {{ $icon }}
                                    </span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>

    <style>
        .preset-card:has(input:checked) {
            border-color: #0000FF !important;
            background-color: #EFF6FF !important;
            box-shadow: 0 0 0 2px rgba(0, 0, 255, 0.25) !important;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const colorPicker = document.getElementById('color-picker');
            const colorInput = document.getElementById('color');
            const presetRadios = document.querySelectorAll('input[name="preset_icon"]');
            const presetBadgeName = document.getElementById('selected-preset-name');
            const iconFileInput = document.getElementById('icon_file');

            if (colorPicker && colorInput) {
                colorPicker.addEventListener('input', function() {
                    colorInput.value = this.value.toUpperCase();
                });
                colorInput.addEventListener('input', function() {
                    if (/^#[0-9A-Fa-f]{6}$/.test(this.value)) {
                        colorPicker.value = this.value;
                    }
                });
            }

            presetRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    if (this.checked) {
                        presetBadgeName.textContent = this.value;
                    }
                });
                if (radio.checked) {
                    presetBadgeName.textContent = radio.value;
                }
            });

            if (iconFileInput) {
                iconFileInput.addEventListener('change', function() {
                    if (this.files && this.files.length > 0) {
                        presetRadios.forEach(r => r.checked = false);
                        presetBadgeName.textContent = 'Menggunakan file upload kustom';
                    }
                });
            }
        });
    </script>
@endsection
