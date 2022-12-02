<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Authres</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Themesdesign" />

    <link rel="shortcut icon" href="{{ asset('./images/favicon/favi.png') }}"  >

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}"  >

    <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' >

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/materialdesignicons.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/selectize.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/nice-select.css') }}" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}" />

</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <div class="back-to-home rounded d-none d-sm-block">
        <a href="https://authres.sheikhrabia.com/" class="text-white rounded d-inline-block text-center"><i
                class="mdi mdi-home"></i></a>
    </div>

    <!-- Hero Start -->
    @yield('content')
    <!--end section-->
    <!-- Hero End -->

    <script>
        function showPassword(targetID) {
            var x = document.getElementById(targetID);

            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }

        }
    </script>

    <!-- javascript -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>

    <!-- selectize js -->
    <script src="{{ asset('frontend/js/selectize.min.js') }}"></script>

    <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('frontend/js/app.js') }}"></script>

    @stack('custom-scripts')
</body>

</html>
