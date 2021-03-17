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
                            <input type="text" name="title" id="title" value="" placeholder="Title" />
                        </div>
                        <div class="12u$">
                            <input type="text" name="excerpt" id="excerpt" value="" placeholder="Excerpt" />
                        </div>
                        <div class="12u$">
                            <textarea name="body" id="body" placeholder="Body" rows="6"></textarea>
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
