<?php

namespace App\Services;

use App\Models\Info;
use Exception;
use Log;
use App\Services\UploadFileService;

class AdminInfoService
{
    /**
     * 조건에 맞는 게시글을 모두 받아온다.
     *
     */
    public function getBoardList()
    {
        $notice = Info::OrderBy('created_at', 'desc')->get();
        return $notice;
    }
    

    /**
     * 게시글 상세 내용.
     *
     * @return array
     */
    public function getBoardDetail(int $id)
    {
        $board['data'] =  Info::where('id', $id)->first();
        $board['prev'] = Info::where('id', '<', $id)->max('id');
        $board['next'] = Info::where('id', '>', $id)->min('id');

        return $board;
    }

    /**
     * 게시글 전체 개수를 반환한다.
     *
     * @return int
     */
    public function getBoardCount(array $conditions)
    {
        $search = $conditions['search'] ?? '';
        $query = AdminBoard::with(['admin', 'files'])->where('title', 'like', "%{$search}%");

        $collection = collect($conditions)->except(['limit', 'search']);
        $collection->each(function ($condition, $key) use ($query) {
            $query->where($key, $condition);
        });

        return $query->count();
    }

    /**
     * 게시글 작성.
     *
     * @return void
     * @throws \Exception
     */
    public function addBoard(array $datas)
    {
        try {
            $board = Info::create($datas);
            if (array_key_exists('boardfile', $datas) && $datas['boardfile'] != []) {
                $this->addFile($board->id, $datas);
            }
        } catch (Exception $e) {
            Log::error($e);
            dd($e);
            throw new Exception('게시글 작성 중 문제가 발생하였습니다.\n잠시 후 다시 시도해주세요.');
        }
    }

    /**
     * 게시글 수정.
     *
     * @return void
     * @throws \Exception
     */
    public function edit(array $datas)
    {
        try {
            $aa = Info::where('id', $datas['id'])->update(['title' => $datas['title'], 'content' => $datas['content'], 'hit' => $datas['hit'], 'kind' => $datas['kind']]);
        } catch (Exception $e) {
            Log::error($e);
            throw new Exception('게시글 수정 중 문제가 발생하였습니다.\n잠시 후 다시 시도해주세요.');
        }
    }

    /**
     * 게시글 파일 업로드.
     *
     * @return void
     */
    public function addFile(int $id, array $datas)
    {
        $board = Info::find($id);
        foreach ($datas['boardfile'] as $file) {
            $path = 'public';
            $fileData['filename'] = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $getUniqid = uniqid();
            $fileData['savename'] = $file->storeAs($path, $getUniqid . '.' . $extension);
            $board->files()->create($fileData);
        }
    }

    /**
     * 게시글 파일 삭제.
     *
     * @return void
     */
    public function deleteFile(array $ids)
    {
        try {
            UploadFile::destroy($ids);
        } catch (Exception $e) {
            Log::error($e);
            throw new Exception('게시글 삭제 중 문제가 발생하였습니다.\n잠시 후 다시 시도해주세요.');
        }
    }

    /**
     * 게시글 삭제.
     *
     * @return void
     * @throws \Exception
     */
    public function boardDelete(array $data)
    {
        try {
            $boardQuery = Info::with(['files'])->where('id', $data['id']);
            $file = new \App\Services\UploadFileService();
            $file->fileDelete(
                $boardQuery
                    ->get()
                    ->pluck('files')
                    ->flatten()
            );
            $boardQuery->delete();
        } catch (Exception $e) {
            Log::error($e);
            throw new Exception('게시글 삭제 중 문제가 발생하였습니다.\n잠시 후 다시 시도해주세요.');
        }
    }
}
