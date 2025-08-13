<div class="relative w-full bg-primary text-white px-4 py-16">
    <div class="" data-aos="fade-up">
        <h1 class="mb-4 text-center font-medium text-xl md:text-2xl lg:text-4xl">Meet our team in Neosia</h1>
        <p class="mb-12 text-center text-base md:text-xl">Etiam porttitor risus massa nec condiment gravida</p>
    
        <!-- card program -->
        <div class="overflow-x-auto md:overflow-visible px-4 p-5">
            <div class="flex md:flex-wrap gap-4 md:gap-8 justify-start md:justify-center w-max md:w-full">
                @foreach (range(1, 4) as $index)
                    <div class="flex-shrink-0 hover:scale-105 transition duration-300 ease-in-out relative">
                        <div class="w-[85vw] max-w-[18rem] md:max-w-64 rounded-2xl shadow-xs bg-sec-gray5 relative">
                            <img alt="" src="{{ asset('img/team/team-' . $index . '.png') }}"
                                class="h-52 w-full rounded-2xl object-cover" />
    
                            <div class="mt-2 p-5 md:p-8 text-center">
                                <h3 class="font-semibold text-sm mb-5">Mummayyis Pramono</h3>
                                <p class="text-xs leading-5">Technical Trainer</p>
                                <p class="text-xs leading-5">CAD/CAM/CAE Specialist</p>
                            </div>
                            <div
                                class="w-10 h-10 bg-[#1D1D1D] absolute -bottom-5 left-[40%] flex items-center justify-center rounded-full">
                                <ion-icon name="logo-linkedin" class="text-white text-xl"></ion-icon>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
