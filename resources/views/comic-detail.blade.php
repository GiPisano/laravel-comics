@extends('layout.app')

@section('main-content')

<section class="comic-detail">
    <div class="img-detail">
        <div class="container">
            <img src="{{ $comic['thumb']}}" class="img-thumb" alt="">
        </div>
    </div>
    <div class="container">
       
        <div class="detail">
            <div class="row">
                <div class="col-8">
                    <h4 class="title">{{ $comic['title'] }}</h4>
                    <div class="green">
                        <div class="tabel-green">
                            <p><span class="yellow-green">U.S. Price:</span> {{ $comic['price'] }}</p>
                            <p class="yellow-green">AVAILABLE</p>
                        </div>
                        <div>
                            <p class="dropdown">Check Availability ></p>
                        </div>
                    </div>
                    <p>{{ $comic['description'] }}</p>
                </div>

                <div class="col-4 text-end">
                    <h4 class="title">ADVERTISEMENT</h4>
                    <img src="{{ url('/images/adv.jpg') }}" class="img-advertisement" alt="">
                </div>
            </div>
        </div>
        
        <div class="row table">
            <div class="col-6">
                <h4>Talent</h4>
                <table class="table">
                    <tr>
                    <th scope="row">Art by:</th>
                    <td class="names">Joe Shuster, Jerry Siegel, Curt Swan, John Byrne, Dan Jurgens, Jim Lee, Gary Frank, Wayne Boring, Steve Rude, Arthur Adams, Gil Kane, Alex Ross, Stuart Immonen, Mike Mignola, Dave Gibbons, Ryan Sook..</td>
                    </tr>
                    <tr>
                    <th scope="row">Written by:</th>
                    <td class="names">Jerry Siegel, Otto Binder, Cary Bates, Marv Wolfman, John Byrne, Brian Michael Bendis, Paul Levitz, Jeph Loeb, Mark Waid, Roger Stern, Joe Kelly, Greg Pak, Peter J. Tomasi, Louise Simonson, Scott Snyder, J.M. DeMatteis, Gerry Conway..</td>
                    </tr>
                </table>
            </div>
            <div class="col-6">
                <h4>Specs</h4>
                <table class="table">
                    <tr>
                        <th scope="row">Series:</th>
                        <td>{{ $comic['type']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">U.S. price:</th>
                        <td>{{ $comic['price']}}</td>
                    </tr>
                    <tr>
                        <th scope="row">On Sale Date:</th>
                        <td>{{ $comic['sale_date']}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
</div>

@endsection