@extends('layouts.main')


@section('container')

@foreach ($posts as $posts)
<article class="mb-5">
    <h2>
        <a href="/posts/{{ $posts->slug }}">{{ $posts->title }}</a></h2>
    <p>{{ $posts->excerpt }}</p>
</article>
@endforeach

@endsection


