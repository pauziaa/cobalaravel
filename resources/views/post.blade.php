@extends('layouts.main')

@section('container')
     <h1 class="mb-5">{{ $post->title }}</h1>

     <p>By. Pauzia in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

     {!! $post->body !!}
  <p>
  <a href="/blog">Back to posts</a>
  </p>
  @endsection  