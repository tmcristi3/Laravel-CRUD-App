<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>The list of products</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-200 via-gray-300 to-gray-400 flex items-center justify-center p-6">
  </div>
  <div class="bg-white/30 backdrop-blur-md border border-white/40 rounded-xl shadow-lg w-full max-w-5xl p-8">
    <div class="mb-4">
    <a href="http://127.0.0.1:8000/product" 
       class="text-blue-600 hover:text-blue-800 font-semibold transition-colors duration-300">
      &larr; Take me home
    </a>
  </div>
    <div class="flex justify-between items-center mb-6">
        
      <h1 class="text-3xl font-semibold text-gray-800">Products</h1>
      <a href="{{ route('product.create') }}" 
         class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-xl transition-colors duration-300">
        + Add a new product
      </a>
    </div>

    <div class="overflow-x-auto">
      <table class="min-w-full bg-white/40 backdrop-blur-sm shadow-inner">
        <thead class="bg-blue-300 text-gray-900">
          <tr>
            <th class="text-left py-3 px-4">ID</th>
            <th class="text-left py-3 px-4">Name</th>
            <th class="text-left py-3 px-4">Quantity</th>
            <th class="text-left py-3 px-4">Price</th>
            <th class="text-left py-3 px-4">Description</th>
            <th class="text-left py-3 px-4">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
          <tr class="border-t border-gray-200 hover:bg-white/20 transition">
            <td class="py-3 px-4">{{ $product->id }}</td>
            <td class="py-3 px-4">{{ $product->name }}</td>
            <td class="py-3 px-4">{{ $product->quantity }}</td>
            <td class="py-3 px-4">{{ $product->price }}</td>
            <td class="py-3 px-4">{{ $product->description }}</td>
            <td class="py-3 px-4 flex space-x-2">
              <a href="{{ route('product.edit', $product->id) }}" 
                 class="bg-green-400 transition:all hover:bg-green-500 text-white px-3 py-1 text-sm">
                Edit
              </a>
              <form action="{{ route('product.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 text-sm transition:all">
                  Delete
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
