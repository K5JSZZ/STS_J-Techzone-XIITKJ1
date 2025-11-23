<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">

<div class="bg-white p-8 rounded-2xl shadow-lg w-96">
    <h2 class="text-2xl font-bold text-center text-indigo-600">OTP Verification</h2>
    <p class="text-gray-500 text-center mt-2">Enter the code sent to your email</p>

    <form action="{{ route('verify.otp') }}" method="POST" class="mt-6">
        @csrf
        <input type="hidden" name="email" value="{{ $email }}">

        <label class="block text-sm font-medium text-gray-700 mb-2">Input Your Code In Here</label>
        <input type="text" name="otp" maxlength="6" placeholder="Enter OTP"
               class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
               required>

        @error('otp')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
        @enderror

        <button type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 rounded-lg mt-6 transition">
            Verify OTP
        </button>
    </form>
    
</div>

</body>
</html>
