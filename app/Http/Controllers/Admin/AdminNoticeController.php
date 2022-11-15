<?php

namespace App\Http\Controllers\Admin;

use App\Http\controllers\Controller;
use App\Http\Requests\AdminNoticeDetailRequest;
use App\Http\Requests\AdminNoticeAddRequest;
use App\Http\Requests\AdminNoticeEditRequest;
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

    public function addView()
    {
        return view('admin.notice.write');
    }

    public function add(AdminNoticeAddRequest $request)
    {
        $this->noticeService->addBoard($request->validated());
        $data['success'] = 'success';
        $data['message'] = '작성 완료';
        return view('admin.notice.write')->with($data);
    }

    public function editView(AdminNoticeDetailRequest $request)
    {
        $data['boardList'] = $this->noticeService->getBoardDetail($request->id);

        return view('admin.notice.edit')->with($data);
    }

    public function edit(AdminNoticeEditRequest $request)
    {
        $this->noticeService->edit($request->validated());
        return back();
    }
}
