@extends('spatial/spatial_layout')

@section('content')
    <div class="container">
        <section id="main" class="wrapper">
            <div class="container">
                <header class="major special">
                    <h2>{{ __('login') }}</h2>
                    <p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
                </header>
                <section>
                    <form method="POST" action="{{ route('login') }}">
                        <div class="row uniform 50%">
                            @csrf
                            <div class="12u$">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class="12u$">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class="12u$">
                                <input class="form-check-input" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                            <div class="12u$">
                                <ul class="actions">
                                    <li><input type="submit" value="{{ __('Login') }}" class="special"></li>
                                    @if (Route::has('password.request'))
                                        <li><a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </section>
    </div>
@endsection
