@include('layout.header')
<script src="{{ URL::asset('js/slippry.min.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('css/slippry.css') }}">
<div class="visual-area2">
    <!-- <div id="fullpage">
		<div class='quick'><ul></ul></div>
		<div class="fullsection full1" pageNum="1"><img src="{{ URL::asset('img/main/slide2-1.jpg') }}" alt=""></div>
		<div class="fullsection full2" pageNum="2"><img src="{{ URL::asset('img/main/slide2-2.jpg') }}" alt=""></div>
		<div class="fullsection full3" pageNum="3"><img src="{{ URL::asset('img/main/slide2-3.jpg') }}" alt=""></div>
		<div class="fullsection full4" pageNum="4"><img src="{{ URL::asset('img/main/slide2-4.jpg') }}" alt=""></div>
	</div> -->
    <!-- <nav class="full-screen">
        <ul>
            <li>
                <img src="{{ URL::asset('img/main/slide2-1.jpg') }}" alt="">
            </li>
            <li>
                <img src="{{ URL::asset('img/main/slide2-2.jpg') }}" alt="">
            </li>
            <li>
                <img src="{{ URL::asset('img/main/slide2-3.jpg') }}" alt="">
            </li>
            <li>
                <img src="{{ URL::asset('img/main/slide2-4.jpg') }}" alt="">
            </li>
        </ul>
    </nav> -->
</div>
<div class="visual-area">
    <div class="visual-back">
        <ul id="slide">
            <li><img src="{{ URL::asset('img/main/slide1.jpg') }}" alt="" /></li>
            <li><img src="{{ URL::asset('img/main/slide5.jpg') }}" alt="" /></li>
            <li><img src="{{ URL::asset('img/main/slide2.jpg') }}" alt="" /></li>
            <li><img src="{{ URL::asset('img/main/slide3.jpg') }}" alt="" /></li>
            <li><img src="{{ URL::asset('img/main/slide4.jpg') }}" alt="" /></li>
        </ul>
    </div>
    <div class="visual-front">
        <div class="slide-btn">
            <a href="javascript:;" class="left">
                <img src="{{ URL::asset('img/main/left-arrow.png') }}" alt="">
            </a>
            <a href="javascript:;" class="right">
                <img src="{{ URL::asset('img/main/right-arrow.png') }}" alt="">
            </a>
        </div>
        <div class="slide-index">
            <ul>
                <li class="stop"><a href="javascript:;"><img src="{{ URL::asset('img/main/pasue.png') }}" alt=""></a></li>
            </ul>
        </div>
        <div class="slide-font">
            <p class="title">
                대한민국 종이유통 NO.1
                <br>
                신승지류유통
            </p>
            <p class="desc">
                21세기 새로운 기업으로 도약합니다.
            </p>
        </div>
    </div>
    <div class="slide-background"></div>
</div>
<script>
    $(function () {
        // $(document).on("click", ".back-area li", function (e) {
        //     e.preventDefault();
        //     var self = $(this);
        //     var imgHeight = $(".back-area li").find("img").height();
        //     if(self.hasClass("active"))
        //     {
        //         console.log(2);
        //     }
        //     else
        //     {
        //         $(".back-area li").animate({
        //             height: '30px',
        //         }, 500, 'swing');

        //         setTimeout(function() {
        //             self.animate({
        //                 height: imgHeight,
        //             }, 500);
        //         }, 800);
                
        //     }
        // });
        
        var slide = $("#slide").slippry({
            transition: 'fade',
            useCSS: true,
            speed: 1000,
            pause: 3000,
            auto: true,
            preload: 'visible',
            autoHover: false
        });

        $('.left').click(function () {
            slide.goToPrevSlide();
            return false;
        });
        $('.right').click(function () {
            slide.goToNextSlide();
            return false;
        });
        $('.stop').click(function () {
            slide.stopAuto();
        });
    })
