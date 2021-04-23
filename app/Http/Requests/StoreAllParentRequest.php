<?php

namespace App\Http\Requests;

use App\Models\AllParent;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAllParentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('all_parent_create');
    }

    public function rules()
    {
        return [
            'guardian' => [
                'required',
            ],
            'first_name' => [
                'string',
                'required',
            ],
            'surname' => [
                'string',
                'required',
            ],
            'occupation' => [
                'string',
                'required',
            ],
            'id_number' => [
                'string',
                'nullable',
            ],
            'p_o_box' => [
                'string',
                'required',
            ],
            'town' => [
                'string',
                'required',
            ],
            'town_code' => [
                'string',
                'required',
            ],
            'phone_no' => [
                'string',
                'required',
            ],
            'landline' => [
                'string',
                'nullable',
            ],
            'student_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
