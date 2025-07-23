<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
            function onSubmit(event) {
                const email = document.getElementById("email");
                const password = document.getElementById("password");
                const reEnterPassword = document.getElementById("reEnterPassword");

                const emailValue = email.value;

                // regexu bun
                const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

                // vedem daca sunt goale inputurile
                if (
                    emailValue === "" ||
                    password.value.trim() === "" ||
                    reEnterPassword.value.trim() === ""
                ) {
                    alert("Please fill in all the forms.");
                    event.preventDefault();
                    return;
                }

                // validare regex cu cazuri speciale
                if (
                    !emailRegex.test(emailValue) ||
                    emailValue.includes("..") ||         // nu doua puncte consecutive
                    emailValue.includes(".@") ||         // nu punct chiar inainte de @
                    emailValue.startsWith(".") ||        // nu incepe cu punct
                    emailValue.endsWith(".")             // nu se termina cu punct
                ) {
                    alert("Please use a valid e-mail address.");
                    event.preventDefault();
                    return;
                }
                // macar 8 caractere parola
                if (password.value.length < 8) {
                    alert("The password should contain at least 8 characters.");
                    event.preventDefault();
                    return;
                }

                // vedem daca se matchuiesc parolele
                if (password.value !== reEnterPassword.value) {
                    alert("The passwords are not matching.");
                    event.preventDefault();
                    return;
                }

                // ok
                alert("Account created.");
            }
    </script>
</head>
<body>
    <form action="/register" onsubmit="onSubmit(event)" method="POST">
        @csrf
        <div class="min-h-screen bg-gradient-to-br from-gray-200 via-gray-300 to-gray-500 flex items-center justify-center p-6">
            <div class="bg-white/30 backdrop-blur-md border border-white/40 rounded-xl shadow-lg max-w-md w-full p-8">
                <div class=" mt-4">
                    <a href="/login" class="text-blue-600 hover:text-blue-800 transition-colors duration-300">
                    &larr; Back to login
                    </a>
                </div>
                <h1 class="flex items-center justify-center text-4xl font-extralight mb-5">cMag</h1>
                <div class="flex flex-col">
                    <label for="name" class="mb-2 font-semibold text-gray-900">Name</label>
                    <input id="name" type="text" name="name" value=""
                    class="pl-4 pr-4 py-2 rounded-md border mb-5 border-gray-300 
                        bg-white focus:bg-blue-50 
                        focus:outline-none focus:ring-2 focus:ring-blue-300 
                        transition-colors duration-300" />
                    </div>
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
                <div class="flex flex-col">
                    <label for="name" class="mt-5 mb-2 font-semibold text-gray-900">Re-enter Password</label>
                    <input id="reEnterPassword" type="password" name="password_confirmation" value=""
                    class="pl-4 pr-4 py-2 rounded-md border border-gray-300 
                        bg-white focus:bg-blue-50 
                        focus:outline-none focus:ring-2 focus:ring-blue-300 
                        transition-colors duration-300 mb-5" />
                    </div>
                <div>
                <input type="submit" value="Register"
                class="mt-5 w-full cursor-pointer bg-blue-400 hover:bg-blue-500 transition-colors duration-300 rounded-xl py-2 font-semibold text-gray-900 border border-transparent focus:bg-blue-500" />
                </div>
            </div>
        </div>
    </form>
</body>
</html>