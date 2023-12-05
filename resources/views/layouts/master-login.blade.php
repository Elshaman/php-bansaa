<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ingresar en BANSAA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset( "assets-login/img/logo_sena.png" )   }}" rel="icon">
    <link href="{{ asset( "assets-login/img/logo_sena.png" )   }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset( "assets-login/vendor/bootstrap/css/bootstrap.min.css" ) }}" rel="stylesheet">
    <link href="{{ asset( "assets-login/vendor//bootstrap-icons/" ) }}"  rel="stylesheet">
    <link href="{{ asset( "assets-login/vendor/boxicons/css/boxicons.min.css" ) }}"  rel="stylesheet">
    <link href="{{ asset( "assets-login/vendor/quill/quill.snow.css" ) }}" rel="stylesheet">
    <link href="{{ asset( "assets-login/vendor/quill/quill.bubble.css" ) }}"  rel="stylesheet">
    <link href="{{ asset( "assets-login/vendor/remixicon/remixicon.css" ) }}"  rel="stylesheet">
    <link href="{{ asset( "assets-login/vendor/simple-datatables/style.css" ) }}"  rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset( "assets-login/css/style.css" ) }}" rel="stylesheet">

</head>

<body>
@yield('content')


<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="{{ asset("assets-login/vendor/bootstrap/js/bootstrap.bundle.min.js")  }}"></script>
<script src="assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="{{ asset("assets-login/vendor/quill/quill.min.js") }}" ></script>
<script src="{{ asset("assets-login/vendor/simple-datatables/simple-datatables.js") }}" ></script>
<script src="{{ asset("assets-login/vendor/tinymce/tinymce.min.js") }}" ></script>
<script src="{{ asset("assets-login/vendor/php-email-form/validate.js") }}" ></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Template Main JS File -->
<script src="{{ asset("assets-login/js/main.js") }}" ></script>
<script src="{{ asset("assets-login/js/login.js") }}"></script>

</body>
</html>
