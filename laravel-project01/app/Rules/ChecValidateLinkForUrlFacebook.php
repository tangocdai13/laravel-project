<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ChecValidateLinkForUrlFacebook implements Rule
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
        $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.facebook([\/\w \.-]*)*\/?$/';

        return preg_match($regex, $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Vui lòng nhập đúng định dạng. Ví dụ : https://www.facebook.com/tangocdai13/';
    }
}
