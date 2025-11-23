<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Checkout</title>
</head>

<body class="bg-gradient-to-b from-gray-900 to-gray-800 text-white min-h-screen">

<!-- NAVBAR -->
<nav class="w-full bg-white/10 backdrop-blur-lg border-b border-white/20 fixed top-0 left-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <img src="/logo.png" class="w-10 h-10" />
            <span class="text-white font-semibold text-lg">J-Tech Zone</span>
        </div>

        <ul class="hidden md:flex items-center gap-8 text-white/80 font-medium">
            <li><a href="/" class="hover:text-white transition">Home</a></li>
            <li><a href="/product" class="hover:text-white transition">Product</a></li>
            <li><a href="/about" class="hover:text-white transition">About Me</a></li>
            <li><a href="/contact" class="hover:text-white transition">Contact Me</a></li>
            <li><a href="/shop" class="hover:text-white transition">Shop</a></li>
        </ul>

        <div class="flex items-center gap-3">
            <span class="text-white/90 font-medium hidden md:block">
                {{ auth()->user()->name ?? 'Guest' }}
            </span>
            <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center">
                <i class="bx bx-user text-xl"></i>
            </div>
        </div>
    </div>
</nav>

<!-- CONTENT -->
<div class="pt-28 max-w-7xl mx-auto px-4 pb-20 grid grid-cols-1 lg:grid-cols-3 gap-10">

    <!-- LEFT SIDE -->
    <div class="lg:col-span-2 space-y-8">

        <!-- ADDRESS -->
        <div class="bg-white/10 border border-white/20 p-6 rounded-2xl shadow-lg">
            <h2 class="text-lg font-semibold mb-4">ADDRESS</h2>

            <div class="flex justify-between">
                <div>
                    <p class="font-medium">{{ $user->name }}</p>
                    <p class="text-purple-400">{{ $user->phone }}</p>

                    <p class="mt-3 text-gray-300 leading-relaxed">
                        {{ $user->address }}
                    </p>
                </div>

                <a href="#" class="text-purple-400 hover:underline">Change</a>
            </div>
        </div>

        <!-- PRODUCT LIST -->
        <div class="bg-white/10 border border-white/20 p-6 rounded-2xl shadow-lg">
            <h2 class="text-lg font-semibold mb-4">PRODUCT</h2>

            @foreach ($cart as $item)
                <div class="flex items-center gap-4 mb-6">
                    <img src="{{ asset('storage/' . $item->image) }}"
                         class="w-20 h-20 rounded-lg object-cover shadow">

                    <div class="flex-1">
                        <p class="font-semibold">{{ $item->name }}</p>
                        <p class="text-gray-400 text-sm">Amount: {{ $item->qty }}</p>
                    </div>

                    <p class="font-semibold">
                        Rp {{ number_format($subtotal, 0, ',', '.') }}
                    </p>
                </div>
            @endforeach
        </div>

        <!-- SHIPPING METHOD -->
        <div class="bg-white/10 border border-white/20 p-6 rounded-2xl shadow-lg">
            <h2 class="text-lg font-semibold mb-4">SHIPPING METHOD</h2>

            <div class="grid sm:grid-cols-2 gap-4">

                <!-- FREE -->
                <label class="flex gap-4 p-4 border border-white/20 rounded-xl items-center cursor-pointer bg-white/5 hover:bg-white/10 transition">
                    <input type="radio" name="shipping" value="0" checked>
                    <div>
                        <p class="font-semibold">Free Shipping</p>
                        <p class="text-sm text-gray-400">Rp 0 • 12 - 20 days</p>
                    </div>
                </label>

                <!-- EXPRESS -->
                <label class="flex gap-4 p-4 border border-white/20 rounded-xl items-center cursor-pointer bg-white/5 hover:bg-white/10 transition">
                    <input type="radio" name="shipping" value="40000">
                    <div>
                        <p class="font-semibold">Express Shipping</p>
                        <p class="text-sm text-gray-400">Rp 40.000 • 1 - 5 days</p>
                    </div>
                </label>
            </div>
        </div>
    </div>

    <!-- RIGHT SIDE -->
    <div class="space-y-8">

        <!-- ORDER SUMMARY -->
        <div class="bg-white/10 border border-white/20 p-6 rounded-2xl shadow-lg">
            <h2 class="text-lg font-semibold mb-4">ORDER SUMMARY</h2>

            <div class="flex justify-between mb-2">
                <p class="text-gray-400">Subtotal</p>
                <p>Rp {{ number_format($subtotal, 0, ',', '.') }}</p>
            </div>

            <div class="flex justify-between mb-4">
                <p class="text-gray-400">Shipping</p>
                <p id="shippingCost">Rp 0</p>
            </div>

            <hr class="border-white/20 my-4">

            <div class="flex justify-between">
                <p class="text-gray-300 font-semibold">Total</p>
                <p id="totalPrice" class="font-semibold text-purple-300">
                    Rp {{ number_format($subtotal, 0, ',', '.') }}
                </p>
            </div>
        </div>

        <!-- PAYMENT METHOD -->
        <div class="bg-white/10 border border-white/20 p-6 rounded-2xl shadow-lg">
            <h2 class="text-lg font-semibold mb-4">PAYMENT METHOD</h2>

            <div class="space-y-3">
                <label class="flex justify-between items-center p-3 border border-white/20 rounded-xl bg-white/5 hover:bg-white/10 transition cursor-pointer">
                    <div class="flex items-center gap-3">
                        <span class="text-2xl">💳</span>
                        <p class="font-medium">QRIS</p>
                    </div>
                    <input type="radio" name="payment" value="qris" checked>
                </label>

                <label class="flex justify-between items-center p-3 border border-white/20 rounded-xl bg-white/5 hover:bg-white/10 transition cursor-pointer">
                    <div class="flex items-center gap-3">
                        <span class="text-2xl">🏦</span>
                        <p class="font-medium">Bank Transfer</p>
                    </div>
                    <input type="radio" name="payment" value="bank">
                </label>
            </div>
        </div>

        <!-- PLACE ORDER -->
        <a href="{{ route('success') }}"
           class="w-full block text-center bg-purple-600 hover:bg-purple-700 transition p-4 rounded-xl font-semibold shadow-lg">
            PLACE ORDER
        </a>




    </div>

</div>

<script>
    const shippingRadios = document.querySelectorAll("input[name='shipping']");
    const shippingCost = document.getElementById("shippingCost");
    const totalPrice = document.getElementById("totalPrice");
    const subtotal = {{ $subtotal }};

    shippingRadios.forEach(radio => {
        radio.addEventListener("change", () => {
            const cost = parseInt(radio.value);
            shippingCost.textContent = "Rp " + cost.toLocaleString('id-ID');
            totalPrice.textContent = "Rp " + (subtotal + cost).toLocaleString('id-ID');
        });
    });
</script>

</body>
</html>
