<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PS5 Slim - Product Page (Tailwind)</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom theme tweaks */
        :root{
            --glass: rgba(255,255,255,0.04);
            --muted: rgba(255,255,255,0.6);
        }
        /* subtle rounded image shadow similar to design */
        .img-glow{box-shadow: 0 8px 30px rgba(2,6,23,0.7);}
    </style>
</head>
<body class="antialiased bg-gradient-to-br from-[#2b2a34] via-[#2a2b38] to-[#151423] text-white min-h-screen">
<div class="max-w-7xl mx-auto px-6 py-10">
    <!-- Header -->
    <header class="flex items-center justify-between mb-8">
        <div class="flex items-center gap-3">
            <div class="w-11 h-11 bg-gradient-to-br from-indigo-600 to-indigo-400 rounded-2xl flex items-center justify-center shadow-md">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="8" r="3" stroke="white" stroke-width="1.2"/><path d="M4 20c2-4 7-6 8-6s6 2 8 6" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <span class="font-semibold text-lg">J-TECH ZONE</span>
        </div>
        <nav class="hidden md:flex items-center gap-6 text-sm text-gray-300">
            <a href="#">Home</a>
            <a href="#">Product</a>
            <a href="#">About Me</a>
            <a href="#">Contact Me</a>
            <a href="#">Shop</a>
            <a href="#">Merchand</a>
        </nav>
        <div class="flex items-center gap-3">
            <div class="hidden md:flex items-center gap-2 text-sm text-gray-300">
                <span>Valak</span>
            </div>
            <div class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center">V</div>
        </div>
    </header>

    <!-- Main content -->
    <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 lg:grid-cols-2 gap-12">

        {{-- LEFT SIDE (Images) --}}
        <div class="flex gap-4">

            {{-- Thumbnails (manual tanpa foreach) --}}
            <div class="flex flex-col gap-4">
                <img  src="/img/laptop-3.jpg" class="w-20 h-20 object-cover rounded-lg cursor-pointer border border-gray-700 hover:border-indigo-400 transition"/>
                <img  src="/img/laptop-3.jpg" class="w-20 h-20 object-cover rounded-lg cursor-pointer border border-gray-700 hover:border-indigo-400 transition"/>
                <img  src="/img/laptop-3.jpg" class="w-20 h-20 object-cover rounded-lg cursor-pointer border border-gray-700 hover:border-indigo-400 transition"/>
            </div>

            {{-- Main Image --}}
            <div class="flex-1">
                <img src="/img/laptop-3.jpg" class="w-full h-auto rounded-2xl shadow-2xl object-cover"/>
            </div>
        </div>

        {{-- RIGHT SIDE (Title + Rating + Price + Quantity + Button) --}}
        <div class="space-y-6">
            <h1 class="text-4xl font-bold leading-tight">PS5 Slim Console Disc</h1>


            <div class="text-4xl font-semibold text-indigo-400">
                Rp 9.679.998
            </div>

            <p class="text-gray-300 leading-relaxed">
                Sony’s Powerful Video Game Console Featuring A Custom AMD Zen 2 CPU And AMD RDNA 2 GPU,
                Delivering 4K Graphics And High-Frame-Rate Gameplay Up To 120fps.
            </p>

            {{-- Quantity + Add to Cart --}}
            <div class="flex items-center gap-4 pt-3">
                <div class="flex items-center border border-gray-500 rounded-lg px-3 py-2">
                    <button class="px-3 text-2xl select-none">-</button>
                    <span class="px-4 text-lg select-none">1</span>
                    <button class="px-3 text-2xl select-none">+</button>
                </div>


                <button class="bg-indigo-600 hover:bg-indigo-700 transition px-8 py-3 rounded-lg font-medium text-white">
                    Add to Cart
                </button>
            </div>
        </div>

    </div>

                <!-- Tabs -->
                <div class="mt-10 border-t border-white/6 pt-6">
                    <div class="flex gap-8 text-sm text-gray-300">
                        <button class="pb-3 border-b-2 border-transparent hover:border-indigo-500">Product Details</button>
                        <button class="pb-3 border-b-2 border-indigo-500 font-medium">Rating & Reviews</button>
                        <button class="pb-3 border-b-2 border-transparent hover:border-indigo-500">FAQs</button>
                    </div>

                    <!-- Reviews list -->
                    <div class="mt-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-semibold">All Reviews <span class="text-sm text-gray-400">(451)</span></h3>
                            <div class="flex items-center gap-3">
                                <button class="bg-white/6 px-3 py-2 rounded-full text-sm">Latest</button>
                                <button class="bg-indigo-600 px-4 py-2 rounded-full text-sm">Write a Review</button>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Review card 1 -->
                            <article class="p-6 rounded-xl bg-gradient-to-br from-[#111017] to-[#121121] border border-white/6">
                                <div class="flex items-start gap-4">
                                    <div class="w-10 h-10 rounded-full bg-yellow-400 flex items-center justify-center font-semibold text-gray-900">S</div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <div class="font-semibold">Samantha D.</div>
                                            <div class="text-sm text-gray-400">Posted on August 14, 2023</div>
                                        </div>
                                        <p class="text-sm text-gray-300 mt-3">“I absolutely love this t-shirt! The design is unique and the fabric feels so comfortable. As a fellow designer, I appreciate the attention to detail.”</p>
                                    </div>
                                </div>
                            </article>

                            <!-- Review card 2 -->
                            <article class="p-6 rounded-xl bg-gradient-to-br from-[#111017] to-[#121121] border border-white/6">
                                <div class="flex items-start gap-4">
                                    <div class="w-10 h-10 rounded-full bg-yellow-400 flex items-center justify-center font-semibold text-gray-900">A</div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <div class="font-semibold">Alex M.</div>
                                            <div class="text-sm text-gray-400">Posted on August 15, 2023</div>
                                        </div>
                                        <p class="text-sm text-gray-300 mt-3">“The t-shirt exceeded my expectations! The colors are vibrant and the print quality is top-notch. Being a UI/UX designer myself, I'm quite picky about aesthetics.”</p>
                                    </div>
                                </div>
                            </article>
                        </div>

                    </div>
                </div>

            </div>
        </section>
    </main>

    <footer class="mt-16 text-sm text-gray-400 text-center">© 2025 J-TECH ZONE — All rights reserved</footer>
</div>
</body>
</html>
