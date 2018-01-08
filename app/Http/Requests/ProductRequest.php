<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'txtname' =>'required',
            'price'  =>'required',
            'qty'=>'required',
            'stock'=>'required',
            'status'=>'required'
        ];
    }
    public function messages()
    {
        return [
        'txtname.required' => 'Bạn chưa nhập tên sản phẩm',
        'price.required' => 'Bạn chưa nhập giá',
        'qty.required' => 'Bạn chưa nhập số lượng',
        'stock.required' => 'Bạn chưa nhập kho',
        'status.required' => 'Bạn chưa nhập tình trạng'
    ];
    }
}
