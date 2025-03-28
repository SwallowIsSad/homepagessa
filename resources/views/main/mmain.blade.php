@include('layout.header')
<script src="{{ URL::asset('js/slippry.min.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('css/slippry.css') }}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<style>
    .swiper-banner{
        position: fixed;
        left:50%;
        bottom:10vh;
        transform: translateX(-50%);
        transition: all .5s;
        z-index: 30;
    }
    .swiper-wrapper{
        transition: all .5s;
    }
    .swiper-container {
        width: 100%;
        overflow: hidden;
        /* height: calc(100vh - 135px); */
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
<div class="swiper-banner">
    <img src="{{ URL::asset('img/img_drag_ex.png') }}" alt="" >
</div>
<div class="m-banner-layout">
    <div class="m-banner">
        <div>
            <img src="{{ URL::asset('img/popup/popup1.jpg') }}" alt="">
        </div>
        <div class="popup-btn">
            <a href="javascript:;" class="btn-main-pp event-close" data-time="1">하루간 보지 않기</a>
            <a href="javascript:;" class="btn-main-pp active event-close-s">닫기</a>
        </div>
    </div>
</div>
<div class="m-banner-back"></div>

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
                            신승아이엔씨
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
                @include('employment.recruit')
            </div>
        </div>
        <div class="swiper-slide">
            <div style="width:100%">
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
                    // $(".visual-area").css({"height" : $(window).height()  - $(".footer").height() + "px", "top":"87px"});
                    // $(".visual-back").css("height", $(window).height()  - $(".footer").height() + "px");
                    $(".visual-area").css({"height" : $(".slide-mobile").height() + "px", "top":"85px"});
                    $(".visual-back").css("height", $(".slide-mobile").height() + "px");
                    
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
        
        var inter = 0;
        setInterval(function () {
            if(inter < 3)
            {
                if($(".swiper-banner").css("opacity") == 1)
                {
                    $(".swiper-banner").css("opacity", "0");
                }
                else
                {
                    $(".swiper-banner").css("opacity", "1");
                }
            }
            else
            {
                    $(".swiper-banner").hide();
            }
        inter+=1;
        }, 1000);

        var getCookie = function (cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i=0; i<ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1);
                if (c.indexOf(name) != -1) return c.substring(name.length,c.length);
            }
            return "";
        }

        var setCookie = function (cname, cvalue, exdays) {
            var todayDate = new Date();
            todayDate.setTime(todayDate.getTime() + (exdays*24*60*60*1000));    
            var expires = "expires=" + todayDate.toUTCString(); // UTC기준의 시간에 exdays인자로 받은 값에 의해서 cookie가 설정 됩니다.
            document.cookie = cname + "=" + cvalue + "; " + expires;
        }
        
        $(document).on("click", ".event-close", function (e) {
            e.preventDefault();
            setCookie("close","Y",1); 
            $(".m-banner").hide()
            $(".m-banner-back").hide()
        })
        
        $(document).on("click", ".event-close-s", function (e) {
            e.preventDefault();
            $(".m-banner").hide()
            $(".m-banner-back").hide()
        })

        var cookiedata = document.cookie;
        if(cookiedata.indexOf("close=Y")<0) {
            $(".m-banner").show()
            $(".m-banner-back").show()
        } else {
            $(".m-banner").hide()
            $(".m-banner-back").hide()
        }
    })
</script>
@include('layout.footer')