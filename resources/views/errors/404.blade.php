<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="">
    <!-- BEGIN: Head-->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>Error 404 </title>
        <link rel="apple-touch-icon" href="{{asset('images/ico/apple-icon-120.png')}}">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/ico/favicon.ico')}}">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">


        <?php if (LaravelLocalization::getCurrentLocaleDirection() === 'ltr'): ?>
            <!-- BEGIN: Vendor CSS-->
            <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/vendors.min.css')}}">
            <!-- END: Vendor CSS-->

            <!-- BEGIN: Theme CSS-->

            <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-extended.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('css/colors.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('css/components.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('css/themes/dark-layout.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('css/themes/semi-dark-layout.css')}}">

            <!-- BEGIN: Page CSS-->
            <link rel="stylesheet" type="text/css" href="{{asset('css/core/menu/menu-types/horizontal-menu.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('css/core/colors/palette-gradient.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('css/pages/error.css')}}">
            <!-- END: Page CSS-->

            <!-- BEGIN: Custom CSS-->
            <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
          
        <?php elseif (LaravelLocalization::getCurrentLocaleDirection() === 'rtl'): ?>
            <!-- BEGIN: Vendor CSS-->
            <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/vendors-rtl.min.css')}}">
            <!-- END: Vendor CSS-->

            <!-- BEGIN: Theme CSS-->

            <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/bootstrap.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/bootstrap-extended.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/colors.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/components.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/themes/dark-layout.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/themes/semi-dark-layout.css')}}">

            <!-- BEGIN: Page CSS-->
            <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/core/menu/menu-types/horizontal-menu.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/core/colors/palette-gradient.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/pages/error.css')}}">
            <!-- END: Page CSS-->

            <!-- BEGIN: Custom CSS-->
            <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/custom-rtl.css')}}">
          
            <!-- END: Custom CSS-->
        <?php endif; ?>
    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->

    <body class="horizontal-layout horizontal-menu dark-layout 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="hover" data-menu="horizontal-menu" data-col="1-column" data-layout="dark-layout">
        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <!-- error 404 -->
                    <section class="row flexbox-container">
                        <div class="col-xl-7 col-md-8 col-12 d-flex justify-content-center">
                            <div class="card auth-card bg-transparent shadow-none rounded-0 mb-0 w-100">
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <img src="{{asset('images/pages/404.png')}}" class="img-fluid align-self-center" alt="branding logo">
                                        <h1 class="font-large-2 my-1">404 - Page Not Found!</h1>
                                        <p class="p-2">
                                            paraphonic unassessable foramination Caulopteris worral Spirophyton encrimson esparcet aggerate chondrule
                                            restate whistler shallopy biosystematy area bertram plotting unstarting quarterstaff.
                                        </p>
                                        <a class="btn btn-primary btn-lg mt-2" href="<?=route('index')?>">Back to Home</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- error 404 end -->

                </div>
            </div>
        </div>
        <!-- END: Content-->


        <!-- BEGIN: Vendor JS-->
        <script src="{{asset('vendors/js/vendors.min.js')}}"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <script src="{{asset('vendors/js/ui/jquery.sticky.js')}}"></script>
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="{{asset('js/core/app-menu.js')}}"></script>
        <script src="{{asset('js/core/app.js')}}"></script>
        <script src="{{asset('js/scripts/components.js')}}"></script>
        <!-- END: Theme JS-->

        <!-- BEGIN: Page JS-->
        <!-- END: Page JS-->

    </body>
    <!-- END: Body-->

</html>