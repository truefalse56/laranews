<div class="news-block {{ $gridClass }}">
    @foreach ($newsItems as $news)
        <x-news-card :news="$news" />
    @endforeach
</div>