<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckAddressRule implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return !is_numeric($value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Trường :attribute không được chỉ nhập mỗi số';
    }
}
