<x-layout>
    <!-- Cart Container -->
    <div class=" max-w-5xl mx-auto mt-20     p-6  ">
        <h2 class="text-2xl font-semibold mb-4 py-5">Shopping Cart</h2>

        <!-- Cart Items List -->
        <div class="space-y-4 pb-4 ">
            @auth

            @php
            $cartItems = Auth::user()->cart?->cart_items;
            $totalPrice = 0;
            @endphp

            @if($cartItems)

            @foreach($cartItems as $cartItem)
            <!-- Single Cart Item -->
            <div class="flex justify-between items-center space-x-5 border-b pb-4">
                <!-- Product Image -->
                <img src="https://dtcralphlauren.scene7.com/is/image/PoloGSI/s7-AI211970691001_alternate4?$rl_4x5_zoom$" alt="Product Image" class="object-cover w-1/5">

                <!-- Product Details -->
                <div class="flex-1   ">
                    <h3 class="text-xl">{{$cartItem->product->name}}</h3>
                    @php
                    $discountedPrice = $cartItem->product->price - ($cartItem->product->price * ($cartItem->product->discount_percentage / 100));
                    $totalPrice += $discountedPrice;
                    @endphp
                    @if ($cartItem->product->discount_percentage)
                    <p class="text-gray-500 line-through">${{$cartItem->product->price}}</p>
                    @endif
                    <p class="text-gray-800">${{$discountedPrice}}</p>
                    <p class="text-gray-800">{{$cartItem->product->description}}</p>


                </div>

                <!-- Remove Button -->
                <form action="/products/{{$cartItem->id}}/removeFromCart" method="post">
                    @csrf
                    <button class="text-gray-900 hover:underline  ">Remove</button>
                </form>
            </div>
            @endforeach

            @else
            <p class="text-gray-700 text-center text-xl font-semibold  ">Your cart is empty.</p>
            @endif

            @else
            <p class="text-gray-700 text-center text-xl font-semibold  ">You are not logged in.</p>
            @endauth
        </div>

        <!-- Cart Summary -->
        @auth
        @if($cartItems)
        <div class="mt-6 text-right ">
            <h3 class="text-xl font-semibold">Total: ${{$totalPrice}}</h3>
            <form action="/products/checkout" method="post" class="">
                <!-- hidden input for total price -->
                <input type="text" name="totalPrice" value="{{$totalPrice}}" hidden class="w-full p-2 border">

                <div class="mt-4">

                    <textarea id="orderNotes" name="shipping_address" class="w-full p-2 border " rows="8" placeholder="Enter your shipping address"></textarea>
                </div>

                @csrf
                <button class="mt-4 bg-gray-900 text-white px-6 py-2  hover:bg-gray-700">
                    Proceed to Checkout
                </button>
            </form>
        </div>
        @endif
        @endauth
    </div>


</x-layout>