@extends("master")
@section('title', 'Login')

@section('content')

    <main  class="main__wrapper">
                <h3>{{ __('Login') }}</h3>

                <div class="main__-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form__item">
                            <label for="email">{{ __('Email Address') }}</label>

                            <div>
                                <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form__item">
                            <label for="password">{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class= "input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form__item remember-me">
                            
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                        </div>
                        <div class="form__item form__btn">
                                <button type="submit" >
                                    {{ __('Login') }}
                                </button>
                                <div >
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </div>
                        </div>
                    </form>
                </div>
    </main>


@endsection
