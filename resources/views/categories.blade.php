@extends('layouts.main')
@section('container')
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<h1 class="mb-5">Post Categories</h1>
@foreach ($categories as $category )
<ul>
    <li>
        
        <h2><a href="/categories/{{  $category->slug }}">{{  $category->name }}</a></h2>
    </li>
</ul>
 <h2>

@endforeach
@endsection