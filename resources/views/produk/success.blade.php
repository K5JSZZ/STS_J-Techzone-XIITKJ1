<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Successful</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .checkmark {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: block;
            stroke-width: 4;
            stroke: #22c55e;
            stroke-miterlimit: 10;
            margin: 10% auto;
            box-shadow: inset 0px 0px 0px #22c55e;
            animation: fill .4s ease-in-out .4s forwards,
            scale .3s ease-in-out .9s both;
        }

        .checkmark__circle {
            stroke-dasharray: 166;
            stroke-dashoffset: 166;
            animation: stroke .6s ease forwards;
        }

        .checkmark__check {
            stroke-dasharray: 48;
            stroke-dashoffset: 48;
            animation: stroke .3s ease .6s forwards;
        }

        @keyframes stroke {
            to { stroke-dashoffset: 0; }
        }
        @keyframes scale {
            50% { transform: scale(1.1); }
        }
        @keyframes fill {
            to { box-shadow: inset 0px 0px 0px 50px #22c55e; }
        }
    </style>


</head>

<body class="bg-gray-900 min-h-screen flex items-center justify-center">

<div class="bg-gray-800 p-10 rounded-2xl shadow-xl flex flex-col items-center text-center w-[380px]">

    <!-- ICON (TENGAH) -->
    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-500 mb-6"
         viewBox="0 0 24 24" fill="none" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M5 13l4 4L19 7"/>
    </svg>

    <!-- TEXT -->
    <h1 class="text-2xl font-bold text-white mb-2">Payment Successful!</h1>
    <p class="text-gray-300">You will be redirected to Home...</p>

</div>

<script>
    setTimeout(() => {
        window.location.href = "/home";
    }, 2000);
</script>

</body>

</html>
