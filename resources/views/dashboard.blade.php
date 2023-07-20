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
            <x-slide image="slide_1.jpg">
                <h2 class="text-outline p-3 rounded-xl uppercase text-center text-xl md:text-4xl mt-10 backdrop-blur-xl">Dragons runners-up in Cromer YFC Tournament</h2>
                <a href="#" class="py-3 px-4 bg-blue-500 text-white uppercase rounded-3xl mb-10">Read More</a>
            </x-slide>
            <x-slide image="slide_2.jpg"/>
            <x-slide image="slide_3.jpg"/>
            <x-slide image="slide_4.jpg"/>

        </div>
    </div>
</x-app-layout>
