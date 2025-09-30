<footer class="bg-[#29303D] w-full">
    <div class="max-w-[1280px] mx-auto px-6 sm:px-8 py-12 sm:py-16 gap-12">
        <div class="flex flex-col lg:flex-row gap-12">
            <div class="flex flex-col gap-2 w-full lg:w-1/3">
                <div class="flex flex-col gap-4">
                    <div class="flex gap-4 items-center">
                        <img src="{{ asset('images/ub.png') }}" alt="UB Logo" class="w-10 h-10">
                        <img src="{{ asset('icons/gub.svg') }}" alt="Globalizing Logo"
                            class="h-10 max-w-[120px] sm:max-w-[150px] lg:max-w-[200px]">
                    </div>
                    <p class="text-[#FFFFFF] text-sm mt-2 font-inter font-light">Inspiring Change, Uniting
                        Civilizations</p>
                </div>

                <div class="flex flex-col gap-4 mt-4">
                    <h3 class="text-white text-sm font-bold font-inter">Direktorat Kerjasama Universitas
                        Brawijaya</h3>

                    <div class="flex items-start gap-2">
                        <img src="{{ asset('icons/location-blue.svg') }}" alt="Map Icon" class="w-4 h-4 mt-1">
                        <p class="text-white text-sm font-light font-inter">Jl. Veteran, Ketawanggede, Kec.
                            Lowokwaru, Kota Malang, Jawa Timur 65145, Indonesia</p>
                    </div>

                    <div class="flex items-center gap-2">
                        <img src="{{ asset('icons/telp-blue.svg') }}" alt="Phone Icon" class="w-4 h-4">
                        <p class="text-white text-sm font-light font-inter">+62 341 551611</p>
                    </div>

                    <div class="flex items-center gap-2">
                        <img src="{{ asset('icons/email-blue.svg') }}" alt="Email Icon" class="w-4 h-4">
                        <p class="text-white text-sm font-light font-inter">gub@ub.ac.id</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-6 w-full lg:w-1/3">
                <h4 class="text-white text-lg font-playfair ">Connect With Us</h4>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <a href="#" target="_blank"
                        class="w-full h-[44px] bg-[#FFFFFF1A] rounded-[12px] flex items-center gap-[12px] px-[12px]">
                        <img src="{{ asset('icons/fb-blue.svg') }}" alt="Facebook Icon" class="w-[20px] h-[20px]">
                        <p class="text-white text-sm font-inter font-light leading-[20px]">Facebook</p>
                    </a>
                    <a href="https://www.linkedin.com/in/globalizing-ub-94b519385/" target="_blank"
                        class="w-full h-[44px] bg-[#FFFFFF1A] rounded-[12px] flex items-center gap-[12px] px-[12px]">
                        <img src="{{ asset('icons/linkedin-blue.svg') }}" alt="LinkedIn Icon" class="w-[20px] h-[20px]">
                        <p class="text-white text-sm font-inter font-light leading-[20px]">LinkedIn</p>
                    </a>
                    <a href="https://www.instagram.com/globalizingub/" target="_blank"
                        class="w-full h-[44px] bg-[#FFFFFF1A] rounded-[12px] flex items-center gap-[12px] px-[12px]">
                        <img src="{{ asset('icons/ig-blue.svg') }}" alt="Instagram Icon" class="w-[20px] h-[20px]">
                        <p class="text-white text-sm font-inter font-light leading-[20px]">Instagram</p>
                    </a>
                    <a href="https://www.youtube.com/@GlobalizingUB" target="_blank"
                        class="w-full h-[44px] bg-[#FFFFFF1A] rounded-[12px] flex items-center gap-[12px] px-[12px]">
                        <img src="{{ asset('icons/yt-blue.svg') }}" alt="YouTube Icon" class="w-[20px] h-[20px]">
                        <p class="text-white text-sm font-inter font-light leading-[20px]">YouTube</p>
                    </a>
                </div>
            </div>

            <div class="flex flex-col gap-4 w-full lg:w-1/3">
                <h4 class="text-white text-lg font-playfair">Visitor</h4>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-white text-sm">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('icons/user.svg') }}" alt="Visits Today Icon" class="w-4 h-4">
                        <span>{{ number_format($visitsToday) }} Visits Today</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('icons/user.svg') }}" alt="Total Visits Icon" class="w-4 h-4">
                        <span>{{ number_format($totalVisits) }} Visits</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('icons/user.svg') }}" alt="Visitors Today Icon" class="w-4 h-4">
                        <span>{{ number_format($visitorsToday) }} Visitors Today</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('icons/user.svg') }}" alt="Total Visitors Icon" class="w-4 h-4">
                        <span>{{ number_format($totalVisitors) }} Visitors</span>
                    </div>
                </div>
                <div class="mt-4">
                    <h5 class="text-white text-lg font-playfair  mb-2">Newsletter</h5>
                    <input type="email" placeholder="Enter your email"
                        class="w-full h-[41px] p-[11px] bg-[#FFFFFF1A] rounded-[12px] border border-t-[1px] border-[#FFFFFF33] text-white" />
                    <button
                        class="w-full h-[36px] bg-gradient-to-r from-[#0000FF] to-[#6699FF] rounded-[10px] text-white mt-4 shadow-[0px_4px_20px_-2px_#29303D1A]">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>

        <div class="mt-8">
            <hr class="w-full h-[1px] border-t border-[#FFFFFF33] opacity-100" />
        </div>

        <div class="flex flex-col sm:flex-row justify-between items-center mt-6 gap-4">
            <div class="text-white text-sm font-inter font-light leading-[20px] text-center sm:text-left">
                © 2024 Universitas Brawijaya Direktorat Kerjasama, All Right Reserved.
            </div>
            <div class="flex flex-wrap justify-center sm:justify-end gap-[20px]">
                <a href="#" class="text-white text-sm font-inter font-light leading-[20px]">Privacy
                    Policy</a>
                <a href="#" class="text-white text-sm font-inter font-light leading-[20px]">Terms of
                    Service</a>
                <a href="#" class="text-white text-sm font-inter font-light leading-[20px]">Sitemap</a>
            </div>
        </div>
    </div>
</footer>
