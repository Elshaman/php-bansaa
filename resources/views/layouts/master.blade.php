
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <title>Módulo BAA - BANSAA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets-login/img/logo_sena.png')  }}" rel="icon">
    <link href="{{ asset('assets-login/img/logo_sena.png')  }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets-login/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-login/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets-login/vendor/boxicons/css/boxicons.css') }}"  rel="stylesheet">
    <link href="{{ asset('assets-login/vendor/quill/quill.snow.css') }}"  rel="stylesheet">
    <link href="{{ asset('assets-login/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-login/vendor/remixicon/remixicon.css') }}"   rel="stylesheet">
    <link href="{{ asset('assets-login/vendor/simple-datatables/style.css') }}"  rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset("assets-login/css/style.css") }}" rel="stylesheet">
    <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script>

        $(document).ready(function () {

            $('#programa').change(function () {
                //limpiar el select de competencia
                $("#competencia").html("");
                let idprograma = $("#programa").val();

                $.getJSON('/competencias/' + idprograma, function (resultcomp) {
                    console.log(resultcomp);
                    $.each(resultcomp, function (i, objeto) {
                        $("#competencia").append('<option value="' + objeto.id + '" > ' + objeto.nombre + ' </option>');
                    });
                });
            });

            //carga de resultados  cuando se da click en alguna competencia
            $('#competencia').change(function () {
                //limpiar el select de competencia
                $("#raps").html("");
                let idcompetencia = $("#competencia").val();

                $.getJSON('/raps/' + idcompetencia, function (resultraps) {
                    console.log(resultraps);
                    $.each(resultraps, function (i, objeto) {
                        $("#raps").append('<option value="' + objeto.id + '" > ' + objeto.nombre + ' </option>');
                    });
                });
            });


        });


    </script>


</head>

<body>


<!--<x-navbar></x-navbar>-->

<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between gap-4">
        <i class="bi bi-list toggle-sidebar-btn mr-4"></i>
        <a href="index.php" class="logo d-flex align-items-center">
            <img src="{{asset('assets-login/img/logo_sena_header.png')}}"  alt="logo sena">
            <span class="d-none d-lg-block main-color">BANSAA</span>

        </a>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->



            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <i class='bi bi-person-circle bx-md main-color'></i>
                    <span class="d-none d-md-block dropdown-toggle ps-2"></span>
                </a><!-- End Profile Image Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>{{ Auth::user()->name  }}</h6>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center"
                             href="{{ url("logout") }}">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Salir</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header>


<x-sidebar></x-sidebar>

@yield('content')



<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets-login/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets-login/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets-login/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('assets-login/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('assets-login/vendor/quill/quill.min.js') }}"></script>
<script src="{{ asset('assets-login/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('assets-login/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets-login/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets-login/js/main.js') }}"></script>
<script src="{{ asset('assets-login/js/modulo-baa.js') }}"></script>

</body>

</html>
