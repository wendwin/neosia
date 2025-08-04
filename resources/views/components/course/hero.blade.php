<div class="w-full min-h-screen bg-primary px-5 py-10">
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


    <div class="max-w-7xl mx-auto">
        <div class="py-5">
            <h1 class="text-lg lg:text-xl font-semibold mb-5 text-white">Explore Courses</h1>
            <div class="flex items-center gap-3 mb-5">
                <button class="px-4 py-2 text-sm rounded-full bg-white text-sec-grey">Most popular</button>
                <button class="px-4 py-2 text-sm rounded-full text-white border border-white">Newest</button>
            </div>
        </div>
    </div>

    <div class="overflow-x-auto lg:overflow-visible max-w-7xl mx-auto">
        <!-- Mobile Slider -->
        <div class="flex lg:hidden gap-4 w-max">
            @foreach ($courses as $course)
                <div class="flex-shrink-0  relative">
                    <div class="w-[85vw] max-w-[18rem] rounded-2xl shadow-xs bg-sec-grey ">
                        <img alt="" src="{{ asset($course['image']) }}"
                            class="h-52 w-full rounded-2xl object-cover" />
                        <div class="text-white p-5">
                            <h3 class="font-semibold mb-5 text-base">{{ $course['title'] }}</h3>
                            <p class="text-sm leading-5 mb-4">{{ $course['description'] }}</p>
                            <div class="flex items-center gap-3 mb-5">
                                <img class="w-6 h-6 rounded-full" src="{{ asset('img/course/profile.png') }}"
                                    alt="">
                                <p class="text-sm leading-5">{{ $course['instructor'] }}</p>
                            </div>
                            <div class="flex items-center gap-3 mb-5">
                                <div class="flex items-center gap-1">
                                    <ion-icon name="star" class="text-amber-400"></ion-icon>
                                    <span>4,9</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <ion-icon name="heart" class="text-red-600"></ion-icon>
                                    <span>18.400</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <ion-icon name="people" class="text-white"></ion-icon>
                                    <span>365</span>
                                </div>
                            </div>
                            <div class="flex justify-between items-center gap-3 text-white">
                                <p class="text-base font-semibold">Rp.
                                    {{ number_format($course['price'], 0, ',', '.') }}</p>
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

        <!-- Desktop Slider -->
        <div class="hidden lg:block relative max-w-7xl mx-auto">
            <div id="carousel-desktop" class="overflow-hidden relative">
                <div class="flex transition-transform duration-500 ease-in-out" style="transform: translateX(0%)"
                    data-carousel-track>
                    @foreach ($courses as $course)
                        <div class="min-w-[18rem] max-w-64 mx-2">
                            <div class="rounded-2xl shadow-xs bg-sec-grey relative">
                                <img alt="" src="{{ asset($course['image']) }}"
                                    class="h-52 w-full rounded-2xl object-cover" />

                                <div class="text-white p-5">
                                    <h3 class="font-semibold text-base mb-3">{{ $course['title'] }}</h3>
                                    <p class="text-sm leading-5 mb-3">{{ $course['description'] }}</p>

                                    <div class="flex items-center gap-3 mb-4">
                                        <img class="w-6 h-6 rounded-full" src="{{ asset('img/course/profile.png') }}"
                                            alt="">
                                        <p class="text-sm leading-5">{{ $course['instructor'] }}</p>
                                    </div>

                                    <div class="flex items-center gap-3 mb-4">
                                        <div class="flex items-center gap-1">
                                            <ion-icon name="star" class="text-amber-400"></ion-icon>
                                            <span>4,9</span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <ion-icon name="heart" class="text-red-600"></ion-icon>
                                            <span>18.400</span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <ion-icon name="people" class="text-white"></ion-icon>
                                            <span>365</span>
                                        </div>
                                    </div>

                                    <div class="flex justify-between items-center gap-3 text-white">
                                        <p class="text-base font-semibold">
                                            Rp{{ number_format($course['price'], 0, ',', '.') }}
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

            <!-- Navigasi -->
            <button type="button" id="prev-desktop"
                class="absolute top-1/2 -left-10 transform -translate-y-1/2 hover:bg-gray-800 text-white p-2 rounded-full z-10 shadow-lg">
                &#10094;
            </button>
            <button type="button" id="next-desktop"
                class="absolute top-1/2 -right-10 transform -translate-y-1/2 hover:bg-gray-800 text-white p-2 rounded-full z-10 shadow-lg">
                &#10095;
            </button>

        </div>
    </div>

</div>

<script>
    const track = document.querySelector('[data-carousel-track]');
    const prev = document.getElementById('prev-desktop');
    const next = document.getElementById('next-desktop');

    const totalCards = {{ count($courses) }};
    const cardsPerSlide = 4;
    const cardWidthPercent = 100 / cardsPerSlide;
    const maxIndex = totalCards - cardsPerSlide;

    let currentIndex = 0;

    function updateCarousel() {
        const translatePercentage = currentIndex * cardWidthPercent;
        track.style.transform = `translateX(-${translatePercentage}%)`;
    }

    next.addEventListener('click', () => {
        if (currentIndex < maxIndex) {
            currentIndex++;
            updateCarousel();
        }
    });

    prev.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
        }
    });
</script>
