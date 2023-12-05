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
                <h4 class="card-title fs-5 fw-light secondary-color m-3"><i class="bi bi-4-square-fill">
                        Materiales y/o
                        Recursos de la Actividad de Aprendizaje</i></h4>
                <p class="secondary-color m-3">En este cuarto apartado se entregarán y describen los materiales
                    de apoyo
                    necesarios para el desarrollo de la actividad y la generación de la evidencia.</p>
                <div class="card">
                    <div class="card-body">

                        <form class="row g-4 font-work"
                               action="{{  url("actividad_paso_4") }}"
                               method="post" enctype="multipart/form-data"  >
                            @csrf
                            @for($i = 0 ; $i < session("num_materiales") ; $i++)
                                <div class="col-8">
                                    <label for="nombre-material" class="form-label labels-forms is-required">Nombre Material {{ $i + 1 }}
                                    </label>
                                    <input type="text" class="form-control"
                                           id="nombre_material_{{ $i + 1 }}"
                                           name="nombre_material_{{ $i + 1 }}"
                                           value=""
                                           >

                                    <div class="form-check">

                                    </div>
                                    <label for="descripcion-evidencia" class="form-label labels-forms is-required">Seleccione
                                        Archivo  {{ $i + 1 }} </label>
                                    <input type="file" class="form-control"
                                           name="archivo_material_{{ $i + 1 }}"
                                           id="archivo_material_{{ $i + 1 }}"
                                           value="">


                                    <div class="col text-end">
                                        <button type="button reset" class="btn btn-palette text-center">Borrar</button>
                                        <button type="button submit" class="btn btn-palette text-center">Añadir Material/Recurso</button>
                                    </div>
                                </div>
                                @endfor
                        </form><!-- Vertical Form -->

                    </div>
                </div> <!-- end card -->
                <div class="row pt-3">
                    <div class="col text-left">
                        <a href="iaa-nueva-actividad-evidencia.php" button type="button submit"
                           class="btn btn-palette">Atrás </a>
                    </div>

                    <div class="col text-end">
                        <a href="iaa-nueva-actividad-elemento.php" button type="button submit"
                           class="btn btn-palette">Siguiente Paso </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

@endsection
