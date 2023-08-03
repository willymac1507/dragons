<x-app-layout>
    <section class="px-6 py-8">
        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <article class="max-w-4xl mx-auto grid grid-cols-12 gap-x-10">
                <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                    <img src="/{{ $item->image_url }}" alt="cover" class="rounded-xl">

                    <p class="mt-4 block text-gray-400 text-xs">
                        Published
                        <time>{{ $item->created_at->diffForHumans() }} by</time>
                    </p>

                    <div class="flex items-center lg:justify-start text-sm mt-4 gap-x-6">
                        <img class="w-[75px] h-[75px] rounded-xl" src="/{{ $item->author->avatar_url }}?u={{ $item->author->id }}" alt="avatar">
                        <div class="ml-3 text-left">
                            <a href="/?author={{ $item->author->username }}"
                               class="font-bold">{{ $item->author->name }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-span-8">
                    <div class="hidden lg:flex justify-between mb-6">
                        <a href="/"
                           class="transition-colors duration-300 relative inline-flex items-center text-sm hover:text-blue-500">
                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path class="fill-current"
                                          d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>
                            Back to News
                        </a>
                    </div>

                    <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                        {{ $item->headline }}
                    </h1>

                    <div class="space-y-4 lg:text-lg leading-loose">
                        {!! $item->body !!}
                    </div>
                </div>

            </article>
        </main>
    </section>
</x-app-layout>
