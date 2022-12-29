@extends('frontend.clearMaster')
@section('content')
<div class="card mt-4">

    <div class="card-body p-4">
        <div class="text-center mt-2">
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <h3 class="text-danger"><b>Registration</b></h3>
        </div>
        <div class="p-2 mt-4">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="from-group my-2">
                    <label for="" class="form-label">Name :</label>
                    <input type="text" class="form-control" name="name" required placeholder="Enter Your Name">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
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
                <div class="from-group my-2">
                    <label for="" class="form-label">Confirm Password :</label>
                    <input type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                    @error('password_confirmation')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button class="btn btn-danger mt-2 w-100">Register</button>
            </form>
        </div>
    </div>

    <!-- end card body -->
</div>
<!-- end card -->
<div class="my-5 text-center">
        <p class="mb-0">Already have an account ? <a href="{{ route('login') }}" class="fw-semibold text-danger text-decoration-underline"> Login </a> </p>
    </div>

@endsection
