<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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

            'studentIdFirst'=>'required',
            'studentIdLast'=>'required',
            'studentName'=>'required',
            'department'=>'required',
            'studentEmail'=>'required',
            'userType'=>'required',
            'studentPhone'=>'required',
        ];
    }

    public function messages (){

        return [

            "studentIdFirst.required"=> "Teacher Id is required",
            "studentIdLast.required"=> "Teacher Id is required",
            "studentName.required"=> "Teacher Name is required",
            "department.required"=> "Department is required",
            "studentEmail.required"=> "Teacher Email is required",
            "userType.required"=> "User Type is required",
            "studentPhone.required"=> "Teacher Phone is required",
        ];
    }
}
