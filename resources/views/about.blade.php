@extends('layouts.main')

@section('container')
  <h2>{{ $name1 }}</h1>
    <h3>{{ $email1 }}</h3>
    <img src="img/{{ $image1 }}" alt="{{ $name1 }}" width="200" class="img-thumbnail rounded-circle">

    <h2>{{ $name }}</h1>
        <h3>{{ $email }}</h3>
        <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">

        <h2>{{ $name2 }}</h1>
          <h3>{{ $email2 }}</h3>
          <img src="img/{{ $image2 }}" alt="{{ $name2 }}" width="200" class="img-thumbnail rounded-circle">

          <h2>{{ $name3 }}</h1>
            <h3>{{ $email3 }}</h3>
            <img src="img/{{ $image3 }}" alt="{{ $name3 }}" width="200" class="img-thumbnail rounded-circle"> 

            <h2>{{ $name4 }}</h1>
              <h3>{{ $email4 }}</h3>
              <img src="img/{{ $image4 }}" alt="{{ $name4 }}" width="200" class="img-thumbnail rounded-circle">

              <h2>{{ $name5 }}</h1>
                <h3>{{ $email5 }}</h3>
                <img src="img/{{ $image5 }}" alt="{{ $name5 }}" width="200" class="img-thumbnail rounded-circle">
   @endsection
