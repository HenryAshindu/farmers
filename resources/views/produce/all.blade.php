<x-layout>
    <h2 class="text-3xl font-bold text-center mt-10 mb-12">Items</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12 ml-10 mr-10 mx-auto">
        @foreach ($products as $product)
        <x-product-card :$product />
            
        @endforeach
    </div>

    <div class="mt-4 mb-4 flex justify-center">
        <a href="{{ route('products.index') }}" class="text-blue-500 hover:text-blue-800">Back to Home</a>
    </div>
    
</x-layout>