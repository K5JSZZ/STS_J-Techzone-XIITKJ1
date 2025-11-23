<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://cdn.boxicons.com/3.0.4/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <title>Admin User Management</title>
</head>
<body class="bg-gray-100 min-h-screen flex">

<aside class="w-64 bg-white shadow-md hidden md:block relative">
    <div class="p-6 text-xl font-bold">Admin</div>

    <nav class="mt-4 space-y-2">
        <a class="block py-2 px-6 hover:bg-gray-100 flex items-center gap-2" href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a class="block py-2 px-6 bg-gray-100 flex items-center gap-2 font-medium" href="#">Manage Users</a>
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



<div class="w-full bg-white border-b flex justify-between items-center px-8 py-4 fixed top-0 left-0 right-0 z-20">
    <h2 class="text-xl font-semibold">Admin</h2>
    <div class="flex items-center gap-3">
        <span class="text-sm font-medium">{{ Auth::guard('admin')->user()->name }}</span>
        <i class='bxr  bx-user'></i>
    </div>
</div>


<div class="flex-1 p-6">
    <header class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold">Manage Users</h1>
        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add User</button>
    </header>


    <div class="flex justify-end mb-4">
        <form method="GET" action="{{ route('admin.user') }}" class="flex justify-end mb-4">
            <input
                type="text"
                name="search"
                placeholder="Search User"
                value="{{ request('search') }}"
                class="border rounded px-3 py-2 w-64"
            />
        </form>
    </div>

    <div class="bg-white shadow rounded overflow-hidden">
        <table class="w-full text-left text-sm">
            <thead class="bg-gray-50 border-b">
            <tr>
                <th class="py-3 px-4">No</th>
                <th class="py-3 px-4">Profile</th>
                <th class="py-3 px-4">Email</th>
                <th class="py-3 px-4">Password</th>
                <th class="py-3 px-4">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $index => $user)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-3 px-4">{{ $index + 1 }}</td>

                    <td class="py-3 px-4 flex items-center gap-3">
                        {{ $user->name }}
                    </td>

                    <td class="py-3 px-4">{{ $user->email }}</td>

                    <td class="py-3 px-4">{{ $user->password }}</td>
                    <td class="py-3 px-4">

                        <form action="{{ route('admin.manage.delete', $user->id) }}" method="POST" onsubmit="return confirm('Yakin hapus user ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="px-3 py-1 bg-red-600 text-white rounded-lg hover:bg-red-700 transition font-medium shadow">
                                Delete
                            </button>
                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>


        <div class="p-4">
            {{ $users->links() }}
        </div>
    </div>
</div>
</body>
</html>

