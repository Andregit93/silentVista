<x-main>
    <div class="flex flex-col px-1 sm:px-5 md:justify-between">
        <div class="flex items-center justify-start md:flex-row">
            @if($user->image)
                <img src="{{ asset("storage/$user->image") }}" alt="profile image" loading="lazy" class="w-20 p-1 mt-5 border-2 border-gray-300 rounded-full sm:block sm:w-[8.3rem] sm:h-[8.3rem]">
            @else
                <img src="{{ asset("icon/profile.svg") }}" alt="profile image" loading="lazy" class="w-20 p-1 mt-5 border-2 border-gray-300 rounded-full sm:block sm:w-[8.3rem]">
            @endif
            <div class="p-4 ">
                <div class="flex items-center w-full mt-5">
                    <div class="text-center sm:py-5 sm:pl-8 sm:pr-7">
                        <h1 class="text-xl font-semibold sm:text-3xl">{{ $user->posts->count() }}</h1>
                        <p class="text-[0.7rem] sm:text-sm text-gray-500">Materials</p>
                    </div>
                    <div class="ml-5 text-center sm:ml-0 sm:py-5 sm:px-7">
                        <h1 class="text-xl font-semibold sm:text-3xl">{{ $user->follower->count() }}</h1>
                        <p class="text-[0.7rem] sm:text-sm text-gray-500">Followers</p>
                    </div>       
                    <div class="ml-4 text-center sm:ml-0 sm:px-4 sm:py-5">
                        <h1 class="text-xl font-semibold sm:text-3xl">{{ $user->follows->count() }}</h1>
                        <p class="text-[0.7rem] sm:text-sm text-gray-500">Following</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="justify-between ml-2 sm:flex sm:items-center sm:mt-5">
            <div>
                <h5 class="mt-2 text-lg font-bold text-gray-900 sm:text-3xl dark:text-white">{{ $user->name }}</h5>
                <p class="font-light text-gray-500 mb-7">{{ $user->username }}</p>
            </div>
            <div>
            @if(Auth::user()->isNot($user))
            <form action="{{ route("follow", $user->username) }}" method="POST">
                @csrf
                <button type="submit" ref="#" class="px-5 py-2 mr-3 text-sm font-medium text-white bg-blue-700 rounded-md sm:ml-5 sm:px-10 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">
                @if(Auth::user()->follows()->where("following_user_id", $user->id)->first())
                    Unfollow
                @else
                    Follow
                @endif
                </button>
            </form>
            
            @else
                <a href="/profile/edit" class="px-5 py-2 mr-3 text-sm font-medium text-white bg-[#AACB73] rounded-md sm:ml-5 sm:px-10 hover:bg-[#70874c] focus:ring-4 focus:outline-none focus:ring-[#ccf58b] dark:bg-[#AACB73] dark:hover:bg-bg-[#70874c] dark:focus:ring-[#ccf58b] ">Edit Profile</a>
            @endif
            </div>
        </div>
    </div>
    
    <div>
        <div class="text-4xl border-t border-gray-200 my-9 sm:my-0 sm:mb-9"></div>
        <div class="flex items-center justify-between w-full">
            <a href="/post/create" class="p-2 ml-2 text-sm bg-white border border-gray-300 rounded-lg hover:bg-gray-100">+ Add Material</a>
        @can("admin")
            <div class="flex">
                <a href="/category" class="mr-2"> 
                    <img src="{{ asset("icon/category.svg") }}" width="20" alt="categories" loading="lazy">
                </a>
                {{-- <a href="/user" class="ml-3 mr-2">  --}}
                <a href="#" class="ml-3 mr-2"> 
                    <img src="{{ asset("icon/user.svg") }}" width="20" alt="users">
                </a>
            </div>
        @endcan
        </div>
    @if(session()->has("success"))
        <div class="flex p-4 mt-5 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
            <div>
              <span class="font-medium">Success !</span> {{ session()->get("success") }}
            </div>
          </div>
    @endif
        <div class="grid gap-2 mt-8 xl:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 ">
            @foreach($user->posts as $post)
                <div class="w-[95%] md:mx-auto sm:mx-36">
                    <div class="max-w-sm mb-5 rounded-lg ">
                        <div>
                            @if($post->image)
                              <img class="object-cover h-48 rounded-lg w-96" src="{{ asset("storage/$post->image") }}" loading="lazy" alt="image post">
                            @else
                              <img class="object-cover h-48 rounded-lg w-96" src="{{ asset("image/1.jpg") }}" loading="lazy" alt="image post">
                            @endif
                        </div>
                        <div class="p-5 mt-3 bg-white border border-gray-200 shadow-md">
                            <div class="grid grid-cols-4 gap-4 mb-2">
                                <a href="/blog?category={{ $post->category->slug }}" class="py-1 text-sm text-center rounded-md bg-slate-200 text-slate-500">{{ $post->category->name }}</a>
                            </div>
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $post->title }}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700">{{ $post->created_at->diffForHumans() }}</p>
                        @if(Auth::user()->username == $user->username)
                            <div class="flex items-center">
                                <a href="{{ route("post.edit", $post->slug) }}">
                                    <img src="{{ asset("icon/edit.svg") }}" width="19" alt="">
                                </a>
                                <form action="{{ route("post.destroy", $post->slug) }}" method="POST" class="mt-2">
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit">
                                        <img src="{{ asset("icon/remove.svg") }}" width="25" alt="" class="ml-2">
                                    </button>
                                </form>
                            </div>
                        @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>
</x-main> 