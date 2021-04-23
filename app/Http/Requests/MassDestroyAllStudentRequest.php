<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\AllStudent;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAllStudentRequest extends FormRequest  {





public function authorize()
{
    abort_if(Gate::denies('all_student_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');




return true;
    
}
public function rules()
{
    



return [
'ids' => 'required|array',
    'ids.*' => 'exists:all_students,id',
]
    
}

}