<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckValidateUrlRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $isLocation = null;
        $isUrl = null;
        $url = str_replace(["ä","ö","ü"], ["ae", "oe", "ue"], $value);

        if ($value != 4) {
            $isLocation = true;
        }
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            $isUrl = true;
        }


        if ($isLocation && $isUrl) {
            return true;
        }
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
