@include('layout.header')
<script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=yjsqmlnesd"></script>
@include('layout.cslnb')
<div class="sub-page-layout">
    <div>
        <div class="inquire-layout">
            <div class="section-title">
                문의하기
            </div>
            <div class="inquire-form">
                <form action="#">
                    <div class="personal-info">
                        <p class="info">개인정보 수집·활용 동의서</p>
                        <div class="pi-text">
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
                        <div class="check-text">
                            <p style="margin-top:20px;">
                            <span class="check"><img src="{{ URL::asset('img/cs/check.png') }}" alt=""></span>
                            개인정보 수집·활용에 동의합니다.
                        </p>
                        </div>
                    </div>
                    <div class="inquire-input">
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
                            <p class="title need">문의내용<span>*</span></p>
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
    </div>
</div>
@include('layout.footer')