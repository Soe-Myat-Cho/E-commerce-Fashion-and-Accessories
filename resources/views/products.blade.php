<x-layout>

    <div class="mx-auto max-w-2xl px-4  sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8 mt-20">
        <div class="mb-20">
            <form action="" method="get" class="flex items-center mb-6 ">
                <input type="text" name="search" placeholder="Search products..." class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-300">
                <button type="submit" class="ml-2 px-4 py-2 bg-black text-white rounded-lg">Search</button>
            </form>
        </div>

        <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
            @forelse($products as $product)
            <x-product_card :product="$product"></x-product_card>
            @empty
            <p class="text-center font-semibold text-3xl">No products found.</p>
            @endforelse


            <!-- More products... -->
        </div>
    </div>
</x-layout>