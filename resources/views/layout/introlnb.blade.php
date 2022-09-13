<!-- lnb -->
<div class="lnb-back">
    <p class="text" style="width:100%;">
        신승지류유통은 고객에게 최상의 상품을,
        <br>
        제지사에는 더욱 편리한 유통망을 제공하는 지류 유통 전문기업 입니다.
    </p>
    <img src="{{ URL::asset('img/lnb.png') }}" alt="">
</div>
<!-- lnb -->
<script>
    $(function () {
        $(".lnb-nav a").click(function () {
            var $self = $(this);
            offsetId = '#' + $self.data('num')
            var offset = $(offsetId).offset();
            var height = offset.top - 55 + 'px';
            $('html').animate({scrollTop : height}, 400);
        })
    })
</script>