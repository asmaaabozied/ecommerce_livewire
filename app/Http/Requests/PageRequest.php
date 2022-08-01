<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [

            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'type' => 'required',
            'description_en' => 'nullable|string',
            'description_ar' => 'nullable|string',
            "status" => "nullable|boolean",

        ];


        return $rules;
    }
}
