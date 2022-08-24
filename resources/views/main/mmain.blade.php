@include('layout.header')
<script src="{{ URL::asset('js/slippry.min.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('css/slippry.css') }}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<style>
    .swiper-container {
        width: 100%;
        overflow: hidden;
        /* height: calc(100vh - 222px); */
        height: 80vh;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        overflow-y: scroll;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: start;
        -webkit-align-items: start;
        align-items: start;
    }

    .swiper-container-vertical > .swiper-pagination-bullets {
        top: unset !important;
        bottom: 10px;
        left: 0;
        width: 100%;
    }
    .swiper-container-vertical > .swiper-pagination-bullets .swiper-pagination-bullet {
        display: inline-block !important;
        margin: 6px 2px !important;
    }
</style>
<div class="swiper-container">
    <!-- 보여지는 영역 -->
    <div class="swiper-wrapper">
        <div class="swiper-slide">
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
        </div>
        <div class="swiper-slide">
            <div>
                @include('company.ceo')
            </div>
        </div>
        <div class="swiper-slide">
            <div>
                @include('business.index')
            </div>
        </div>
        <div class="swiper-slide">
            <div style="width:100%">
                @include('notice.list')
            </div>
        </div>
        <div class="swiper-slide">
            <div>
                @include('employment.info')
            </div>
        </div>
        <div class="swiper-slide">
            <div>
                @include('cs.inquire')
            </div>
        </div>
    </div>
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
                    $(".visual-area").css({"height" : $(window).height()  - $(".footer").height() + "px", "top":"75px"});
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

        const swiper = new Swiper('.swiper-container', {
            direction: 'horizontal',
            //한번에 보여지는 페이지 숫자
            slidesPerView: 1,
            //페이지와 페이지 사이의 간격
            spaceBetween: 0,
            //드레그 기능 true 사용가능 false 사용불가
            debugger: true,
            //마우스 휠기능 true 사용가능 false 사용불가
            mousewheel: false,
            //반복 기능 true 사용가능 false 사용불가
            loop: false,
            //선택된 슬라이드를 중심으로 true 사용가능 false 사용불가 djqt
            centeredSlides: true,
            // 페이지 전환효과 slidesPerView효과와 같이 사용 불가
            // effect: 'fade',
        }) 
    })
</script
>@include('layout.footer')