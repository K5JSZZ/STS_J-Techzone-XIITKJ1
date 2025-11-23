<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J-Tech Zone | Produk</title>
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-slate-900 to-blue-900 text-white font-sans">


<!-- Navbar -->
<nav class="flex flex-wrap justify-between items-center px-6 md:px-10 py-4 bg-slate-800/40 backdrop-blur-md border-b border-blue-500 shadow-md">
    <div class="flex items-center space-x-3">
        <img src="/img/image__1_-removebg-preview.png" alt="Logo" class="w-10 h-10 md:w-12 md:h-12">
    </div>

    <!-- Menu -->
    <ul class="hidden md:flex space-x-6 lg:space-x-8 text-gray-200 font-medium">
        <li><a href="{{ url('home') }}" class="hover:text-blue-400 transition">Home</a></li>
        <li><a href="#" class="hover:text-blue-400 transition">Produk</a></li>
        <li><a href="#" class="hover:text-blue-400 transition">About Me</a></li>
        <li><a href="#" class="hover:text-blue-400 transition">Contact Me</a></li>
        <li><a href="{{url('shop')}}" class="hover:text-blue-400 transition">Shop</a></li>
    </ul>

    <!-- Profile -->
    <div class="flex items-center space-x-3 mt-3 md:mt-0">
        <div class="w-9 h-9 md:w-10 md:h-10 rounded-full bg-gray-700 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-5 h-5 md:w-6 md:h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.5 19.5a8.25 8.25 0 0115 0" />
            </svg>
        </div>
        <p class="font-semibold text-sm md:text-base">{{ auth()->user()->name }}</p>
    </div>
</nav>

