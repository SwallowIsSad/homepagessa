<?php

namespace App\Http\Controllers;


class MainController extends Controller
{

    public function index()
    {
        $data['header'] = 'test';
        return view('main.main')->with($data);
    }
}
