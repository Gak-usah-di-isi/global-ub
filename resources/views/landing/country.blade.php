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

                    <div class="relative bg-[#F9FAFB] px-3 sm:px-4 pb-4">
                        <div id="country-map"></div>
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
                            <div class="rounded-[16px] border border-[#E2E4E9] bg-[#F9FAFB] hover:bg-slate-50 p-3.5 transition">
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

    <script src="https://cdn.jsdelivr.net/npm/jsvectormap"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap/dist/maps/world.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mapElement = document.querySelector('#country-map');

            if (!mapElement) {
                console.error('Element #country-map tidak ditemukan.');
                return;
            }

            if (typeof jsVectorMap === 'undefined') {
                console.error('Library jsVectorMap tidak berhasil dimuat.');
                return;
            }

            const rawMarkers = @json($markers ?? []);
            const rawLines = @json($lines ?? []);

            const map = new jsVectorMap({
                selector: '#country-map',
                map: 'world',
                backgroundColor: 'transparent',

                zoomOnScroll: false,
                zoomButtons: true,
                draggable: true,

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

                onMarkerTooltipShow: function(event, tooltip, index) {
                    const m = rawMarkers[index];
                    if (!m) return;

                    if (m.isOrigin) {
                        tooltip.text(`
                            <div style="padding: 6px 10px; font-family: inherit; text-align: left;">
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <span style="width: 8px; height: 8px; border-radius: 50%; background-color: #F59E0B; display: inline-block;"></span>
                                    <strong style="color: #0f172a; font-size: 13px;">${m.partnerName}</strong>
                                </div>
                                <div style="color: #64748b; font-size: 11px; margin-top: 3px;">${m.location}</div>
                                <div style="color: #d97706; font-size: 11px; font-weight: 500; margin-top: 4px;">${m.role}</div>
                            </div>
                        `, true);
                        return;
                    }

                    const isHighlight = m.status === 'Highlighted' || m.status === 'Strategic';
                    const badgeBg = isHighlight ? '#FEE2E2' : '#EFF6FF';
                    const badgeColor = isHighlight ? '#DC2626' : '#2563EB';

                    let programHtml = '';
                    if (m.programTitle) {
                        programHtml = `
                            <div style="margin-top: 8px; padding-top: 6px; border-top: 1px solid #E2E8F0; text-align: left;">
                                <div style="font-size: 10px; text-transform: uppercase; letter-spacing: 0.5px; color: #64748b; font-weight: 600;">Program Kolaborasi:</div>
                                <div style="font-size: 12px; color: #059669; font-weight: 600; margin-top: 2px; line-height: 1.3;">${m.programTitle}</div>
                                <div style="font-size: 10px; color: #0000FF; font-weight: 500; margin-top: 4px;">&rarr; Klik titik ini untuk membuka program</div>
                            </div>
                        `;
                    }

                    tooltip.text(`
                        <div style="padding: 8px 12px; font-family: inherit; min-width: 200px; max-width: 290px; text-align: left;">
                            <div style="font-weight: 700; color: #0f172a; font-size: 14px; line-height: 1.3;">${m.partnerName}</div>
                            <div style="color: #64748b; font-size: 12px; margin-top: 2px;">${m.location}</div>
                            <div style="margin-top: 6px; display: flex; align-items: center; gap: 6px;">
                                <span style="background-color: ${badgeBg}; color: ${badgeColor}; font-size: 10px; font-weight: 600; padding: 2px 7px; border-radius: 9999px;">${m.status}</span>
                                ${m.role ? `<span style="font-size: 11px; color: #475569;">${m.role}</span>` : ''}
                            </div>
                            ${programHtml}
                        </div>
                    `, true);
                },

                onMarkerClick: function(event, index) {
                    const m = rawMarkers[index];
                    if (m && m.programUrl) {
                        window.location.href = m.programUrl;
                    }
                }
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
            });
        });
    </script>
@endpush
