@extends('template')

@section('title', 'Registrasi')

@section('content')


    <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0">
                <div class="card-header text-center pt-4">
                    <h5>Register</h5>
                </div>
                @if (session('message'))
                    <div class="alert alert-warning text-center  ms-4 me-4">
                        {{ session('message') }}
                    </div>
                @endif

                <div class="card-body">
                    <form enctype="multipart/form-data" method="post" action="{{ url('registrasi_proses') }}">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Nama" aria-label="Nama" name="nama">
                        </div>
                        @error('nama')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email" aria-label="Nama" name="email">
                        </div>
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Alamat" aria-label="Alamat"
                                name="alamat">
                        </div>
                        @error('alamat')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <div class="mb-3">
                            <input type="Number" class="form-control" placeholder="No Telepon" aria-label="Alamat"
                                name="no_hp">
                        </div>
                        @error('no_hp')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Password" aria-label="Password"
                                name="password">
                        </div>
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Konfirmasi Password"
                                aria-label="Konfirmasi Password" name="password_confirmation">
                        </div>
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror


                        <div class="form-check form-check-info text-start">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                            <label class="form-check-label" for="flexCheckDefault">
                                I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and
                                    Conditions</a>
                            </label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Daftar</button>
                        </div>
                        <p class="text-sm mt-3 mb-0">Already have an account? <a href="javascript:;"
                                class="text-dark font-weight-bolder">Sign in</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
