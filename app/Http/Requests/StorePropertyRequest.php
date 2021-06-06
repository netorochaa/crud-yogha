<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePropertyRequest extends FormRequest
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
            'name'      => 'required|max:50',
            'city'      => 'required|max:50',
            'occupant'  => 'required|numeric|min:1|max:99',
            'bedroom'   => 'required|numeric|min:1|max:99',
            'restroom'  => 'required|numeric|min:1|max:99'
        ];
    }
}
