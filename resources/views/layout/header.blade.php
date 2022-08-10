<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>신승지류유통</title>
        <link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}?<?php echo time()?>">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}?<?php echo time()?>">
        <script src="{{ URL::asset('js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ URL::asset('js/common.js') }}"></script>
    </head>
    <body>
        <div class="page">
            <!-- header -->
            <?php if(isset($header) && $header === 'test'):?>
                <header class="header main-header"> 
                <!-- header-fix -->
            <?php else:?>
                <header class="header sub-header">
            <?php endif?>
                <div class="nav-layout">
                    <?php if(isset($header) && $header === 'test'):?>
                    <div class="top-nav-area">
                        <div class="top-nav-layout">
                            <nav class="top-nav">
                                <ul>
                                    <li><a href="http://211.54.23.129">영업정보서비스</a></li>
                                    <li><a href="http://211.54.23.129:8077">고객지원서비스</a></li>
                                    <!-- <li><a href="javascript:;">구버전 바로가기</a></li> -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <?php endif?>
                    <div class="global-nav">
                        <div class="logo">
                            <a href="/">
                                <img src="{{ URL::asset('img/main/logo.png') }}?1" alt="" class="pc">
                                <img src="{{ URL::asset('img/main/mobile_logo.png') }}" alt="" class="mobile">
                            </a>
                        </div>
                        <nav class="gnb-menu-layout">
                            <ul>
                                <li>
                                    <a href="{{ url('company') }}" class="gnb-menu" data-num="0"
                                        >회사소개</a
                                    >
                                </li>
                                <li>
                                    <a href="{{ url('business') }}" class="gnb-menu" data-num="1"
                                        >사업소개</a
                                    >
                                </li>
                                <li>
                                    <a href="{{ url('info/notice') }}" class="gnb-menu" data-num="2"
                                        >신승정보</a
                                    >
                                </li>
                                <li>
                                    <a href="{{ url('employment/recruit') }}" class="gnb-menu" data-num="3"
                                        >인재채용</a
                                    >
                                </li>
                                <li>
                                    <a href="{{ url('cs/inquire') }}" class="gnb-menu" data-num="4"
                                        >고객센터</a
                                    >
                                </li>
                            </ul>
                        </nav>
                        <div class="all-menu">
                            <ul>
                                <li class="m10r only-pc">
                                    <a href="javascript:;">
                                        <img src="{{ URL::asset('img/gnb/h_sns01.png') }}" alt="" style="height:15px;" class="type1">
                                        <img src="{{ URL::asset('img/gnb/sns_f_w.png') }}" alt="" style="height:15px; display:none;" class="type2">
                                    </a>
                                </li>
                                <li class="m20r only-pc">
                                    <a href="javascript:;">
                                        <img src="{{ URL::asset('img/gnb/h_sns02.png') }}" alt="" style="height:16px;" class="type1">
                                        <img src="{{ URL::asset('img/gnb/sns_in_w.png') }}" alt="" style="height:16px; display:none;" class="type2">
                                    </a>
                                </li>
                                <li class="lang only-pc">
                                    <p>영업정보 서비스</p>
                                </li>
                                <li class="m30r only-pc">
                                    <a href="javascript:;" class="down-arrow">
                                        <img src="{{ URL::asset('img/gnb/down-arrow.png') }}" alt="" class="type1">
                                        <img src="{{ URL::asset('img/gnb/down_w.png') }}" alt="" class="down-arrowwic type2" style="display:none">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="show-all">
                                        <img src="{{ URL::asset('img/gnb/all-menu.png?2') }}" alt="" class="all-menuc type1">
                                        <img src="{{ URL::asset('img/gnb/all_w.png') }}" alt="" class="all-menuwc type2" style="display:none">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="gnb-sub-menu-area">
                        <div class="gnb-sub-menu-layout">
                            <!-- gnb1 -->
                            <div class="gnb-sub-menu gnb1">
                                <div class="box m40r">
                                    <div class="img">
                                        <img src="{{ URL::asset('img/gnb/gnb1.jpg') }}" alt="" />
                                    </div>
                                </div>
                                <div class="box m40r">
                                    <a href="{{ url('company') }}#content1" class="m30t">
                                        <div class="img">
                                            <img src="{{ URL::asset('img/gnb/gnb1-1.jpg') }}" alt="" />
                                        </div>
                                        <div class="text">
                                            <p class="title">기업이념</p>
                                            <p class="desc">신승지류유통의 기업이념을 소개합니다.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="box m40r">
                                    <a href="{{ url('company') }}#content2">
                                        <div class="img">
                                            <img src="{{ URL::asset('img/gnb/gnb1-2.jpg') }}" alt="" />
                                        </div>
                                        <div class="text">
                                            <p class="title">CEO인사</p>
                                            <p class="desc">
                                            고객 여러분의 가치 증대와 발전을 함께하는 성실한 동반자가 되겠습니다.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="box m40r">
                                    <a href="{{ url('company') }}#content3">
                                        <div class="img">
                                            <img src="{{ URL::asset('img/gnb/gnb1-3.jpg') }}" alt="" />
                                        </div>
                                        <div class="text">
                                            <p class="title">회사연혁</p>
                                            <p class="desc">한 눈에 알아보는 신승지류유통의 과거와 현재입니다.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="box">
                                    <a href="{{ url('company') }}#content4">
                                        <div class="img">
                                            <img src="{{ URL::asset('img/gnb/gnb1-4.jpg') }}" alt="" />
                                        </div>
                                        <div class="text">
                                            <p class="title">관계업체</p>
                                            <p class="desc">신승지류유통과 함께하는 관련업체입니다.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- gnb1 -->
                            <!-- gnb2 -->
                            <div class="gnb-sub-menu gnb2">
                                <div class="box m40r">
                                    <a href="{{ url('business') }}#content1">
                                        <div class="img">
                                            <img src="{{ URL::asset('img/gnb/gnb2-1.jpg') }}" alt="" />
                                        </div>
                                        <div class="text">
                                            <p class="title">사업개요</p>
                                            <p class="desc">최상의 상품과 편리한 유통망을 제공합니다.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="box m40r">
                                    <a href="{{ url('business') }}#content2">
                                        <div class="img">
                                            <img src="{{ URL::asset('img/gnb/gnb2-2.jpg') }}" alt="" />
                                        </div>
                                        <div class="text">
                                            <p class="title">제품소개</p>
                                            <p class="desc">신승지류유통의 공급 제품을 만나보세요.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="box m40r">
                                    <a href="{{ url('business') }}#content3">
                                        <div class="img">
                                            <img src="{{ URL::asset('img/gnb/gnb2-3.jpg') }}" alt="" />
                                        </div>
                                        <div class="text">
                                            <p class="title">사업장소개</p>
                                            <p class="desc">최첨단 설비와 전문 인력을 통한 경영시스템</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="box m40r">
                                    <a href="{{ url('business') }}#content4">
                                        <div class="img">
                                            <img src="{{ URL::asset('img/gnb/gnb2-4.jpg') }}" alt="" />
                                        </div>
                                        <div class="text">
                                            <p class="title">협력업체</p>
                                            <p class="desc">고객과 함께하는 신승의 협력업체입니다.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="box">
                                    <div class="img">
                                        <img src="{{ URL::asset('img/gnb/gnb2.jpg') }}" alt="" />
                                    </div>
                                </div>
                            </div>
                            <!-- gnb2 -->
                            <!-- gnb3 -->
                            <div class="gnb-sub-menu gnb3">
                                <div class="box m40r">
                                    <div class="img">
                                        <img src="{{ URL::asset('img/gnb/gnb1.jpg') }}" alt="" />
                                    </div>
                                </div>
                                <div class="box m40r">
                                    <a href="{{ url('info/notice') }}">
                                        <div class="img">
                                            <img src="{{ URL::asset('img/gnb/gnb3-1.jpg') }}" alt="" />
                                        </div>
                                        <div class="text">
                                            <p class="title">공지사항</p>
                                            <p class="desc">
                                                고객 여러분들께 알려드립니다.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="box m40r">
                                    <a href="{{ url('info/info') }}">
                                        <div class="img">
                                            <img src="{{ URL::asset('img/gnb/gnb3-2.jpg') }}" alt="" />
                                        </div>
                                        <div class="text">
                                            <p class="title">정보공시</p>
                                            <p class="desc">
                                                정확하고 명확한 정보를 제공합니다.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="box">
                                    <a href="http://211.54.23.129">
                                        <div class="img m40r">
                                            <img src="{{ URL::asset('img/gnb/gnb3-3.jpg') }}" alt="" />
                                        </div>
                                        <div class="text">
                                            <p class="title">주문시스템</p>
                                            <p class="desc">
                                                신승지류유통의 영업정보서비스 입니다.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="box">
                                    <a href="{{ url('info/publicity') }}">
                                        <div class="img">
                                            <img src="{{ URL::asset('img/gnb/gnb3-4.jpg') }}" alt="" />
                                        </div>
                                        <div class="text">
                                            <p class="title">홍보센터</p>
                                            <p class="desc">
                                                가장 빠르게 신승지류유통의 새로운 소식을 만나보세요.
                                            </p>
                                        </div>
                                    <a>
                                </div>
                            </div>
                            <!-- gnb3 -->
                            <!-- gnb4 -->
                            <div class="gnb-sub-menu gnb4">
                                <div class="box m40r">
                                    <img src="{{ URL::asset('img/gnb/gnb4.jpg') }}" alt="" />
                                </div>
                                <div class="box m40r">
                                    <a href="{{ url('employment/recruit') }}#content1">
                                        <div class="img">
                                            <img src="{{ URL::asset('img/gnb/gnb4-1.jpg') }}" alt="" />
                                        </div>
                                        <div class="text">
                                            <p class="title">인재상</p>
                                            <p class="desc">신승인이 갖추어야 할 핵심가치를 알려드립니다.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="box m40r">
                                    <a href="{{ url('employment/recruit') }}#content2">
                                        <div class="img">
                                            <img src="{{ URL::asset('img/gnb/gnb4-2.jpg') }}" alt="" />
                                        </div>
                                        <div class="text">
                                            <p class="title">채용정보</p>
                                            <p class="desc">신승지류유통과 함께 꿈과 미래를 펼쳐 나갈 인재를 찾습니다.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="box">
                                    <a href="{{ url('employment/recruit') }}#content3">
                                        <div class="img">
                                            <img src="{{ URL::asset('img/gnb/gnb4-3.jpg') }}" alt="" />
                                        </div>
                                        <div class="text">
                                            <p class="title">지원서제출</p>
                                            <p class="desc">여러분들을 열림마음으로 기다리고 있습니다.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- gnb4 -->
                            <!-- gnb5 -->
                            <div class="gnb-sub-menu gnb5">
                                <div class="box m40r">
                                    <a href="{{ url('cs/inquire') }}">
                                        <div class="img">
                                            <img src="{{ URL::asset('img/gnb/gnb5-1.jpg') }}" alt="" />
                                        </div>
                                        <div class="text">
                                            <p class="title">문의하기</p>
                                            <p class="desc">궁금하신 사항을 자유롭게 문의하세요.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="box m40r">
                                    <a href="{{ url('cs/suggest') }}">
                                        <div class="img"> 
                                            <img src="{{ URL::asset('img/gnb/gnb5-2.jpg') }}" alt="" />
                                        </div>
                                        <div class="text">
                                            <p class="title">제안하기</p>
                                            <p class="desc">고객님의 소중한 의견을 제안해주세요.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="box">
                                    <a href="{{ url('cs/map') }}">
                                        <div class="img">
                                            <img src="{{ URL::asset('img/gnb/gnb5-3.jpg') }}" alt="" />
                                        </div>
                                        <div class="text">
                                            <p class="title">오시는길</p>
                                            <p class="desc">신승지류유통의 본사/물류센터 오시는 길</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- gnb5 -->
                            <!-- all menu -->
                            <div class="gnb-sub-menu gnb6">
                                <nav class="all-menu-layout-mobile">
                                    <ul class="all-mobile-box">
                                        <li class="title"><a href="javascript:;">회사소개</a></li>
                                        <li><a href="{{ url('company') }}#content1">기업이념</a></li>
                                        <li><a href="{{ url('company') }}#content2">CEO인사</a></li>
                                        <li><a href="{{ url('company') }}#content3">회사연혁</a></li>
                                        <li><a href="{{ url('company') }}#content4">관계업체</a></li>
                                    </ul>
                                    <ul class="all-mobile-box">
                                        <li class="title"><a href="javascript:;">사업소개</a></li>
                                        <li><a href="{{ url('business') }}#content1">사업개요</a></li>
                                        <li><a href="{{ url('business') }}#content2">제품소개</a></li>
                                        <li><a href="{{ url('business') }}#content3">사업장소개</a></li>
                                        <li><a href="{{ url('business') }}#content4">협력업체</a></li>
                                    </ul>
                                    <ul class="all-mobile-box">
                                        <li class="title"><a href="javascript:;">신승정보</a></li>
                                        <li><a href="{{ url('info/notice') }}">공지사항</a></li>
                                        <li><a href="{{ url('info/info') }}">정보공시</a></li>
                                        <li><a href="http://211.54.23.129">주문시스템</a></li>
                                        <li><a href="{{ url('info/publicity') }}">홍보센터</a></li>
                                    </ul>
                                    <ul class="all-mobile-box">
                                        <li class="title"><a href="javascript:;">인재채용</a></li>
                                        <li><a href="{{ url('employment/recruit') }}#content2">채용정보</a></li>
                                        <li><a href="{{ url('employment/recruit') }}#content3">지원서제출</a></li>
                                        <li><a href="{{ url('employment/recruit') }}#content1">인재상</a></li>
                                    </ul>
                                    <ul class="all-mobile-box">
                                        <li class="title"><a href="javascript:;">고객센터</a></li>
                                        <li><a href="{{ url('cs/inquire') }}">문의하기</a></li>
                                        <li><a href="{{ url('cs/suggest') }}">제안하기</a></li>
                                        <li><a href="{{ url('cs/map') }}">오시는길</a></li>
                                    </ul>
                                </nav>
                                <nav class="all-menu-layout">
                                    <ul>
                                        <li class="title"><a href="{{ url('company') }}#content1">기업이념</a></li>
                                        <li><a href="{{ url('company') }}#content2">CEO인사</a></li>
                                        <li><a href="{{ url('company') }}#content3">연혁</a></li>
                                        <li><a href="{{ url('company') }}#content4">관계업체</a></li>
                                    </ul>
                                    <ul>
                                        <li class="title"><a href="{{ url('business') }}#content1">사업개요</a></li>
                                        <li><a href="{{ url('business') }}#content2">제품소개</a></li>
                                        <li><a href="{{ url('business') }}#content3">사업장소개</a></li>
                                        <li><a href="{{ url('business') }}#content4">협력업체</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="{{ url('info/notice') }}">공지사항</a></li>
                                        <li><a href="{{ url('info/info') }}">정보공시</a></li>
                                        <li><a href="http://211.54.23.129">주문시스템</a></li>
                                        <li><a href="{{ url('info/publicity') }}">홍보센터</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="{{ url('employment/recruit') }}#content2">채용정보</a></li>
                                        <li><a href="{{ url('employment/recruit') }}#content3">지원서제출</a></li>
                                        <li><a href="{{ url('employment/recruit') }}#content1">인재상</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="{{ url('cs/inquire') }}">문의하기</a></li>
                                        <li><a href="{{ url('cs/suggest') }}">제안하기</a></li>
                                        <li><a href="{{ url('cs/map') }}">오시는길</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- all menu end -->
                        </div>
                    </div>
                </div>
            </header>
            <div class="menu-up"></div>
            <!-- header -->