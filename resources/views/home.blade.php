<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    <div class="p-3 flex justify-center text-2xl uppercase">
        <h3>Latest News</h3>
    </div>
    <div>
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
            {{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
            {{--                <div class="p-6 text-gray-900">--}}
            {{--                    {{ __("You're logged in!") }}--}}
            {{--                </div>--}}
            {{--            </div>--}}
{{--        </div>--}}
        <div class="carousel">
            @foreach($news as $item)
                <x-slide :image="$item->image_url" :slug="$item->headline">{{ $item->headline }}</x-slide>
            @endforeach
{{--            <x-slide image="1507_trophy.jpeg" slug="#">--}}
{{--                Dragons runners-up in Cromer YFC Tournament--}}
{{--            </x-slide>--}}
{{--            <x-slide image="newKitLandscape.png" slug="#">--}}
{{--                2023/24 Kit Arrives--}}
{{--            </x-slide>--}}
{{--            <x-slide image="slide_3.jpg" slug="#"/>--}}
{{--            <x-slide image="slide_4.jpg" slug="#"/>--}}

        </div>
    </div>
</x-app-layout>
