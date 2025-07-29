<div class="relative w-full bg-primary text-white px-4 py-12">
    <h1 class="mb-4 text-center font-medium text-xl md:text-2xl">Meet our team in Neosia</h1>
    <p class="mb-12 text-center">Etiam porttitor risus massa nec condiment gravida</p>

    <!-- card program -->
    <div class="flex flex-wrap gap-4 md:gap-5 lg:gap-8 justify-center pb-4">
        @foreach (range(1, 4) as $index)
            <div class=" hover:scale-105 transition duration-300 ease-in-out">
                <div class="rounded-2xl shadow-xs bg-sec-gray5  min-w-64 md:max-w-72">
                        <img alt="" src="{{ asset('img/team/team-' . $index .'.png') }}"
                            class="h-52 w-full rounded-2xl object-cover" />

                    <div class="mt-2 p-3 md:p-5 text-center">
                        <h3 class="font-semibold text-sm mb-5">Mummayyis Pramono</h3>
                        <p class="text-xs leading-5">Technical Trainer</p>
                        <p class="text-xs leading-5">CAD/CAM/CAE Specialist</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
