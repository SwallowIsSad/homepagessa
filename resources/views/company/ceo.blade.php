<?php if(!isset($header)):?>
    @include('layout.header')
<?php endif;?>
<?php if(!preg_match('/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipad|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|sagem|sharp|sie-|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', $_SERVER['HTTP_USER_AGENT'])):?>
    @include('layout.lnb')
<?php endif;?>
<div class="swiper-company">
    <div class="company-layout" id="company-content1">
        <div style="width:1px; height:100px"></div>
        <div class="section-title">
            <span class="icon">···</span>
            기업이념
            <span class="icon">···</span>
        </div>
        <div class="cooperative">
            <div class="figcaption m90b">
                <div class="image-box" style="width:879px; height: 370px;">
                    <img src="{{ URL::asset('img/company/company1.jpg') }}" alt="">
                </div>
                <div class="test-box" style="right:0px; bottom:-20px;">
                    <p class="title">정도경영</p>
                    <div class="hr"></div>
                    <p class="desc">"뿌리 깊은 나무가 꽃 좋고 열매 많다" 는 진리의 실현을 목표로 합니다</p>
                </div>
            </div>
            <div class="figcaption m90b">
                <div class="image-box" style="width:879px; height: 370px; margin:0 0 0 auto">
                    <img src="{{ URL::asset('img/company/company2.jpg') }}" alt="">
                </div>
                <div class="test-box" style="left:0; width:440px; bottom:-20px;">
                    <p class="title ">도전정신</p>
                    <div class="hr"></div>
                    <p class="desc">"현재에 안주하려는 기업에는 더 이상의 영광 없다"는 신념으로 내실경영을 추구하면서 도전과 변화를 소중한 가치로 생각합니다.</p>
                </div>
            </div>
            <div class="figcaption m90b">
                <div class="image-box" style="width:879px; height: 370px;">
                    <img src="{{ URL::asset('img/company/company3.jpg') }}" alt="">
                </div>
                <div class="test-box" style="right:0; bottom:-20px;">
                    <p class="title ">인본주의</p>
                    <div class="hr"></div>
                    <p class="desc">"사람이 곧 재산"임을 믿고 사람중심 가치를 존중합니다.</p>
                </div>
            </div>
            <div class="figcaption">
                <div class="image-box" style="width:879px; height: 370px; margin: 0 0 0 auto">
                    <img src="{{ URL::asset('img/company/company4.jpg') }}" alt="">
                </div>
                <div class="test-box" style="left:0; bottom:-20px;">
                    <p class="title">고객 제일주의</p>
                    <div class="hr"></div>
                    <p class="desc">고객의 만족이 신승인의 만족임을 신념으로 "고객 만족 경영" 을 최고의 가치로 고객 제일주의 실현을 지향 합니다.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="company-banner">
        <div class="company-layout">
        <nav class="company-banner-content">
            <ul>
                <li>
                    <div class="background">
                        <img src="{{ URL::asset('img/company/banner2.png') }}" alt="">
                    </div>
                        <p class="title m20t">변화와 혁신</p>
                        <div class="line"></div>
                        <p class="desc">
                            더욱 빠르게, 보다 광범위하게, 보다<br>큰 폭으로 
                            진행되고 있는 기업환경 변화에 능동적으로 대처.
                            고난과 역경을 성공과 자부심으로 승화 시킵니다.
                        </p>
                </li>
                <li class="m100r m100l">
                    <div class="background">
                        <img src="{{ URL::asset('img/company/banner1.png') }}" alt="">
                    </div>
                    <p class="title m20t">자율과 창의</p>
                    <div class="line"></div>
                    <p class="desc">
                        자율을 바탕으로 창의력 넘치는 기업문화 
                        구축으로 백년대계를 준비합니다.
                    </p>
                </li>
                <li>
                    <div class="background">
                        <img src="{{ URL::asset('img/company/banner3.png') }}" alt="">
                    </div>
                    <p class="title m20t">고객과 함께 발전</p>
                    <div class="line"></div>
                    <p class="desc">
                        항상 고객의 발전이 신승지류유통의 발전이라는
                        믿음으로 고객만족에 최선을 다합니다.
                    </p>
                </li>
            </ul>
        </nav> 
        </div>
    </div>
    <div class="company-layout"  id="company-content2">
        <div class="section-title">
        <div class="boxbox"></div>
            <span class="icon">···</span>
            CEO 인사
            <span class="icon">···</span>
        </div>
        <div class="cooperative m100b">
            <div class="mobile-title">
                "경제적이다 · 합리적이다 · 디테일하다 · 신속하다." 
                <br>
                신승은 다시 새로운 기업으로 도약하겠습니다.
            </div>
            <div class="image-area">
                <img src="{{ URL::asset('img/company/ceo.jpg') }}" alt="" class="ceo-img">
            </div>
            <div class="text-area">
                <p class="title">
                    "경제적이다 · 합리적이다 · 디테일하다 · 신속하다." 
                    <br>
                    신승은 다시 새로운 기업으로 도약하겠습니다.
                </p>
                <span class="line"></span>
                <div class="content">
                    저희 회사는 국내 1위 지류유통 전문회사로써 고객 여러분에게 다양한 고품질의 상품을 보다 원활하게 공급하고,
                    
                    더욱 향상된 서비스로 보답하고자 혼신의 노력을 다하고 있습니다.
                    <br>
                    <br>
                    국내 지류유통시장의 선도기업으로써 충실한 역할을 함은 물론, 국내 최고의 유통망과 서비스를 개발, 고객 여러분의 가치 증대와 발전을 함께하는 성실한 동반자가 되겠습니다.
                    
                    또한, 인쇄용지, 산업용지, 특수용지 등 지류 전 분야에 걸쳐 고객 여러분의 다양한 요구에 부응하고 신속하고 정확한 납기를 바탕으로 고객제일주의 실현을 선도적으로 수행해 나갈 것 입니다.
                    <br>
                    <br>
                    항상 신승지류유통의 성장과 발전에 성원해 주신 고객 여러분의 소중한 마음을 깊이 새겨 끊임없이 고객의 가치를 증대시키는데 노력하겠습니다.
                    <br><br>
                    앞으로도 “고객 여러분과 함께 발전한다.” 라는 경영이념을 최우선과제로 삼아 지나온 길보다 다가올 내일을 준비하여 보다 더 성실한 자세로 다가갈 것을 약속 드리며, 항상 변함 없는 격려와 성원을 부탁 드립니다.
                    <br>
                    <br>
                    감사합니다.
                    <br>
                    <br>
                    <br>
                    <p class="pc">
                        대표이사
                    </p>
                    <p class="mobile">
                        대표이사
                    </p>
                </div>
                <p class="sign-area">
                    <img src="{{ URL::asset('img/company/sign.png') }}" alt="">
                </p>
            </div>
        </div>
        <div id="company-content3" style="padding-top:50px">
            <div class="section-title">
                <div class="boxbox"></div>
                <span class="icon">···</span>
                연혁
                <span class="icon">···</span>
            </div>
        </div>
    </div>
    <div class="history-map m100b">
        <div class="history-content">
            <div class="year main history-scroll">
                <p class="y-con">2020</p>
            </div>
            <div class="content right history-scroll">
                <div class="circle"></div>
                <p>
                    10월
                    <br>
                    산림경영인증시스템 (FSC) 인증 획득
                </p>
            </div>
            <div class="content2 right history-scroll">
                <div class="circle"></div>
                <p>
                    7월
                    <br>
                    경영혁시형 중소기업 선정(중소벤처기업부)
                </p>
            </div>
            <div class="year need-border history-scroll">
                <p class="y-con">2017</p>
            </div>
            <div class="content left history-scroll">
                <div class="circle"></div>
                <p>
                    6월
                    <br>
                    산업통상자원부 장관상 수상
                    <br>
                    (제1회 종이의 날, 제지산업발전 기여)
                </p>
            </div>
            <div class="year need-border history-scroll">
                <p class="y-con">2013</p>
            </div>
            <div class="content2 right history-scroll">
                <div class="circle"></div>
                <p>
                    2월
                    <br>
                    경영혁신기업 선정 (서울지방중소기업청)
                </p>
            </div>
            <div class="year need-border history-scroll">
                <p class="y-con">2011</p>
            </div>
            <div class="content left history-scroll">
                <div class="circle"></div>
                <p>
                    10월
                    <br>
                    ERP 시스템 구축 완료
                </p>
            </div>
            <div class="year need-border history-scroll">
                <p class="y-con">2007</p>
            </div>
            <div class="content2 right history-scroll">
                <div class="circle"></div>
                <p>
                    1월
                    <br>
                    종합물류시스템 구축용 성동구 성수동 부지 매입
                </p>
            </div>
            <div class="year need-border history-scroll">
                <p class="y-con">2006</p>
            </div>
            <div class="content left history-scroll">
                <div class="circle"></div>
                <p>
                    11월
                    <br>
                    경영혁신형 중소기업 선정 (서울지방중소업청)
                </p>
            </div>
            <div class="year need-border history-scroll">
                <p class="y-con">2003</p>
            </div>
            <div class="content2 right history-scroll">
                <div class="circle"></div>
                <p>
                    3월
                    <br>
                    조세의 날 모범납세자 표창 (국세청장상 수상)
                </p>
            </div>
            <div class="year need-border history-scroll">
                <p class="y-con">2002</p>
            </div>
            <div class="content2 left history-scroll">
                <div class="circle"></div>
                <p>
                    2월
                    <br>
                    중구 오장동 사옥 증축완공 및 본사 사업장 이전
                </p>
            </div>
            <div class="year need-border history-scroll">
                <p class="y-con">1999</p>
            </div>
            <div class="content2 right history-scroll">
                <div class="circle"></div>
                <p>
                    12월
                    <br>
                    파주 물류센터 개설
                </p>
            </div>
            <div class="content2 right history-scroll">
                <div class="circle"></div>
                <p>
                    11월
                    <br>
                    자본금 증자 (10억)
                </p>
            </div>
            <div class="year need-border history-scroll">
                <p class="y-con">1998</p>
            </div>
            <div class="content2 left history-scroll">
                <div class="circle"></div>
                <p>
                    10월
                    <br>
                    종합 지류 유통법인으로 통합 (인현동으로 본사 이전)
                </p>
            </div>
            <div class="year need-border history-scroll">
                <p class="y-con">1995</p>
            </div>
            <div class="content2 right history-scroll">
                <div class="circle"></div>
                <p>
                    10월
                    <br>
                    신승지류유통(주) 설립
                </p>
            </div>
            <div class="year need-border history-scroll">
                <p class="y-con">1989</p>
            </div>
            <div class="content2 left history-scroll">
                <div class="circle"></div>
                <p>
                    4월
                    <br>
                    지류유통법인 제흥지업(주)창업
                </p>
            </div>
            <div class="year need-border history-scroll">
                <p class="y-con">1980</p>
            </div>
            <div class="content2 right history-scroll">
                <div class="circle"></div>
                <p>
                    1월
                    <br>
                    지류유통회사 제흥상사 창업 (전순관 회장)
                </p>
            </div>
        </div>
    </div>
    <div class="company-layout" id="company-content4">
        <div class="section-title">
            <div class="boxbox"></div>
            <span class="icon">···</span>
            관계업체
            <span class="icon">···</span>
        </div>
        <nav class="company-list2">
            <ul>
                <li>
                    <img src="{{ URL::asset('img/logo/logo10.jpg') }}" alt="">
                    <p>(주)갑우문화사</p>
                </li>
                <li>
                    <img src="{{ URL::asset('img/logo/logo11.jpg') }}" alt="">
                    <p>(주)갑우패키지</p>
                </li>
                <li>
                    <img src="{{ URL::asset('img/logo/logo12.jpg') }}" alt="">
                    <p>(주)더원프린팅</p>
                </li>
                <li>
                    <img src="{{ URL::asset('img/logo/logo13.jpg') }}" alt="">
                    <p>(주)비피엔피</p>
                </li>
                <li>
                    <img src="{{ URL::asset('img/logo/logo14.jpg') }}" alt="">
                    <p>지비로터리(주)</p>
                </li>
                <li>
                    <img src="{{ URL::asset('img/logo/logo15.jpg') }}" alt="">
                    <p>(주)프린트뱅크</p>
                </li>
            </ul>    
        </nav>
        <div class="boxbox"></div>
</div>
</div>
<?php if(!isset($header)):?>
    @include('layout.footer')
<?php endif;?>