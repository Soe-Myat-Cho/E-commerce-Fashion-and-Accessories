<x-adminlayout>


    <div class="p-6 w-full">
        <h2 class="text-2xl font-semibold mb-4">Customer List</h2>
        <div class="overflow-x-auto">
            <table class="w-full bg-white shadow-md rounded-sm overflow-hidden">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">Customer ID</th>
                        <th class="py-3 px-4 text-left">Customer Name</th>
                        <th class="py-3 px-4 text-left">Email</th>
                        <th class="py-3 px-4 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="py-3 px-4">{{ $customer->id }}</td>
                        <td class="py-3 px-4">{{ $customer->name }}</td>
                        <td class="py-3 px-4">{{$customer->email}}</td>

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