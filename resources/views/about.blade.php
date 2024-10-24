<x-layout>
    <x-page-heading>About Us</x-page-heading>

    <div class="flex justify-center items-center min-h-screen bg-gray-900 text-white py-10" style="background-image: url('https://images.unsplash.com/photo-1513708924815-c8ce3a9d40b1?ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'); background-size: cover; background-position: center;">
        <div class="bg-black/70 backdrop-blur-sm p-10 rounded-lg shadow-lg max-w-4xl text-center">
            <h1 class="text-5xl font-bold mb-6">Our Story</h1>
            <p class="text-lg mb-4 leading-relaxed">
                Welcome to <strong>FarmersChoice</strong>, where nature's bounty meets quality. We are passionate about delivering fresh, organic, and sustainably grown produce straight from our farms to your table. Our mission is to provide you with farm-fresh products that nourish you and your family, while also supporting local farmers.
            </p>
            <p class="text-lg mb-4 leading-relaxed">
                From farm-fresh vegetables and fruits to dairy and grains, we offer a wide variety of high-quality produce for every meal. Each product is carefully sourced to ensure it meets our high standards for sustainability, health, and taste.
            </p>
            <p class="text-lg leading-relaxed">
                At FarmersChoice, we are committed to organic farming practices that protect the environment and promote a healthier lifestyle. We believe in the power of fresh, locally sourced food to enhance both your well-being and the planet's health.
            </p>
            <a href="{{ url('/contact') }}" class="mt-8 inline-block bg-green-600 hover:bg-green-800 text-white py-3 px-6 rounded-lg font-semibold">Get in Touch</a>
        </div>
    </div>
</x-layout>
