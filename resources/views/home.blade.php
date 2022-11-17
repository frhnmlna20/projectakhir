@extends('layouts.main')
@section('container')
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
@foreach ($about as $post )
<article class="mb-5 border-bottom-pb-4">
        <h2> <a href="/{{  $post->slug }}" >{{  $post->title }}</a></h2>

        <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none"> {{ $post->category->name }}</a>

        <p>{{ $post->excerpt }}</p>

        <a href="/{{  $post->slug }}"class="text-decoration-none">Read more..</a>
</article>
@endforeach
@endsection