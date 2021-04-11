@extends('spatial/spatial_layout')

@section('content')
    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="container">
            <header class="major special">
                <h2>{{ $article->title }} <a href="{{ route('articles_edit' , $article->id) }}">✎</a></h2>

                <p>{{ $article->excerpt }}</p>
            </header>
            <section>
                <p>
                    <i>by {{ $article->author->name }}</i>
                    <br>
                    @foreach($article->tags->pluck('name') as $tag)
                        <a href="{{ route('articles_index', ['tag' => $tag]) }}">{{ $tag }}</a>@if (!$loop->last), @endif
                    @endforeach
                </p>
                <hr>
            </section>
            <section>
                {{ $article->body }}
            </section>
        </div>
    </section>
@endsection
