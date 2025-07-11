@include('layout.header')
@include('layout.lnb')
<style>
    .inquire-form .inquire-input .need span{
        margin-left:4px;
    }
    .personal-info .info span{
        color:#ff0000;
        margin-left:4px;
    }
    .inquire-form .personal-info .pi-text{
        height: 200px;
        overflow: scroll;
    }
    .inquire-form .inquire-input .inquire  select{
        margin: 5px 0;
        padding-left: 10px;
        font-size: 15px;
        width: 100%;
        height: 30px;
        border: none;   
    }
</style>
<div class="sub-page-layout">
    <div class="sub-page-header">지원서제출</div>
</div>
<div class="inquire-layout">
    <div class="inquire-form">
        <form action="#">
            <div class="personal-info m50b">
                <p class="info">개인정보 수집·활용 동의서<span>*</span></p>
                <div class="pi-text">
                    개인정보 보호를 위한 이용자 동의사항.
                    <br>
                    <br>
                    (주)신승아이엔씨는 개인정보보호법 등 관련 법률에 따라 개인정보 수집 시 정보 주체에게 사전 고지하고 이에 대한 동의를 받습니다.
                    <br>
                    - 개인정보의 수집 및 이용 목적 : (주)신승아이엔씨 고객센터 문의하기 서비스 이용
                    <br>
                    - 수집하는 개인정보 항목 : 업종, 업체명, 이름, 주소, 연락처, 이메일주소
                    <br>
                    - 개인정보 보유 및 이용 기간 : 동의일로부터 5년
                    <br>
                    <br>
                    귀하는 동의를 거부할 권리가 있으나, 상기 사항에 동의하지 않으실 경우 문의하기 이용에 제한을 받으실 수 있습니다.
                </div>
                <div class="check-text">
                    <p style="margin-top:20px;">
                    <span class="check"><img src="{{ URL::asset('img/cs/check.png') }}" alt=""></span>
                    개인정보 수집·활용에 동의합니다.
                </p>
                </div>
            </div>
            <div class="personal-info">
                <p class="info">민감정보 수집 및 이용 동의<span>*</span></p>
                <div class="pi-text">
                    (주)신승아이엔씨 (이하 ‘회사’)은 아래와 같이 민감정보를 수집 및 이용합니다.
                    <br>
                    <br>
                    1. 수집 · 이용 항목
                    <br>
                    <br>
                    공고 지원 시 다음 민감정보를 수집 및 이용합니다.
                    <br>
                    <br>
                    - 보훈사항 : 보훈여부 (대상자일 경우-보훈번호, 보훈구분, 관계)
                    <br>
                    - 장애사항 : 장애여부 (대상자일 경우-장애내용, 장애정도)
                    <br>
                    2. 수집 · 이용 목적
                    <br>
                    <br>
                    수집한 개인정보는 아래 목적으로 이용됩니다.
                    <br>
                    <br>
                    - 국가유공자, 장애인 등 취업보호대상자 우대
                    <br>
                    3. 보유 및 이용기간
                    <br>
                    <br>
                    채용 여부 확정일로부터 180일 보관 후 파기합니다.
                    <br>
                    <br>
                    - 지원자 계정 삭제 및 지원서 삭제 시 즉시 파기합니다.
                    <br>
                    (단, 상시 채용을 위한 정보 수집 및 이용에 동의하는 경우 지원 전형 종료 이후 최대 5년까지 보관)
                    <br>
                    민감정보 수집‧이용 동의를 거부할 권리가 있습니다.
                    <br>
                    그러나 동의를 거부할 경우 원활한 심사를 할 수 없어 영입에 제한을 받을 수 있습니다.
                    <br>
                </div>
                <div class="check-text">
                    <p style="margin-top:20px;">
                    <span class="check"><img src="{{ URL::asset('img/cs/check.png') }}" alt=""></span>
                    개인정보 수집·활용에 동의합니다.
                </p>
                </div>
            </div>
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
                    <p class="title need">업체명</p>
                    <div class="input-layout">
                        <input type="text" placeholder="업체명을 입력해주세요.">
                    </div>
                </div>
                <div class="inquire left">
                    <p class="title need">연락처<span>*</span></p>
                    <div class="input-layout">
                        <input type="text" placeholder="( - ) 없이 숫자만 입력해주세요.">
                    </div>
                </div>
                <div class="inquire right">
                    <p class="title need">이메일<span>*</span></p>
                    <div class="input-layout">
                        <input type="text" placeholder="메일 주소를 입력해주세요">
                    </div>
                </div>
                <div class="inquire left">
                    <p class="title need">제목<span>*</span></p>
                    <div class="input-layout">
                        <input type="text" placeholder="제목을 입력해주세요.">
                    </div>
                </div>
                <div class="inquire right">
                    <p class="title need">첨부파일</p>
                    <div class="input-layout">
                        <input type="text" placeholder="5MB이하 파일만 첨부 가능합니다.">
                    </div>
                </div>
                <div class="inquire full">
                    <p class="title need">자기소개서<span>*</span></p>
                    <textarea name="" id=""></textarea>
                </div>
            </div>
            <div class="btn-area area-center">
                <a href="javascript:;" class="btn btn-white">취소하기</a>
                <a href="javascript:;" class="btn btn-blue">문의하기</a>
            </div>
        </form>
    </div>
</div>
@include('layout.footer')