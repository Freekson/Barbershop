@extends("master")
@section('title', 'Register')
@section('content')

@section('content')
    <main  class="main__wrapper">
                <h3>{{ __('Register') }}</h3>

                <div class="main__-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form__item">
                            <label for="name">{{ __('Name') }}</label>

                            <div>
                                <input id="name" type="text" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                            @enderror
                            </div>
                        </div>
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
                        <div class="form__item">
                            <label for="password-confirm"">{{ __('Confirm Password') }}</label>

                            <div>
                                <input id="password-confirm" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form__item form__btn">
                                <button type="submit" >
                                    {{ __('Register') }}
                                </button>
                                <div >
                                </div>
                        </div>
                    </form>
                </div>
    </main>

@endsection
