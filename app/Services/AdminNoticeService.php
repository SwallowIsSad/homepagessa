<?php

namespace App\Services;

use App\Models\Notice;
use Exception;
use Log;

class AdminNoticeService
{
    /**
     * 조건에 맞는 게시글을 모두 받아온다.
     *
     */
    public function getBoardList()
    {
        return Notice::All();
        $notice = Notice::OrderBy('created_at', 'desc')->get();
        return $notice;
    }
    

    /**
     * 게시글 상세 내용.
     *
     * @return array
     */
    public function getBoardDetail(int $id)
    {
        $board['data'] =  Notice::where('id', $id)->first();
        // $detailQuery->increment('hit');

        $board['prev'] = Notice::where('id', '<', $id)->max('id');
        $board['next'] = Notice::where('id', '>', $id)->min('id');

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
            $datas['admin_id'] = auth('admin')->id();
            $board = AdminBoard::create($datas);

            if (array_key_exists('boardfile', $datas) && $datas['boardfile'] != []) {
                $this->addFile($board->id, $datas);
            }
        } catch (Exception $e) {
            Log::error($e);
            throw new Exception('게시글 작성 중 문제가 발생하였습니다.\n잠시 후 다시 시도해주세요.');
        }
    }

    /**
     * 게시글 수정.
     *
     * @return void
     * @throws \Exception
     */
    public function editBoard(int $id, array $datas)
    {
        try {
            $datas['admin_id'] = auth('admin')->id();
            AdminBoard::where('id', $id)->update(['title' => $datas['title'], 'content' => $datas['content']]);

            if (array_key_exists('boardfile', $datas) && $datas['boardfile'] != []) {
                $this->addFile($id, $datas);
            }

            if (array_key_exists('deletefile', $datas) && $datas['deletefile'] != []) {
                $this->deleteFile($datas['deletefile']);
            }
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
        $board = AdminBoard::find($id);
        $fileData['admin_id'] = $datas['admin_id'];

        foreach ($datas['boardfile'] as $file) {
            $path = $file->getClientOriginalName() == 'test1.jpg' && $file->getSize() == '1024' ? 'test' : 'uploads';
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
    public function boardDelete(array $idList)
    {
        try {
            $boardQuery = AdminBoard::with(['files'])->whereIn('id', $idList['id']);
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
