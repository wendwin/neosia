<div x-data="{ showAll: false }" class="bg-sec-grey py-10">
    <div class="max-w-7xl mx-auto px-5">
        <h1 class="text-lg lg:text-xl font-semibold text-white mb-5">All Courses</h1>

        <div class="flex items-center gap-3 my-5">
            <!-- Filter desktop -->
            <div class="hidden text-white xl:flex w-full justify-between items-center">
                <p>Filter</p>
                <div class="flex items-center gap-3">
                    <p>Sort by</p>
                    <a href="#" id="dropdownHoverButton"
                        class="rounded-full px-3 py-2 text-sm font-medium flex items-center gap-1 border border-white text-white">
                        <ion-icon name="options-outline"></ion-icon>Popularity
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
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
            </div>

            <!-- Filter mobile -->
            <div class="relative group xl:hidden">
                <a href="#" id="dropdownHoverButton"
                    class="rounded-full px-3 py-2 text-sm font-medium flex items-center gap-1 border border-white text-white">
                    <ion-icon name="options-outline"></ion-icon>Filter
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
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

            <div class="relative group xl:hidden">
                <a href="#" id="dropdownHoverButton"
                    class="rounded-full px-3 py-2 text-sm font-medium flex items-center gap-1 border border-white text-white">
                    <ion-icon name="filter"></ion-icon>Popularity
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
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
        </div>

        <!-- Filter Desktop -->
        <div class="xl:flex gap-5">
            <div class="hidden xl:block w-2/4 text-white">
                <h5 class="mb-3">Category</h5>
                <form action="">
                    <label class="flex items-center gap-2 mb-2">
                        <input type="checkbox"
                            class="form-checkbox h-4 w-4 bg-sec-grey text-sec-yellow rounded-sm border border-white checked:bg-sec-yellow checked:border-sec-yellow" />
                        <span class="text-sm">Category 1</span>
                    </label>
                    <label class="flex items-center gap-2 mb-2">
                        <input type="checkbox"
                            class="form-checkbox h-4 w-4 bg-sec-grey text-sec-yellow rounded-sm border border-white checked:bg-sec-yellow checked:border-sec-yellow" />
                        <span class="text-sm">Category 2</span>
                    </label>
                    <label class="flex items-center gap-2 mb-2">
                        <input type="checkbox"
                            class="form-checkbox h-4 w-4 bg-sec-grey text-sec-yellow rounded-sm border border-white checked:bg-sec-yellow checked:border-sec-yellow" />
                        <span class="text-sm">Category 3</span>
                    </label>
                    <div class="mt-3">
                        <a href="#" class="text-sm flex items-center gap-2 text-sec-yellow">
                            Show More <ion-icon name="chevron-down-outline"></ion-icon>
                        </a>
                    </div>
                </form>

                <h5 class="mt-5 mb-3">Rating</h5>
                <form action="">
                    <label class="flex items-center gap-2 mb-2">
                        <input type="checkbox" />
                        <span class="text-sm"><ion-icon name="star" class="text-sec-yellow"></ion-icon> Rating 4 and above</span>
                    </label>
                    <label class="flex items-center gap-2 mb-2">
                        <input type="checkbox" />
                        <span class="text-sm"><ion-icon name="star" class="text-sec-yellow"></ion-icon> Rating 3.5 and above </span>
                    </label>
                    <label class="flex items-center gap-2 mb-2">
                        <input type="checkbox" />
                        <span class="text-sm"><ion-icon name="star" class="text-sec-yellow"></ion-icon> Rating 3 and above</span>
                    </label>
                    <div class="mt-3">
                        <a href="#" class="text-sm flex items-center gap-2 text-sec-yellow">
                            Show More <ion-icon name="chevron-down-outline"></ion-icon>
                        </a>
                    </div>
                </form>

                <h5 class="mt-5 mb-3">Price</h5>
                <div class="flex flex-col gap-4">
                    <a href="#"
                        class="rounded-md px-5 w-fit py-2 text-sm font-medium border border-white text-white">
                        Rp. Minimum
                    </a>
                    <a href="#"
                        class="rounded-md px-5 w-fit py-2 text-sm font-medium border border-white text-white">
                        Rp. Maximum
                    </a>
                </div>
            </div>


            <div class="grid md:grid-cols-3 gap-4 ">
                @foreach ($courses as $index => $course)
                    <div x-show="showAll || {{ $index }} < 6" x-transition>
                        <div class="rounded-2xl shadow-xs bg-sec-grey overflow-hidden flex flex-col min-h-[450px]">
                            <img alt="" src="{{ asset($course['image']) }}"
                                class="h-52 w-full object-cover" />
                            <div class="text-white p-4 md:p-6 flex flex-col justify-between flex-1 space-y-3">
                                <div>
                                    <h3 class="font-semibold text-base">{{ $course['title'] }}</h3>
                                    <p class="text-sm leading-5 mt-2">{{ $course['description'] }}</p>
                                    <div class="flex items-center gap-3 mt-3">
                                        <img class="w-6 h-6 rounded-full" src="{{ asset('img/course/profile.png') }}"
                                            alt="">
                                        <p class="text-sm">{{ $course['instructor'] }}</p>
                                    </div>
                                    <div class="flex items-center gap-3 mt-3">
                                        <div class="flex items-center gap-1">
                                            <ion-icon name="star"
                                                class="text-amber-400"></ion-icon><span>4,9</span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <ion-icon name="heart"
                                                class="text-red-600"></ion-icon><span>18.400</span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <ion-icon name="people" class="text-white"></ion-icon><span>365</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center pt-4">
                                    <p class="text-base font-semibold">Rp
                                        {{ number_format($course['price'], 0, ',', '.') }}
                                    </p>
                                    <a href="#" class="inline-flex items-center gap-1 hover:text-sec-yellow">
                                        <span>Read More</span>
                                        <ion-icon name="arrow-forward-outline"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Show More button -->
        @if (count($courses) > 4)
            <div class="w-full flex items-center justify-center gap-2 text-center xl:hidden mt-6">
                <a href="#" @click.prevent="showAll = true" x-show="!showAll"
                    class="text-sm underline flex items-center gap-2 text-white">
                    Show More <ion-icon name="chevron-down-outline"></ion-icon>
                </a>
            </div>
        @endif

    </div>

</div>
