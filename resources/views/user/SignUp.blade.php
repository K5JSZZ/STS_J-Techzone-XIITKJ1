<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="logo" href="img/image_1_-removebg-preview.png"/>
    <title>Signup Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center">

<div class="w-full max-w-md bg-white/90 backdrop-blur-md shadow-2xl rounded-2xl p-8">

    <div class="text-center mb-6">
        <h1 class="text-3xl font-bold text-indigo-600">Create Account</h1>
        <p class="text-gray-500">Join us today! Please fill the form below.</p>
    </div>


    <form action="#" method="POST" class="space-y-5">

        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
            <input type="text" id="name" name="name" placeholder="John Doe" required
                   class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none" />
        </div>


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


        <div>
            <label for="confirm" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
            <input type="password" id="confirm" name="confirm" placeholder="••••••••" required
                   class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none" />
        </div>


        <div class="flex items-center text-sm">
            <input type="checkbox" id="terms" required
                   class="rounded text-indigo-600 focus:ring-indigo-500" />
            <label for="terms" class="ml-2 text-gray-600">I agree to the
                <a href="#" class="text-indigo-600 hover:underline">Terms & Conditions</a>
            </label>
        </div>


        <button type="submit"
                class="w-full bg-indigo-600 text-white py-2 rounded-xl shadow-md hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-400 transition">
            Sign Up
        </button>
    </form>


    <div class="my-6 flex items-center">
        <div class="flex-grow border-t border-gray-300"></div>
        <span class="px-3 text-gray-400 text-sm">OR</span>
        <div class="flex-grow border-t border-gray-300"></div>
    </div>


    <div class="flex space-x-3">
        <button class="flex-1 py-2 border rounded-xl flex items-center justify-center space-x-2 hover:bg-gray-50 transition">

            <svg viewBox="0 0 24 24" class="w-5 h-5">
                <path fill="#EA4335" d="M12 10.2v3.6h5.1c-.2 1.2-.9 2.3-2 3L17.5 19c2-1.8 3.2-4.5 3.2-7.5 0-.7-.1-1.4-.2-2H12z"/>
                <path fill="#34A853" d="M6.5 14.3l-.8.6L3.7 17c1.5 2.9 4.6 5 8.3 5 2.5 0 4.7-.8 6.2-2.2l-2.9-2.2c-.8.6-1.8.9-3.3.9-2.5 0-4.6-1.6-5.4-3.7z"/>
                <path fill="#4A90E2" d="M20 7.5l-2.9 2.2c.8.5 1.4 1.3 1.6 2.3H12v3.6h5.1c-.4 1.9-1.7 3.5-3.4 4.3l2.9 2.2c2.1-1.9 3.4-4.7 3.4-8.1 0-.8-.1-1.6-.3-2.3-.2-.8-.6-1.5-1.2-2.1z"/>
                <path fill="#FBBC05" d="M6.5 9.7c.8-2.1 2.9-3.7 5.4-3.7 1.5 0 2.5.5 3.3 1.2l2.5-2.5C15.8 3.8 13.5 3 11 3c-3.7 0-6.8 2.1-8.3 5l2.8 2z"/>
            </svg>
            <span>Google</span>
        </button>

        <button class="flex-1 py-2 border rounded-xl flex items-center justify-center space-x-2 hover:bg-gray-50 transition">

            <svg viewBox="0 0 48 48" class="w-5 h-5">
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
        Already have an account?
        <a href="{{url('login')}}" class="text-indigo-600 hover:underline">Login</a>
    </p>


</div>


</body>
</html>
