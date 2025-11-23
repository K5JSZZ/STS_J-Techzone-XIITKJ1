<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="iamge/png" href="{{ asset('img/ ') }}"/>

    <link rel="stylesheet" href="css/app.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_forward" />
    <title>Eccomerce</title>
</head>
<body>

<div class="bg-gray-900">
    <header class="absolute inset-x-0 top-0 z-50">
        <nav aria-label="Global" class="flex items-center justify-between p-6 lg:px-8">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img src="/img/image__1_-removebg-preview.png" alt="" class="h-25 w-auto" />
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-200">
                    <span class="sr-only">Open main menu</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>



            <div class="hidden lg:flex lg:gap-x-12">
                <a href="#" class="text-sm/6 font-semibold text-white">Home</a>
                <nav class="flex items-center space-x-6 text-white font-medium">
                    <div class="relative">
                        <button id="produkBtn" class="flex items-center space-x-1 focus:outline-none">
                            <a href="{{ url('produk') }}"><span>Product</span></a>
                        </button>

                    </div>

                    <a href="#about" id="aboutLink" class="text-sm/6 font-semibold text-white">About Me</a>
                    <a href="#contact" id="contactLink" class="text-sm/6 font-semibold text-white">Contact Me</a>
                    <a href="{{ url('shop') }}" class="text-sm/6 font-semibold text-white">Shop</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <div class="relative" id="profileDropdown">
                    <!-- Tombol Profile -->
                    <button id="profileBtn" class="flex items-center space-x-2 focus:outline-none group">
                        <img src="img/account-1.jpg" alt="User"
                             class="w-10 h-10 rounded-full border-2 border-purple-500 object-cover transition group-hover:scale-105">
                        <span class="hidden lg:block text-white font-medium">{{ auth()->user()->name }}</span>
                        <svg class="w-4 h-4 text-white group-hover:rotate-180 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <!-- Menu Dropdown -->
                    <div id="profileMenu" class="absolute right-0 mt-3 w-64 bg-white text-gray-700 rounded-xl shadow-lg hidden overflow-hidden">
                        <!-- Header Profile -->
                        <div class="flex items-center gap-3 px-4 py-3 bg-gradient-to-r from-purple-500 to-indigo-500">
                            <img src="img/account-1.jpg" alt="User" class="w-12 h-12 rounded-full border-2 border-white object-cover">
                            <div>
                                <p class="text-sm font-semibold text-white">{{ auth()->user()->name }}</p>
                                <p class="text-xs text-gray-200">{{ auth()->user()->email }}</p>
                            </div>
                        </div>

                        <!-- Menu List -->
                        <div class="py-2">
                            <a href="/profile/personal" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 transition">
                                <i class='bx bx-user-circle text-lg'></i> My Profile
                            </a>

                            <a href="/notifications" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 transition">
                                <i class='bx bx-bell text-lg'></i> Notifications
                            </a>

                                <a href="{{ route('logout') }}" type="submit" class="flex w-full items-center gap-2 px-4 py-2 text-red-600 hover:bg-gray-100 transition">
                                    <i class='bx bx-log-out text-lg'></i> Logout
                                </a>

                        </div>
                    </div>
                </div>
            </div>

        </nav>
        <el-dialog>
            <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
                <div tabindex="0" class="fixed inset-0 focus:outline-none">
                    <el-dialog-panel class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-100/10">
                        <div class="flex items-center justify-between">
                            <a href="#" class="-m-1.5 p-1.5">
                                <span class="sr-only">Your Company</span>
                                <img src="/img/image__1_-removebg-preview.png" alt="" class="h-15 w-auto" />
                            </a>
                            <button type="button" command="close" commandfor="mobile-menu" class="-m-2.5 rounded-md p-2.5 text-gray-200">
                                <span class="sr-only">Close menu</span>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                                    <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="mt-6 flow-root">
                            <div class="-my-6 divide-y divide-white/10">
                                <div class="space-y-2 py-6">
                                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5">Home</a>
                                    <a href="#about" id="aboutLink" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5">About Me</a>
                                    <a href="#contact" id="contactLink" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5">Contact Me</a>
                                    <a href="{{ url('shop') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5">Shop</a>
                                </div>
                                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                                    <div class="relative" id="profileDropdown">
                                        <!-- Tombol Profile -->
                                        <button id="profileBtn" class="flex items-center space-x-2 focus:outline-none group">
                                            <img src="img/account-1.jpg" alt="User"
                                                 class="w-10 h-10 rounded-full border-2 border-purple-500 object-cover transition group-hover:scale-105">
                                            <span class="hidden lg:block text-white font-medium">{{ auth()->user()->name }}</span>
                                            <svg class="w-4 h-4 text-white group-hover:rotate-180 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                                            </svg>
                                        </button>

                                        <!-- Menu Dropdown -->
                                        <div id="profileMenu" class="absolute right-0 mt-3 w-64 bg-white text-gray-700 rounded-xl shadow-lg hidden overflow-hidden">
                                            <!-- Header Profile -->
                                            <div class="flex items-center gap-3 px-4 py-3 bg-gradient-to-r from-purple-500 to-indigo-500">
                                                <img src="img/account-1.jpg" alt="User" class="w-12 h-12 rounded-full border-2 border-white object-cover">
                                                <div>
                                                    <p class="text-sm font-semibold text-white">{{ auth()->user()->name }}</p>
                                                    <p class="text-xs text-gray-200">{{ auth()->user()->email }}</p>
                                                </div>
                                            </div>

                                            <!-- Menu List -->
                                            <div class="py-2">
                                                <a href="/profile/personal" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 transition">
                                                    <i class='bx bx-user-circle text-lg'></i> My Profile
                                                </a>

                                                <a href="/notifications" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 transition">
                                                    <i class='bx bx-bell text-lg'></i> Notifications
                                                </a>

                                                <a href="{{ route('logout') }}" type="submit" class="flex w-full items-center gap-2 px-4 py-2 text-red-600 hover:bg-gray-100 transition">
                                                    <i class='bx bx-log-out text-lg'></i> Logout
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </el-dialog-panel>
                </div>
            </dialog>
        </el-dialog>
    </header>

    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div aria-hidden="true" class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
            <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#FF9B00] to-[#1C6EA4] opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75"></div>
        </div>
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">

            </div>
            <div class="flex flex-col justify-center gap-0 text-center">
                <h1 class="text-5xl font-semibold tracking-tight text-balance text-white sm:text-5xl">Gear Terbaik untuk Tingkatkan Level Gamingmu</h1>
                <p class="mt-8 text-lg font-medium text-pretty text-gray-400 sm:text-xl/8">Temukan laptop, PC, dan aksesoris gaming berkualitas tinggi. Performa maksimal, desain keren, dan harga bersaing untuk semua gamer.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="{{url('shop')}}" class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Start Shopping</a>
                    <a href="#" class="text-sm/6 font-semibold text-white">View <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>

    </div>
