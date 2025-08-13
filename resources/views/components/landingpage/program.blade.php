<div class="relative w-full bg-sec-grey text-white px-4 py-12">
    {{-- <div class="absolute top-0 left-[50%]  flex flex-col justify-center h-1 w-[200px] bg-sec-yellow"></div> --}}
    <div class="" data-aos="fade-up">
        <h1 class="p-4 mb-8 text-center font-medium text-xl md:text-2xl lg:text-4xl">Explore Our Programs</h1>
    
        <!-- card program -->
        <div class="overflow-x-auto md:overflow-visible">
            <div
                class="flex  gap-4 md:gap-5 lg:gap-8 justify-start md:justify-center ">
                @foreach (range(1, 3) as $index)
                    <div
                        class="flex-shrink-0 md:flex-shrink md:w-auto hover:md:scale-105 transition duration-300 ease-in-out w-72 lg:max-w-xs">
                        <div class="rounded-lg shadow-md bg-sec-gray5 w-full h-full flex flex-col ">
                            <div class="relative">
                                <img alt="" src="{{ asset('img/program/program.png') }}"
                                    class="h-48 sm:h-52 w-full rounded-t-lg object-cover" />
                                <div class="px-3 py-1 text-white text-xs rounded-full bg-blue-600 absolute top-3 right-3 ">
                                    Rp. 90.000
                                </div>
                            </div>
    
                            <div class="flex-grow flex flex-col justify-between p-4 sm:p-5">
                                <div>
                                    <h3 class="font-semibold text-base mb-3">SolidWorks Certification Program</h3>
                                    <p class="text-xs sm:text-sm leading-5">Master the fundamentals of aerospace simulation
                                        and design</p>
                                </div>
    
                                <div
                                    class="mt-4 sm:mt-6 flex flex-col sm:flex-row sm:justify-between sm:items-center text-xs gap-2 sm:gap-0">
                                    <div class="flex items-center gap-1">
                                        <ion-icon name="time"></ion-icon>
                                        <span>12 Week</span>
                                    </div>
                                    <div class="flex gap-3 items-center">
                                        <div class="flex items-center gap-1">
                                            <ion-icon name="star" class="text-amber-400"></ion-icon>
                                            <span>4,9</span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <ion-icon name="people"></ion-icon>
                                            <span>1,200 Students</span>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="mt-5 flex flex-col gap-2">
                                    <a href="#">
                                        <div
                                            class="rounded-md bg-yellow-400 px-6 py-2 font-medium text-black text-sm hover:bg-yellow-300 flex items-center gap-2 justify-center transition">
                                            <p>Download Brochure</p>
                                            <ion-icon name="arrow-down-outline"></ion-icon>
                                        </div>
                                    </a>
                                    <a href="#"
                                        class="rounded-md bg-sec-gray3 px-6 py-2 font-medium text-white border border-white text-sm hover:bg-white hover:text-black text-center transition">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
