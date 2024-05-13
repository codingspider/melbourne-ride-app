<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGetQouteRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'phone' => 'required',
            'pick_a_date' => 'required|string',
            'pick_time' => 'required|string',
            'am_pm' => 'required|string',
            'service' => 'required|string',
            'pessengerNo' => 'required|integer',
            'vehicle' => 'required|string',
            'description' => 'nullable|string',
        ];
    }
}
