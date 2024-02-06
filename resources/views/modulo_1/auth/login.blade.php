@extends('layouts.master-login')

@section('content')
    <main class="">
        <section class="vh-100">
            <div class="container-fluid h-custom pt-5">
                <div class = "bg-section">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-9 col-lg-6 col-xl-5">
                            <img src="{{ asset('/assets-login/img/bansaa.png')  }}"
                                 class="img-fluid" alt="Sample image">
                        </div>
                        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 border border-success border-opacity-25">
                            @if(session("mensaje"))
                                <div class="row pt-3">
                                    <div class="col text-center">
                                        <div class="alert alert-danger alert-dismissible fade show"  role="alert">
                                            <strong>Lo sentimos: </strong> {{ session("mensaje") }}
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <form class="pt-3" method="post" action="{{ url('login') }}">
                                @csrf
                                <!-- Email input -->
                                <label class="form-label" for="form3Example3">Usuario</label>
                                <div class="form-outline mb-4">
                                    <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
                                           placeholder="ingrese usuario" />

                                </div>

                                <!-- Password input -->
                                <label class="form-label" for="form3Example4">Contraseña</label>
                                <div class="form-outline mb-3">
                                    <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
                                           placeholder="Ingrese Contraseña" />

                                </div>

                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Checkbox -->
                                    <div class="form-check mb-0">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                        <label class="form-check-label" for="form2Example3">
                                            Recordarme
                                        </label>
                                    </div>

                                </div>

                                <div class="text-center text-lg-start mt-4 pt-2">
                                    <button type="submit" class="btn btn-palette btn-lg"
                                            style="padding-left: 2.5rem; padding-right: 2.5rem;">Ingresar</button>
                                    <p class="small fw-bold mt-2 pt-3 mb-0">¿No tiene una cuenta? <a href="{{ url('user/create') }}"
                                                                                                     class="link-info">Registrarse</a></p>
                                </div>



                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div
                class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-footer">
                <!-- Copyright -->
                <div class="text-white mb-3 mb-md-0">
                    Copyright © 2023. CGMLTI.
                </div>
                <!-- Copyright -->

                <!-- Right -->
                <!-- Right -->
            </div>
        </section>
    </main><!-- End #main -->
@endsection
