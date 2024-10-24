<x-layout>
    <h2 class="text-3xl font-bold text-center mb-12 mt-12">{{ $product->name }}</h2>
    <div class="flex justify-center">
        <div class="flex flex-col">
            <x-product-card :$product />

            <div class="flex justify-between mt-5 mb-6 items-center">
                <div>
                    <a href="{{ route('products.edit', $product->id) }}" class="rounded-lg border border-transparent font-bold hover:bg-blue-900 bg-blue-800 py-4 px-6 text-sm">Edit</a>
                </div>

                <div>
                    <form action="{{ route('products.destroy', $product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('delete')
    
                        <button class="rounded-lg border border-transparent font-bold hover:bg-red-900 bg-red-800 py-4 px-6 text-sm">Remove</button>
                    </form>
                </div>         
            </div>
        </div>
    </div>
</x-layout>