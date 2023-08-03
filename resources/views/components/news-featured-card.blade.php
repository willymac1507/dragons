@props(['item'])

<article
    {{ $attributes->class(['transition-colors duration-300 hover:bg-gray-300 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }}>
    <div class="py-6 px-5 lg:flex">
        <div class="flex-1 lg:mr-8">
            <img src="{{ $item->image_url }}" alt="News item illustration" class="object-cover rounded-xl">
        </div>

        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
{{--                <x-category-label :category="$post->category"/>--}}

                <div class="mt-4">
                    <a href="/news/{{ $item->slug }}">
                        <h1 class="text-3xl">
                            {{ $item->headline }}
                        </h1>
                    </a>

                    <span class="mt-2 block text-gray-400 text-xs">
                        Published <time>{{ $item->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="text-lg my-2">
                <p>
                    {{ strip_tags(Str::of($item->body)->limit(150)) }}
                </p>

            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    {{-- TODO --}}
                    <img class="rounded-xl" width="75" height="75" src="{{ $item->author->avatar_url }}?u={{ $item->author->id }}" alt="avatar">
                    <div class="ml-3">
                        <a href="/?author={{ $item->author->name }}">
                            <h5 class="font-bold">
                                {{ $item->author->name }}
                            </h5>
                        </a>
                    </div>
                </div>

                <div class="hidden md:block">
                    <a href="news/{{ $item->slug }}"
                       class="transition-colors duration-300 text-xs font-semibold text-white bg-blue-500 hover:bg-blue-300 rounded-full py-2 px-8"
                    >Read More</a>
                </div>
            </footer>
        </div>
    </div>
</article>
