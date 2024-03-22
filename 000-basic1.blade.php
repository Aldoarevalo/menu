<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>PG</title>

    <link rel="shortcut icon" type="image/jpg" href="{{ asset('assets/img/ico/favicon.ico') }}">
    <link rel="icon" type="image/jpg" href="{{ asset('assets/img/ico/favicon.ico') }}" />
    <script src="{{ asset('assets/js/001-vendors.min.js') }}"></script>

        <script src="{{ asset('assets/axios/axios.min.js') }}"></script>
        <script src="{{ asset('assets/js/005-custom-axios.js') }}"></script>
        <script src="{{ asset('assets/js/006-loader.js') }}"></script>

       <script src="{{ asset('assets/sweetalert/sweetalert2.all.min.js') }}"></script>
        <link rel="StyleSheet" type="text/css" href="{{ asset('assets/sweetalert/sweetalert2.min.css') }}" />





    @vite([
    'resources/css/000-app.css',
    'resources/css/001-vendors.min.css',
    'resources/css/002-bootstrap.css',
    'resources/css/003-bootstrap-extended.css',
    'resources/css/004-colors.css',
    'resources/css/005-components.css',
    'resources/css/006-dark-layout.css',
    'resources/css/007-semi-dark-layout.css',
    'resources/css/008-vertical-menu.css',
    'resources/css/009-palette-gradient.css',
    'resources/css/010-authentication.css',
     'resources/css/018-loader.css'])



    <!-- Se queda en la nube-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">



</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body
    class="vertical-layout vertical-menu-modern semi-dark-layout 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page"
    data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-layout="semi-dark-layout">

        <!-----loader --->

        <div id="loader_content">
            <div class="loader"></div>
        </div>
        <!---- fin-loader --->

    <!-- BEGIN: Content-->
    <div class="app-content content">

        @yield('content')
    </div>
    <!-- END: Content-->



    @vite([

    'resources/js/002-app-menu.js',
    'resources/js/003-app.js',
    'resources/js/004-components.js'
    ])

</body>
<!-- END: Body-->

</html>
