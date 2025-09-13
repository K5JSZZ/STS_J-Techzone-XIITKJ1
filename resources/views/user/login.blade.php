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


    <form action="#" method="POST" class="space-y-5">

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
                <input type="checkbox" class="rounded text-indigo-600 focus:ring-indigo-500" />
                <span class="text-gray-600">Remember me</span>
            </label>
            <a href="#" class="text-indigo-600 hover:underline">Forgot password?</a>
        </div>


        <button type="submit"
                class="w-full bg-indigo-600 text-white py-2 rounded-xl shadow-md hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-400 transition">
            Login
        </button>
    </form>


    <div class="my-6 flex items-center">
        <div class="flex-grow border-t border-gray-300"></div>
        <span class="px-3 text-gray-400 text-sm">OR</span>
        <div class="flex-grow border-t border-gray-300"></div>
    </div>


    <div class="flex space-x-3">
        <button class="flex-1 py-2 border rounded-xl flex items-center justify-center space-x-2 hover:bg-gray-50 transition">
            <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5" alt="Google" />
            <span>Google</span>
        </button>
        <button class="flex-1 py-2 border rounded-xl flex items-center justify-center space-x-2 hover:bg-gray-50 transition">

            <svg viewBox="0 0 48 48" aria-hidden="true" class="w-5 h-5">
                <defs>
                    <linearGradient id="fbGrad" x1="50%" y1="0%" x2="50%" y2="100%">
                        <stop offset="0%" stop-color="#4C69BA"/>
                        <stop offset="100%" stop-color="#3B55A0"/>
                    </linearGradient>
                </defs>
                <circle cx="24" cy="24" r="24" fill="url(#fbGrad)"/>
                <path fill="#FFF" d="M26.5 38h-4.9V25.2h-3.1v-4h3.1v-2.6c0-3.1 1.8-5.1 5.7-5.1 1.1 0 2.4.1 3.4.3v3.7h-2c-1.8 0-2.3.8-2.3 2.1v1.6h4.2l-.6 4h-3.6V38z"/>
            </svg>
            <span>Facebook</span>
        </button>
    </div>


    <p class="text-center text-gray-600 text-sm mt-6">
        Don’t have an account?
        <a href="{{url('SignUp')}}" class="text-indigo-600 hover:underline">Sign up</a>
    </p>
</div>
</body>
</html>
