<div class="bg-primary px-5 py-10">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-lg lg:text-xl font-semibold text-white mb-5">Explore Categories</h1>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
            @foreach ($categories as $category)
                <div
                    class="w-full bg-sec-grey text-white h-auto r p-4 rounded-lg">
                    <ion-icon name="image" class="text-3xl mb-5 text-sec-yellow "></ion-icon>
                    <p class="text-sm font-medium">{{ $category['title'] }}</p>
                </div>
            @endforeach
        </div>

    </div>
</div>
