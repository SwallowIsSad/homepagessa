@include('layout.header')
@include('layout.boardlnb')
<div class="sub-page-layout">
    <div class="sub-page-header">정보공시</div>
</div>
<div class="board-layout">
    <div class="search-area">
        <div class="board-count">전체 4건</div>
        <form action="">
            <input type="text" placeholder="검색어를 입력해주세요" />
            <img src="{{ URL::asset('img/board/search.png') }}" alt="">
        </form>
    </div>
    <div class="table">
        <div class="thead">
            <div class="num td">NO</div>
            <div class="title td">제목</div>
            <div class="file td">첨부</div>
            <div class="date td">작성일</div>
            <div class="hit td">조회</div>
        </div>
        <div class="tbody">
            <div class="tr">
                <div class="num td">4</div>
                <div class="title td">전자어음안내4</div>
                <div class="file td"></div>
                <div class="date td">2022.07.05</div>
                <div class="hit td">6</div>
                <div class="content">
                    공지사항 내용
                    <br>
                    공지사항 내용
                    <br>
                    공지사항 내용
                </div>
            </div>
            <div class="tr">
                <div class="num td">4</div>
                <div class="title td">전자어음안내4</div>
                <div class="file td"></div>
                <div class="date td">2022.07.05</div>
                <div class="hit td">6</div>
                <div class="content">
                    공지사항 내용
                    <br>
                    공지사항 내용
                    <br>
                    공지사항 내용
                </div>
            </div>
            <div class="tr">
                <div class="num td">4</div>
                <div class="title td">전자어음안내4</div>
                <div class="file td"></div>
                <div class="date td">2022.07.05</div>
                <div class="hit td">6</div>
                <div class="content">
                    공지사항 내용
                    <br>
                    공지사항 내용
                    <br>
                    공지사항 내용
                </div>
            </div>
        </div>
    </div>
    <div class="pagination">
        <ul>
            <li><img src="{{ URL::asset('img/board/left-arrow-gray.png') }}" alt=""></li>
            <li><span>1</span></li>
            <li class="active"><span>2</span></li>
            <li><span>3</span></li>
            <li><span>4</span></li>
            <li><span>5</span></li>
            <li><img src="{{ URL::asset('img/board/right-arrow.png') }}" alt=""></li>
        </ul>
    </div>
</div>
<script>
    $(function () {
        $(".tr").click(function (e) {
            e.preventDefault();
            console.log(1);
            var $self = $(this);
            $self.find(".content").show();
            console.log($self.find(".content")[0]);
        });
    })
</script>
@include('layout.footer')