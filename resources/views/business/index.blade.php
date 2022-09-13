<?php if(!isset($header)):?>
    @include('layout.header')
<?php endif;?>
<?php if(!preg_match('/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipad|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|sagem|sharp|sie-|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', $_SERVER['HTTP_USER_AGENT'])):?>
    @include('layout.introlnb')
<?php endif;?>
<div class="sub-page-layout">
    <div>
        <div class="bs-layout" id="bus-content1">
            <div style="width:1px; height:100px"></div>
            <div class="section-title">
                <span class="icon">···</span>
                사업개요
                <span class="icon">···</span>
            </div>
            <div class="bs-content">
                <div class="bs-content-box m20t">
                    <div class="image-layout">
                        <img src="{{ URL::asset('img/bu/place2.jpg') }}" alt="" class="">
                        <p class="title blue">Premium</p>
                    </div>
                    <div class="text-layout" style="text-align:left">
                        <p class="title blue">Premium</p>
                        <p class="hr"></p>
                        <p class="desc">
                            신승지류유통은 “고객만족”을 최고의 가치로 생각합니다.
                            고객의 니즈(needs)에 맞는 최적의 솔루션을 제공하고자 국내외 모든 지종의
                            지류를 보유하고 있으며 최적화된 물류서비스를 통해 차별화된 포지셔닝을
                            구축하고 있습니다. 신승지류유통은 지류, 그 이상의 가치를 고객에게 드릴 수
                            있도록 노력하고 있습니다.
                        </p>
                    </div>
                </div>
                <div class="bs-content-box">
                    <div class="image-layout">
                        <img src="{{ URL::asset('img/bu/place2-1.jpg') }}" alt="" class="">
                        <p class="title blue">Partnership</p>
                    </div>
                    <div class="text-layout" style="text-align:left">
                        <p class="title blue">Partnership</p>
                        <p class="hr"></p>
                        <p class="desc">
                            신승지류유통은 “정직함”을 최고의 가치로 생각합니다.
                            고객에게는 최고 품질의 지류를 빠르고 안정적으로 제공하며 협력사에는 
                            공정한 거래를 바탕으로 성공파트너의 역할을 다하고 있습니다. 고객의
                            성공이 신승지류유통의 성공이라는 믿을을 가지고 신뢰깊은 파트너십을 
                            유지하고 있습니다.
                        </p>
                    </div>
                </div>
                <div class="bs-content-box">
                    <div class="image-layout">
                        <img src="{{ URL::asset('img/bu/place2-3.jpg') }}" alt="" class="">
                        <p class="title blue">Growth</p>
                    </div>
                    <div class="text-layout" style="text-align:left">
                        <p class="title blue">Growth</p>
                        <p class="hr"></p>
                        <p class="desc">
                            신승지류유통은 “더 나은 방식을 통한 새로운 가치 창출”을 최고의 가치로
                            생각합니다. 1980년 1월 창업 이래 투명경영과 강한 실천력을 기반으로 가장
                            믿음직한 지류유통회사로 자리잡았습니다.
                            신승지류유통은 고객의 성곡과 자사의 성장, 업계의 번영을 도모하며 초일류
                            기업으로 끊임없이 성장하고 있습니다.
                        </p>
                    </div>
                </div>
            </div>
            <!-- 
            <div class="section-title">RESULT <span>성과</span></div>
            <img src="{{ URL::asset('img/bu/company.png') }}" alt="" class="m80b">
