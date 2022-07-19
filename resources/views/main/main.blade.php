@include('layout.header')
<script src="{{ URL::asset('js/slippry.min.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('css/slippry.css') }}">
<div class="visual-area2">
    <nav class="front-area">

    </nav>
    <div class="back-area">
        <nav>
            <ul>
                <li style="height: 30px;">
                    <img src="{{ URL::asset('img/main/slide2-1.jpg') }}" alt="">
                </li>
                <li style="height: 30px;">
                    <img src="{{ URL::asset('img/main/slide2-2.jpg') }}" alt="">
                </li>
                <li style="height: 30px;">
                    <img src="{{ URL::asset('img/main/slide2-3.jpg') }}" alt="">
                </li>
                <li style="height: 30px;">
                    <img src="{{ URL::asset('img/main/slide2-4.jpg') }}" alt="">
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- <div class="visual-area">
    <div class="visual-back">
        <ul id="slide">
            <li><img src="{{ URL::asset('img/main/slide1.jpg') }}" alt="" /></li>
            <li><img src="{{ URL::asset('img/main/slide5.jpg') }}" alt="" /></li>
            <li><img src="{{ URL::asset('img/main/slide2.jpg') }}" alt="" /></li>
            <li><img src="{{ URL::asset('img/main/slide3.jpg') }}" alt="" /></li>
            <li><img src="{{ URL::asset('img/main/slide4.jpg') }}" alt="" /></li>
        </ul>
    </div>
    <div class="visual-front">
        <div class="slide-btn">
            <a href="javascript:;" class="left">
                <img src="{{ URL::asset('img/main/left-arrow.png') }}" alt="">
            </a>
            <a href="javascript:;" class="right">
                <img src="{{ URL::asset('img/main/right-arrow.png') }}" alt="">
            </a>
        </div>
        <div class="slide-index">
            <ul>
                <li class="stop"><a href="javascript:;"><img src="{{ URL::asset('img/main/pasue.png') }}" alt=""></a></li>
            </ul>
        </div>
        <div class="slide-font">
            <p class="title">
                대한민국 종이유통 NO.1
                <br>
                신승지류유통
            </p>
            <p class="desc">
                21세기 새로운 기업으로 도약합니다.
            </p>
        </div>
    </div>
    <div class="slide-background"></div>
</div> -->
<script>
    $(function () {
        $(document).on("click", ".back-area li", function (e) {
            e.preventDefault();
            var self = $(this);
            var imgHeight = $(".back-area li").find("img").height();
            if(self.hasClass("active"))
            {
                console.log(2);
            }
            else
            {
                $(".back-area li").animate({
                    height: '30px',
                }, 500, 'swing');

                setTimeout(function() {
                    self.animate({
                        height: imgHeight,
                    }, 500);
                }, 800);
                
            }
        });
        
        var slide = $("#slide").slippry({
            // transition: 'fade',
            // useCSS: true,
            // speed: 1000,
            // pause: 3000,
            // auto: true,
            // preload: 'visible',
            // autoHover: false
        });

        $('.left').click(function () {
            slide.goToPrevSlide();
            return false;
        });
        $('.right').click(function () {
            slide.goToNextSlide();
            return false;
        });
        $('.stop').click(function () {
            slide.stopAuto();
        });
    })
</script>
@include('layout.footer')