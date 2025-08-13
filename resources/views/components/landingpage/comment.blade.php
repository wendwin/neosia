@php
    $slides = range(1, 4);
@endphp
<div class="relative w-full bg-primary text-white py-16">
    <h1 class="mb-4 text-center font-medium text-xl md:text-2xl lg:text-4xl">What Clients Say About Us</h1>
    <p class="mb-40 md:mb-12 text-center text-base md:text-xl">Etiam Porttitor risus massa nec condiment gravisa nibh.</p>

    <!-- Carousel wrapper mobile -->
    <div class="md:hidden relative w-full mx-auto">
        <div id="carousel-content" class="overflow-hidden relative">
            <!-- Slides -->
            <div class="flex transition-transform duration-500 ease-in-out" style="transform: translateX(0%)"
                data-carousel-track>
                @foreach ($slides as $index)
                    <div
                        class="min-w-full bg-sec-grey shadow-md rounded-lg relative flex flex-col items-center pt-28 pb-8 px-6">
                        <img src="{{ asset('img/team/team-' . $index . '.png') }}" alt=""
                            class="w-24 h-24 object-cover rounded-full border-4 border-white shadow-lg absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2" />

                        <div class="max-w-sm text-center">
                            <p class="text-sec-white my-4 text-sm leading-relaxed">
                                Simply the best. Better than all the rest. I’d recommend this product to morish
                                beginners and viverra
                                maecenas accumsan lacus. Risus commodo viverra maecenas.
                            </p>
                            <h2 class="text-sm font-semibold mb-1">Judy N</h2>
                            <h6 class="text-xs">CEO, Psdboss</h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Tombol Navigasi -->
        <div class="flex justify-center items-center py-4 gap-4">
            <button type="button" id="prev-mobile"
                class="  hover:bg-gray-800 text-white p-2 rounded-full z-10 shadow-lg">
                &#10094;
            </button>
            <div class="flex justify-center  md:hidden" id="indicators-mobile">
                @foreach ($slides as $i)
                    <div class="w-8 h-1 mx-2 {{ $i === 1 ? 'bg-sec-yellow' : 'bg-gray-300' }}" data-indicator-mobile>
                    </div>
                @endforeach
            </div>
            <button type="button" id="next-mobile"
                class="   hover:bg-gray-800 text-white p-2 rounded-full z-10 shadow-lg">
                &#10095;
            </button>

        </div>
    </div>

    <!-- Carousel wrapper >tablet -->
    <div class="hidden md:block relative max-w-xl lg:max-w-3xl mx-auto">
        <div id="carousel-content" class="overflow-hidden relative">
            <!-- Slides -->
            <div class="flex transition-transform duration-500 ease-in-out" style="transform: translateX(0%)"
                data-carousel-track>
                @foreach ($slides as $index)
                    <div class="min-w-full flex items-center bg-sec-grey shadow-md rounded-lg relative">
                        <img src="{{ asset('img/quote.svg') }}" alt=""
                            class="absolute top-5 left-[245px] lg:left-[275px] w-5 h-5 lg:w-7 lg:h-7">
                        <img src="{{ asset('img/team/team-' . $index . '.png') }}" alt="Gambar {{ $index }}"
                            class="w-auto h-56 lg:h-64 object-cover rounded-md">
                        <div class="max-w-sm px-10">
                            <p class="text-sec-white my-4 text-sm">Simply the best. Better than all the rest. I’d
                                recommend this
                                product to morish beginners andviverra maecenas accumsan lacus. Risus commodo viverra
                                maecenas.</p>
                            <h2 class="text-sm md:text-base font-semibold mb-1">Judy N</h2>
                            <h6 class="text-xs md:text-sm ">CEO, Psdboss</h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Tombol Navigasi -->
        <button type="button" id="prev-desktop"
            class="absolute top-1/2 -left-20 transform -translate-y-1/2 hover:bg-gray-800 text-white p-2 rounded-full z-10 shadow-lg">
            &#10094;
        </button>
        <button type="button" id="next-desktop"
            class="absolute top-1/2 -right-20 transform -translate-y-1/2 hover:bg-gray-800 text-white p-2 rounded-full z-10 shadow-lg">
            &#10095;
        </button>

        <div class="hidden justify-center mt-10 md:flex" id="indicators-desktop">
            @foreach ($slides as $i)
                <div class="w-8 h-1 mx-2 {{ $i === 1 ? 'bg-sec-yellow' : 'bg-gray-300' }}" data-indicator-desktop></div>
            @endforeach
        </div>
    </div>
</div>




<script>
    const trackMobile = document.querySelector('.md\\:hidden [data-carousel-track]');
    const trackDesktop = document.querySelector('.md\\:block [data-carousel-track]');

    let indexMobile = 0;
    let indexDesktop = 0;

    const slidesMobile = trackMobile?.children.length || 0;
    const slidesDesktop = trackDesktop?.children.length || 0;

    const indicatorsMobile = document.querySelectorAll('[data-indicator-mobile]');
    const indicatorsDesktop = document.querySelectorAll('[data-indicator-desktop]');

    function updateIndicators(indicators, index) {
        indicators.forEach((el, i) => {
            el.classList.toggle('bg-sec-yellow', i === index);
            el.classList.toggle('bg-gray-300', i !== index);
        });
    }

    document.getElementById('next-mobile')?.addEventListener('click', () => {
        indexMobile = (indexMobile + 1) % slidesMobile;
        trackMobile.style.transform = `translateX(-${indexMobile * 100}%)`;
        updateIndicators(indicatorsMobile, indexMobile);
    });

    document.getElementById('prev-mobile')?.addEventListener('click', () => {
        indexMobile = (indexMobile - 1 + slidesMobile) % slidesMobile;
        trackMobile.style.transform = `translateX(-${indexMobile * 100}%)`;
        updateIndicators(indicatorsMobile, indexMobile);
    });

    document.getElementById('next-desktop')?.addEventListener('click', () => {
        indexDesktop = (indexDesktop + 1) % slidesDesktop;
        trackDesktop.style.transform = `translateX(-${indexDesktop * 100}%)`;
        updateIndicators(indicatorsDesktop, indexDesktop);
    });

    document.getElementById('prev-desktop')?.addEventListener('click', () => {
        indexDesktop = (indexDesktop - 1 + slidesDesktop) % slidesDesktop;
        trackDesktop.style.transform = `translateX(-${indexDesktop * 100}%)`;
        updateIndicators(indicatorsDesktop, indexDesktop);
    });
</script>
