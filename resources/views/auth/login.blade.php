@extends('layouts.app')
@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index-2.html">home</a></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <section class="account">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="account-contents"
                        style="background: url('assets/img/about/about1.jpg'); background-size: cover;">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-thumb">
                                    <h2>Login now</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis consectetur similique
                                        deleniti pariatur enim cumque eum</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-content">
                                    <form method="Post" action="{{ route('login') }}">
                                        @csrf
                                        <div class="single-acc-field">
                                            <label for="email">{{ __('Email Address') }}</label>
                                            <input type="email" id="email" placeholder="Enter your Email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                        <div class="single-acc-field">
                                            <label for="password">{{ __('Password') }}</< /label>
                                                <input type="password" id="password" placeholder="Enter your password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                        </div>
                                        <div class="single-acc-field boxes">
                                            <input type="checkbox" class="form-check-input" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            <label for="checkbox">{{ __('Remember Me') }}</label>
                                        </div>
                                        <div class="single-acc-field">
                                            <button type="submit">{{ __('Login') }}</button>
                                        </div>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                        {{-- <a href="forget-password.html">Forget Password?</a> --}}
                                        <a href="register.html">Not Account Yet?</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
