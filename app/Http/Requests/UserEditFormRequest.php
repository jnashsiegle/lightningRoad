<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserEditFormRequest extends Request
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
        // default the value of the is_admin checkbox
    $this->merge(['isAdmin' => $this->input('isAdmin', 0)]);

        return [
            'name' => 'required',
            'email' => 'required',            
        ];
    }
}
