@extends('spatial/spatial_layout')

@section('content')
    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="container">
            <header class="major special">
                <h2>{{ $article->title }}@auth <a href="{{ route('articles_edit' , $article->id) }}">✎</a>@endauth</h2>

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
            @if(count($article->comments))
            <section id="comments">
                @foreach($article->comments as $comment)
                    <div class="comment">
                        <hr>

                        <p>{{ $comment->body }}</p>
                        <p>
                            <i>{{ $comment->author->name }}, {{ $comment->created_at }}</i>
                            @can('choose-best-comment' , $comment)
                            @if(!$comment->best_comment && !$article->hasBestComment())
                            <form method="POST" action="{{ route('comment_best', $comment->id) }}">
                                @csrf
                                @method('PATCH')
                                <button class="icon fa-automobile"></button>
                            </form>
                            @elseif($comment->best_comment)
                                <span class="icon fa-star"></span>
                            @endif
                            @endcan
                        </p>
                    </div>
                @endforeach
            </section>
            @endif
        </div>
    </section>
@endsection
