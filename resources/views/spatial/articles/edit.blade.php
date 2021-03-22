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
                        </div>
                        <div class="12u$">
                            <input type="text" name="excerpt" id="excerpt" value="{{  $article->excerpt }}" placeholder="Excerpt" />
                        </div>
                        <div class="12u$">
                            <textarea name="body" id="body" placeholder="Body" rows="6">{{  $article->body }}</textarea>
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
