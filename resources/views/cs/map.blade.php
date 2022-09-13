@include('layout.header')
@include('layout.lnb')
@include('layout.maplnb')
<div class="cs-layout">
    <div class="inquire-layout">
        <div class="section-title" style="margin:0">
            오시는길
        </div>
        <img src="{{ URL::asset('img/map.png') }}" alt="" class="mapmap" style="display:none">
        <div class="map-layout">
            <nav class="map">
                <ul>
                    <li class="active">
                        <div class="map-label">
                            <p class="desc">
                                주소 : 서울특별시 중구 마른내로 116
                                <br>
                                (오장동, 신승빌딩) 5층
                            </p>
                            <p class="tel">
                                TEL : 02 - 2270 - 4900
                            </p>
                            <p class="fax">
                                FAX : 02 - 2270 - 4944
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="map-label type2">
                            <p class="desc">
                                주소 : 경기도 파주시 조리읍 당재봉로 14
                            </p>
                            <p class="tel">
                                TEL : 031 - 943 - 0918
                            </p>
                            <p class="fax">
                                FAX : 031 - 943 - 0917
                            </p>
                        </div>
                    </li>
                </ul>
                <div id="map" style="width:100%;height:400px;"></div>
            </nav>
        </div>
    </div>
</div>
<script>
    $(function () {
        $(document).on("click", ".check-text", function (e) {
            e.preventDefault();
            var $self = $(this);
            $self.find(".check").css("background", "#0152a4");
        });

        var icon = $(".mapmap").attr("src");
        var mapOptions = {
            center: new naver.maps.LatLng(37.564266, 127.0007765),
            zoom: 17
        };

        var map = new naver.maps.Map('map', mapOptions);

        var marker = new naver.maps.Marker({
            position: new naver.maps.LatLng(37.564266, 127.0007765),
            map: map,
            icon : {
                url: icon,
                origin: new naver.maps.Point(0, 0),
                anchor: new naver.maps.Point(20, 65)
                
            }
        });

        var map = 1;
        $(document).on("click", ".map-tab li", function (e) {
            e.preventDefault();
            var $self = $(this);

            
            console.log($self.data('type'));

            if($self.data('type') == 1)
            {
                var mapOptions = {
                    center: new naver.maps.LatLng(37.564266, 127.0007765),
                    zoom: 17
                };
                var map = new naver.maps.Map('map', mapOptions);
                var marker = new naver.maps.Marker({
                    position: new naver.maps.LatLng(37.564266, 127.0007765),
                    map: map,
                    icon : {
                        url: icon,
                        origin: new naver.maps.Point(0, 0),
                        anchor: new naver.maps.Point(20, 65)
                        
                    }
                });
            }
            else
            {
                var mapOptions = {
                    center: new naver.maps.LatLng(37.774081, 126.8361128),
                    zoom: 17
                };

                var map = new naver.maps.Map('map', mapOptions);
                var marker = new naver.maps.Marker({
                    position: new naver.maps.LatLng(37.774081, 126.8361128),
                    map: map,
                    icon : {
                        url: icon,
                        origin: new naver.maps.Point(0, 0),
                        anchor: new naver.maps.Point(20, 65)
                        
                    }
                });
            }

            if(!$self.hasClass("active"))
            {
                $(".map-tab").find("li").removeClass("active");
                $self.addClass("active");
                $(".map").find("li").removeClass("active");
                $(".map li").eq($self.index()).addClass("active")
            }
        })
    })
</script>
@include('layout.footer')