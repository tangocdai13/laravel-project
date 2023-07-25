<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckValidateUrlRule implements Rule
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
        $url = str_replace(['ä', 'ö', 'ü'], ['ae', 'oe', 'ue'], $value);
        $isLocation = $value != 4;
        $isUrl = filter_var($url, FILTER_VALIDATE_URL);

        return $isLocation && $isUrl;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return ':attribute đang không chính xác';
    }
}
