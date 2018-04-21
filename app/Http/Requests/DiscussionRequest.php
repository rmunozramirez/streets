<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiscussionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'title'         =>  'required|max:255',
            'SUBtitle'      =>  'required|max:255',
            'slug'          =>  'string|max:255',      
            'about'          =>  'required',         
            'image'         =>  'image',
            'likes'         =>  'integer',
            'profile_id'    =>  'integer',

        ];
    }
}
