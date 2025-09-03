<aside id="sidebar"
    class="w-[275px] h-full shrink-0 bg-white shadow-[0_10px_20px_0_#404C9733] flex flex-col pt-2 pr-6 pb-4 pl-6 gap-4 z-50 md:static">
    <div class="flex items-center justify-between collapse-wrapper">
        <div class="pt-1 logo-wrapper">
            <img src="{{ asset('images/gub.png') }}" alt="Logo"
                class="w-[160px] h-auto nav-logo transition-opacity duration-300" />
        </div>
        <div
            class="absolute top-3 right-0 translate-x-1/2 w-12 h-12 rounded-r-full bg-white flex items-center justify-center p-2 shadow-[8px_0_24px_-8px_rgba(64,76,151,0.12)]">
            <button id="sidebarToggle"
                class="w-8 h-8 p-1 rounded-full border-[0.5px] border-black flex items-center justify-center text-slate-700 hover:bg-slate-50 transition"
                aria-label="Toggle sidebar">
                <svg id="arrowIcon" class="w-6 h-6 transition-transform duration-300" fill="none"
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
            <button id="produkParent"
                class="sidebar-menu-item w-full h-10 flex justify-between items-center text-left text-[15px] font-semibold text-slate-800 px-2 rounded-[4px] hover:bg-slate-50 transition duration-150"
                type="button">
                <span class="inline-flex items-center gap-3">
                    <img src="/icons/box-outline.png" alt="Produk" class="w-5 h-5" />
                    <span class="nav-label">Produk</span>
                </span>
                <svg class="caret-icon nav-caret w-4 h-4 text-slate-400 transition-transform duration-200"
                    fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" />
                </svg>
            </button>

            <div id="produkSubmenu" class="submenu flex flex-col gap-1 mt-1">
                <a href="{{ route('dashboard') }}"
                    class="sidebar-menu-item submenu-link w-full h-9 flex items-center gap-3 px-2 rounded-[4px] {{ request()->routeIs('dashboard') ? 'bg-[#2545AE] text-white' : 'text-slate-600 hover:bg-slate-50' }} text-[13px] font-semibold transition duration-150">
                    <img src="/icons/list-ul.png" alt="Daftar Produk" class="w-5 h-5 opacity-90" />
                    <span class="nav-label">Daftar Produk</span>
                </a>
            </div>
        </div>
    </nav>

    <div class="text-[11px] text-slate-400 mt-4">© 2025</div>
</aside>
