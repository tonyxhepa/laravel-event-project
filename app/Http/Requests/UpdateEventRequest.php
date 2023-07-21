<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:155|min:2',
            'address' => 'required|max:155|min:2',
            'image' => 'image|nullable',
            'start_date' => 'required',
            'end_date' => 'required',
            'start_time' => 'required',
            'country_id' => 'required',
            'city_id' => 'required',
            'description' => 'required',
            'num_tickets' => 'required',
            'tags.*' => 'required|exists:tags,id',
        ];
    }
}
