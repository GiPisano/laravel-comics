@extends('layout.app')

@section('main-content')

<section class="comic-detail">
    <div class="container">
        <div class="detail">
            <img src="{{ $comic['thumb']}}" class="img-thumb" alt="">
            
            <div class="row">
                <div class="col-8">
                    <h4>{{ $comic['title'] }}</h4>
                    <div class="d-flex">
                        <p>U.S. Price: {{ $comic['price'] }}</p>
                        <p>AVAILABLE</p>
                        <p>Check Availability ></p>
                    </div>
                    <p>{{ $comic['description'] }}</p>
                </div>

                <div class="col-4">
                    <h5>ADVERTISEMENT</h5>
                    <img src="{{ url('/images/adv.jpg') }}" class="img-advertisement" alt="">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-6">
                <h4>Talent</h4>
                <table class="table">
                    <tr>
                    <th scope="row">Art by:</th>
                    <td>Joe Shuster, Jerry Siegel, Curt Swan, John Byrne, Dan Jurgens, Jim Lee, Gary Frank, Wayne Boring, Neal Adams, George Pérez, José Luis García-López, Al Plastino, Steve Rude, Arthur Adams, Gil Kane, Alex Ross, Stuart Immonen, Mike Mignola, Dave Gibbons, Ryan Sook..</td>
                    </tr>
                    <tr>
                    <th scope="row">Written by:</th>
                    <td>Jerry Siegel, Otto Binder, Cary Bates, Marv Wolfman, John Byrne, Dan Jurgens, Geoff Johns, Grant Morrison, Brian Michael Bendis, Paul Levitz, Jeph Loeb, Mark Waid, Roger Stern, Joe Kelly, Greg Pak, Peter J. Tomasi, Louise Simonson, Scott Snyder, J.M. DeMatteis, Gerry Conway..</td>
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