<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentreplyRequest extends FormRequest
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

        'profile_id' =>  'integer',
        'comment_id'    =>  'integer',           
        'body'       => 'required',

        ];
    }
}
