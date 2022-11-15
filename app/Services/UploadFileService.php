<?php

namespace App\Services;

use App\Models\UploadFile;

class UploadFileService
{
    /**
     * 파라미터로 받은 게시글들을 삭제한다.
     */
    public function fileDelete(\Illuminate\Support\Collection $deleteList): int
    {
        return UploadFile::destroy($deleteList->pluck('id'));
    }
}
