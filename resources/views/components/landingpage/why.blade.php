<div class="relative w-full bg-sec-grey text-white grid grid-cols-1 md:grid-cols-2 ">
    <!-- Garis atas -->
    <div class="absolute top-0 right-0 h-1 w-1/6 bg-sec-yellow"></div>

    <!-- Gambar -->
    <div class="relative flex">
        <img src="{{ asset('img/why.png') }}" alt="why" class="w-full h-auto object-contain" />
        <div class="absolute bottom-0 right-0 h-1 w-2/6 bg-sec-yellow md:hidden"></div>
    </div>

    <!-- Konten -->
    <div class="flex flex-col justify-center px-4 py-10 md:mx-auto lg:max-w-lg"  data-aos="fade-up">
        <div class="mb-8">
            <h1 class="mb-6 text-2xl font-medium lg:text-4xl">
                Why Choose Neosia Training Center ?
            </h1>
            <p class="leading-7">
                Top University in the world for satisfaction bender grub bits, sad do eiumod tempor gravida
            </p>
        </div>

        <!-- Fitur -->
        <div class="mb-8 flex flex-wrap gap-6 md:max-w-md">
            <div class="flex items-center gap-3 w-40 lg:w-52 p-3 rounded-lg bg-sec-gray3">
                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-[#4F46E5]">
                    <ion-icon name="create-outline"></ion-icon>
                </div>
                <p>1500+ Courses</p>
            </div>

            <div class="flex items-center gap-3 w-40 lg:w-52 p-3 rounded-lg bg-sec-gray3">
                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-[#059669]">
                    <ion-icon name="play-outline"></ion-icon>
                </div>
                <p>200+ Free Videos</p>
            </div>

            <div class="flex items-center gap-3 w-40 lg:w-52 p-3 rounded-lg bg-sec-gray3">
                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-[#DC2626]">
                    <ion-icon name="documents-outline"></ion-icon>
                </div>
                <p>10+ Lessons</p>
            </div>

            <div class="flex items-center gap-3 w-40 lg:w-52 p-3 rounded-lg bg-sec-gray3">
                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-[#7C3AED]">
                    <ion-icon name="receipt-outline"></ion-icon>
                </div>
                <p>Quality Teachers</p>
            </div>
        </div>

        <!-- Tombol -->
        <a href="#"
            class="w-fit rounded-md bg-yellow-400 px-6 py-2 font-medium text-black transition hover:bg-yellow-300">
            View All Course
        </a>
    </div>
</div>
