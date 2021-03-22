@extends('spatial/spatial_layout')

@section('content')
    <!-- Three -->
    <section id="three" class="wrapper style1">
        <div class="container">
            <header class="major special">
                <h2>Articles</h2>  <a class="big" href="{{ route('articles_create') }}">+</a>
                <p>news about us</p>
            </header>
            <div class="feature-grid">
                @foreach($articles as $article)
                <div class="feature">
                    <div class="image rounded"><img src="/images/pic0{{ random_int(4 , 7) }}.jpg" alt="" /></div>
                    <div class="content">
                        <header>
                            <h4>{{ $article->title }} <a href="{{ route('articles_edit' , $article->id) }}">✎</a></h4>
                        </header>
                        <p>{{ $article->excerpt }}</p>
                        <span><a href="{{ route('articles_show' , ['article' => $article->id]) }}">Read more</a></span>
                    </div>
                </div>
                @endforeach
                {{ $articles->links() }}
            </div>
        </div>
    </section>
@endsection
