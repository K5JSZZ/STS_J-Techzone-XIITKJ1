<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail – Tailwind CSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">

<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            <div class="flex items-center space-x-2">
                <span class="text-2xl font-extrabold text-indigo-600">J-Tech Zone</span>
            </div>


            <nav class="hidden md:flex space-x-6 text-gray-600 font-medium">
                <a href="{{ url('home') }}" class="hover:text-indigo-600 transition">Home</a>
                <a href="{{ url('shop') }}" class="hover:text-indigo-600 transition">Shop</a>
                <a href="#" class="hover:text-indigo-600 transition">Categories</a>
                <a href="#" class="hover:text-indigo-600 transition">About</a>
                <a href="#" class="hover:text-indigo-600 transition">Contact</a>
            </nav>

            <div class="flex items-center space-x-4">
                <button class="hidden md:inline-block bg-indigo-600 text-white px-4 py-2 rounded-lg shadow hover:bg-indigo-700 transition">
                    Login
                </button>
                <button class="relative">

                    <svg class="w-6 h-6 text-gray-700 hover:text-indigo-600 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 7M7 13l-2 9m13-9l2 9m-5-9v9"></path>
                    </svg>

                    <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full px-1">3</span>
                </button>

                <button class="md:hidden text-gray-700 hover:text-indigo-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>



<main class="px-4 md:px-16 py-6 flex flex-col md:flex-row gap-8">
  
    <div class="flex flex-col md:w-1/2 gap-4">
        <div class="flex flex-col gap-2">
     
            <img id="main-image" src="img/oang-2.jpg" alt="T-shirt" class="w-full h-auto rounded-lg border">

         
            <div class="flex gap-2">
                <img class="thumbnail w-20 h-20 rounded-lg border cursor-pointer hover:opacity-80" src="img/orang-1.jpg" alt="T-shirt">
                <img class="thumbnail w-20 h-20 rounded-lg border cursor-pointer hover:opacity-80" src="img/orang-3.jpg" alt="T-shirt">
                <img class="thumbnail w-20 h-20 rounded-lg border cursor-pointer hover:opacity-80" src="img/orang-4.jpg" alt="T-shirt">
            </div>
        </div>
    </div>

    <div class="md:w-1/2 flex flex-col gap-4">
        <h1 class="text-3xl font-bold">LAPTOP ASUS TUF GAMING F15</h1>
        <div class="flex items-center gap-2">
            <div class="flex text-yellow-400">
                ★★★★☆
            </div>
            <span class="text-gray-500">4.5/5</span>
        </div>
        <div class="flex items-center gap-4">
            <span class="text-2xl font-bold">$260</span>
            <span class="line-through text-gray-400">$300</span>
            <span class="bg-pink-100 text-pink-600 px-2 py-1 rounded-full text-sm">-40%</span>
        </div>
        <p class="text-gray-600">
            This graphic t-shirt which is perfect for any occasion. Crafted from a soft and breathable fabric, it offers superior comfort and style.
            This graphic t-shirt which is perfect for any occasion. Crafted from a soft and breathable fabric, it offers superior comfort and style.
            This graphic t-shirt which is perfect for any occasion. Crafted from a soft and breathable fabric, it offers superior comfort and style.
        </p>


        <div>
            <h3 class="font-semibold mb-1">Select Colors</h3>
            <div class="flex gap-2">
                <button class="color-btn w-8 h-8 rounded-full border-2 border-gray-300 bg-olive-600"></button>
                <button class="color-btn w-8 h-8 rounded-full border-2 border-gray-300 bg-green-700"></button>
                <button class="color-btn w-8 h-8 rounded-full border-2 border-gray-300 bg-blue-900"></button>
            </div>
        </div>




        <div class="flex items-center gap-4 mt-4">
            <div class="flex items-center border rounded">
                <button class="quantity-btn px-3 py-2" data-action="decrease">-</button>
                <span id="quantity" class="px-4">1</span>
                <button class="quantity-btn px-3 py-2" data-action="increase">+</button>
            </div>
            <button class="bg-black text-white px-6 py-3 rounded hover:bg-gray-800">Add to Cart</button>
        </div>

    </div>
</main>


