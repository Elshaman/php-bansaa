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
                <h4 class="card-title fs-5 secondary-color pt3 m-3"><i class="bi bi-5-square-fill"> Elementos</i>
                </h4>
                <p class="secondary-color m-3">Edite los elementos y herramientas necesarias para el desarrollo de la
                    actividad y la generación de la evidencia.</p>

                <form action="{{  url("update_paso_5/$id_actividad") }}"
                      method="post"
                      class="row g-4 font-work needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    @for($i = 0 ; $i < session("num_elementos") ; $i++)
                        <div class="card">
                            <div class="card-body">


                                    <div class="col-8">
                                        <label for="nombre-elemento" class="form-label labels-forms is-required">Nombre elemento  {{ $i + 1   }} </label>
                                        <input type="text" class="form-control"
                                               id="nombre_elemento_{{ $i }}"
                                               name="nombre_elemento_{{ $i }}"
                                               placeholder=""
                                               @if(isset($elementos[$i]))
                                                        value="{{ old( "nombre_elemento_$i" , $elementos[$i]->nombre)   }}"
                                               @else
                                                   value=""
                                               @endif
                                        >
                                        <div class="col text-end">
                                            <a  href="{{  url("update_paso_5/$id_actividad/edit/?del=1")  }}" class="btn btn-palette text-center">
                                                Borrar
                                            </a>

                                        </div>
                                    </div>



                            </div>
                        </div><!-- end card -->
                    @endfor

                    <a href="{{  url("update_paso_5/$id_actividad/edit?add=1") }}
                        "class="btn btn-palette text-center">
                        Añadir Material/Recurso
                    </a>
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
