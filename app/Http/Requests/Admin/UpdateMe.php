<?php

namespace Disaster\Http\Requests\Admin;

use Disaster\Http\Requests\Request;

class UpdateMe extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(\Auth::check())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'new_password' => 'required_with:current_password|min:6',
            'confirm_password' => 'required_with:new_password | same:new_password'
        ];
    }
}
