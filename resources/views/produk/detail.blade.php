<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Product Detail</title>
</head>
<body class="bg-gradient-to-br from-gray-900 to-gray-800 text-white min-h-screen">

<!-- Navbar -->
<nav class="w-full bg-white/10 backdrop-blur-lg border-b border-white/20 fixed top-0 left-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <img src="/logo.png" class="w-10 h-10" alt="Logo" />
            <span class="text-white font-semibold text-lg">J-Tech Zone</span>
        </div>

        <ul class="hidden md:flex items-center gap-8 text-white/80 font-medium">
            <li><a href="{{url('home')}}" class="hover:text-white transition">Home</a></li>
            <li><a href="{{url('produk')}}" class="hover:text-white transition">Product</a></li>
            <li><a href="/about" class="hover:text-white transition">About Me</a></li>
            <li><a href="/contact" class="hover:text-white transition">Contact Me</a></li>
            <li><a href="{{url('shop')}}" class="hover:text-white transition">Shop</a></li>
        </ul>
        <div class="flex items-center gap-3">
            <span class="text-white/90 font-medium hidden md:block">{{ auth()->user()->name ?? 'Guest' }}</span>
            <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center text-white">
                <i class="bx bx-user text-xl"></i>
            </div>
        </div>
    </div>
</nav>



<div class="pt-24">
    <body class="bg-gradient-to-br from-gray-900 to-gray-800 text-white min-h-screen">

    <div class="max-w-7xl mx-auto px-4 py-10">

        <!-- GRID -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

            <!-- LEFT IMAGES -->
            <div class="flex gap-4">

                <!-- Thumbnails -->
                <div class="flex flex-col gap-4">
                    <img src="{{ asset('storage/' . $product->image) }}" class="w-24 h-24 rounded-xl object-cover cursor-pointer opacity-80 hover:opacity-100 transition" />
                    <img src="{{ asset('storage/' . $product->image) }}" class="w-24 h-24 rounded-xl object-cover cursor-pointer opacity-80 hover:opacity-100 transition" />
                    <img src="{{ asset('storage/' . $product->image) }}" class="w-24 h-24 rounded-xl object-cover cursor-pointer opacity-80 hover:opacity-100 transition" />
                </div>

                <!-- Main Image -->
                <div class="flex-1">
                    <img src="{{ asset('storage/' . $product->image) }}" class="w-full rounded-2xl object-cover shadow-2xl" />
                </div>

            </div>

            <!-- RIGHT DETAIL -->
            <div class="flex flex-col justify-between">

                <div>
                    <h1 class="text-4xl font-bold mb-3">{{ $product->name }}</h1>

                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-yellow-400 text-xl">★★★★★</span>
                        <span class="text-gray-300">4.5/5</span>
                    </div>

                    <p class="text-3xl font-semibold mb-4">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </p>

                    <p class="text-gray-300 leading-relaxed mb-6">
                        Sangat Bagus untuk di beli
                    </p>
                </div>

                <div class="flex items-center gap-4 mt-6">

                    <!-- FORM ADD TO CART -->
                    <form action="{{ route('profile-user.cart.add') }}" method="POST" class="flex items-center gap-4">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                        <div class="flex items-center bg-gray-700 rounded-full px-4 py-2 gap-3">
                            <button type="button" class="text-xl">-</button>
                            <span class="text-lg">1</span>
                            <button type="button" class="text-xl">+</button>
                        </div>

                        <button type="submit"
                                class="bg-indigo-600 hover:bg-indigo-700 px-6 py-3 rounded-full font-medium transition shadow-lg whitespace-nowrap">
                            Add to Cart
                        </button>
                    </form>

                    <!-- FORM CHECKOUT -->
                    <form action="{{ route('checkout') }}" method="POST" class="whitespace-nowrap">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                        <button type="submit"
                                class="bg-white text-gray-900 hover:bg-gray-200 px-6 py-3 rounded-full font-medium transition shadow-lg">
                            Checkout
                        </button>
                    </form>

                </div>



            </div>
        </div>

        <!-- TABS -->
        <div class="mt-14 border-b border-gray-700 pb-2 flex gap-10 text-gray-400">
            <button class="pb-2 border-b-2 border-white text-white">Product Details</button>
            <button class="pb-2 hover:text-white">Rating & Reviews</button>
            <button class="pb-2 hover:text-white">FAQs</button>
        </div>

        <!-- Reviews -->
        <h2 class="text-2xl font-semibold mt-10 mb-6">All Reviews (451)</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700 shadow-xl">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-yellow-400">★★★★★</span>
                    <p class="font-semibold">Samantha D.</p>
                </div>
                <p class="text-gray-300 mb-4">
                    "Amazing product! High quality and very comfortable."
                </p>
                <p class="text-gray-500 text-sm">Posted on Aug 14, 2023</p>
            </div>

            <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700 shadow-xl">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-yellow-400">★★★★☆</span>
                    <p class="font-semibold">Alex M.</p>
                </div>
                <p class="text-gray-300 mb-4">
                    "Great product, exceeded expectations!"
                </p>
                <p class="text-gray-500 text-sm">Posted on Aug 15, 2023</p>
            </div>

        </div>

    </div>


</body>
</html>
