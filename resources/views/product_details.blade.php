<x-layout>

    <!-- Product Detail Section -->
    <section class="py-12 max-w-6xl mx-auto mt-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 bg-white p-6  shadow-md">
            <!-- Product Image -->
            <div>
                <img src="https://tailwindui.com/plus-assets/img/ecommerce-images/category-page-04-image-card-01.jpg" alt="Product Image" class="object-cover w-full">
            </div>
            <!-- Product Info -->
            <div>
                <div class="flex space-x-5 items-baseline">
                    <h3 class=" text-3xl font-semibold">{{$product->name}}</h3>
                    <p class="mt-1 text-xl text-gray-800 ">{{$product->discount_percentage}}%Off</p>
                </div>
                <p class="text-gray-500 mt-2">{{$product->description}}</p>
                <div class="flex space-x-3 items-baseline">
                    @php
                    $discountedPrice = $product->price - ($product->price * ($product->discount_percentage / 100));
                    @endphp
                    <p class="mt-1 text-2xl font-medium text-gray-900">${{$discountedPrice}}</p>
                    @if($product->discount_percentage)
                    <p class="mt-1 text-md  text-gray-600 line-through">${{$product->price}}</p>
                    @endif
                </div>
                <button class="mt-6 bg-gray-900 text-white px-6 py-2 rounded-lg">Add to Cart</button>


                <!-- Additional Details -->
                <div class="mt-6">
                    <h3 class="text-xl font-semibold">Product Details</h3>
                    <ul class="list-disc list-inside text-gray-600 mt-2">
                        <li>High-quality materials</li>
                        <li>Minimalist design</li>
                        <li>Eco-friendly production</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</x-layout>