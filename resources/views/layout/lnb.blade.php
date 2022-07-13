<!-- lnb -->
<div class="local-nav-layout">
    <div class="lnb-layout">
        <nav class="lnb-nav">
            <ul>
                <?php foreach($menu as $key => $value):?>
                <li>
                    <a href="javascript:;" data-num="content<?php echo $key + 1?>"><?php echo $value?></a>
                </li>
                <?php endforeach;?>
            </ul>
        </nav>
    </div>
</div>
<div class="lnb-back">
    <p class="text">
        신승지류유통은 고객에게 최상의 상품을,
        <br>
        제지사에는 더욱 편리한 	유통망을 제공하는
        <br>
        지류 유통 전문기업입니다.
    </p>
    <img src="{{ URL::asset('img/lnb.png?2') }}" alt="">
</div>
<!-- lnb -->
<script>
    $(function () {
        var lnb = $(".local-nav-layout").offset().top;
        $(window).scroll(function() {
            var window = $(this).scrollTop();
            if(lnb <= window) {
                $(".local-nav-layout").addClass("lnb-fix");
            } else {
                $(".local-nav-layout").removeClass("lnb-fix");
            }
        })

        $(".lnb-nav a").click(function () {
            var $self = $(this);
            offsetId = '#' + $self.data('num')
            var offset = $(offsetId).offset();
            var height = offset.top - 55 + 'px';
            $('html').animate({scrollTop : height}, 400);
        })
    })
</script>