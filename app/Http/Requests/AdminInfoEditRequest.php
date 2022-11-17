<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminInfoEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, array<string>>
     */
    public function rules(): array
    {
        return [
            'id' => ['required', 'exists:infos'],
            'title' => ['required'],
            'title' => ['required'],
            'content' => ['required'],
            'hit' => ['required', 'numeric'],
            'kind' => ['required', 'numeric'],
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'id' => '공지 id값',
            'title' => '제목',
            'content' => '내용',
            'hit' => '조회수',
            'kind' => '종류',
        ];
    }
}