-->
        </div>
    </div>
    <div class="nopadding-layout" id="bus-content2">
        <div class="boxbox"></div>
        <div class="section-title">
            <span class="icon">···</span>
            제품소개
            <span class="icon">···</span>
        </div>
    </div>
    <div class="product-layout-mobile">
        <div class="text">
            저희 신승지류유통은 고객의 요구에
            <br>
            <span>가장 적합한 제품을 공급해 드립니다.</span>
        </div>
        <nav class="list">
            <ul>
                <li>
                    <p class="first">
                        인쇄용지
                    </p>
                    <div class="layout">
                        <div class="second">
                            <p class="title">인쇄용지</p>
                            <p class="desc">
                                미색지/백상지, 아트지/스노우지, MFC
                                <br>
                                러프글로스, 카리스코트, 캠퍼스
                            </p>
                        </div>
                    </div>
                    <img src="{{ URL::asset('img/bu/mobile-business-back1.jpeg') }}" alt="">
                </li>
                <li>
                    <p class="first">
                        산업용지
                    </p>
                    <div class="layout">
                        <div class="second">
                            <p class="title">산업용지</p>
                            <p class="desc">
                                SC, IV, All Pulp, CCP, 합지
                            </p>
                        </div>
                    </div>
                    <img src="{{ URL::asset('img/bu/mobile-business-back2.jpeg') }}" alt="">
                </li>
                <li>
                    <p class="first">
                        특수지
                    </p>
                    <div class="layout">
                        <div class="second">
                            <p class="title">특수지</p>
                            <p class="desc">
                                각종 팬시지 (매직시리즈, 밍크지, 레자크)
                                <br>
                                기능지, 가공지, 간지, 이형지
                            </p>
                        </div>
                    </div>
                    <img src="{{ URL::asset('img/bu/mobile-business-back3.jpeg') }}" alt="">
                </li>
                <li>
                    <p class="first">
                        기타수입지
                    </p>
                    <div class="layout">
                        <div class="second">
                            <p class="title">기타수입지</p>
                            <p class="desc">
                                도화용지, 포장용지, 봉투용지, 수입지
                            </p>
                        </div>
                    </div>
                    <img src="{{ URL::asset('img/bu/mobile-business-back4.jpeg') }}" alt="">
                </li>
            </ul>
        </nav>
    </div>
    <div class="product-layout">
        <div class="text-area">
            <div class="text">
                저희 신승지류유통은
                <br>
                고객의 요구에
                <br>
                <span>가장 적합한 제품을</span>
                <br>
                <span>공급해 드립니다.</span>
            </div>
        </div>
        <div class="image-area">
            <div class="front">
                <nav>
                    <ul>
                        <li>
                            <div class="first">
                                <p>인쇄용지</p>
                            </div>
                            <div class="layout">
                                <div class="second">
                                    <p>인쇄용지</p>
                                    미색지/백상지
                                    <br>
                                    아트지/스노우지
                                    <br>
                                    MFC
                                    <br>
                                    러프글로스
                                    <br>
                                    카리스코트
                                    <br>
                                    캠퍼스
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="first">
                                <p>산업용지</p>
                            </div>
                            <div class="layout">
                                <div class="second">
                                    <p>산업용지</p>
                                    SC
                                    <br>
                                    IV
                                    <br>
                                    All Pulp
                                    <br>
                                    CCP
                                    <br>
                                    합지
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="first">
                                <p>특수지</p>
                            </div>
                            <div class="layout">
                                <div class="second">
                                    <p>특수지</p>
                                    각종 팬시지 
                                    <br>
                                    (매직시리즈, 밍크지, 레자크)
                                    <br>
                                    기능지
                                    <br>
                                    가공지
                                    <br>
                                    간지
                                    <br>
                                    이형지
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="first">
                                <p>기타수입지</p>
                            </div>
                            <div class="layout">
                                <div class="second">
                                    <p>기타수입지</p>
                                    도화용지
                                    <br>
                                    포장용지
                                    <br>
                                    봉투용지
                                    <br>
                                    수입지
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="back">
                <img src="{{ URL::asset('img/bu/business-back.jpeg') }}" alt="">
            </div>
        </div>
    </div>
    <div class="bs-layout" id="bus-content3">
        <div class="boxbox"></div>
        <div class="section-title">
            <span class="icon">···</span>
            사업장소개
            <span class="icon">···</span>
        </div>
        <div class="figcaption m100b">
            <div class="image-box" style="width:730px; height: 310px; margin:0 0 0 auto;">
                <img src="{{ URL::asset('img/bu/intro1.jpg') }}" alt="">
            </div>
            <div class="test-box" style="left:0; top: 90px;">
                <p class="title puple">서울본사 / 을지물류센터</p>
                <div class="hr"></div>
                <p class="desc">
                    신승지류유통은 전문인력 육성을 통해 각 사업부문별 핵심역량을 강화하고
                    고객가치창출을 실천하고 있습니다. 1,000곳 거래 중 출판사, 인쇄소, 기획사,
                    패키지 회사, 디자인 업체 등 다양하게 거래중 입니다.
                    <!-- <br>
                    <br>
                    서울특별시 중구 마른내로116 신승빌딩5층
                    <br>
                    02 - 2270 - 4900 -->
                </p>
            </div>
        </div>
        <div class="figcaption m100b">
            <div class="image-box" style="width:730px; height: 310px; margin:0 0 0 auto;">
                <img src="{{ URL::asset('img/bu/intro3.jpg') }}" alt="">
            </div>
            <div class="test-box" style="right:0; top:80px;">
                <p class="title blue">파주 영업센터</p>
                <div class="hr"></div>
                <p class="desc">
                    최적의 물류 유통 인프라와 체계적인 공급 시스템이 구축되어 있으며, 
                    연매출 1,000억 달성으로 꾸준한 성장세를 기록하고 있습니다.
                    <!-- <br>
                    <br>
                    경기도 파주시 산업단지길 179 2층
                    <br>
                    02 - 2270 - 4900 -->
                </p>
            </div>
        </div>
        <div class="figcaption">
            <div class="image-box" style="width:730px; height: 310px; margin:0 auto 0 90px;">
                <img src="{{ URL::asset('img/bu/intro2.jpg') }}" alt="">
            </div>
            <div class="test-box" style="left:0; top:90px"> 
                <p class="title green">파주 물류센터</p>
                <div class="hr"></div>
                <p class="desc">
                    파주 물류센터는  1999년 개설하여 7000톤 이상의 재고를 보유하고 있습니다.
                    또한 신속한 배송서비스을 위해 유연한 설비환경을 보유하고 있습니다.
                    <!-- <br>
                    <br>
                    경기도 파주시 조리읍 당재봉로 14
                    <br>
                    031 - 943 - 0918 -->
                </p>
            </div>
        </div>
    </div>
    <div class="bs-layout" id="bus-content4">
        <div class="boxbox"></div>
        <div class="section-title">
            <span class="icon">···</span>
            협력업체
            <span class="icon">···</span>
        </div>
        <nav class="company-list2">
            <ul>
                <li>
                    <img src="{{ URL::asset('img/logo/logo1.jpg') }}" alt="">
                    <p>깨끗한나라</p>
                </li>
                <li>
                    <img src="{{ URL::asset('img/logo/logo2.jpeg') }}" alt="">
                    <p>대한제지</p>
                </li>
                <li>
                    <img src="{{ URL::asset('img/logo/logo3.jpg') }}" alt="">
                    <p>무림페이퍼</p>
                </li>
                <li>
                    <img src="{{ URL::asset('img/logo/logo4.jpg') }}" alt="">
                    <p>삼화제지</p>
                </li>
                <li>
                    <img src="{{ URL::asset('img/logo/logo5.jpg') }}" alt="">
                    <p>전주페이퍼</p>
                </li>
                <li>
                    <img src="{{ URL::asset('img/logo/logo6.jpg') }}" alt="">
                    <p>한국제지</p>
                </li>
                <li>
                    <img src="{{ URL::asset('img/logo/logo7.jpg') }}" alt="">
                    <p>한솔제지</p>
                </li>
                <li>
                    <img src="{{ URL::asset('img/logo/logo8.jpg') }}" alt="">
                    <p>한창제지</p>
                </li>
                <li>
                    <img src="{{ URL::asset('img/logo/logo9.jpg') }}" alt="">
                    <p>홍원제지</p>
                </li>
            </ul>    
        </nav>
        <div class="boxbox"></div>
    </div>
</div>
<?php if(!isset($header)):?>
    @include('layout.footer')
<?php endif;?>