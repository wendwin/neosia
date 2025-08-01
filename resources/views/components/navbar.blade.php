<div class="" x-data="{ isOpen: false }">
    <nav class="bg-primary shadow-md fixed top-0 left-0 right-0 z-40 py-2 w-full">
        <div class="mx-auto max-w-8xl px-4 ">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center justify-between w-full">
                    <div class="shrink-0">
                        <a href="#">
                            <img class="" src="{{ asset('img/logo.png') }}" alt="Neosia Logo" />
                        </a>
                    </div>

                    <div class="hidden xl:flex items-center gap-3">
                        <!-- Menu -->
                        <a href="/"
                            class="rounded-full px-3 py-2 text-sm font-medium flex items-center gap-1
                             {{ request()->routeIs('home') ? 'text-sec-yellow' : 'text-sec-white' }}"
                            aria-current="page"><i data-lucide="house" class="w-5 h-5"></i>Home
                        </a>

                        <a href="#"
                            class="rounded-full px-3 py-2 text-sm font-medium flex items-center gap-1 
                            {{ request()->routeIs('about') ? 'text-sec-yellow' : 'text-sec-white' }}">
                            <i data-lucide="building-2" class="w-5 h-5"></i>About
                        </a>

                        <div class="relative group">
                            <a href="#" id="dropdownHoverButton"
                                class="rounded-full px-3 py-2 text-sm font-medium flex items-center gap-1
                                {{ request()->routeIs('courses') ? 'text-sec-yellow' : 'text-sec-white' }}">
                                Courses
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </a>

                            <!-- Dropdown -->
                            <div id="dropdownHover"
                                class="absolute z-10 hidden group-hover:block bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 ">
                                <ul class="py-2 text-sm text-gray-700">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Earnings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Sign out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="relative group">
                            <a href="#" id="dropdownHoverButton"
                                class="rounded-full px-3 py-2 text-sm font-medium flex items-center gap-1
                                {{ request()->routeIs('course') ? 'text-sec-yellow' : 'text-sec-white' }}">
                                Course
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </a>

                            <!-- Dropdown -->
                            <div id="dropdownHover"
                                class="absolute z-10 hidden group-hover:block bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 ">
                                <ul class="py-2 text-sm text-gray-700">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Earnings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Sign out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="relative group">
                            <a href="#" id="dropdownHoverButton"
                                class="rounded-full px-3 py-2 text-sm font-medium flex items-center gap-1
                                {{ request()->routeIs('layanan') ? 'text-sec-yellow' : 'text-sec-white' }}">
                                Layanan
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </a>

                            <!-- Dropdown -->
                            <div id="dropdownHover"
                                class="absolute z-10 hidden group-hover:block bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 ">
                                <ul class="py-2 text-sm text-gray-700">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Earnings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Sign out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="relative group">
                            <a href="#" id="dropdownHoverButton"
                                class="rounded-full px-3 py-2 text-sm font-medium flex items-center gap-1
                                {{ request()->routeIs('product') ? 'text-sec-yellow' : 'text-sec-white' }}">
                                Product
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </a>

                            <!-- Dropdown -->
                            <div id="dropdownHover"
                                class="absolute z-10 hidden group-hover:block bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 ">
                                <ul class="py-2 text-sm text-gray-700">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Earnings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Sign out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="relative group">
                            <a href="#" id="dropdownHoverButton"
                                class="rounded-full px-3 py-2 text-sm font-medium flex items-center gap-1
                                {{ request()->routeIs('blog') ? 'text-sec-yellow' : 'text-sec-white' }}">
                                Blog
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </a>

                            <!-- Dropdown -->
                            <div id="dropdownHover"
                                class="absolute z-10 hidden group-hover:block bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 ">
                                <ul class="py-2 text-sm text-gray-700">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Earnings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Sign out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                       
                        <a href=""
                            class="rounded-full px-3 py-2 text-sm font-medium flex items-center gap-1
                            {{ request()->routeIs('certificate') ? 'text-sec-yellow' : 'text-sec-white' }}
                            ">
                            <i data-lucide="phone" class="w-5 h-5"></i>Certificate
                        </a>
                        <a href=""
                            class="rounded-full px-3 py-2 text-sm font-medium flex items-center gap-1
                            {{ request()->routeIs('contact') ? 'text-sec-yellow' : 'text-sec-white' }}
                            ">
                            <i data-lucide="phone" class="w-5 h-5"></i>Contact
                        </a>
                    </div>

                    <div class="hidden xl:block px-4 py-2 bg-amber-400 rounded-md">
                        <p class="text-base">Try For Free</p>
                    </div>
                </div>


                <div class="-mr-2 flex xl:hidden">
                    <!-- Mobile menu button -->
                    <button @click="isOpen = !isOpen" type="button"
                        class="relative inline-flex items-center justify-center rounded-md bg-primary p-2 text-sec-white  hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                            data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                            data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div x-show="isOpen" class="xl:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3 text-sec-white">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium " aria-current="">
                    Home
                </a>

                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium " aria-current="">
                    About
                </a>

                <a href="" class="block rounded-md px-3 py-2 text-base font-medium " aria-current="">
                    Courses
                </a>

                <a href="" class="block rounded-md px-3 py-2 text-base font-medium " aria-current="">
                    Layanan
                </a>

                <a href="" class="block rounded-md px-3 py-2 text-base font-medium " aria-current="">
                    Product
                </a>
                
                <a href="" class="block rounded-md px-3 py-2 text-base font-medium " aria-current="">
                    Blog
                </a>

                <a href="" class="block rounded-md px-3 py-2 text-base font-medium " aria-current="">
                    Certificate
                </a>

                <a href="" class="block rounded-md px-3 py-2 text-base font-medium " aria-current="">
                    Contact
                </a>
            </div>
        </div>
    </nav>

    <!-- space kosong -->
    <div class="pt-[56px] xl:pt-[80px]">
    </div>
</div>
