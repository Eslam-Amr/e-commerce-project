<?php

namespace App\Http\Requests;

use App\Models\SellerRequest;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserSellerRequest extends FormRequest
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
            'email' => 'required|email',


        ];
    }
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($this->email !== auth()->user()->email) {
                $validator->errors()->add('email', 'Email isn\'t correct');
                return redirect()->back()->with('error', 'Email isn\'t correct');
            }
            if (SellerRequest::where('user_id', auth()->user()->id)->exists()){
                $validator->errors()->add('seller_request', 'Request already sent');
                return redirect()->back()->with('error', 'Request already sent');
// toastr()->error('Request already sent');
// flash()->error('Request already sent');
            }
        });
    }
}
