<?php

namespace App\Http\Controllers\Admin;

use App\Http\controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}
