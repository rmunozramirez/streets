<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
                    
        'user_id'       => 'integer|max:255',
        'role_id'       => 'integer',
        'title'         => 'required|string|max:255',
        'slug'          => 'string|max:255',
        'birthday'      => 'date', 
        'about'         => 'required',
        'image'         => 'image',           
        'web'           => 'string|max:255',
        'facebook'      => 'string|max:255',
        'googleplus'    => 'string|max:255',
        'twitter'       => 'string|max:255',
        'linkedin'      => 'string|max:255',
        'youtube'       => 'string|max:255',
        ];
    }
}

