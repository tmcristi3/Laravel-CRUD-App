<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Produsele mele</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-200 via-gray-300 to-gray-400 flex items-center justify-center p-6">
  <div class="bg-white/30 backdrop-blur-md border border-white/40 rounded-xl shadow-lg max-w-md w-full p-8">
    <div class="w-full max-w-xl mb-6">
    <div class="flex justify-between items-center mb-6">
  <a href="http://127.0.0.1:8000/product" 
     class="text-blue-600 hover:text-blue-800 font-semibold transition-colors duration-300">
     &larr; Take me home
  </a>

  <a href="{{ route('product.showAll') }}" 
     class="text-blue-600 hover:text-blue-800 font-semibold transition-colors duration-300">
     View list
  </a>
</div>
  </div>
    <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Please enter your product</h1>
    <form action="{{route('product.store')}}" method="post" class="space-y-6">
        @csrf
      <div class="flex flex-col">
        <label for="name" class="mb-2 font-semibold text-gray-900">Name</label>
        <input
          id="name"
          type="text"
          name="name"
          placeholder="Name"
          class="pl-4 pr-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-300"
        />
      </div>

      <div class="flex flex-col">
        <label for="quantity" class="mb-2 font-semibold text-gray-900">Quantity</label>
        <input
          id="quantity"
          type="number"
          name="quantity"
          placeholder="Quantity"
          class="pl-4 pr-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-300"
        />
      </div>

      <div class="flex flex-col">
        <label for="price" class="mb-2 font-semibold text-gray-900">Price</label>
        <input
          id="price"
          type="number"
          name="price"
          placeholder="Price"
          class="pl-4 pr-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-300"
        />
      </div>

      <div class="flex flex-col">
        <label for="description" class="mb-2 font-semibold text-gray-900">Description</label>
        <input
          id="description"
          type="text"
          name="description"
          placeholder="Description"
          class="pl-4 pr-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-300"
        />
      </div>

      <div>
        <input
          type="submit"
          value="Submit"
          class="w-full cursor-pointer bg-blue-300 hover:bg-blue-400 transition-colors duration-300 rounded-xl py-2 font-semibold text-gray-900 border border-transparent focus:bg-blue-500"
        />
      </div>
    </form>
  </div>

</body>
</html>
