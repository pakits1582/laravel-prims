<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateOfficeRequest extends FormRequest
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
            'code' => ['required', 'string', 'max:255', Rule::unique('offices')->where(fn ($query) => $query->where('name', $this->name))->ignore($this->office->id)],
            'name' => ['required', 'string', 'max:255', Rule::unique('offices')->where(fn ($query) => $query->where('code', $this->code))->ignore($this->office->id)],
            'head_id' => 'nullable|sometimes|exists:employees,id',
        ];
    }
}
