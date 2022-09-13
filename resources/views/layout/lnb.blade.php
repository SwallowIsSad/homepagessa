<style>
    .lnb-ceo{
        background-image: url("{{ URL::asset('img/lnb.jpg') }}");
        background-size:100% 100%;
    }
</style>
<!-- lnb -->
<div class="lnb-height">
    <div class="lnb-back lnb-ceo lnb-layout">
    </div>
    <p class="text">
        대한민국 종이유통 NO.1 신승지류유통
        <br>
        21세기 새로운 기업으로 도약합니다.
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