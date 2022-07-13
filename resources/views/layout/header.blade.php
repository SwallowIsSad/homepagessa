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
                                    <li><a href="javascript:;">고객센터</a></li>
                                    <li><a href="javascript:;">고객정보서비스</a></li>
                                    <li><a href="javascript:;">영업정보서비스</a></li>
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
                                <li class="lang m30r">
                                    <p>KOR</p>
                                    <img src="{{ URL::asset('img/gnb/down-arrow.png') }}" alt="">
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
                                            <p class="desc">신승지류유통의<br />기업이념 입니다.</p>
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
                                                고객의 소증함을 아는 기업<br />신승지류유통입니다.
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
                                            <p class="desc">신승지류유통의<br />연혁입니다.</p>
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
                                            <p class="desc">신승지류유통의<br />관계업체입니다.</p>
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
                                            <p class="desc">신승지류유통의<br />사업개요입니다.</p>
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
                                            <p class="desc">신승지류유통의<br />제품소개입니다.</p>
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
                                            <p class="desc">신승지류유통의<br />사업장소개입니다.</p>
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
                                            <p class="desc">신승지류유통의<br />협력업체입니다.</p>
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
                                                신승지류유통의 공지사항입니다.
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
                                                정보공시입니다.
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
                                            주문시스템입니다.
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
                                                홍보센터입니다
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
                                            <p class="desc">신승지류유통의<br />인재상입니다.</p>
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
                                            <p class="desc">신승지류유통의<br />채용정보입니다.</p>
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
                                            <p class="desc">신승지류유통의<br />지원서제출입니다.</p>
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
                                            <p class="desc">신승지류유통의<br />문의하기입니다.</p>
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
                                            <p class="desc">신승지류유통의<br />제안하기입니다.</p>
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
                                            <p class="desc">신승지류유통의<br />오시는길입니다.</p>
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