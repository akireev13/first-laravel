<x-site-layout title="My First Laravel App">

    @foreach ($articles as $article)
        <div>
            <h2>{{ $article->title }}</h2>
            <p>{{ $article->content }}</p>
        </div>
        
    @endforeach

</x-site-layout>
