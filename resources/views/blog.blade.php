<x-main>
    <x-search_input></x-search_input>
    <div>
        <h1 class="pt-24 pb-24 text-4xl font-semibold text-center">Latest Learning</h1>
        <div class="grid gap-2 xl:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 ">
            @foreach($posts as $post)
                <div class="w-[95%] md:mx-auto sm:mx-36">
                    <div class="max-w-sm mb-5 rounded-lg ">
                        <div>
                            @if($post->image)
                                <img class="object-cover h-48 rounded-lg w-96" loading="lazy" src="{{ asset("storage/$post->image") }}" alt="image post">
                            @else
                                <img class="object-cover h-48 rounded-lg w-96"loading="lazy" src="{{ asset("image/1.jpg") }}" alt="image post">
                            @endif
                        </div>
                        <div class="p-5 mt-3 bg-white border border-gray-200 shadow-md">
                            <div class="grid grid-cols-4 gap-4 mb-2">
                                <a href="/blog?category={{ $post->category->slug }}" class="py-1 text-sm text-center rounded-md text-[#87a15c]">{{ $post->category->name }}</a>
                            </div>
                            <a href="{{ route("post.show", $post->slug) }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $post->title }}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700">{{ $post->created_at->diffForHumans() }}</p>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{ $posts->links() }}
</x-main>