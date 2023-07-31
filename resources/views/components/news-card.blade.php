@props (['item'])

<article
    {{ $attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-300 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl relative']) }}>
    <div class="py-6 px-5 h-full flex flex-col justify-between">
        <div>
            <img src="{{ $item->image_url }}" alt="Blog Post illustration" class="rounded-xl object-cover">
        </div>

        <div class="mt-8 flex flex-col flex-grow justify-between">
            <header>
                {{-- TODO --}}
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

            <div class="text-lg my-4">
                <p>
                    {{ strip_tags(Str::of($item->body)->limit(150)) }}
                </p>

            </div>

            <footer class="flex justify-between items-center">
                <div class="flex items-center text-sm">
                    {{-- TODO --}}
                    <img class="rounded-xl" width="75" height="75"
                         src="{{ $item->author->avatar_url }}?u={{ $item->author->id }}" alt="avatar">
                    <div class="ml-3">
                        <a href="/?author={{ $item->author->name }}">
                            <h5 class="font-bold text-xs">{{ $item->author->name }}</h5>
                        </a>
                    </div>
                </div>

                <div>
                    <a href="news/{{ $item->slug }}"
                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                    >Read More</a>
                </div>
            </footer>
        </div>
    </div>
</article>

