<div class="bg-primary px-5 py-10">
    <div class="max-w-7xl mx-auto space-y-6">
        <!-- Header + Navigasi Mobile -->
        <div class="">
            <h1 class="text-lg lg:text-xl font-semibold text-white mb-5">Explore Courses by Categories</h1>
            <div class="mb-5 overflow-x-auto lg:overflow-visible">
                <div class="flex items-center gap-3 w-max min-w-full lg:flex-wrap">
                    <button class="px-4 py-2 text-sm rounded-full bg-white text-sec-grey">All</button>
                    <button class="px-4 py-2 text-sm rounded-full text-white border border-white">Category 1</button>
                    <button class="px-4 py-2 text-sm rounded-full text-white border border-white">Category 2</button>
                    <button class="px-4 py-2 text-sm rounded-full text-white border border-white">Category 3</button>
                    <button class="px-4 py-2 text-sm rounded-full text-white border border-white">Category 4</button>
                    <button class="px-4 py-2 text-sm rounded-full text-white border border-white">Category 5</button>
                    <button class="px-4 py-2 text-sm rounded-full text-white border border-white">Category 6</button>
                    <button class="px-4 py-2 text-sm rounded-full text-white border border-white">Category 7</button>
                    <button class="px-4 py-2 text-sm rounded-full text-white border border-white">Category 8</button>
                </div>
            </div>
        </div>

        <div class="overflow-x-auto lg:overflow-visible">
            <!-- Mobile Slider -->
            <div class="flex lg:hidden gap-4 w-max transition-transform duration-500 ease-in-out"
                style="transform: translateX(0%)" data-featured-mobile-track>
                @foreach ($courses as $course)
                    <div class="flex-shrink-0 relative">
                        <div class="w-[85vw] max-w-[18rem] rounded-2xl shadow-xs bg-sec-grey">
                            <img alt="" src="{{ asset($course['image']) }}"
                                class="h-52 w-full rounded-2xl object-cover" />
                            <div class="text-white p-5 space-y-3">
                                <h3 class="font-semibold text-base">{{ $course['title'] }}</h3>
                                <p class="text-sm leading-5">{{ $course['description'] }}</p>
                                <div class="flex items-center gap-3">
                                    <img class="w-6 h-6 rounded-full" src="{{ asset('img/course/profile.png') }}"
                                        alt="">
                                    <p class="text-sm">{{ $course['instructor'] }}</p>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center gap-1">
                                        <ion-icon name="star" class="text-amber-400"></ion-icon><span>4,9</span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <ion-icon name="heart" class="text-red-600"></ion-icon><span>18.400</span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <ion-icon name="people" class="text-white"></ion-icon><span>365</span>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center">
                                    <p class="text-base font-semibold">Rp
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
            <div class="hidden lg:block relative">
                <div id="carousel-featured" class="overflow-hidden relative">
                    <div class="flex transition-transform duration-500 ease-in-out" style="transform: translateX(0%)"
                        data-featured-desktop-track>
                        @foreach ($courses as $course)
                            <a href="/course-detail">
                                <div class="min-w-[18rem] max-w-64 mx-2">
                                    <div class="rounded-2xl shadow-xs bg-sec-grey">
                                        <img alt="" src="{{ asset($course['image']) }}"
                                            class="h-52 w-full rounded-2xl object-cover" />
                                        <div class="text-white p-5 space-y-3">
                                            <h3 class="font-semibold text-base">{{ $course['title'] }}</h3>
                                            <p class="text-sm leading-5">{{ $course['description'] }}</p>
                                            <div class="flex items-center gap-3">
                                                <img class="w-6 h-6 rounded-full"
                                                    src="{{ asset('img/course/profile.png') }}" alt="">
                                                <p class="text-sm">{{ $course['instructor'] }}</p>
                                            </div>
                                            <div class="flex items-center gap-3">
                                                <div class="flex items-center gap-1">
                                                    <ion-icon name="star"
                                                        class="text-amber-400"></ion-icon><span>4,9</span>
                                                </div>
                                                <div class="flex items-center gap-1">
                                                    <ion-icon name="heart"
                                                        class="text-red-600"></ion-icon><span>18.400</span>
                                                </div>
                                                <div class="flex items-center gap-1">
                                                    <ion-icon name="people"
                                                        class="text-white"></ion-icon><span>365</span>
                                                </div>
                                            </div>
                                            <div class="flex justify-between items-center">
                                                <p class="text-base font-semibold">Rp
                                                    {{ number_format($course['price'], 0, ',', '.') }}</p>
                                                <a href="#"
                                                    class="inline-flex items-center gap-1 hover:text-sec-yellow">
                                                    <span>Read More</span>
                                                    <ion-icon name="arrow-forward-outline"></ion-icon>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Navigasi Desktop -->
                <button type="button" id="prev-desktop-featured"
                    class="absolute top-1/2 -left-10 transform -translate-y-1/2 hover:bg-gray-800 text-white p-2 rounded-full z-10 shadow-lg">
                    &#10094;
                </button>
                <button type="button" id="next-desktop-featured"
                    class="absolute top-1/2 -right-10 transform -translate-y-1/2 hover:bg-gray-800 text-white p-2 rounded-full z-10 shadow-lg">
                    &#10095;
                </button>
            </div>
        </div>
    </div>
</div>


<script>
    // Desktop Carousel
    (function() {
        const track = document.querySelector('[data-featured-desktop-track]');
        if (!track) return;

        const prev = document.getElementById('prev-desktop-featured');
        const next = document.getElementById('next-desktop-featured');

        const totalCards = {{ count($courses) }};
        const cardsPerSlide = 4;
        const cardWidthPercent = 100 / cardsPerSlide;
        const maxIndex = totalCards - cardsPerSlide;

        let currentIndex = 0;

        function update() {
            const offset = currentIndex * cardWidthPercent;
            track.style.transform = `translateX(-${offset}%)`;
        }

        prev.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                update();
            }
        });

        next.addEventListener('click', () => {
            if (currentIndex < maxIndex) {
                currentIndex++;
                update();
            }
        });
    })();

    // Mobile Carousel
    (function() {
        const track = document.querySelector('[data-featured-mobile-track]');
        if (!track) return;

        const prev = document.getElementById('prev-mobile-featured');
        const next = document.getElementById('next-mobile-featured');

        const cardWidth = track.querySelector('div')?.offsetWidth || 300;
        const totalCards = track.children.length;

        let currentScroll = 0;
        const maxScroll = (cardWidth + 16) * (totalCards - 1); // 16 = gap

        prev.addEventListener('click', () => {
            currentScroll = Math.max(currentScroll - (cardWidth + 16), 0);
            track.scrollTo({
                left: currentScroll,
                behavior: 'smooth'
            });
        });

        next.addEventListener('click', () => {
            currentScroll = Math.min(currentScroll + (cardWidth + 16), maxScroll);
            track.scrollTo({
                left: currentScroll,
                behavior: 'smooth'
            });
        });
    })();
</script>
