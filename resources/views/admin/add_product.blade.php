<x-adminlayout>

    <div class=" w-full">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Create a new product</h2>
        </div>

        <div class=" sm:mx-auto sm:w-full sm:max-w-sm pb-10">
            <form class="space-y-6" action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Name</label>
                    <div class="mt-2">
                        <input type="text" name="name" id="name" required class="border block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-gray-700 sm:text-sm/6">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Description</label>
                    <div class="mt-2">
                        <input type="text" name="description" id="description" autocomplete="description" required class="border block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-gray-700 sm:text-sm/6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="price" class="block text-sm/6 font-medium text-gray-900">Price</label>

                    </div>
                    <div class="mt-2">
                        <input type="text" name="price" id="price" autocomplete="current-price" required class="border block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-gray-700 sm:text-sm/6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="quantity" class="block text-sm/6 font-medium text-gray-900">Quantity</label>

                    </div>
                    <div class="mt-2">
                        <input type="text" name="quantity" id="quantity" autocomplete="current-quantity" required class="border block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-gray-700 sm:text-sm/6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="image" class="block text-sm/6 font-medium text-gray-900">Product Image</label>
                    </div>
                    <div class="mt-2">
                        <input type="file" name="image" id="image" required class="border block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-gray-700 sm:text-sm/6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="quantity" class="block text-sm/6 font-medium text-gray-900">Discount Percentage</label>
                    </div>
                    <div class="mt-2">
                        <input type="text" name="discount_percentage" id="discount_percentage" autocomplete="current-discount_percentage" required class="border block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-gray-700 sm:text-sm/6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="category" class="block text-sm/6 font-medium text-gray-900">Category</label>
                    </div>
                    <div class="mt-2">
                        <select name="category" id="category" class="border block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-gray-700 sm:text-sm/6">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}" class="">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-gray-800 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-gray-900 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign up</button>
                </div>
            </form>


        </div>
    </div>
</x-adminlayout>