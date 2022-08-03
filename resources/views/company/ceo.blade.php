@include('layout.header')
@include('layout.lnb')
<div class="company-layout" id="content1">
    <div style="width:1px; height:100px"></div>
    <div class="section-title">
        경영이념
    </div>
    <div class="cooperative">
        <div class="figcaption m90b">
            <div class="image-box" style="width:879px; height: 370px;">
                <img src="{{ URL::asset('img/company/company1.jpg') }}" alt="">
            </div>
            <div class="test-box" style="right:0px; bottom:-20px;">
                <p class="title">정도경영</p>
                <div class="hr"></div>
                <p class="desc">"뿌리 깊은 나무가 꽃 좋고 열매 많다" 는 진리의<br>실현을 목표로 합니다</p>
            </div>
        </div>
        <div class="figcaption m90b">
            <div class="image-box" style="width:879px; height: 370px; margin:0 0 0 auto">
                <img src="{{ URL::asset('img/company/company2.jpg') }}" alt="">
            </div>
            <div class="test-box" style="left:0; width:440px; bottom:-20px;">
                <p class="title">도전정신</p>
                <div class="hr"></div>
                <p class="desc">"현재에 안주하려는 기업에는 더 이상의 영광 없다"는 <br>신념으로 내실경영을 추구하면서 도전과 변화를<br>소중한 가치로 생각합니다.</p>
            </div>
        </div>
        <div class="figcaption m90b">
            <div class="image-box" style="width:879px; height: 370px;">
                <img src="{{ URL::asset('img/company/company3.jpg') }}" alt="">
            </div>
            <div class="test-box" style="right:0; bottom:-20px;">
                <p class="title">인본주의</p>
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
                <p class="desc">고객의 만족이 신승인의 만족임을 신념으로 "고객 만족 경영"<br>을 최고의 가치로 고객 제일주의 실현을 지향 합니다.</p>
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
                        더욱 빠르게, 보다 광범위하게, 보다 큰 폭으로 
                        <br>
                        진행되고 있는 기업환경 변화에 능동적으로 대처.
                        <br>
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
                        <br>
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
                        <br>
                        믿음으로 고객만족에 최선을 다합니다.
                    </p>
               </li>
           </ul>
       </nav> 
    </div>
</div>
<div class="company-layout">
    <div class="section-title" id="content2">
    <div style="width:1px; height:100px"></div>
        CEO 인사
    </div>
    <div class="cooperative m100b">
        <img src="{{ URL::asset('img/company/ceo.jpg') }}" alt="">
        <img src="{{ URL::asset('img/company/ceotext.jpeg') }}" alt="" class="text-img">
    </div>
    <div class="section-title"  id="content3">
        <div style="width:1px; height:100px"></div>
        연혁
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
    <!-- <img src="{{ URL::asset('img/company/history.jpg') }}" alt=""> -->
</div>
<div class="company-layout">
    <div class="section-title"  id="content4">
        <div style="width:1px; height:100px"></div>
        관계업체
    </div>
    <nav class="company-list2">
        <ul>
            <li>
                <img src="{{ URL::asset('img/logo/logo10.png') }}" alt="">
                <p>(주)갑우문화사</p>
            </li>
            <li>
                <img src="{{ URL::asset('img/logo/logo11.png') }}" alt="">
                <p>(주)갑우패키지</p>
            </li>
            <li>
                <img src="{{ URL::asset('img/logo/logo12.png') }}" alt="">
                <p>(주)더원프린팅</p>
            </li>
            <li>
                <img src="{{ URL::asset('img/logo/logo13.png') }}" alt="">
                <p>(주)비피엔피</p>
            </li>
            <li>
                <img src="{{ URL::asset('img/logo/logo14.png') }}" alt="">
                <p>지비로터리(주)</p>
            </li>
            <li>
                <img src="{{ URL::asset('img/logo/logo15.png') }}" alt="">
                <p>(주)프린트뱅크</p>
            </li>
        </ul>    
    </nav>
    <div style="width:1px; height:100px"></div>
</div>
@include('layout.footer')
<script>
    $(function () {
        $(window).scroll(function() {
            var scroll = $(document).scrollTop() + 450;

            $(".history-scroll").each(function (i, e) {
                if(scroll > $(e).offset().top)
                {
                    $(e).addClass("blue");
                }
                else
                {
                    $(e).removeClass("blue");
                }
            });

        })
    })
</script>