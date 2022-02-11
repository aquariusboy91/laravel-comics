@extends('guest.layout.base')


@section('documentTitle')
    Home
@endsection

@section('content')
    @foreach ($comics as $item_comics)
    <h2>{{ $item_comics['title'] }}</h2>
    @endforeach

@endsection