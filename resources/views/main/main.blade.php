@include('layout.header')
<script src="{{ URL::asset('js/slippry.min.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('css/slippry.css') }}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<div class="visual-area-pc">
    <div class="visual-back">
        <ul class="slide-pc">
            <li class="pc">
                <video autoplay loop muted preload="none" width="1920px"  height="1080px">
                    <source src="{{ URL::asset('data/video/airplane5.mp4') }}#t=10">
                </video>
            </li>
            <li class="pc">
                <video autoplay loop muted preload="none" width="1920px"  height="1080px">
                    <source src="{{ URL::asset('data/video/book.mp4') }}">
                </video>
            </li>
            <li class="pc">
                <video autoplay loop muted preload="none" width="1920px"  height="1080px">
                    <source src="{{ URL::asset('data/video/car.mp4') }}">
                </video>
            </li>
        </ul>
    </div>
    <div class="visual-front">
        <div class="visual-front-area">
            <div class="slide-font">
                <p class="title">
                    대한민국
                    <br>
                    종이유통 NO.1
                    <br>
                    신승지류유통
                </p>
                <p class="desc">
                    21세기 새로운 기업으로 도약합니다.
                </p>
            </div>
        </div>
    </div>
    <div class="slide-background"></div>
</div>
<script>
    $(function () {        
        var slide = $(".slide-pc").slippry({
            transition: 'fade',
            useCSS: true,
            speed: 1000,
            pause: 15000,
            auto: true,
            preload: 'visible',
            autoHover: false
        });
        

    })
</script>
@include('layout.mainfooter')