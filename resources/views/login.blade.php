@extends('layout.signin-layout')

@section('title', 'Login')
@section('content')
    <div class="card card-plain">
        <div class="card-header pb-0 text-start">
            @if (session('status'))
                <div class="alert alert-success" style="margin-top: 80px">
                    {{ session('status') }}
                </div>
            @endif
            @if (session('faled'))
                <div class="alert alert-warning" style="margin-top: 80px">
                    {{ session('status') }}
                </div>
            @endif
            <h4 class="font-weight-bolder">Sign In</h4>
            <p class="mb-0">Enter your sim and password to sign in</p>

        </div>
        <div class="card-body">
            <form action="{{ url('login/proses') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="email" class="form-control form-control-lg" placeholder="email" name="email">
                </div>
                @error('email')
                    {{ $message }}
                @enderror
                <div class="mb-3">
                    <input type="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password"
                        name="password">
                </div>
                @error('password')
                    {{ $message }}
                @enderror
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                </div>
            </form>
        </div>
        <div class="card-footer text-center pt-0 px-lg-2 px-1">
            <p class="mb-4 text-sm mx-auto">
                Don't have an account?
                <a href="javascript:;" class="text-primary text-gradient font-weight-bold">Sign up</a>
                @if (session('failed'))
                    <div class="alert alert-warning">
                        {{ session('failed') }}
                    </div>
                @endif
            </p>
        </div>
    </div>

@endsection
