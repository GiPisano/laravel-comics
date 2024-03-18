<footer>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="d-flex">
                    <div class="col-4">
                        <h4>DC COMICS</h4>
                        <ul>
                            @foreach($links['dc_comics'] as $link)
                            <li><a href="#">{{ $link }}</a></li>
                            @endforeach
                        </ul>
                        <h4>SHOP</h4>
                        <ul>
                            @foreach($links['shop'] as $link)
                            <li><a href="#">{{ $link }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-4">
                        <h4>DC</h4>
                        <ul>
                            @foreach($links['dc'] as $link)
                            <li><a href="#">{{ $link }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-4">
                        <h4>SITES</h4>
                        <ul>
                            @foreach($links['sites'] as $link)
                            <li><a href="#">{{ $link }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <p>All Site Content TM and © 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved. <a href="#">Cookies Settings</a></p>

            </div>
    
            <div class="col-6">
                <img src="{{ url('/images/dc-logo-bg.png')}}" alt="">
            </div>

        </div>
    </div>
</footer>