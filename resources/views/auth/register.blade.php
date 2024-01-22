<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <style>
        body{
            font-family: monospace;
        }
    </style>
</head>
<body>
<main class="flex justify-center py-14">
    <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        
        <form class="mt-5 space-y-6" action="/register" method="POST">
            @csrf
            <h5 class="text-xl font-medium text-center text-gray-900 dark:text-white">Register</h5>
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your name</label>
                <input type="text" value="{{ old("name") }}" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#AACB73] focus:border-[#AACB73] w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                @error("name")
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your username</label>
                <input type="text"value="{{ old("username") }}" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#AACB73] focus:border-[#AACB73] w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
                @error("username")
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                <input type="email" value="{{ old("email") }}" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#AACB73] focus:border-[#AACB73] w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                @error("email")
                     <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                <input type="password"name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#AACB73] focus:border-[#AACB73] w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                @error("password")
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
    
            <button type="submit" class="w-full px-5 py-2 text-sm font-medium text-center text-white bg-[#AACB73] hover:bg-[#70874c] focus:ring-4 focus:outline-none focus:ring-[#ccf58b] dark:bg-[#AACB73] dark:hover:bg-[#70874c] dark:focus:ring-[#ccf58b]">Register</button>
            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                Alredy have account ? <a href="/login" class="text-[#7d9655] hover:underline dark:text-blue-500">Login</a>
            </div>
        </form>
  
    </div>
</main>

@vite('resources/js/app.js')
</body>
</html>