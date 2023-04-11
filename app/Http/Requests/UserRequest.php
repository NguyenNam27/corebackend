<?php

namespace App\Http\Requests;

use App\Enums\UserTypesEnum;
use App\Traits\Request;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    use Request;

    protected function getModel() : string
    {
        return 'Users';
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
        ];
    }
    protected function prepareForValidation()
    {
        if (!$this->has('user_type')) {
            $this->merge([
                'user_type' => (string)UserTypesEnum::walk_in(),
            ]);
        }
//        if (!$this->has('roles')) {
//            $this->merge([
//                'roles' => (string)RolesEnum::guest(),
//            ]);
//        }
    }
}
