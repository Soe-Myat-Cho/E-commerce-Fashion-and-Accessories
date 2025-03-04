<a href="/products/{{$product->id}}" class="group mb-5">
    <img src="https://dtcralphlauren.scene7.com/is/image/PoloGSI/s7-AI211970691001_alternate10?$plpDeskRF$" class="aspect-square w-full h-full object-cover  xl:aspect-7/8 transform hover:opacity-90 transition duration-300 ease-in-out ">
    <div class=" items-baseline">
        <h3 class="mt-4 text-md text-gray-700">{{$product->name}}</h3>

    </div>
    <div class="flex space-x-3 items-baseline">
        @php
        $discountedPrice = $product->price - ($product->price * ($product->discount_percentage / 100));
        @endphp
        <p class="mt-1 text-lg font-medium text-gray-900">${{$discountedPrice}}</p>
        @if($product->discount_percentage)
        <p class="mt-1 text-md  text-gray-600 line-through">${{$product->price}}</p>
        <p class="mt-1 text-md text-gray-600 ">{{$product->discount_percentage}}%off</p>
        @endif
    </div>
</a>

<!-- https://i.pinimg.com/736x/b9/69/bb/b969bba3af3c94b29409049c2fed717b.jpg -->