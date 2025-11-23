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
                <a href="{{route('profile-user.history')}}" class="flex items-center gap-4 hover:text-purple-400 px-3 py-2 rounded-md">
                    <i class='bxr  bx-history'  ></i> Purchase History
                </a>
                <a href="#" class="flex items-center bg-gradient-to-r from-gray-700/40 to-gray-700/10 rounded-md px-3 py-2 border-l-2 border-purple-400 text-purple-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 1112 21a9.002 9.002 0 01-6.879-3.196z" />
                    </svg>
                    Address
                </a>
                <a href="{{route('profile-user.payment')}}" class="flex items-center gap-4 hover:text-purple-400 px-3 py-2 rounded-md">
                    <i class='bxr  bx-wallet-alt'  ></i>  Payment Methods
                </a>
                <a href="{{route('profile-user.help')}}" class="flex items-center gap-4 hover:text-purple-400 px-3 py-2 rounded-md">
                    <i class='bxr  bx-info-circle'  ></i>  Help
                </a>
            </nav>

            <a href="{{ route('logout') }}" class="mt-6 bg-purple-600 hover:bg-purple-700 text-center text-white px-4 py-2 rounded-md text-sm font-medium">Sign Out</a>
        </div>
    </div>



    <div class="flex-1 bg-[#0f0f1a] p-10 rounded-l-2xl overflow-y-auto">
        <div class="flex items-center justify-between mb-10">
            <h1 class="text-4xl font-semibold">Address</h1>
            <button id="btnAddAddress" class="bg-purple-600 hover:bg-purple-700 px-4 py-2 rounded-lg text-white text-sm font-medium">
                + Add Address
            </button>
        </div>

        <div class="space-y-6">
            <?php foreach ($addresses as $a): ?>
            <div class="bg-gradient-to-r from-gray-800 to-gray-900 p-5 rounded-2xl hover:shadow-lg transition-all duration-300">
                <div class="flex items-center justify-between mb-2">
                    <div>
                        <span class="font-semibold text-lg"><?= $a['name'] ?></span> |
                        <span class="text-purple-400"><?= $a['phone'] ?></span>
                    </div>
                    <div class="flex items-center gap-3">
                        @foreach ($addresses as $address)

                        <button
                            onclick="openEditModal({{ $a->id }}, '{{ $a->name }}', '{{ $a->phone }}', '{{ $a->province }}', '{{ $a->detail }}')"
                            class="bg-purple-600 hover:bg-purple-700 px-4 py-1 rounded-md text-sm font-medium">
                            Edit
                        </button>
                        <button
                            onclick="openDeleteModal({{ $address->id }})"
                            class="text-red-600 hover:text-red-800 text-sm"
                        >
                            Delete
                        </button>


                        @endforeach
                    </div>
                </div>
                <p class="text-gray-300"><?= $a['province'] ?></p>
                <p class="text-gray-400 text-sm"><?= $a['detail'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>

<!-- ADD ADDRESS MODAL -->
<div id="modalAddAddress"
     class="fixed inset-0 bg-black/60 backdrop-blur-sm hidden items-center justify-center z-50">

    <div class="bg-[#1b1b27] w-full max-w-lg p-6 rounded-xl shadow-xl">
        <h2 class="text-xl font-semibold mb-4">Add New Address</h2>

        <form action="{{ route('profile-user.address.store') }}" method="POST">
            @csrf

            <div class="space-y-4">

                <div>
                    <label class="text-sm">Name</label>
                    <input type="text" name="name" required
                           class="mt-1 w-full px-3 py-2 rounded-lg bg-gray-800 border border-gray-600 focus:ring-purple-500">
                </div>

                <div>
                    <label class="text-sm">Phone</label>
                    <input type="text" name="phone" required
                           class="mt-1 w-full px-3 py-2 rounded-lg bg-gray-800 border border-gray-600 focus:ring-purple-500">
                </div>

                <div>
                    <label class="text-sm">Province</label>
                    <input type="text" name="province" required
                           class="mt-1 w-full px-3 py-2 rounded-lg bg-gray-800 border border-gray-600 focus:ring-purple-500">
                </div>

                <div>
                    <label class="text-sm">City</label>
                    <input type="text" name="city"
                           class="mt-1 w-full px-3 py-2 rounded-lg bg-gray-800 border border-gray-600 focus:ring-purple-500">
                </div>

                <div>
                    <label class="text-sm">Detail Address</label>
                    <textarea name="detail" required
                              class="mt-1 w-full px-3 py-2 rounded-lg bg-gray-800 border border-gray-600 focus:ring-purple-500"
                              rows="3"></textarea>
                </div>
            </div>

            <div class="flex justify-end mt-6 gap-3">
                <button type="button" id="closeModal"
                        class="px-4 py-2 rounded-lg bg-gray-600 hover:bg-gray-700">
                    Cancel
                </button>

                <button type="submit"
                        class="px-4 py-2 rounded-lg bg-purple-600 hover:bg-purple-700 text-white">
                    Save Address
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Edit Address Modal -->
<div id="editModal"
     class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">

    <div class="bg-[#1c1a25] p-6 rounded-xl w-full max-w-lg shadow-lg border border-gray-700">

        <h2 class="text-2xl font-semibold mb-4">Edit Address</h2>

        <form id="editForm" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="text-sm text-gray-300">Name</label>
                <input id="editName" name="name" type="text"
                       class="w-full mt-1 p-2 rounded bg-gray-800 text-white border border-gray-600">
            </div>

            <div class="mb-4">
                <label class="text-sm text-gray-300">Phone Number</label>
                <input id="editPhone" name="phone" type="text"
                       class="w-full mt-1 p-2 rounded bg-gray-800 text-white border border-gray-600">
            </div>

            <div class="mb-4">
                <label class="text-sm text-gray-300">Province / City</label>
                <input id="editProvince" name="province" type="text"
                       class="w-full mt-1 p-2 rounded bg-gray-800 text-white border border-gray-600">
            </div>

            <div class="mb-4">
                <label class="text-sm text-gray-300">Detail Address</label>
                <textarea id="editDetail" name="detail"
                          class="w-full mt-1 p-2 rounded bg-gray-800 text-white border border-gray-600 h-24"></textarea>
            </div>

            <div class="flex justify-end gap-4 mt-6">
                <button type="button"
                        onclick="closeEditModal()"
                        class="px-4 py-2 bg-gray-700 hover:bg-gray-600 rounded text-white">
                    Cancel
                </button>

                <button type="submit"
                        class="px-4 py-2 bg-purple-600 hover:bg-purple-700 rounded text-white">
                    Save Changes
                </button>
            </div>

        </form>
    </div>
</div>



<script>
    function openEditModal(id, name, phone, province, detail) {
        document.getElementById('editModal').classList.remove('hidden');

        document.getElementById('editName').value = name;
        document.getElementById('editPhone').value = phone;
        document.getElementById('editProvince').value = province;
        document.getElementById('editDetail').value = detail;

        document.getElementById('editForm').action = '/profile/address/update/' + id;
    }

    function closeEditModal() {
        document.getElementById('editModal').classList.add('hidden');
    }
</script>


<script>
    const openBtn = document.getElementById('btnAddAddress');
    const modal = document.getElementById('modalAddAddress');
    const closeBtn = document.getElementById('closeModal');

    openBtn.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    closeBtn.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    // Tutup modal kalau klik luar area popup
    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.add('hidden');
        }
    });
</script>


</body>
</html>
