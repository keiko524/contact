<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'fullname'=>'required',
            'gender' => 'required',
            'email' => 'required',
            'postcode' => 'required',
            'address' => 'required',
            'opinion' => 'required|max:120',
        ];
    }

    public function message()
    {
        return[
            'fullname.required' => '入力必須です',
            'email.required' => '入力必須です',
            'postcode.required' => '入力必須です',
            'address.required' => '入力必須です',
            'address.email' => 'メールアドレスを入力してください',
            'opinion.required' => '入力必須です',
            'opinion.max' => ':max　文字以下で入力してください',
        ];
    }
}
