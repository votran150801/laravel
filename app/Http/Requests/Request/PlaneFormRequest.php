<?php

namespace App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PlaneFormRequest extends FormRequest
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
        $formRules = [
            "name" => [
                "required",
                Rule::unique('planes')->ignore($this->id)
            ],
            "file_upload" => [
                "required",
                "mimes:jpg,png,jepg"
            ],
        ];
        if($this->id == null){
            $formRules['file_upload'][] = "required";
        }
        return $formRules;
    }
    public function messages(){
            return[
                'name.required' => "bạn hãy nhập tên máy bay",
                'name.unique' => "Máy bay này đã tồn tại.Xin mời nhập tên khác",
                'file_upload.required' => "Bạn chưa thêm ảnh ?",
                'file_upload.mimes' => "Ảnh của bạn phải đúng định dạng jpg , png. Xin mời xem lại"
            ];
    }
   
}
