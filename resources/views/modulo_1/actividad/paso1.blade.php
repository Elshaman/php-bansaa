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

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fs-5 fw-light secondary-color"><i class="bi bi-1-square-fill"> Delimitación de la
                                    Actividad de Aprendizaje</i></h5>
                            <p class="secondary-color">En este primer apartado se delimitará la Actividad de Aprendizaje a ingresar, seleccionando la Competencia para la que fue diseñada, así como el Resultado de Aprendizaje que abordará y el tipo de Actividad dentro de la Guía de Aprendizaje.</p>
                            <form action="{{ url('actividad_paso_1')  }}"
                                  method="post"
                                  class="row g-4 font-work">

                                @csrf
                                <div class="col-8">
                                    <label for="programa" class="form-label"><b> Programa de Formación</b></label>
                                    <!--<input type="text" class="form-control" id="programa-formacion">-->
                                    <select
                                        name="programa"
                                        id="programa"
                                        class="form-select"
                                        aria-label="Default select example">
                                        @foreach($programas as $programa)
                                            <option value="{{ $programa->id  }}" > {{  $programa->nombre }} </option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="col-8">
                                    <label for="competencia" class="form-label"><b>Competencia</b></label>
                                    <select name="competencia" id="competencia"  class="form-select">
                                    </select>

                                </div>


                                <div class="col-8">
                                    <label for="raps" class="form-label"><b>Resultado de Aprendizaje</b></label>
                                    <select name="raps" id="raps"  class="form-select">
                                    </select>
                                </div>

                                <div class="col-8">
                                    <label for="tipos_actividad" class="tipos_actividad-label"><b>Tipo de Actividad</b></label>
                                    <select name="tipos_actividad" id="tipos_actividad"  class="form-select">
                                        @foreach($tipos_actividad as $tipo)
                                            <option value="{{ $tipo->id  }}" > {{ $tipo->nombre }} </option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="text-end">
                                    <button type="submit" class="btn btn-palette">Siguiente</button>
                                </div>
                            </form><!-- Vertical Form -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
