@extends('layouts.master')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Editar Actividad</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                <li class="breadcrumb-item">Módulo IAA</li>
                <li class="breadcrumb-item active">Editar Actividad</li>
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

                <div class="row pt-3">
                    <div class="col text-left">
                        <a href="{{  url("update_paso_4/$id_actividad/edit?add=1") }}
                            "class="btn btn-success text-center">
                            <i class="bi bi-plus-circle"></i>Añadir Material/Recurso
                        </a>
                    </div>
                </div>
                <hr />



                <form class="row g-4 font-work" action="{{  url("update_paso_4/$id_actividad") }}"
                            method="post" enctype="multipart/form-data"  >
                    @csrf
                    @method("PUT")

                    @for($i = 0 ; $i < session("num_materiales") ; $i++)
                        <div class="card">
                            <div class="card-body">
                                        <div class="col-8">
                                            <label for="nombre-material" class="form-label labels-forms is-required">Nombre Material {{ $i + 1 }}
                                            </label>
                                            <input type="text" class="form-control"
                                                   id="nombre_material_{{ $i  }}"
                                                   name="nombre_material_{{ $i  }}"
                                                   @if(isset($materiales[$i]))
                                                        value="{{ old( "nombre_material_$i" , $materiales[$i]->nombre)   }}"
                                                   @else
                                                        value=""
                                                    @endif
                                                   >

                                            <div class="form-check">

                                            </div>
                                            <label for="descripcion-evidencia" class="form-label labels-forms is-required">Seleccione
                                                Archivo de material  {{ $i }} </label>
                                            <input type="file" class="form-control"
                                                   name="archivo_material_{{ $i }}"
                                                   id="archivo_material_{{ $i }}"
                                                   value="">

                                            <div class="row pt-3">
                                                <div class="col text-end">
                                                    <a  href="{{  url("update_paso_4/$id_actividad/edit?del=1")  }}"
                                                        class="btn btn-danger text-center">
                                                        <i class="bi bi-trash"></i>Borrar
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div> <!-- end card -->
                        <hr />
                @endfor

                    <div class="row pt-3">
                        <div class="col text-left">
                            <button type="submit" class="btn btn-palette">Atrás </button>
                        </div>
                        <div class="col text-end">
                            <button type="submit"
                                    class="btn btn-palette">Siguiente Paso </button>
                        </div>
                    </div>


                </form>

                <!-- Vertical Form -->
            </div>
        </div>
    </section>

</main><!-- End #main -->

@endsection
