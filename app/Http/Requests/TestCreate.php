<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\NameRule;

class TestCreate extends FormRequest
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
            'name' => ['required', 'max:255', 'string', new NameRule()],
            'description' => 'required|string',
            'show' => 'required | in:1,0',
            'status' => 'required | in:enable,disable'
        ];
    }
    public function attributes()
    {
        return [
            'name' => trans('test.form_field.name'),
            'description' => trans('test.form_field.description')
        ];
    }
}
