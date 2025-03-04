<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimalist E-Commerce</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-black relative">

    <!-- Navbar -->
    <nav id="navbar"
        class="flex opacity-95 bg-white border-b px-6 py-6 justify-between items-center fixed top-0 w-full transform transition duration-300 ease-in-out z-50">
        <h1 class="text-3xl"><a href="/">Elegance</a></h1>

        <!-- Desktop Menu -->
        <ul class="hidden  md:flex gap-6">
            <li><a href="/" class="hover:text-gray-500">Home</a></li>
            <li><a href="#" class="hover:text-gray-500">Categories</a></li>
            <li><a href="/products" class="hover:text-gray-500">Products</a></li>
            <li><a href="#contact" class="hover:text-gray-500">Contact</a></li>
        </ul>

        <div class="flex items-center gap-4">
            <!-- Cart Icon with Item Count -->
            <a href="/cart" class="relative hover:text-gray-500">
                🛒
                @auth
                @if (Auth::user()->cart?->cart_items->count() > 0)
                <span
                    class="absolute -top-2 -right-3 bg-gray-100 text-gray-900 text-xs font-bold px-2 py-1 rounded-full border-red-900">
                    {{ Auth::user()->cart?->cart_items->count() }}
                </span>
                @endif
                @endauth
            </a>

            @if (!Auth::user())
            <ul class="flex gap-6">
                <li><a href="/sign_up" class="hover:text-gray-500">Sign up</a></li>
                <li><a href="/login" class="hover:text-gray-500">Login</a></li>
            </ul>
            @endif

            @if (Auth::user())
            <div class="flex gap-6">
                <p>Hello, {{ Auth::user()->name }}</p>
                <a href="/logout" class="hover:text-gray-500">Logout</a>
            </div>
            @endif

            <button id="hamburger" class="md:hidden focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                </svg>
            </button>
        </div>
    </nav>

    <div id="mobileMenu" class="bg-white md:hidden opacity-95 fixed top-0 w-full pb-4 transform transition duration-300 ease-in-out z-20">
        <ul class=" flex flex-col items-center mt-20 pt-5 gap-6">
            <li><a href="/" class="hover:text-gray-500">Home</a></li>
            <li><a href="#" class="hover:text-gray-500">Categories</a></li>
            <li><a href="/products" class="hover:text-gray-500">Products</a></li>
            <li><a href="#contact" class="hover:text-gray-500">Contact</a></li>
        </ul>
    </div>




    {{$slot}}

    <button id="scrollTop" class="fixed bottom-5 right-5 bg-white text-black opacity-80 p-3 rounded-full hidden">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
        </svg>
    </button>

    <!-- Footer -->
    <footer id="contact" class="bg-gray-900 text-white text-center p-10">
        <p>&copy; 2025 ShopMinimal. All rights reserved.</p>
    </footer>

    <!-- JavaScript -->
    <script>
        // Hamburger Menu
        const hamburger = document.getElementById("hamburger");
        hamburger.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });

        // Navbar Hide on Scroll
        let lastScrollY = window.scrollY;
        const navbar = document.getElementById("navbar");
        const mobileMenu = document.getElementById("mobileMenu");

        window.addEventListener("scroll", () => {
            if (window.scrollY > lastScrollY) {
                navbar.classList.add("-translate-y-full");
                mobileMenu.classList.add("-translate-x-full");
            } else {
                navbar.classList.remove("-translate-y-full");
                mobileMenu.classList.remove("-translate-x-full");
            }
            lastScrollY = window.scrollY;
        });

        // Scroll to Top Button
        const scrollTopBtn = document.getElementById("scrollTop");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 200) {
                scrollTopBtn.classList.remove("hidden");
            } else {
                scrollTopBtn.classList.add("hidden");
            }
        });

        scrollTopBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>

</body>

</html>