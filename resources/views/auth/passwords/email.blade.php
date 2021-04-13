@extends('spatial/spatial_layout')

@section('content')
<div class="container">
    <section id="main" class="wrapper">
        <div class="container">
            <header class="major special">
                <h2>{{ __('Reset Password') }}</h2>
                <p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
            </header>
            <section>
                <form method="POST" action="{{ route('password.email') }}">
                    <div class="row uniform 50%">
                        @csrf
                        <div class="6u$">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="12u$">
                            <ul class="actions">
                                <li><input type="submit" value="{{ __('Reset') }}" class="special"></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </section>
</div>
@endsection
