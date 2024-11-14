<x-site-layout title="My First Laravel App">

    @foreach ($articles as $article)
        <div class="mt-4">
            <h2 class="font-bold text-lg">{{ $article->title }}</h2>
            <p>{{ $article->content }}</p>
            {{-- format date for published at ->format('M d') --}}
            <p class="text-sm text-slate-700">{{ $article->author?->name ?? 'Unknown' }} | {{ $article->published_at }}</p>
            <h3 class="mt-2">Comments</h3>
            <ul>
                @foreach ($article->comments as $comment)
                    <li>{{ $comment->content }}</li>
                @endforeach
            </ul>
        </div>
        
    @endforeach

</x-site-layout>
