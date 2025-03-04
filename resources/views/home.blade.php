<x-layout>

    <div class="flex flex-col md:flex-row mt-20">
        <div class=" w-full md:w-1/2">
            <img src="https://media1.calvinklein.com/images/20250205_misc/PLP/R296_SKO_NA_FEB_90S_LOOSE_JEAN_01_003_R4_2x.webp" alt="">
        </div>
        <div class="bg-gray-100 w-full md:w-1/2 flex justify-center items-center text-center align-center px-5 py-10">
            <div>
                <h3 class="text-3xl text-start font-thick ">90s Inspired Jeans</h3>
                <p class="text-md text-start">Find your iconic fit. From straight to slim, 90s and more.</p>
            </div>
        </div>
    </div>



    <div class="flex  relative h-screen bg-[url('https://media1.calvinklein.com/images/20250225/HP/Mingyu_2x.webp')] bg-cover bg-center mt-1">
        <div class="absolute bottom-10 left-5 text-start">
            <h2 class="font-thick text-6xl  text-white">SPRING ENERGY
                <br class="">AMPLIFIED
            </h2>
            <p class="text-3xl font-thin text-white">Signature fits with modern edge. Effortless attitude through the seasons</p>
        </div>
    </div>




    <!-- Categorys -->
    <section id="products" class="py-12 ">
        <h2 class="text-3xl font-thick text-center">Shop by Category</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6 max-w-6xl mx-auto">
            @foreach($categories as $category)
            <x-category_card :category="$category"></x-category_card>
            @endforeach

        </div>
        <!-- {{$categories->links()}} -->
    </section>

    <!-- Hero Section -->
    <section class="min-h-screen h-96 bg-cover bg-center flex items-center justify-center text-white text-center ">
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56 ">
            <div class="text-center">
                <h1 class="text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl">FASHION REFLECT WHO YOU ARE</h1>
                <p class="mt-8 text-lg  text-pretty text-gray-500 sm:text-xl/8">"Fashion is part of the daily air and it changes all the time, with all the events. You can even see the approaching of a revolution in clothes. You can see and feel everything in clothes."</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#" class=" bg-black px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-gray-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
                    <a href="#" class="text-sm/6 font-semibold text-gray-900">Learn more <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
    </section>

    <div class="flex relative h-screen bg-[url('https://media1.calvinklein.com/images/20250225/HP/NewJeans_2x.webp')] bg-cover bg-center">
        <div class="absolute bottom-10 left-5 text-start">
            <h2 class="font-thick text-6xl  text-white">SPRING ENERGY
                <br class="">AMPLIFIED
            </h2>
            <p class="text-3xl font-thin text-white">Signature fits with modern edge. Effortless attitude through the seasons</p>
        </div>
    </div>

    <div class=" flex flex-col md:flex-row mt-1 space-x-1">
        <div class="bg-blue-700 w-full  md:w-1/2"><img src="https://calvinklein.scene7.com/is/image/CalvinKlein/21898171_001_main?wid=1487&qlt=80%2C0&resMode=sharp2&op_usm=0.9%2C1.0%2C8%2C0&iccEmbed=0&fmt=webp" alt=""></div>
        <div class="bg-green-700 w-full  md:w-1/2"><img src="https://calvinklein.scene7.com/is/image/CalvinKlein/11002090_501_main?wid=1487&qlt=80%2C0&resMode=sharp2&op_usm=0.9%2C1.0%2C8%2C0&iccEmbed=0&fmt=webp" alt=""></div>
    </div>


    <!-- lg:max-w-7xl -->
    <div class="bg-red">
        <div class="mx-auto max-w-2xl  py-16 sm:py-24 lg:max-w-full">
            <h2 class="text-3xl font-semibold tracking-tight text-gray-900 mb-10 text-center">Customers also purchased</h2>

            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-2">
                @foreach($products as $product)
                <x-product_card :product="$product"></x-product_card>
                @endforeach

                <!-- More products... -->
            </div>

        </div>
        <!-- {{$products->links()}} -->
    </div>

    <div class="flex text-center justify-center items-center h-screen bg-[url('https://www.ralphlauren.com/on/demandware.static/-/Library-Sites-RalphLauren_NA_Library/en_US/v1740913971606/img/202412/20241203-women-polo-pre-spring-plp/1203_w_polo_plp_c01_img.jpg')] bg-cover bg-center mt-1">
        <div class="">
            <h1 class="text-5xl  tracking-tight text-balance text-gray-800 sm:text-7xl">SPRING ENERGY
                <br class="">AMPLIFIED
            </h1>
            <p class="text-3xl font-thin text-gray-600">Signature fits with modern edge. <br> Effortless attitude through the seasons</p>
        </div>
    </div>


    <!-- Newsletter Signup -->
    <!-- <section class="py-12 text-center bg-white">
        <h2 class="text-2xl font-semibold">Stay Updated</h2>
        <p class="text-gray-500">Subscribe to our newsletter for exclusive offers.</p>
        <input type="email" placeholder="Enter your email" class="mt-4 p-2 border rounded-lg">
        <button class="bg-black text-white px-4 py-2 rounded-lg ml-2">Subscribe</button>
    </section> -->

</x-layout>