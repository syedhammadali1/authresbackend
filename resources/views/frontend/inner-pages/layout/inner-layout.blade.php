<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Articles - Authres</title>

    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon/favi.png') }}" />
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}" />

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/materialdesignicons.min.css') }}" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/selectize.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/nice-select.css') }}" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap">
    <style>
        .btn-post-upload {
            background: #30be9c !important;
            border: 1px solid #30be9c !important;
            color: white !important;
        }


        .inner.show {
            overflow: scroll;
            max-height: 200px ! important;
        }

        .card {
            font-weight: 400;
            border: 0;
            -webkit-box-shadow: none !important;
        }

        .dropdown-menu.show {
            transform: initial ! important;
            width: 100% !important;
        }

        .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
            width: 100% ! important;
        }

        .form-check-input:checked {
            background-color: #30be9c !important;
            border-color: #30be9c !important;
        }

        .form-group .form-control:focus {
            border-color: #30be9c !important;
        }

        .section-preview {
            padding: 0 !important;
            margin-bottom: 16px !important;
        }

        .section-no-border>section>div {
            border: none !important;
        }

        .section-no-border>section>div>div:last-child {
            border: 1px solid #dee2e6 !important;
        }

        .file-upload {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            position: relative;
            cursor: pointer;
            overflow: hidden;
            width: 100%;
            max-width: 100%;
            height: 200px;
            padding: 5px 10px;
            font-size: 1rem;
            background: #77777714;
            text-align: center;
            color: #ccc
        }

        .file-upload-wrapper .card.card-body.has-error .file-upload-message .file-upload-error,
        .file-upload-wrapper .card.card-body.has-preview .btn.btn-sm.btn-danger {
            display: block
        }

        .file-upload i {
            font-size: 3rem
        }

        #radiosub1label {
            padding-left: 1% !important;
        }

        .file-upload .mask.rgba-stylish-slight {
            opacity: 0;
            -webkit-transition: all .15s linear;
            -o-transition: all .15s linear;
            transition: all .15s linear
        }

        .file-upload:hover .mask.rgba-stylish-slight {
            opacity: .8
        }

        .file-upload-wrapper .card.card-body.has-error {
            border-color: #f34141
        }

        .file-upload-wrapper .card.card-body.has-error:hover .file-upload-errors-container {
            visibility: visible;
            opacity: 1;
            -webkit-transition-delay: 0s;
            -o-transition-delay: 0s;
            transition-delay: 0s
        }

        .file-upload-wrapper .card.card-body.disabled input {
            cursor: not-allowed
        }

        .file-upload-wrapper .card.card-body.disabled:hover {
            background-image: none;
            -webkit-animation: none;
            animation: none
        }

        .file-upload-wrapper .card.card-body.disabled .file-upload-message {
            opacity: .5;
            text-decoration: line-through
        }

        .file-upload-wrapper .card.card-body.disabled .file-upload-infos-message {
            display: none
        }

        .file-upload-wrapper .card.card-body input {
            position: absolute;
            background: #77777714 !important;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            cursor: pointer;
            z-index: 5
        }

        .file-upload-wrapper .card.card-body .file-upload-message {
            position: relative;
            top: 50px;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        .file-upload-wrapper .card.card-body .file-upload-message span.file-icon {
            font-size: 50px;
            color: #ccc
        }

        .file-upload-wrapper .card.card-body .file-upload-message p {
            margin: 5px 0 0
        }

        .file-upload-wrapper .card.card-body .file-upload-message p.file-upload-error {
            color: #f34141;
            font-weight: 700;
            display: none
        }

        .file-upload-wrapper .card.card-body .btn.btn-sm.btn-danger {
            display: none;
            position: absolute;
            opacity: 0;
            z-index: 7;
            top: 10px;
            right: 10px;
            -webkit-transition: all .15s linear;
            -o-transition: all .15s linear;
            transition: all .15s linear
        }

        .file-upload-wrapper .card.card-body .file-upload-preview {
            display: none;
            position: absolute;
            z-index: 1;
            background: #77777714 ! important;
            padding: 5px;
            width: 100%;
            height: 100%;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            overflow: hidden;
            text-align: center
        }

        .file-upload-wrapper .card.card-body .file-upload-preview .file-upload-render .file-upload-preview-img {
            width: 100%;
            height: 100%;
            background-color: #fff;
            -webkit-transition: border-color .15s linear;
            -o-transition: border-color .15s linear;
            transition: border-color .15s linear;
            -o-object-fit: cover;
            object-fit: cover
        }

        .file-upload-wrapper .card.card-body .file-upload-preview .file-upload-render i {
            font-size: 80px;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            position: absolute;
            color: #777
        }

        .file-upload-wrapper .card.card-body .file-upload-preview .file-upload-render .file-upload-extension {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            margin-top: 10px;
            text-transform: uppercase;
            font-weight: 900;
            letter-spacing: -.03em;
            font-size: 1rem;
            color: #fff;
            width: 42px;
            white-space: nowrap;
            overflow: hidden;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis
        }

        .file-upload-wrapper .card.card-body .file-upload-preview .file-upload-infos {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 3;
            background: rgba(0, 0, 0, .7);
            opacity: 0;
            -webkit-transition: opacity .15s linear;
            -o-transition: opacity .15s linear;
            transition: opacity .15s linear
        }

        .file-upload-wrapper .card.card-body .file-upload-preview .file-upload-infos .file-upload-infos-inner {
            position: absolute;
            top: 50%;
            -webkit-transform: translate(0, -40%);
            -ms-transform: translate(0, -40%);
            transform: translate(0, -40%);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            width: 100%;
            padding: 0 20px;
            -webkit-transition: all .2s ease;
            -o-transition: all .2s ease;
            transition: all .2s ease
        }

        .file-upload-wrapper .card.card-body .file-upload-preview .file-upload-infos .file-upload-infos-inner p {
            padding: 0;
            margin: 0;
            position: relative;
            width: 100%;
            white-space: nowrap;
            overflow: hidden;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            color: #fff;
            text-align: center;
            line-height: 25px;
            font-weight: 700
        }

        .file-upload-wrapper .card.card-body .file-upload-preview .file-upload-infos .file-upload-infos-inner p.file-upload-infos-message {
            margin-top: 15px;
            padding-top: 15px;
            font-size: 12px;
            position: relative;
            opacity: .5
        }

        .file-upload-wrapper .card.card-body .file-upload-preview .file-upload-infos .file-upload-infos-inner p.file-upload-infos-message::before {
            content: "";
            position: absolute;
            top: 0;
            left: 50%;
            -webkit-transform: translate(-50%, 0);
            -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
            background: #fff;
            width: 30px;
            height: 2px
        }

        .file-upload-wrapper .card.card-body:hover .btn.btn-sm.btn-danger,
        .file-upload-wrapper .card.card-body:hover .file-upload-preview .file-upload-infos {
            opacity: 1
        }

        .file-upload-wrapper .card.card-body:hover .file-upload-preview .file-upload-infos .file-upload-infos-inner {
            margin-top: -5px
        }

        .file-upload-wrapper .card.card-body.touch-fallback {
            height: auto !important
        }

        .file-upload-wrapper .card.card-body.touch-fallback:hover {
            background-image: none;
            -webkit-animation: none;
            animation: none
        }

        .file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview {
            position: relative;
            padding: 0
        }

        .file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-render {
            display: block;
            position: relative
        }

        .file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-infos .file-upload-infos-inner p.file-upload-infos-message::before,
        .file-upload-wrapper .card.card-body.touch-fallback.has-preview .file-upload-message {
            display: none
        }

        .file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-render .file-upload-font-file {
            position: relative;
            -webkit-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            transform: translate(0, 0);
            top: 0;
            left: 0
        }

        .file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-render .file-upload-font-file::before {
            margin-top: 30px;
            margin-bottom: 30px
        }

        .file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-render img {
            position: relative;
            -webkit-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            transform: translate(0, 0)
        }

        .file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-infos {
            position: relative;
            opacity: 1;
            background: 0 0
        }

        .file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-infos .file-upload-infos-inner {
            position: relative;
            top: 0;
            -webkit-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            transform: translate(0, 0);
            padding: 5px 90px 5px 0
        }

        .file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-infos .file-upload-infos-inner p {
            padding: 0;
            margin: 0;
            position: relative;
            width: 100%;
            white-space: nowrap;
            overflow: hidden;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            color: #777;
            text-align: left;
            line-height: 25px
        }

        .file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-infos .file-upload-infos-inner p.file-upload-infos-message {
            margin-top: 0;
            padding-top: 0;
            font-size: 18px;
            position: relative;
            opacity: 1
        }

        .file-upload-wrapper .card.card-body.touch-fallback .file-upload-message {
            -webkit-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            transform: translate(0, 0);
            padding: 40px 0
        }

        .file-upload-wrapper .card.card-body.touch-fallback .btn.btn-sm.btn-danger {
            top: auto;
            bottom: 23px;
            opacity: 1
        }

        .file-upload-wrapper .card.card-body.touch-fallback:hover .file-upload-preview .file-upload-infos .file-upload-infos-inner {
            margin-top: 5rem
        }

        .file-upload-wrapper .card.card-body .file-upload-loader {
            position: absolute;
            top: 15px;
            right: 15px;
            display: none;
            z-index: 9
        }

        .file-upload-wrapper .card.card-body .file-upload-loader::after {
            display: block;
            position: relative;
            width: 20px;
            height: 20px;
            -webkit-animation: rotate .6s linear infinite;
            animation: rotate .6s linear infinite;
            -webkit-border-radius: 100%;
            border-radius: 100%;
            border-top: 1px solid #ccc;
            border-bottom: 1px solid #777;
            border-left: 1px solid #ccc;
            border-right: 1px solid #777;
            content: ""
        }

        .file-upload-wrapper .card.card-body .file-upload-errors-container {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 3;
            background: rgba(243, 65, 65, .8);
            text-align: left;
            visibility: hidden;
            opacity: 0;
            -webkit-transition: visibility 0s linear .15s, opacity .15s linear;
            -o-transition: visibility 0s linear .15s, opacity .15s linear;
            transition: visibility 0s linear .15s, opacity .15s linear
        }

        .file-upload-wrapper .card.card-body .file-upload-errors-container ul {
            padding: 10px 20px;
            margin: 0;
            position: absolute;
            left: 0;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        .file-upload-wrapper .card.card-body .file-upload-errors-container ul li {
            margin-left: 20px;
            color: #fff;
            font-weight: 700
        }

        .file-upload-wrapper .card.card-body .file-upload-errors-container.visible {
            visibility: visible;
            opacity: 1;
            -webkit-transition-delay: 0s;
            -o-transition-delay: 0s;
            transition-delay: 0s
        }

        .file-upload-wrapper .card.card-body~.file-upload-errors-container ul {
            padding: 0;
            margin: 15px 0
        }

        .file-upload-wrapper .card.card-body~.file-upload-errors-container ul li {
            margin-left: 20px;
            color: #f34141;
            font-weight: 700
        }

        .dropdown-item.active,
        .dropdown-item:active {
            color: #fff;
            text-decoration: none;
            background-color: #30be9c ! important;
        }

        #dropshow-main {
            transform: translate3d(-172px, 56px, 0px) !important;
            width: 213px !important;
        }
    </style>
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

    <!-- Navigation Bar-->
    <header id="topnav" class="defaultscroll scroll-active">
        <!-- Tagline STart -->

        <!-- Tagline End -->

        <!-- Menu Start -->

        <!-- Logo container-->
        <div class="row">
            <div class="col-3 logo-main-pages">
                <a href="https://authres.sheikhrabia.com" class="logo pl-3">
                    <img src="{{ asset('frontend/images/logo/authreslogo.svg') }}" alt="" class="logo-light" />
                    <img src="{{ asset('frontend/images/logo/authreslogo.svg') }}" alt="" class="logo-dark" />
                </a>
            </div>
            <div class="col-6 main-search-section">
                <!-- Navigation Menu-->
                <div class="search-main">
                    <div class="banner-section style-4">
                        <div class="banner-content">
                            <form>
                                <input type="text" name="search" placeholder="Search AuthRes" />
                                <button type="submit">
                                    <img src="{{ asset('frontend/images/icons/searchicon.png') }}" width="14" />
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end navgation menu-->
            </div>
            <div class="col-3">
                <div class="buy-button">
                    <div class="notifications-btn mr-1">
                        <i class="fa fa-upload"></i>
                    </div>
                    <div class="notifications-btn">
                        <i class="fa fa-bell"></i>
                    </div>
                    <div class="user-img-au row">
                        <div class="col-4">
                            <div class="dropdown">
                                <div class="main-drop-sec dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-angle-down"></i><img src="{{ asset('frontend/images/user/user.jpg') }}"
                                        class="rounded-circle" />
                                </div>

                                <div class="dropdown-menu" id="dropshow-main" aria-labelledby="dropdownMenuButton"
                                    style="">
                                    <div class="d-flex profile-section">
                                        <div class="col-3">
                                            <img src="{{ asset('frontend/images/user/user.jpg') }}" class="rounded-circle"
                                                style="width: 39px" />
                                        </div>
                                        <div class="col-7"><a>William</a></div>
                                        <div class="col-2"><i class="fa fa-angle-right"></i></div>
                                    </div>
                                    <div class="d-flex profile-sec-text">
                                        <div class="col-3">
                                            <div class="main-secure">
                                                <i class="fa fa-question-circle" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="col-7"><a>Help & Support</a></div>
                                        <div class="col-2"><i class="fa fa-angle-right"></i></div>
                                    </div>
                                    <div class="d-flex profile-sec-text">
                                        <div class="col-3">
                                            <div class="main-secure">
                                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="col-7"><a>Logout</a></div>
                                        <div class="col-2"><i class="fa fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<p>William Chandler</p>-->
                    </div>
                </div>
            </div>
        </div>

        <!--end navigation-->

        <!--end container-->
        <!--end end-->
    </header>
    <!--end header-->
    <!-- Navbar End -->

    <!-- Start home -->
    <!-- <section class="bg-half page-next-level">
        <div class="bg-overlay"></div>
    </section> -->
    <!-- end home -->

    @yield('content')

    <footer class="style-2">
        <div class="footer-bottom">
            <div class="container" style="max-width: 100% !important">
                <div class="section-wrapper">
                    <div class="footer-bottom-list d-flex">
                        <a>Contact</a>
                        <a>|</a>
                        <a>About</a>
                    </div>
                    <div class="footer-bottom-list d-flex">
                        <a>Privacy Policy</a>
                        <a>|</a>
                        <a>Term &amp; Condition</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Back to top -->
    <a href="#" class="back-to-top rounded text-center" id="back-to-top">
        <i class="mdi mdi-chevron-up d-block"> </i>
    </a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>

    <!-- selectize js -->
    <script src="{{ asset('frontend/js/selectize.min.js') }}"></script>

    <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"></script>

    <script src="{{ asset('frontend/js/app.js') }}"></script>

    <script>
        $(document).ready(function() {
            // executes when HTML-Document is loaded and DOM is ready
            $(".far").replaceWith("<i class='fa fa-trash ml-1'></i>");
            $(".fas").replaceWith("<i class='fa fa-cloud-upload ml-1'></i>");


        });
    </script>

    <script src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/js/plugins/mdb-file-upload.min.js"></script>
    <script>
        $('.file_upload').file_upload();
    </script>

    @stack('custom-scripts')

</body>

</html>
