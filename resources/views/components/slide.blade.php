@props([
    'image',
    'slug'
])

<div
    {{ $attributes->class(['latest__slide h-[50vh] lg:h-[75vh] bg-blue-500 bg-cover']) }} style="background-image: url('{{ $image }}')"
>
    <div class="flex flex-col h-full items-center justify-between">
        <h2 class="text-outline p-3 rounded-xl uppercase text-center text-xl md:text-4xl mt-10 backdrop-blur-xl">
            {{ $slot }}
        </h2>
        <a href="/news/{{ $slug }}" class="py-3 px-4 bg-blue-500 text-white uppercase rounded-3xl mb-10">Read More</a>
    </div>
</div>
