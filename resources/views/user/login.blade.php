<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center">

<div class="w-full max-w-md bg-white/90 backdrop-blur-md shadow-2xl rounded-2xl p-8">

    <div class="text-center mb-6">
        <h1 class="text-3xl font-bold text-indigo-600">J-Tech Zone</h1>
        <p class="text-gray-500">Welcome back! Please login to your account.</p>
    </div>


    @if ($errors->any())
        <div class="mb-4 p-3 rounded-lg border border-red-400 bg-red-100 text-red-700">
            <ul class="list-inside text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('error'))
        <div class="mb-4 p-3 rounded-lg border border-red-400 bg-red-100 text-red-700">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('login.post') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
            <input type="email" id="email" name="email" placeholder="you@example.com" required
                   class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none" />
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input type="password" id="password" name="password" placeholder="••••••••" required
                   class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none" />
        </div>

        <div class="flex items-center justify-between text-sm">
            <label class="flex items-center space-x-2">
                <input type="checkbox" name="remember" class="rounded text-indigo-600 focus:ring-indigo-500" />
                <span class="text-gray-600">Remember me</span>
            </label>
            <a href="#" class="text-indigo-600 hover:underline">Forgot password?</a>
        </div>

        <button type="submit"
                class="w-full bg-indigo-600 text-white py-2 rounded-xl shadow-md hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-400 transition">
            Login
        </button>
    </form>




    <p class="text-center text-gray-600 text-sm mt-6">
        Don’t have an account?
        <a href="{{url('signup')}}" class="text-indigo-600 hover:underline">Sign up</a>
    </p>
</div>
</body>
</html>
