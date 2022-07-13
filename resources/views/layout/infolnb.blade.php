<style>
    .lnb-info{
        background-image: url("{{ URL::asset('img/banner/banner5.jpg') }}");
    }
</style>
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
<div class="lnb-back lnb-info">
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

    })
</script>