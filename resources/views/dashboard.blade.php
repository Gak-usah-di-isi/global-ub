@extends('layouts.app')

@section('title', 'Dashboard - Welcome to GlobalUB Admin')

@section('content')
    <!-- Hero Section with Gradient Background -->
    <div class="relative mb-8 bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-2xl overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-[#0000FF] to-[#6699FF] opacity-90"></div>
        <div class="relative px-8 py-12 md:py-16">
            <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="text-white space-y-4 md:w-2/3">
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold font-playfair leading-tight">
                        Welcome to <span class="text-[#6699FF]">GlobalUB</span><br>
                        <span class="text-2xl md:text-3xl lg:text-4xl">Administration Panel</span>
                    </h1>
                    <p class="text-lg md:text-xl font-light font-inter leading-relaxed opacity-90">
                        Manage and elevate your university's global presence with our comprehensive content management
                        system
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <div class="bg-[#FFFFFF1A] border border-[#FFFFFF33] backdrop-blur-[4px] px-6 py-3 rounded-xl">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-white font-semibold">{{ auth()->user()->name ?? 'Administrator' }}</p>
                                    <p class="text-white/70 text-sm">{{ now()->format('l, F j, Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/3 flex justify-center">
                    <div
                        class="w-40 h-40 md:w-48 md:h-48 bg-white/10 rounded-2xl backdrop-blur-sm flex items-center justify-center">
                        <svg class="w-20 h-20 md:w-24 md:h-24 text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- News Management -->
        <a href="{{ route('news.index') }}" class="group">
            <div
                class="bg-white rounded-xl shadow-card p-6 hover:shadow-lg transition-all duration-300 border-l-4 border-blue-500">
                <div class="flex items-center justify-between mb-4">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                        </svg>
                    </div>
                    <span class="text-blue-500 group-hover:translate-x-1 transition-transform">→</span>
                </div>
                <h3 class="text-lg font-semibold text-slate-800 mb-2">News Management</h3>
                <p class="text-slate-600 text-sm">Manage university news and announcements</p>
            </div>
        </a>

        <!-- Events Management -->
        <a href="{{ route('events.index') }}" class="group">
            <div
                class="bg-white rounded-xl shadow-card p-6 hover:shadow-lg transition-all duration-300 border-l-4 border-blue-500">
                <div class="flex items-center justify-between mb-4">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <span class="text-blue-500 group-hover:translate-x-1 transition-transform">→</span>
                </div>
                <h3 class="text-lg font-semibold text-slate-800 mb-2">Events Management</h3>
                <p class="text-slate-600 text-sm">Organize and manage university events</p>
            </div>
        </a>

        <!-- Study Programs -->
        <a href="{{ route('studies.index') }}" class="group">
            <div
                class="bg-white rounded-xl shadow-card p-6 hover:shadow-lg transition-all duration-300 border-l-4 border-blue-500">
                <div class="flex items-center justify-between mb-4">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                        </svg>
                    </div>
                    <span class="text-blue-500 group-hover:translate-x-1 transition-transform">→</span>
                </div>
                <h3 class="text-lg font-semibold text-slate-800 mb-2">Study Programs</h3>
                <p class="text-slate-600 text-sm">Manage academic programs and courses</p>
            </div>
        </a>

        <!-- Download Center -->
        <a href="{{ route('download-center.index') }}" class="group">
            <div
                class="bg-white rounded-xl shadow-card p-6 hover:shadow-lg transition-all duration-300 border-l-4 border-blue-500">
                <div class="flex items-center justify-between mb-4">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <span class="text-blue-500 group-hover:translate-x-1 transition-transform">→</span>
                </div>
                <h3 class="text-lg font-semibold text-slate-800 mb-2">Download Center</h3>
                <p class="text-slate-600 text-sm">Manage downloadable resources and files</p>
            </div>
        </a>
    </div>

    <!-- Vision and Mission Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="bg-white rounded-xl shadow-card p-8">
            <div class="flex items-center gap-3 mb-6">
                <div
                    class="w-12 h-12 bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800">Our Vision</h3>
            </div>
            <p class="text-slate-600 leading-relaxed">
                To become a world-class university that leads in education, research, and community service,
                fostering global citizenship and sustainable development through innovation and collaboration.
            </p>
        </div>

        <div class="bg-white rounded-xl shadow-card p-8">
            <div class="flex items-center gap-3 mb-6">
                <div
                    class="w-12 h-12 bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800">Our Mission</h3>
            </div>
            <p class="text-slate-600 leading-relaxed">
                Inspiring change and uniting civilizations through quality education, cutting-edge research,
                and meaningful partnerships that create positive impact for society and global development.
            </p>
        </div>
    </div>

    <style>
        .font-playfair {
            font-family: 'Playfair Display', serif;
        }

        .font-inter {
            font-family: 'Inter', sans-serif;
        }
    </style>
@endsection
