<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubscriberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth('sanctum')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'nullable|email|unique:subscribers,email',
            'phone' => 'nullable|unique:subscribers,phone',
            'name' => 'nullable|string|max:100',
            'country_code' => 'required|string|size:2|exists:countries,code2'
        ];
    }

    public function withValidator($validator):void{
        $validator->after(function($validator){
           if(!$this->email && !$this->phone && !$this->push_token){
               $validator->errors()->add('chanels', 'At least one of email, phone or push_token must be provided');
           }
        });
    }
}
