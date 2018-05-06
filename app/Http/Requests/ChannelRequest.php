<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChannelRequest extends FormRequest
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

            'subcategory_id' =>  'required|integer',
            'profile_id'    =>  'integer',
            'title'         => 'required|max:255',
            'slug'          => 'string|max:255',      
            'subtitle'      => 'required|string|max:255',
            'about'         => 'required',            
        ];
    }
}
