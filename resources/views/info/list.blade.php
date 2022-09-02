
<div class="board-layout" id="#info-content2">
    <div style="width:1px; height:100px;"></div>
    <div class="section-title">
        정보공시
    </div>
    <div class="search-area">
        <div class="board-count">전체 2건</div>
        <form action="">
            <input type="text" placeholder="검색어를 입력해주세요" />
            <img src="{{ URL::asset('img/board/search.png') }}" alt="">
        </form>
    </div>
    <div class="info table">
        <div class="thead">
            <div class="num td">NO</div>
            <div class="title td">제목</div>
            <div class="file td">첨부</div>
            <div class="date td">작성일</div>
            <div class="hit td">조회</div>
        </div>
        <div class="tbody">
            <div class="tr">
                <div class="num td">2</div>
                <div class="title td">반기보고서 (2022.06)</div>
                <div class="file td"></div>
                <div class="date td">2022.06.26</div>
                <div class="hit td">223</div>
                <div class="content">
                    해당 내용은 첨부파일로 자세한 확인이 가능합니다.
                </div>
            </div>
            <div class="tr">
                <div class="num td">1</div>
                <div class="title td">분기보고서 (2022.03)</div>
                <div class="file td"></div>
                <div class="date td">2022.03.31</div>
                <div class="hit td">622</div>
                <div class="content">
                    해당 내용은 첨부파일로 자세한 확인이 가능합니다.
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="pagination">
        <ul>
            <li><img src="{{ URL::asset('img/board/left-arrow-gray.png') }}" alt=""></li>
            <li><span>1</span></li>
            <li class="active"><span>2</span></li>
            <li><span>3</span></li>
            <li><span>4</span></li>
            <li><span>5</span></li>
            <li><img src="{{ URL::asset('img/board/right-arrow.png') }}" alt=""></li>
        </ul>
    </div> -->
</div>
<script>
    $(function () {
        $(".info .tr").click(function (e) {
            e.preventDefault();
            var $self = $(this);
            if(!$self.find(".content").is(':visible'))
            {
                $(".info .content").hide();
                $self.find(".content").show();
            } else {
                $self.find(".content").hide();
            }
        });
    })
</script>