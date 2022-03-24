<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required', 'max:100'],
            'description' => ['required'],
            'website_id' => ['required', 'exists:websites,id'],
        ];
    }
}
