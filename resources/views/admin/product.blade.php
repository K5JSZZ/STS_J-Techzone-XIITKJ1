<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://cdn.boxicons.com/3.0.4/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <title>Products Dashboard</title>
    <style>

        td, th { white-space: nowrap; }
        { filter: drop-shadow(0 4px 10px rgba(34,34,34,0.06)); }
    </style>
</head>
<body class="bg-gray-100 min-h-screen font-sans text-gray-700">


<div class="min-h-screen flex">

    <aside class="w-64 bg-white shadow-md hidden md:block relative">
        <div class="p-6 text-xl font-bold">Admin</div>

        <nav class="mt-4 space-y-2">
            <a class="block py-2 px-6 hover:bg-gray-100 flex items-center gap-2" href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a class="block py-2 px-6 hover:bg-gray-100 flex items-center gap-2" href="{{ route('admin.manage') }}">Manage Users</a>
            <a class="block py-2 px-6 bg-gray-100 flex items-center gap-2 font-medium" href="#">Product</a>
        </nav>

        <!-- Tombol Logout - Paling Bawah -->
        <div class="absolute bottom-6 left-0 w-full px-6">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button
                    type="submit"
                    class="w-full bg-red-500 text-white py-2 rounded-lg font-semibold hover:bg-red-600 transition">
                    Logout
                </button>
            </form>
        </div>
    </aside>



    <main class="flex-1">

        <header class="w-full bg-white border-b flex items-center justify-between px-6 py-4">
            <h1 class="text-lg font-semibold">Products</h1>
            <div class="flex items-center gap-4">
                <span class="text-sm">{{ Auth::guard('admin')->user()->name }}</span>
                <i class='bxr  bx-user'></i>
            </div>
        </header>


        <div class="p-6 space-y-6">


            <section class="rounded-xl overflow-hidden relative" aria-hidden="true">
                <div class="absolute inset-0" style="background: linear-gradient(160deg, rgba(255,255,255,0.06), rgba(255,255,255,0.06)), url('/mnt/data/dfc7b881-f51b-44c5-8093-eae5a9d7a83b.png') center/cover no-repeat;"></div>
                <div class="relative z-10 px-6 py-6">
                    <div class="bg-white/90 backdrop-blur rounded-xl p-4 shadow-sm grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">


                        <div class="flex items-center justify-between gap-4 p-4">
                            <div class="flex items-center gap-3">
                                <div class="w-11 h-11 rounded-lg bg-green-50 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 7h4l3 9h6l3-12h-7"/></svg>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500">Most Sold</p>
                                    <p class="font-semibold">Product 1</p>
                                </div>
                            </div>

                            <div class="text-right">
                                <p class="text-2xl font-bold">15.000</p>
                                <p class="text-sm text-green-600 mt-1">↑ 34.7%</p>
                            </div>
                        </div>


                        <div class="flex items-center justify-between gap-4 p-4">
                            <div class="flex items-center gap-3">
                                <div class="w-11 h-11 rounded-lg bg-indigo-50 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c1.657 0 3-1.567 3-3.5S13.657 1 12 1 9 2.567 9 4.5 10.343 8 12 8z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 21v-2a4 4 0 014-4h10a4 4 0 014 4v2"/></svg>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500">Highest Revenue</p>
                                    <p class="font-semibold">Product 2</p>
                                </div>
                            </div>

                            <div class="text-right">
                                <p class="text-2xl font-bold">5.968</p>
                                <p class="text-sm text-green-600 mt-1">↑ 34.7%</p>
                            </div>
                        </div>

                        <div class="flex items-center justify-between gap-4 p-4">
                            <div class="flex items-center gap-3">
                                <div class="w-11 h-11 rounded-lg bg-red-50 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 7h4l3 9h6l3-12h-7"/></svg>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500">Least Sold</p>
                                    <p class="font-semibold">Product 3</p>
                                </div>
                            </div>

                            <div class="text-right">
                                <p class="text-2xl font-bold">9.032</p>
                                <p class="text-sm text-green-600 mt-1">↑ 34.7%</p>
                            </div>
                        </div>


                        <div class="flex items-center justify-between gap-4 p-4">
                            <div class="flex items-center gap-3">
                                <div class="w-11 h-11 rounded-lg bg-amber-50 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 8v4l3 3"/></svg>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500">Active</p>
                                    <p class="font-semibold">1,000</p>
                                </div>
                            </div>

                            <div class="text-right">
                                <p class="text-2xl font-bold">1</p>
                                <p class="text-sm text-green-600 mt-1">↑ 34.7%</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
                <div class="w-full md:w-1/2 flex items-center gap-3">
                    <div class="relative w-full">
                        <form action="{{ route('admin.product') }}" method="GET" class="mb-4">
                            <input
                                type="text"
                                name="search"
                                placeholder="Cari nama produk..."
                                value="{{ request('search') }}"
                                class="px-3 py-2 border rounded-lg w-64"
                            >
                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg">
                                Cari
                            </button>
                        </form>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow" onclick="openModal()" >+ Add Product</button>
                </div>
            </section>


            <section class="bg-white rounded-xl p-4 shadow">

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y">
                        <thead class="bg-white sticky top-0">
                        <tr>
                            <th class="px-4 py-3 text-left text-sm text-gray-500">Product Name/SKU</th>
                            <th class="px-4 py-3 text-left text-sm text-gray-500">Created At</th>
                            <th class="px-4 py-3 text-left text-sm text-gray-500">Category</th>
                            <th class="px-4 py-3 text-right text-sm text-gray-500">Available Quantity</th>
                            <th class="px-4 py-3 text-right text-sm text-gray-500">Price</th>
                            <th class="px-4 py-3 text-center text-sm text-gray-500">Action</th>
                        </tr>
                        </thead>

                        <tbody class="bg-white divide-y">

                        @foreach($products as $product)

                        <tr class="hover:bg-gray-50">


                            <td class="px-4 py-4 flex items-center gap-3">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="" class="h-16 w-16 object-cover rounded-lg">

                                <div>
                                    <span class="font-semibold">{{ $product->name }}</span>
                                </div>
                            </td>

                            <td class="px-4 py-4 text-sm text-gray-500">{{ $product->created_at->format('d M Y') }}</td>
                            <td class="px-4 py-4 text-sm text-gray-500">{{ $product->category }}</td>
                            <td class="px-4 py-4 text-right font-medium"> {{ $product->quantity }}</td>



                            <td class="px-4 py-4 text-right font-semibold">Rp {{ number_format($product->price, 0, ',', '.') }}</td>

                            <td class="px-4 py-4 text-center flex items-center justify-center gap-2">

                                <a href="{{ route('admin.product.edit', $product->id) }}"
                                   class="p-2 bg-white border rounded shadow-sm hover:bg-blue-50 text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                              d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </a>

                                <form action="{{ route('admin.product.delete', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="p-2 bg-white border rounded shadow-sm hover:bg-red-50 text-red-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                  d="M6 18L18 6M6 6l12 12"/>
                                        </svg>
                                    </button>
                                </form>


                            </td>
                        </tr>

                        @endforeach


                        </tbody>
                    </table>
                </div>


                <div class="flex items-center justify-between mt-6">


                    <div class="text-sm text-gray-500">
                        Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }} results
                    </div>


                    <div class="flex items-center space-x-3">


                        @if ($products->onFirstPage())
                            <span class="px-3 py-1 rounded-lg bg-slate-800 text-gray-500 cursor-not-allowed">‹</span>
                        @else
                            <a href="{{ $products->previousPageUrl() }}"
                               class="px-3 py-1 rounded-lg bg-slate-800 text-gray-200 hover:bg-slate-700 transition">
                                ‹
                            </a>
                        @endif


                        @foreach ($products->links()->paginator->getUrlRange(1, $products->lastPage()) as $page => $url)
                            @if ($page == $products->currentPage())
                                <span class="px-4 py-1 rounded-lg bg-slate-900 text-white font-semibold shadow-lg">
                    {{ $page }}
                </span>
                            @else
                                <a href="{{ $url }}"
                                   class="px-4 py-1 rounded-lg bg-slate-800 text-gray-300 hover:bg-slate-700 hover:text-white transition">
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach


                        @if ($products->hasMorePages())
                            <a href="{{ $products->nextPageUrl() }}"
                               class="px-3 py-1 rounded-lg bg-slate-800 text-gray-200 hover:bg-slate-700 transition">
                                ›
                            </a>
                        @else
                            <span class="px-3 py-1 rounded-lg bg-slate-800 text-gray-500 cursor-not-allowed">›</span>
                        @endif

                    </div>
                </div>

            </section>

        </div>
    </main>
