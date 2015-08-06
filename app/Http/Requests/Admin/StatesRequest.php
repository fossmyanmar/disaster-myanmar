<?php

namespace Disaster\Http\Requests\Admin;

use Disaster\Http\Requests\Request;

class StatesRequest extends Request
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
            'name' => 'required',
            'lat'   => 'required|between:-90,90',
            'lng' => 'required|between:-180,180'
        ];
    }
}
