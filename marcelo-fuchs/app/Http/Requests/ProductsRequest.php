<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'required|max:100',
            'sku' => 'required|max:100|unique:products,sku,'. $this->id,
            'description' => 'required',
            'price' => 'required|numeric|between:0.00,999999999999.99',
        ];
    }

}
