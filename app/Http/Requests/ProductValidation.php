<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductValidation extends FormRequest
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
            //
                "nama_product" => "string|min:3|required",
                "harga" => "integer|required",
                "stok" => "integer",
                "color" => "string|required",
                "image" => "required|image|mimes:jpeg,png,jpg|max:2048",
                "description" => "required",
        ];
    }
}
