<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Gaming Elektronik</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">


<header class="fixed w-full z-50 bg-gradient-to-r from-indigo-700 via-purple-700 to-pink-700 shadow-md">
    <nav class="max-w-7xl mx-auto px-6 lg:px-10 flex items-center justify-between h-16">


        <div class="flex items-center">
            <a href="#" class="flex items-center space-x-2">
                <img src="/img/image__1_-removebg-preview.png" alt="Logo" class="h-10 w-auto">
                <span class="text-white font-bold text-xl tracking-wide">J-Tech Zone</span>
            </a>
        </div>


        <div class="hidden lg:flex space-x-8">
            <a href="#" class="relative text-white font-medium group">
                Home
                <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-yellow-400 transition-all group-hover:w-full"></span>
            </a>
            <a href="#" class="relative text-white font-medium group">
                About Me
                <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-yellow-400 transition-all group-hover:w-full"></span>
            </a>
            <a href="{{ url('shop') }}" class="relative text-white font-medium group">
                Shop
                <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-yellow-400 transition-all group-hover:w-full"></span>
            </a>
            <a href="#" class="relative text-white font-medium group">
                Contact Me
                <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-yellow-400 transition-all group-hover:w-full"></span>
            </a>
            <a href="#" class="relative text-white font-medium group">
                Merchant
                <span class="absolute left-0 bottom-0 w-0 h-[2px] bg-yellow-400 transition-all group-hover:w-full"></span>
            </a>
        </div>


        <div class="hidden lg:flex space-x-4">
            <a href="{{url('login')}}" class="px-4 py-2 bg-white/90 text-indigo-700 font-semibold rounded-xl shadow hover:bg-yellow-400 hover:text-black transition">
                Log in
            </a>
            <a href="{{url('SignUp')}}" class="px-4 py-2 bg-yellow-400 text-black font-semibold rounded-xl shadow hover:bg-white hover:text-indigo-700 transition">
                Sign Up
            </a>
        </div>

        <div class="lg:hidden">
            <button id="menuBtn" class="text-white focus:outline-none">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </nav>

    <div id="mobileMenu" class="lg:hidden hidden bg-gradient-to-r from-indigo-800 via-purple-800 to-pink-800 px-6 py-4 space-y-3">
        <a href="#" class="block text-white font-medium hover:text-yellow-300">Home</a>
        <a href="#" class="block text-white font-medium hover:text-yellow-300">About Me</a>
        <a href="{{ url('shop') }}" class="block text-white font-medium hover:text-yellow-300">Shop</a>
        <a href="#" class="block text-white font-medium hover:text-yellow-300">Contact Me</a>
        <a href="#" class="block text-white font-medium hover:text-yellow-300">Merchant</a>
        <div class="flex space-x-3 pt-3">
            <a href="{{url('login')}}" class="flex-1 text-center bg-white text-indigo-700 px-4 py-2 rounded-lg font-semibold hover:bg-yellow-300 hover:text-black transition">Log in</a>
            <a href="{{url('SignUp')}}" class="flex-1 text-center bg-yellow-400 text-black px-4 py-2 rounded-lg font-semibold hover:bg-white hover:text-indigo-700 transition">Sign Up</a>
        </div>
    </div>
</header>


<section class="max-w-7xl mx-auto px-6 py-10 pt-28">
    <div class="text-center mb-6">
        <h1 class="text-4xl font-extrabold text-indigo-700 tracking-wide">J-Tech Zone</h1>
        <p class="text-gray-600 text-lg">Welcome back! To My Store This Website Can Make You Enjoy It.</p>
    </div>


    <div class="flex flex-wrap justify-center gap-3 mb-8">
        <button class="filter-btn bg-blue-600 text-white px-5 py-2 rounded-xl text-sm shadow-md hover:bg-blue-700 transition" data-filter="all">Semua</button>
        <button class="filter-btn bg-gray-200 text-gray-800 px-5 py-2 rounded-xl text-sm shadow hover:bg-gray-300 transition" data-filter="laptop">Laptop</button>
        <button class="filter-btn bg-gray-200 text-gray-800 px-5 py-2 rounded-xl text-sm shadow hover:bg-gray-300 transition" data-filter="handphone">Handphone & Tablet</button>
        <button class="filter-btn bg-gray-200 text-gray-800 px-5 py-2 rounded-xl text-sm shadow hover:bg-gray-300 transition" data-filter="pc">AIO & Desktop PC</button>
        <button class="filter-btn bg-gray-200 text-gray-800 px-5 py-2 rounded-xl text-sm shadow hover:bg-gray-300 transition" data-filter="mini-pc">Mini PC</button>
        <button class="filter-btn bg-gray-200 text-gray-800 px-5 py-2 rounded-xl text-sm shadow hover:bg-gray-300 transition" data-filter="monitor">PC Monitor</button>
        <button class="filter-btn bg-gray-200 text-gray-800 px-5 py-2 rounded-xl text-sm shadow hover:bg-gray-300 transition" data-filter="networking">Networking</button>
        <button class="filter-btn bg-gray-200 text-gray-800 px-5 py-2 rounded-xl text-sm shadow hover:bg-gray-300 transition" data-filter="smartwatch">Smartwatch</button>
    </div>


    <div id="productGrid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach($products as $p)
            <div class="product-card {{ $p['category'] }} bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 flex flex-col border border-gray-100">

                <div class="relative">
                    <img src="{{ asset($p['image']) }}" alt="{{ $p['name'] }}"
                         class="w-full aspect-[4/3] object-contain bg-gray-50">
                    @if($p['discount'])
                        <span class="absolute top-3 left-3 bg-red-500 text-white text-xs px-2 py-1 rounded-md shadow">
              {{ $p['discount'] }}
            </span>
                    @endif
                </div>

                <div class="p-5 flex flex-col justify-between flex-1">
                    <div class="space-y-2">
                        <h3 class="font-semibold text-lg text-gray-800">{{ $p['name'] }}</h3>
                        <p class="text-sm text-gray-500 line-clamp-3">{{ $p['desc'] }}</p>
                        <p class="text-sm text-gray-400">📍 {{ $p['location'] }}</p>


                        <div>
            <span class="text-xl font-bold text-indigo-600">
                Rp {{ number_format($p['price'], 0, ',', '.') }}
            </span>
                            @if($p['old_price'])
                                <span class="text-sm text-gray-400 line-through ml-2">
                    Rp {{ number_format($p['old_price'], 0, ',', '.') }}
                </span>
                            @endif
                        </div>


                        <p class="text-sm text-yellow-500">{{ $p['rating'] }}</p>
                    </div>


                    <a href="{{ route('shop.detail', $p['id']) }}"
                       class="mt-auto bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 text-sm transition text-center block">
                        Beli Sekarang
                    </a>
                </div>

            </div>
        @endforeach
    </div>
</section>

<script>

    document.getElementById("menuBtn").addEventListener("click", () => {
        document.getElementById("mobileMenu").classList.toggle("hidden");
    });

    const filterBtns = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('.product-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.getAttribute('data-filter');


            filterBtns.forEach(b => {
                b.classList.remove('bg-blue-600', 'text-white');
                b.classList.add('bg-gray-200', 'text-gray-800');
            });
            btn.classList.add('bg-blue-600', 'text-white');
            btn.classList.remove('bg-gray-200', 'text-gray-800');


            productCards.forEach(card => {
                if (filter === 'all' || card.classList.contains(filter)) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

</script>

</body>
</html>
