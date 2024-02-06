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
            <div class="row m-2">
                <div class="col-lg-12">


                    <h5 class="card-title fs-5 fw-light secondary-color"><i class="bi bi-2-square-fill">
                            Caracterización de la
                            Actividad de Aprendizaje</i></h5>
                        <p class="secondary-color">En este segundo apartado se caracterizará la Actividad de
                            Aprendizaje a
                            ingresar, asignándole un nombre y describiendo en un texto la secuencia metodológica que
                            se
                            desarrollará por parte de los aprendices e indicando las horas de duración.</p>

                        <form class="row g-4 font-work needs-validation"
                              action="{{ url(  "update_paso_2/$actividad->id")  }}"
                              method="post" novalidate>
                            @csrf
                            @method('PUT')
                            <div class="col-8">
                                <label for="tipologia" class="form-label is-required">Tipología</label>
                                <select
                                    name="tipologia"
                                    id="tipologia"
                                    class="form-select"
                                    aria-label="Default select example"
                                    required>
                                    @foreach($tipologias as $tipologia)
                                        <option value="{{ $tipologia->id  }}"
                                                @if($tipologia->id == $id_tipologia)
                                                    selected="selected"
                                                @endif

                                        > {{  $tipologia->nombre }} </option>
                                    @endforeach

                                </select>
                                <div class="invalid-feedback">
                                    Por favor seleccione un tipo de actividad.
                                </div>
                                <div class="valid-feedback">
                                    Correcto!
                                </div>
                                <div class="row"><!--row 2 -->
                                    <label for="competencia" class="form-label p-3">Nombre de la Actividad de Aprendizaje:
                                    </label>
                                    <div class="col p-3"><!-- col verbo -->

                                        <label for="verbo-actividad" class="form-label labels-forms is-required">Verbo
                                        </label>

                                        <input type="text"
                                               id="verbo"
                                               name="verbo"
                                               class="form-control"
                                               value="{{ $actividad->verbo }}"
                                               placeholder="verbo" required>

                                    </div>
                                    <div class="col p-3"><!-- col objeto -->
                                        <label for="tiempo-actividad" class="form-label labels-forms is-required">Objeto
                                        </label>

                                        <input type="text"
                                               value="{{ $actividad->objeto }}"
                                               class="form-control"
                                               placeholder="Objeto" id="objeto" name="objeto"  required>

                                    </div>
                                    <div class="col p-3"> <!-- col condicion -->

                                        <label for="condicion-actividad" class="form-label labels-forms is-required">Condición
                                        </label>

                                        <input type="text"
                                               class="form-control"
                                               placeholder="condición "
                                               id="condicion"
                                               value="{{ $actividad->condicion }}"
                                               name="condicion"
                                               required>
                                    </div>
                                </div><!-- end row 2 -->


                                <div class="invalid-feedback">
                                    Por favor introduzca nombre competencia.
                                </div>
                                <div class="valid-feedback">
                                    Correcto!
                                </div>
                                <div class="col pt-3">
                                    <label for="descri-actividad" class="form-label is-required">Descripción de la Actividad de
                                        Aprendizaje</label>
                                    <p class="secondary-color">Detalle paso a paso las diferentes acciones que se
                                        desarrollarán por
                                        parte del aprendiz en la Actividad de Aprendizaje.</p>
                                    <textarea class="form-control"
                                              id="desc"
                                              name="desc"

                                              placeholder="" autofocus
                                              title="describa las acciones" pattern="[A-Za-z\s]+" required>
                                                {{ $actividad->descripcion }}
                                    </textarea>
                                    <div class="invalid-feedback">
                                        Por favor introduzca resultado de aprendizaje.
                                    </div>
                                    <div class="valid-feedback">
                                        Correcto!
                                    </div>
                                </div>
                                <div class="row"><!--row 3 -->
                                    <div class="col p-3">
                                        <label for="tiempo-actividad" class="form-label labels-forms is-required">Tiempo (horas)
                                        </label>

                                        <input type="text"
                                               class="form-control"
                                               placeholder="tiempo actividad"
                                               id="tiempo"
                                               name="tiempo"
                                               value="{{ $actividad->tiempo }}"
                                               required>
                                    </div><!-- end col una-->
                                    <div class="col p-3">
                                        <label for="disable-nombre-elemento" class="form-label labels-forms is-required">La
                                            actividad genera
                                            evidencia</label>
                                        <div class="form-check">
                                            <input class="form-check-input"
                                                   type="radio"
                                                   name="genera_evidencia"
                                                   id="radio-si" value="1"
                                                   @if($actividad->genera_evidencia  == 1)
                                                     checked
                                                   @endif
                                                   >
                                            <label class="form-check-label" for="radio-si">
                                                Si
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input"
                                                   type="radio"
                                                   name="genera_evidencia"
                                                   @if($actividad->genera_evidencia  == 2)
                                                     checked
                                                   @endif
                                                   id="radio-no"
                                                   value="2">
                                            <label class="form-check-label" for="radio-no">
                                                No
                                            </label>
                                        </div>
                                        </label>

                                    </div> <!--end col dos -->
                                </div> <!-- End row 3-->


                            </div>
                            <!--end col-8 -->
                            <div class="row">

                                <div class="col text-left">
                                    <button type="submit" class="btn btn-palette">Atrás </button>
                                </div>
                                <div class="col text-end">
                                    <button type="submit"
                                       class="btn btn-palette">Siguiente Paso </button>
                                </div>
                            </div>
                        </form><!-- Vertical Form -->

                </div><!-- End col-lg-12 -->





        </section>

    </main><!-- End #main -->

@endsection
