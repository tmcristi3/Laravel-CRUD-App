<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Aplicatia CRUD</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-200 via-gray-300 to-gray-400 flex flex-col items-center justify-center p-6">

  <div class="bg-white/30 backdrop-blur-md border border-white/40 rounded-xl shadow-lg max-w-xl w-full p-8 text-center">
    <h1 class="text-3xl font-semibold text-gray-800 mb-8">Welcome to cMag!</h1>
    <a
      href="http://127.0.0.1:8000/product/create"
      class="inline-block bg-blue-300 hover:bg-blue-400 transition-colors duration-300 rounded-xl py-3 px-6 font-semibold text-gray-900 shadow-md"
    >
      Create a product
    </a>
    <a
      href="http://127.0.0.1:8000/products"
      class="inline-block bg-blue-300 hover:bg-blue-400 transition-colors duration-300 rounded-xl py-3 px-6 font-semibold text-gray-900 shadow-md"
    >
      View the list of products
    </a>
  </div>

</body>
</html>
