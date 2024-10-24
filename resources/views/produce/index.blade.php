<x-layout>
     <!-- Hero Section -->
     <section id="home" class="relative bg-cover bg-center h-screen" style="background-image: url('https://images.unsplash.com/photo-1686544304690-ba900c182d9b?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white animate-fade-in-up">
                <h1 class="text-5xl font-bold mb-4 animate-zoom-in">Fresh from the Farm</h1>
                <p class="text-lg mb-8">Organic, fresh, and locally sourced produce for you and your family</p>
                <a href="/all" class="bg-green-600 hover:bg-green-800 text-white py-2 px-4 rounded-lg animate-bounce-in">View Store</a>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section id="shop" class="py-16">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Featured Produce</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Product Card 1 -->
              @foreach ($products as $product)
              <x-product-card :$product />
                  
              @endforeach
            </div>
        </div>

        <div class="mt-10 flex justify-center">
            <a href="/all">
                <button class="border rounded-lg bg-green-600 hover:bg-green-700 text-lg font-semibold py-4 px-6">See All</button>
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 relative overflow-hidden">
        <div class="swiper-container absolute inset-0 z-0 ">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1518977676601-b53f82aba655?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-full object-cover" alt="Slide 1">
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1561136594-7f68413baa99?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-full object-cover" alt="Slide 2">
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1537083681558-49d9af1ed25c?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-full object-cover" alt="Slide 3">
                </div>
            </div>
        </div>
    
        <div class="relative z-10 max-w-7xl mx-auto px-4 text-center text-white">
            <h2 class="text-4xl font-bold mb-4">About Us</h2>
            <p class="text-lg">
                At Farm Produce Store, we are committed to delivering the freshest, most organic produce directly from the farm to your table. Our mission is to support sustainable farming while providing our customers with healthy and nutritious options.
                Our mission is to provide a healthy living to our customers to our customers.
            </p>
        </div>
    
        <!-- Add swiper pagination and navigation buttons -->
        <div class="swiper-pagination z-10"></div>
        <div class="swiper-button-next z-10"></div>
        <div class="swiper-button-prev z-10"></div>
    </section>

    <!-- Contact Section -->
<section id="contact" class="relative py-16">
    <div class="absolute inset-0">
        <iframe 
            class="w-full h-full" 
            src="https://www.youtube.com/embed/Vagc5qqm1_o?autoplay=1&mute=1&loop=1&playlist=Vagc5qqm1_o" 
            frameborder="0" 
            allow="autoplay; encrypted-media" 
            allowfullscreen
            style="pointer-events: none;"  <!-- This will disable all interactions -->
        ></iframe>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 text-center bg-black bg-opacity-50 p-8 rounded-lg">
        <h2 class="text-3xl font-bold mb-4 text-white">Get in Touch</h2>
        <p class="text-gray-300">Have any questions? Feel free to reach out to us at <a href="mailto:info@farmproducestore.com" class="text-green-400 hover:underline">info@farmproducestore.com</a>.</p>
    </div>
</section>


      
</x-layout>

<script>
    var swiper = new Swiper('.swiper-container', {
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>