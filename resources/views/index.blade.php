@extends('layouts.main')

@section('container')
    {{-- <h1>Kumpulan Artikel</h1> --}}

    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-5">
            <h2>
                <a href="/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>
            <p>By: <a href="#">{{ $post->user->name }} in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            {{-- <h5>by : {{ $post['penulis'] }}</h5> --}}
            <p>{{ $post->excerpt }}</p>

            <a href="/blog/{{ $post->slug }}" class="text-decoration-none">Read More...</a>
        </article>
    @endforeach
@endsection