<div class="w-full bg-primary px-5 py-10 overflow-hidden">
    <div class="lg:max-w-6xl mx-auto">

        <div class="flex items-center justify-between">
            <h5 class="text-white text-2xl md:text-3xl lg:text-4xl">Industry</h5>
            <div class="flex items-center gap-3">
                <button id="prevBtn" class="w-10 h-10 rounded-full border border-slate-300 flex items-center justify-center">
                    <ion-icon class="text-white" name="arrow-back-outline"></ion-icon>
                </button>
                <button id="nextBtn" class="w-10 h-10 rounded-full border border-slate-300 flex items-center justify-center">
                    <ion-icon class="text-white" name="arrow-forward-outline"></ion-icon>
                </button>
            </div>
        </div>
    
        <!-- Slider Wrapper -->
        <div class="relative overflow-hidden">
            <div id="slider" class="flex gap-5 transition-transform duration-500">
                <div class="my-8 min-w-[300px] max-w-sm bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700 relative overflow-hidden">
                    <img class="rounded-t-lg" src="{{ asset('img/service/industry1.jpg') }}" alt="CNC Medium" />
                    <div class="absolute inset-0 bg-black bg-opacity-50 rounded-t-lg flex items-end p-3">
                        <div>
                            <div class="w-12 h-1 bg-yellow-500 mb-3"></div>
                            <h6 class="text-white text-xl font-medium">CNC Medium</h6>
                        </div>
                    </div>
                </div>
    
                <div class="my-8 min-w-[300px] max-w-sm bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700 relative overflow-hidden">
                    <img class="rounded-t-lg" src="{{ asset('img/service/industry2.jpg') }}" alt="CNC Medium" />
                    <div class="absolute inset-0 bg-black bg-opacity-50 rounded-t-lg flex items-end p-3">
                        <div>
                            <div class="w-12 h-1 bg-yellow-500 mb-3"></div>
                            <h6 class="text-white text-xl font-medium">Pipe & Routing</h6>
                        </div>
                    </div>
                </div>
    
                <div class="my-8 min-w-[300px] max-w-sm bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700 relative overflow-hidden">
                    <img class="rounded-t-lg" src="{{ asset('img/service/industry3.jpg') }}" alt="CNC Medium" />
                    <div class="absolute inset-0 bg-black bg-opacity-50 rounded-t-lg flex items-end p-3">
                        <div>
                            <div class="w-12 h-1 bg-yellow-500 mb-3"></div>
                            <h6 class="text-white text-xl font-medium">Health & Care</h6>
                        </div>
                    </div>
                </div>
    
                <div class="my-8 min-w-[300px] max-w-sm bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700 relative overflow-hidden">
                    <img class="rounded-t-lg" src="{{ asset('img/service/industry4.jpg') }}" alt="CNC Medium" />
                    <div class="absolute inset-0 bg-black bg-opacity-50 rounded-t-lg flex items-end p-3">
                        <div>
                            <div class="w-12 h-1 bg-yellow-500 mb-3"></div>
                            <h6 class="text-white text-xl font-medium">Automotive</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const slider = document.getElementById('slider');
    const nextBtn = document.getElementById('nextBtn');
    const prevBtn = document.getElementById('prevBtn');

    let scrollAmount = 0;
    const cardWidth = 320;
    const gap = 20;
    const totalCards = slider.children.length;

    function updateButtons() {
        // Disable prev jika sudah di awal
        prevBtn.disabled = scrollAmount === 0;
        prevBtn.classList.toggle("opacity-50", prevBtn.disabled);

        // Disable next jika sudah di akhir
        const maxScroll = -(totalCards * (cardWidth + gap) - slider.parentElement.offsetWidth);
        nextBtn.disabled = scrollAmount <= maxScroll;
        nextBtn.classList.toggle("opacity-50", nextBtn.disabled);
    }

    nextBtn.addEventListener('click', () => {
        const maxScroll = -(totalCards * (cardWidth + gap) - slider.parentElement.offsetWidth);
        if (scrollAmount > maxScroll) {
            scrollAmount -= (cardWidth + gap);
            if (scrollAmount < maxScroll) scrollAmount = maxScroll; 
            slider.style.transform = `translateX(${scrollAmount}px)`;
        }
        updateButtons();
    });

    prevBtn.addEventListener('click', () => {
        if (scrollAmount < 0) {
            scrollAmount += (cardWidth + gap);
            if (scrollAmount > 0) scrollAmount = 0;
            slider.style.transform = `translateX(${scrollAmount}px)`;
        }
        updateButtons();
    });

    // Set awal
    updateButtons();
</script>
