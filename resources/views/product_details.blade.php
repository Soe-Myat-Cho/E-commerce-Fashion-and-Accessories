<x-layout>

    <!-- Product Detail Section -->
    <section class="mx-auto mt-20 bg-amber-400">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-1 bg-white border-gray-400 border">
            <!-- Product Image -->

            <div>
                <img src="https://dtcralphlauren.scene7.com/is/image/PoloGSI/s7-AI211970691001_alternate1?$rl_4x5_zoom$" alt="Product Image" class="object-fit w-full border-gray-400 border-r">
            </div>
            <!-- Product Info -->
            <div class="pl-4 py-6 space-y-5">
                <div class="flex space-x-5 items-baseline">
                    <h3 class=" text-3xl font-thick">{{$product->name}}</h3>
                    <p class="mt-1 text-xl text-gray-800 ">{{$product->discount_percentage}}%Off</p>
                </div>

                <div class="flex space-x-3 items-baseline">
                    @php
                    $discountedPrice = $product->price - ($product->price * ($product->discount_percentage / 100));
                    @endphp
                    <p class="mt-1 text-2xl font-medium text-gray-900">${{$discountedPrice}}</p>
                    @if($product->discount_percentage)
                    <p class="mt-1 text-md  text-gray-600 line-through">${{$product->price}}</p>
                    @endif
                </div>
                <p class="text-gray-500 mt-2">{{$product->description}}</p>
                <form action="/products/{{$product->id}}/addToCart" method="post">
                    @csrf
                    <button class="mt-6 bg-gray-900 text-white px-6 py-2 hover:bg-gray-800">Add to Cart</button>
                </form>

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

            <div>
                <img src="https://dtcralphlauren.scene7.com/is/image/PoloGSI/s7-AI211970691001_alternate4?$rl_4x5_zoom$" alt="Product Image" class="object-fit w-full border-gray-400 border-r">
            </div>
            <div>
                <img src="https://dtcralphlauren.scene7.com/is/image/PoloGSI/s7-AI211970691001_alternate3?$rl_4x5_zoom$" alt="Product Image" class="object-fit w-full border-gray-400 border-r">
            </div>
        </div>
    </section>

</x-layout>

<!-- https://i.pinimg.com/736x/b9/69/bb/b969bba3af3c94b29409049c2fed717b.jpg -->