<x-layout>
    <x-page-heading>Login</x-page-heading>
    <div class="flex justify-center items-center min-h-screen bg-gray-900/80" style="background-image:url('https://images.unsplash.com/photo-1518843875459-f738682238a6?q=80&w=1442&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover; background-position: center;">>
        <form action="/login" method="POST" class="backdrop-blur-sm bg-white/10 p-10 rounded-lg shadow-lg w-full max-w-md space-y-6">
            @csrf
            @method("POST")
    
            <div class="text-center flex flex-col">
                <div class="inline-flex items-center">
                    <span class="w-2 h-2 bg-white inline-block"></span>
                    <label for="Email" class="px-5 text-lg font-bold text-white">Email</label>
    
                </div>
                <input type="email" name="email" class="bg-white border-white/10 rounded-xl px-5 py-4 w-full">
            </div>
    
            <div class="text-center flex flex-col">
                <div class="inline-flex items-center">
                    <span class="w-2 h-2 bg-white inline-block"></span>
                    <label for="Password" class="px-5 text-lg font-bold text-white">Password</label>
    
                </div>
                <input type="password" name="password" class="bg-white border-white/10 rounded-xl px-5 py-4 w-full">
            </div>
    
            <div>
                <input type="submit" class="rounded-lg border border-transparent font-bold bg-blue-800 py-4 px-8 text-lg" value="Login">
            </div>
        </form>
    </div>


</x-layout>