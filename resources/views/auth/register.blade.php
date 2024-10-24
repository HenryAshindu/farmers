<x-layout>
    <x-page-heading>Register</x-page-heading>

    <div class="flex justify-center items-center min-h-screen bg-gray-900/80" style="background-image:url('https://images.unsplash.com/photo-1484412509196-57eda96981e8?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover; background-position: center;">
        <form action="/register" method="POST" class="backdrop-blur-sm bg-white/10 p-10 rounded-lg shadow-lg w-full max-w-md space-y-6" enctype="multipart/form-data">
            @csrf
            @method("POST")

            <div class="text-center">
                <h2 class="text-3xl font-bold text-white mb-6">Create Your Account</h2>
            </div>

            <!-- Name Field -->
            <div class="text-left">
                <label for="Name" class="block text-lg font-bold text-white mb-2">Name</label>
                <input type="text" name="name" class="bg-gray-100/90 border border-gray-300 rounded-lg px-5 py-4 w-full text-gray-900 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- Email Field -->
            <div class="text-left">
                <label for="Email" class="block text-lg font-bold text-white mb-2">Email</label>
                <input type="email" name="email" class="bg-gray-100/90 border border-gray-300 rounded-lg px-5 py-4 w-full text-gray-900 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- Password Field -->
            <div class="text-left">
                <label for="Password" class="block text-lg font-bold text-white mb-2">Password</label>
                <input type="password" name="password" class="bg-gray-100/90 border border-gray-300 rounded-lg px-5 py-4 w-full text-gray-900 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- Password Confirmation Field -->
            <div class="text-left">
                <label for="Password_confirmation" class="block text-lg font-bold text-white mb-2">Password Confirmation</label>
                <input type="password" name="password_confirmation" class="bg-gray-100/90 border border-gray-300 rounded-lg px-5 py-4 w-full text-gray-900 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <input type="submit" class="w-full rounded-lg border border-transparent font-bold bg-blue-600 py-4 px-8 text-white hover:bg-blue-700 transition-colors" value="Create Account">
            </div>
        </form>
    </div>
</x-layout>
