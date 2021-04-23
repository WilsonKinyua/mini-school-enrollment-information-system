<?php

namespace App\Http\Requests;

use App\Models\AllStudent;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAllStudentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('all_student_edit');
    }

    public function rules()
    {
        return [
            'surname' => [
                'string',
                'required',
            ],
            'name' => [
                'string',
                'required',
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
            'email' => [
                'string',
                'required',
            ],
            'village' => [
                'string',
                'required',
            ],
            'county' => [
                'required',
            ],
            'country' => [
                'required',
            ],
            'date_of_birth' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'gender' => [
                'required',
            ],
            'kcpe_grade' => [
                'string',
                'required',
            ],
            'kcpe_total_marks' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'disabled' => [
                'required',
            ],
            'admission_number' => [
                'string',
                'required',
            ],
            'status' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
