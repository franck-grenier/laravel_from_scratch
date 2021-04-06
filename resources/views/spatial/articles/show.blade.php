@extends('spatial/spatial_layout')

@section('content')
    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="container">
            <header class="major special">
                <h2>{{ $article->title }} <a href="{{ route('articles_edit' , $article->id) }}">✎</a></h2>
                <p><i>{{ $article->author->name }}</i></p>
                <p>{{ $article->excerpt }}</p>
            </header>

            <section>
                {{ $article->body }}
            </section>
        </div>
    </section>
@endsection
