<!-- lnb -->
<div class="lnb-back">
    <p class="text">
        대한민국 종이유통 NO.1 신승지류유통
        <br>
        21세기 새로운 기업으로 도약합니다.
    </p>
    <img src="{{ URL::asset('img/lnb.jpg') }}" alt="">
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