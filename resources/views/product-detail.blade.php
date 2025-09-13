<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product['name'] }} - J-Tech Zone</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">

<div class="max-w-7xl mx-auto px-6 py-10">


    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 bg-white rounded-2xl shadow-md p-8">

        <div class="flex flex-col lg:flex-row gap-6">

            <div class="flex-1 order-1 lg:order-2">
                <img src="{{ asset($product['image']) }}" class="w-full rounded-xl object-contain shadow-lg" alt="">
            </div>
        </div>

        <div class="flex flex-col space-y-5">

            <div>
                <h1 class="text-3xl font-bold text-gray-800">{{ strtoupper($product['name']) }}</h1>
                <div class="flex items-center mt-2 space-x-2">
                    <span class="text-yellow-500">{{ $product['rating'] }}</span>
                    <span class="text-gray-500 text-sm">451 Reviews</span>
                </div>
            </div>


            <div class="flex items-center space-x-3">
        <span class="text-3xl font-bold text-gray-900">
          Rp {{ number_format($product['price'], 0, ',', '.') }}
        </span>
                @if($product['old_price'])
                    <span class="text-xl text-gray-400 line-through">
            Rp {{ number_format($product['old_price'], 0, ',', '.') }}
          </span>
                    <span class="bg-red-500 text-white text-sm px-2 py-1 rounded-md">
            {{ $product['discount'] }}
          </span>
                @endif
            </div>


            <p class="text-gray-600 leading-relaxed">
                {{ $product['desc'] }}
            </p>






            <div class="flex items-center space-x-4">
                <div class="flex items-center border rounded-lg">
                    <button class="px-3 py-2 text-lg">-</button>
                    <input type="number" value="1" min="1" class="w-12 text-center border-l border-r outline-none">
                    <button class="px-3 py-2 text-lg">+</button>
                </div>
                <button class="flex-1 bg-black text-white py-3 rounded-lg font-semibold hover:bg-gray-800 transition">
                    Add to Cart
                </button>
            </div>

        </div>
    </div>


    <div class="mt-10">
        <div class="flex border-b">
            <button class="px-6 py-3 text-gray-700 font-medium border-b-2 border-black">Product Details</button>
            <button class="px-6 py-3 text-gray-500 hover:text-black">Rating & Reviews</button>
            <button class="px-6 py-3 text-gray-500 hover:text-black">FAQs</button>
        </div>


        <div class="mt-6 bg-white p-6 rounded-xl shadow">
            <h2 class="text-xl font-bold mb-4">All Reviews (451)</h2>
            <div class="space-y-6">
                <div class="border-b pb-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="font-semibold">Samantha D.</span>
                        <span class="text-yellow-500">⭐⭐⭐⭐⭐</span>
                    </div>
                    <p class="text-gray-600">Wah, Laptop ini sangat bagus dan juga cocok untuk di gunakan kegiatan sehari hari</p>
                    <p class="text-sm text-gray-400 mt-1">Posted on September 12, 2025</p>
                </div>
                <div class="border-b pb-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="font-semibold">Alex M.</span>
                        <span class="text-yellow-500">⭐⭐⭐⭐</span>
                    </div>
                    <p class="text-gray-600">Sangat menarik untuk dibeli cocok untuk orang yang suka main game.</p>
                    <p class="text-sm text-gray-400 mt-1">Posted on September 11, 2025</p>
                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>
