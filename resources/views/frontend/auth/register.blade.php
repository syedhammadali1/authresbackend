@extends('frontend.auth.layout.auth-layout')

@section('content')
    <section class="vh-100">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="login_page bg-white shadow rounded p-4">
                                <div class="text-center mb-4"><a href="https://authres.sheikhrabia.com/"><img
                                            class="main-logo-login"
                                            src="{{ asset('frontend/images/logo/authreslogo.svg') }}"></a></div>
                                <form class="login-form disabled-submit-btn" method="POST"
                                    action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>First name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control @error('first_name') is-invalid @enderror " placeholder="First Name"
                                                    name="first_name" required="">
                                                @error('first_name')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>Last name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control @error('last_name') is-invalid @enderror " placeholder="Last Name"
                                                    name="last_name" required="">

                                                @error('last_name')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Your Email <span class="text-danger">*</span></label>
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                                     value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                                    @error('email')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Password <span class="text-danger">*</span></label>
                                                <div class="d-flex"><input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="new-password" placeholder="Password">
                                                    <i class="fa fa-eye" id="togglePassword"
                                                        onclick="showPassword('password4')"></i>
                                                </div>
                                                @error('password')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Confirm Password <span class="text-danger">*</span></label>
                                                <div class="d-flex"><input id="password" type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                                                     name="password_confirmation" required  placeholder="Confirm Password">
                                                    <i class="fa fa-eye" id="togglePassword"
                                                        onclick="showPassword('password5')"></i>
                                                </div>
                                                @error('password_confirmation')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="custom-control m-0 custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">I Accept <a
                                                            href="#" class="text-terms">Terms And
                                                            Condition</a></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-register w-100" type="submit" id="register"
                                                >Register</button>
                                        </div>
                                        <div class="col-lg-12 mt-4 text-center">
                                            <h6>Or Signup With</h6>
                                            <ul class="list-unstyled social-icon mb-0 mt-3">
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                            class="mdi mdi-facebook" title="Facebook"></i></a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                            class="mdi mdi-google-plus" title="Google"></i></a></li>
                                            </ul>
                                            <!--end icon-->
                                        </div>
                                        <div class="mx-auto">
                                            <p class="mb-0 mt-3"><small class="text-dark mr-2">Already have an account
                                                    ?</small> <a href="{{ route('login') }}"
                                                    class="text-dark font-weight-bold">Sign in</a></p>
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


{{-- @push('custom-scripts')
    <script>
            $(document).ready(function () {
                $('.disabled-submit-btn  input').change(function() {
                    var empty = true;
                    $('.disabled-submit-btn  input').each(function() {
                        if($(this).attr('type') == 'checkbox'){
                            // console.log('checkbox');
                            $(this).is(":checked") == false ? empty = true : empty = false;
                        }
                        $(this).val() == '' ? empty = true : empty = false;
                        // if($(this).attr('type') != 'checkbox'){
                        // }
                    });

                    if (empty) {
                        $('.disabled-submit-btn :submit').attr('disabled',
                            'disabled');
                    } else {
                        $('.disabled-submit-btn :submit').removeAttr(
                            'disabled');
                    }
                });
            });
    </script>
@endpush --}}
