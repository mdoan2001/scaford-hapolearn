@extends('layouts.app')

@section('content')
    <div class="container login">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">{{ __('artribute.sign_in_hapolearn') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            @if (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <div class="form-group row">
                                <label for="user_name"
                                    class="col-form-label text-md-left">{{ __('artribute.user_name') }}</label>

                                <div class="">
                                    <input id="user_name" type="text"
                                        class="form-control @error('user_name') is-invalid @enderror" name="user_name"
                                        value="{{ old('user_name') }}" required autocomplete="user_name" autofocus>

                                    @error('user_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-form-label text-md-left">{{ __('artribute.password') }}</label>

                                <div class="">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group  row mb-0">
                                <div class="form-group-submit">
                                    <button type="submit" class="btn-submit">
                                        {{ __('artribute.sign_in') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('artribute.forgot_password') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="login-footer">
                                <div class="text-hr">
                                    <p>Sign in with</p>
                                </div>
                                <a href="" class="btn btn-block login-btn login-google">
                                    <i class="fa-brands fa-google-plus-g"></i>
                                    Google
                                </a>
                                <div class="text-hr">
                                    <p>or New to Hapolearn</p>
                                </div>
                                <a href="" class="btn btn-block login-btn login-create">
                                    {{ __('artribute.create_new_account') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
