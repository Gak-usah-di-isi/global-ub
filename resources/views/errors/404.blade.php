<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 - Page Not Found</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('/images/ub.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @keyframes gubFloatY {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-4px);
            }
        }

        .animate-float-slow {
            animation: gubFloatY 3.2s ease-in-out infinite;
        }

        @media (prefers-reduced-motion: reduce) {
            .animate-float-slow {
                animation: none;
            }
        }
    </style>
</head>

<body class="font-sans antialiased bg-white min-h-screen">
    <section class="relative w-full min-h-screen max-w-[1440px] mx-auto flex items-center justify-center">
        <div class="absolute inset-0 bg-gradient-to-br from-[#0000FF08] to-[#6699FF08]"></div>

        <div
            class="relative z-10 flex flex-col items-center justify-center px-4 sm:px-8 md:px-12 lg:px-[120px] text-center">

            <img src="{{ asset('/icons/gub-nav.svg') }}" alt="Logo Gub"
                class="h-10 md:h-14 mx-auto mb-6 md:mb-8 animate-float-slow">

            <h2 class="text-3xl sm:text-4xl md:text-6xl font-bold text-gray-900 font-inter mb-6">
                404
            </h2>


            <!-- Main Content -->
            <div class="max-w-2xl mx-auto space-y-6">

                <!-- Title -->
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 font-playfair">
                    Oops! Page Not Found
                </h2>

                <!-- Description -->
                <p class="text-lg sm:text-xl text-gray-600 font-inter leading-relaxed max-w-md mx-auto">
                    The page you're looking for doesn't exist or has been moved.
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mt-8">
                    <a href="{{ url('/') }}"
                        class="bg-[#0000FF] hover:bg-[#0000CC] text-white py-3 px-8 rounded-[12px] transition-all duration-300 font-medium font-inter text-[14px] shadow-[0px_8px_25px_-8px_#0000FF4D] flex items-center gap-2 min-w-[180px] justify-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Back to Home
                    </a>

                    <button onclick="history.back()"
                        class="bg-transparent border border-[#0000FF] text-[#0000FF] hover:bg-[#0000FF] hover:text-white py-3 px-8 rounded-[12px] transition-all duration-300 font-medium font-inter text-[14px] flex items-center gap-2 min-w-[180px] justify-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Go Back
                    </button>
                </div>
            </div>
    </section>
</body>

</html>
