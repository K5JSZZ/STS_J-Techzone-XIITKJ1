<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://cdn.boxicons.com/3.0.4/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <title>Admin User Management</title>
</head>
<body class="bg-gray-100 w-full flex">
<!-- Sidebar -->
<aside class="w-64 bg-white shadow-md hidden md:block relative">
    <div class="p-6 text-xl font-bold">Admin</div>

    <nav class="mt-4 space-y-2">
        <a class="block py-2 px-6 bg-gray-100 flex items-center gap-2 font-medium" href="#">Dashboard</a>
        <a class="block py-2 px-6 hover:bg-gray-100 flex items-center gap-2" href="{{ route('admin.manage') }}">Manage Users</a>
        <a class="block py-2 px-6 hover:bg-gray-100 flex items-center gap-2" href="{{ route('admin.product') }}">Product</a>
    </nav>

    <!-- Tombol Logout - Paling Bawah -->
    <div class="absolute bottom-6 left-0 w-full px-6">
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button
                type="submit"
                class="w-full bg-red-500 text-white py-2 rounded-lg font-semibold hover:bg-red-600 transition">
                Logout
            </button>
        </form>
    </div>
</aside>


<div class="p-6 space-y-8">

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-20">


        <div class="bg-white p-5 rounded-xl shadow flex flex-col gap-3 w-full">


            <div class="flex items-center gap-3">
                <div class="p-3 bg-gray-100 rounded-lg">
                    📅
                </div>
                <span class="text-sm font-medium text-gray-600">Total Orders</span>
            </div>


            <div class="flex justify-between items-center gap-8">
                <h2 class="text-3xl font-bold">15.000</h2>

                <div class="text-right">
                    <p class="text-green-600 font-semibold">↑ 34.7%</p>
                    <p class="text-xs text-gray-500 -mt-1">Compared to Oct 2023</p>
                </div>
            </div>

        </div>



        <div class="bg-white p-5 rounded-xl shadow flex flex-col gap-3 w-full">


            <div class="flex items-center gap-3">
                <div class="p-3 bg-gray-100 rounded-lg">
                    📅
                </div>
                <span class="text-sm font-medium text-gray-600">Active Orders</span>
            </div>


            <div class="flex justify-between items-center gap-8">
                <h2 class="text-3xl font-bold">5.968</h2>

                <div class="text-right">
                    <p class="text-green-600 font-semibold">↑ 34.7%</p>
                    <p class="text-xs text-gray-500 -mt-1">Compared to Oct 2023</p>
                </div>
            </div>

        </div>

        <div class="bg-white p-5 rounded-xl shadow flex flex-col gap-3 w-full">


            <div class="flex items-center gap-3">
                <div class="p-3 bg-gray-100 rounded-lg">
                    📅
                </div>
                <span class="text-sm font-medium text-gray-600">Completed Orders</span>
            </div>


            <div class="flex justify-between items-center gap-8">
                <h2 class="text-3xl font-bold">9.032</h2>

                <div class="text-right">
                    <p class="text-green-600 font-semibold">↑ 34.7%</p>
                    <p class="text-xs text-gray-500 -mt-1">Compared to Oct 2023</p>
                </div>
            </div>

        </div>


        <div class="bg-white p-5 rounded-xl shadow flex flex-col gap-3 w-full">


            <div class="flex items-center gap-3">
                <div class="p-3 bg-gray-100 rounded-lg">
                    📅
                </div>
                <span class="text-sm font-medium text-gray-600">Returned Orders</span>
            </div>


            <div class="flex justify-between items-center gap-8">
                <h2 class="text-3xl font-bold">1</h2>

                <div class="text-right">
                    <p class="text-green-600 font-semibold">↑ 34.7%</p>
                    <p class="text-xs text-gray-500 -mt-1">Compared to Oct 2023</p>
                </div>
            </div>

        </div>

    </div>


    <div class="bg-white shadow rounded-xl p-6">
        <h2 class="font-semibold mb-4">Sales Graphic</h2>
        <hr class="mb-4">

        <div class="relative h-64 w-full overflow-x-auto">
            <svg class="w-full h-full">
                <polyline
                    fill="none"
                    stroke="black"
                    stroke-width="3"
                    points="50,40 100,150 150,150 200,180 250,220 300,250 350,220 400,200 450,170 500,150 550,150 600,80"
                />
            </svg>
        </div>


        <div class="grid grid-cols-12 text-center text-xs text-gray-500 mt-2">
            <span>Jan</span><span>Feb</span><span>Mar</span><span>Apr</span><span>May</span>
            <span>Jun</span><span>Jul</span><span>Agt</span><span>Sep</span><span>Okt</span>
            <span>Nov</span><span>Des</span>
        </div>


        <div class="flex flex-wrap gap-3 mt-6 justify-center">
            <button class="px-4 py-2 bg-gray-200 rounded-lg">Daily</button>
            <button class="px-4 py-2 bg-gray-200 rounded-lg">Weekly</button>
            <button class="px-4 py-2 bg-black text-white rounded-lg">Monthly</button>
            <button class="px-4 py-2 bg-gray-200 rounded-lg">Yearly</button>
        </div>


        <div class="flex justify-center gap-3 mt-6">
            <button class="px-4 py-2 bg-gray-200 rounded-lg">--</button>
            <button class="px-4 py-2 bg-gray-200 rounded-lg">--</button>
            <button class="px-4 py-2 bg-gray-200 rounded-lg">2025</button>
        </div>
    </div>

</div>


<div class="w-full bg-white border-b flex justify-between items-center px-8 py-4 fixed top-0 left-0 right-0 z-20">
    <h2 class="text-xl font-semibold">Admin</h2>
    <div class="flex items-center gap-3">
        <span class="text-sm font-medium">{{ Auth::guard('admin')->user()->name }}</span>
        <i class='bxr  bx-user'></i>


    </div>
</div>

    </div>
</div>
</body>
</html>

