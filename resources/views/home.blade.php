<x-layout>


    <!-- Hero Section -->
    <section class="min-h-screen h-96 bg-cover bg-center flex items-center justify-center text-white text-center mt-20">
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="text-center">
                <h1 class="text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl">FASHION REFLECT WHO YOU ARE</h1>
                <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">"Fashion is part of the daily air and it changes all the time, with all the events. You can even see the approaching of a revolution in clothes. You can see and feel everything in clothes."</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
                    <a href="#" class="text-sm/6 font-semibold text-gray-900">Learn more <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <!-- <section id="categories" class="py-12 text-center">
        <h2 class="text-3xl font-semibold">Shop by Category</h2>
        <div class="flex justify-center gap-6 mt-6">
            <div class="bg-white p-4 rounded-lg shadow-md">👕 Clothing</div>
            <div class="bg-white p-4 rounded-lg shadow-md">👟 Shoes</div>
            <div class="bg-white p-4 rounded-lg shadow-md">🎒 Accessories</div>
        </div>
    </section> -->

    <!-- Featured Products -->
    <section id="products" class="py-12">
        <h2 class="text-3xl font-semibold text-center">Shop by Category</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6 max-w-6xl mx-auto">
            @foreach($categories as $category)
            <x-category_card :category="$category"></x-category_card>
            @endforeach
            {{$categories->links()}}
        </div>
    </section>

    <div class="">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="text-3xl font-semibold tracking-tight text-gray-900 mb-10 text-center">Customers also purchased</h2>

            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                @foreach($products as $product)
                <x-product_card :product="$product"></x-product_card>
                @endforeach
                {{$products->links()}}

                <!-- More products... -->
            </div>
        </div>
    </div>


    <!-- Newsletter Signup -->
    <section class="py-12 text-center bg-white">
        <h2 class="text-2xl font-semibold">Stay Updated</h2>
        <p class="text-gray-500">Subscribe to our newsletter for exclusive offers.</p>
        <input type="email" placeholder="Enter your email" class="mt-4 p-2 border rounded-lg">
        <button class="bg-black text-white px-4 py-2 rounded-lg ml-2">Subscribe</button>
    </section>

</x-layout>