<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal Information</title>
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-900 to-gray-800 text-white min-h-screen flex items-center justify-center">

<div class="w-full max-w-6xl mx-auto flex flex-col md:flex-row gap-4 p-4">

    <!-- Left Section (Sidebar) -->
    <div class="flex flex-col gap-4 w-full md:w-1/4">

        <!-- Profile Box -->
        <div class="bg-gradient-to-b from-[#2a2836] to-[#1c1a25] rounded-lg flex flex-col items-center text-center py-6 shadow-md">
            <div class="w-20 h-20 bg-gray-700 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 12c2.67 0 8 1.34 8 4v4H4v-4c0-2.66 5.33-4 8-4zm0-2a4 4 0 110-8 4 4 0 010 8z"/>
                </svg>
            </div>
            <button class="text-purple-400 text-sm mt-2 hover:underline">Change Pictures</button>
            <p class="mt-2 font-semibold">{{ auth()->user()->name }}</p>
        </div>

        <!-- Sidebar Menu Box -->
        <div class="bg-gradient-to-b from-[#2a2836] to-[#1c1a25] rounded-lg p-5 flex flex-col justify-between shadow-md h-full">
            <nav class="space-y-3 text-sm">
                <a href="{{route('profile-user.profile')}}" class="flex items-center gap-4 hover:text-purple-400 px-3 py-2 rounded-md">
                    <i class='bxr  bx-user-circle'  ></i>  Personal Information
                </a>
                <a href="{{route('profile-user.wishlist')}}" class="flex items-center gap-4 hover:text-purple-400 px-3 py-2 rounded-md">
                    <i class='bxr  bx-heart-circle'  ></i> Wishlist
                </a>
                <a href="#" class="flex items-center bg-gradient-to-r from-gray-700/40 to-gray-700/10 rounded-md px-3 py-2 border-l-2 border-purple-400 text-purple-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 1112 21a9.002 9.002 0 01-6.879-3.196z" />
                    </svg>
                    Cart
                </a>
                <a href="{{route('profile-user.history')}}" class="flex items-center gap-4 hover:text-purple-400 px-3 py-2 rounded-md">
                    <i class='bxr  bx-history'  ></i> Purchase History
                </a>
                <a href="{{route('profile-user.address')}}" class="flex items-center gap-4 hover:text-purple-400 px-3 py-2 rounded-md">
                    <i class='bxr  bx-location'  ></i>  Address
                </a>
                <a href="{{route('profile-user.payment')}}" class="flex items-center gap-4 hover:text-purple-400 px-3 py-2 rounded-md">
                    <i class='bxr  bx-wallet-alt'  ></i>  Payment Methods
                </a>
                <a href="{{route('profile-user.help')}}" class="flex items-center gap-4 hover:text-purple-400 px-3 py-2 rounded-md">
                    <i class='bxr  bx-info-circle'  ></i>  Help
                </a>



            </nav>

            <a href="{{ route('logout') }}" class="mt-6 text-center bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-md text-sm font-medium">Sign Out</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-1 bg-[#0f0f1a] p-8 rounded-l-2xl overflow-y-auto flex flex-col justify-between">
        <div>
            <!-- Header -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-8">
                <h1 class="text-4xl font-semibold">Cart</h1>
                <div class="flex items-center bg-purple-900/50 px-4 py-2 rounded-full mt-4 md:mt-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-300 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <input type="text" placeholder="Search" class="bg-transparent focus:outline-none text-white w-40 md:w-60" />
                </div>
            </div>

            <!-- Product Grid -->


            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($cartItems as $item)
                    <div class="bg-gray-900 rounded-xl overflow-hidden shadow-lg relative">

                        <!-- IMAGE -->
                        <div class="w-full h-48 overflow-hidden">
                            <img
                                src="/{{ $item->product->image }}"
                                alt="{{ $item->product->name }}"
                                class="w-full h-full object-cover"
                            >
                        </div>

                        <!-- PRODUCT INFO -->
                        <div class="p-4 bg-gradient-to-b from-gray-800 to-gray-900">
                            <h2 class="text-white font-semibold text-lg leading-tight">
                                {{ $item->product->name }}
                            </h2>

                            <p class="text-gray-300 mt-1">
                                Rp {{ number_format($item->product->price, 0, ',', '.') }}
                            </p>
                        </div>

                        <!-- SELECT CIRCLE -->
                        <button class="absolute bottom-4 right-4 w-10 h-10 rounded-full border-2 border-white flex items-center justify-center">
                            <span class="w-5 h-5 border-2 border-white rounded-full"></span>
                        </button>

                    </div>
                @endforeach
            </div>

        </div>




            <!-- Footer Cart Section -->
        <div class="flex flex-col md:flex-row justify-between items-center mt-8 border-t border-gray-700 pt-4">
            <div class="flex items-center gap-2">
                <div class="w-6 h-6 rounded-full border-2 border-white"></div>
                <span>All</span>
            </div>
            <div class="text-gray-300 mt-4 md:mt-0">Rp 0</div>
            <button class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-2 rounded-xl mt-4 md:mt-0">Checkout</button>
        </div>
    </div>
</div>

</body>
</html>
