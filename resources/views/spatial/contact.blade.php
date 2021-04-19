@extends('spatial/spatial_layout')

@section('content')
    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="container">

            <header class="major special">
                <h2>Contact us</h2>
                <p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
            </header>

            <section>
                <form method="post" action="{{ route('contact') }}">
                    @csrf
                    <div class="row uniform 100%">
                        <div class="12u$">
                            <label for="name">Your name</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" />
                            @error('name'){{ $message }}@enderror
                        </div>
                        <div class="12u$">
                            <label for="email">Your email</label>
                            <input type="text" name="email" id="email" value="{{ old('email') }}" />
                            @error('email'){{ $message }}@enderror
                        </div>
                        <div class="12u$">
                            <label for="message">Your message</label>
                            <textarea name="message" id="message" rows="6">{{ old('message') }}</textarea>
                            @error('message'){{ $message }}@enderror
                        </div>
                        <div class="12u$">
                            <ul class="actions">
                                <li><input type="submit" value="Send" class="special" /></li>
                            </ul>
                        </div>
                        <div class="12u$">
                            @if(session('result'))
                                {{ session('result') }}
                            @endif
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </section>
@endsection
