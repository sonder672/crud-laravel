<?php

namespace App\Http\Requests;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class contentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'uuid'=> 'exists:Apo\Models\uuid',
            'title' => 'required',
            'content' => 'required|max:1000',
            'user_id' => 'exists:App\Models\user_id',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'uuid.exists' => 'User not register',
            'title.required'=> 'A title is required',
            'content.required' => 'A content is required',
            'content.max' => 'A content cannot exceed 1000 characters',
            'user_id.exists' => 'User not found'
        ];
    }

    protected function failedAuthorization()
    {
        throw new AuthorizationException('You must be logged in to write contents');
    }
}