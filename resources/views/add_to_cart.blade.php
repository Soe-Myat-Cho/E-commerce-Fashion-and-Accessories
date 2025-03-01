<x-layout>
    <!-- Cart Container -->
    <div class="max-w-4xl mx-auto mt-20 bg-white shadow-md rounded-lg p-6  ">
        <h2 class="text-2xl font-semibold mb-4 py-5">Shopping Cart 🛒</h2>

        <!-- Cart Items List -->
        <div class="space-y-4">
            @auth
            @php
            $cartItems = Auth::user()->cart?->cart_items;
            $totalPrice = 0;
            @endphp
            @if($cartItems)
            @foreach($cartItems as $cartItem)
            <!-- Single Cart Item -->
            <div class="flex items-center justify-between border-b pb-4">
                <!-- Product Image -->
                <img src="https://i.pinimg.com/736x/b9/69/bb/b969bba3af3c94b29409049c2fed717b.jpg" alt="Product Image" class="w-20 h-20 object-cover rounded">

                <!-- Product Details -->
                <div class="flex-1 ml-4">
                    <h3 class="text-lg font-semibold">{{$cartItem->product->name}}</h3>
                    @php
                    $discountedPrice = $cartItem->product->price - ($cartItem->product->price * ($cartItem->product->discount_percentage / 100));
                    $totalPrice += $discountedPrice;
                    @endphp
                    <p class="text-gray-500">${{$discountedPrice}}</p>

                </div>

                <!-- Remove Button -->
                <form action="/products/{{$cartItem->id}}/removeFromCart" method="post">
                    @csrf
                    <button class="text-gray-900 hover:underline mr-4">Remove</button>
                </form>
            </div>

            @endforeach
            @else
            <p class="text-gray-700 text-center text-xl font-semibold  ">Your cart is empty.</p>
            @endif
            @endauth
            <p class="text-gray-700 text-center text-xl font-semibold  ">Your cart is empty.</p>

        </div>

        <!-- Cart Summary -->
        @auth
        @if($cartItems)
        <div class="mt-6 text-right">
            <h3 class="text-xl font-semibold">Total: ${{$totalPrice}}</h3>
            <button class="mt-4 bg-gray-900 text-white px-6 py-2 rounded hover:bg-gray-700">
                Proceed to Checkout
            </button>
        </div>
        @endif
        @endauth
    </div>


</x-layout>