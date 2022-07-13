<?php

namespace App\Http\Controllers;


class InfoController extends Controller
{
    public $menu = ['공지사항', '정보공시', '주문시스템', '홍보센터'];

    public function list()
    {
        $data['menu'] = $this->menu;
        return view('info.list')->with($data);
    }

    public function view($num)
    {
        $data['menu'] = $this->menu;
        return view('info.view')->with($data);
    }

    public function publicity()
    {
        $data['menu'] = $this->menu;
        return view('info.publicity')->with($data);
    }   
}
