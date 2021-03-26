@extends('spatial/spatial_layout')

@section('content')
    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="container">
            <header class="major special">
                <h2>Edit article</h2>
            </header>

            <section>
                <form method="post" action="{{ route('articles_put' , $article->id) }}">
                    @csrf
                    @method('put')
                    <div class="row uniform 100%">
                        <div class="12u$">
                            <input type="text" name="title" id="title" value="{{  $article->title }}" placeholder="Title" />
                            @error('title'){{ $errors->first('title') }}@enderror
                        </div>
                        <div class="12u$">
                            <input type="text" name="excerpt" id="excerpt" value="{{  $article->excerpt }}" placeholder="Excerpt" />
                            @error('excerpt'){{ $errors->first('excerpt') }}@enderror
                        </div>
                        <div class="12u$">
                            <textarea name="body" id="body" placeholder="Body" rows="6">{{  $article->body }}</textarea>
                            @error('body'){{ $errors->first('body') }}@enderror
                        </div>
                        <div class="12u$">
                            <ul class="actions">
                                <li><input type="submit" value="Update" class="special" /></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </section>
@endsection
