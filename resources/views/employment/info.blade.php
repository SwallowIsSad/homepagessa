<?php if(!preg_match('/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipad|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|sagem|sharp|sie-|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', $_SERVER['HTTP_USER_AGENT'])):?>
    @include('layout.header')
<?php endif;?>
@include('layout.lnb')
<style>
    .employment-info .label ul .active{
        color:#0152a4;
        font-weight: bold;
    }
</style>
<div class="cs-layout">
    <div class="section-title">
        채용정보
    </div>
    <div class="employment-info">
        <nav class="label m20b">
            <ul>
                <li class="active">전체</li>
                <li>인턴</li>
                <li>신입</li>
                <li>경력</li>
            </ul>
        </nav>
        <nav class="info-box">
            <ul>
                <li>
                    <div>
                        <p class="title">
                            [신입] 회계·재무·세무·IR 신입 사원 모집                        
                        </p>
                        <p class="date">2022-07-01~2022-07-31</p>
                        <p class="button">
                            D-20
                        </p>
                    </div>
                </li>
                <li>
                    <div>
                        <p class="title">
                            [신입] 회계·재무·세무·IR 신입 사원 모집                        
                        </p>
                        <p class="date">2022-07-01~2022-07-31</p>
                        <p class="button">
                            D-20
                        </p>
                    </div>
                </li>
                <li>
                    <div>
                        <p class="title">
                            [신입] 회계·재무·세무·IR 신입 사원 모집                        
                        </p>
                        <p class="date">2022-07-01~2022-07-31</p>
                        <p class="button">
                            D-20
                        </p>
                    </div>
                </li>
                <li>
                    <div>
                        <p class="title">
                            [신입] 회계·재무·세무·IR 신입 사원 모집                        
                        </p>
                        <p class="date">2022-07-01~2022-07-31</p>
                        <p class="button">
                            D-20
                        </p>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
<?php if(!preg_match('/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipad|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|sagem|sharp|sie-|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', $_SERVER['HTTP_USER_AGENT'])):?>
    @include('layout.footer')
<?php endif;?>