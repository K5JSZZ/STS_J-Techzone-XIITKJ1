<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin Login</title>
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 flex items-center justify-center p-4">


<div class="w-full max-w-md bg-white/10 backdrop-blur-xl border border-white/20 shadow-2xl rounded-2xl p-8 animate-fadeIn">


    <div class="text-center mb-8">
        <h1 class="text-4xl font-extrabold text-white tracking-wide drop-shadow-lg">
            Admin Panel
        </h1>
        <p class="text-gray-300 mt-2 text-sm">
            Please login to access the dashboard
        </p>
    </div>


    @if (session('error'))
        <div class="mb-4 p-3 rounded-md bg-red-500/20 border border-red-400 text-red-300 text-sm">
            {{ session('error') }}
        </div>
    @endif


    <form method="POST" action="{{ route('admin.login.post') }}" class="space-y-6">
        @csrf


        <div>
            <label class="text-gray-200 font-medium text-sm mb-1 block">Email</label>
            <input type="email" name="email" required placeholder="admin@example.com"
                   class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/20 text-white placeholder-gray-400 focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 outline-none transition">
        </div>


        <div>
            <label class="text-gray-200 font-medium text-sm mb-1 block">Password</label>
            <input type="password" name="password" required placeholder="••••••••"
                   class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/20 text-white placeholder-gray-400 focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 outline-none transition">
        </div>


        <button type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-3 rounded-xl font-semibold shadow-lg transition-transform hover:scale-[1.02] active:scale-[0.98]">
            Login
        </button>
    </form>


    <p class="text-center text-gray-400 text-sm mt-6">
        © 2025 Admin System. All rights reserved.
    </p>
</div>


<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(15px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fadeIn {
        animation: fadeIn .8s ease-out forwards;
    }
</style>

</body>
</html>
