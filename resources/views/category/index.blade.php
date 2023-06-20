@extends('layouts.main')

@section('container')
    <h1>Kategori Artikel</h1>
    <a href="/category/create" class="btn btn-primary mb-3">Tambah Kategori</a>
    <h3>Data Kategori</h3>
    <div class="table-responsive small">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($category as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->slug }}</td>
                        <td>{{ $item->ket }}</td>
                        <td>
                            {{-- <form action="{{ url('edit-category', $category->id)}}" method="get" class="btn btn-warning btn-sm">
                                <button type="submit" class="btn btn-warning">Edit</button>
                            </form> --}}
                            {{-- <form action="{{ url('delete-category')}}" class="btn btn-danger btn-sm">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
