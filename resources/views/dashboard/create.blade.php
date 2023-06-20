@extends('layouts.main')

@section('container')
    <h1 class="mb-2">Buat Tulisan Anda</h1>

    <div class="col-lg-8">
        <form method="post" action="{{url('create-post') }}">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="title" name="title" class="form-control" id="title">

            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" id="slug">

            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    <option selected>Pilih Kategori</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Tulisan kamu</label>
                <textarea class="form-control" id="body" name="body" rows="5"></textarea>

            </div>
            <button type="submit" class="btn btn-primary">Buat Tulisan</button>
        </form>
    </div>
@endsection
