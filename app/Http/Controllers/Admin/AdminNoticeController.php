<?php

namespace App\Http\Controllers\Admin;

use App\Http\controllers\Controller;
use App\Services\AdminNoticeService;

class AdminNoticeController extends Controller
{
    // private \App\Service\AdminNoticeService $noticeService;

    public function __construct(AdminNoticeService $noticeService)
    {
        $this->noticeService = $noticeService;
    }

    public function index()
    {
        $data['boardList'] = $this->noticeService->getBoardList();

        return view('admin.notice.list')->with($data);
    }
}
