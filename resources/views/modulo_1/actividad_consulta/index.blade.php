@extends('layouts.master')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Mis Actividades</h1>
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
                            <h4 class="card-title fs-4 fw-light secondary-color">Mis Actividades</h4>
                            <p class="secondary-color"></p>
                            <table class="table table-hover font-work">
                                <thead class="font-Work-Sans">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Actividad Aprendizaje</th>
                                    <th scope="col">Resultado de Aprendizaje</th>
                                    <th scope="col">Tipo Actividad</th>
                                    <th scope="col">Ver más</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                                </thead>
                                <tbody class="font-work">
                                <tr>
                                    <th scope="row">1</th>
                                    <td>construir el fotograma</td>
                                    <td>Apropiación</td>
                                    <td>Cognitivo</td>
                                    <td><i class="bi bi-eye-fill" title="Ver Actividad"></i></td>
                                    <td><button type="button" class="btn btn-palette btn-sm" title="Editar  Actividad"><i
                                                class='bi bi-pencil-square'></i></button>
                                        <button type="button" class="btn btn-palette  btn-sm" title="Eliminar  Actividad"><i
                                                class='bi bi-trash'></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>construir el fotograma</td>
                                    <td>Apropiación</td>
                                    <td>Cognitivo</td>
                                    <td><i class="bi bi-eye-fill"></i></td>
                                    <td><button type="button" class="btn btn-palette btn-sm" title="Editar  Actividad"><i
                                                class='bi bi-pencil-square'></i></button>
                                        <button type="button" class="btn btn-palette btn-sm" title="Eliminar  Actividad"><i
                                                class='bi bi-trash'></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>construir el fotograma</td>
                                    <td>Apropiación</td>
                                    <td>Cognitivo</td>
                                    <td><i class="bi bi-eye-fill"></i></td>
                                    <td><button type="button" class="btn btn-palette btn-sm" title="Editar  Actividad"><i
                                                class='bi bi-pencil-square'></i></button>
                                        <button type="button" class="btn btn-palette btn-sm" title="Eliminar  Actividad"><i
                                                class='bi bi-trash'></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>construir el fotograma</td>
                                    <td>Apropiación</td>
                                    <td>Cognitivo</td>
                                    <td><i class="bi bi-eye-fill"></i></td>
                                    <td><button type="button" class="btn btn-palette btn-sm" title="Editar  Actividad"><i
                                                class='bi bi-pencil-square'></i></button>
                                        <button type="button" class="btn btn-palette btn-sm" title="Eliminar  Actividad"><i
                                                class='bi bi-trash'></i></button>
                                    </td>
                                </tr>

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
                            <!-- End Table with hoverable rows -->
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
