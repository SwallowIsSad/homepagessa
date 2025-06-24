<?php if(!isset($header)):?>
    @include('layout.header')
<?php endif;?>
<?php
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    if(!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))):
?>
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
        <?php    
            $useragent = $_SERVER['HTTP_USER_AGENT'];
            if(!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))):
        ?>
        <div class="inquire-form">
            <img src="{{ URL::asset('img/cs/map1.png') }}" alt="" style="width:100%">
            <p class="zooso m10b">서울 영업센터 : 서울특별시 중구 마른내로116 신승빌딩 5층 / 02 - 2270 - 4900</p>
            <img src="{{ URL::asset('img/cs/map2.png') }}" alt="" style="width:100%; margin-top:30px;">
            <p class="zooso m10b">파주 영업센터 : 경기도 파주시 산업단지길179 2층 / 031 - 943 - 0918</p>
        </div>
        <?php else:?>
        <div class="inquire-form">
            <img src="{{ URL::asset('img/cs/map1.png') }}" alt="" style="width:100%">
            <p class="zooso">서울 영업센터</p>
            <div class="hr"></div>
            <p class="desc m5b">서울특별시 중구 마른내로116 신승빌딩 5층</p>
            <p class="desc m20b">02 - 2270 - 4900</p>
            <img src="{{ URL::asset('img/cs/map2.png') }}" alt="" style="width:100%">
            <p class="zooso">파주 영업센터</p>
            <div class="hr"></div>
            <p class="desc m5b">경기도 파주시 산업단지길179 2층</p>
            <p class="desc">031 - 943 - 0918</p>
        </div>
        <?php endif;?>
    </div>
    <div style="width:1px; height:50px;"></div>
</div>
<?php if(!isset($header)):?>
    @include('layout.footer')
<?php endif;?>