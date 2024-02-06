@extends('layouts.master')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Resultados de la búsqueda :</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item">Módulo IAA</li>
                    <li class="breadcrumb-item active">Mis Actividades</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title fs-4 fw-light secondary-color">Resultados de la búsqueda :</h4>
                            <p class="secondary-color"></p>
                            @if($actividades->count() > 0)
                                <table class="table table-hover font-work">
                                    <thead class="font-Work-Sans">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Actividad Aprendizaje</th>
                                        <th scope="col">Resultado de Aprendizaje</th>
                                        <th scope="col">Instructor que realizó</th>
                                        <th scope="col">Tipo Actividad</th>
                                        <th scope="col">Ver más</th>

                                    </tr>
                                    </thead>
                                    <tbody class="font-work">
                                    @php
                                        $counter = 0;
                                    @endphp
                                    @foreach($actividades as $actividad)
                                        <tr>
                                            <th scope="row">{{  ++$counter }}</th>
                                            <td>{{ $actividad->verbo }}
                                                {{ $actividad->objeto }}
                                                {{ $actividad->condicion }}
                                            </td>
                                            <td>{{ $actividad->rap->nombre }}</td>
                                            <td>{{ $actividad->user()->first()->name }}</td>
                                            <td>{{ $actividad->tipo->nombre }}</td>
                                            <td>
                                                    <a href="{{ url("details/$actividad->id") }}">
                                                        <i class="bi bi-eye-fill" title="Ver Actividad" >
                                                        </i>
                                                    </a>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            @else
                                <p> No existen actividades asociados a su búsqueda.</p>

                            @endif
                            <!-- End Table with hoverable rows -->
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
