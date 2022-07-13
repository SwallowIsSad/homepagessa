<?php

namespace App\Http\Controllers;


class CompanyController extends Controller
{
    public $menu = ['기업이념', 'CEO 인사', '회사연혁', '관계업체'];

    public function index()
    {
        $data['menu'] = $this->menu;
        return view('company.ceo')->with($data);
    }

    public function history()
    {
        $data['menu'] = $this->menu;
        return view('company.history')->with($data);
    }

    public function cooperative()
    {
        $data['menu'] = $this->menu;
        return view('company.cooperative')->with($data);
    }

    public function philosophy()
    {
        $data['menu'] = $this->menu;
        return view('company.philosophy')->with($data);
    }
}
