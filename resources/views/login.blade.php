<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form action="{{ route('login.post') }}" method="POST" onsubmit="preventLogin(event)">
        @csrf
        <div class="min-h-screen bg-gradient-to-br from-gray-200 via-gray-300 to-gray-500 flex items-center justify-center p-6">
            <div class="bg-white/30 backdrop-blur-md border border-white/40 rounded-xl shadow-lg max-w-md w-full p-8">
                <h1 class="flex items-center justify-center text-4xl font-extralight mb-5">cMag</h1>
                <div class="flex flex-col">
                    <label for="name" class="mb-2 font-semibold text-gray-900">E-mail</label>
                        <input id="email" type="email" name="email" value=""
                        class="pl-4 pr-4 py-2 rounded-md border mb-5 border-gray-300 
                            bg-white focus:bg-blue-50 
                            focus:outline-none focus:ring-2 focus:ring-blue-300 
                            transition-colors duration-300" />
                    </div>
                <div class="flex flex-col">
                    <label for="name" class="mb-2 font-semibold text-gray-900">Password</label>
                        <input id="password" type="password" name="password" value=""
                        class="pl-4 pr-4 py-2 rounded-md border border-gray-300 
                            bg-white focus:bg-blue-50 
                            focus:outline-none focus:ring-2 focus:ring-blue-300 
                            transition-colors duration-300" />
                    </div>
                <div class="text-center mt-4">
                <input type="checkbox" name="remember" id="remember"> 
                <label for="remember">Remember me</label>
                <div>
                    <input type="submit" value="Login"
                    class="mt-5 w-full cursor-pointer bg-blue-400 hover:bg-blue-500 transition-colors duration-300 rounded-xl py-2 font-semibold text-gray-900 border border-transparent focus:bg-blue-500" />
                </div>
                <div class="text-center mt-4">
                    <a href="/register" class="text-blue-600 hover:text-blue-800 transition-colors duration-300">
                    I don't have an account
                    </a>
                </div>
            </div>
        </div>
        <script>
        const email = document.getElementById("email");
        const password = document.getElementById("password");

        function preventLogin(event) {
            if(email.value === "" || password.value === "") {
                alert("Please fill in the form.");
                event.preventDefault();
                return;
            }
        }
    </script>
    </form>
</body>
</html>