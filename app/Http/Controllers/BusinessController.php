<?php

namespace App\Http\Controllers;


class BusinessController extends Controller
{
    public $menu = ['사업개요', '제품소개', '사업장소개', '협력업체'];

    public function index()
    {
        $data['menu'] = $this->menu;
        return view('business.index')->with($data);
    }

    public function product()
    {   
        $data['menu'] = $this->menu;
        return view('business.product')->with($data);
    }

    public function place()
    {   
        $data['menu'] = $this->menu;
        return view('business.place')->with($data);
    }

    public function cooperative()
    { 
        $data['menu'] = $this->menu;  
        return view('business.cooperative')->with($data);
    }
}
