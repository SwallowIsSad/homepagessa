<?php if(!isset($header)):?>
    @include('layout.header')
<?php endif;?>
<?php
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    if(!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))):
?>
    @include('layout.introlnb')
<?php endif;?>
<div class="sub-page-layout">
    <div>
        <div class="bs-layout" id="bus-content1">
        <div class="pc-box"></div>
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
                            (주)신승아이엔씨는 “고객만족”을 최고의 가치로 생각합니다.
                            고객의 니즈(needs)에 맞는 최적의 솔루션을 제공하고자 국내외 모든 지종의
                            지류를 보유하고 있으며 최적화된 물류서비스를 통해 차별화된 포지셔닝을
                            구축하고 있습니다. (주)신승아이엔씨는 지류, 그 이상의 가치를 고객에게 드릴 수
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
                            (주)신승아이엔씨는 “정직함”을 최고의 가치로 생각합니다.
                            고객에게는 최고 품질의 지류를 빠르고 안정적으로 제공하며 협력사에는 
                            공정한 거래를 바탕으로 성공파트너의 역할을 다하고 있습니다. 고객의
                            성공이 (주)신승아이엔씨의 성공이라는 믿음을 가지고 신뢰깊은 파트너십을 
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
                            (주)신승아이엔씨는 “더 나은 방식을 통한 새로운 가치 창출”을 최고의 가치로
                            생각합니다. 1980년 1월 창업 이래 투명경영과 강한 실천력을 기반으로 가장
                            믿음직한 지류유통회사로 자리잡았습니다.
                            (주)신승아이엔씨는 고객의 성공과 자사의 성장, 업계의 번영을 도모하며 초일류
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
        <div class="section-title">
            <div class="boxbox"></div>
            <div class="boxbox"></div>
            <span class="icon">···</span>
            제품소개
            <span class="icon">···</span>
        </div>
    </div>
    <div class="product-layout-mobile">
        <div class="text">
            저희 (주)신승아이엔씨는 고객의 요구에
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
                저희 (주)신승아이엔씨는
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
                <p class="title puple">서울 본사 / 을지 물류센터</p>
                <div class="hr"></div>
                <p class="desc">
                    (주)신승아이엔씨는 전문인력 육성을 통해 각 사업부문별 핵심역량을 강화하고
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