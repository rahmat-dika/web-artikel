@extends('layouts.main')

@section('container')
    <h1>Tambah Kategori</h1>

    @if (session()->has('succes'))
        <div class="alert alert-succes alert-dismissible fade show" role="alert">
            {{ session('succes') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif --}}

    <div class="col-lg-8">
        <form method="post" action="{{ url('create-category') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Kategori</label>
                <input type="text" name="name" class="form-control"  @error('name') is-invalid @enderror id="name">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug"  @error('slug') is-invalid @enderror class="form-control" id="slug">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="ket"  class="form-label">Keterangan Kategori</label>
                <input type="text" name="ket" class="form-control"  @error('ket') is-invalid @enderror id="ket">
                @error('ket')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Buat Kategori</button>
        </form>
    </div>
    <br><br>
  
@endsection
