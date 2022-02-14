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
    <div class="jumbonav">
        <ul>
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