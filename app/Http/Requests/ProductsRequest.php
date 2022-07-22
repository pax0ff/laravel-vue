<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ProductsRequest extends FormRequest
{
    public function rules() {
        return [
            'name' => ['required'],
            'sku' => ['required'],
            'category' => ['required'],
            'price' => ['required'],
            'stock' => ['required'],
        ];
    }
}
