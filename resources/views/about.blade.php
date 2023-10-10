@extends('layouts.main')

@section('container')
  <h2>{{ $name1 }}</h1>
    <h3>{{ $email1 }}</h3>
    <img src="img/{{ $image1 }}" alt="{{ $name1 }}" width="200" class="img-thumbnail rounded-circle">

    <h2>{{ $name }}</h1>
        <h3>{{ $email }}</h3>
        <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
   @endsection