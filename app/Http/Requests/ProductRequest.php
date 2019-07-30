<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return  [
            'name'          => 'required|string|max:255',
            'brand_id'      => 'required|numeric|exists:brands,id',
            'user_id'       => 'required|numeric|exists:users,id',
            'category_id'   => 'required|exists:categories,id',
            'price'         => 'required|numeric',
            'discount'      => 'required|numeric',
            'tag'           => 'required|string',
            'status'        => 'required|numeric',
            'intro'         => 'required|string',
            "thumbnail"     => '',
            'images'        => 'required|array',
            'images.*.id'   => 'required|string|distinct',
        ];
    }

    // /**
    //  * Custom message for validation
    //  *
    //  * @return array
    //  */
    // public function messages()
    // {
    //     return [
    //         'email.required' => 'Email is required!',
    //         'name.required' => 'Name is required!',
    //         'password.required' => 'Password is required!'
    //     ];
    // }

    /**
     * [failedValidation [Overriding the event validator for custom error response]]
     * @param  Validator $validator [description]
     * @return [object][object of various validation errors]
     */
    public function failedValidation(Validator $validator)
    {
        //write your business logic here otherwise it will give same old JSON response
        throw new HttpResponseException(response()->json([
            'status'      => 'error',
            'status_code' => 422,
            'errors'      => $validator->errors()
        ], 422));
    }

    // /**
    //  * {@inheritdoc}
    //  */
    // protected function formatErrors(Validator $validator)
    // {
    //     return array_merge([
    //         'status' => 'error',
    //         'status_code' => 422, // Unable to process entity
    //         'message' => 'Invalid Fields',
    //     ],$validator->errors()->all());
    // }
}
