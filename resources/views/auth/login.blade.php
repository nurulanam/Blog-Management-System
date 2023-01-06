@extends('frontend.clearMaster')
@section('banner')
<section class="inner-page-banner bg-common" data-bg-image="{{ asset('frontend/media/figure/banner1.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    <h1>Login</h1>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card mt-4">

            <div class="card-body py-4">
                <div class="text-center mt-2">
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <h3 class="text-danger"><b>Log In</b></h3>
                </div>
                <div class="p-2 mt-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="from-group my-2">
                            <label for="" class="form-label">E-mail :</label>
                            <input type="email" class="form-control" name="email" required placeholder="Enter Your E-mail">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="from-group my-2">
                            <label for="" class="form-label">Password :</label>
                            <input type="password" class="form-control" name="password" required placeholder="Enter Your Password">
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <button class="btn btn-danger mt-2 w-100">LogIn</button>
                    </form>
                </div>
            </div>

            <!-- end card body -->
        </div>
        <!-- end card -->
        <div class="my-5 text-center">
                <p class="mb-0">Don't have an account ? <a href="{{ route('register') }}" class="fw-semibold text-danger text-decoration-underline"> Register </a> </p>
            </div>
@endsection