</div>




<div id="about" class="bg-gray-900 py-24 sm:py-32">
    <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
        <h2 class="text-center text-base/7 font-semibold text-indigo-400">About Me</h2>
        <p class="mx-auto mt-2 max-w-lg text-center text-4xl font-semibold tracking-tight text-balance text-white sm:text-5xl">Choose Our Website And Enjoy The Results</p>
        <div class="mt-10 grid gap-4 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2">
            <div class="relative lg:row-span-2">
                <div class="absolute inset-px rounded-lg bg-gray-800 lg:rounded-l-4xl"></div>
                <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
                    <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
                        <p class="mt-2 text-lg font-medium tracking-tight text-white max-lg:text-center">Mendukung Semua Perangkat</p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-400 max-lg:text-center">Nikmati pengalaman optimal di layar apa pun. Website kami dirancang responsif, cepat, dan nyaman digunakan, baik di ponsel, tablet, maupun laptop.</p>
                    </div>
                    <div class="@container relative min-h-120 w-full grow max-lg:mx-auto max-lg:max-w-sm">
                        <div class="absolute inset-x-8 top-10 bottom-0 overflow-hidden rounded-t-[12cqw] border-x-[3cqw] border-t-[3cqw] border-blue-50 bg-gray-900 outline outline-white/20">
                            <img src="img/image 18.png" alt="" class="size-full object-cover object-top" />
                        </div>
                    </div>
                </div>
                <div class="pointer-events-none absolute inset-px rounded-lg shadow-sm outline outline-white/15 lg:rounded-l-4xl"></div>
            </div>
            <div class="relative max-lg:row-start-1">
                <div class="absolute inset-px rounded-lg bg-gray-800 max-lg:rounded-t-4xl"></div>
                <div class="relative flex h-50 flex-col gap-5 overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
                    <div class="px-8 pt-8 sm:px-10 mt-10 sm:pt-10">
                        <p class="mt-2 text-lg font-medium tracking-tight text-white max-lg:text-center">Performa Tanpa Batas</p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-400 max-lg:text-center">Ditenagai teknologi terbaru untuk menghadirkan kecepatan, efisiensi, dan stabilitas maksimal di setiap tugas. Rasakan pengalaman bekerja dan bermain tanpa hambatan.</p>
                    </div>

                </div>
                <div class="pointer-events-none absolute inset-px rounded-lg shadow-sm outline outline-white/15 max-lg:rounded-t-4xl"></div>
            </div>
            <div class="relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2">
                <div class="absolute inset-px rounded-lg bg-gray-800"></div>
                <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)]">
                    <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                        <p class="mt-2 text-lg font-medium tracking-tight text-white max-lg:text-center">Elektronik Gaming Berkualitas Tinggi</p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-400 max-lg:text-center">Nikmati pengalaman bermain game yang lebih seru dengan perangkat elektronik berperforma tinggi. Dari grafis yang memukau, respons cepat tanpa lag, hingga desain futuristik yang memanjakan mata.</p>
                    </div>
                </div>
                <div class="pointer-events-none absolute inset-px rounded-lg shadow-sm outline outline-white/15"></div>
            </div>
            <div class="relative lg:row-span-2">

                <div class="absolute inset-px rounded-lg bg-gray-800 max-lg:rounded-b-4xl lg:rounded-r-4xl"></div>


                <div class="relative flex h-full flex-col overflow-hidden
        rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)]
        lg:rounded-r-[calc(2rem+1px)] shadow-lg hover:shadow-2xl transition-shadow duration-300 ease-in-out">


                    <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-4">
                        <p class="mt-2 text-lg font-medium tracking-tight text-white max-lg:text-center">
                            Biaya yang sangat terjangkau
                        </p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-400 max-lg:text-center">
                            Cocok untuk startup hingga enterprise, bayar sesuai kebutuhan, nikmati integrasi tanpa hambatan.
                        </p>
                    </div>

                    <div class="relative flex-1">
                        <img src="img/image19.png"
                             alt="Powerful APIs"
                             class="w-full h-full object-cover transform hover:scale-101 transition-transform duration-500 ease-in-out" />
                    </div>


                    <div class="pointer-events-none absolute inset-px rounded-lg shadow-sm
            outline outline-white/15 max-lg:rounded-b-4xl lg:rounded-r-4xl">
                    </div>
                </div>
            </div>

        </div>


        <div class="flex flex-col items-center mt-56 gap-10 ">

            <div class="text flex flex-col gap-5">
                <p class="mx-auto mt-2 max-w-lg text-center text-4xl font-semibold tracking-tight text-balance text-white sm:text-5xl">Elevate Your Brand, Transform Your Future</p>
                <p class="mx-auto mt-2 max-w-lg text-center text-1xl font-semibold tracking-tight text-balance text-gray-500 sm:text-1xl">Kami membuat situs web yang menginspirasi, menghubungkan, dan memberikan hasil, nikmati situs web yang dibangun untuk keindahan, kecepatan, dan dampak.</p>
            </div>


            <div class="container">
                <div class="card-images" style="background-image: url('img/laptop-1.jpg');" >
                    <div class="info">
                        <h2>Laptop</h2>
                        <p>Lenovo Legion (seri gaming Lenovo)</p>
                    </div>
                </div>
                <div class="card-images" style="background-image: url('img/laptop-2.jpg');" >
                    <div class="info">
                        <h2>Laptop</h2>
                        <p>Acer Predator Helios / Nitro</p>
                    </div>
                </div>
                <div class="card-images active" style="background-image: url('img/laptop-3.jpg');">
                    <div class="info">
                        <h2>Laptop</h2>
                        <p>ASUS ROG (Republic of Gamers)</p>
                    </div>
                </div>
                <div class="card-images" style="background-image: url('img/laptop-4.jpg');">
                    <div class="info">
                        <h2>Laptop</h2>
                        <p>MSI Gaming Laptop.</p>
                    </div>
                </div>
                <div class="card-images" style="background-image: url('img/laptop-5.jpg');">
                    <div class="info">
                        <h2>Laptop</h2>
                        <p>ASUS ROG Strix.</p>
                    </div>
                </div>
                <div class="card-images" style="background-image: url('img/laptop-6.jpg');" >
                    <div class="info">
                        <h2>Laptop</h2>
                        <p>ASUS TUF Gaming</p>
                    </div>
                </div>
            </div>

        </div>


        <div class="max-w-7xl mx-auto px-4 py-12 mt-70">

            <h1 class="text-4xl md:text-5xl font-semibold text-center mb-12 text-white">Trending Products</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">


                <div class="lg:row-span-2 lg:col-span-1 flex items-center justify-center bg-gray-900 rounded-2xl shadow-lg overflow-hidden">
                    <img src="img/Rectangle 12.png"
                         alt="Xbox Controller" class="object-contain w-full h-full">
                </div>


                <?php foreach ($products->take(6) as $product):  ?>
                <div class="bg-gray-800 rounded-2xl shadow-lg flex flex-col overflow-hidden">
                    <!-- Gambar produk full -->
                    <div class="w-full h-48 md:h-60 lg:h-64">
                        <img src="<?= $product['image']; ?>"
                             alt="<?= $product['name']; ?>"
                             class="w-full h-full object-cover">
                    </div>

                    <!-- Info produk -->
                    <div class="p-4 flex flex-col flex-1">
                        <!-- Nama produk + Wishlist sejajar atas -->
                        <div class="flex justify-between items-start">
                            <h2 class="font-semibold text-lg text-white leading-tight">
                                    <?= $product['name']; ?>
                            </h2>
                            <button class="text-gray-400 hover:text-pink-500 mt-1">
                                <i class='text-2xl bxr  bx-heart'  ></i>
                            </button>
                        </div>

                        <!-- Harga -->
                        <p class="text-gray-300 mb-4">Rp <?= number_format($product['price'], 0, ',', '.'); ?></p>

                        <!-- Tombol Add To Cart -->
                        <button class="mt-auto bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded-lg font-medium">
                            Add To Cart
                        </button>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>



        <div id="contact" class="bg-gray-900 py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-4xl font-semibold tracking-tight text-pretty text-white sm:text-5xl">Wawasan & Inspirasi Terbaru</h2>
                    <p class="mt-2 text-lg/8 text-gray-300">Temukan website pilihan andalan anda dengan berbagai ahli membuat website</p>
                </div>
                <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-700 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    <article class="flex max-w-xl flex-col items-start justify-between">
                        <div class="flex items-center gap-x-4 text-xs">
                            <time datetime="2020-03-16" class="text-gray-400">Friday, 15 August 2025</time>
                            <a href="#" class="relative z-10 rounded-full bg-gray-800/60 px-3 py-1.5 font-medium text-gray-300 hover:bg-gray-800">Developer</a>
                        </div>
                        <div class="group relative grow">
                            <h3 class="mt-3 text-lg/6 font-semibold text-white group-hover:text-gray-300">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Boost your conversion rate
                                </a>
                            </h3>
                            <p class="mt-5 line-clamp-3 text-sm/6 text-gray-400">Temukan strategi cerdas untuk meningkatkan konversi website Anda. Dari optimasi desain hingga pengalaman pengguna, pelajari cara mengubah pengunjung menjadi pelanggan setia.</p>
                        </div>
                        <div class="relative mt-8 flex items-center gap-x-4 justify-self-end">
                            <img src="img/Wanglin.jpg" alt="" class="size-10 rounded-full bg-gray-800" />
                            <div class="text-sm/6">
                                <p class="font-semibold text-white">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Jason sairyo
                                    </a>
                                </p>
                                <p class="text-gray-400">Front End and BackEnd Developer</p>
                            </div>
                        </div>
                    </article>
                    <article class="flex max-w-xl flex-col items-start justify-between">
                        <div class="flex items-center gap-x-4 text-xs">
                            <time datetime="2020-03-10" class="text-gray-400">Friday, 15 August 2025</time>
                            <a href="#" class="relative z-10 rounded-full bg-gray-800/60 px-3 py-1.5 font-medium text-gray-300 hover:bg-gray-800">Designer</a>
                        </div>
                        <div class="group relative grow">
                            <h3 class="mt-3 text-lg/6 font-semibold text-white group-hover:text-gray-300">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    How to use search engine optimization to drive sales
                                </a>
                            </h3>
                            <p class="mt-5 line-clamp-3 text-sm/6 text-gray-400">Kenali teknik SEO terbaru yang mampu mendongkrak penjualan Anda. Mulai dari riset kata kunci hingga strategi konten, jadikan website Anda lebih mudah ditemukan oleh calon pelanggan.</p>
                        </div>
                        <div class="relative mt-8 flex items-center gap-x-4 justify-self-end">
                            <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-10 rounded-full bg-gray-800" />
                            <div class="text-sm/6">
                                <p class="font-semibold text-white">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Marco Marchelino
                                    </a>
                                </p>
                                <p class="text-gray-400">Designer High-Fidelity and Wireframe</p>
                            </div>
                        </div>
                    </article>
                    <article class="flex max-w-xl flex-col items-start justify-between">
                        <div class="flex items-center gap-x-4 text-xs">
                            <time datetime="2020-02-12" class="text-gray-400">Friday, 15 August 2025</time>
                            <a href="#" class="relative z-10 rounded-full bg-gray-800/60 px-3 py-1.5 font-medium text-gray-300 hover:bg-gray-800">Designer</a>
                        </div>
                        <div class="group relative grow">
                            <h3 class="mt-3 text-lg/6 font-semibold text-white group-hover:text-gray-300">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Improve your customer experience
                                </a>
                            </h3>
                            <p class="mt-5 line-clamp-3 text-sm/6 text-gray-400">Bangun pengalaman pelanggan yang lebih baik dengan desain interaktif dan layanan yang personal. Karena kepuasan pelanggan adalah kunci loyalitas jangka panjang.</p>
                        </div>
                        <div class="relative mt-8 flex items-center gap-x-4 justify-self-end">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-10 rounded-full bg-gray-800" />
                            <div class="text-sm/6">
                                <p class="font-semibold text-white">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Helen
                                    </a>
                                </p>
                                <p class="text-gray-400">Designer Prototype</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>


        <footer class="bg-gray-900 text-gray-300 py-10">
            <div class="max-w-7xl mx-auto px-6 lg:px-12">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">


                    <div>
                        <h2 class="text-2xl font-bold text-white">J-Tech Zone</h2>
                        <p class="mt-3 text-sm">
                            Solusi terbaik untuk menemukan laptop idaman anda di sini.
                            Jangan lupa di kunjungi ya!
                        </p>
                    </div>


                    <div>
                        <h3 class="text-lg font-semibold text-white mb-4">Navigasi</h3>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#" class="hover:text-white transition">Beranda</a></li>
                            <li><a href="#" class="hover:text-white transition">Tentang Kami</a></li>
                            <li><a href="#" class="hover:text-white transition">Layanan</a></li>
                            <li><a href="#" class="hover:text-white transition">Kontak</a></li>
                        </ul>
                    </div>


                    <div>
                        <h3 class="text-lg font-semibold text-white mb-4">Resources</h3>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#" class="hover:text-white transition">Artikel</a></li>
                            <li><a href="#" class="hover:text-white transition">Tips & Trik</a></li>
                            <li><a href="#" class="hover:text-white transition">Tutorial</a></li>
                            <li><a href="#" class="hover:text-white transition">Karir</a></li>
                        </ul>
                    </div>


                    <div>
                        <h3 class="text-lg font-semibold text-white mb-4">Ikuti Kami</h3>
                        <div class="flex space-x-4">

                            <a href="#" class="hover:text-blue-500 transition">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22 12a10 10 0 10-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1.9 0 1.8.2 1.8.2v2h-1c-1 0-1.3.6-1.3 1.2V12h2.3l-.4 3h-1.9v7A10 10 0 0022 12z"/>
                                </svg>
                            </a>

                            <a href="#" class="hover:text-sky-400 transition">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.2 2H21l-6.6 7.6L22 22h-7.8l-5.3-7-6.1 7H2.1l7-8-6.7-9h8l4.8 6.4L18.2 2z"/>
                                </svg>
                            </a>

                            <a href="#" class="hover:text-blue-600 transition">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M4.98 3.5A2.5 2.5 0 112.5 6 2.5 2.5 0 014.98 3.5zM3 8h4v12H3zM9 8h3.8v1.7h.1c.5-.9 1.7-1.8 3.6-1.8C20.2 7.9 21 10 21 13.2V20h-4v-6c0-1.4 0-3.2-2-3.2s-2.3 1.5-2.3 3.1V20H9z"/>
                                </svg>
                            </a>

                            <a href="#" class="hover:text-pink-500 transition">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2h3.1c.2 1.4 1.1 2.6 2.3 3.3 1 .6 2.1.8 3.2.7v3.2c-1.2 0-2.4-.3-3.5-.8v6.7a7.4 7.4 0 11-6.9-7.4v3.2a4.2 4.2 0 104.2 4.2V2z"/>
                                </svg>
                            </a>

                            <a href="#" class="hover:text-red-600 transition">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.5 6.2a3 3 0 00-2.2-2.2C19.2 3.5 12 3.5 12 3.5s-7.2 0-9.3.5a3 3 0 00-2.2 2.2A31.3 31.3 0 000 12a31.3 31.3 0 00.5 5.8 3 3 0 002.2 2.2c2.1.5 9.3.5 9.3.5s7.2 0 9.3-.5a3 3 0 002.2-2.2A31.3 31.3 0 0024 12a31.3 31.3 0 00-.5-5.8zM9.5 15.5v-7l6 3.5-6 3.5z"/>
                                </svg>
                            </a>

                            <a href="#" class="hover:text-gray-400 transition">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 .5A12 12 0 000 12.7a12 12 0 008.2 11.5c.6.1.8-.3.8-.6v-2c-3.3.7-4-1.6-4-1.6a3.1 3.1 0 00-1.3-1.7c-1-.7.1-.7.1-.7 1.1.1 1.6 1.1 1.6 1.1 1 .1.8 2.3 3.2 1.7a2.7 2.7 0 01.8-1.7c-2.7-.3-5.5-1.4-5.5-6.1a4.8 4.8 0 011.3-3.3 4.4 4.4 0 01.1-3.3s1-.3 3.3 1.3a11 11 0 016 0c2.2-1.6 3.2-1.3 3.2-1.3a4.4 4.4 0 01.1 3.3 4.8 4.8 0 011.3 3.3c0 4.8-2.8 5.8-5.5 6.1.5.4.9 1.2.9 2.4v3.6c0 .3.2.7.8.6A12 12 0 0024 12.7 12 12 0 0012 .5z"/>
                                </svg>
                            </a>

                            <a href="#" class="hover:text-pink-400 transition">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm10 2a3 3 0 013 3v10a3 3 0 01-3 3H7a3 3 0 01-3-3V7a3 3 0 013-3h10zm-5 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zm0 2a3.5 3.5 0 110 7 3.5 3.5 0 010-7zm4.8-.9a1.1 1.1 0 100 2.2 1.1 1.1 0 000-2.2z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="border-t border-gray-700 mt-8 pt-6 text-sm text-center">
                    <p>© 2025 J-Tech Zone. All rights reserved.</p>
                </div>
            </div>
        </footer>



        <script>


            const cards = document.querySelectorAll('.card-images');

            cards.forEach(card => {
                card.addEventListener('click', () => {
                    cards.forEach(c => c.classList.remove('active'));
                    card.classList.add('active');
                });
            });

            const products = document.querySelectorAll(".product-item");
            const toggleBtn = document.getElementById("toggleBtn");
            let expanded = false;

            toggleBtn.addEventListener("click", () => {
                if (!expanded) {

                    products.forEach(p => p.classList.remove("hidden"));
                    toggleBtn.textContent = "Tampilkan Sebelumnya";
                    expanded = true;
                } else {

                    products.forEach((p, index) => {
                        if (index >= 6) {
                            p.classList.add("hidden");
                        }
                    });
                    toggleBtn.textContent = "Tampilkan Lebih Banyak";
                    expanded = false;
                }
            });
        </script>

        <script>
            const profileBtn = document.getElementById("profileBtn");
            const profileMenu = document.getElementById("profileMenu");

            profileBtn.addEventListener("click", () => {
                profileMenu.classList.toggle("hidden");
            });

            window.addEventListener("click", function(e) {
                if (!document.getElementById("profileDropdown").contains(e.target)) {
                    profileMenu.classList.add("hidden");
                }
            });

            document.getElementById('aboutLink').addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector('#about').scrollIntoView({
                    behavior: 'smooth'
                });
            });
        </script>


</body>
</html>
