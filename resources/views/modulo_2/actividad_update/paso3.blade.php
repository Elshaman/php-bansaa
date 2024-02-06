@extends('layouts.master')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Editar Actividad</h1>
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

                    <div class="row pt-3">
                        <div class="col text-left">
                            <a class="btn btn-success text-center"
                               href="{{  url("update_paso_3/$id_actividad?add=1")  }}">
                                <i class="bi bi-plus-circle"></i>Añadir evidencia
                            </a>
                        </div>
                    </div>
                    <hr>


                    <form action="{{  url("update_paso_3/$id_actividad") }}" method="post" class="row g-4 font-work needs-validation" novalidate>
                        @csrf
                        @method('PUT')
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
                                               id="nombre_evidencia_{{ $i }}"
                                               name="nombre_evidencia_{{ $i }}"
                                               placeholder="Nombre evidencia"
                                               @if(isset($evidencias[$i]))
                                                    value="{{ old( "nombre_evidencia_$i" , $evidencias[$i]->nombre)   }}"
                                               @else
                                                   value=""
                                               @endif
                                               >




                                        <label for="descripcion-evidencia" class="form-label pt-3 is-required">Descripción de la evidencia (indicaciones)
                                        </label>
                                        <textarea class="form-control"
                                                  rows="1"
                                                  id="descripcion-evidencia_{{ $i  }}"
                                                  name="descripcion_evidencia_{{ $i  }}"
                                                  placeholder="Descripción evidencia" >
                                                    @if(isset($evidencias[$i]))
                                                        {{ old( "descripcion-evidencia_$i" , $evidencias[$i]->desc)  }}
                                                    @endif
                                        </textarea>
                                        <div class="invalid-feedback">
                                            Por favor introduzca descripción evidencia.
                                        </div>
                                        <div class="valid-feedback">
                                            Correcto!
                                        </div>


                                        <div class="row">
                                            <div class="col">
                                                <label for="tipo-evidencia" class="form-label pt-3 is-required">Tipo Evidencia </label>
                                                <select name="tipo_evidencia_{{ $i  }}" class="form-select" aria-label="Default select example">
                                                    @foreach($tipos_evidencia as $te)
                                                        <option
                                                            value="{{  $te->id  }}"
                                                            @if(isset($evidencias[$i]))
                                                                @if($te->id == $evidencias[$i]->tipo_evidencia->id)
                                                                    selected
                                                                @endif
                                                            @endif
                                                        >
                                                            {{ $te->nombre  }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="formato-evidencia" class="form-label pt-3 is-required">Formato Evidencia </label>
                                                <select name="formato_evidencia_{{ $i  }}" class="form-select" aria-label="Default select example">
                                                    @foreach($formatos_evidencia as $fe)
                                                        <option value="{{  $fe->id  }}"
                                                                @if(isset($evidencias[$i]))
                                                                    @if($fe->id == $evidencias[$i]->formato->id)
                                                                         selected
                                                                    @endif
                                                                @endif
                                                        >
                                                            {{ $fe->name  }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="tecnica-evidencia"
                                                       class="form-label pt-3 is-required">Técnica de Evaluación </label>
                                                <select name="tecnica_evaluacion_{{ $i  }}"  class="form-select" aria-label="Default select example">
                                                    @foreach($tecnicas_evaluacion as $tev)
                                                        <option value="{{  $tev->id  }}"
                                                                @if(isset($evidencias[$i]))
                                                                    @if($te->id == $evidencias[$i]->tecnicaEvaluacion->id)
                                                                        selected
                                                                    @endif
                                                                @endif
                                                        >
                                                            {{ $tev->name  }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> <!-- end row -->
                                        <label for="instrumento-eva-evidencia" class="form-label pt-3 is-required">Instrumento de evaluación </label>
                                        <select name="instrumento_evaluacion_{{ $i  }}" class="form-select" aria-label="Default select example">
                                            @foreach($instrumentos_evaluacion as $iev)
                                                <option value="{{  $iev->id  }}"
                                                        @if(isset($evidencias[$i]))
                                                            @if($iev->id == $evidencias[$i]->instrumento->id)
                                                                selected
                                                            @endif
                                                        @endif
                                                >
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
                                                       name="criterio_evaluacion_{{ $i  }}_{{ $loop->iteration  }}"
                                                       value="{{  $criev->id  }}"

                                                />
                                                <label class="form-check-label" for="">
                                                    {{ $criev->nombre  }}
                                                </label>
                                            </div>
                                        @endforeach

                                        <div class="col text-end">
                                            <a class="btn btn-danger text-center"
                                               href="{{  url("update_paso_3/$id_actividad?del=1")  }}">
                                                <i class="bi bi-trash"></i>Borrar Evidencia
                                            </a>

                                        </div>
                                    </div>




                            </div>
                            </div><!-- end card  -->

                            <hr />
                        @endfor



                        <div class="row pt-3">
                            <div class="col text-left">
                                <button type="submit" class="btn btn-palette">Atrás </button>
                            </div>
                            <div class="col text-end">
                                <button type="submit"
                                        class="btn btn-palette">Siguiente Paso
                                </button>
                            </div>
                        </div>
                    </form><!-- Vertical Form -->

                </div>
            </div>
        </section>

    </main>

@endsection
