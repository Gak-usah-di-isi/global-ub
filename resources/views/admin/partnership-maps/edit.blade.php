@extends('layouts.app')

@section('title', 'Dashboard - Edit Titik Map')

@section('content')
    <div class="space-y-6">
        <nav class="text-[12px] font-medium flex items-center gap-1 text-slate-500">
            <a href="{{ route('partnership-maps.index') }}" class="hover:text-slate-700 cursor-pointer">
                Partnership Map
            </a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" strokeWidth="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="m9 6 6 6-6 6" />
            </svg>
            <span class="text-slate-700">Edit Titik Map</span>
        </nav>

        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <h1 class="text-[24px] md:text-[26px] font-semibold text-slate-800">
                    Edit Titik Partnership Map
                </h1>
                <p class="text-xs md:text-sm text-slate-500 mt-1">
                    Perbarui informasi lokasi kerjasama atau ubah koordinat titik.
                </p>
            </div>
            <div class="flex gap-3">
                <a href="{{ route('partnership-maps.index') }}"
                    class="h-[42px] px-6 rounded-md text-[13px] font-medium bg-[#E0E6F2] hover:bg-[#d6deec] text-slate-700 transition flex items-center">
                    Batal
                </a>
                <button type="submit" form="edit-map-form"
                    class="h-[42px] px-7 rounded-md text-[13px] font-semibold bg-primary-500 hover:bg-primary-600 text-white transition flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                    Perbarui Titik Map
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

        <form id="edit-map-form" action="{{ route('partnership-maps.update', $partnershipMap->id) }}" method="POST" class="space-y-8">
            @csrf
            @method('PUT')

            {{-- 1. Section: Mitra & Program --}}
            <section class="bg-white shadow-card rounded-xl p-6 md:p-8">
                <h2 class="section-title text-[18px] font-semibold text-slate-800 pb-3 border-b border-slate-100 mb-6">
                    1. Informasi Mitra & Program Kerjasama
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="partnership_id" class="field-label req block text-[13px] font-medium text-slate-700">
                            Nama Mitra (Partnership) <span class="text-red-500">*</span>
                        </label>
                        <select id="partnership_id" name="partnership_id" required
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('partnership_id') border-red-300 @enderror">
                            <option value="">-- Pilih Mitra Kerjasama --</option>
                            @foreach ($partnerships as $partner)
                                <option value="{{ $partner->id }}" {{ old('partnership_id', $partnershipMap->partnership_id) == $partner->id ? 'selected' : '' }}>
                                    {{ $partner->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('partnership_id')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="program_id" class="field-label block text-[13px] font-medium text-slate-700">
                            Program Terkait (Opsional)
                        </label>
                        <select id="program_id" name="program_id"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('program_id') border-red-300 @enderror">
                            <option value="">-- Otomatis Terhubung ke Program Mitra --</option>
                            @foreach ($programs as $prog)
                                <option value="{{ $prog->id }}" {{ old('program_id', $partnershipMap->program_id) == $prog->id ? 'selected' : '' }}>
                                    {{ $prog->title }}
                                </option>
                            @endforeach
                        </select>
                        @error('program_id')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="help-text text-xs text-slate-400 mt-1.5">
                            Jika marker di peta diklik, pengunjung akan diarahkan ke halaman detail program ini.
                        </p>
                    </div>

                    <div>
                        <label for="status" class="field-label req block text-[13px] font-medium text-slate-700">
                            Status / Tipe Marker <span class="text-red-500">*</span>
                        </label>
                        <select id="status" name="status" required
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('status') border-red-300 @enderror">
                            <option value="Partner" {{ old('status', $partnershipMap->status) === 'Partner' ? 'selected' : '' }}>
                                Partner (Marker Biru Standar)
                            </option>
                            <option value="Highlighted" {{ old('status', $partnershipMap->status) === 'Highlighted' ? 'selected' : '' }}>
                                Highlighted (Marker Merah Sorotan)
                            </option>
                            <option value="Strategic" {{ old('status', $partnershipMap->status) === 'Strategic' ? 'selected' : '' }}>
                                Strategic (Marker Merah Strategis)
                            </option>
                        </select>
                        @error('status')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="role" class="field-label block text-[13px] font-medium text-slate-700">
                            Peran / Bentuk Kerjasama (Role)
                        </label>
                        <input id="role" name="role" type="text" value="{{ old('role', $partnershipMap->role) }}"
                            placeholder="Contoh: Academic Exchange, Research Link, Joint Degree"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('role') border-red-300 @enderror" />
                        @error('role')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </section>

            {{-- 2. Section: Titik Asal (Origin - Default UB) --}}
            <section class="bg-white shadow-card rounded-xl p-6 md:p-8">
                <div class="flex items-center justify-between pb-3 border-b border-slate-100 mb-6">
                    <div>
                        <h2 class="section-title text-[18px] font-semibold text-slate-800">
                            2. Titik Asal (Origin Point)
                        </h2>
                        <p class="text-xs text-slate-500 mt-0.5">
                            Titik asal garis kolaborasi. Standar asal adalah Universitas Brawijaya (Malang).
                        </p>
                    </div>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-amber-50 text-amber-700 text-xs font-medium rounded-full border border-amber-200">
                        <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                        UB Malang: [-7.9526, 112.6144]
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="md:col-span-1">
                        <label for="origin_name" class="field-label block text-[13px] font-medium text-slate-700">
                            Nama Titik Asal
                        </label>
                        <input id="origin_name" name="origin_name" type="text"
                            value="{{ old('origin_name', $partnershipMap->origin_name) }}"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('origin_name') border-red-300 @enderror" />
                        @error('origin_name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="origin_latitude" class="field-label block text-[13px] font-medium text-slate-700">
                            Latitude Titik Asal
                        </label>
                        <input id="origin_latitude" name="origin_latitude" type="number" step="any"
                            value="{{ old('origin_latitude', $partnershipMap->origin_latitude) }}"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('origin_latitude') border-red-300 @enderror" />
                        @error('origin_latitude')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="origin_longitude" class="field-label block text-[13px] font-medium text-slate-700">
                            Longitude Titik Asal
                        </label>
                        <input id="origin_longitude" name="origin_longitude" type="number" step="any"
                            value="{{ old('origin_longitude', $partnershipMap->origin_longitude) }}"
                            class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('origin_longitude') border-red-300 @enderror" />
                        @error('origin_longitude')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </section>

            {{-- 3. Section: Titik Tujuan (Destination Point - Dalam / Luar Negeri) --}}
            <section class="bg-white shadow-card rounded-xl p-6 md:p-8">
                <div class="pb-3 border-b border-slate-100 mb-6">
                    <h2 class="section-title text-[18px] font-semibold text-slate-800">
                        3. Titik Tujuan (Destination Point)
                    </h2>
                    <p class="text-xs text-slate-500 mt-0.5">
                        Lokasi institusi mitra baik di dalam negeri (Indonesia) maupun luar negeri.
                    </p>
                </div>

                <div class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="md:col-span-1">
                            <label for="destination_name" class="field-label req block text-[13px] font-medium text-slate-700">
                                Nama Lokasi / Kampus Tujuan <span class="text-red-500">*</span>
                            </label>
                            <input id="destination_name" name="destination_name" type="text"
                                value="{{ old('destination_name', $partnershipMap->destination_name) }}" required
                                placeholder="Contoh: Tokyo Institute of Technology / Telkom Landmark"
                                class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('destination_name') border-red-300 @enderror" />
                            @error('destination_name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="country_name" class="field-label req block text-[13px] font-medium text-slate-700">
                                Negara (Country) <span class="text-red-500">*</span>
                            </label>
                            <input id="country_name" name="country_name" type="text"
                                value="{{ old('country_name', $partnershipMap->country_name) }}" required
                                placeholder="Contoh: Indonesia, Japan, Malaysia, China"
                                class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('country_name') border-red-300 @enderror" />
                            @error('country_name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="city_name" class="field-label block text-[13px] font-medium text-slate-700">
                                Kota (City - Opsional)
                            </label>
                            <input id="city_name" name="city_name" type="text"
                                value="{{ old('city_name', $partnershipMap->city_name) }}"
                                placeholder="Contoh: Jakarta, Tokyo, Kuala Lumpur"
                                class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors @error('city_name') border-red-300 @enderror" />
                            @error('city_name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Interactive Map Picker --}}
                    <div class="space-y-3">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-1">
                            <label class="field-label block text-[13px] font-semibold text-slate-800">
                                📍 Pilih Titik Lokasi pada Peta Interaktif
                            </label>
                            <span class="text-[11px] text-slate-500">
                                Klik di mana saja pada peta, geser marker, atau ketik nama lokasi pada pencarian.
                            </span>
                        </div>

                        {{-- Search Box --}}
                        <div class="flex gap-2">
                            <div class="relative flex-1">
                                <input type="text" id="map-search-input"
                                    placeholder="Cari nama kampus, kota, atau negara (contoh: Tokyo, Kyoto University, ITB Bandung, London)..."
                                    class="h-10 w-full rounded-lg border border-slate-300 bg-white px-3.5 text-xs text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:ring-1 focus:ring-primary-500 outline-none transition" />
                            </div>
                            <button type="button" id="btn-map-search"
                                class="h-10 px-4 rounded-lg bg-primary-500 hover:bg-primary-600 text-white text-xs font-semibold flex items-center gap-1.5 transition shrink-0 cursor-pointer">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                                Cari Lokasi
                            </button>
                        </div>

                        <div id="map-picker" class="w-full h-[360px] rounded-xl border border-slate-300 overflow-hidden shadow-inner z-0"></div>

                        <div class="flex flex-wrap items-center justify-between gap-2 pt-1 text-xs">
                            <div class="text-slate-600 flex items-center gap-1.5">
                                <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 inline-block shadow-xs"></span>
                                <span>Koordinat Terpilih: <strong id="coords-display" class="font-mono text-slate-900">-</strong></span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <button type="button" id="btn-focus-current" class="text-[11px] font-medium px-2.5 py-1 rounded bg-blue-50 hover:bg-blue-100 text-blue-700 border border-blue-200 transition">
                                    Lokasi Saat Ini
                                </button>
                                <button type="button" id="btn-focus-ub" class="text-[11px] font-medium px-2.5 py-1 rounded bg-amber-50 hover:bg-amber-100 text-amber-700 border border-amber-200 transition">
                                    UB Malang
                                </button>
                                <button type="button" id="btn-focus-indo" class="text-[11px] font-medium px-2.5 py-1 rounded bg-slate-100 hover:bg-slate-200 text-slate-700 transition">
                                    Indonesia
                                </button>
                                <button type="button" id="btn-focus-world" class="text-[11px] font-medium px-2.5 py-1 rounded bg-slate-100 hover:bg-slate-200 text-slate-700 transition">
                                    Dunia
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-slate-50 p-4 rounded-xl border border-slate-200">
                        <div>
                            <label for="latitude" class="field-label req block text-[13px] font-medium text-slate-700">
                                Latitude Tujuan <span class="text-red-500">*</span>
                            </label>
                            <input id="latitude" name="latitude" type="number" step="any"
                                value="{{ old('latitude', $partnershipMap->latitude) }}" required
                                placeholder="Contoh: 35.6762 atau -6.2088"
                                class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-white px-4 text-[13px] font-mono text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:ring-primary-500/15 outline-none transition-colors @error('latitude') border-red-300 @enderror" />
                            @error('latitude')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <p class="help-text text-[11px] text-slate-500 mt-1">Rentang nilai: -90.0 s/d 90.0 (Otomatis terisi dari peta)</p>
                        </div>

                        <div>
                            <label for="longitude" class="field-label req block text-[13px] font-medium text-slate-700">
                                Longitude Tujuan <span class="text-red-500">*</span>
                            </label>
                            <input id="longitude" name="longitude" type="number" step="any"
                                value="{{ old('longitude', $partnershipMap->longitude) }}" required
                                placeholder="Contoh: 139.6503 atau 106.8456"
                                class="mt-2 h-11 w-full rounded-lg border border-[#E3E9F2] bg-white px-4 text-[13px] font-mono text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:ring-primary-500/15 outline-none transition-colors @error('longitude') border-red-300 @enderror" />
                            @error('longitude')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <p class="help-text text-[11px] text-slate-500 mt-1">Rentang nilai: -180.0 s/d 180.0 (Otomatis terisi dari peta)</p>
                        </div>
                    </div>

                    <div>
                        <label for="notes" class="field-label block text-[13px] font-medium text-slate-700">
                            Catatan Internal (Opsional)
                        </label>
                        <textarea id="notes" name="notes" rows="2"
                            placeholder="Catatan tambahan mengenai titik kolaborasi ini"
                            class="mt-2 w-full rounded-lg border border-[#E3E9F2] bg-[#F8FAFE] px-4 py-2.5 text-[13px] text-slate-800 placeholder:text-slate-400 focus:border-primary-500 focus:bg-white focus:ring-primary-500/15 outline-none transition-colors">{{ old('notes', $partnershipMap->notes) }}</textarea>
                    </div>
                </div>
            </section>
        </form>
    </div>

    {{-- Leaflet JS & CSS for interactive coordinate picker --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const latInput = document.getElementById('latitude');
            const lngInput = document.getElementById('longitude');
            const coordsDisplay = document.getElementById('coords-display');
            const countryInput = document.getElementById('country_name');
            const cityInput = document.getElementById('city_name');

            const savedLat = parseFloat(latInput.value) || -7.9526;
            const savedLng = parseFloat(lngInput.value) || 112.6144;

            // Initialize Leaflet map centered at saved coordinates
            const map = L.map('map-picker').setView([savedLat, savedLng], 10);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; OpenStreetMap contributors'
            }).addTo(map);

            // Create draggable marker
            const marker = L.marker([savedLat, savedLng], {
                draggable: true,
                title: 'Geser marker ke lokasi tujuan kerjasama'
            }).addTo(map);

            coordsDisplay.textContent = `${savedLat}, ${savedLng}`;

            function updateInputs(lat, lng, doPan = false) {
                const roundedLat = parseFloat(lat.toFixed(7));
                const roundedLng = parseFloat(lng.toFixed(7));

                latInput.value = roundedLat;
                lngInput.value = roundedLng;
                coordsDisplay.textContent = `${roundedLat}, ${roundedLng}`;

                marker.setLatLng([roundedLat, roundedLng]);

                if (doPan) {
                    map.panTo([roundedLat, roundedLng]);
                }

                // Reverse geocode to suggest City / Country if empty
                fetchReverseGeocode(roundedLat, roundedLng);
            }

            // Click anywhere on map to move marker and update coordinates
            map.on('click', function(e) {
                updateInputs(e.latlng.lat, e.latlng.lng, false);
            });

            // Drag marker end event
            marker.on('dragend', function() {
                const pos = marker.getLatLng();
                updateInputs(pos.lat, pos.lng, false);
            });

            // Manual inputs change syncs back to map
            function onManualInputChange() {
                const latVal = parseFloat(latInput.value);
                const lngVal = parseFloat(lngInput.value);

                if (!isNaN(latVal) && !isNaN(lngVal) && latVal >= -90 && latVal <= 90 && lngVal >= -180 && lngVal <= 180) {
                    marker.setLatLng([latVal, lngVal]);
                    map.panTo([latVal, lngVal]);
                    coordsDisplay.textContent = `${latVal}, ${lngVal}`;
                }
            }

            latInput.addEventListener('input', onManualInputChange);
            lngInput.addEventListener('input', onManualInputChange);

            // Quick focus buttons
            document.getElementById('btn-focus-current').addEventListener('click', function() {
                updateInputs(savedLat, savedLng, true);
                map.setZoom(10);
            });

            document.getElementById('btn-focus-ub').addEventListener('click', function() {
                updateInputs(-7.9526, 112.6144, true);
                map.setZoom(12);
            });

            document.getElementById('btn-focus-indo').addEventListener('click', function() {
                map.setView([-2.5, 118.0], 5);
            });

            document.getElementById('btn-focus-world').addEventListener('click', function() {
                map.setView([20.0, 10.0], 2);
            });

            setTimeout(function() {
                map.invalidateSize();
            }, 300);

            // Location search handler using OSM Nominatim
            const searchInput = document.getElementById('map-search-input');
            const searchBtn = document.getElementById('btn-map-search');
            const destinationNameInput = document.getElementById('destination_name');

            function searchLocation() {
                const q = searchInput.value.trim();
                if (!q) return;

                const origHtml = searchBtn.innerHTML;
                searchBtn.textContent = 'Mencari...';
                searchBtn.disabled = true;

                fetch(`https://nominatim.openstreetmap.org/search?format=jsonv2&q=${encodeURIComponent(q)}&limit=1`)
                    .then(res => res.json())
                    .then(results => {
                        searchBtn.innerHTML = origHtml;
                        searchBtn.disabled = false;

                        if (results && results.length > 0) {
                            const res = results[0];
                            const lat = parseFloat(res.lat);
                            const lon = parseFloat(res.lon);
                            updateInputs(lat, lon, true);
                            map.setZoom(12);

                            if (!destinationNameInput.value) {
                                destinationNameInput.value = res.name || q;
                            }
                        } else {
                            alert('Lokasi tidak ditemukan. Coba ketik nama kota atau negara yang lebih spesifik.');
                        }
                    })
                    .catch(() => {
                        searchBtn.innerHTML = origHtml;
                        searchBtn.disabled = false;
                        alert('Gagal mencari lokasi. Silakan periksa koneksi internet atau klik langsung pada peta.');
                    });
            }

            searchBtn.addEventListener('click', searchLocation);
            searchInput.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    searchLocation();
                }
            });

            // Debounced reverse geocoding helper using OSM Nominatim
            let geocodeTimer = null;
            function fetchReverseGeocode(lat, lng) {
                clearTimeout(geocodeTimer);
                geocodeTimer = setTimeout(function() {
                    fetch(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${lat}&lon=${lng}`)
                        .then(res => res.json())
                        .then(data => {
                            if (data && data.address) {
                                const country = data.address.country;
                                const city = data.address.city || data.address.town || data.address.county || data.address.state;

                                if (country && (!countryInput.value || countryInput.value === 'Indonesia')) {
                                    countryInput.value = country;
                                }
                                if (city && !cityInput.value) {
                                    cityInput.value = city;
                                }
                            }
                        })
                        .catch(() => {});
                }, 500);
            }
        });
    </script>
@endsection
