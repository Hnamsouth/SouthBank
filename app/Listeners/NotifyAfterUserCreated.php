<?php

namespace App\Listeners;

use App\Events\NewUserCreated;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Pusher\ApiErrorException;
use Pusher\PusherException;

class NotifyAfterUserCreated
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
     * @param  \App\Events\NewUserCreated  $event
     * @return void
     */
    public function handle(NewUserCreated $event)
    {
        //
        //        get user
        $user=$event->user;
//        send notify to admin
        try {
            notify('staff_user', 'user_created', $user->id,'New user created');
        } catch (GuzzleException|ApiErrorException|PusherException $e) {
        }
//        send email containing pass and PIN to user ,service information (acc number, card name,username_eBank)
        Mail::to($user->email)->send(new \App\Mail\NewUserCreated($user));
    }
}
