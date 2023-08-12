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
     * @return array<string, mixed>
     */
    public function rules()
    {
       $rule = [];
       $curr = $this->route()->getActionMethod();
       switch($this->method()):
        case 'POST':
            switch($curr):
                case'add':
                    $rule=[
                        'name'=>'required',
                        'gender'=>'required',
                        'phone'=>'required',
                        'address'=>'required',
                        'image'=>'required|image|mimes:jpg,jpeg,png,gif|max:5120'
                    ];
                    break;
                endswitch;      
    endswitch;
return $rule;

       
    }
}
