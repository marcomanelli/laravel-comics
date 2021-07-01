@extends('layouts/Main')
@section('content')
<main>
  <div class="main">
    <div class="wrapper-70">
      <div class="current_series">Current series</div>
      @foreach ($comics as $comic)
        <div class="card_container">
          <div class="card">
            <img src="{{$comic['thumb']}}" alt="img">
            <span>{{$comic['series']}}</span>
          </div>
        </div>
      @endforeach
    </div>
    <div class="load-more-row">
      <a href="\"><div class="load-more">Load more</div></a>
    </div>
  </div>
  <div class="advertisement">
    <div class="wrapper-70">

      <a href="#">
        <div class="product">
          <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="Digital comics">
          <p>DC Comics</p>
        </div>
      </a>
      <a href="">
        <div class="product">
          <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="merchandise">
          <p>DC Merchandise</p>
        </div>
      </a>
      <a href="">
         <div class="product">
          <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="subscriptions">
          <p>subscriptions</p>
        </div>
      </a>
      <a href="">
        <div class="product">
          <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="shop-locator">
          <p>Comic shop locator</p>
        </div>
      </a>
      <a href="">
        <div class="product">
          <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="power-visa">
          <p>Dc power Visa</p>
        </div>
      </a>
    </div>
  </div>
</main>
@endsection