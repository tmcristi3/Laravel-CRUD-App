<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Edit Product</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-200 via-gray-300 to-gray-400 flex items-center justify-center p-6">
  <div class="bg-white/30 backdrop-blur-md border border-white/40 rounded-xl shadow-lg max-w-md w-full p-8">
    <div class="w-full max-w-xl mb-6">
      <a href="{{ route('product.showAll') }}"
         class="text-blue-600 hover:text-blue-800 font-semibold transition-colors duration-300">
         &larr; Back to list
      </a>
    </div>

    <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Edit Product</h1>

    <form action="{{ route('product.update', $product->id) }}" method="POST" class="space-y-6">
      @csrf
      @method('PUT')

      <div class="flex flex-col">
        <label for="name" class="mb-2 font-semibold text-gray-900">Name</label>
        <input id="name" type="text" name="name" value="{{ old('name', $product->name) }}"
          class="pl-4 pr-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-300" />
      </div>

      <div class="flex flex-col">
        <label for="quantity" class="mb-2 font-semibold text-gray-900">Quantity</label>
        <input id="quantity" type="number" name="quantity" value="{{ old('quantity', $product->quantity) }}"
          class="pl-4 pr-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-300" />
      </div>

      <div class="flex flex-col">
        <label for="price" class="mb-2 font-semibold text-gray-900">Price</label>
        <input id="price" type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}"
          class="pl-4 pr-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-300" />
      </div>

      <div class="flex flex-col">
        <label for="description" class="mb-2 font-semibold text-gray-900">Description</label>
        <input id="description" type="text" name="description" value="{{ old('description', $product->description) }}"
          class="pl-4 pr-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-300" />
      </div>

      <div>
        <input type="submit" value="Update"
          class="w-full cursor-pointer bg-blue-300 hover:bg-blue-400 transition-colors duration-300 rounded-xl py-2 font-semibold text-gray-900 border border-transparent focus:bg-blue-500" />
      </div>
    </form>
  </div>
</body>
</html>
