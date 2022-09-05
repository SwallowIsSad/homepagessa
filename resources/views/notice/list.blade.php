<?php if(!isset($header)):?>
    @include('layout.header')
<?php endif;?>
<?php if(!preg_match('/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipad|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|sagem|sharp|sie-|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', $_SERVER['HTTP_USER_AGENT'])):?>
    @include('layout.noticelnb')
<?php endif;?>

<div style="width:1px; height:100px; padding-top:30px;"></div>
<div class="section-title" id="info-content1">
    공지사항
</div>
<div class="board-layout">
    <div class="search-area">
        <div class="board-count">전체 3건</div>
        <form action="">
            <input type="text" placeholder="검색어를 입력해주세요" />
            <img src="{{ URL::asset('img/board/search.png') }}" alt="">
        </form>
    </div>
    <div class="table notice">
        <div class="thead">
            <div class="num td">NO</div>
            <div class="title td">제목</div>
            <div class="file td">첨부</div>
            <div class="date td">작성일</div>
            <div class="hit td">조회</div>
        </div>
        <div class="tbody">
            <div class="tr">
                <div class="num td">3</div>
                <div class="title td">전자어음안내4</div>
                <div class="file td"></div>
                <div class="date td">2022.08.23</div>
                <div class="hit td">23</div>
                <div class="content">
                    전자어음 첨부파일 확인 바랍니다.
                </div>
            </div>
            <div class="tr">
                <div class="num td">2</div>
                <div class="title td">신승 여름 휴가 안내</div>
                <div class="file td"></div>
                <div class="date td">2022.07.08</div>
                <div class="hit td">61</div>
                <div class="content">
                    8월 개인별로 휴가 신청 내주시면 됩니다.
                </div>
            </div>
            <div class="tr">
                <div class="num td">1</div>
                <div class="title td">공지사항입니다.</div>
                <div class="file td"></div>
                <div class="date td">2022.07.05</div>
                <div class="hit td">26</div>
                <div class="content">
                    회사 홈페이지가 새롭게 리뉴얼 되었습니다.
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="pagination">
        <ul>
            <li><img src="{{ URL::asset('img/board/left-arrow-gray.png') }}" alt=""></li>
            <li><span>1</span></li>
            <li><span>2</span></li>
            <li><span>3</span></li>
            <li><span>4</span></li>
            <li><span>5</span></li>
            <li><img src="{{ URL::asset('img/board/right-arrow.png') }}" alt=""></li>
        </ul>
    </div> -->
</div>
@include('info.list')
@include('info.publicity')
<script>
    $(function () {
        $(".notice .tr").click(function (e) {
            e.preventDefault();
            var $self = $(this);
            if(!$self.find(".content").is(':visible'))
            {
                $(".notice .content").hide();
                $self.find(".content").show();
            } else {
                $self.find(".content").hide();
            }
        });
    })
</script>
<?php if(!isset($header)):?>
    @include('layout.footer')
<?php endif;?>