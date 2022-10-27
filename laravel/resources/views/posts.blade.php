@extends('layouts.main')


@section('container')

@foreach ($posts as $posts)
<article class="mb-5 border-bottom pb-4">
    <h2><a href="/posts/{{ $posts->slug }}" class="text-decoration-none">{{ $posts->title }}</a></h2>

    <p>By. <a href="#" class="text-decoration-none">{{ $posts->user->name }}</a> In <a href="/categories/{{ $posts->category->slug }}"
    class="text-decoration-none">
    {{ $posts->category->name }}</a></p>

    <p>{{ $posts->excerpt }}</p>

    <a href="/posts/{{ $posts->slug }}"class="text-decoration-none">Read more..</a>
</article>
@endforeach

@endsection