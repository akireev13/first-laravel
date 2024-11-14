<x-site-layout title="My First Laravel App">

    @foreach ($articles as $article)
        <div class="mt-4">
            <h2 class="font-bold text-xl">{{ $article->title }}</h2>
            <p>{{ $article->content }}</p>
            {{-- format date for published at ->format('M d') --}}
            <p class="text-sm text-slate-700">{{ $article->author?->name ?? 'Unknown' }} | {{ $article->published_at }}
            </p>
            @if ($article->comments->count() == 0)
                <p>No comments yet</p>
            @else
                <h3 class="mt-2 text-lg font-semibold">Comments</h3>
                <ul class="list-disc pl-4">
                    @foreach ($article->comments->take(3) as $comment)
                        <li>{{ $comment->content }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    @endforeach

</x-site-layout>
