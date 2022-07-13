<?php

namespace App\Http\Controllers;


class EmploymentController extends Controller
{
    public $menu = ['채용정보', '지원서제출', '인재상'];

    public function info()
    {
        $data['menu'] = $this->menu;
        return view('employment.info')->with($data);
    }

    public function apply()
    {
        $data['menu'] = $this->menu;
        return view('employment.apply')->with($data);
    }

    public function recruit()
    {
        $data['menu'] = $this->menu;
        return view('employment.recruit')->with($data);
    }
}
