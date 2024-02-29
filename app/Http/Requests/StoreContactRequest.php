<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:200'],
            'title' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:255'],
            'url' => ['url', 'nullable'],
            'gender' => ['required', 'boolean'],
            'age' => ['required'],
            'content' => ['required', 'string', 'max:255'],
            'caution' => ['required', 'accepted']
        ];
    }
}
