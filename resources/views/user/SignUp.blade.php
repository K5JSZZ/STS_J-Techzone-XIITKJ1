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


    <form action="{{ route('signup.post') }}" method="POST" class="space-y-5">
        @csrf
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
            <input type="text" id="name" name="name" placeholder="John Doe" required
                   class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none" />
        </div>

        <div>
            <label for="birthday" class="block text-sm font-medium text-gray-700 mb-1">Birthday</label>
            <input type="date" id="birthday" name="birthday" required
                   class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none" />
        </div>

        <div>
            <label for="gender" class="block text-sm font-medium text-gray-700 mb-1">Gender</label>
            <select id="gender" name="gender" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none">
                <option value="" disabled selected>Select your gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <div>
            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
            <input type="text" id="phone" name="phone" placeholder="081234567890" required
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







    <p class="text-center text-gray-600 text-sm mt-6">
        Already have an account?
        <a href="{{url('login')}}" class="text-indigo-600 hover:underline">Login</a>
    </p>


</div>


</body>
</html>
