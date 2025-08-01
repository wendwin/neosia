<div class="relative w-full bg-sec-grey text-white py-16">
    <h1 class="mb-4 text-center font-medium text-xl md:text-2xl lg:text-3xl">Public event join our Upcoming</h1>
    <p class="mb-12 text-center">Etiam Porttitor risus massa nec condiment gravisa nibh</p>

    <!-- card program -->
    <div class="flex flex-wrap gap-0 md:gap-5 lg:gap-8 justify-center pb-4 overflow-hidden">
        @foreach (range(1, 9) as $index)
            <div
                class="flex items-center  border-b border-gray-600 md:border-none md:rounded-none shadow-sm md:flex-row md:max-w-sm  hover:bg-sec-gray4 bg-sec-gray5">
                <div class="p-4 leading-normal">
                    <p class="mb-3 text-xs font-normal text-gray-700 dark:text-gray-400">20 Juni 2025 <span> -
                            Yogyakarta</span>
                    </p>
                    <h5 class="mb-2 text-base font-bold tracking-tight text-gray-900 dark:text-white">Open library talks
                        creative industry development ...</h5>
                    <a href="" class="text-sec-yellow inline-flex items-center cursor-pointer">
                        Details <ion-icon name="arrow-forward-outline"></ion-icon>
                    </a>
                </div>
                <img class="object-cover w-full rounded-3xl md:rounded-none p-2 md:p-0 h-36 md:h-auto md:w-36 "
                    src="{{ asset('img/eventup/event-' . $index . '.png') }}" alt="">
            </div>
        @endforeach
    </div>

</div>
