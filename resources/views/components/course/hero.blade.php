<div class="w-full min-h-screen bg-primary px-5 py-10">
    <!-- Search dan Dropdown -->
    <div class="max-w-2xl mx-auto flex  items-center justify-between gap-4 mb-12">
        <!-- Search Box -->
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

    <!-- Hero Content -->
    <div class="max-w-8xl mx-auto bg-slate-600 flex flex-wrap justify-center gap-5">

        @foreach (range(1, 4) as $index)
        <div
            class="bg-white rounded-lg overflow-hidden shadow-2xl xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2 group  transition-transform duration-300 hover:translate-y-[-10px]">
            <div class="h-48 w-full overflow-hidden">
                <img class="h-full w-full object-cover transform overflow-hidden transition-transform duration-[300ms] group-hover:scale-125 object-end"
                    src="https://images.unsplash.com/photo-1570797197190-8e003a00c846?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=968&q=80"
                    alt="Home in Countryside" />
            </div>

            <div class="p-6 pb-4 group-hover:bg-gray-700 duration-[0.3s]">


                <div class="mt-1">
                    <span class="text-2xl font-semibold">$1,900.00</span>
                    <span class="text-gray-600 text-sm">/ wk</span>
                </div>
                <h4 class="mt-1 font-semibold text-xl leading-tight truncate group-hover:text-teal-600 duration-[0.3s]">
                    Beautiful Home in the countryside</h4>
                <p class="Card-info text-gray-500 mt-2 group-hover:text-white">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>


                <div class="mt-4 flex items-center">
                    <div class="flex-shrink-0">
                        <a href="#">
                            <span class="sr-only">Daniela Metz</span>
                            <img class="h-10 w-10 rounded-full"
                                src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                alt="">
                        </a>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">
                            <a href="#" class="hover:underline hover:text-teal-600  duration-[0.3s]">Daniela
                                Metz</a>
                        </p>
                        <div class="flex space-x-1 text-sm text-gray-500 group-hover:text-white duration-[0.3s] ">
                            <time datetime="2020-02-12 ">Feb 12, 2020</time>
                            <span aria-hidden="true">·</span>
                            <span>11 min read</span>
                        </div>
                    </div>
                </div>
                <div class="mt-2 flex items-center justify-between">
                    <span class="text-teal-600 font-semibold">
                        <span class="flex gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                        </span>
                    </span>
                    <span class="ml-2 text-gray-600 text-sm">34 reviews</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
