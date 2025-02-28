<a href="/products/{{$product->id}}" class="group">
    <img src="https://tailwindui.com/plus-assets/img/ecommerce-images/category-page-04-image-card-01.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="aspect-square w-full rounded-lg bg-gray-200 group-hover:opacity-75 xl:aspect-7/8">
    <div class="flex justify-between items-baseline">
        <h3 class="mt-4 text-md text-gray-700">{{$product->name}}</h3>
        <p class="mt-1 text-md text-gray-600 ">{{$product->discount_percentage}}%off</p>
    </div>
    <div class="flex space-x-3 items-baseline">
        @php
        $discountedPrice = $product->price - ($product->price * ($product->discount_percentage / 100));
        @endphp
        <p class="mt-1 text-lg font-medium text-gray-900">${{$discountedPrice}}</p>
        @if($product->discount_percentage)
        <p class="mt-1 text-md  text-gray-600 line-through">${{$product->price}}</p>
        @endif
    </div>
</a>