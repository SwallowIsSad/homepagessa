<!-- lnb -->
<div class="lnb-back">
</div>
<!-- lnb -->
<script>
    $(function () {
        var lnb = $(".header").offset().top;
        $(window).scroll(function() {
            var window = $(this).scrollTop();
            if(window != 0) {
                $(".header").addClass("lnb-fix");
                $(".lnb-back").css("margin-top", "100px");
            } else {
                $(".header").removeClass("lnb-fix");
                $(".lnb-back").css("margin-top", "0px");
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