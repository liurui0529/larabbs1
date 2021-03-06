<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
class UserRequest extends FormRequest
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
            'name' => 'required|between:3,25|regex:/^[A-Za-z0-9\-\_]+$/|unique:users,name,' . Auth::id(),
            'email' => 'required|email',
            'introduction' => 'max:80',
            'avatar' => 'mimes:jpeg,png,gif,jpg,bmp|dimensions:min_width=200,min_height=200',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '用户名不能为空',
            'name.between' => '用户名必须是3至25个字符之间',
            'name.regex' => '用户名必须是大小写字母、数字、短横行及下划线',
            'name.unique' => '用户名已经存在，请尝试其他用户名',
            'email.required' => '邮箱不能为空',
            'email.email' => '邮箱地址不正确',
            'introduction' => '用户简介内容不能超过80个字符',
            'avatar.mimes' => '图像必须是JPEG、png、gif、jpg、bmp格式',
            'avatar.dimensions' => '图像不够清晰，请上传宽高大于200像素的图片',
        ];
    }
}
