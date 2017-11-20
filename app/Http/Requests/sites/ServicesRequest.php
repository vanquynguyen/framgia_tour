<?php

namespace App\Http\Requests\sites;

use Illuminate\Foundation\Http\FormRequest;

class ServicesRequest extends FormRequest
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
            'name' => 'required|max:191',
            'address' => 'required|max:191',
            'image' => 'required|max:191',
            'price' => 'required|integer|max:10000',
        ];
    }
}
