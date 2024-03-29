<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ProductsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required'],
            'sku' => ['required'],
            'category' => ['required'],
            'price' => ['required'],
            'stock' => ['required'],
        ];
    }

}
