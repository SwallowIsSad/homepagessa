@include('layout.header')
<script src="{{ URL::asset('js/slippry.min.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('css/slippry.css') }}">
<div class="visual-area">
    <div class="visual-back">
        <ul class="slide-mobile">
            <li class="mobile"><img src="{{ URL::asset('img/main/mslide1.jpg') }}" alt="" /></li>
            <li class="mobile"><img src="{{ URL::asset('img/main/mslide2.jpg') }}" alt="" /></li>
            <li class="mobile"><img src="{{ URL::asset('img/main/mslide4.jpg') }}" alt="" /></li>
        </ul>
        <ul class="slide-pc">
            <li class="pc"><img src="{{ URL::asset('img/main/slide1.jpg') }}" alt="" /></li>
            <li class="pc"><img src="{{ URL::asset('img/main/slide5.jpg') }}" alt="" /></li>
            <li class="pc"><img src="{{ URL::asset('img/main/slide3.jpg') }}" alt="" /></li>
            <li class="pc"><img src="{{ URL::asset('img/main/slide4.jpg') }}" alt="" /></li>
        </ul>
    </div>
    <div class="visual-front">
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
    <div class="slide-background"></div>
</div>
<script>
    $(function () {
        function chkVisual()
        {
            if($(window).width() > 992)
            {
                $(".visual-back").find('.slide-pc').show();
                $(".visual-back").find('.slide-mobile').hide();
            }
            else {
                $(".visual-back").find('.slide-pc').hide();
                $(".visual-back").find('.slide-mobile').show();
                setTimeout(function () {
                    if($(".slide-mobile").is(':visible')){
                $(".visual-area").css({"height" : $(window).height()  - $(".footer").height() + "px", "top":"50px"});
                    $(".visual-back").css("height", $(window).height()  - $(".footer").height() + "px");
                }
                }, 150)
            }   
            
        }

        chkVisual();

        $(window).resize(function() {
            chkVisual();
        });

        
        var slide = $(".slide-pc").slippry({
            transition: 'fade',
            useCSS: true,
            speed: 1000,
            pause: 3000,
            auto: true,
            preload: 'visible',
            autoHover: false
        });
        
        var slide2 = $(".slide-mobile").slippry({
            transition: 'fade',
            useCSS: true,
            speed: 1000,
            pause: 3000,
            auto: true,
            preload: 'visible',
            autoHover: false
        });
    })
</script>
@include('layout.mainfooter')