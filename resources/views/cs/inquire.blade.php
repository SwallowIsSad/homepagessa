<?php if(!isset($header)):?>
    @include('layout.header')
<?php endif;?>
<?php if(!preg_match('/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipad|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|sagem|sharp|sie-|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', $_SERVER['HTTP_USER_AGENT'])):?>
    @include('layout.cslnb')
<?php endif;?>
<div class="sub-page-layout">
    <div>
        <div class="inquire-layout" id="cs-content1">
            <div class="pc-box"></div>
            <div style="width:1px; height:100px"></div>
            <div class="section-title">
                <span class="icon">···</span>
                문의하기
                <span class="icon">···</span>
            </div>
            <div class="inquire-form">
                <form action="#">
                    <div class="inquire-input">
                        <div class="inquire left">
                            <p class="title need">이름<span>*</span></p>
                            <div class="input-layout">
                                <input type="text" placeholder="이름을 입력해주세요.">
                            </div>
                        </div>
                        <div class="inquire left">
                            <p class="title need">연락처<span>*</span></p>
                            <div class="input-layout">
                                <input type="text" placeholder="( - ) 없이 숫자만 입력해주세요.">
                            </div>
                        </div>
                        <div class="inquire right">
                            <p class="title">이메일</p>
                            <div class="input-layout">
                                <input type="text" placeholder="메일 주소를 입력해주세요">
                            </div>
                        </div>
                        <div class="inquire right">
                            <p class="title">파일첨부</p>
                            <div class="input-layout">
                                <input type="text" placeholder="5MB이하 파일만 첨부 가능합니다.">
                            </div>
                        </div>
                        <div class="inquire left">
                            <p class="title">제목</p>
                            <div class="input-layout">
                                <input type="text" placeholder="제목을 입력해주세요.">
                            </div>
                        </div>
                        <div class="inquire full">
                            <p class="title">본문내용</p>
                            <textarea name="" id=""></textarea>
                        </div>
                    </div>
                    <div class="personal-info">
                        <p class="info">개인정보 수집·활용 동의서</p>
                        <div class="pi-content">
                            <div class="pi-title">
                                약관 펼쳐보기
                                <img src="{{ URL::asset('img/cs/personal-arrow.png') }}" alt="">
                            </div>
                            <div class="pi-text" style="display:none">
                                개인정보 보호를 위한 이용자 동의사항.
                                <br>
                                <br>
                                신승지류유통은 개인정보보호법 등 관련 법률에 따라 개인정보 수집 시 정보 주체에게 사전 고지하고 이에 대한 동의를 받습니다.
                                <br>
                                - 개인정보의 수집 및 이용 목적 : 신승지류유통 고객센터 문의하기 서비스 이용
                                <br>
                                - 수집하는 개인정보 항목 : 업종, 업체명, 이름, 주소, 연락처, 이메일주소
                                <br>
                                - 개인정보 보유 및 이용 기간 : 동의일로부터 5년
                                <br>
                                <br>
                                귀하는 동의를 거부할 권리가 있으나, 상기 사항에 동의하지 않으실 경우 문의하기 이용에 제한을 받으실 수 있습니다.
                            </div>
                        </div>
                        <div class="check-text">
                            <span class="check">
                                <div class="on">
                                    <img src="{{ URL::asset('img/cs/check-on.png') }}" alt="">
                                </div>
                                <div class="off" style="display:none">
                                    <img src="{{ URL::asset('img/cs/check-off.png') }}" alt="">
                                </div>
                            </span>
                            <span class="text">개인정보 수집·활용에 동의합니다.</span>
                        </div>
                    </div>
                    <div class="btn-area area-center">
                        <a href="javascript:;" class="btn btn-blue">문의하기</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('cs.suggest')
    <div id="cs-content3"></div>
    <div class="pc-box"></div>
    <div class="inquire-layout">
        <div style="width:1px; height:100px"></div>
        <div class="section-title">
            <span class="icon">···</span>
            오시는길
            <span class="icon">···</span>
        </div>
        <?php if(!preg_match('/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipad|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|sagem|sharp|sie-|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', $_SERVER['HTTP_USER_AGENT'])):?>
        <div class="inquire-form">
            <img src="{{ URL::asset('img/cs/map1.png') }}" alt="" style="width:100%">
            <p class="zooso m10b">서울 영업센터 : 서울특별시 중구 마른내로116 신승빌딩 / 02 - 2270 - 4900</p>
            <img src="{{ URL::asset('img/cs/map2.png') }}" alt="" style="width:100%; margin-top:30px;">
            <p class="zooso m10b">파주 영업센터 : 경기도 파주시 산업단지길179 2층 / 02 - 2270 - 4900</p>
        </div>
        <?php else:?>
        <div class="inquire-form">
            <img src="{{ URL::asset('img/cs/map1.png') }}" alt="" style="width:100%">
            <p class="zooso">서울 영업센터</p>
            <div class="hr"></div>
            <p class="desc m5b">서울특별시 중구 마른내로116 신승빌딩</p>
            <p class="desc m20b">02 - 2270 - 4900</p>
            <img src="{{ URL::asset('img/cs/map2.png') }}" alt="" style="width:100%">
            <p class="zooso">파주 영업센터</p>
            <div class="hr"></div>
            <p class="desc m5b">경기도 파주시 산업단지길179 2층</p>
            <p class="desc">02 - 2270 - 4900</p>
        </div>
        <?php endif;?>
    </div>
    <div style="width:1px; height:50px;"></div>
</div>
<?php if(!isset($header)):?>
    @include('layout.footer')
<?php endif;?>