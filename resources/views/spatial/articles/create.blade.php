@extends('spatial/spatial_layout')

@section('content')
    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="container">
            <header class="major special">
                <h2>Create a new article</h2>
            </header>

            <section>
                <form method="post" action="{{ route('articles_post') }}">
                    @csrf
                    <div class="row uniform 100%">
                        <div class="12u$">
                            <input type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Title" />
                            @error('title'){{ $errors->first('title') }}@enderror
                        </div>
                        <div class="12u$">
                            <input type="text" name="excerpt" id="excerpt" value="{{ old('excerpt') }}" placeholder="Excerpt" />
                            @error('excerpt'){{ $errors->first('excerpt') }}@enderror
                        </div>
                        <div class="12u$">
                            <textarea name="body" id="body" placeholder="Body" rows="6">{{ old('body') }}</textarea>
                            @error('body'){{ $errors->first('body') }}@enderror
                        </div>
                        <div class="12u$">
                            <ul class="actions">
                                <li><input type="submit" value="Create" class="special" /></li>
                                <li><input type="reset" value="Reset" /></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </section>
@endsection