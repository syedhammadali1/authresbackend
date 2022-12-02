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
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form class="login-form" action="{{ route('password.email') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p class="text-muted">Please enter your email address. You will receive a link
                                                to create a new password via email.</p>
                                            <div class="form-group position-relative">
                                                <label>Email address <span class="text-danger">*</span></label>
                                                <input type="email"
                                                    class="form-control  @error('email') is-invalid @enderror"
                                                    placeholder="Enter Your Email Address" name="email" required="">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button class="btn btn-recovery w-100">Send</button>
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
