@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-4">

            @if (session()->has('succes'))
                <div class="alert alert-succes alert-dismissible fade show" role="alert">
                    {{ session('succes') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <main class=" w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal">Silahkan Login</h1>
                <form action="{{ url('action-login') }}" method="post">
                    @csrf
                    {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}

                    <div class="form-floating">
                        <input type="email" name="email" class="form-control"
                            @error('email')
                            is-invalid
                        @enderror
                            id="email" placeholder="emailanda@example.com" autofocus required
                            value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        <label for="password" required>Password</label>
                    </div>

                    {{-- <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Remember me
                        </label>
                    </div> --}}
                    <button class="btn btn-primary w-100 py-2 mt-6" type="submit">Login</button>

                </form>

                <small class="d-block text-center mt-3">Belum Registrasi? Klik <a href="/register">Daftar</a></small>
            </main>
        </div>
    </div>
@endsection
