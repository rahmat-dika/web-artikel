@extends('layouts.main')

@section('container')
    <h1>Halo {{ auth()->user()->name }}</h1>
    {{-- <img src="{{ $image }}" alt="Ini mamat" class="img-thumbnail rounded-circle"> --}}
    {{-- <div class="table-responsive small">
        <a href="/dashboard/create" class="btn btn-primary mb-3">Buat Artikel</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1,001</td>
                    <td>random</td>
                    <td>data</td>
                    <td>placeholder</td>
                </tr>
            </tbody>
        </table>
    </div> --}}
@endsection
