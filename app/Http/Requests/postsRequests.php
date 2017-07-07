<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class postsRequests extends FormRequest
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
            'txtTitle' => 'required|unique:posts,title',
            'cate_id' => 'required',
            'tbn' => 'required',
            'txtDesc' => 'required',
            'txtContent' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'required' => ":attribute không được bỏ trống",
        ];
    }

    public function attributes(){
        return [
                "txtTitle" => "Tiêu đề",
                "cate_id"  => "Category",
                "tbn" => "Thumbnail",
                "txtDesc" => "Miêu tả",
                "txtContent" => "Nội dung",
        ];
    }
}
