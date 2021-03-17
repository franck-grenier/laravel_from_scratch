@extends('spatial/spatial_layout')

@section('content')
    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="container">
            <header class="major special">
                <h2>{{ $article->title }}</h2>
                <p>{{ $article->excerpt }}</p>
            </header>

            <section>
                {{ $article->body }}
            </section>
        </div>
    </section>
@endsection
