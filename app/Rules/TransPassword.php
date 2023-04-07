<?php

namespace App\Rules;

use App\Models\UserTransSecret;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class TransPassword implements Rule
{

    protected $check;
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
        $ut_pw=UserTransSecret::where('user_id',auth()->user()->id)->first();
        $appointmentTime = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $ut_pw->expires);
        if ($value !=$ut_pw->trans_password ) {
           $this->check=true;
        }
        if( $appointmentTime->lt(Carbon::now())){
            $this->check=false;
        }
        return $value ==$ut_pw->trans_password || !$appointmentTime->lt(Carbon::now());
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->check?'The Transaction password is incorrect.':'The Transaction password has expired.';
    }
}
