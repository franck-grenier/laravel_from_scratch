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
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" value="{{  $article->title }}" placeholder="Title" />
                            @error('title'){{ $errors->first('title') }}@enderror
                        </div>
                        <div class="12u$">
                            <label for="slug">Slug (leave empty to autogenerate from title)</label>
                            <input type="text" name="slug" id="slug" value="{{  $article->slug }}" placeholder="Slug" />
                            @error('slug'){{ $errors->first('slug') }}@enderror
                        </div>
                        <div class="12u$">
                            <label for="excerpt">Excerpt</label>
                            <input type="text" name="excerpt" id="excerpt" value="{{  $article->excerpt }}" placeholder="Excerpt" />
                            @error('excerpt'){{ $errors->first('excerpt') }}@enderror
                        </div>
                        <div class="12u$">
                            <label for="body">Body</label>
                            <textarea name="body" id="body" placeholder="Body" rows="6">{{  $article->body }}</textarea>
                            @error('body'){{ $errors->first('body') }}@enderror
                        </div>
                        <div class="12u$">
                            <label for="Tags">Tags</label>
                            <select name="tags[]" id="tags" multiple style="height:300px; width:50%;">
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}" @if(in_array($tag->id, $article->tags->pluck('id')->toArray()))selected @endif>
                                        {{ $tag->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('tags'){{ $errors->first('tags') }}@enderror
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
