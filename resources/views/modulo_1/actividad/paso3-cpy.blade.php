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
                    <h4 class="card-title fs-5 fw-light secondary-color m-3"><i class="bi bi-3-square-fill"> Evidencia de la
                            Actividad de Aprendizaje</i></h4>
                    <p class="secondary-color m-3">En este tercer apartado se explicarán los parámetros de la evidencia a
                        entregar, como el tipo de evidencia, su nombre, la descripción y el formato en el que deberá ser
                        entregado, así como la técnica y el instrumento de evaluación.
                    </p>




                    <form action="{{  url('actividad_paso_3_alt') }}" method="post" class="row g-4 font-work needs-validation" novalidate>
                        @csrf

                        @for($i = 0 ; $i < session("numevidencias") ; $i++)


                        <div class="card">
                            <div class="card-body">
                                    <div class="col-8">
                                        <label for="nombre-evidencia"
                                               class="form-label labels-forms is-required ">
                                            Nombre Evidencia {{ $i + 1 }}:
                                        </label>
                                        <input type="text"
                                               class="form-control"
                                               id="nombre_evidencia_{{ $i + 1 }}"
                                               name="nombre_evidencia_{{ $i + 1 }}"
                                               placeholder="Nombre evidencia"

                                               >




                                        <label for="descripcion-evidencia" class="form-label pt-3 is-required">Descripción de la evidencia (indicaciones)
                                        </label>
                                        <textarea class="form-control"
                                                  rows="1"
                                                  id="descripcion-evidencia_{{ $i + 1 }}"
                                                  name="descripcion_evidencia_{{ $i + 1 }}"
                                                  placeholder="Descripción evidencia" ></textarea>
                                        <div class="invalid-feedback">
                                            Por favor introduzca descripción evidencia.
                                        </div>
                                        <div class="valid-feedback">
                                            Correcto!
                                        </div>


                                        <div class="row">
                                            <div class="col">
                                                <label for="tipo-evidencia" class="form-label pt-3 is-required">Tipo Evidencia </label>
                                                <select name="tipo_evidencia_{{ $i + 1 }}" class="form-select" aria-label="Default select example">
                                                    @foreach($tipos_evidencia as $te)
                                                        <option value="{{  $te->id  }}" >
                                                            {{ $te->nombre  }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="formato-evidencia" class="form-label pt-3 is-required">Formato Evidencia </label>
                                                <select name="formato_evidencia_{{ $i + 1 }}" class="form-select" aria-label="Default select example">
                                                    @foreach($formatos_evidencia as $fe)
                                                        <option value="{{  $fe->id  }}" >
                                                            {{ $fe->name  }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="tecnica-evidencia"

                                                       class="form-label pt-3 is-required">Técnica de Evaluación </label>
                                                <select name="tecnica_evaluacion_{{ $i + 1 }}"  class="form-select" aria-label="Default select example">
                                                    @foreach($tecnicas_evaluacion as $tev)
                                                        <option value="{{  $tev->id  }}" >
                                                            {{ $tev->name  }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> <!-- end row -->
                                        <label for="instrumento-eva-evidencia" class="form-label pt-3 is-required">Instrumento de evaluación </label>
                                        <select name="instrumento_evaluacion_{{ $i + 1 }}" class="form-select" aria-label="Default select example">
                                            @foreach($instrumentos_evaluacion as $iev)
                                                <option value="{{  $iev->id  }}" >
                                                    {{ $iev->name  }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <label for="criterios-evaluacion" class="form-label pt-3 is-required">Criterios de evaluación: </label>

                                        @foreach($criterios_evaluacion as $criev)
                                            <div class="form-check">
                                                <input class="form-check-input"
                                                       type="checkbox"
                                                       id=""
                                                       name="criterio_evaluacion_{{ $i +1  }}_{{ $loop->iteration }}"
                                                       value="{{  $criev->id  }}"
                                                />
                                                <label class="form-check-label" for="">
                                                    {{ $criev->nombre  }}
                                                </label>
                                            </div>
                                        @endforeach
                                        <div class="col text-end">
                                            <a class="btn btn-palette text-center"
                                               href="{{  url("actividad_paso_3_alt/create?del=1")  }}">Borrar Evidencia
                                            </a>

                                        </div>
                                    </div>




                            </div>
                        </div><!-- end card  -->

                            <hr />
                        @endfor

                        <a class="btn btn-palette text-center"
                           href="{{  url("actividad_paso_3_alt/create?add=1")  }}">Añadir evidencia
                        </a>

                        <div class="row pt-3">
                            <div class="col text-left">
                                <button type="submit" class="btn btn-palette">Atrás </button>
                            </div>
                            <div class="col text-end">
                                <button type="submit"
                                        class="btn btn-palette">Siguiente Paso </button>
                            </div>
                        </div>
                    </form><!-- Vertical Form -->

                </div>
            </div>
        </section>

    </main>

@endsection
