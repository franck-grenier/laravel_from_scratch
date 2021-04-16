@extends('spatial/spatial_layout')

@section('content')
    <!-- Three -->
    <section id="three" class="wrapper style1">
        <div class="container">
            <header class="major special">
                <h2>Articles</h2>@auth <a class="big" href="{{ route('articles_create') }}">+</a>@endauth
                <p>news about us</p>
            </header>
            <section>
                <p>
                @foreach($assigned_tags as $tag)
                    <a class="button alt small @if($tag === $filtered_tag) special @endif"
                       href="@if($tag === $filtered_tag){{ route('articles_index') }}@else{{ route('articles_index', ['tag' => $tag]) }}@endif">
                        {{ $tag }}
                    </a>
                @endforeach
                </p>
            </section>
            <div class="feature-grid">
                @forelse($articles as $article)
                <div class="feature">
                    <div class="image rounded"><img src="/images/pic0{{ random_int(4 , 7) }}.jpg" alt="" /></div>
                    <div class="content">
                        <header>
                            <h4>{{ $article->title }}@auth <a href="{{ route('articles_edit' , $article->id) }}">✎</a>@endauth</h4>
                        </header>
                        <p>{{ $article->excerpt }}</p>
                        <span><a href="{{ route('articles_show' , ['article' => $article->slug]) }}">Read more</a></span>
                    </div>
                </div>
                @empty
                    No content...
                @endforelse
                {{ $articles->appends(request()->except('page'))->links() }}
            </div>
        </div>
    </section>
@endsection