<div class="px-4 md:px-16 mt-8">
    <div class="border-b flex gap-8 text-gray-600">
        <button class="tab-btn pb-2 border-b-2 border-black font-semibold" data-tab="details">Product Details</button>
        <button class="tab-btn pb-2 hover:border-b-2 hover:border-gray-300" data-tab="reviews">Rating & Reviews</button>
        <button class="tab-btn pb-2 hover:border-b-2 hover:border-gray-300" data-tab="faqs">FAQs</button>
    </div>


    <div class="mt-6">

        <div class="tab-content space-y-4" id="details">
            <div class="bg-white p-6 rounded-lg shadow-sm border">
                <h3 class="text-xl font-semibold mb-2">Product Information</h3>
                <p class="text-gray-700 leading-relaxed">
                    This graphic t-shirt is crafted from soft and breathable fabric. Perfect for casual wear, outings, and layering under jackets. The material ensures comfort and durability for everyday use.
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm border">
                <h3 class="text-xl font-semibold mb-2">Material & Care</h3>
                <ul class="list-disc list-inside text-gray-700 leading-relaxed">
                    <li>100% Cotton</li>
                    <li>Machine wash cold, tumble dry low</li>
                    <li>Do not bleach</li>
                    <li>Iron on low heat if needed</li>
                </ul>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-sm border">
                <h3 class="text-xl font-semibold mb-2">Features</h3>
                <ul class="list-disc list-inside text-gray-700 leading-relaxed">
                    <li>Unique graphic print</li>
                    <li>Soft, breathable fabric</li>
                    <li>Available in multiple colors and sizes</li>
                    <li>Unisex fit</li>
                </ul>
            </div>
        </div>

        <!-- Reviews -->
        <div class="tab-content hidden" id="reviews">
            <div class="space-y-4">
                <div class="border p-4 rounded bg-white">
                    <div class="flex items-center gap-2">
                        <span class="text-yellow-400">★★★★☆</span>
                        <span class="font-semibold">Samantha D.</span>
                    </div>
                    <p class="text-gray-600 mt-2">
                        "I absolutely love this t-shirt! The design is unique and the fabric feels so comfortable. As a fellow designer, I appreciate the attention to detail. It's become my favorite go-to shirt."
                    </p>
                    <span class="text-gray-400 text-sm">Posted on August 14, 2023</span>
                </div>

                <div class="border p-4 rounded bg-white">
                    <div class="flex items-center gap-2">
                        <span class="text-yellow-400">★★★★☆</span>
                        <span class="font-semibold">Alex M.</span>
                    </div>
                    <p class="text-gray-600 mt-2">
                        "The t-shirt exceeded my expectations! The colors are vibrant and the print quality is top-notch. Being a UI/UX designer myself, I'm quite picky about aesthetics, and this t-shirt definitely gets a thumbs up from me."
                    </p>
                    <span class="text-gray-400 text-sm">Posted on August 15, 2023</span>
                </div>
            </div>
        </div>

        <!-- FAQs -->
        <div class="tab-content hidden" id="faqs">
            <div class="space-y-4">
                <div class="border p-4 rounded bg-white">
                    <h4 class="font-semibold">Q: What sizes are available?</h4>
                    <p class="text-gray-600 mt-1">We offer Small, Medium, Large, and X-Large sizes.</p>
                </div>
                <div class="border p-4 rounded bg-white">
                    <h4 class="font-semibold">Q: How do I wash this t-shirt?</h4>
                    <p class="text-gray-600 mt-1">Machine wash cold, tumble dry low, and avoid bleach for best results.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    const mainImage = document.getElementById('main-image');
    const thumbnails = document.querySelectorAll('.thumbnail');

    thumbnails.forEach(img => {
        img.addEventListener('click', () => {
            mainImage.src = img.src;
        });
    });


    const tabs = document.querySelectorAll('.tab-btn');
    const contents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = tab.getAttribute('data-tab');

            tabs.forEach(t => t.classList.remove('border-black', 'font-semibold'));
            tabs.forEach(t => t.classList.add('hover:border-gray-300'));

            tab.classList.add('border-black', 'font-semibold');

            contents.forEach(c => c.classList.add('hidden'));
            document.getElementById(target).classList.remove('hidden');
        });
    });


    const colorButtons = document.querySelectorAll('.color-btn');
    let selectedColor = null;
    colorButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            colorButtons.forEach(b => b.classList.remove('border-black'));
            btn.classList.add('border-black');
            selectedColor = btn.style.backgroundColor;
            console.log('Selected color:', selectedColor);
        });
    });


    const sizeButtons = document.querySelectorAll('.size-btn');
    let selectedSize = null;
    sizeButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            sizeButtons.forEach(b => b.classList.remove('bg-black','text-white'));
            sizeButtons.forEach(b => b.classList.add('hover:bg-gray-100'));
            btn.classList.remove('hover:bg-gray-100');
            btn.classList.add('bg-black','text-white');
            selectedSize = btn.getAttribute('data-size');
            console.log('Selected size:', selectedSize);
        });
    });


    const quantityDisplay = document.getElementById('quantity');
    const quantityButtons = document.querySelectorAll('.quantity-btn');
    let quantity = 1;

    quantityButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const action = btn.getAttribute('data-action');
            if(action === 'increase') quantity++;
            if(action === 'decrease' && quantity > 1) quantity--;
            quantityDisplay.textContent = quantity;
            console.log('Quantity:', quantity);
        });
    });
</script>


</body>
</html>
