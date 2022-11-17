<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Services\AdminInfoService;
use App\Http\Requests\InfoFileDownRequest;
use Illuminate\Support\Facades\Storage;

class NoticeController extends Controller
{
    public function __construct(AdminInfoService $infoService)
    {
        $this->infoService = $infoService;
    }

    public $menu = ['공지사항', '정보공시', '주문시스템', '홍보센터'];

    public function notice()
    {
        $data['boardList'] = $this->infoService->getBoardList();
        $data['menu'] = $this->menu;
        return view('notice.list')->with($data);
    }

    public function view($num)
    {
        $data['num'] = $num;
        $data['menu'] = $this->menu;
        return view('notice.view')->with($data);
    }

    public function down(InfoFileDownRequest $request)
    {
        $info = Info::find($request->id);
        foreach($info->files as $key => $file):
            return Storage::download($file->savename);
        endforeach;
    }
}
