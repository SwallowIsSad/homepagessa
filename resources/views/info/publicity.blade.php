@include('layout.header')
@include('layout.infolnb')
<div class="sub-page-layout">
    <div class="sub-page-header">홍보센터</div>
    <div class="company-layout">
        <img src="{{ URL::asset('img/banner/infotest2.png') }}" alt="">
    </div>
    <div class="company-layout">
        <nav class="pub">
            <ul>
                <li>
                    <img src="{{ URL::asset('img/info/info1.png') }}" alt="">
                </li>
                <li>
                    <img src="{{ URL::asset('img/info/info2.png') }}" alt="">
                </li>
                <li>
                    <img src="{{ URL::asset('img/info/info3.png') }}" alt="">
                </li>
                <li>
                    <img src="{{ URL::asset('img/info/info4.png') }}" alt="">
                </li>
                <li>
                    <img src="{{ URL::asset('img/info/info5.png') }}" alt="">
                </li>
                <li>
                    <img src="{{ URL::asset('img/info/info6.png') }}" alt="">
                </li>
                <li>
                    <img src="{{ URL::asset('img/info/info7.png') }}" alt="">
                </li>
                <li>
                    <img src="{{ URL::asset('img/info/info8.png') }}" alt="">
                </li>
                <li>
                    <img src="{{ URL::asset('img/info/info9.png') }}" alt="">
                </li>
                <li>
                    <img src="{{ URL::asset('img/info/info10.png') }}" alt="">
                </li>
            </ul>
        </nav>
    </div>
</div>
@include('layout.footer')