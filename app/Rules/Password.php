<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Password implements Rule
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
        $uppercase = preg_match('@[A-Z]@', $value);
        $lowercase = preg_match('@[a-z]@', $value);
        $number    = preg_match('@[0-9]@', $value);
        $special   = preg_match('/[^a-zA-Z\d]/', $value);

        if(strlen($value) < 5 || strlen($value) > 32)
        {
            return false;
        }
        if($uppercase && ($lowercase || $number || $special))
        {
            return true;
        }
        elseif(($uppercase || $lowercase || $number) && $special){
            return true;
        }
        elseif(($uppercase || $lowercase || $special) && $number)
        {
            return true;
        }

        
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
