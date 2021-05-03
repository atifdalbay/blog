<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:100',
            'content' => 'required|max:10000',
            'summary' => 'required|max:255',
            'image' => 'nullable',
            'comment_status' => 'nullable',
            'cat_id' => 'required',
            'tag_id' => 'required'
        ];
    }
}