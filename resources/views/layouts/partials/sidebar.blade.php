<aside id="sidebar"
    class="w-[275px] h-full shrink-0 bg-white shadow-[0_10px_20px_0_#404C9733] flex flex-col pt-2 pr-6 pb-4 pl-6 gap-4 z-50 md:static">
    <div class="flex items-center justify-between collapse-wrapper">
        <div class="pt-1 logo-wrapper transition-all duration-300">
            <img src="{{ asset('images/gub.png') }}" alt="Logo"
                class="w-[160px] h-auto nav-logo transition-all duration-300" />
        </div>
        <div
            class="absolute top-3 right-0 translate-x-1/2 w-12 h-12 rounded-r-full bg-white flex items-center justify-center p-2 shadow-[8px_0_24px_-8px_rgba(64,76,151,0.12)] z-[60]">
            <button id="sidebarToggle"
                class="w-8 h-8 p-1 rounded-full border-[0.5px] border-black flex items-center justify-center text-slate-700 hover:bg-slate-50 transition cursor-pointer"
                aria-label="Toggle sidebar">
                <svg id="arrowIcon" class="w-6 h-6 transition-transform duration-300 pointer-events-none" fill="none"
                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 6l-6 6 6 6" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Logo untuk mobile (opsional) -->
    <div class="md:hidden flex items-center justify-between mb-4">
        <img src="/images/logo.png" alt="Logo" class="w-[140px] h-auto nav-logo" />
        <button id="btnCloseMobileSidebar"
            class="w-10 h-10 flex items-center justify-center rounded-md text-slate-500 hover:bg-slate-100"
            aria-label="Tutup menu">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6l12 12M18 6 6 18" />
            </svg>
        </button>
    </div>

    <nav class="flex-1 overflow-y-auto">
        <div class="flex flex-col gap-2 pt-1">

            <a href="#"
                class="sidebar-menu-item w-full h-10 flex items-center gap-3 text-left text-[15px] font-semibold text-slate-800 px-2 rounded-[4px] hover:bg-slate-50 transition duration-150">
                <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" stroke-width="1.5"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                </svg>
                <span class="nav-label">Dashboard</span>
            </a>

            <!-- News Menu -->
            <a href="#"
                class="sidebar-menu-item w-full h-10 flex items-center gap-3 text-left text-[15px] font-semibold text-slate-800 px-2 rounded-[4px] hover:bg-slate-50 transition duration-150">
                <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" stroke-width="1.5"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5M5.25 19.5a2.25 2.25 0 0 1-2.25-2.25V6.75a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v10.5a2.25 2.25 0 0 1-2.25 2.25H5.25Z" />
                </svg>
                <span class="nav-label">News</span>
            </a>

            <!-- Event Menu -->
            <a href="#"
                class="sidebar-menu-item w-full h-10 flex items-center gap-3 text-left text-[15px] font-semibold text-slate-800 px-2 rounded-[4px] hover:bg-slate-50 transition duration-150">
                <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" stroke-width="1.5"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                </svg>
                <span class="nav-label">Event</span>
            </a>

            <!-- Study Menu -->
            <a href="#"
                class="sidebar-menu-item w-full h-10 flex items-center gap-3 text-left text-[15px] font-semibold text-slate-800 px-2 rounded-[4px] hover:bg-slate-50 transition duration-150">
                <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" stroke-width="1.5"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                </svg>
                <span class="nav-label">Study</span>
            </a>

            <!-- Download Menu -->
            <a href="{{ route('download-center.index') }}"
                class="sidebar-menu-item w-full h-10 flex items-center gap-3 text-left text-[15px] font-semibold px-2 rounded-[4px] transition duration-150 
                {{ request()->routeIs('download-center.*') ? 'bg-primary-50 text-primary-700 border-l-2 border-primary-500' : 'text-slate-800 hover:bg-slate-50' }}">
                <svg class="w-5 h-5 {{ request()->routeIs('download-center.*') ? 'text-primary-600' : 'text-slate-600' }}"
                    fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                </svg>
                <span class="nav-label">Download</span>
            </a>
        </div>
    </nav>

    <div class="text-[11px] text-slate-400 mt-4">© 2025</div>
</aside>
