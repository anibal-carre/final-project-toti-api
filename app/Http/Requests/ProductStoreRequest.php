<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {

        if (request()->isMethod('post')) {
            return [
                'name' => 'nullable|string|max:255',
                'description' => 'nullable|string|max:255',
                'price' => 'nullable|numeric',
                'category' => 'nullable|in:banho,alimento,brinquedo',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ];
        } else {
            return [
                'name' => 'nullable|string|max:255',
                'description' => 'nullable|string|max:255',
                'price' => 'nullable|numeric',
                'category' => 'nullable|in:banho,alimento,brinquedo',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ];
        }
    }

    /*
    public function messages()
    {
        if (request()->isMethod('post')) {
            return [
                'name.required' => 'Name is required!',
                'description.required' => 'Description is required!',
                'price.required' => 'Price is required!',
                'category.required' => 'Category is required!',
                'image.required' => 'Image is required!'
            ];
        } else {
            return [
                'name.required' => 'Name is required!',
                'description.required' => 'Description is required!',
                'price.required' => 'Price is required!',
                'category.required' => 'Category is required!',
                'image.required' => 'Image is required!'
            ];
        }
    }
   */
}
