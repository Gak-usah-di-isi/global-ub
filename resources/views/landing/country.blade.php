@extends('core.app')

@section('title', 'Country')

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

        /*
                                     * Besarkan seluruh SVG.
                                     * Semua region, marker, dan garis akan ikut membesar.
                                     */
        #country-map svg {
            display: block !important;
            width: 100% !important;
            height: 500px !important;

            /*
                                         * translateY = menurunkan posisi peta
                                         * scale = memperbesar peta
                                         */
            transform: translateY(35px) scale(0.99) !important;
            transform-origin: center center !important;

            overflow: visible !important;
        }

        /*
                                     * Pastikan container bawaan jsVectorMap memenuhi area.
                                     */
        #country-map .jvm-container {
            width: 100% !important;
            height: 100% !important;
            overflow: hidden !important;
        }

        /*
                                     * Posisi tombol zoom.
                                     */
        #country-map .jvm-zoom-btn {
            z-index: 20;
        }

        /*
                                     * Tampilan tablet.
                                     */
        @media (max-width: 1024px) {
            #country-map {
                height: 550px;
            }

            #country-map svg {
                height: 500px !important;
                transform: translateY(30px) scale(1.22) !important;
            }
        }

        /*
                                     * Tampilan HP.
                                     */
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
                Country
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
                        Global Cooperation Map
                    </span>
                </div>

                <h1
                    class="font-playfair font-bold text-3xl sm:text-4xl md:text-[40px] lg:text-[48px] leading-tight text-[#29303D]">
                    Country Partnerships
                </h1>

                <p
                    class="max-w-[760px] font-inter text-base sm:text-lg md:text-[18px] leading-7 text-[#29303DB2] font-light px-2 sm:px-0">
                    This page shows the countries that collaborate with
                    Globalizing UB using an interactive world map.
                </p>
            </div>

            {{-- Map dan Collaboration List --}}
            <div class="grid grid-cols-1 xl:grid-cols-[minmax(0,1.55fr)_minmax(320px,0.45fr)] gap-6 md:gap-8 items-start">
                {{-- Map Card --}}
                <div
                    class="rounded-[28px] border border-[#E2E4E9] bg-white shadow-[0px_4px_20px_-2px_#29303D1A] overflow-hidden">
                    <div
                        class="p-5 sm:p-7 border-b border-[#E2E4E9] flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <h2 class="font-playfair font-bold text-xl sm:text-2xl text-[#29303D]">
                                Interactive Country Map
                            </h2>

                            <p class="font-inter text-sm text-[#29303DB2] font-light mt-1">
                                Blue markers show general partners, red markers
                                highlight strategic countries.
                            </p>
                        </div>
                    </div>

                    <div class="relative bg-[#F9FAFB] px-3 sm:px-4 pb-4">
                        <div id="country-map"></div>
                    </div>
                </div>

                {{-- Collaboration List --}}
                <div
                    class="rounded-[28px] border border-[#E2E4E9] bg-white shadow-[0px_4px_20px_-2px_#29303D1A] p-5 md:p-6">
                    <h2 class="font-playfair font-bold text-2xl md:text-[28px] text-[#29303D]">
                        Collaboration List
                    </h2>

                    <p class="mt-2 font-inter text-sm md:text-[15px] leading-6 text-[#29303DB2] font-light">
                        Countries displayed on the map and their cooperation role.
                    </p>

                    <div class="mt-5 grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-1 gap-3">
                        @foreach ($countries as $country)
                            <div class="rounded-[16px] border border-[#E2E4E9] bg-[#F9FAFB] p-3 md:p-4">
                                <div class="flex items-start justify-between gap-2 md:gap-3">
                                    <div>
                                        <h3
                                            class="font-playfair font-bold text-base md:text-[17px] text-[#29303D] leading-tight">
                                            {{ $country['name'] }}
                                        </h3>

                                        <p class="mt-1 text-xs md:text-sm text-[#29303DB2] font-inter font-light leading-5">
                                            {{ $country['role'] }}
                                        </p>
                                    </div>

                                    <span
                                        class="inline-flex items-center rounded-full px-2.5 py-1 text-[11px] font-medium whitespace-nowrap
                                        {{ $country['status'] === 'Highlighted' ? 'bg-[#FEE2E2] text-[#DC2626]' : 'bg-[#DCFCE7] text-[#15803D]' }}">
                                        {{ $country['status'] }}
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Information Cards --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6">
                <div
                    class="rounded-[20px] border border-[#E2E4E9] bg-white p-5 md:p-6 shadow-[0px_4px_20px_-2px_#29303D1A]">
                    <h3 class="font-playfair font-bold text-xl md:text-2xl text-[#29303D] mb-2">
                        Blue Markers
                    </h3>

                    <p class="font-inter text-sm md:text-[15px] leading-6 text-[#29303DB2] font-light">
                        General collaboration countries are shown with a blue
                        marker on the map.
                    </p>
                </div>

                <div
                    class="rounded-[20px] border border-[#E2E4E9] bg-white p-5 md:p-6 shadow-[0px_4px_20px_-2px_#29303D1A]">
                    <h3 class="font-playfair font-bold text-xl md:text-2xl text-[#29303D] mb-2">
                        Red Markers
                    </h3>

                    <p class="font-inter text-sm md:text-[15px] leading-6 text-[#29303DB2] font-light">
                        Strategic or highlighted countries use a red marker to
                        match the reference design.
                    </p>
                </div>

                <div
                    class="rounded-[20px] border border-[#E2E4E9] bg-white p-5 md:p-6 shadow-[0px_4px_20px_-2px_#29303D1A]">
                    <h3 class="font-playfair font-bold text-xl md:text-2xl text-[#29303D] mb-2">
                        Connected Lines
                    </h3>

                    <p class="font-inter text-sm md:text-[15px] leading-6 text-[#29303DB2] font-light">
                        Dashed lines represent collaboration links between countries.
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

            const markers = [{
                    name: 'Russia',
                    coords: [61.524, 105.3188]
                },
                {
                    name: 'Canada',
                    coords: [56.1304, -106.3468]
                },
                {
                    name: 'Greenland',
                    coords: [71.7069, -42.6043]
                },
                {
                    name: 'Brazil',
                    coords: [-14.2350, -51.9253],
                    style: {
                        initial: {
                            fill: '#ff0000'
                        }
                    }
                },
                {
                    name: 'China',
                    coords: [35.8617, 104.1954],
                    style: {
                        initial: {
                            fill: '#ff0000'
                        }
                    }
                },
                {
                    name: 'United States',
                    coords: [37.0902, -95.7129]
                },
                {
                    name: 'Norway',
                    coords: [60.472024, 8.468946],
                    style: {
                        initial: {
                            fill: '#ff0000'
                        }
                    }
                },
                {
                    name: 'Palestine',
                    coords: [31.9522, 35.2332],
                    style: {
                        initial: {
                            fill: '#ff0000'
                        }
                    }
                }
            ];

            const map = new jsVectorMap({
                selector: '#country-map',
                map: 'world',

                backgroundColor: 'transparent',

                zoomOnScroll: false,
                zoomButtons: true,
                draggable: true,

                markers: markers,

                lines: [{
                        from: 'Russia',
                        to: 'Greenland'
                    },
                    {
                        from: 'Russia',
                        to: 'United States'
                    },
                    {
                        from: 'Russia',
                        to: 'Canada'
                    },
                    {
                        from: 'Brazil',
                        to: 'Norway'
                    },
                    {
                        from: 'Brazil',
                        to: 'Palestine'
                    },
                    {
                        from: 'Brazil',
                        to: 'China'
                    }
                ],

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
                        cursor: 'pointer'
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
                        fontSize: 13,
                        fontWeight: 500,
                        fill: '#29303D'
                    }
                },

                lineStyle: {
                    stroke: '#7C8491',
                    strokeWidth: 1.2,
                    strokeDasharray: '6 4',
                    animation: true,
                    curvature: -0.5
                }
            });

            /*
             * Paksa ukuran SVG setelah jsVectorMap selesai membuat elemen.
             * Ini sama seperti ketika kamu mengubahnya lewat Inspect Element.
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

            /*
             * Jalankan beberapa kali karena SVG dibuat secara dinamis.
             */
            requestAnimationFrame(forceMapSize);

            setTimeout(forceMapSize, 100);
            setTimeout(forceMapSize, 300);
            setTimeout(forceMapSize, 700);

            /*
             * Atur ulang saat ukuran browser berubah.
             */
            window.addEventListener('resize', function() {
                setTimeout(forceMapSize, 100);
            });
        });
    </script>
@endpush
