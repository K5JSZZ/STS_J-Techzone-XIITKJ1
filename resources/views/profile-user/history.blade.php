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
                <a href="#" class="flex items-center bg-gradient-to-r from-gray-700/40 to-gray-700/10 rounded-md px-3 py-2 border-l-2 border-purple-400 text-purple-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 1112 21a9.002 9.002 0 01-6.879-3.196z" />
                    </svg>
                    Purchase History
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

            <a href="{{ route('logout') }}" class="mt-6 bg-purple-600 text-center hover:bg-purple-700 text-white px-4 py-2 rounded-md text-sm font-medium">Sign Out</a>
        </div>
    </div>


    <div class="flex-1 bg-[#0f0f1a] p-10 rounded-l-2xl overflow-y-auto">
        <h1 class="text-4xl font-semibold mb-10">Purchase History</h1>

        <div class="space-y-6">
            <?php foreach ($history as $h): ?>
            <div class="bg-gradient-to-r from-gray-800 to-gray-900 p-5 rounded-2xl flex items-center justify-between hover:shadow-lg transition-all duration-300">
                <div class="flex items-center space-x-5">
                    <img src="/<?= $h['image'] ?>" alt="<?= $h['name'] ?>" class="w-28 h-24 rounded-lg object-cover">
                    <div>
                        <h3 class="text-xl font-semibold text-purple-400 hover:underline cursor-pointer"><?= $h['name'] ?></h3>
                        <p class="text-gray-300"><?= $h['status'] ?></p>
                        <p class="text-gray-400 text-sm"><?= $h['date'] ?></p>
                        <p class="text-white mt-2 font-semibold">Rp <?= number_format($h['price'], 0, ',', '.') ?></p>
                    </div>
                </div>
                <a href="#" class="text-purple-400 hover:text-purple-500 font-medium">See More</a>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>

</body>
</html>
