<x-main-layout>
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white ba">

        <div class="bg-cover flex flex-col items-center justify-center w-screen h-screen overflow-hidden relative"
             style="background-image: url('{{ URL('/storage/images/newKitLandscape.png') }}')">
            <div
                class="flex flex-col sm:flex-row items-center justify-center w-full sm:w-3/4 lg:w-1/2 h-1/4 space-x-4 relative backdrop-blur-md">
                <img class="h-2/5 lg:h-1/2 ml-4 z-1" src="{{ URL('/storage/images/dussindale-rovers-logo.png') }}"
                     alt="logo">
                <div class="flex flex-col items-center">
                    <h1 class="landing--header-small text-l sm:text-xl xl:text-3xl uppercase text-white z-1">dussindale
                        & hellesdon rovers f.c.</h1>
                    <h2 class="landing--header-large text-5xl sm:text-6xl xl:text-7xl uppercase">The Dragons</h2>
                </div>
            </div>
            @auth()
                <a href="{{ url('/dashboard') }}" class="mt-10 bg-blue-500 rounded-3xl py-3 px-8 text-white hover:bg-blue-300 hover:text-black uppercase">Enter main site</a>
            @else
                <a href="{{ route('login') }}" class="mt-10 bg-blue-500 rounded-3xl py-3 px-8 text-white hover:bg-blue-300 hover:text-black uppercase">Sign In</a>
            @endauth

        </div>
</x-main-layout>

{{--



--}}
