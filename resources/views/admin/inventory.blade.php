<x-adminlayout>


    <div class="p-6 w-full">
        <div class="flex justify-between my-4">
            <h2 class="text-2xl font-semibold mb-4">Product List</h2>
            <a href="/admin/product/add" class=" text-gray-900 px-3 py-1 hover:underline">Create a New Product</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full bg-white shadow-md rounded-sm overflow-hidden">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">Product ID</th>
                        <th class="py-3 px-4 text-left">Product Name</th>
                        <!-- <th class="py-3 px-4 text-left">Description</th> -->
                        <th class="py-3 px-4 text-left">Price</th>
                        <th class="py-3 px-4 text-left">Quantity</th>
                        <th class="py-3 px-4 text-left">Discount</th>
                        <th class="py-3 px-4 text-left">Category</th>
                        <th class="py-3 px-4 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="py-3 px-4">{{ $product->id }}</td>
                        <td class="py-3 px-4">{{ $product->name }}</td>
                        <!-- <td class="py-3 px-4">{{ $product->description }}</td> -->
                        <td class="py-3 px-4">${{ $product->price }}</td>
                        <td class="py-3 px-4">{{ $product->quantity }}</td>
                        <td class="py-3 px-4">{{ $product->discount_percentage}}%</td>
                        <td class="py-3 px-4">{{ $product->category->name }}</td>

                        <td class="py-3 px-4 ">
                            <form action="/admin/product/{{ $product->id }}/delete" class="flex space-x-4" method="post">
                                @csrf
                                <a href="/admin/product/{{ $product->id }}/edit" class=" text-gray-900 px-3 py-1 rounded hover:underline">Edit</a>

                                <button class="bg-red-500 text-white px-3 py-1 rounded-sm hover:bg-red-600">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>





</x-adminlayout>