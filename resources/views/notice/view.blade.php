@include('layout.header')
@include('layout.lnb')
<div class="board-layout">
    <div class="section-title">
        공지사항
    </div>
    <div class="board-view">
        <div><?php echo $num?></div>
        <div>제목</div>
        <div>내용</div>
    </div>
    <div><a href="{{ url('info/notice') }}">목록</a></div>
</div>
@include('layout.footer')