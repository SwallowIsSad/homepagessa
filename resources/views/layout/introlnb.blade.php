<style>
    .lnb-bus{
        background-image: url("{{ URL::asset('img/lnb400.png') }}");
        background-size:100% 400px;
    }
</style>
<!-- lnb -->
<div class="lnb-height">
    <div class="lnb-back lnb-layout lnb-bus">
    </div>
    <p class="text">
        (주)신승아이엔씨는 고객에게 최상의 상품을,
        <br>
        제지사에는 더욱 편리한 유통망을 제공하는 지류 유통 전문기업 입니다.
    </p>
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