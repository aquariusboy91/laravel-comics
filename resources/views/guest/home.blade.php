@extends('guest.layout.base')


@section('documentTitle')
    Home
@endsection

@section('content')
 <main>
    <div class="cards-cont">
            @foreach ($comics as $item_comics)
            <div class="container-cards">
                <img src="{{$item_comics['thumb']}}" alt="">
                <h3 class="title"><a href="{{ route('comic', $item_comics['id']) }}">{{ $item_comics['series'] }}</a></h3>
            </div>
        @endforeach
    </div>
    <div class="navmain">
        <ul class="list-main">
            <a href="">
                <li>
                     <img src="../../../img/buy-comics-digital-comics.png" alt="">
                     <span>DIGITAL COMICS</span>
                </li>
            </a>
            <a href="">
                <li>
                     <img src="../../../img/buy-comics-merchandise.png" alt="">
                     <span>DC MERCHANDISE</span>
                </li>
             </a>
            <a href="">
                <li>
                     <img src="../../../img/buy-comics-subscriptions.png" alt="">
                     <span>SUBSCRIPTION</span>
                </li>
            </a>
            <a href="">
                <li>
                     <img src="../../../img/buy-comics-shop-locator.png" alt="" class="shop">
                     <span>COMIC SHOP LOCATOR</span>
                </li>
            </a>
            <a href="">
                <li>
                     <img src="../../../img/buy-dc-power-visa.svg" alt="">
                     <span>DC POWER VISA</span>
                </li>
            </a>
        </ul>

    </div>
</main>

@endsection