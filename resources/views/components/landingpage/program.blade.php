<div class="relative w-full bg-sec-grey text-white px-4">
    {{-- <div class="absolute top-0 left-[50%]  flex flex-col justify-center h-1 w-[200px] bg-sec-yellow"></div> --}}
    <h1 class="p-4 py-8 text-center font-medium text-xl md:text-2xl">Explore Our Programs</h1>

    <!-- card program -->
    <div class="flex gap-4 md:gap-5 lg:gap-8 justify-center flex-nowrap pb-4">
        @foreach (range(1, 3) as $index)
            <div class="flex-shrink-0 hover:scale-105 transition duration-300 ease-in-out">
                <div class=" rounded-lg shadow-xs bg-sec-gray5  min-w-64 md:max-w-72">
                    <div class="relative">
                        <img alt="" src="{{ asset('img/program/program.png') }}"
                            class="h-52 w-full rounded-md object-cover" />
                        <div
                            class="px-3 py-2 text-white text-xs rounded-full items-center bg-blue-600 absolute top-4 right-2">
                            Rp. 90.000
                        </div>
                    </div>

                    <div class="mt-2 p-3 md:p-5">
                        <h3 class="font-semibold text-sm mb-5">SolidWorks Certification Program</h3>
                        <p class="text-xs leading-5">Master the fundamentals of aerospace simulation and design</p>

                        <div class="mt-6 md:flex justify-between items-center text-xs">
                            <div class="mb-4 md:mb-0">
                                <ion-icon name="time"></ion-icon> 12 Week
                            </div>
                            <div class="flex gap-3">
                                <div class="mb-4 md:mb-0">
                                    <ion-icon name="star" class="text-amber-400"></ion-icon> 4,9
                                </div>
                                <div>
                                    <ion-icon name="people"></ion-icon> 1,200 Students
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 flex flex-col gap-3">
                            <a href="#" class="">
                                <div
                                    class="rounded-md bg-yellow-400 px-6  py-2 font-medium text-black transition text-sm hover:bg-yellow-300 flex items-center gap-2 justify-center">
                                    <p>Download Brochure</p>
                                    <ion-icon name="arrow-down-outline"></ion-icon>
                                </div>
                            </a>
                            <a href="#"
                                class="rounded-md bg-sec-gray3 px-6 py-2 font-medium text-white border border-white transition text-sm hover:bg-white hover:text-black text-center">
                                Read More
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
