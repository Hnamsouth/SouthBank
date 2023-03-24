<?php

namespace App\Rules;

use App\Models\BalanceCardAccount;
use Illuminate\Contracts\Validation\Rule;

class AvailableBalance implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    protected $account;
    public function __construct($account)
    {
        //
        $this->account = $account;
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
        //
       $bl= BalanceCardAccount::where('account_id','=',$this->account)->first();
       return  $value <= $bl->balance;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The balance in the account is not enough to make the transaction.';
    }
}
