<x-layout>
    <div class="min-h-screen bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1583602096973-37ca0307326d?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div class="container mx-auto max-w-lg bg-white rounded-lg shadow-lg p-8 mb-10 opacity-90">
            <h2 class="text-2xl font-bold mb-6 text-center">Add New Proudct Item</h2>

            @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    {{$error}}
                @endforeach
            </ul>
                
            @endif

            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('post')

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium mb-2">Product Name</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Enter product name" required>
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
                    <input type="text" id="description" name="description" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Fresh produce" required>
                </div>

                <div class="mb-4">
                    <label for="price" class="block text-gray-700 font-medium mb-2">Price</label>
                    <input type="text" id="price" name="price" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Ksh." required>
                </div>

                <div class="mb-4">
                    <label for="image" class="block text-gray-700 font-medium mb-2">Image</label>
                    <input type="file" id="image" name="image" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="bg-indigo-600 text-white font-medium py-2 px-4 rounded-lg hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-600">Add Item</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
