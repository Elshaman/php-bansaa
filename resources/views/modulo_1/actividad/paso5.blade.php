@extends('layouts.master')

@section('content')
    <main id="main" class="main">

    <div class="pagetitle">
        <h1>Nueva Actividad</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                <li class="breadcrumb-item">Módulo IAA</li>
                <li class="breadcrumb-item active">Nueva Actividad</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="bg-section">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="card-title fs-5 secondary-color pt3 m-3"><i class="bi bi-5-square-fill"> Elementos</i>
                </h4>
                <p class="secondary-color m-3">Registre los elementos y herramientas necesarias para el desarrollo de la
                    actividad y la generación de la evidencia.</p>

                <div class="row pt-3">
                    <div class="col text-left">
                        <a href="{{  url('actividad_paso_5/create?add=1') }}
                            "class="btn btn-success text-center">
                            <i class="bi bi-plus-circle"></i>Añadir Material/Recurso
                        </a>
                    </div>
                </div>
                <hr>


                <form action="{{  url("actividad_paso_5") }}"
                      method="post"
                      class="row g-4 font-work needs-validation" novalidate>
                    @csrf
                    @for($i = 0 ; $i < session("num_elementos") ; $i++)
                        <div class="card">
                            <div class="card-body">


                                    <div class="col-8">
                                        <label for="nombre-elemento" class="form-label labels-forms is-required">Nombre elemento  {{ $i + 1   }} </label>
                                        <input type="text" class="form-control"
                                               id="nombre_elemento_{{ $i + 1 }}"
                                               name="nombre_elemento_{{ $i + 1 }}"
                                               placeholder="" >
                                        <div class="row pt-3">
                                            <div class="col text-end">

                                                <a  href="{{  url("actividad_paso_5/create?del=1")  }}"
                                                    class="btn btn-danger text-center">
                                                    <i class="bi bi-trash"></i>Borrar
                                                </a>
                                            </div>
                                        </div>

                                        </div>
                                    </div>



                        </div>

                    @endfor


                    <div class="row pt-3">
                        <div class="col text-left">
                            <button type="submit" class="btn btn-palette">Atrás </button>
                        </div>
                        <div class="col text-end">
                            <button type="submit"
                                    class="btn btn-palette">Guardar Actividad y Finalizar </button>
                        </div>
                    </div>


                </form><!-- Vertical Form -->



            </div>
        </div>
    </section>

    </main><!-- End #main -->
@endsection
