<?php

namespace App\Http\Controllers;


class CsController extends Controller
{
    public $menu = ['문의하기', '제안하기', '오시는길'];

    public function inquire()
    {
        $data['menu'] = $this->menu;
        return view('cs.inquire')->with($data);
    }

    public function suggest()
    {
        $data['menu'] = $this->menu;
        return view('cs.suggest')->with($data);
    }

    public function map()
    {
        $data['menu'] = $this->menu;
        return view('cs.map')->with($data);
    }
}
