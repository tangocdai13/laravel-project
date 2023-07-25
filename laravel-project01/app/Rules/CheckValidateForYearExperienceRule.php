<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckValidateForYearExperienceRule implements Rule
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
        $isLocation = $value != 4;
        $isNumber = is_numeric($value);
        $isMin = $value > 1;

        return $isLocation && $isNumber && $isMin;
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
