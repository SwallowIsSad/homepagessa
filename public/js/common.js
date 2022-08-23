$(function () {
    // gnb 호버 이벤트
    $(".gnb-menu").hover(function () {
        var $self = $(this);
        $(".gnb-sub-menu-area").show();
        $(".gnb-sub-menu-layout .gnb-sub-menu").hide();
        $(".gnb-sub-menu-layout .gnb-sub-menu").eq($self.data("num")).show();
        $(".menu-up").show();
    });

    // 전체 메뉴 이벤트
    $(document).on("click", ".show-all", function (e) {
        e.preventDefault();
        if ($(".gnb-sub-menu-layout .gnb-sub-menu").is(":visible")) {
            $(".show-all img").removeClass("tra");
            $(".gnb-sub-menu-area").hide();
            $(".gnb-sub-menu-layout .gnb-sub-menu").hide();
        } else {
            $(".show-all img").addClass("tra");
            $(".gnb-sub-menu-area").show();
            $(".gnb-sub-menu-layout .gnb-sub-menu").hide();
            $(".gnb-sub-menu-layout .gnb-sub-menu").eq(5).show();
        }
    });

    // 메뉴 닫기
    $(".menu-up").hover(function (e) {
        e.preventDefault();
        $(".gnb-sub-menu-area").slideUp(200);
        $(".gnb-sub-menu-layout .gnb-sub-menu").hide();
        $(".menu-up").hide();
    });

    // 탑으로
    $(document).on("click", ".top", function (e) {
        e.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, 400);
    });

    $(window).scroll(function () {
        var window = $(this).scrollTop();
        if (window > 500) {
            $(".top-btn").show();
        } else {
            $(".top-btn").hide();
        }
    });

    // 메뉴 클릭시 닫기
    $(document).on("click", ".gnb-sub-menu-area a", function () {
        $(".gnb-sub-menu-area").hide();
        $(".show-all img").removeClass("tra");
    });

    $(function () {
        $(window).scroll(function () {
            var scroll = $(document).scrollTop() + 450;

            $(".history-scroll").each(function (i, e) {
                if (scroll > $(e).offset().top) {
                    $(e).addClass("blue");
                } else {
                    $(e).removeClass("blue");
                }
            });
        });
    });

    $(function () {
        $(document).on("click", ".lnb-bar li", function (e) {
            e.preventDefault();
            var $self = $(this);
            $(".lnb-bar li").removeClass("active");
            $self.addClass("active");
            $(".box-layout").hide();
            $(".box-layout").eq($self.data("num")).show();
        });

        $(".image-area li").hover(
            function (e) {
                e.preventDefault();
                var $self = $(this);
                $self.find(".first").hide();
                $self.find(".layout").show();
            },
            function () {
                var $self = $(this);
                $self.find(".first").show();
                $self.find(".layout").hide();
            }
        );
    });
    $(".product-layout-mobile li").hover(function (e) {
        e.preventDefault();
        var $self = $(this);
        $self.find(".first").hide();
        $self.find(".layout").show();
    });
});
