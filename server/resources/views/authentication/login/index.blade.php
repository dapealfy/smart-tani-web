<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="PIXINVENT">
    <title>Masuk ke dashboard - Smart tani</title>
    <link rel="apple-touch-icon" href="logo">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/logo-sikepik.jpeg">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/extensions/sweetalert2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!-- END: Custom CSS-->

    <style>
        .color-primary {
            background-color: #e83036 !important;
            color: #FFF !important;
        }
    </style>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-layout="semi-dark-layout">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- login page start -->
                <section id="auth-login" class="row flexbox-container">
                    <div class="col-xl-8 col-11">
                        <div class="card bg-authentication mb-0">
                            <div class="row m-0">
                                <!-- left section-login -->
                                <div class="col-md-6 col-12 px-0">
                                    <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                                        <div class="card-header">
                                            <div class="card-title text-center w-100">
                                                <img height="100" src="/assets/images/logo-sikepik.jpeg" alt="logo">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="divider">
                                                <div class="divider-text text-uppercase text-muted"><small>masuk untuk melanjutkan</small>
                                                </div>
                                            </div>
                                            <form action="{{ route('login') }}" method="POST">
                                                @csrf
                                                <div class="form-group mb-50">
                                                    <label class="text-bold-600" for="email">Email</label>
                                                    <input type="text" name="email" class="form-control" id="email" placeholder="Email" required autofocus>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label class="text-bold-600" for="password">Kata Sandi</label>
                                                    <input type="password" name="password" class="form-control" id="password" placeholder="***********" required>
                                                </div>
                                                <!-- <div class="form-group mb-2">
                                                    <p>Belum memiliki akun? <a href="/register">Daftar</a></p>
                                                </div> -->
                                                <button type="submit" class="btn color-primary glow w-100 position-relative">Masuk<i id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                                            </form>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <!-- right section image -->
                                <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                                    <img class="img-fluid" src="/assets/images/www-rafiki-2.png" alt="branding logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- login page ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="/app-assets/vendors/js/vendors.min.js"></script>
    <script src="/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="/app-assets/vendors/js/extensions/polyfill.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="/app-assets/js/scripts/configs/vertical-menu-dark.js"></script>
    <script src="/app-assets/js/core/app-menu.js"></script>
    <script src="/app-assets/js/core/app.js"></script>
    <script src="/app-assets/js/scripts/components.js"></script>
    <script src="/app-assets/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    @if (session('ERR'))
    <script>
        Swal.fire({
            title: "ERROR!",
            text: " {{ session('ERR') }}",
            icon: "error",
            confirmButtonClass: 'btn btn-primary',
            buttonsStyling: false,
        });
    </script>
    @endif
    @if (session('OK'))
    <script>
        Swal.fire({
            title: "OK!",
            text: "{{ session('OK') }}",
            icon: "success",
            confirmButtonClass: 'btn btn-primary',
            buttonsStyling: false,
        });
    </script>
    @endif
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>