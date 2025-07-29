<div class="bg-primary w-full py-16">
    <h1 class="font-medium text-2xl text-white text-center mb-10 max-w-xl mx-auto">These Are Some of the Amazing Products We’ve Proudly
        Helped Bring to Life</h1>
    <div class="flex flex-wrap justify-center gap-5">
        @foreach (range(1, 6) as $index)
            <div class="bg-white w-40 h-32 flex justify-center items-center p-3 rounded-lg">
                <img src="{{ asset('img/brand-product/product-' . $index . '.svg') }}" alt="brand logo"
                    class="h-20 w-auto max-w-full object-contain" />
            </div>
        @endforeach
    </div>
</div>
