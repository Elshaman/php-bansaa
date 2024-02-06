@extends('layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Consultar Actividad</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                <li class="breadcrumb-item">Módulo BAA</li>
                <li class="breadcrumb-item active">Consultar Actividades</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card border-secondary mb-3">
                    <div class="card-body text-secondary">
                        <h4 class="card-title fs-5 fw-light secondary-color">Información de la Actividad de Aprendizaje</h4>
                        <p class="secondary-color">Aquí encontrará la información detallada de la Actividad de Aprendizaje seleccionada.
                        </p>
                            <div class="col-8">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                1 - Caracterización de la Actividad de Aprendizaje

                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col">
                                                       <strong>Tipologia: </strong> {{ $actividad->tipologia->nombre }}
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col">
                                                        <strong>Tipo de actividad: </strong> {{ $actividad->tipo->nombre }}
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col">
                                                        <strong>Verbo: </strong> {{ $actividad->verbo }}
                                                    </div>
                                                    <div class="col">
                                                        <strong>Objeto: </strong> {{ $actividad->objeto }}
                                                    </div>
                                                    <div class="col">
                                                        <strong>Condición: </strong> {{ $actividad->condicion }}
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col">
                                                        <strong>Descripción: </strong>
                                                    </div>
                                                    <div class="col">
                                                        {{ $actividad->descripcion }}
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col">
                                                        <strong>Tiempo(en horas): </strong> {{ $actividad->tiempo }}
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                2 - Delimitación de la Actividad de Aprendizaje
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col"><strong>Programa de Formación: </strong></div>
                                                    <div class="col"> {{ $programa->nombre }}</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col"><strong>Competencia: </strong></div>
                                                    <div class="col"> {{ $competencia->nombre }}</div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col"><strong>Resultado de Aprendizaje: </strong></div>
                                                    <div class="col"> {{ $actividad->rap->nombre }}</div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                3 - Evidencias a entregar
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                                @if($actividad->evidencias->count() > 0)

                                                    @foreach($actividad->evidencias as $evidencia)
                                                        <div  style="border: 1px solid #07bc4c" class="card border-secondary m-3 p-4">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <strong>Nombre:</strong>
                                                                    {{ $evidencia->nombre }}
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <strong>Descripción:</strong>
                                                                    {{ $evidencia->desc }}
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <strong>Intrumento de Evaluación:</strong>
                                                                    {{ $evidencia->instrumento->name }}
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <strong>Formato:</strong>
                                                                    {{ $evidencia->formato->name }}
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <strong>Técnica de Evaluación:</strong>
                                                                    {{ $evidencia->tecnicaEvaluacion->name }}
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <strong>Tipo de Evidencia:</strong>
                                                                    {{ $evidencia->tipo_evidencia->nombre }}
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <strong>Criterios de evaluacion asociados(según programa de formación):</strong>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <ul class="list-group list-group-flush">
                                                                    @foreach($evidencia->criterios as $criterio)
                                                                        <li class="list-group-item">{{ $criterio->nombre }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <p> No existen evidencias asociadas a la acticidad</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <!-- materiales de apoyo -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                                4 - Materiales
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                                @foreach($actividad->materiales as $material)
                                                    <div class="row">
                                                        <div class="col">
                                                            <strong>Nombre: </strong> {{ $material->nombre }}
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <strong>Archivo: </strong> {{ $material->ruta }}
                                                        </div>
                                                    </div>
                                                    <hr>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>

                                    <!-- fin materiales de apoyo -->

                                </div>

                            </div>


                        <div class="row pt-3">
                            <div class="col text-start">
                                <a  href="{{  url("/")  }}"
                                    class="btn btn-pallete text-center">
                                    <i class="bi bi-arrow-left-circle"></i>Volver al inicio
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>
@endsection
