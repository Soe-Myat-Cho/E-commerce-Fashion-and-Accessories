<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimalist E-Commerce</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-white shadow-md px-6 py-8 flex justify-between items-center fixed top-0 w-full">
        <h1 class="text-3xl font-semibold "><a href="/">Elegance</a></h1>
        <ul class="flex gap-6">
            <li><a href="/" class="hover:text-gray-500">Home</a></li>
            <li><a href="#" class="hover:text-gray-500">Categories</a></li>
            <li><a href="/products" class="hover:text-gray-500">Products</a></li>
            <li><a href="#contact" class="hover:text-gray-500">Contact</a></li>

        </ul>
        @if (!Auth::user())
        <ul class="flex gap-6">
            <li><a href="/sign_up" class="hover:text-gray-500">Sign up</a></li>
            <li><a href="/login" class="hover:text-gray-500">Login</a></li>
        </ul>
        @endif

        @if (Auth::user())
        <div class="flex gap-10">
            <p>Hello, {{Auth::user()->name}}</p>
            <a href="/logout" class="hover:text-gray-500">Logout</a>
        </div>
        @endif

    </nav>


    {{$slot}}

    <!-- Footer -->
    <footer id="contact" class="bg-gray-900 text-white text-center p-10 ">
        <p>& copy; 2025 ShopMinimal. All rights reserved.</p>
    </footer>

</body>

</html>