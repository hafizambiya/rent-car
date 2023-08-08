@extends('layout.signin-layout')

@section('title', 'Forgot Password')
@section('content')
    <div class="card card-plain">
        <div class="card-header pb-0 text-start">
            @if (session()->has('status'))
                <div class="alert alert-success">
                    {{ session()->get('status') }}
                </div>
            @endif
            <h4 class="font-weight-bolder">Forgot Your Password</h4>
            <p class="mb-0">Plase Enter Mail to Password Reset Request</p>

        </div>
        <div class="card-body">
            <form action="{{ route('password.email') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="email" class="form-control form-control-lg" placeholder="email" name="email">
                </div>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

                <div class="text-center">
                    <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Submit</button>
                </div>
            </form>
        </div>

    </div>

@endsection
