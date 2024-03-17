<footer>
    <div class="container">
    <div class="row">
        <div class="col">
            <h4 class="text-center">DC COMICS</h4>
            <ul>
                @foreach($links['dc_comics'] as $link)
                <li>{{ $link }}</li>
                @endforeach
            </ul>
            <h4 class="text-center">SHOP</h4>
            <ul>
                @foreach($links['shop'] as $link)
                <li>{{ $link }}</li>
                @endforeach
            </ul>
        </div>

        <div class="col">
        <h4 class="text-center">DC</h4>
            <ul>
                @foreach($links['dc'] as $link)
                <li><a href="#">{{ $link }}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="col">
        <h4 class="text-center">SITES</h4>
            <ul>
                @foreach($links['sites'] as $link)
                <li>{{ $link }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    </div>
</footer>