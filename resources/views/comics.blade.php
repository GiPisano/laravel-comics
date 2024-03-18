@extends('layout.app')

@section('main-content')
<div class="container">
    <h3 class="btn-series">
    CURRENT SERIES
    </h3>


    <div class="row g-5 row-comics">

        @foreach($comics as $index => $comic)

        <div class="col-2 container-comic">
            <a href="{{ route('comic-detail', ['index' => $index])}}">
                <img src="{{ $comic['thumb']}}" alt="{{ $comic['title']}}">
            </a>
            <p class="comics-series">{{ $comic['series']}}</p>
        </div>

        @endforeach
    </div>
</div>
<h6 class="btn-series btn-more">
    LOAD MORE
</h6>

<div class="section-comics-footer">
    <div class="container">
        <div class="row">
            <div class="col">
                        <img src="{{ url('/images/buy-comics-digital-comics.png')}}" alt="">
                        <span>DIGITAL COMICS</span>
            </div>
            <div class="col">
                        <img src="{{ url('/images/buy-comics-merchandise.png')}}" alt="">
                        <span>DC MERCHANDISE</span>
            </div>
            <div class="col">
                        <img src="{{ url('/images/buy-comics-shop-locator.png')}}" alt="">
                        <span>SUBSCRIPTION</span>
            </div>
            <div class="col">
                        <img src="{{ url('/images/buy-comics-subscriptions.png')}}" alt="">
                        <span>COMIC SHOP LOCATOR</span>
            </div>
            <div class="col">
                        <img src="{{ url('/images/buy-dc-power-visa.svg')}}" alt="">
                        <span>DC POWER VISA</span>
            </div>
        </div>
    </div>
</div>
@endsection