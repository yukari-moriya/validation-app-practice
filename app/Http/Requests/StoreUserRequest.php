<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ];
    }
}
public function messages()
{
    return [
        'name.required' => '名前は必須です',
        'name.max' => '名前は50文字以内で入力してください',
        'email.required' => 'メールアドレスは必須です',
        'email.email' => 'メールアドレスの形式が正しくありません',
        'email.unique' => 'このメールアドレスは既に使用されています',
        'password.required' => 'パスワードは必須です',
        'password.min' => 'パスワードは8文字以上で入力してください',
        'password.confirmed' => 'パスワードが一致しません',
    ];
}
