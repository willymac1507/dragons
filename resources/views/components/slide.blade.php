@props([
    'image'
])

<div {{ $attributes->class(['latest__slide h-[50vh] lg:h-[75vh] bg-blue-500 bg-cover']) }} style="background-image: url('/storage/images/{{ $image }}')">
    <div class="flex flex-col h-full items-center justify-between">
        {{ $slot }}
    </div>

</div>
