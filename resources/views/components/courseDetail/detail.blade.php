<div x-data="{ tab: 'description' }" class="w-full min-h-screen bg-primary py-10">
    <!-- Search dan Dropdown -->
    <div class="max-w-2xl mx-auto flex  items-center justify-between gap-4 mb-12">
        <div class="flex-1 bg-gray-800 rounded-md px-4 py-3 flex items-center gap-2 text-sm text-gray-300 w-full">
            <ion-icon name="search-outline" class="text-gray-400 text-lg"></ion-icon>
            <input type="text" placeholder="Search for course..."
                class="w-full bg-transparent outline-none placeholder-gray-400" />
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

    <div class="relative">
        {{-- <div class="flex"> --}}
            <div class="">
                <div class="">
                    <div class="bg-sec-grey">
                        <div class="max-w-7xl mx-auto lg:mx-20 py-4 px-5">
                            <!-- breadcrumb -->
                            <nav class="flex" aria-label="Breadcrumb">
                                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                                    <li class="inline-flex items-center">
                                        <a href="#"
                                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="m1 9 4-4-4-4" />
                                            </svg>
                                            <a href="#"
                                                class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Courses</a>
                                        </div>
                                    </li>
                                    <li aria-current="page">
                                        <div class="flex items-center">
                                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="m1 9 4-4-4-4" />
                                            </svg>
                                            <span
                                                class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Details</span>
                                        </div>
                                    </li>
                                </ol>
                            </nav>
    
                            <div class="my-5 text-white">
                                <h1 class="text-2xl font-semibold lg:max-w-sm">The business Intelligence analyst Course 2022
                                </h1>
                                <div class="flex items-center gap-10 my-5">
                                    <div class="flex items-center gap-3">
                                        <img class="w-12 h-12 rounded-full md:w-10 md:h-10"
                                            src="{{ asset('img/course/profile.png') }}" alt="">
                                        <div class="">
                                            <p class="text-sm text-[#D7D7D7]">Teacher</p>
                                            <h3 class="text-base lg:text-lg text-[#F2F4F0]">Elon Gated</h3>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <img class="w-8 h-8 rounded-full" src="{{ asset('img/course/refresh.svg') }}"
                                            alt="">
                                        <div class="">
                                            <p class="text-sm text-[#D7D7D7]">Last Update</p>
                                            <h3 class="text-base lg:text-lg text-[#F2F4F0]">20 July 2025</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <!-- card vidio -->
                            <div class="lg:hidden w-full mt-12 bg-sec-gray5 rounded-2xl">
                                <div class="shadow-xs p-4">
                                    <img alt="" src="{{ asset('img/course/video.png') }}"
                                        class="h-52 w-full object-cover" />
                                    <div class="text-white py-5">
                                        <div class="flex items-center  flex-wrap gap-5">
                                            <div class="flex items-center gap-2">
                                                <img src="{{ asset('img/course/lecture.svg') }}" alt="">
                                                <p class="text-sm">14 Lectures</p>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <img src="{{ asset('img/course/profile.svg') }}" alt="">
                                                <p class="text-sm">20 students enrolled</p>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <img src="{{ asset('img/course/clock.svg') }}" alt="">
                                                <p class="text-sm">6 weeks</p>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <img src="{{ asset('img/course/global.svg') }}" alt="">
                                                <p class="text-sm">English</p>
                                            </div>
                                        </div>
    
                                        <h1 class="text-2xl font-semibold my-5"> Rp. 150.000</h1>
    
                                        <div class="">
                                            <div class="flex gap-5 mb-4">
                                                <button
                                                    class="flex-grow rounded-lg px-5 py-4 text-base font-medium bg-sec-yellow text-sec-gray3">
                                                    Beli Sekarang
                                                </button>
                                                <button
                                                    class="rounded-lg px-5 py-4 text-base font-medium border border-red-600">
                                                    <ion-icon name="heart-outline"
                                                        class="text-red-600 w-7 h-7"></ion-icon>
                                                </button>
                                            </div>
                                            <button
                                                class="w-full rounded-lg px-5 py-5 text-base font-medium border border-sec-yellow text-sec-yellow">Tambah
                                                Keranjang</button>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
    
                            <!-- tabs menu -->
                            <div class="flex border-b border-gray-700 text-white">
                                <button @click="tab = 'description'"
                                    :class="tab === 'description' ? 'text-sec-yellow border-b-2 border-sec-yellow' :
                                        'text-gray-400'"
                                    class="px-4 py-2 focus:outline-none">
                                    Description
                                </button>
                                <button @click="tab = 'curriculum'"
                                    :class="tab === 'curriculum' ? 'text-sec-yellow border-b-2 border-sec-yellow' : 'text-gray-400'"
                                    class="px-4 py-2 focus:outline-none">
                                    Curriculum
                                </button>
                                <button @click="tab = 'reviews'"
                                    :class="tab === 'reviews' ? 'text-sec-yellow border-b-2 border-sec-yellow' : 'text-gray-400'"
                                    class="px-4 py-2 focus:outline-none">
                                    Reviews
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- tab content -->
                <div class="max-w-7xl lg:max-w-2xl mx-auto lg:mx-20 px-5">
                    <div class="mt-5 text-white">
                        <div x-show="tab === 'description'">
                            <h3 class="text-xl font-bold mb-2">Course Overview</h3>
                            <p class="text-[#F2F4F0] mb-2">
                                The Business Intelligence Analyst Course provides an extensive and detailed exploration of
                                data analysis, visualization, and reporting techniques that are crucial for making informed
                                business decisions in today's data-driven world. Throughout the course, participants will
                                gain hands-on experience with powerful tools such as SQL, Tableau, and Power BI, enabling
                                them to extract meaningful insights from complex datasets.
                            </p>
                            <p class="text-[#F2F4F0] mb-2">The curriculum is thoughtfully designed to include a variety of
                                hands-on projects, real-world
                                case studies, and practical applications that ensure a deep and practical understanding of
                                the material. By the end of the course, students will not only be proficient in analyzing
                                trends and creating dynamic dashboards but will also develop the ability to present their
                                findings effectively to stakeholders at all levels.</p>
                            <p class="text-[#F2F4F0] mb-2">This comprehensive skill set will pave the way for a successful
                                and rewarding career in the
                                ever-evolving field of business intelligence, equipping graduates with the knowledge and
                                confidence to thrive in various industries.</p>
                        </div>
    
                        <div x-show="tab === 'curriculum'">
                            <!-- Week 01 -->
                            <div x-data="{ open: true }" class="mb-4">
                                <button @click="open = !open"
                                    class="w-full flex justify-between items-center bg-sec-yellow/20 px-4 py-3 rounded-lg text-sec-yellow font-bold">
                                    <span>Week 01</span>
                                    <span x-show="!open">+</span>
                                    <span x-show="open">−</span>
                                </button>
    
                                <div x-show="open" class="mt-3 space-y-3 text-[#F2F4F0]">
                                    <div class="flex items-center justify-between gap-4 border-b border-gray-700 p-4">
                                        <div class="flex items-center gap-4">
                                            <ion-icon name="document-text-outline"
                                                class="text-sec-yellow w-5 h-5"></ion-icon>
                                            <span>Reading: Ut Enim Ad Minim Veniam</span>
                                        </div>
                                        <div class="hidden md:flex items-center gap-10 text-sm text-gray-300">
                                            <div class="flex items-center gap-3">
                                                <ion-icon name="chatbubbles-outline" class="w-4 h-4"></ion-icon>
                                                <span>2 Questions</span>
                                            </div>
                                            <div class="flex items-center gap-3">
                                                <ion-icon name="time-outline" class="w-4 h-4"></ion-icon>
                                                <span>14 Minutes</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between gap-4 border-b border-gray-700 p-4">
                                        <div class="flex items-center gap-4">
                                            <ion-icon name="videocam-outline" class="text-sec-yellow w-5 h-5"></ion-icon>
                                            <span>Video: Greetings And Introduction</span>
                                        </div>
                                        <div class="hidden md:flex items-center gap-10 text-sm text-gray-300">
                                            <div class="flex items-center gap-3">
                                                <ion-icon name="chatbubbles-outline" class="w-4 h-4"></ion-icon>
                                                <span>2 Questions</span>
                                            </div>
                                            <div class="flex items-center gap-3">
                                                <ion-icon name="time-outline" class="w-4 h-4"></ion-icon>
                                                <span>14 Minutes</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between gap-4 border-b border-gray-700 p-4">
                                        <div class="flex items-center gap-4">
                                            <ion-icon name="headset-outline" class="text-sec-yellow w-5 h-5"></ion-icon>
                                            <span>Audio: Interactive Lesson</span>
                                        </div>
                                        <div class="hidden md:flex items-center gap-10 text-sm text-gray-300">
                                            <div class="flex items-center gap-3">
                                                <ion-icon name="chatbubbles-outline" class="w-4 h-4"></ion-icon>
                                                <span>2 Questions</span>
                                            </div>
                                            <div class="flex items-center gap-3">
                                                <ion-icon name="time-outline" class="w-4 h-4"></ion-icon>
                                                <span>14 Minutes</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between gap-4 border-b border-gray-700 p-4">
                                        <div class="flex items-center gap-4">
                                            <ion-icon name="document-text-outline"
                                                class="text-sec-yellow w-5 h-5"></ion-icon>
                                            <span>Reading: Ut Enim Ad Minim Veniam</span>
                                        </div>
                                        <div class="hidden md:flex items-center gap-10 text-sm text-gray-300">
                                            <div class="flex items-center gap-3">
                                                <ion-icon name="chatbubbles-outline" class="w-4 h-4"></ion-icon>
                                                <span>2 Questions</span>
                                            </div>
                                            <div class="flex items-center gap-3">
                                                <ion-icon name="time-outline" class="w-4 h-4"></ion-icon>
                                                <span>14 Minutes</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Week 02 -->
                            <div x-data="{ open: false }" class="mb-4">
                                <button @click="open = !open"
                                    class="w-full flex justify-between items-center bg-sec-yellow/20 px-4 py-3 rounded-lg text-sec-yellow font-bold">
                                    <span>Week 02</span>
                                    <span x-show="!open">+</span>
                                    <span x-show="open">−</span>
                                </button>
    
                                <div x-show="open" class="mt-3 space-y-3 text-[#F2F4F0]">
                                    <div class="flex items-center justify-between gap-4 border-b border-gray-700 p-4">
                                        <div class="flex items-center gap-4">
                                            <ion-icon name="document-text-outline"
                                                class="text-sec-yellow w-5 h-5"></ion-icon>
                                            <span>Reading: Ut Enim Ad Minim Veniam</span>
                                        </div>
                                        <div class="hidden md:flex items-center gap-10 text-sm text-gray-300">
                                            <div class="flex items-center gap-3">
                                                <ion-icon name="chatbubbles-outline" class="w-4 h-4"></ion-icon>
                                                <span>2 Questions</span>
                                            </div>
                                            <div class="flex items-center gap-3">
                                                <ion-icon name="time-outline" class="w-4 h-4"></ion-icon>
                                                <span>14 Minutes</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between gap-4 border-b border-gray-700 p-4">
                                        <div class="flex items-center gap-4">
                                            <ion-icon name="videocam-outline" class="text-sec-yellow w-5 h-5"></ion-icon>
                                            <span>Video: Greetings And Introduction</span>
                                        </div>
                                        <div class="hidden md:flex items-center gap-10 text-sm text-gray-300">
                                            <div class="flex items-center gap-3">
                                                <ion-icon name="chatbubbles-outline" class="w-4 h-4"></ion-icon>
                                                <span>2 Questions</span>
                                            </div>
                                            <div class="flex items-center gap-3">
                                                <ion-icon name="time-outline" class="w-4 h-4"></ion-icon>
                                                <span>14 Minutes</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between gap-4 border-b border-gray-700 p-4">
                                        <div class="flex items-center gap-4">
                                            <ion-icon name="headset-outline" class="text-sec-yellow w-5 h-5"></ion-icon>
                                            <span>Audio: Interactive Lesson</span>
                                        </div>
                                        <div class="hidden md:flex items-center gap-10 text-sm text-gray-300">
                                            <div class="flex items-center gap-3">
                                                <ion-icon name="chatbubbles-outline" class="w-4 h-4"></ion-icon>
                                                <span>2 Questions</span>
                                            </div>
                                            <div class="flex items-center gap-3">
                                                <ion-icon name="time-outline" class="w-4 h-4"></ion-icon>
                                                <span>14 Minutes</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between gap-4 border-b border-gray-700 p-4">
                                        <div class="flex items-center gap-4">
                                            <ion-icon name="document-text-outline"
                                                class="text-sec-yellow w-5 h-5"></ion-icon>
                                            <span>Reading: Ut Enim Ad Minim Veniam</span>
                                        </div>
                                        <div class="hidden md:flex items-center gap-10 text-sm text-gray-300">
                                            <div class="flex items-center gap-3">
                                                <ion-icon name="chatbubbles-outline" class="w-4 h-4"></ion-icon>
                                                <span>2 Questions</span>
                                            </div>
                                            <div class="flex items-center gap-3">
                                                <ion-icon name="time-outline" class="w-4 h-4"></ion-icon>
                                                <span>14 Minutes</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
    
                        <div x-show="tab === 'reviews'">
                            <h3 class="text-xl font-bold mb-2">Reviews</h3>
                            <p class="text-gray-300">
                                No review
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="hidden lg:block absolute top-0 right-28 w-full lg:max-w-sm  mt-12 bg-sec-gray5 rounded-2xl">
                <div class="shadow-xs p-4">
                    <img alt="" src="{{ asset('img/course/video.png') }}" class="h-52 w-full object-cover" />
                    <div class="text-white py-5">
                        <div class="flex items-center flex-wrap gap-5 xl:hidden">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('img/course/lecture.svg') }}" alt="">
                                <p class="text-sm">14 Lectures</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('img/course/profile.svg') }}" alt="">
                                <p class="text-sm">20 students enrolled</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('img/course/clock.svg') }}" alt="">
                                <p class="text-sm">6 weeks</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('img/course/global.svg') }}" alt="">
                                <p class="text-sm">English</p>
                            </div>
                        </div>
    
                        <h1 class="text-2xl font-semibold my-5"> Rp. 150.000</h1>
    
                        <div class="">
                            <div class="flex gap-5 mb-4">
                                <button
                                    class="flex-grow rounded-lg px-5 py-4 text-base font-medium bg-sec-yellow text-sec-gray3">
                                    Beli Sekarang
                                </button>
                                <button class="rounded-lg px-5 py-4 text-base font-medium border border-red-600">
                                    <ion-icon name="heart-outline" class="text-red-600 w-7 h-7"></ion-icon>
                                </button>
                            </div>
                            <button
                                class="w-full rounded-lg px-5 py-5  xl:py-3 text-base font-medium border border-sec-yellow text-sec-yellow">Tambah
                                Keranjang</button>
                        </div>

                        <div class="hidden xl:flex flex-col gap-5 pt-8">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('img/course/lecture.svg') }}" alt="">
                                <p class="text-sm">14 Lectures</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('img/course/profile.svg') }}" alt="">
                                <p class="text-sm">20 students enrolled</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('img/course/clock.svg') }}" alt="">
                                <p class="text-sm">6 weeks</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('img/course/global.svg') }}" alt="">
                                <p class="text-sm">English</p>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        {{-- </div> --}}

    </div>
</div>
