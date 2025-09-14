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

            <a href="{{ route('dashboard') }}"
                class="sidebar-menu-item w-full h-10 flex items-center gap-3 text-left text-[15px] font-semibold px-2 rounded-[4px] transition duration-150 
    {{ request()->routeIs('dashboard') ? 'bg-primary-50 text-primary-700 border-l-2 border-primary-500' : 'text-slate-800 hover:bg-slate-50' }}">
                <svg class="w-5 h-5 {{ request()->routeIs('dashboard') ? 'text-primary-600' : 'text-slate-600' }}"
                    fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 A13:line@<path>#13:line@<path>#13  1 13.5 18v-2.25Z" />
                </svg>
                <span class="nav-label">Dashboard</span>
            </a>

            <a href="{{ route('innovations.index') }}"
                class="sidebar-menu-item w-full h-10 flex items-center gap-3 text-left text-[15px] font-semibold px-2 rounded-[4px] transition duration-150 
            {{ request()->routeIs('innovations.*') ? 'bg-primary-50 text-primary-700 border-l-2 border-primary-500' : 'text-slate-800 hover:bg-slate-50' }}">
                <svg class="w-4 h-4 {{ request()->routeIs('innovations.*') ? 'text-primary-600' : 'text-slate-600' }}"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0ZM22,12a9.938,9.938,0,0,1-1.662,5.508l-1.192-1.193A.5.5,0,0,1,19,15.962V15a3,3,0,0,0-3-3H13a1,1,0,0,1-1-1v-.5a.5.5,0,0,1,.5-.5A2.5,2.5,0,0,0,15,7.5v-1a.5.5,0,0,1,.5-.5h1.379a2.516,2.516,0,0,0,1.767-.732l.377-.377A9.969,9.969,0,0,1,22,12Zm-19.951.963,3.158,3.158A2.978,2.978,0,0,0,7.329,17H10a1,1,0,0,1,1,1v3.949A10.016,10.016,0,0,1,2.049,12.963ZM13,21.949V18a3,3,0,0,0-3-3H7.329a1,1,0,0,1-.708-.293L2.163,10.249A9.978,9.978,0,0,1,17.456,3.63l-.224.224A.507.507,0,0,1,16.879,4H15.5A2.5,2.5,0,0,0,13,6.5v1a.5.5,0,0,1-.5.5A2.5,2.5,0,0,0,10,10.5V11a3,3,0,0,0,3,3h3a1,1,0,0,1,1,1v.962a2.516,2.516,0,0,0,.732,1.767l1.337,1.337A9.971,9.971,0,0,1,13,21.949Z" />
                </svg>
                <span class="nav-label">Innovation</span>
            </a>

            <a href="{{ route('testimonials.index') }}"
                class="sidebar-menu-item w-full h-10 flex items-center gap-3 text-left text-[15px] font-semibold px-2 rounded-[4px] transition duration-150 
            {{ request()->routeIs('testimonials.*') ? 'bg-primary-50 text-primary-700 border-l-2 border-primary-500' : 'text-slate-800 hover:bg-slate-50' }}">
                <svg class="w-5 h-5 {{ request()->routeIs('testimonials.*') ? 'text-primary-600' : 'text-slate-600' }}"
                    fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                </svg>
                <span class="nav-label">Testimonial</span>
            </a>

            <a href="{{ route('stories.index') }}"
                class="sidebar-menu-item w-full h-10 flex items-center gap-3 text-left text-[15px] font-semibold px-2 rounded-[4px] transition duration-150 
            {{ request()->routeIs('stories.*') ? 'bg-primary-50 text-primary-700 border-l-2 border-primary-500' : 'text-slate-800 hover:bg-slate-50' }}">
                <svg class="w-5 h-5 {{ request()->routeIs('stories.*') ? 'text-primary-600' : 'text-slate-600' }}"
                    fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                </svg>
                <span class="nav-label">Story</span>
            </a>

            <a href="{{ route('galleries.index') }}"
                class="sidebar-menu-item w-full h-10 flex items-center gap-3 text-left text-[15px] font-semibold px-2 rounded-[4px] transition duration-150 
    {{ request()->routeIs('galleries.*') ? 'bg-primary-50 text-primary-700 border-l-2 border-primary-500' : 'text-slate-800 hover:bg-slate-50' }}">
                <svg class="w-4 h-4 {{ request()->routeIs('galleries.*') ? 'text-primary-600' : 'text-slate-600' }}"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M19,0H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V5A5.006,5.006,0,0,0,19,0ZM5,2H19a3,3,0,0,1,3,3V19a2.951,2.951,0,0,1-.3,1.285l-9.163-9.163a5,5,0,0,0-7.072,0L2,14.586V5A3,3,0,0,1,5,2ZM5,22a3,3,0,0,1-3-3V17.414l4.878-4.878a3,3,0,0,1,4.244,0L20.285,21.7A2.951,2.951,0,0,1,19,22Z" />
                    <path
                        d="M16,10.5A3.5,3.5,0,1,0,12.5,7,3.5,3.5,0,0,0,16,10.5Zm0-5A1.5,1.5,0,1,1,14.5,7,1.5,1.5,0,0,1,16,5.5Z" />
                </svg>
                <span class="nav-label">Gallery</span>
            </a>


            <a href="{{ route('partners.index') }}"
                class="sidebar-menu-item w-full h-10 flex items-center gap-3 text-left text-[15px] font-semibold px-2 rounded-[4px] transition duration-150 
            {{ request()->routeIs('partners.*') ? 'bg-primary-50 text-primary-700 border-l-2 border-primary-500' : 'text-slate-800 hover:bg-slate-50' }}">
                <svg class="w-5 h-5 {{ request()->routeIs('partners.*') ? 'text-primary-600' : 'text-slate-600' }}"
                    fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                </svg>
                <span class="nav-label">Partner</span>
            </a>

            <!-- News Menu -->
            <a href="{{ route('news.index') }}"
                class="sidebar-menu-item w-full h-10 flex items-center gap-3 text-left text-[15px] font-semibold px-2 rounded-[4px] transition duration-150 
   {{ request()->routeIs('news.*') ? 'bg-primary-50 text-primary-700 border-l-2 border-primary-500' : 'text-slate-800 hover:bg-slate-50' }}">
                <svg class="w-5 h-5 {{ request()->routeIs('news.*') ? 'text-primary-600' : 'text-slate-600' }}"
                    fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5M5.25 19.5a2.25 2.25 0 0 1-2.25-2.25V6.75a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v10.5a2.25 2.25 0 0 1-2.25 2.25H5.25Z" />
                </svg>
                <span class="nav-label">News</span>
            </a>


            <!-- Event Menu -->
            <a href="{{ route('events.index') }}"
                class="sidebar-menu-item w-full h-10 flex items-center gap-3 text-left text-[15px] font-semibold px-2 rounded-[4px] transition duration-150 
   {{ request()->routeIs('events.*')
       ? 'bg-primary-50 text-primary-700 border-l-2 border-primary-500'
       : 'text-slate-800 hover:bg-s  
                                                                     late-50' }}">
                <svg class="w-5 h-5 {{ request()->routeIs('events.*') ? 'text-primary-600' : 'text-slate-600' }}"
                    fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                </svg>
                <span class="nav-label">Event</span>
            </a>

            <!-- Study Menu -->
            <a href="{{ route('studies.index') }}"
                class="sidebar-menu-item w-full h-10 flex items-center gap-3 text-left text-[15px] font-semibold px-2 rounded-[4px] transition duration-150 
                {{ request()->routeIs('studies.*') ? 'bg-primary-50 text-primary-700 border-l-2 border-primary-500' : 'text-slate-800 hover:bg-slate-50' }}">
                <svg class="w-5 h-5 {{ request()->routeIs('studies.*') ? 'text-primary-600' : 'text-slate-600' }}"
                    fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
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