<!-- Produk Grid -->
<main class="px-6 md:px-10 py-8">
    <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

        <!-- Card Template -->
        <div class="relative group bg-[#2C2F33] rounded-2xl overflow-hidden flex flex-col items-center justify-center shadow-lg hover:shadow-blue-500/40 transition-all duration-300 hover:-translate-y-1">
            <div class="w-full h-56 bg-gray-200 flex items-center justify-center relative">
                <img src="img/produk/1.png" alt="Gaming Laptop" class="h-44 object-contain transition-transform duration-300 group-hover:scale-105">
                <!-- Overlay -->
                <div class="absolute inset-0 bg-blue-500/0 group-hover:bg-blue-500/20 transition-all duration-300"></div>
            </div>
            <p class="py-3 text-center font-semibold text-lg text-white drop-shadow group-hover:text-blue-400 transition">Gaming Laptop</p>
        </div>

        <div class="relative group bg-[#2C2F33] rounded-2xl overflow-hidden flex flex-col items-center justify-center shadow-lg hover:shadow-blue-500/40 transition-all duration-300 hover:-translate-y-1">
            <div class="w-full h-56 bg-gray-200 flex items-center justify-center relative">
                <img src="img/produk/2.png" alt="Gaming Smartphone" class="h-44 object-contain transition-transform duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-blue-500/0 group-hover:bg-blue-500/20 transition-all duration-300"></div>
            </div>
            <p class="py-3 text-center font-semibold text-lg text-white drop-shadow group-hover:text-blue-400 transition">Gaming Mouse</p>
        </div>

        <div class="relative group bg-[#2C2F33] rounded-2xl overflow-hidden flex flex-col items-center justify-center shadow-lg hover:shadow-blue-500/40 transition-all duration-300 hover:-translate-y-1">
            <div class="w-full h-56 bg-gray-200 flex items-center justify-center relative">
                <img src="img/produk/3.png" alt="Speakers" class="h-44 object-contain transition-transform duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-blue-500/0 group-hover:bg-blue-500/20 transition-all duration-300"></div>
            </div>
            <p class="py-3 text-center font-semibold text-lg text-white drop-shadow group-hover:text-blue-400 transition">Speakers</p>
        </div>

        <div class="relative group bg-[#2C2F33] rounded-2xl overflow-hidden flex flex-col items-center justify-center shadow-lg hover:shadow-blue-500/40 transition-all duration-300 hover:-translate-y-1">
            <div class="w-full h-56 bg-gray-200 flex items-center justify-center relative">
                <img src="img/produk/4.png" alt="Gaming Chair" class="h-44 object-contain transition-transform duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-blue-500/0 group-hover:bg-blue-500/20 transition-all duration-300"></div>
            </div>
            <p class="py-3 text-center font-semibold text-lg text-white drop-shadow group-hover:text-blue-400 transition">Gaming Chair</p>
        </div>

        <div class="relative group bg-[#2C2F33] rounded-2xl overflow-hidden flex flex-col items-center justify-center shadow-lg hover:shadow-blue-500/40 transition-all duration-300 hover:-translate-y-1">
            <div class="w-full h-56 bg-gray-200 flex items-center justify-center relative">
                <img src="img/produk/5.png" alt="Gaming Chair" class="h-44 object-contain transition-transform duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-blue-500/0 group-hover:bg-blue-500/20 transition-all duration-300"></div>
            </div>
            <p class="py-3 text-center font-semibold text-lg text-white drop-shadow group-hover:text-blue-400 transition">Game Console</p>
        </div>

        <div class="relative group bg-[#2C2F33] rounded-2xl overflow-hidden flex flex-col items-center justify-center shadow-lg hover:shadow-blue-500/40 transition-all duration-300 hover:-translate-y-1">
            <div class="w-full h-56 bg-gray-200 flex items-center justify-center relative">
                <img src="img/produk/6.png" alt="Gaming Chair" class="h-44 object-contain transition-transform duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-blue-500/0 group-hover:bg-blue-500/20 transition-all duration-300"></div>
            </div>
            <p class="py-3 text-center font-semibold text-lg text-white drop-shadow group-hover:text-blue-400 transition">Microphone</p>
        </div>

        <div class="relative group bg-[#2C2F33] rounded-2xl overflow-hidden flex flex-col items-center justify-center shadow-lg hover:shadow-blue-500/40 transition-all duration-300 hover:-translate-y-1">
            <div class="w-full h-56 bg-gray-200 flex items-center justify-center relative">
                <img src="img/produk/7.png" alt="Gaming Chair" class="h-44 object-contain transition-transform duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-blue-500/0 group-hover:bg-blue-500/20 transition-all duration-300"></div>
            </div>
            <p class="py-3 text-center font-semibold text-lg text-white drop-shadow group-hover:text-blue-400 transition">PS</p>
        </div>

        <div class="relative group bg-[#2C2F33] rounded-2xl overflow-hidden flex flex-col items-center justify-center shadow-lg hover:shadow-blue-500/40 transition-all duration-300 hover:-translate-y-1">
            <div class="w-full h-56 bg-gray-200 flex items-center justify-center relative">
                <img src="img/produk/8.png" alt="Gaming Chair" class="h-44 object-contain transition-transform duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-blue-500/0 group-hover:bg-blue-500/20 transition-all duration-300"></div>
            </div>
            <p class="py-3 text-center font-semibold text-lg text-white drop-shadow group-hover:text-blue-400 transition">Headphones</p>
        </div>

        <div class="relative group bg-[#2C2F33] rounded-2xl overflow-hidden flex flex-col items-center justify-center shadow-lg hover:shadow-blue-500/40 transition-all duration-300 hover:-translate-y-1">
            <div class="w-full h-56 bg-gray-200 flex items-center justify-center relative">
                <img src="img/produk/9.png" alt="Gaming Chair" class="h-44 object-contain transition-transform duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-blue-500/0 group-hover:bg-blue-500/20 transition-all duration-300"></div>
            </div>
            <p class="py-3 text-center font-semibold text-lg text-white drop-shadow group-hover:text-blue-400 transition">Gaming Smartphone</p>
        </div>

        <div class="relative group bg-[#2C2F33] rounded-2xl overflow-hidden flex flex-col items-center justify-center shadow-lg hover:shadow-blue-500/40 transition-all duration-300 hover:-translate-y-1">
            <div class="w-full h-56 bg-gray-200 flex items-center justify-center relative">
                <img src="img/produk/10.png" alt="Gaming Chair" class="h-44 object-contain transition-transform duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-blue-500/0 group-hover:bg-blue-500/20 transition-all duration-300"></div>
            </div>
            <p class="py-3 text-center font-semibold text-lg text-white drop-shadow group-hover:text-blue-400 transition">CPU</p>
        </div>

        <div class="relative group bg-[#2C2F33] rounded-2xl overflow-hidden flex flex-col items-center justify-center shadow-lg hover:shadow-blue-500/40 transition-all duration-300 hover:-translate-y-1">
            <div class="w-full h-56 bg-gray-200 flex items-center justify-center relative">
                <img src="img/produk/11.png" alt="Gaming Chair" class="h-44 object-contain transition-transform duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-blue-500/0 group-hover:bg-blue-500/20 transition-all duration-300"></div>
            </div>
            <p class="py-3 text-center font-semibold text-lg text-white drop-shadow group-hover:text-blue-400 transition">Keyboard</p>
        </div>

        <div class="relative group bg-[#2C2F33] rounded-2xl overflow-hidden flex flex-col items-center justify-center shadow-lg hover:shadow-blue-500/40 transition-all duration-300 hover:-translate-y-1">
            <div class="w-full h-56 bg-gray-200 flex items-center justify-center relative">
                <img src="img/produk/12.png" alt="Gaming Chair" class="h-44 object-contain transition-transform duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-blue-500/0 group-hover:bg-blue-500/20 transition-all duration-300"></div>
            </div>
            <p class="py-3 text-center font-semibold text-lg text-white drop-shadow group-hover:text-blue-400 transition">Monitor</p>
        </div>

        <div class="relative group bg-[#2C2F33] rounded-2xl overflow-hidden flex flex-col items-center justify-center shadow-lg hover:shadow-blue-500/40 transition-all duration-300 hover:-translate-y-1">
            <div class="w-full h-56 bg-gray-200 flex items-center justify-center relative">
                <img src="img/produk/13.png" alt="Gaming Chair" class="h-44 object-contain transition-transform duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-blue-500/0 group-hover:bg-blue-500/20 transition-all duration-300"></div>
            </div>
            <p class="py-3 text-center font-semibold text-lg text-white drop-shadow group-hover:text-blue-400 transition">Webcam</p>
        </div>

        <div class="relative group bg-[#2C2F33] rounded-2xl overflow-hidden flex flex-col items-center justify-center shadow-lg hover:shadow-blue-500/40 transition-all duration-300 hover:-translate-y-1">
            <div class="w-full h-56 bg-gray-200 flex items-center justify-center relative">
                <img src="img/produk/14.png" alt="Gaming Chair" class="h-44 object-contain transition-transform duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-blue-500/0 group-hover:bg-blue-500/20 transition-all duration-300"></div>
            </div>
            <p class="py-3 text-center font-semibold text-lg text-white drop-shadow group-hover:text-blue-400 transition">Mouse Pad</p>
        </div>

        <div class="relative group bg-[#2C2F33] rounded-2xl overflow-hidden flex flex-col items-center justify-center shadow-lg hover:shadow-blue-500/40 transition-all duration-300 hover:-translate-y-1">
            <div class="w-full h-56 bg-gray-200 flex items-center justify-center relative">
                <img src="img/produk/15.png" alt="Gaming Chair" class="h-44 object-contain transition-transform duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-blue-500/0 group-hover:bg-blue-500/20 transition-all duration-300"></div>
            </div>
            <p class="py-3 text-center font-semibold text-lg text-white drop-shadow group-hover:text-blue-400 transition">Gaming Desk</p>
        </div>

        <div class="relative group bg-[#2C2F33] rounded-2xl overflow-hidden flex flex-col items-center justify-center shadow-lg hover:shadow-blue-500/40 transition-all duration-300 hover:-translate-y-1">
            <div class="w-full h-56 bg-gray-200 flex items-center justify-center relative">
                <img src="img/produk/16.png" alt="Gaming Chair" class="h-44 object-contain transition-transform duration-300 group-hover:scale-105">
                <div class="absolute inset-0 bg-blue-500/0 group-hover:bg-blue-500/20 transition-all duration-300"></div>
            </div>
            <p class="py-3 text-center font-semibold text-lg text-white drop-shadow group-hover:text-blue-400 transition">VR Headphones</p>
        </div>

    </div>
</main>
</body>
</html>
