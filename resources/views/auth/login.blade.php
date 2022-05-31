@extends('layouts.app')

@section('title')
    Login | BookStore
@endsection

@section('content')
    <section class="auth-login">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="images/ilustration.png" class="img-fluid" alt="">
                    <h1>Book is a
                        window to the world</h1>
                </div>
                <div class="col-md-6">
                    <form action="#">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
