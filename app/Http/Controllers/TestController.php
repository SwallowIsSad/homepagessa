<?php

namespace App\Http\Controllers;


class TestController extends Controller
{
    public $menu = ['예시', '예시'];

    public function test()
    {
        $data['menu'] = $this->menu;
        return view('test.test')->with($data);
    }

    public function test2()
    {
        $data['menu'] = $this->menu;
        return view('test.test2')->with($data);
    }
}
