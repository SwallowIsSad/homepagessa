<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <style>
            html,
            body {
                width: 100%;
                height: 100%;
            }

            .box {
                width: 100%;
                height: 100%;
            }

            .page {
                position: relative;
                min-height: 100%;
                overflow: hidden;
                font-size: 0;
            }

            .area {
                display: flex;
                transition: all 0.5s;
            }

            .box {
                flex-shrink: 0;
                text-align: center;
                font-size: 100px;
            }

            .box1 {
                background: #a289ff;
            }
            .box2 {
                background: #89d7ff;
            }
            .box3 {
                background: #ff9494;
            }
            .box4 {
                background: #d3ff94;
            }
            .box5 {
                background: #9dffd7;
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    </head>
    <body>
        <div class="page">
            <div class="area">
                <div class="box box1">1<br />11<br />11<br />11<br />11<br />1</div>
                <div class="box box2">2<br />2<br />2<br />2<br />2<br />2<br />2<br />2<br /></div>
                <div class="box box3">3<br />3<br />3<br />3<br />3<br />3<br />3<br /></div>
                <div class="box box4">
                    4<br />4<br />4<br />4<br />4<br />4<br />4<br />4<br />4<br />
                </div>
                <div class="box box5">5<br />5<br />5<br />5<br />5<br />5<br />5<br />5<br /></div>
            </div>
        </div>
        <script>
            $(function () {
                let curPos = 0
                let postion = 0
                let start_x, end_x

                const IMAGE_WIDTH = $('.box').width()
                const images = document.querySelector('.area')

                images.addEventListener('touchstart', touch_start)
                images.addEventListener('touchend', touch_end)

                function prev() {
                    if (curPos > 0) {
                        postion += IMAGE_WIDTH
                        images.style.transform = `translateX(${postion}px)`
                        curPos = curPos - 1
                    }
                }
                function next() {
                    if (curPos < 3) {
                        postion -= IMAGE_WIDTH
                        images.style.transform = `translateX(${postion}px)`
                        curPos = curPos + 1
                    }
                }

                function touch_start(event) {
                    start_x = event.touches[0].pageX
                }

                function touch_end(event) {
                    end_x = event.changedTouches[0].pageX
                    if (start_x > end_x) {
                        next()
                    } else {
                        prev()
                    }
                }
            })
        </script>
    </body>
</html>
