@section('title', 'Create a new account')

<div class="flex gap-10 items-center justify-center bg-gray-50 overflow-hidden">
    <!-- Form Section -->
    <div class="w-full max-w-md p-8 space-y-8">
        <div>
            <!-- Logo -->
            <div class="flex justify-center">
                <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3.172 7.828a4 4 0 015.656 0 4 4 0 010 5.656 4 4 0 01-5.656 0 4 4 0 010-5.656zm9.9-4.95a4 4 0 015.656 0 4 4 0 010 5.656 4 4 0 01-5.656 0 4 4 0 010-5.656zM3.515 3.515a8 8 0 0112.97 0l1.414 1.414a8 8 0 01-12.97 0L3.515 3.515z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>

            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Start your free trial</h2>
        </div>
        {{$errors}}
        <!-- Sign Up Form -->
        <form wire:submit.prevent="register" class="mt-8 space-y-6">
            <div class="rounded-md shadow-sm space-y-4">
                <!-- Name -->
                <div>
                    <label for="name" class="sr-only">Name</label>
                    <input 
                        wire:model="name"
                        id="name" name="name" type="text" required
                        class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm"
                        placeholder="Name">
                </div>
                <!-- Company Name -->
                <div>
                    <label for="company" class="sr-only">Company Name</label>
                    <input 
                        wire:model="company"
                        id="company" name="company" type="text" required
                        class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm"
                        placeholder="Company Name">
                </div>
                <!-- Email -->
                <div>
                    <label for="email" class="sr-only">Email address</label>
                    <input 
                        wire:model="email"
                        id="email" name="email" type="email" required
                        class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm"
                        placeholder="Email address">
                </div>
                <!-- Password -->
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input 
                        wire:model="password"
                        id="password" name="password" type="password" required
                        class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm"
                        placeholder="Password">
                </div>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                    Register
                </button>
            </div>
        </form>
    </div>

    <!-- Image Section -->
    <div class="h-full flex-grow hidden md:block">
        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDV8fGJ1c2luZXNzJTIwdGVhbXxlbnwwfHx8fDE2ODk5MDM5NjM&ixlib=rb-4.0.3&q=80&w=1080" 
        alt="Team working" 
        class="object-cover h-full w-full rounded-lg shadow-md">
    </div>

</div>
