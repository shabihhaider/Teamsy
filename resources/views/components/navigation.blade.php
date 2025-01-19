<nav class="flex flex-wrap items-center justify-between px-6 py-4 bg-white shadow-md">
    <div class="flex items-center">
        <div class="text-purple-600 font-bold text-lg">Logo</div>
    </div>
    <ul class="hidden md:flex space-x-6 text-gray-600">
        <li><a href="#" class="hover:text-purple-600">Product</a></li>
        <li><a href="#" class="hover:text-purple-600">Features</a></li>
        <li><a href="#" class="hover:text-purple-600">Marketplace</a></li>
        <li><a href="#" class="hover:text-purple-600">Company</a></li>
    </ul>
        @guest
            <a href="/login" class="text-purple-600 hover:underline">Log in</a>
        @endguest

        @auth
            <form action="/logout" method="POST">
                @csrf
                @method('POST')
                <button type="submit" class="text-purple-600 hover:underline">Log out</button>
            </form>
        @endauth

    <!-- Mobile Menu Icon -->
    <div class="block md:hidden">
        <button id="mobileMenuButton" class="text-gray-600 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <ul id="mobileMenu" class="hidden flex-col space-y-4 text-gray-600 md:hidden absolute top-16 right-6 bg-white shadow-md p-4 rounded-lg">
        <li><a href="#" class="hover:text-purple-600">Product</a></li>
        <li><a href="#" class="hover:text-purple-600">Features</a></li>
        <li><a href="#" class="hover:text-purple-600">Marketplace</a></li>
        <li><a href="#" class="hover:text-purple-600">Company</a></li>
        @guest
            <li><a href="/login" class="text-purple-600 hover:underline">Log in</a></li>
        @endguest

        @auth
            <form action="/logout" method="POST">
                @csrf
                @method('POST')
                <button type="submit" class="text-purple-600 hover:underline">Log out</button>
            </form>
        @endauth
    </ul>
</nav>