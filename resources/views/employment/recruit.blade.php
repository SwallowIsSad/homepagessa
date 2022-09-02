<?php if(!isset($header)):?>
    @include('layout.header')
<?php endif;?>
<?php if(!preg_match('/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipad|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|sagem|sharp|sie-|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', $_SERVER['HTTP_USER_AGENT'])):?>
    @include('layout.lnb')
<?php endif;?>
<div class="cs-layout" id="content1">
    <div style="width:1px; height:100px"></div>
    <div class="section-title">
        인재상
    </div>
    <img src="{{ URL::asset('img/banner/infotest3.jpeg') }}" alt="" style="max-width:100%">
</div>
<div class="cs-layout" id="content2">
    <div style="width:1px; height:100px"></div>
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

<?php if(!isset($header)):?>
    @include('layout.footer')
<?php endif;?>