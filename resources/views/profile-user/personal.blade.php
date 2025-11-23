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
                <a href="#" class="flex items-center bg-gradient-to-r from-gray-700/40 to-gray-700/10 rounded-md px-3 py-2 border-l-2 border-purple-400 text-purple-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 1112 21a9.002 9.002 0 01-6.879-3.196z" />
                    </svg>
                    Personal Information
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
                <a href="{{route('profile-user.help')}}" class="flex items-center gap-4 hover:text-purple-400 px-3 py-2 rounded-md">
                    <i class='bxr  bx-info-circle'  ></i>  Help
                </a>

            </nav>

            <a href="{{ route('logout') }}" class="mt-6 bg-purple-600 text-center hover:bg-purple-700 text-white px-4 py-2 rounded-md text-sm font-medium">Sign Out</a>
        </div>
    </div>


    <div class="flex-1 bg-[#0e0e15] rounded-lg p-10 shadow-md">
        <h1 class="text-4xl font-semibold mb-10">Personal Information</h1>

        <div class="space-y-6 text-gray-300 text-base">
            <div class="flex justify-between">
                <div class="w-40 text-gray-400">Name</div>
                <div class="flex-1 flex justify-between max-w-md">
                    <p>{{ auth()->user()->name }}</p>
                    <a href="#" onclick="openModal('modalName')" class="text-purple-400 text-sm hover:underline">Change</a>
                </div>
            </div>

            <div class="flex justify-between">
                <div class="w-40 text-gray-400">Birthday</div>
                <div class="flex-1 flex justify-between max-w-md">
                    <p>{{ auth()->user()->birthday }}</p>
                    <a href="#" onclick="openModal('modalBirthday')" class="text-purple-400 text-sm hover:underline">Change</a>
                </div>
            </div>

            <div class="flex justify-between">
                <div class="w-40 text-gray-400">Gender</div>
                <div class="flex-1 flex justify-between max-w-md">
                    <p>{{ auth()->user()->gender }}</p>
                    <a href="#" onclick="openModal('modalGender')" class="text-purple-400 text-sm hover:underline">Change</a>
                </div>
            </div>

            <div class="flex justify-between">
                <div class="w-40 text-gray-400">Email</div>
                <div class="flex-1 flex justify-between max-w-md">
                    <p>{{ auth()->user()->email }}</p>
                    <a href="#" onclick="openModal('modalEmail')" class="text-purple-400 text-sm hover:underline">Change</a>
                </div>
            </div>

            <div class="flex justify-between">
                <div class="w-40 text-gray-400">Phone Number</div>
                <div class="flex-1 flex justify-between max-w-md">
                    <p>{{ auth()->user()->phone }}</p>
                    <a href="#" onclick="openModal('modalPhone')" class="text-purple-400 text-sm hover:underline">Change</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modalName" class="hidden fixed inset-0 bg-black/60 flex items-center justify-center">
    <div class="bg-gray-800 p-6 rounded-xl w-full max-w-md">
        <h2 class="text-xl mb-4 font-semibold text-white">Update Name</h2>

        <form action="{{ route('profile-user.update.name') }}" method="POST">
            @csrf
            <input type="text" name="name" class="w-full p-2 rounded bg-gray-700 text-white"
                   value="{{ auth()->user()->name }}" required>

            <div class="flex justify-end mt-4">
                <button type="button" onclick="closeModal('modalName')" class="px-4 py-2 text-gray-300">Cancel</button>
                <button class="px-4 py-2 bg-purple-600 rounded-lg ml-2">Save</button>
            </div>
        </form>
    </div>
</div>


<div id="modalBirthday" class="hidden fixed inset-0 bg-black/60 flex items-center justify-center">
    <div class="bg-gray-800 p-6 rounded-xl w-full max-w-md">
        <h2 class="text-xl mb-4 font-semibold text-white">Update Birthday</h2>

        <form action="{{ route('profile-user.update.birthday') }}" method="POST">
            @csrf
            <input type="date" name="birthday" class="w-full p-2 rounded bg-gray-700 text-white"
                   value="{{ auth()->user()->birthday }}" required>

            <div class="flex justify-end mt-4">
                <button type="button" onclick="closeModal('modalBirthday')" class="px-4 py-2 text-gray-300">Cancel</button>
                <button class="px-4 py-2 bg-purple-600 rounded-lg ml-2">Save</button>
            </div>
        </form>
    </div>
</div>

<div id="modalGender" class="hidden fixed inset-0 bg-black/60 flex items-center justify-center">
    <div class="bg-gray-800 p-6 rounded-xl w-full max-w-md">
        <h2 class="text-xl mb-4 font-semibold text-white">Update Gender</h2>

        <form action="{{ route('profile-user.update.gender') }}" method="POST">
            @csrf
            <select name="gender" class="w-full p-2 rounded bg-gray-700 text-white">
                <option value="Male" {{ auth()->user()->gender == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ auth()->user()->gender == 'Female' ? 'selected' : '' }}>Female</option>
                <option value="Other" {{ auth()->user()->gender == 'Other' ? 'selected' : '' }}>Other</option>
            </select>

            <div class="flex justify-end mt-4">
                <button type="button" onclick="closeModal('modalGender')" class="px-4 py-2 text-gray-300">Cancel</button>
                <button class="px-4 py-2 bg-purple-600 rounded-lg ml-2">Save</button>
            </div>
        </form>
    </div>
</div>

<div id="modalPhone" class="hidden fixed inset-0 bg-black/60 flex items-center justify-center">
    <div class="bg-gray-800 p-6 rounded-xl w-full max-w-md">
        <h2 class="text-xl mb-4 font-semibold text-white">Update Phone</h2>

        <form action="{{ route('profile-user.update.phone') }}" method="POST">
            @csrf
            <input type="text" name="phone" class="w-full p-2 rounded bg-gray-700 text-white"
                   value="{{ auth()->user()->phone }}" required>

            <div class="flex justify-end mt-4">
                <button type="button" onclick="closeModal('modalPhone')" class="px-4 py-2 text-gray-300">Cancel</button>
                <button class="px-4 py-2 bg-purple-600 rounded-lg ml-2">Save</button>
            </div>
        </form>
    </div>
</div>

<div id="modalEmail" class="hidden fixed inset-0 bg-black/60 flex items-center justify-center">
    <div class="bg-gray-800 p-6 rounded-xl w-full max-w-md">
        <h2 class="text-xl mb-4 font-semibold text-white">Update Email</h2>

        <form action="{{ route('profile-user.update.email') }}" method="POST">
            @csrf
            <input type="email" name="email" class="w-full p-2 rounded bg-gray-700 text-white"
                   value="{{ auth()->user()->email }}" required>

            <div class="flex justify-end mt-4">
                <button type="button" onclick="closeModal('modalEmail')" class="px-4 py-2 text-gray-300">Cancel</button>
                <button class="px-4 py-2 bg-purple-600 rounded-lg ml-2">Save</button>
            </div>
        </form>
    </div>
</div>


<script>
    function openModal(id) {
        document.getElementById(id).classList.remove('hidden');
    }

    function closeModal(id) {
        document.getElementById(id).classList.add('hidden');
    }
</script>

</body>
</html>
