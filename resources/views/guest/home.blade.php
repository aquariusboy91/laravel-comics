@extends('guest.layout.base')


@section('documentTitle')
    Home
@endsection

@section('content')
 <main>
    <div class="cards-cont">
            @foreach ($comics as $item_comics)
            <div class="container-cards">
                <img src="{{$item_comics['thumb']}} alt="">
                <h3 class="title">{{ $item_comics['series'] }}</h3>
            </div>
        @endforeach
    </div>
</main>

@endsection