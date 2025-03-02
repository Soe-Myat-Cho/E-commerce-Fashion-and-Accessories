<x-adminlayout>


    <div class="p-6 w-full">
        <h2 class="text-2xl font-semibold mb-4">Order List</h2>
        <div class="overflow-x-auto">
            <table class="w-full bg-white shadow-md rounded-sm overflow-hidden">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">Order ID</th>
                        <th class="py-3 px-4 text-left">Customer Name</th>
                        <th class="py-3 px-4 text-left">Status</th>
                        <th class="py-3 px-4 text-left">Total</th>
                        <th class="py-3 px-4 text-left">Shipping Address</th>
                        <th class="py-3 px-4 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="py-3 px-4">{{ $order->id }}</td>
                        <td class="py-3 px-4">{{ $order->user->name }}</td>
                        <td class="py-3 px-4">{{$order->status}}</td>
                        <td class="py-3 px-4">${{$order->total_price}}</td>
                        <td class="py-3 px-4">{{$order->shipping_address}}</td>
                        <td class="py-3 px-4">
                            <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">View</button>
                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>





</x-adminlayout>