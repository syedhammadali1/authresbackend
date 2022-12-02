@extends('frontend.auth.layout.auth-layout')

@section('content')
    <section class="vh-100">

        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="login_page bg-white shadow rounded p-4">
                                <div class="text-center mb-4"><a href="https://authres.sheikhrabia.com/"><img
                                            class="main-logo-login"
                                            src="{{ asset('frontend/images/logo/authreslogo.svg') }}"></a></div>
                                <form class="login-form" method="POST" action="{{ route('password.update') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>{{ __('Email address') }}</label>
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror" id="userEmail"
                                                    placeholder="Email" name="email" value="{{ $email ?? old('email') }}"
                                                    required autocomplete="email" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>New Password<span class="text-danger"> *</span></label>
                                                <div class="d-flex"><input type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        id="password1" autocomplete="current-password"
                                                        placeholder="Password" name="password">
                                                    <i class="fa fa-eye" id="togglePassword"
                                                        onclick="showPassword('password1')"></i>
                                                    </div>
                                                    @error('password')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Confirm Password<span class="text-danger"> *</span></label>
                                                <div class="d-flex"><input type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        id="password-confirm" name="password_confirmation" required
                                                        autocomplete="new-password">
                                                    <i class="fa fa-eye" id="togglePassword"
                                                        onclick="showPassword('password-confirm')"></i>
                                                    </div>
                                                    @error('password_confirmation')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button class="btn btn-change-password w-100" type="submit">Change Password</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </div>
        </div>
    </section>
@endsection
