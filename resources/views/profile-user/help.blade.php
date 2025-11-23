<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal Information</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-900 to-gray-800 text-white min-h-screen flex items-center justify-center">

<div class="w-full max-w-6xl mx-auto flex flex-col md:flex-row gap-4 p-4">


    <div class="flex flex-col gap-4 w-full md:w-1/4">


        <div class="bg-gradient-to-b from-[#2a2836] to-[#1c1a25] rounded-lg flex flex-col items-center text-center py-6 shadow-md">
            <div class="w-20 h-20 bg-gray-700 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 12c2.67 0 8 1.34 8 4v4H4v-4c0-2.66 5.33-4 8-4zm0-2a4 4 0 110-8 4 4 0 010 8z"/>
                </svg>
            </div>
            <button class="text-purple-400 text-sm mt-2 hover:underline">Change Pictures</button>
            <p class="mt-2 font-semibold">{{ auth()->user()->name }}</p>
        </div>


        <div class="bg-gradient-to-b from-[#2a2836] to-[#1c1a25] rounded-lg p-5 flex flex-col justify-between shadow-md h-full">
            <nav class="space-y-3 text-sm">
                <a href="{{route('profile-user.profile')}}" class="flex items-center gap-4 hover:text-purple-400 px-3 py-2 rounded-md">
                    <i class='bxr  bx-user-circle'  ></i>  Personal Information
                </a>
                <a href="{{route('profile-user.wishlist')}}" class="flex items-center gap-4 hover:text-purple-400 px-3 py-2 rounded-md">
                    <i class='bxr  bx-heart-circle'  ></i> Wishlist
                </a>
                <a href="{{route('profile-user.cart')}}" class="flex items-center gap-4 hover:text-purple-400 px-3 py-2 rounded-md">
                    <i class='bxr  bx-cart'  ></i>  Cart
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
                <a href="#" class="flex items-center bg-gradient-to-r from-gray-700/40 to-gray-700/10 rounded-md px-3 py-2 border-l-2 border-purple-400 text-purple-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 1112 21a9.002 9.002 0 01-6.879-3.196z" />
                    </svg>
                    Help
                </a>
            </nav>

            <a href="{{ route('logout') }}" class="mt-6 bg-purple-600 text-center hover:bg-purple-700 text-white px-4 py-2 rounded-md text-sm font-medium">Sign Out</a>
        </div>
    </div>


    <div class="flex-1 bg-[#0e0e15] rounded-lg p-10 shadow-md">

        <main class="flex-1 px-10 pt-4 pb-8">


            <h1 class="text-4xl font-semibold mb-1 mt-2">Help</h1>
            <p class="text-indigo-400 mb-5 text-base">Maybe this list relate with your problem?</p>


            <div class="flex justify-end mb-6">
                <div class="relative">
                    <input type="text" placeholder="Search For Your Problem"
                           class="bg-[#2e2e4a] text-sm text-gray-300 rounded-full py-2 px-10 w-72 outline-none focus:ring-2 focus:ring-indigo-500" />
                    <i class="ri-search-line absolute left-3 top-2.5 text-gray-400 text-lg"></i>
                </div>
            </div>

            <div class="space-y-3 text-lg">
                <div class="flex justify-between border-b border-gray-700 pb-2 hover:text-indigo-400 cursor-pointer">
                    <span>Shopping</span><span>›</span>
                </div>
                <div class="flex justify-between border-b border-gray-700 pb-2 hover:text-indigo-400 cursor-pointer">
                    <span>Delivery</span><span>›</span>
                </div>
                <div class="flex justify-between border-b border-gray-700 pb-2 hover:text-indigo-400 cursor-pointer">
                    <span>Account</span><span>›</span>
                </div>
                <div class="flex justify-between border-b border-gray-700 pb-2 hover:text-indigo-400 cursor-pointer">
                    <span>Payments</span><span>›</span>
                </div>
                <div class="flex justify-between border-b border-gray-700 pb-2 hover:text-indigo-400 cursor-pointer">
                    <span>Stocks</span><span>›</span>
                </div>
                <div class="flex justify-between border-b border-gray-700 pb-2 hover:text-indigo-400 cursor-pointer">
                    <span>Refunds</span><span>›</span>
                </div>
            </div>
        </main>

    </div>
</div>

</body>
</html>

