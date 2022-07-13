@include('layout.header')
<script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=yjsqmlnesd"></script>
@include('layout.lnb')
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
    <div>    
        <div class="inquire-layout">
            <div class="section-title">
                제안하기
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
                            <p class="title need">업체명<span>*</span></p>
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
                            <p class="title need">제안내용<span>*</span></p>
                            <textarea name="" id=""></textarea>
                        </div>
                    </div>
                    <div class="btn-area area-center">
                        <a href="javascript:;" class="btn btn-white">취소하기</a>
                        <a href="javascript:;" class="btn btn-blue">제안하기</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div>    
        <div class="inquire-layout">
            <div class="section-title">
                오시는길
            </div>
            <img src="{{ URL::asset('img/map.png') }}" alt="" class="mapmap" style="display:none">
            <div class="map-layout">
                <nav class="map-tab">
                    <ul>
                        <li class="active" data-type="1">본사</li>
                        <li data-type="2">물류</li>
                    </ul>
                </nav>
                <nav class="map">
                    <ul>
                        <li class="active">
                            <div class="map-label">
                                <p class="desc">
                                    주소 : 서울특별시 중구 마른내로 116
                                    <br>
                                    (오장동, 신승빌딩) 5층
                                </p>
                                <p class="tel">
                                    TEL : 02 - 0000 - 0000
                                </p>
                                <p class="fax">
                                    FAX : 02 - 0000 - 0000
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="map-label type2">
                                <p class="desc">
                                    주소 : 경기도 파주시 조리읍 당재봉로 14
                                </p>
                                <p class="tel">
                                    TEL : 02 - 0000 - 0000
                                </p>
                                <p class="fax">
                                    FAX : 02 - 0000 - 0000
                                </p>
                            </div>
                        </li>
                    </ul>
                    <div id="map" style="width:100%;height:400px;"></div>
                </nav>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $(document).on("click", ".check-text", function (e) {
            e.preventDefault();
            var $self = $(this);
            $self.find(".check").css("background", "#0152a4");
        });

        var icon = $(".mapmap").attr("src");
        var mapOptions = {
            center: new naver.maps.LatLng(37.564266, 127.0007765),
            zoom: 17
        };

        var map = new naver.maps.Map('map', mapOptions);

        var marker = new naver.maps.Marker({
            position: new naver.maps.LatLng(37.564266, 127.0007765),
            map: map,
            icon : {
                url: icon,
                origin: new naver.maps.Point(0, 0),
                anchor: new naver.maps.Point(20, 65)
                
            }
        });

        var map = 1;
        $(document).on("click", ".map-tab li", function (e) {
            e.preventDefault();
            var $self = $(this);

            
            console.log($self.data('type'));

            if($self.data('type') == 1)
            {
                var mapOptions = {
                    center: new naver.maps.LatLng(37.564266, 127.0007765),
                    zoom: 17
                };
                var map = new naver.maps.Map('map', mapOptions);
                var marker = new naver.maps.Marker({
                    position: new naver.maps.LatLng(37.564266, 127.0007765),
                    map: map,
                    icon : {
                        url: icon,
                        origin: new naver.maps.Point(0, 0),
                        anchor: new naver.maps.Point(20, 65)
                        
                    }
                });
            }
            else
            {
                var mapOptions = {
                    center: new naver.maps.LatLng(37.774081, 126.8361128),
                    zoom: 17
                };

                var map = new naver.maps.Map('map', mapOptions);
                var marker = new naver.maps.Marker({
                    position: new naver.maps.LatLng(37.774081, 126.8361128),
                    map: map,
                    icon : {
                        url: icon,
                        origin: new naver.maps.Point(0, 0),
                        anchor: new naver.maps.Point(20, 65)
                        
                    }
                });
            }

            if(!$self.hasClass("active"))
            {
                $(".map-tab").find("li").removeClass("active");
                $self.addClass("active");
                $(".map").find("li").removeClass("active");
                $(".map li").eq($self.index()).addClass("active")
            }
        })
    })
</script>
@include('layout.footer')