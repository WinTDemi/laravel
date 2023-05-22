<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formProducts extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:255',
            'description' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'A title is required',
            'title.max' => 'The title must be less than 255 characters',
            'description.required' => 'A description is required',
            'img.required' => 'An image is required',
            'img.image' => 'The img must be an image file',
            'img.mimes' => 'The img must be a file of type: jpeg, png, jpg, gif, svg',
            'img.max' => 'The img must be less than 2048 kilobytes'
        ];
    }
}