</script>
<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script> -->
<script>
// $(document).ready(function(){
// 	fullset();
// 	quickClick();
// });
// function fullset(){
// 	var pageindex = $("#fullpage > .fullsection").size(); //fullpage 안에 섹션이(.fullsection) 몇개인지 확인하기
// 	for(var i=1;i<=pageindex;i++){
// 		$("#fullpage > .quick > ul").append("<li></li>");
// 	}
// 	$("#fullpage .quick ul :first-child").addClass("on"); //일단 화면이 로드 되었을때는 퀵버튼에 1번째에 불이 들어오게
// 	//마우스 휠 이벤트
// 	$(window).bind("mousewheel", function(event){
// 		var page = $(".quick ul li.on");
// 		//alert(page.index()+1);  // 현재 on 되어있는 페이지 번호
// 		if($("body").find("#fullpage:animated").length >= 1) return false;
// 		//마우스 휠을 위로
// 		if(event.originalEvent.wheelDelta >= 0) {
// 			var before=page.index();
// 			if(page.index() >= 0) page.prev().addClass("on").siblings(".on").removeClass("on");//퀵버튼옮기기
// 			var pagelength=0;
// 			for(var i=1; i<(before); i++)
// 			{
// 				pagelength += $(".full"+i).height();
// 			}
// 			if(page.index() > 0){ //첫번째 페이지가 아닐때 (index는 0부터 시작임)
// 				page=page.index()-1;
// 				$("#fullpage").animate({"top": -pagelength + "px"},1000, "swing");
// 			}
// 		}else{ // 마우스 휠을 아래로	
// 			var nextPage=parseInt(page.index()+1); //다음페이지번호
// 			var lastPageNum=parseInt($(".quick ul li").size()); //마지막 페이지번호
// 			//현재페이지번호 <= (마지막 페이지 번호 - 1)
// 			//이럴때 퀵버튼옮기기
// 			if(page.index() <= $(".quick ul li").size()-1){ 
// 				page.next().addClass("on").siblings(".on").removeClass("on");
// 			}
			
// 			if(nextPage < lastPageNum){ //마지막 페이지가 아닐때만 animate !
// 				var pagelength=0;
// 				for(var i = 1; i<(nextPage+1); i++){ 
// 					//총 페이지 길이 구하기
// 					//ex) 현재 1번페이지에서 2번페이지로 내려갈때는 1번페이지 길이 + 2번페이지 길이가 더해짐
// 					pagelength += $(".full"+i).height();
// 				}
// 				$("#fullpage").animate({"top": -pagelength + "px"},1000, "swing");
// 			}
			
// 		}
// 	});
// 	$(window).resize(function(){ 
// 		//페이지가 100%이기때문에 브라우저가 resize 될때마다 스크롤 위치가 그대로 남아있는것을 방지하기 위해
// 		var resizeindex = $(".quick ul li.on").index()+1;
		
// 		var pagelength=0;
// 		for(var i = 1; i<resizeindex; i++){ 
// 			//총 페이지 길이 구하기
// 			//ex) 현재 1번페이지에서 2번페이지로 내려갈때는 1번페이지 길이 + 2번페이지 길이가 더해짐
// 			pagelength += $(".full"+i).height();
// 		}

// 		$("#fullpage").animate({"top": -pagelength + "px"},0);
// 	});
// }
// // 사이드 퀵버튼 클릭 이동
// function quickClick(){
// 	$(".quick li").click(function(){
// 		var gnbindex = $(this).index()+1;
// 		var length=0;
// 		for(var i=1; i<(gnbindex); i++)
// 		{
// 			length+=$(".full"+i).height();
// 		}
// 		if($("body").find("#fullpage:animated").length >= 1) return false;
// 		$(this).addClass("on").siblings("li").removeClass("on");
		
// 		$("#fullpage").animate({"top": -length + "px"},800, "swing");
// 		return false;
// 	});
// }

</script>
@include('layout.footer')