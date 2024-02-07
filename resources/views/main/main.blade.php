@include('layout.header')
<script src="{{ URL::asset('js/slippry.min.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('css/slippry.css') }}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
{{--<div class="banner-slide">--}}
{{--    <ul>--}}
{{--        <li>--}}
{{--            <img src="{{ URL::asset('img/popup/popup1.jpg') }}" alt="">--}}
{{--        </li>--}}
{{--        <!-- <li>--}}
{{--            <img src="{{ URL::asset('img/popup/popup2.jpg') }}" alt="">--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <img src="{{ URL::asset('img/popup/popup3.jpg') }}" alt="">--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <img src="{{ URL::asset('img/popup/popup4.jpg') }}" alt="">--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <img src="{{ URL::asset('img/popup/popup5.jpg') }}" alt="">--}}
{{--        </li> -->--}}
{{--    </ul>--}}
{{--    <div class="popup-btn">--}}
{{--        <a href="javascript:;" class="btn-main-pp event-close" data-time="1">하루간 보지 않기</a>--}}
{{--        <a href="javascript:;" class="btn-main-pp active event-close-s">닫기</a>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="visual-area-pc">
    <div class="visual-back">
        <ul class="slide-pc">
            <li class="pc">
                <video autoplay loop muted preload="none" width="100%">
                    <source src="{{ URL::asset('data/video/airplane5.mp4') }}#t=5">
                </video>
            </li>
            <li class="pc">
                <video autoplay loop muted preload="none" width="100%">
                    <source src="{{ URL::asset('data/video/book.mp4') }}#t=9">
                </video>
            </li>
            <li class="pc">
                <video autoplay loop muted preload="none" width="100%">
                    <source src="{{ URL::asset('data/video/sae.mp4') }}">
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
            pause: 10000,
            auto: true,
            preload: 'visible',
            autoHover: false
        });

        //최초 레이어팝업 노출 (testCookie라는 이름의 쿠키가 존재하지 않으면 레이어 노출)
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
            $(".banner-slide").hide()
        })

        $(document).on("click", ".event-close-s", function (e) {
            e.preventDefault();
            $(".banner-slide").hide()
        })

        var cookiedata = document.cookie;
        if(cookiedata.indexOf("close=Y")<0) {
            $(".banner-slide").show()
        } else {
            $(".banner-slide").hide()
        }

    })
</script>
@include('layout.mainfooter')
