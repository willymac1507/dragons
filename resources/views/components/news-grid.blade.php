@props([
    'news'
])

@if ($news->count())
    <x-news-featured-card :item="$news[0]"/>
    @if($news->count()>1)
        <div class="lg:grid lg:grid-cols-6">
            @foreach ($news->skip(1) as $item)
                <x-news-card :item="$item" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"/>
            @endforeach
        </div>
    @endif
@else
    <p class="text-center">No news yet - check back later!</p>
@endif
