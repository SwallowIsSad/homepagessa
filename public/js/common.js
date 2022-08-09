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
            $(".gnb-sub-menu-area").hide();
            $(".gnb-sub-menu-layout .gnb-sub-menu").hide();
        } else {
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
            $(".top").show();
        } else {
            $(".top").hide();
        }
    });

    // 모바일 메뉴 액션 처리
    $(document).on("click", ".all-mobile-box", function () {
        var self = $(this);
        if (!self.hasClass("active")) {
            $(".all-mobile-box").removeClass("active");
            self.addClass("active");
        }
    });
});
