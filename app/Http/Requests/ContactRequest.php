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
            'fullname' => ['required'],
            'gender' => ['required'],
            'email' => ['required', 'email'],
            'postcode' => ['required','regex:/^[0-9]{3}-[0-9]{4}$/'],
            'address' => ['required','nullable'],
            'opinion' => ['required','max:120']

        ];
    }

    public function messages() {
        return [
        "fullname.required" => "名前を入力してください。",
        "email.required" => "メールアドレスを入力してください。",
        "email.email" => "メールアドレスの形式で入力してください。",
        "postcode.required" => "郵便番号を入力してください",
        "address.required" => "住所を入力してください。",
        "opinion.required" => "ご意見を入力してください。",
        "opinion.max" => "120文字以下で入力してください。",
        ];
    }
}
