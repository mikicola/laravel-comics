<footer>
    <div class="main-footer">
        <img src="./images/footer-bg.jpg" alt="DC sfondo footer">
        <div class="container flex">
            <div class="left flex">
                <div class="dc-shop column">
                    <ul>
                        <h3>dc comics</h3>
                        @foreach (config('myconfig.footer.dccomics') as $item)
                            <li><a href="{{ $item['link'] }}">{{ $item['text'] }}</a></li>
                        @endforeach
                    </ul>

                    <ul>
                        <h3>shop</h3>
                        @foreach (config('myconfig.footer.shop') as $item)
                            <li><a href="{{ $item['link'] }}">{{ $item['text'] }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <ul class="column">
                    <h3>dc</h3>
                    @foreach (config('myconfig.footer.dc') as $item)
                        <li><a href="{{ $item['link'] }}">{{ $item['text'] }}</a></li>
                    @endforeach
                </ul>

                <ul class="column">
                    <h3>sites</h3>
                    @foreach (config('myconfig.footer.sites') as $item)
                        <li><a href="{{ $item['link'] }}">{{ $item['text'] }}</a></li>
                    @endforeach
                </ul>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus iure, quam tempora perferendis soluta laboriosam asperiores consectetur libero animi provident impedit nisi saepe odio inventore ducimus ut reprehenderit culpa ipsa?</p>
            </div>

            <div class="right">
                <img src="./images/dc-logo-bg.png" alt="">
            </div>
        </div>
    </div>

    <div class="lower-footer">
        <div class="container flex">
            <span class="span-sign-up"><a href="#">sign-up now!</a></span>

            <div class="follow flex">
                <span class="span-follow">Follow us</span>
                <ul>
                @foreach (config('myconfig.footer.follow') as $item)
                    <li>
                        <a href="#">
                            <img src="./images/{{ $item['img'] }}" alt="icona social">
                        </a>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>
