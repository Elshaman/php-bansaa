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
                        <div class="col-lg-6 mb-5 mb-lg-0">
                            <div class="card">
                                <div class="card-body py-5 px-md-5">
                                    <form method="post" action="{{ url('user') }}">
                                        @csrf
                                        <!-- 2 column grid layout with text inputs for the first and last names -->
                                        <div class="row">
                                            <div class="form-outline mb-4">
                                                <input type="text" name="name" id="form3Example3" class="form-control" />
                                                <label class="form-label" for="form3Example3">Nombre</label>
                                            </div>

                                        </div>

                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input type="email" name="email" id="form3Example3" class="form-control" />
                                            <label class="form-label" for="form3Example3">Email</label>
                                        </div>

                                        <!-- Password input -->
                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" id="form3Example4" class="form-control" />
                                            <label class="form-label" for="form3Example4">Password</label>
                                        </div>



                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-primary btn-block mb-4">
                                            Sign up
                                        </button>

                                        @if(session('mensaje'))
                                            <div class="alert alert-success">
                                                {{session('mensaje')}}
                                            </div>
                                            @endif

                                    </form>
                                </div>
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
