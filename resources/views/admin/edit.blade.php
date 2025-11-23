<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-10">

<div class="max-w-xl mx-auto bg-white p-6 rounded-xl shadow">
    <h1 class="text-xl font-bold mb-4">Edit Product</h1>
    <form action="{{ route('admin.product.update', $product->id) }}"
          method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="font-medium">Product Name</label>
            <input type="text" name="name" value="{{ $product->name }}" class="w-full border rounded-lg px-3 py-2" required>
        </div>

        <div>
            <label class="font-medium">Product Image</label>
            <input type="file" name="image" class="w-full border rounded-lg px-3 py-2">
            <p class="text-sm text-gray-600 mt-1">Current: {{ $product->image }}</p>
        </div>

        <div>
            <label class="font-medium">Created At</label>
            <input type="datetime-local" name="created_at"
                   value="{{ $product->created_at->format('Y-m-d\TH:i') }}"
                   class="w-full border rounded-lg px-3 py-2" required>
        </div>

        <div>
            <label class="font-medium">Category</label>
            <select name="category" class="w-full border rounded-lg px-3 py-2">
                <option {{ $product->category == 'Gaming Laptop' ? 'selected' : '' }}>Gaming Laptop</option>
                <option {{ $product->category == 'Gaming Smartphone' ? 'selected' : '' }}>Gaming Smartphone</option>
                <option {{ $product->category == 'Gaming Mouse' ? 'selected' : '' }}>Gaming Mouse</option>
                <option {{ $product->category == 'Mouse Pad' ? 'selected' : '' }}>Mouse Pad</option>
                <option {{ $product->category == 'Microphone' ? 'selected' : '' }}>Microphone</option>
                <option {{ $product->category == 'Gaming Chair' ? 'selected' : '' }}>Gaming Chair</option>
                <option {{ $product->category == 'Gaming Desk' ? 'selected' : '' }}>Gaming Desk</option>
                <option {{ $product->category == 'Keyboard' ? 'selected' : '' }}>Keyboard</option>
                <option {{ $product->category == 'Monitor' ? 'selected' : '' }}>Monitor</option>
                <option {{ $product->category == 'GVR Headshet' ? 'selected' : '' }}>GVR Headshet</option>
                <option {{ $product->category == 'Webcam' ? 'selected' : '' }}>Webcam</option>
                <option {{ $product->category == 'Speakers' ? 'selected' : '' }}>Speakers</option>
                <option {{ $product->category == 'Headphones' ? 'selected' : '' }}>Headphones</option>
                <option {{ $product->category == 'PS5' ? 'selected' : '' }}>PS5</option>
                <option {{ $product->category == 'Console' ? 'selected' : '' }}>Console</option>
                <option {{ $product->category == 'CPU' ? 'selected' : '' }}>CPU</option>
            </select>
        </div>

        <div>
            <label class="font-medium">Price</label>
            <input type="number" name="price" value="{{ $product->price }}" class="w-full border rounded-lg px-3 py-2" required>
        </div>

        <div>
            <label class="font-medium">Quantity</label>
            <input type="number" name="quantity" value="{{ $product->quantity }}" class="w-full border rounded-lg px-3 py-2" required>
        </div>



        <div class="flex justify-end">
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg">Update Product</button>
        </div>
    </form>

</div>

</body>
</html>
