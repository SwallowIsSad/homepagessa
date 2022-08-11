<?php

namespace App\Http\Controllers;


class MainController extends Controller
{

    public function index()
    {
        $data['header'] = 'test';
        if(!preg_match('/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipad|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|sagem|sharp|sie-|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', $_SERVER['HTTP_USER_AGENT'])):
            return view('main.main')->with($data);
        else:
            return view('main.mmain')->with($data);
        endif;
    }
}
