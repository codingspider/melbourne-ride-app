<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePackageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'features_id*' => 'required|integer|exists:features,id',
            'title' => 'required|string|max:255',
            'status' => 'required|numeric',
            'price' => 'required',
            'bg_color' => 'nullable|string|max:255'
        ];
    }
}
