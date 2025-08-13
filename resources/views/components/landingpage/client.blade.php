<div class="bg-primary w-full py-16">
    <h1 class="font-medium text-xl md:text-2xl lg:text-4xl text-white text-center mb-10 max-w-4xl mx-auto">Together with Our Amazing Clients, We Build Digital Solutions That Make a Difference</h1>
    <div class="flex flex-wrap justify-center gap-5 max-w-4xl mx-auto">
        @foreach (range(1, 9) as $index)
            <div class="bg-sec-gray4 w-28 h-16 md:w-32 md:h-20 flex justify-center items-center p-3 rounded-lg">
                <img src="{{ asset('img/client/client-' . $index . '.svg') }}" alt="client logo"
                    class="h-12 md:h-16 w-auto max-w-full object-contain" />
            </div>
        @endforeach
    </div>
</div>
