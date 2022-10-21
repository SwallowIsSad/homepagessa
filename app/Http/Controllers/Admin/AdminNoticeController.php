<?php

namespace App\Http\Controllers\Admin;

use App\Http\controllers\Controller;
use App\Http\Requests\AdminNoticeDetailRequest;
use App\Services\AdminNoticeService;

class AdminNoticeController extends Controller
{
    public function __construct(AdminNoticeService $noticeService)
    {
        $this->noticeService = $noticeService;
    }

    public function index()
    {
        $data['boardList'] = $this->noticeService->getBoardList();

        return view('admin.notice.list')->with($data);
    }

    public function view(AdminNoticeDetailRequest $request)
    {
        $data['boardList'] = $this->noticeService->getBoardDetail($request->id);

        return view('admin.notice.view')->with($data);
    }

    public function writeView(AdminNoticeDetailRequest $request)
    {
        $data['boardList'] = $this->noticeService->getBoardDetail($request->id);

        return view('admin.notice.view')->with($data);
    }
}
