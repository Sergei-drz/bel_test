<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
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
            'name'=> 'required|min:10|max:50',
            'position'=>'required|min:5|max:50',
            'date'=>'required|date|before:tomorrow',
            'salary'=> 'required|int',
            'chief'=>'required|min:10|max:50',
          ];
    }
}
