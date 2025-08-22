<div class="w-full bg-primary px-5 py-10">
    <!-- Search dan Dropdown -->
    <div class="max-w-2xl mx-auto flex  items-center justify-between gap-4 mb-12">
        <!-- Search Box -->
        <div class="flex-1 bg-gray-800 rounded-md px-4 py-3 flex items-center gap-2 text-sm text-gray-300 w-full">
            <ion-icon name="search-outline" class="text-gray-400 text-lg"></ion-icon>
            <input type="text" placeholder="Search for course..." class="w-full bg-transparent outline-none placeholder-gray-400" />
        </div>

        <!-- Dropdown -->
        <div class="relative group">
            <div id="dropdownHoverButton"
                class="rounded-full px-3 py-2 text-sm font-medium flex items-center gap-1
                {{ request()->routeIs('Courses') ? 'text-sec-yellow' : 'text-sec-white' }}">
                Category
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </div>
            <!-- Dropdown menu -->
            <div class="absolute z-10 hidden group-hover:block bg-white text-black rounded-md mt-2 shadow w-44">
                <ul class="py-2 text-sm">
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Earnings</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Sign out</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Hero Content -->
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 items-center gap-12 mb-8">
        <!-- Image -->
        <div class="flex justify-center md:order-2">
            <img src="{{ asset('img/hero.png') }}" alt="hero" class="w-full max-w-md object-contain" />
        </div>

        <!-- Text -->
        <div class="md:order-1">
            <h1 class="text-2xl text-white lg:text-5xl font-bold mb-6 leading-tight">
                Unlock Your Potential with <br />
                <span class="text-yellow-400">Neosia Training Center</span>
            </h1>
            <p class="text-gray-300 mb-8 max-w-xl">
                Discover Comprehensive Solutions at Neosia Training Center: Your Premier Destination for Comprehensive Training
                Programs, Licensing Services, Professional Certification, and Expert Consultation Services.
                Empowering you with the skills and knowledge to succeed in the ever-evolving tech industry.
            </p>
            <a href="#" class="inline-block bg-yellow-400 text-black font-medium px-6 py-2 rounded-md hover:bg-yellow-300 transition">
                Explore Now
            </a>
        </div>

    </div>
</div>
