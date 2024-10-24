<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Farmers Choice</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- TailwindCSS Animations -->
<style>
    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    @keyframes zoomIn {
      0% {
        opacity: 0;
        transform: scale(0.8);
      }
      100% {
        opacity: 1;
        transform: scale(1);
      }
    }
    
    @keyframes bounceIn {
      0% {
        opacity: 0;
        transform: translateY(50px);
      }
      60% {
        opacity: 1;
        transform: translateY(-10px);
      }
      100% {
        transform: translateY(0);
      }
    }
    
    .animate-fade-in-up {
      animation: fadeInUp 1s ease-in-out;
    }
    
    .animate-zoom-in {
      animation: zoomIn 1s ease-in-out;
    }
    
    .animate-bounce-in {
      animation: bounceIn 1s ease-in-out;
    }

    @keyframes fade-in-up {
      0% {
           opacity: 0;
           transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
      }
      .animate-fade-in-up {
          animation: fade-in-up 1s ease-in-out;
      }
</style>

</head>
<body>
    <header>
        <nav class="bg-white shadow-md">
            <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
                <div>
                    <a href="/">
                        <h1 class="text-3xl font-bold">Farmer'sChoice</h1>
                    </a>
                </div>
                <div class="space-x-4">
                    <a href="/products">Home</a>
                    <a href="/all">Store</a>
                    <a href="/products/create">Sell</a>
                    <a href="/about">About</a>
                </div>
                <div class="space-x-4">
                    @guest
                    <a href="/register">SignUp</a>
                    <a href="/login">Login</a>
                    @endguest
    
                    @auth
                    <form action="/logout" method="post">
                        @csrf
                        @method('delete')
    
                        <button>Logout</button>
                    </form>
                    @endauth
                </div>
            </div>
        </nav>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer class="bg-green-800 py-6">
        <div class="max-w-7xl mx-auto px-4 text-center text-white">
            <p>&copy; 2024 Farmer'sChoice. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>
</html>