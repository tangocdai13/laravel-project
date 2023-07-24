<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\CheckNumberForPhoneRule;
use App\Rules\CheckAddressRule;
use App\Rules\CheckValueForMemberRule;
use App\Rules\CheckValidateForYearExperienceRule;
use App\Rules\CheckValidateUrlRule;

class EmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    protected $locations;
    public function authorize()
    {
        $this->locations = request()->locations;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'min:2', 'max:255','alpha_num'],
            'email' => ['required', 'min:2', 'max:255','email'],
            'phone' => ['required', new CheckNumberForPhoneRule],
            'address' => ['required', 'min:5', new CheckAddressRule],
            'file' => ['required', 'mimes:png,jpg', 'max:10000'],
            'gender' => ['required', 'in:1,2'],
            'locations' => ['required'],
            'person_dependent' => ['nullable', 'integer', new CheckValueForMemberRule],
            'year_experience' => [new CheckValidateForYearExperienceRule, ],
            'facebookUrl' => [new CheckValidateUrlRule],
        ];
    }

    public function messages()
    {
        return [
            'alpha_num' => 'Không được đặt ký tự đặc biệt',
            'required' => ':attribute bắt buộc phải nhập',
            'min' => ':attribute nhỏ nhất :min ký tự',
            'max' => ':attribute lớn nhất :max ký tự',
            'email' => ':attribute phải đúng định dạng email',
            'gender.required' => ':attribute bắt buộc phải chọn 1 cái',
            'mimes' => ':attribute không đúng định dạng file'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Name Employee',
            'email' => 'Email Employee',
            'phone' => 'Phone Employee',
            'year_experience' => 'Số năm kinh nghiệm',
            'facebookUrl' => 'URL Facebook',
        ];
    }
}
