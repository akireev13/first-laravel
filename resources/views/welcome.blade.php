<x-site-layout title="My First Laravel App">

    @foreach ($articles as $article)
        <div class="mt-4">
            <h2 class="font-bold text-lg">{{ $article->title }}</h2>
            <p>{{ $article->content }}</p>
            <p class="text-sm text-slate-700">Published at: {{ $article->published_at }}</p>
            <p class="text-sm text-slate-700">Author: {{ $article->author->name }}</p>
        </div>
        
    @endforeach

</x-site-layout>
