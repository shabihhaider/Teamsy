@extends('layouts.app')

@section('content')
    <!-- Navbar -->
    <x-navigation />

    <!-- Hero Section -->
    <section class="flex flex-wrap items-center justify-between px-6 py-10 lg:px-16">
        <!-- Text Content -->
        <div class="w-full lg:w-1/2 mb-8 lg:mb-0">
            <h1 class="text-4xl font-bold text-gray-800 mb-4 leading-tight">
                Data to enrich your <br> 
                <span class="text-purple-600 text-5xl sm:text-6xl">online business</span>
            </h1>
            <p class="text-gray-600 mb-6">
                Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.
            </p>
            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="/register" class="px-6 py-3 bg-purple-600 text-white rounded-md shadow-md hover:bg-purple-700 text-center">Start your Free Trial</a>
                <a href="#" class="px-6 py-3 bg-purple-100 text-purple-600 rounded-md hover:bg-purple-200 text-center">Live demo</a>
            </div>
        </div>

        <!-- Image -->
        <div class="w-full lg:w-1/2">
            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDV8fGJ1c2luZXNzJTIwdGVhbXxlbnwwfHx8fDE2ODk5MDM5NjM&ixlib=rb-4.0.3&q=80&w=1080" 
                 alt="Team working" 
                 class="rounded-lg shadow-md">
        </div>
    </section>

    <script>
        // Toggle mobile menu visibility
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
@endsection
