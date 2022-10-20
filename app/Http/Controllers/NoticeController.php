<?php

namespace App\Http\Controllers;



class NoticeController extends Controller
{


    public $menu = ['공지사항', '정보공시', '주문시스템', '홍보센터'];

    public function notice()
    {
        $data['menu'] = $this->menu;
        return view('notice.list')->with($data);
    }

    public function view($num)
    {
        $data['num'] = $num;
        $data['menu'] = $this->menu;
        return view('notice.view')->with($data);
    }
}
