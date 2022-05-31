@extends('layouts.app')

@section('title')
    Login | BookStore
@endsection

@section('content')
    <section class="auth-login">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 text-center">
                    <img src="images/ilustration.png" class="img-fluid" alt="">
                    <h1>Book is a
                        window to the world</h1>
                </div>
                <div class="col-md-6 offset-1">
                    <form action="#">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="name" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="password">Password</label>
                            <div class="input-group" id="show_hide_password">
                                <input class="form-control" type="password" name="password" id="password">

                            </div>

                        </div>
                        <div class="form-group mt-3">
                            <label for="password_confirmation">Password Confirmation</label>
                            <div class="input-group" id="show_hide_password">
                                <input class="form-control" type="password" name="password_confirmation"
                                    id="password_confirmation">
                                <div class="input-group-text">
                                    <a href=""><i class='bx bx-hide'></i></a>
                                </div>
                            </div>

                        </div>
                        <div class="form-group mt-5">
                            <button type="submit" class="btn-first border-0 w-100 ">Register Now</button>
                            <a href="{{ route('homepage') }}"
                                class="btn-second w-100 d-inline-block text-center mt-3">Back
                                to homepage</a>
                        </div>
                    </form>
                    <small class="text-muted mt-4 d-inline-block">Do you already have an account? <a
                            href="{{ route('login') }}">Login now</a>
                    </small>

                    <p class="text-center mt-4">Or</p>
                    <a href="#" class="btn btn-danger w-100"><i class='bx bxl-google'></i> Register with Google</a>
                </div>
            </div>
        </div>
    </section>
@endsection
