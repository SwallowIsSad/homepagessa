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
            <div class="test-box" style="right:30px; bottom:-20px;">
                <p class="title">정도경영</p>
                <div class="hr"></div>
                <p class="desc">"뿌리 깊은 나무가 꽃 좋고 열매 많다" 는 진리의<br>실현을 목표로 합니다</p>
            </div>
        </div>
        <div class="figcaption m90b">
            <div class="image-box" style="width:879px; height: 370px; margin:0 0 0 auto">
                <img src="{{ URL::asset('img/company/company2.jpg') }}" alt="">
            </div>
            <div class="test-box" style="left:0; width:440px;">
                <p class="title">도전정신</p>
                <div class="hr"></div>
                <p class="desc">"현재에 안주하려는 기업에는 더 이상의 영광 없다"는 <br>신념으로 내실경영을 추구하면서 도전과 변화를<br>소중한 가치로 생각합니다.</p>
            </div>
        </div>
        <div class="figcaption m90b">
            <div class="image-box" style="width:879px; height: 370px;">
                <img src="{{ URL::asset('img/company/company3.jpg') }}" alt="">
            </div>
            <div class="test-box" style="right:0">
                <p class="title">인본주의</p>
                <div class="hr"></div>
                <p class="desc">"사람이 곧 재산"임을 믿고 사람중심 가치를 존중합니다.</p>
            </div>
        </div>
        <div class="figcaption">
            <div class="image-box" style="width:879px; height: 370px; margin: 0 0 0 auto">
                <img src="{{ URL::asset('img/company/company4.jpg') }}" alt="">
            </div>
            <div class="test-box" style="left:0">
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
        <img src="{{ URL::asset('img/company/ceotext.png') }}" alt="" class="text-img">
    </div>
    <div class="section-title"  id="content3">
        <div style="width:1px; height:100px"></div>
        연혁
    </div>
    <div class="history m100b">
        <img src="{{ URL::asset('img/company/history.png') }}" alt="">
    </div>
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
</div>
@include('layout.footer')