<div x-data="{
    slider: null,
    cardWidth: 0,
    scrollLeft() {
        this.slider.scrollBy({ left: -this.cardWidth, behavior: 'smooth' });
    },
    scrollRight() {
        this.slider.scrollBy({ left: this.cardWidth, behavior: 'smooth' });
    },
    init() {
        this.slider = this.$refs.slider;

        // Ambil lebar card pertama secara langsung
        this.$nextTick(() => {
            const firstCard = this.slider.querySelector('.card-item');
            if (firstCard) {
                this.cardWidth = firstCard.offsetWidth + parseInt(getComputedStyle(firstCard).marginRight);
            }
        });

        // Update saat resize agar tetap responsif
        window.addEventListener('resize', () => {
            const firstCard = this.slider.querySelector('.card-item');
            if (firstCard) {
                this.cardWidth = firstCard.offsetWidth + parseInt(getComputedStyle(firstCard).marginRight);
            }
        });
    }
}"
 class="bg-primary py-10">
    <div class="max-w-7xl mx-auto px-5">

        <!-- Header -->
        <div class="mb-5 flex items-center justify-between">
            <h1 class="text-lg lg:text-xl font-semibold text-white">Featured Courses</h1>

            <!-- Tombol Scroll semua ukuran -->
            <div class="flex items-center gap-2">
                <button @click="scrollLeft" class="p-2 bg-white/20 rounded-full">
                    <ion-icon name="chevron-back-outline" class="text-white text-lg"></ion-icon>
                </button>
                <button @click="scrollRight" class="p-2 bg-white/20 rounded-full">
                    <ion-icon name="chevron-forward-outline" class="text-white text-lg"></ion-icon>
                </button>
            </div>
        </div>

        <!-- Card wrapper -->
        <div   x-ref="slider" class="overflow-x-auto scroll-smooth hide-scrollbar">
            <div class="flex gap-4 w-max md:w-auto">
                @foreach ($courses as $index => $course)
                    <div class="card-item min-w-[85vw] max-w-[18rem] md:min-w-0 md:max-w-full flex-shrink-0 md:flex-shrink-0 md:w-full">
                        <div class="rounded-2xl shadow-xs bg-sec-grey overflow-hidden flex flex-col md:flex-row min-h-[400px] md:min-h-[220px]">
                            <!-- Gambar -->
                            <img alt="" src="{{ asset($course['image']) }}"
                                class="h-52 md:h-auto md:w-[40%] object-cover" />

                            <!-- Konten -->
                            <div class="text-white p-4 md:p-6 flex flex-col justify-between flex-1 space-y-3">
                                <div>
                                    <h3 class="font-semibold text-base md:text-xl md:mb-3">{{ $course['title'] }}</h3>
                                    <p class="text-sm leading-5 mt-2 md:max-w-md md:mb-3">{{ $course['description'] }}</p>

                                    <div class="flex items-center gap-3 mt-3">
                                        <img class="w-6 h-6 rounded-full md:w-10 md:h-10"
                                            src="{{ asset('img/course/profile.png') }}" alt="">
                                        <p class="text-sm">{{ $course['instructor'] }}</p>
                                    </div>

                                    <div class="flex items-center gap-3 mt-3">
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
                                </div>

                                <div class="flex justify-between items-center pt-4">
                                    <p class="text-base font-semibold">
                                        Rp {{ number_format($course['price'], 0, ',', '.') }}
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

    </div>
</div>


<style>
.hide-scrollbar::-webkit-scrollbar {
  display: none;
}

.hide-scrollbar {
  -ms-overflow-style: none;  
  scrollbar-width: none; 
}
</style>
