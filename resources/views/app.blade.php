@extends('layouts.template')

@section('jumbotron')

    <div class="jumbotron">

    </div>
    
@endsection

@section('comics')

  <div class="container-fluid">
    <div class="striscetta">
      CURRENT SERIES
    </div>

    
    <div class="container comics">
        @foreach ($array as $key => $value)
            <img src="{{$value['thumb']}}">
        @endforeach
    </div>
    
    <a href="#">LOAD MORE</a>

  </div>
    
@endsection

@section('merchandise')
    <div class="container-fluid merchandise">
      <div class="container merchandise">
        <div class="elemento_primo_container">
          <img src="{{asset('/images/buy-comics-digital-comics.png')}}" alt="">
          <p>DIGITAL COMICS</p>
        </div>

        <div class="elemento_primo_container">
          <img src="{{asset('/images/buy-comics-merchandise.png')}}" alt="">
          <p>DC MERCHANDISE</p>
        </div>

        <div class="elemento_primo_container">
          <img src="{{asset('/images/buy-comics-subscriptions.png')}}" alt="">
          <p>SUBSCRIPTIONS</p>
        </div>

        <div class="elemento_primo_container">
          <img src="{{asset('/images/buy-comics-shop-locator.png')}}" alt="">
          <p>COMIC SHOP LOCATOR</p>
        </div>

        <div class="elemento_primo_container">
          <img src="{{asset('/images/buy-comics-shop-locator.png')}}" alt="">
          <p>DC POWER VISA</p>
        </div>

      </div>
    </div>
@endsection