</div>


<div id="productModal" class="fixed inset-0 bg-black/40 backdrop-blur-sm hidden z-[9999]
    flex items-center justify-center px-4">


    <div class="bg-white rounded-xl shadow-xl w-full max-w-lg p-6 relative">

        <button onclick="closeModal()" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700">
            ✕
        </button>

        <h2 class="text-xl font-semibold mb-4">Add Product</h2>

        <form action="{{ route('admin.product.store') }}" method="POST" class="space-y-4" enctype="multipart/form-data">
            @csrf

            <div>
                <label class="font-medium">Product Name</label>
                <input type="text" name="name" class="w-full border rounded-lg px-3 py-2" placeholder="Product name" required>
            </div>

            <div>
                <label class="font-medium">Product Image</label>
                <input type="file" name="image" class="w-full border rounded-lg px-3 py-2">
            </div>

            <div>
                <label class="font-medium">Created At</label>
                <input type="datetime-local" class="w-full border rounded-lg px-3 py-2" name="created_at" required>
            </div>

            <div>
                <label class="font-medium">Category</label>
                <select name="category" class="w-full border rounded-lg px-3 py-2" required>
                    <option>Gaming Laptop</option>
                    <option>Gaming Smartphone</option>
                    <option>Gaming Mouse</option>
                    <option>Mouse Pad</option>
                    <option>Microphone</option>
                    <option>Gaming Chair</option>
                    <option>Gaming Desk</option>
                    <option>Keyboard</option>
                    <option>Monitor</option>
                    <option>GVR Headshet</option>
                    <option>Webcam</option>
                    <option>Speakers</option>
                    <option>Headphones</option>
                    <option>PS5</option>
                    <option>Console</option>
                    <option>CPU</option>
                </select>
            </div>

            <div>
                <label class="font-medium">Price ($)</label>
                <input type="number" name="price" class="w-full border rounded-lg px-3 py-2" placeholder="50" required>
            </div>

            <div>
                <label class="font-medium">Quantity</label>
                <input type="number" name="quantity" class="w-full border rounded-lg px-3 py-2" placeholder="0" required>
            </div>


            <div class="flex justify-end gap-3 pt-2">
                <button type="button" onclick="closeModal()"
                        class="px-4 py-2 border rounded-lg hover:bg-gray-100">
                    Cancel
                </button>

                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Save Product
                </button>
            </div>
        </form>


    </div>
</div>





<script>
    function openModal() {
        document.getElementById("productModal").classList.remove("hidden");
    }

    function closeModal() {
        document.getElementById("productModal").classList.add("hidden");
    }
</script>


<script src="https://cdn.jsdelivr.net/npm/alpinejs@3" defer></script>
</body>
</html>
