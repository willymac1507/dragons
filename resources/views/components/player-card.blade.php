@props ([
    'name',
    'position',
    'image',
    'shirtColor',
    'shirtNumber'

])
<div {{ $attributes->class(['font-display col-span-full md:col-span-4 lg:col-span-3 flex flex-col items-center gap-y-3 bg-gray-200 hover:bg-gray-300 rounded-xl p-8 hover:scale-110 transition-all ease-in-out border border-gray-400']) }}>
    <h1 class="text-3xl uppercase">
        {{ $name }}
    </h1>
    <img class="rounded-xl shadow-xl" src="{{ $image }}" alt="">
    <h2 class="text-2xl">
        {{ $position }}
    </h2>
    <p class="
    @if($shirtColor === 'pink-500')
    text-white
    @else
    text-blue-600
    @endif
    text-outstanding bg-{{ $shirtColor }} p-3 rounded-md font-display text-center text-white text-2xl shadow-xl">{{ $shirtNumber }}</p>
</div>
