<header
    class="h-[60px] md:h-[72px] bg-white border-b border-slate-200 flex items-center justify-between md:justify-end px-4 md:px-6">
    <!-- Left (mobile hamburger) -->
    <button id="btnHamburger"
        class="md:hidden inline-flex items-center justify-center w-10 h-10 rounded-md border border-slate-200 text-slate-600 active:scale-95 transition"
        aria-label="Buka menu">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16M4 12h16M4 17h16" />
        </svg>
    </button>

    <!-- Profile Dropdown -->
    <div class="relative">
        <button id="profile-button"
            class="w-10 h-10 rounded-full bg-gradient-to-r from-green-500 to-yellow-300 hover:shadow-lg transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2"
            aria-label="Profile Menu">
        </button>

        <!-- Dropdown Menu -->
        <div id="profile-dropdown"
            class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 py-1 z-50 opacity-0 invisible transform scale-95 transition-all duration-200 origin-top-right">

            <!-- Profile Info -->
            <div class="px-4 py-3 border-b border-gray-100">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-gradient-to-r from-green-500"></div>
                    <div>
                        <p class="text-sm font-medium text-gray-900">{{ Auth::user()->name }}</p>
                        <p class="text-xs text-gray-500">{{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>

            <!-- Menu Items -->
            <div class="py-1">
                <a href="#"
                    class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors duration-150">
                    <svg class="w-4 h-4 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    Profile
                </a>
            </div>

            <div class="border-t border-gray-100 py-1">
                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <button type="submit"
                        class="flex items-center w-full px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors duration-150 text-left">
                        <svg class="w-4 h-4 mr-3 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>

<script>
    // Profile dropdown functionality
    document.addEventListener('DOMContentLoaded', function() {
        const profileButton = document.getElementById('profile-button');
        const profileDropdown = document.getElementById('profile-dropdown');

        if (profileButton && profileDropdown) {
            profileButton.addEventListener('click', function(e) {
                e.stopPropagation();

                // Toggle dropdown visibility
                if (profileDropdown.classList.contains('opacity-0')) {
                    profileDropdown.classList.remove('opacity-0', 'invisible', 'scale-95');
                    profileDropdown.classList.add('opacity-100', 'visible', 'scale-100');
                } else {
                    profileDropdown.classList.add('opacity-0', 'invisible', 'scale-95');
                    profileDropdown.classList.remove('opacity-100', 'visible', 'scale-100');
                }
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!profileButton.contains(e.target) && !profileDropdown.contains(e.target)) {
                    profileDropdown.classList.add('opacity-0', 'invisible', 'scale-95');
                    profileDropdown.classList.remove('opacity-100', 'visible', 'scale-100');
                }
            });
        }
    });
</script>
