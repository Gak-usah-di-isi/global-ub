@extends('core.app')

@section('title', 'Partnership Map')

@section('content')
    <style>
        /*
        |--------------------------------------------------------------------------
        | Pengaturan ukuran dan posisi jsVectorMap
        |--------------------------------------------------------------------------
        */
        #country-map {
            position: relative;
            width: 100%;
            height: 600px;
            overflow: hidden;
        }

        #country-map svg {
            display: block !important;
            width: 100% !important;
            height: 500px !important;
            transform: translateY(35px) scale(0.99) !important;
            transform-origin: center center !important;
            overflow: visible !important;
        }

        #country-map .jvm-container {
            width: 100% !important;
            height: 100% !important;
            overflow: hidden !important;
        }

        #country-map .jvm-zoom-btn {
            z-index: 20;
        }

        .jvm-tooltip {
            background-color: #ffffff !important;
            border: 1px solid #E2E8F0 !important;
            border-radius: 12px !important;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1) !important;
            color: #1e293b !important;
            padding: 4px 6px !important;
            z-index: 100 !important;
        }

        @media (max-width: 1024px) {
            #country-map {
                height: 550px;
            }

            #country-map svg {
                height: 500px !important;
                transform: translateY(30px) scale(1.22) !important;
            }
        }

        @media (max-width: 640px) {
            #country-map {
                height: 420px;
            }

            #country-map svg {
                height: 390px !important;
                transform: translateY(20px) scale(1.1) !important;
            }
        }
    </style>

    {{-- Breadcrumb --}}
    <div class="bg-[#F0F2F4] w-full h-[80px] flex items-center px-4 md:px-8 lg:px-[112px]">
        <div class="flex items-center space-x-4">
            <div class="w-[16px] h-[16px]">
                <img src="/icons-site/home.svg" alt="Home Icon" class="w-full h-full">
            </div>

            <a href="/" class="text-[#29303D] text-xs md:text-[14px] font-light hover:text-[#0000FF] transition-colors">
                Home
            </a>

            <div class="w-[16px] h-[16px]">
                <img src="/icons-site/arrow-right-chevron.svg" alt="Right Arrow" class="w-[14px] h-[14px]">
            </div>
        </div>

        <div class="flex items-center space-x-4 ml-4">
            <span class="font-medium text-[#29303D] text-xs md:text-[14px]">
                Partnership Map
            </span>
        </div>
    </div>

    <section class="w-full bg-white px-4 py-10 sm:px-8 md:px-16 md:py-16 lg:px-20 lg:py-20 xl:px-[80px] overflow-hidden">
        <div class="max-w-[1280px] mx-auto flex flex-col gap-10 md:gap-12">

            {{-- Header --}}
            <div class="flex flex-col items-center text-center gap-4">
                <div class="inline-flex items-center gap-2 rounded-full border border-[#E2E4E9] bg-[#F9FAFB] px-4 py-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-[#0000FF]"></span>

                    <span class="text-xs md:text-sm font-medium text-[#29303D]">
                        Global & Domestic Partnerships
                    </span>
                </div>

                <h1 class="font-playfair font-bold text-3xl sm:text-4xl md:text-[40px] lg:text-[48px] leading-tight text-[#29303D]">
                    Partnership Map
                </h1>

                <p class="max-w-[760px] font-inter text-base sm:text-lg md:text-[18px] leading-7 text-[#29303DB2] font-light px-2 sm:px-0">
                    Jejaring kerjasama strategis Universitas Brawijaya dengan berbagai mitra institusi dan perguruan tinggi, baik di dalam negeri maupun mancanegara.
                </p>
            </div>

            {{-- Map dan Collaboration List --}}
            <div class="grid grid-cols-1 xl:grid-cols-[minmax(0,1.55fr)_minmax(340px,0.45fr)] gap-6 md:gap-8 items-start">
                {{-- Map Card --}}
                <div class="rounded-[28px] border border-[#E2E4E9] bg-white shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
                    <div class="p-5 sm:p-7 border-b border-[#E2E4E9] flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <h2 class="font-playfair font-bold text-xl sm:text-2xl text-[#29303D]">
                                Interactive Partnership Map
                            </h2>

                            <p class="font-inter text-sm text-[#29303DB2] font-light mt-1">
                                Titik emas adalah UB Malang. Hover titik untuk info mitra, klik titik untuk membuka program terkait.
                            </p>
                        </div>
                        <div class="flex items-center gap-3 text-xs">
                            <span class="inline-flex items-center gap-1.5 text-slate-600 font-medium">
                                <span class="w-3 h-3 rounded-full bg-[#F59E0B] inline-block shadow-xs"></span> UB Hub
                            </span>
                            <span class="inline-flex items-center gap-1.5 text-slate-600 font-medium">
                                <span class="w-3 h-3 rounded-full bg-[#3B82F6] inline-block shadow-xs"></span> Partner
                            </span>
                            <span class="inline-flex items-center gap-1.5 text-slate-600 font-medium">
                                <span class="w-3 h-3 rounded-full bg-[#EF4444] inline-block shadow-xs"></span> Strategic
                            </span>
                        </div>
                    </div>

                    <div class="relative bg-[#F9FAFB] px-3 sm:px-4 pb-4 overflow-hidden rounded-b-[28px]" id="map-container-wrapper">
                        <div id="country-map"></div>

                        {{-- Floating Interactive Popup Card --}}
                        <div id="map-interactive-popup"
                            class="absolute z-30 hidden bg-white rounded-2xl shadow-[0px_10px_35px_-5px_rgba(41,48,61,0.22)] border border-[#E2E4E9] p-4 min-w-[250px] max-w-[320px] pointer-events-auto transition-all duration-150 ease-out text-left"
                            style="opacity: 0; transform: translateY(4px);">
                            <div class="flex items-start justify-between gap-2">
                                <div class="flex-1 pr-1">
                                    <h4 id="popup-partner-name" class="font-playfair font-bold text-[#0F172A] text-sm md:text-[15px] leading-tight"></h4>
                                    <p id="popup-location" class="text-xs text-slate-500 font-inter mt-0.5"></p>
                                </div>
                                <button type="button" id="popup-close-btn" class="text-slate-400 hover:text-slate-600 p-1 -mr-1 -mt-1 rounded-lg hover:bg-slate-100 transition" title="Tutup">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                            </div>

                            <div id="popup-meta" class="mt-2.5 flex items-center gap-1.5 flex-wrap">
                                <span id="popup-status-badge" class="px-2 py-0.5 text-[10px] font-semibold rounded-full"></span>
                                <span id="popup-role" class="text-[11px] text-[#0000FF] font-medium"></span>
                            </div>

                            <div id="popup-program-section" class="mt-3 pt-2.5 border-t border-slate-100 hidden">
                                <div class="text-[10px] uppercase tracking-wider font-semibold text-slate-400 font-inter">Program Kolaborasi:</div>
                                <div id="popup-program-title" class="text-xs font-semibold text-slate-800 mt-1 leading-snug"></div>
                                <a id="popup-program-btn" href="#"
                                    class="mt-2.5 inline-flex items-center justify-center gap-1.5 w-full px-3 py-2 bg-[#0000FF] hover:bg-blue-700 active:bg-blue-800 text-white text-xs font-medium rounded-xl shadow-sm transition-colors duration-150">
                                    <span>Lihat Program</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Collaboration List --}}
                <div class="rounded-[28px] border border-[#E2E4E9] bg-white shadow-[0px_4px_20px_-2px_#29303D1A] p-5 md:p-6 flex flex-col max-h-[670px]">
                    <div class="pb-3 border-b border-slate-100">
                        <div class="flex items-center justify-between">
                            <h2 class="font-playfair font-bold text-xl md:text-[24px] text-[#29303D]">
                                Collaboration List
                            </h2>
                            <span class="text-xs font-semibold px-2.5 py-1 bg-primary-50 text-primary-700 rounded-full border border-primary-200">
                                {{ count($partnershipMaps) }} Titik Mitra
                            </span>
                        </div>

                        <p class="mt-1 font-inter text-xs md:text-sm text-[#29303DB2] font-light">
                            Mitra kerjasama aktif yang terhubung pada peta.
                        </p>
                    </div>

                    <div class="mt-4 overflow-y-auto space-y-3 pr-1 flex-1">
                        @forelse ($partnershipMaps as $map)
                            @php
                                $effectiveProgram = $map->effective_program;
                                $partner = $map->partnership;
                                $isHighlighted = in_array($map->status, ['Highlighted', 'Strategic']);
                            @endphp
                            <div class="collaboration-list-item rounded-[16px] border border-[#E2E4E9] hover:border-primary-300 bg-[#F9FAFB] hover:bg-slate-50 p-3.5 transition cursor-pointer"
                                data-marker-index="{{ $loop->index + 1 }}">
                                <div class="flex items-start justify-between gap-2">
                                    <div class="flex items-start gap-2.5">
                                        @if ($partner && $partner->logo)
                                            <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}"
                                                class="w-9 h-9 object-contain rounded-lg bg-white border border-slate-200 p-0.5 shrink-0 mt-0.5" />
                                        @else
                                            <div class="w-9 h-9 rounded-lg bg-white border border-slate-200 flex items-center justify-center shrink-0 mt-0.5 text-slate-400">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3" />
                                                </svg>
                                            </div>
                                        @endif
                                        <div>
                                            <h3 class="font-playfair font-bold text-sm md:text-[15px] text-[#29303D] leading-tight">
                                                {{ $partner->name ?? $map->destination_name }}
                                            </h3>

                                            <p class="text-xs text-slate-500 font-inter mt-0.5">
                                                {{ $map->city_name ? $map->city_name . ', ' : '' }}{{ $map->country_name }}
                                            </p>

                                            @if ($map->role)
                                                <p class="mt-1 text-[11px] text-[#0000FF] font-medium leading-4">
                                                    {{ $map->role }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>

                                    <span class="inline-flex items-center rounded-full px-2 py-0.5 text-[10px] font-medium whitespace-nowrap shrink-0
                                        {{ $isHighlighted ? 'bg-[#FEE2E2] text-[#DC2626]' : 'bg-[#DCFCE7] text-[#15803D]' }}">
                                        {{ $map->status }}
                                    </span>
                                </div>

                                @if ($effectiveProgram)
                                    <div class="mt-2.5 pt-2 border-t border-slate-200/80 flex items-center justify-between gap-2">
                                        <div class="text-[11px] text-slate-600 truncate">
                                            <span class="font-medium text-slate-700">Program:</span> {{ $effectiveProgram->title }}
                                        </div>
                                        <a href="{{ route('program.show', $effectiveProgram->slug) }}"
                                            class="text-[11px] font-semibold text-primary-600 hover:text-primary-700 hover:underline shrink-0 flex items-center gap-0.5">
                                            Detail &rarr;
                                        </a>
                                    </div>
                                @endif
                            </div>
                        @empty
                            <div class="text-center py-8 text-slate-400 text-sm">
                                Belum ada titik kerjasama yang ditampilkan.
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>

            {{-- Information Cards --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6">
                <div class="rounded-[20px] border border-[#E2E4E9] bg-white p-5 md:p-6 shadow-[0px_4px_20px_-2px_#29303D1A]">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="w-3.5 h-3.5 rounded-full bg-[#F59E0B] shadow-xs"></span>
                        <h3 class="font-playfair font-bold text-xl md:text-2xl text-[#29303D]">
                            Titik Asal (UB Malang)
                        </h3>
                    </div>
                    <p class="font-inter text-sm md:text-[15px] leading-6 text-[#29303DB2] font-light">
                        Universitas Brawijaya di Malang berfungsi sebagai poros utama inisiasi seluruh kolaborasi akademik dan riset global.
                    </p>
                </div>

                <div class="rounded-[20px] border border-[#E2E4E9] bg-white p-5 md:p-6 shadow-[0px_4px_20px_-2px_#29303D1A]">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="w-3.5 h-3.5 rounded-full bg-[#3B82F6] shadow-xs"></span>
                        <h3 class="font-playfair font-bold text-xl md:text-2xl text-[#29303D]">
                            Mitra Kerjasama
                        </h3>
                    </div>
                    <p class="font-inter text-sm md:text-[15px] leading-6 text-[#29303DB2] font-light">
                        Titik biru (partner) dan merah (strategic) mencakup jaringan mitra universitas serta institusi baik di dalam maupun luar negeri.
                    </p>
                </div>

                <div class="rounded-[20px] border border-[#E2E4E9] bg-white p-5 md:p-6 shadow-[0px_4px_20px_-2px_#29303D1A]">
                    <div class="flex items-center gap-2 mb-2">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59" />
                        </svg>
                        <h3 class="font-playfair font-bold text-xl md:text-2xl text-[#29303D]">
                            Interaktif & Terhubung
                        </h3>
                    </div>
                    <p class="font-inter text-sm md:text-[15px] leading-6 text-[#29303DB2] font-light">
                        Arahkan kursor pada titik untuk melihat nama mitra. Klik titik pada peta untuk langsung membuka program terkait.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap/dist/jsvectormap.min.css">

    <style>
        /* Matikan tooltip bawaan jsvectormap yang menyebabkan kedip-kedip */
        .jvm-tooltip {
            display: none !important;
            opacity: 0 !important;
            visibility: hidden !important;
            pointer-events: none !important;
        }

        #map-interactive-popup {
            will-change: transform, opacity;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/jsvectormap"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap/dist/maps/world.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mapElement = document.querySelector('#country-map');
            const mapWrapper = document.querySelector('#map-container-wrapper');
            const popup = document.querySelector('#map-interactive-popup');

            if (!mapElement || !popup || !mapWrapper) {
                console.error('Map elements tidak lengkap.');
                return;
            }

            if (typeof jsVectorMap === 'undefined') {
                console.error('Library jsVectorMap tidak berhasil dimuat.');
                return;
            }

            const rawMarkers = @json($markers ?? []);
            const rawLines = @json($lines ?? []);

            const popupPartnerName = document.querySelector('#popup-partner-name');
            const popupLocation = document.querySelector('#popup-location');
            const popupStatusBadge = document.querySelector('#popup-status-badge');
            const popupRole = document.querySelector('#popup-role');
            const popupProgSection = document.querySelector('#popup-program-section');
            const popupProgTitle = document.querySelector('#popup-program-title');
            const popupProgBtn = document.querySelector('#popup-program-btn');
            const popupCloseBtn = document.querySelector('#popup-close-btn');

            let hideTimer = null;
            let isPinned = false;
            let activeIndex = null;
            let activeTargetEl = null;

            function positionPopup(targetEl) {
                if (!targetEl || !popup || !mapWrapper) return;

                const targetRect = targetEl.getBoundingClientRect();
                const wrapperRect = mapWrapper.getBoundingClientRect();

                const markerCenterX = targetRect.left - wrapperRect.left + (targetRect.width / 2);
                const markerCenterY = targetRect.top - wrapperRect.top + (targetRect.height / 2);

                popup.classList.remove('hidden');
                popup.style.display = 'block';

                const popupW = popup.offsetWidth || 280;
                const popupH = popup.offsetHeight || 160;

                // Tempatkan di samping kanan titik
                let left = markerCenterX + 14;
                let top = markerCenterY - (popupH / 2);

                // Jika overflow ke kanan, tempatkan di sebelah kiri titik
                if (left + popupW > wrapperRect.width - 12) {
                    left = markerCenterX - popupW - 14;
                }
                // Batas kiri
                if (left < 12) {
                    left = 12;
                }
                // Batas bawah
                if (top + popupH > wrapperRect.height - 12) {
                    top = wrapperRect.height - popupH - 12;
                }
                // Batas atas
                if (top < 12) {
                    top = 12;
                }

                popup.style.left = `${Math.round(left)}px`;
                popup.style.top = `${Math.round(top)}px`;
                popup.style.opacity = '1';
                popup.style.transform = 'translateY(0)';
            }

            function showPopup(index, targetEl, pinned = false) {
                const m = rawMarkers[index];
                if (!m) return;

                clearTimeout(hideTimer);
                activeIndex = index;
                activeTargetEl = targetEl;

                if (pinned) {
                    isPinned = true;
                }

                // Isi Konten Popup
                popupPartnerName.textContent = m.partnerName || m.name;
                popupLocation.textContent = m.location || '';

                if (m.isOrigin) {
                    popupStatusBadge.textContent = 'Origin Hub';
                    popupStatusBadge.className = 'px-2.5 py-0.5 text-[10px] font-semibold rounded-full bg-amber-100 text-amber-700';
                    popupRole.textContent = m.role || 'Main Campus';
                    popupRole.className = 'text-[11px] text-amber-600 font-medium';
                    popupProgSection.classList.add('hidden');
                } else {
                    const isHighlight = m.status === 'Highlighted' || m.status === 'Strategic';
                    popupStatusBadge.textContent = m.status || 'Partner';
                    popupStatusBadge.className = isHighlight
                        ? 'px-2.5 py-0.5 text-[10px] font-semibold rounded-full bg-red-100 text-red-600'
                        : 'px-2.5 py-0.5 text-[10px] font-semibold rounded-full bg-blue-100 text-blue-600';

                    popupRole.textContent = m.role || 'Cooperation Partner';
                    popupRole.className = 'text-[11px] text-[#0000FF] font-medium';

                    if (m.programTitle && m.programUrl) {
                        popupProgSection.classList.remove('hidden');
                        popupProgTitle.textContent = m.programTitle;
                        popupProgBtn.href = m.programUrl;
                    } else {
                        popupProgSection.classList.add('hidden');
                    }
                }

                positionPopup(targetEl);
            }

            function scheduleHide() {
                if (isPinned) return;
                clearTimeout(hideTimer);
                hideTimer = setTimeout(() => {
                    hidePopup();
                }, 400); // Buffer 400ms agar user leluasa menggerakkan mouse ke arah popup tanpa takut hilang
            }

            function hidePopup() {
                isPinned = false;
                activeIndex = null;
                activeTargetEl = null;
                popup.style.opacity = '0';
                popup.style.transform = 'translateY(4px)';
                setTimeout(() => {
                    if (!isPinned && activeIndex === null) {
                        popup.classList.add('hidden');
                        popup.style.display = 'none';
                    }
                }, 150);
            }

            // Inisialisasi jsVectorMap
            const map = new jsVectorMap({
                selector: '#country-map',
                map: 'world',
                backgroundColor: 'transparent',

                zoomOnScroll: false,
                zoomButtons: true,
                draggable: true,
                showTooltip: false, // Matikan tooltip bawaan jsvectormap

                markers: rawMarkers,
                lines: rawLines,

                regionStyle: {
                    initial: {
                        fill: '#DEE2E8',
                        stroke: 'none',
                        strokeWidth: 0,
                        fillOpacity: 1
                    },
                    hover: {
                        fill: '#CBD5E1',
                        fillOpacity: 1,
                        cursor: 'default'
                    }
                },

                markerStyle: {
                    initial: {
                        fill: '#3B82F6',
                        stroke: '#BFDBFE',
                        strokeWidth: 5,
                        r: 6
                    },
                    hover: {
                        fill: '#2563EB',
                        stroke: '#DBEAFE',
                        strokeWidth: 6,
                        cursor: 'pointer'
                    },
                    selected: {
                        fill: '#FF5050'
                    }
                },

                markerLabelStyle: {
                    initial: {
                        fontFamily: 'Segoe UI, sans-serif',
                        fontSize: 12,
                        fontWeight: 500,
                        fill: '#29303D'
                    }
                },

                lineStyle: {
                    stroke: '#94A3B8',
                    strokeWidth: 1.3,
                    strokeDasharray: '6 4',
                    animation: true,
                    curvature: -0.4
                },

                onViewportChange: function() {
                    if (isPinned && activeTargetEl) {
                        positionPopup(activeTargetEl);
                    } else {
                        hidePopup();
                    }
                }
            });

            // Delegate event listeners pada SVG markers
            mapElement.addEventListener('mouseover', function(e) {
                const markerEl = e.target.closest('.jvm-element[data-index], circle[data-index]');
                if (markerEl) {
                    const index = parseInt(markerEl.getAttribute('data-index'), 10);
                    if (!isNaN(index)) {
                        showPopup(index, markerEl, false);
                    }
                }
            });

            mapElement.addEventListener('mouseout', function(e) {
                const markerEl = e.target.closest('.jvm-element[data-index], circle[data-index]');
                if (markerEl) {
                    scheduleHide();
                }
            });

            mapElement.addEventListener('click', function(e) {
                const markerEl = e.target.closest('.jvm-element[data-index], circle[data-index]');
                if (markerEl) {
                    const index = parseInt(markerEl.getAttribute('data-index'), 10);
                    if (!isNaN(index)) {
                        showPopup(index, markerEl, true); // Klik = Pin popup terbuka
                        e.stopPropagation();
                    }
                }
            });

            // Saat cursor masuk ke popup card, jangan sembunyikan (batalkan hideTimer)
            popup.addEventListener('mouseenter', function() {
                clearTimeout(hideTimer);
            });

            // Saat cursor keluar dari popup card, jalankan timer sembunyikan
            popup.addEventListener('mouseleave', function() {
                scheduleHide();
            });

            // Tombol Tutup (X) pada popup
            if (popupCloseBtn) {
                popupCloseBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    isPinned = false;
                    hidePopup();
                });
            }

            // Klik di luar popup dan marker akan menutup popup
            document.addEventListener('click', function(e) {
                if (!popup.contains(e.target) && !e.target.closest('.jvm-element[data-index]')) {
                    isPinned = false;
                    hidePopup();
                }
            });

            // Interaksi klik pada Sidebar Collaboration List
            document.querySelectorAll('.collaboration-list-item').forEach(item => {
                item.addEventListener('click', function() {
                    const markerIndex = parseInt(this.getAttribute('data-marker-index'), 10);
                    if (!isNaN(markerIndex)) {
                        const markerEl = mapElement.querySelector(`[data-index="${markerIndex}"]`);
                        if (markerEl) {
                            showPopup(markerIndex, markerEl, true);
                        }
                    }
                });
            });

            /*
             * Paksa ukuran SVG setelah jsVectorMap selesai membuat elemen.
             */
            function forceMapSize() {
                const svg = document.querySelector('#country-map svg');

                if (!svg) {
                    return;
                }

                svg.setAttribute('width', '100%');
                svg.setAttribute('height', '500');

                svg.style.width = '100%';
                svg.style.height = '500px';
                svg.style.transform = 'translateY(35px) scale(1.32)';
                svg.style.transformOrigin = 'center center';
                svg.style.overflow = 'visible';
            }

            requestAnimationFrame(forceMapSize);
            setTimeout(forceMapSize, 100);
            setTimeout(forceMapSize, 300);
            setTimeout(forceMapSize, 700);

            window.addEventListener('resize', function() {
                setTimeout(forceMapSize, 100);
                if (isPinned && activeTargetEl) {
                    positionPopup(activeTargetEl);
                }
            });
        });
    </script>
@endpush
