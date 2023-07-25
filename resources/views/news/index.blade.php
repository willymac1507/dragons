<x-app-layout>
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6 pb-10">
        <x-news-grid :news="$news"/>

        {{ $news->links() }}
    </main>
</x-app-layout>
