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
<main class="flex justify-center py-32">
    <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        
        <form class="mt-10 space-y-6" action="/login" method="POST">
            @csrf
            <h5 class="text-xl font-medium text-center text-gray-900 dark:text-white">Log In</h5>
            @error("error")
                <div class="flex p-4 mt-5 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                    <div>
                    <span class="font-medium">{{ $message }}</span> {{ session()->get("success") }}
                    </div>
                </div>
            @enderror
           <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                <input type="email" value="{{ old("email") }}" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#AACB73] focus:border-[#AACB73] block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                @error("email")
                     <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#AACB73] focus:border-[#AACB73] block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                @error("password")
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="w-full text-white bg-[#AACB73] hover:bg-[#70874c] focus:ring-4 focus:outline-none focus:ring-[#ccf58b] font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#AACB73] dark:hover:bg-[#70874c] dark:focus:ring-[#ccf58b]">Login to your account</button>
            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                Not registered? <a href="/register" class="text-[#7d9655] hover:underline dark:text-[#AACB73]">Create account</a>
            </div>
        </form>
    
    </div>
</main>
@vite('resources/js/app.js')
</body>
</html>
