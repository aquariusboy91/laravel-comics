@extends('guest.layout.base') 



@section('css')
  <link rel="stylesheet" href="{{ asset('css/comic.css') }}">
@endsection

@section ('content')

<div class="card-comic">
  
      <h3>{{$comic['title']}}</h3>
      <img src="{{$comic['thumb']}}" alt="">
      <p>{{$comic['description']}}<p>


</div>

@endsection 