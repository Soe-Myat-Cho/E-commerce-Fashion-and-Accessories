<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen bg-gray-100 ">
    <div class="flex h-full    ">
        <!-- Sidebar -->
        <nav class="w-64 bg-gray-800 text-white p-5  ">
            <h1 class="text-2xl font-bold mb-6">Admin Panel</h1>
            <ul>
                <li class="mb-4"><a href="/admin/dashboard" class="block p-2 rounded hover:bg-gray-300 hover:text-gray-800">Dashboard</a></li>
                <li class="mb-4"><a href="/admin/order_list" class="block p-2 rounded hover:bg-gray-300 hover:text-gray-800">Orders</a></li>
                <li class="mb-4"><a href="/admin/inventory" class="block p-2 rounded hover:bg-gray-300 hover:text-gray-800">Inventory</a></li>
                <li class="mb-4"><a href="/admin/customers" class="block p-2 rounded hover:bg-gray-300 hover:text-gray-800">Customers</a></li>
            </ul>
        </nav>

        {{$slot}}
    </div>
</body>

</html>