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
            $(".menu-up").show();
            $(".gnb-sub-menu-layout .gnb-sub-menu").hide();
            $(".gnb-sub-menu-layout .gnb-sub-menu").eq(5).show();
            if ($(window).width() < 992) {
                $(".all-menu-layout-mobile").css("right", "0");
                $(".mobile-back").show();
            }
            $(".all-menu-layout-mobile").css("right", "-1px");
        }
    });

    // 메뉴 닫기
    $(".menu-up").hover(function (e) {
        e.preventDefault();
        $(".gnb-sub-menu-area").slideUp(200);
        $(".gnb-sub-menu-layout .gnb-sub-menu").hide();
        $(".menu-up").hide();
    });

    $(document).on("click", ".mobile-back", function (e) {
        e.preventDefault();
        $(".all-menu-layout-mobile").css("right", "-100%");
        $(".gnb-sub-menu-layout .gnb-sub-menu").hide(200);
        $(".show-all img").removeClass("tra");
        $(".mobile-back").hide();
        $(".gnb-sub-menu-area").hide();
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

    $(window).scroll(function () {
        var scroll = $(window).scrollTop() + 450;

        $(".history-scroll").each(function (i, e) {
            if (scroll > $(e).offset().top) {
                $(e).addClass("blue");
            } else {
                $(e).removeClass("blue");
            }
        });
    });

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

    $(".product-layout-mobile li").click(function (e) {
        e.preventDefault();
        var self = $(this);
        if (self.find(".first").is(":visible")) {
            self.find(".first").hide();
            self.find(".layout").show();
        } else {
            self.find(".first").show();
            self.find(".layout").hide();
        }
    });

    // 문의 제안 체크박스 이벤트
    $(document).on("click", ".check-text", function (e) {
        e.preventDefault();
        var self = $(this);
        if (self.find(".on").is(":visible")) {
            self.find(".on").hide();
            self.find(".off").show();
        } else {
            self.find(".on").show();
            self.find(".off").hide();
        }
    });

    $(document).on("click", ".pi-content", function (e) {
        e.preventDefault();
        var self = $(this);
        if (self.find(".pi-text").is(":visible")) {
            self.find(".pi-text").hide();
            self.find(".pi-title img").css("transform", "rotate(180deg)");
        } else {
            self.find(".pi-text").show();
            self.find(".pi-title img").css("transform", "rotate(360deg)");
        }
    });

    $(document).on("click", ".all-mobile-box", function () {
        var self = $(this);
        $(".all-mobile-box").removeClass("active");
        self.addClass("active");
    });

    $(document).on("click", ".all-mobile-box a, .close", function (e) {
        e.preventDefault();
        var self = $(this);
        var data = $(document).width() * self.data("num") * -1 + "px";

        $(".swiper-wrapper").css(
            "transform",
            "translate3d(" + data + ", 0px, 0px)"
        );

        var top = self.data("top");
        window.location = "/#" + top;

        $(".menu-layout").find(".all-mobile-box").removeClass("active");
        $(".show-all img").removeClass("tra");
        $(".gnb-sub-menu-area").hide();
        $(".gnb-sub-menu-layout .gnb-sub-menu").hide();
        $(".all-menu-layout-mobile").css("right", "-100%");
        $(".menu-up").hide();
        $(".mobile-back").hide();
    });
});
