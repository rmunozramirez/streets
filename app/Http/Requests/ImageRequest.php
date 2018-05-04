<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
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

            'profile_id'    =>  'required|integer',
            'name'         => 'required|max:255',
            'slug'          => 'string|max:255',      
            'subtitle'      => 'string|max:255',
            'alt'         => 'max:255',            

        ];
    }
}
