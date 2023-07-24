<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckValidateForYearExperienceRule implements Rule
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
        $isNumber = null;
        $isMin = null;

        if ($value != 4) {
            $isLocation = true;
        }
        if (is_numeric($value)) {
            $isNumber = true;
        }
        if ($value > 1) {
            $isMin = true;
        }

        if ($isLocation && $isNumber && $isMin) {
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
