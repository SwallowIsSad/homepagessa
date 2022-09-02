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
<div class="inquire-layout" id="content3">
    <div style="width:1px; height:100px"></div>
    <div class="section-title">
        지원서제출
    </div>
    <div class="inquire-form">
        <form action="#">
            <div class="inquire-input">
                <div class="inquire full">
                    <p class="title need">지원분야<span>*</span></p>
                    <div class="input-layout">
                        <select name="" id="">
                            <option value="">
                                영업/관리 신입사원모집 (상시)
                            </option>
                        </select>
                    </div>
                </div>
                <div class="inquire left">
                    <p class="title need">이름<span>*</span></p>
                    <div class="input-layout">
                        <input type="text" placeholder="이름을 입력해주세요.">
                    </div>
                </div>
                <div class="inquire right">
                    <p class="title need">이메일<span>*</span></p>
                    <div class="input-layout">
                        <input type="text" placeholder="메일 주소를 입력해주세요">
                    </div>
                </div>
                <div class="inquire left">
                    <p class="title need">연락처<span>*</span></p>
                    <div class="input-layout">
                        <input type="text" placeholder="( - ) 없이 숫자만 입력해주세요.">
                    </div>
                </div>
                <div class="inquire right">
                    <p class="title need">사진첨부<span>*</span></p>
                    <div class="input-layout">
                        <input type="text" placeholder="5MB이하 파일만 첨부 가능합니다.">
                    </div>
                </div>
                <div class="inquire left">
                    <p class="title need">비상연락처<span>*</span></p>
                    <div class="input-layout">
                        <input type="text" placeholder="( - ) 없이 숫자만 입력해주세요.">
                    </div>
                </div>
                <div class="inquire right">
                    <p class="title need">이력서 첨부<span>*</span></p>
                    <div class="input-layout">
                        <input type="text" placeholder="5MB이하 파일만 첨부 가능합니다.">
                    </div>
                </div>
                <div class="inquire full">
                    <p class="title need">자기소개서<span>*</span></p>
                    <textarea name="" id=""></textarea>
                </div>
            </div>
            <div class="personal-info m50b">
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
                        <div class="on" style="display:none">
                            <img src="{{ URL::asset('img/cs/check-on.png') }}" alt="">
                        </div>
                        <div class="off">
                            <img src="{{ URL::asset('img/cs/check-off.png') }}" alt="">
                        </div>
                    </span>
                    <span class="text">개인정보 수집·활용에 동의합니다.</span>
                </div>
            </div>
            <div class="personal-info">
                <p class="info">민감정보 수집 및 이용 동의</p>
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
                        <div class="on" style="display:none">
                            <img src="{{ URL::asset('img/cs/check-on.png') }}" alt="">
                        </div>
                        <div class="off">
                            <img src="{{ URL::asset('img/cs/check-off.png') }}" alt="">
                        </div>
                    </span>
                    <span class="text">민감정보 수집 및 이용에 동의합니다.</span>
                </div>
            </div>
            <div class="btn-area area-center">
                <a href="javascript:;" class="btn btn-blue">지원하기</a>
            </div>
        </form>
    </div>
</div>
<?php if(!isset($header)):?>
    @include('layout.footer')
<?php endif;?>