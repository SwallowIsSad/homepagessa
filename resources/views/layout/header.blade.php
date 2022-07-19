<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>신승지류유통</title>
        <link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
        <script src="{{ URL::asset('js/jquery-3.6.0.min.js') }}"></script>
    </head>
    <body>
        <div class="page">
            <!-- header -->
            <header class="header">
                <div class="nav-layout">
                    <?php if(isset($header) && $header === 'test'):?>
                    <div class="top-nav-area">
                        <div class="top-nav-layout">
                            <nav class="top-nav">
                                <ul>
                                    <li><a href="javascript:;">영업정보서비스</a></li>
                                    <li><a href="javascript:;">고객지원서비스</a></li>
                                    <li><a href="javascript:;">구버전 바로가기</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <?php endif?>
                    <div class="global-nav">
                        <div class="logo">
                            <a href="/">
                                <img src="{{ URL::asset('img/main/logo.png') }}" alt="">
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
                                    <a href="javascript:;" class="gnb-menu" data-num="1"
                                        >사업소개</a
                                    >
                                </li>
                                <li>
                                    <a href="javascript:;" class="gnb-menu" data-num="2"
                                        >신승정보</a
                                    >
                                </li>
                                <li>
                                    <a href="javascript:;" class="gnb-menu" data-num="3"
                                        >인재채용</a
                                    >
                                </li>
                                <li>
                                    <a href="javascript:;" class="gnb-menu" data-num="4"
                                        >고객센터</a
                                    >
                                </li>
                            </ul>
                        </nav>
                        <div class="all-menu">
                            <ul>
                                <li class="m10r">
                                    <a href="javascript:;">
                                        <img src="{{ URL::asset('img/gnb/h_sns01.png') }}" alt="" style="height:15px;">
                                    </a>
                                </li>
                                <li class="m20r">
                                    <a href="javascript:;">
                                        <img src="{{ URL::asset('img/gnb/h_sns02.png') }}" alt="" style="height:16px;">
                                    </a>
                                </li>
                                <li class="lang">
                                    <p>구버전 바로가기</p>
                                </li>
                                <li class="m30r">
                                    <a href="javscript:;" class="down-arrow">
                                        <img src="{{ URL::asset('img/gnb/down-arrow.png') }}" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="javscript:;" class="show-all">
                                        <img src="{{ URL::asset('img/gnb/all-menu.png') }}" alt="" />
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
                                    <a href="{{ url('company') }}" class="m30t">
                                        <div class="img">
                                            <img src="{{ URL::asset('img/gnb/gnb1-1.jpg') }}" alt="" />
                                        </div>
                                        <div class="text">
                                            <p class="title">기업이념</p>
                                            <p class="desc">신승지류유통은 기업이념을 소개합니다.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="box m40r">
                                    <a href="{{ url('company') }}">
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
                                    <a href="{{ url('company') }}">
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
                                    <a href="{{ url('company') }}">
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
                                    <a href="{{ url('business') }}">
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
                                    <a href="{{ url('business') }}">
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
                                    <a href="{{ url('business') }}">
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
                                    <a href="{{ url('business') }}">
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
                                    <div class="img m40r">
                                        <img src="{{ URL::asset('img/gnb/gnb3-3.jpg') }}" alt="" />
                                    </div>
                                    <div class="text">
                                        <p class="title">주문시스템</p>
                                        <p class="desc">
                                            신승지류유통의 영업정보서비스 입니다.
                                        </p>
                                    </div>
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
                                    <a href="{{ url('employment/recruit') }}">
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
                                    <a href="{{ url('employment/info') }}">
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
                                    <a href="{{ url('employment/apply') }}">
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
                                    <a href="{{ url('cs/inquire') }}">
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
                                    <a href="{{ url('cs/inquire') }}">
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
                                <nav class="all-menu-layout">
                                    <ul>
                                        <li>경영이념</li>
                                        <li>CEO인사</li>
                                        <li>연혁</li>
                                        <li>관계업체</li>
                                    </ul>
                                    <ul>
                                        <li>사업개요</li>
                                        <li>제품소개</li>
                                        <li>사업장소개</li>
                                        <li>협력업체</li>
                                    </ul>
                                    <ul>
                                        <li>공지사항</li>
                                        <li>정보공시</li>
                                        <li>주문시스템</li>
                                        <li>홍보센터</li>
                                    </ul>
                                    <ul>
                                        <li>채용정보</li>
                                        <li>지원서제출</li>
                                        <li>인재상</li>
                                    </ul>
                                    <ul>
                                        <li>문의하기</li>
                                        <li>제안하기</li>
                                        <li>오시는길</li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- all menu end -->
                        </div>
                        <div class="close-sub-menu">닫기<img src="{{ URL::asset('img/gnb/top-w-arrow.png')}}" alt=""></div>
                    </div>
                </div>
            </header>
            <!-- header -->