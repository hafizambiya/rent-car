@extends('layout.signin-layout')

@section('title', 'Login')
@section('content')
    <div class="card card-plain" style="margin-top: 70px">
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
            <h4 class="font-weight-bolder">Selamat Datang</h4>
            <p class="mb-0">Silahkan masukan email dan password untuk masuk ke halaman beranda peserta</p>

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
                    <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Masuk</button>
                </div>
            </form>
        </div>
        <p class="text-center">Atau masuk menggunakan Gmail</p>
        <div class="col-12 me-auto px-1">
            <a class="btn btn-outline-light w-100" href="{{ route('auth.google') }}">
                <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(3.000000, 2.000000)" fill-rule="nonzero">
                            <path
                                d="M57.8123233,30.1515267 C57.8123233,27.7263183 57.6155321,25.9565533 57.1896408,24.1212666 L29.4960833,24.1212666 L29.4960833,35.0674653 L45.7515771,35.0674653 C45.4239683,37.7877475 43.6542033,41.8844383 39.7213169,44.6372555 L39.6661883,45.0037254 L48.4223791,51.7870338 L49.0290201,51.8475849 C54.6004021,46.7020943 57.8123233,39.1313952 57.8123233,30.1515267"
                                fill="#4285F4"></path>
                            <path
                                d="M29.4960833,58.9921667 C37.4599129,58.9921667 44.1456164,56.3701671 49.0290201,51.8475849 L39.7213169,44.6372555 C37.2305867,46.3742596 33.887622,47.5868638 29.4960833,47.5868638 C21.6960582,47.5868638 15.0758763,42.4415991 12.7159637,35.3297782 L12.3700541,35.3591501 L3.26524241,42.4054492 L3.14617358,42.736447 C7.9965904,52.3717589 17.959737,58.9921667 29.4960833,58.9921667"
                                fill="#34A853"></path>
                            <path
                                d="M12.7159637,35.3297782 C12.0932812,33.4944915 11.7329116,31.5279353 11.7329116,29.4960833 C11.7329116,27.4640054 12.0932812,25.4976752 12.6832029,23.6623884 L12.6667095,23.2715173 L3.44779955,16.1120237 L3.14617358,16.2554937 C1.14708246,20.2539019 0,24.7439491 0,29.4960833 C0,34.2482175 1.14708246,38.7380388 3.14617358,42.736447 L12.7159637,35.3297782"
                                fill="#FBBC05"></path>
                            <path
                                d="M29.4960833,11.4050769 C35.0347044,11.4050769 38.7707997,13.7975244 40.9011602,15.7968415 L49.2255853,7.66898166 C44.1130815,2.91684746 37.4599129,0 29.4960833,0 C17.959737,0 7.9965904,6.62018183 3.14617358,16.2554937 L12.6832029,23.6623884 C15.0758763,16.5505675 21.6960582,11.4050769 29.4960833,11.4050769"
                                fill="#EB4335"></path>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
        <div class="card-footer text-center pt-0 px-lg-2 px-1">
            <p class=" text-sm mx-auto">
                Belum mendaftar ?
                <a href="{{ 'registrasi' }}" class="text-primary text-gradient font-weight-bold">Registrasi |</a>
                <a href="{{ 'forgot-password' }}" class="text-primary text-gradient font-weight-bold">Lupa Password</a>

            </p>
        </div>

        @if (session('failed'))
            <div class="alert alert-warning">
                {{ session('failed') }}
            </div>
        @endif
    </div>

@endsection
