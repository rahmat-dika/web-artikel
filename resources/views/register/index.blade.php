@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal">Masukan Data Anda</h1>
                <form action="/register" method="post">
                    @csrf
                    {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}

                    <div class="form-floating">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            id="name" placeholder="Nama Anda">
                        <label for="name">Nama</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control" @error('username') is-invalid @enderror
                            id="username" placeholder="Username Anda">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="profesi" class="form-control" @error('profesi') is-invalid @enderror id="profesi" placeholder="Profesi Anda">
                        <label for="profesi">Profesi</label>
                        @error('profesi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" @error('email') is-invalid @enderror id="email"
                            placeholder="emailanda@example.com">
                        <label for="email">Email Anda</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" @error('password') is-invalid @enderror id="password"
                            placeholder="Password Anda">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                    </label>
                </div> --}}
                    <button class="btn btn-primary w-100 py-2 mt-6" type="submit">Daftar Akun</button>

                </form>

                <small class="d-block text-center mt-3">Sudah punya akun? Klik <a href="/login">Login</a></small>
            </main>
        </div>
    </div>
@endsection
