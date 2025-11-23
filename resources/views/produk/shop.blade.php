<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>J-Tech Zone Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .scrollbar-hide::-webkit-scrollbar { display: none; }
        .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-900 to-gray-800 text-white min-h-screen font-[Roboto]">


<nav class="flex items-center justify-between px-6 md:px-10 py-5 relative">
    <div class="flex items-center space-x-2">
        <img src="img/image__1_-removebg-preview.png" alt="Logo" class="h-16 w-16 md:h-20 md:w-20">
    </div>

    <ul id="menu" class="hidden md:flex space-x-8 text-gray-200">
        <li><a href="{{url('home')}}" class="hover:text-white">Home</a></li>
        <li><a href="{{url('produk')}}" class="hover:text-white">Produk</a></li>
        <li><a href="#" class="hover:text-white">About Me</a></li>
        <li><a href="#" class="hover:text-white">Contact Me</a></li>
        <li><a href="#" class="hover:text-white">Shop</a></li>
    </ul>


    <div class="flex items-center space-x-3 mt-3 md:mt-0">
        <div class="w-9 h-9 md:w-10 md:h-10 rounded-full bg-gray-700 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-5 h-5 md:w-6 md:h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.5 19.5a8.25 8.25 0 0115 0" />
            </svg>
        </div>
        <p class="font-semibold text-sm md:text-base">{{ auth()->user()->name }}</p>
    </div>

    <button id="menu-btn" class="md:hidden text-white focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>


    <div id="mobile-menu" class="absolute top-full left-0 w-full bg-gray-900 text-gray-300 flex-col space-y-3 p-5 hidden md:hidden z-50">
        <a href="#" class="block hover:text-white">Home</a>
        <a href="#" class="block hover:text-white">Produk</a>
        <a href="#" class="block hover:text-white">About Me</a>
        <a href="#" class="block hover:text-white">Contact Me</a>
        <a href="#" class="block hover:text-white">Shop</a>
        <hr class="border-gray-700">
        <div class="flex items-center space-x-3">
            <div class="bg-gray-600 rounded-full h-10 w-10 flex items-center justify-center">
                <span class="text-sm font-medium">J</span>
            </div>
            <p class="font-semibold">{{ auth()->user()->name }}</p>
        </div>
    </div>
</nav>


<div class="flex flex-col md:flex-row md:items-center md:justify-between px-6 md:px-10 py-4 space-y-4 md:space-y-0 gap-5">

    <div class="flex overflow-x-auto space-x-3 scrollbar-hide">
        <button class="bg-[#3b3f70] px-14 md:px-14 py-2 rounded-full whitespace-nowrap hover:bg-[#4b4f80] text-sm md:text-base">Highest Rating</button>
        <button class="bg-[#3b3f70] px-14 md:px-14 py-2 rounded-full whitespace-nowrap hover:bg-[#4b4f80] text-sm md:text-base">Trending</button>
        <button class="bg-[#3b3f70] px-14 md:px-14 py-2 rounded-full whitespace-nowrap hover:bg-[#4b4f80] text-sm md:text-base">Lowest Price</button>
        <button class="bg-[#3b3f70] px-14 md:px-14 py-2 rounded-full whitespace-nowrap hover:bg-[#4b4f80] text-sm md:text-base">Highest Price</button>
        <button class="bg-[#3b3f70] px-14 md:px-14 py-2 rounded-full whitespace-nowrap hover:bg-[#4b4f80] text-sm md:text-base">Discount</button>
    </div>


    <div class="flex items-center space-x-3 w-full md:w-[400px] lg:w-[500px]">
        <button class="p-3 rounded-full flex items-center justify-center ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h18M6 12h12M9 20h6" />
            </svg>
        </button>

        <div class="flex items-center bg-[#3b3f70] px-4 py-2 rounded-full flex-1">
            <form action="{{ url('shop') }}" method="GET" class="flex items-center bg-[#3b3f70] px-4 py-2 rounded-full flex-1">
                <input type="text" name="search" placeholder="Search"
                       value="{{ request('search') }}"
                       class="bg-transparent focus:outline-none text-sm text-gray-200 flex-1 placeholder-gray-300">

                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </form>
        </div>
    </div>
</div>

<section class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5 md:gap-8 px-6 md:px-10 py-6">
    <?php foreach ($products as $product): ?>
    <div class="bg-gray-800 rounded-2xl shadow-lg flex flex-col overflow-hidden">

        <!-- Fixed height gambar -->
        <div class="w-full h-56 md:h-64 lg:h-64">
            <a href="{{ route('shop.detail', $product->id) }}">
                <img src="{{ asset('storage/' . $product->image) }}" class="w-full h-full object-cover">
            </a>
        </div>

        <!-- FIX: konten diberi min-height agar semua card sama tinggi -->
        <div class="p-4 flex flex-col flex-1 min-h-[180px] justify-between">

            <div>
                <div class="flex justify-between items-start">
                    <h2 class="font-semibold text-lg text-white leading-tight line-clamp-2">
                            <?= $product->name; ?>
                    </h2>
                    <button class="text-gray-400 hover:text-pink-500 mt-1">
                        <i class='text-2xl bxr bx-heart'></i>
                    </button>
                </div>

                <p class="text-gray-300 mt-2">
                    Rp <?= number_format($product->price, 0, ',', '.'); ?>
                </p>
            </div>

            <form action="{{ route('profile-user.cart.add') }}" method="POST" class="mt-4">
                @csrf
                <input type="hidden" name="product_id" value="<?= $product->id ?>">

                <button
                    class="w-full bg-purple-600 hover:bg-purple-700 text-white py-2.5 rounded-xl font-semibold
               transition duration-300 shadow-md hover:shadow-purple-500/30">
                    Add to Cart
                </button>
            </form>

        </div>
    </div>
    <?php endforeach; ?>
</section>

@if(session('success'))
    <div id="popup-success"
         class="fixed top-5 right-5 bg-green-600 text-white px-6 py-4 rounded-xl shadow-lg flex items-center space-x-3 animate-slide">

        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M5 13l4 4L19 7" />
        </svg>

        <span>{{ session('success') }}</span>
    </div>

    <script>
        setTimeout(() => {
            document.getElementById('popup-success').style.opacity = '0';
            document.getElementById('popup-success').style.transition = '0.5s';
        }, 2000); // hilang setelah 2 detik
    </script>

    <style>
        @keyframes slide {
            from { transform: translateX(50px); opacity: 0; }
            to   { transform: translateX(0); opacity: 1; }
        }
        .animate-slide {
            animation: slide 0.4s ease-out;
        }
    </style>
@endif







<script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

</body>
</html>
