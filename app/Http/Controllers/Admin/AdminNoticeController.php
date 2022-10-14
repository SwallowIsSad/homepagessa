<?php

namespace App\Http\Controllers\Admin;

use App\Http\controllers\Controller;

class AdminNoticeController extends Controller
{
    public function index()
    {
        return view('admin.notice.list');
    }
}
