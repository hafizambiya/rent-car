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
            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                <input type="hidden" value="{{ request()->token }}" name="token">
                <input type="hidden" value="{{ request()->email }}" name="email">

                {{-- {{ dd(request()->email) }} --}}

                <div class="form-group">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control" placeholder="Password" type="password" name="password">
                    </div>
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
                {{-- password confirmation --}}
                <div class="form-group">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control" placeholder="Password Confirmation" type="password"
                            name="password_confirmation">
                    </div>
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>

                <div class="text-center">
                    <button type="submit" value="Update Password" class="btn btn-primary my-4">Reset
                        Password</button>
                </div>
            </form>
        </div>

    </div>

@endsection
