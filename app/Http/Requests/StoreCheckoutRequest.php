<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCheckoutRequest extends FormRequest
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
'first_name'=>'required|min:3|max:15',
'last_name'=>'required|min:3|max:15',
'company_name'=>'min:3|max:15|nullable',
'street_address'=>'required',
'appartment_info'=>'required',
'Order_notes'=>'nullable',
'country'=>'required',
'city'=>'required',
'state'=>'required',
'phone'=>'required',
'email'=>'required|email',
        ];
    }
}
