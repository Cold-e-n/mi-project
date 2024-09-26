<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PosisiWarnaRequest extends FormRequest
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
            'wb_no' => ['required'],
            'sisir' => ['required'],
            'cones' => ['required'],
            'seksi' => ['required', 'integer'],
            'fabric_id' => ['required', 'integer'],
            'colour_id' => ['required', 'integer']
        ];
    }

}
