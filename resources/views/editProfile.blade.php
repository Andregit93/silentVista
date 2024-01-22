<x-main>
    <div class="px-2 mt-20 sm:px-20 sm:px-40">
        <h1 class="pb-10 text-3xl font-semibold text-center">Edit Profile</h1>
        <form class="w-full" enctype="multipart/form-data" action="{{ route("profile.update") }}" method="POST" enctype="multipart/form-data">
            @method("PUT")
            @csrf
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">name</label>
                <input type="text" value=" {{ old("name") ?? $user->name }}" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#AACB73] focus:border-[#AACB73] block w-full p-2.5" name="name">
                @error("name")
                     <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">username</label>
                <input type="text" value=" {{ old("username") ?? $user->username }}" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#AACB73] focus:border-[#AACB73] block w-full p-2.5" name="username">
                @error("username")
                     <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                <input type="file" id="image" class="block w-full px-2 text-sm text-[#70874c] border border-gray-300 rounded-lg bg-gray-50 focus:ring-[#AACB73] focus:border-[#AACB73]" name="image">
                @error("image")
                     <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        <button type="submit" class="text-white bg-[#AACB73] hover:bg-[#70874c] focus:ring-4 focus:outline-none focus:ring-[#ccf58b] font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:hover:bg-[#AACB73] dark:focus:ring-[#ccf58b]">Submit</button>
        </form>                             
    
    </div>
</x-main>