<?php

namespace App\Listeners;

use App\Events\NewAccountCreated;
use App\Mail\SendEmailVerification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class NotifyAfterAccountCreated
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\NewAccountCreated  $event
     * @return void
     */
    public function handle(NewAccountCreated $event)
    {
//  get account
        $acc=$event->account;
// send notify to admin
        notify('my-channel','my-event',$acc);
// send mail to user
        Mail::to($acc->email)->send(new SendEmailVerification('hello'));
    }
}
