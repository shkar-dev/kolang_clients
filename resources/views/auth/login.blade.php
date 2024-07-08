@extends('layouts.app')

@section('content')
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--    <div class="background-section"></div>--}}
{{--    <div class="login-container">--}}
{{--        <div class="login-form">--}}
{{--            <div class="row">--}}
{{--                <img src="{{asset('assets/images/logo.png')}}" class="login-logo"  >--}}
{{--            </div>--}}
{{--            <div  >--}}
{{--                <input type="text" class="" placeholder="ناوی بەکارهێنەر"  />--}}
{{--            </div>--}}
{{--            <div  >--}}
{{--                <input type="text" class="" placeholder="وشەی تێپەڕ"  />--}}
{{--            </div>--}}
{{--            <div >--}}
{{--                <button class="register-button"> چوونەژوورەوە</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
<link rel="stylesheet" href="{{asset('assets/registerStyle.css')}}" >
<div id="page" class="site">
    <div class="container">
        <div class="form-box">
            <div class="progress">
                <div class="logo"> <img src="{{asset('assets/images/logo.png')}}" /> </div>
                <ul class="progress-steps">
                    <li class="step active">
                        <span>1</span>
                        <p>چوونەژوورەوە <br> </p>
                    </li>

                </ul>
            </div>
            <form action="">
                <div class="form-one form-step active">
                    <div class="bg-svg"></div>
                    <h2>چوونەژوورەوە</h2>

                    <x-input-email name="email" placeholder="ئیمەیڵ " column="col-md-12" label="ئیمەیڵ" />
                    <x-input-text name="username" placeholder="ناوی بەکارهێنەر " column="col-md-12" label="ناوی بەکارهێنەر" />

                    <x-input-password name="password" placeholder="وشەی تێپەڕ  " column="col-md-12" label="وشەی تێپەڕ" />
                    <x-input-password name="password_confirmation" placeholder="دڵنیابوونەوەی وشەی تێپەڕ" column="col-md-12" label="دڵنیابوونەوەی وشەی تێپەڕ" />
                </div>
                <div class="btn-group">
                    <button class="btn-submit" id="submit" type="button"  > <i class="fa fa-paper-plane  " ></i>ناردن</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
