@extends('layouts.master')

@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h3 class="fw-bold secondary-color">¡Bienvenido(a) {{ Auth::user()->name  }} a BANSAA!</h3>
            <nav>
                <ol class="breadcrumb">


                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row mt-5">
                <h3 class="fw-bold secondary-color">Banco Sistematizado de Actividades de Aprendizaje!</h3>
                <p class="fs-4 secondary-color">Seleccione el módulo al que desea ingresar</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset("assets-login/img/moduloIAA.jpg") }}" class="img-fluid rounded-start" alt="IAA">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title secondary-color">Módulo IAA</h4>
                                    <p class="card-text fw-bold">Ingreso de Actividades de Aprendizaje</p>
                                    <div class="col">
                                        <a href="{{ url('actividad_paso_1/create') }}" alt=''>
                                            <button type="button" class="btn btn-palette"> Nueva </button> </a>
                                        <a href="{{ url('actividad') }}" alt=''>
                                            <button type="button" class="btn btn-palette"> Mis actividades </button> </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset('assets-login/img/moduloBAA.jpg')}}" class="img-fluid rounded-start " alt="BAA">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title secondary-color">Módulo BAA</h3>
                                    <p class="card-text fw-bold">Banco de Actividades de Aprendizaje</p>
                                    <a href="#" alt='' class="main-color">
                                        <button type="button" class="btn btn-palette"> Ingresar </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>

    </main><!-- End #main -->
@endsection
