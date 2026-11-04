@extends('layouts.app')

@section('title', 'Dashboard - Edit Master SDG')

@section('content')
    <div class="space-y-6">
        <nav class="text-[12px] font-medium flex items-center gap-1 text-slate-500">
            <a href="{{ route('sdgs.index') }}" class="hover:text-slate-700 cursor-pointer">
                Master SDGs
            </a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" strokeWidth="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="m9 6 6 6-6 6" />
            </svg>
            <span class="text-slate-700">Edit SDG #{{ $sdg->order_number }}</span>
        </nav>

        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <h1 class="text-[24px] md:text-[26px] font-semibold text-slate-800">
                    Edit Master SDG: {{ $sdg->name }}
                </h1>
                <p class="text-xs md:text-sm text-slate-500 mt-1">
                    Perbarui nama, urutan, warna identitas, atau icon SDG ini.
                </p>
            </div>
            <div class="flex gap-3">
                <a href="{{ route('sdgs.index') }}"
                    class="h-[42px] px-6 rounded-md text-[13px] font-medium bg-[#E0E6F2] hover:bg-[#d6deec] text-slate-700 transition flex items-center">
                    Batal
                </a>
                <button type="submit" form="edit-sdg-form"
                    class="h-[42px] px-7 rounded-md text-[13px] font-semibold bg-primary-500 hover:bg-primary-600 text-white transition flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                    Perbarui SDG
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

        <form id="edit-sdg-form" action="{{ route('sdgs.update', $sdg->id) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
            @csrf
            @method('PUT')

            <section class="bg-white shadow-card rounded-xl p-6 md:p-8 space-y-6">
                <div class="flex items-center justify-between pb-3 border-b border-slate-100">
                    <h2 class="text-[18px] font-semibold text-slate-800">
                        Informasi Target SDG
                    </h2>
                    <div class="flex items-center gap-2">
                        <img src="{{ $sdg->icon_url }}" alt="{{ $sdg->name }}"
                            class="w-8 h-8 object-contain rounded border border-slate-200 bg-white p-0.5" />
                        <span class="text-xs font-semibold px-2 py-0.5 rounded text-white"
                            style="background-color: {{ $sdg->color }}">
                            SDG #{{ $sdg->order_number }}
                        </span>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label for="order_number" class="field-label req block text-[13px] font-medium text-slate-700">
                            Nomor Urut SDG <span class="text-red-500">*</span>
                        </label>
                        <input id="order_number" name="order_number" type="number" min="1"
                            value="{{ old('order_number', $sdg->order_number) }}" required
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('order_number') border-red-300 @enderror" />
                        @error('order_number')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label for="name" class="field-label req block text-[13px] font-medium text-slate-700">
                            Nama SDG <span class="text-red-500">*</span>
                        </label>
                        <input id="name" name="name" type="text" value="{{ old('name', $sdg->name) }}" required
                            placeholder="Contoh: No Poverty / Digital Literacy"
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
                            <input id="color-picker" type="color" value="{{ old('color', $sdg->color) }}"
                                class="w-11 h-11 rounded-lg border border-[#E3E9F2] p-1 cursor-pointer bg-white" />
                            <input id="color" name="color" type="text" value="{{ old('color', $sdg->color) }}" required
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
                            class="mt-2 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 py-2.5 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors">{{ old('description', $sdg->description) }}</textarea>
                    </div>
                </div>

                {{-- Icon Selector: Upload OR Preset --}}
                <div class="pt-4 border-t border-slate-100 space-y-4">
                    <div class="flex items-center justify-between">
                        <h3 class="text-[15px] font-semibold text-slate-800">
                            Ubah Icon SDG
                        </h3>
                        <div class="flex items-center gap-2 text-xs text-slate-600">
                            <span>Icon saat ini:</span>
                            <img src="{{ $sdg->icon_url }}" alt="Current Icon" class="w-6 h-6 object-contain rounded bg-white p-0.5 border border-slate-200" />
                            <span class="font-mono text-slate-500 text-[11px] truncate max-w-[150px]">{{ $sdg->icon }}</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        {{-- Opsi A: Upload Kustom --}}
                        <div class="p-4 rounded-xl border border-slate-200 bg-slate-50 space-y-3">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-primary-600"></span>
                                <h4 class="text-[13px] font-semibold text-slate-800">Upload Icon File Baru</h4>
                            </div>
                            <p class="text-xs text-slate-500">Kosongkan jika tidak ingin mengubah icon saat ini.</p>
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
                                <h4 class="text-[13px] font-semibold text-slate-800">Pilih dari Preset Icon</h4>
                            </div>
                            <p class="text-xs text-slate-500">
                                Pilih preset jika ingin menggunakan icon standar UN.
                            </p>
                            <div id="selected-preset-badge" class="text-xs font-medium text-primary-600 pt-1">
                                Preset Terpilih: <span id="selected-preset-name" class="font-bold">{{ in_array($sdg->icon, $presetIcons) ? $sdg->icon : 'Menggunakan file kustom' }}</span>
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
                                        {{ old('preset_icon', $sdg->icon) === $icon ? 'checked' : '' }} class="sr-only" />
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
            });

            if (iconFileInput) {
                iconFileInput.addEventListener('change', function() {
                    if (this.files && this.files.length > 0) {
                        presetRadios.forEach(r => r.checked = false);
                        presetBadgeName.textContent = 'Menggunakan file upload baru';
                    }
                });
            }
        });
    </script>
@endsection
