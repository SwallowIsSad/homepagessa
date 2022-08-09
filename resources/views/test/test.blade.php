<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <style>
            html,
            body {
                position: relative;
                height: 100vh;
            }
            body {
                background: #eee;
                font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
                font-size: 14px;
                color: #000;
                margin: 0;
                padding: 0;
            }
            .swiper-container {
                width: 100%;
                height: 100vh;
                overflow: hidden;
            }
            .swiper-slide {
                text-align: center;
                font-size: 18px;
                background: #fff;

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
                -ms-flex-align: center;
                -webkit-align-items: center;
                align-items: center;
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
    </head>
    <body>
        <!-- swiper슬라이더 메인컨테이너 -->
        <div class="swiper-container">
            <!-- 보여지는 영역 -->
            <div class="swiper-wrapper">
                <!-- <div class="swiper-slide">내용</div> 를 추가하면된다 -->
                <div class="swiper-slide" style="background: #a289ff">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide" style="background: #89d7ff">Slide 3</div>
                <div class="swiper-slide" style="background: #ff9494">Slide 4</div>
                <div class="swiper-slide" style="background: #d3ff94">Slide 5</div>
                <div class="swiper-slide" style="background: #9dffd7">Slide 6</div>
            </div>
            <!-- 페이징 버튼 처리 상황에 따라 추가 삭제가능-->
            <div class="swiper-pagination"></div>
        </div>
        <script>
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
                loop: true,
                //선택된 슬라이드를 중심으로 true 사용가능 false 사용불가 djqt
                centeredSlides: true,
                // 페이지 전환효과 slidesPerView효과와 같이 사용 불가
                // effect: 'fade',
            })
        </script>
    </body>
</html>
