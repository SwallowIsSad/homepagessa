<img src="{{ URL::asset('img/top.png') }}" alt="" class="top" style="display:none">
            <footer class="footer">
                <div class="footer-layout">
                    <!-- <div class="menu">
                        <ul>
                            <li><a href="#">개인정보취급방침</a></li>
                            <li><a href="#">이메일무단수집거부</a></li>
                            <li><a href="#">사이트맵</a></li>
                            <li>
                                <a href="#">찾아오시는 길</a>
                            </li>
                            <li><a href="#">고객문의</a></li>
                        </ul>
                    </div> -->
                    <address>
                        <p class="on-p">주소 : 04559</p>서울특별시 중구 마른내로 116 (오장동, 신승빌딩) 5층 <p class="on-p">｜ 대표자 : 윤준영·전서연·전순관 ｜ 법인명 : 신승지류유통㈜ </p> <div>
                        <p class="on-m">TEL : 02-2270-4900 ㅣ FAX : 02-2270-4944</p>
                          <p class="on-p">｜ 업종 : 가구·목재·펄프·종이 ｜ 업태 : 제조, 도매, 서비스</p>
                        사업자등록번호 : 107-81-52415
                        <br>
                    </address>
                     <p class="copy">COPYRIGHT ⓒ 2008 SINSEUNG CORP. All RIGHTS RESERVED.</p>
                </div>
            </footer>
        </div>
        <script>
            $(function () {
                // var lnb = $(".header").offset().top;
                // $(window).scroll(function() {
                //     if(!$(".gnb-sub-menu-area").is(':visible'))
                //     {
                //         scrollChk(window)
                //     }
                // })

                // function scrollChk(top)
                // {
                //     var top = $(this).scrollTop();
                //     if(top != 0) {
                //         $(".header").addClass("lnb-fix");
                //         $(".type1").hide();
                //         $(".type2").show();
                //     } else {
                //         $(".header").removeClass("lnb-fix");
                //         $(".type1").show();
                //         $(".type2").hide();
                //     }
                // }
                
                // $('.gnb-menu').hover(function () {
                //     $('.header').removeClass('lnb-fix');
                //     $(".type1").show();
                //     $(".type2").hide();
                // })

                $('.gnb-menu').hover(function () {
                    var $self = $(this)
                    $('.gnb-sub-menu-area').show()
                    $('.gnb-sub-menu-layout .gnb-sub-menu').hide()
                    $('.gnb-sub-menu-layout .gnb-sub-menu').eq($self.data('num')).show()
                    $(".menu-up").show();
                })

                $(document).on("click", ".show-all",function (e) {
                    e.preventDefault();
                    if($('.gnb-sub-menu-layout .gnb-sub-menu').is(':visible'))
                    {
                        $('.gnb-sub-menu-area').hide()
                        $('.gnb-sub-menu-layout .gnb-sub-menu').hide()
                    }
                    else
                    {
                        $('.gnb-sub-menu-area').show()
                        $('.gnb-sub-menu-layout .gnb-sub-menu').hide()
                        $('.gnb-sub-menu-layout .gnb-sub-menu').eq(5).show()
                    }

                })

                $(".menu-up").hover(function (e) {
                    e.preventDefault();
                    $('.gnb-sub-menu-area').slideUp(200)
                    $('.gnb-sub-menu-layout .gnb-sub-menu').hide()
                    $(".menu-up").hide();
                })

                $(document).on("click", ".top", function (e) {
                    e.preventDefault();
                    $( 'html, body' ).animate( { scrollTop : 0 }, 400 );
                });

                $(window).scroll(function() {
                    var window = $(this).scrollTop();
                    if(window > 500) {
                        $(".top").show();
                    } else {
                        $(".top").hide();
                    }
                })
            })
        </script>
    </body>
</html>