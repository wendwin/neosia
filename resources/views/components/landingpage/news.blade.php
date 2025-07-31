<div class="relative w-full bg-sec-grey text-white py-16">
    <h1 class="mb-12 text-center font-medium text-xl md:text-2xl lg:text-3xl">Check out our latest news</h1>

    <!-- card program -->
    <div class="flex flex-wrap gap-0 md:gap-5 lg:gap-8 justify-center">
        @foreach (range(1, 4) as $index)
            <div
                class="flex items-center  border-b border-gray-600 md:border-none md:rounded-xl shadow-sm md:flex-row md:max-w-sm lg:max-w-xl  hover:bg-sec-gray4 bg-sec-gray5">
                <div class="p-4 leading-normal">
                    <p class="mb-3 text-xs font-normal text-gray-700 dark:text-gray-400">20 Juni 2025 <span> -
                            Yogyakarta</span>
                    </p>
                    <h5 class="mb-2 text-sm  tracking-tight text-gray-900 dark:text-white">Open library talks
                        creative industry development ...</h5>
                    <a href="" class="text-sec-yellow inline-flex items-center cursor-pointer">
                        More Details <ion-icon name="arrow-forward-outline"></ion-icon>
                    </a>
                </div>
                <img class="object-cover w-full rounded-3xl md:rounded-none p-2 md:p-0 h-36 md:h-auto md:w-36 lg:w-52"
                    src="{{ asset('img/news/news-' . $index . '.png') }}" alt="">
            </div>
        @endforeach
    </div>

    <div class="w-full flex items-center justify-center gap-2 p-5 bg-sec-grey text-center xl:hidden">
        <a href="#" class="text-sm underline flex items-center gap-2">
            Show More <ion-icon name="chevron-down-outline"></ion-icon>
        </a>
    </div>

</div>
