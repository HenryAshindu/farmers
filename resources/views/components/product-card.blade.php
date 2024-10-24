<div class="bg-white shadow-[10px_10px_0_#3b3837] rounded-lg overflow-hidden group">
    <img class="w-full h-48 object-cover" src="{{ asset('storage/' . $product->image)}}" alt="{{ $product->name }}">
    <div class="p-4">
        <h3 class="group-hover:text-blue-900 text-lg font-semibold">{{ $product->name }}</h3>
        <p class="text-gray-500">{{ $product->description }}</p>
        <div class="mt-3 flex justify-between items-center">
            <span class="text-xl font-bold text-gray-800">Ksh. {{ $product->price }} / kg</span>
            <a href="{{ route('products.show', $product->id)}}" class="text-green-600 hover:text-green-800">View Details</a>
        </div>
    </div>
</div>