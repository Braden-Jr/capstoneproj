<link rel="stylesheet" href="login.css">
@extends('master')
@section('contents')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="card-body  text-center">
                            <form method="post" action="/login">
                                @csrf
                                <div class="mb-md-5 mt-md-4 pb-5">

                                    <h2 class="fw-bold mb-5">Login</h2>
                                    <p class="text">Please enter your email and password!</p>

                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="typeEmailX"
                                            name='email'class="form-control form-control-lg" />
                                        <label class="form-label" for="typeEmailX">Email</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="typePasswordX" name='password'
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="typePasswordX">Password</label>
                                    </div>

                                    <p class="small pb-lg-2"><a class="text" href="#!">Forgot password?</a></p>

                                    <button class="btn btn-outline-dark" type="submit">Login</button>
                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                </div>
                            </form>
                            <div>
                                <p class="text">Don't have an account? <a href="signup" class="text-a">Sign Up</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
