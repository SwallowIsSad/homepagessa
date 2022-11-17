<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminInfoDetailRequest;
use App\Http\Requests\AdminInfoDeleteRequest;
use App\Http\Requests\AdminInfoEditRequest;
use App\Http\Requests\AdminNoticeAddRequest;
use App\Services\AdminInfoService;

class AdminInfoController extends Controller
{
    public function __construct(AdminInfoService $infoService)
    {
        $this->infoService = $infoService;
    }

    public function index()
    {
        $data['boardList'] = $this->infoService->getBoardList();

        return view('admin.info.list')->with($data);
    }

    public function view(AdminInfoDetailRequest $request)
    {
        $data['boardList'] = $this->infoService->getBoardDetail($request->id);

        return view('admin.info.view')->with($data);
    }

    public function addView()
    {
        return view('admin.info.write');
    }

    public function add(AdminNoticeAddRequest $request)
    {
        $this->infoService->addBoard($request->validated());
        $data['success'] = 'success';
        $data['message'] = '작성 완료';
        return view('admin.info.write')->with($data);
    }

    public function editView(AdminInfoDetailRequest $request)
    {
        $data['boardList'] = $this->infoService->getBoardDetail($request->id);

        return view('admin.info.edit')->with($data);
    }

    public function edit(AdminInfoEditRequest $request)
    {
        $this->infoService->edit($request->validated());
        return back();
    }

    public function delete(AdminInfoDeleteRequest $request)
    {
        $this->infoService->boardDelete($request->validated());
        return redirect('/admin/info');
    }
}
