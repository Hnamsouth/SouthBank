<?php
use Pusher\Pusher;


if(!function_exists('notify')){
    /**
     * @throws \Pusher\PusherException
     * @throws \Pusher\ApiErrorException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    function notify($my_channel, $my_event, $data){
        $options = array(
            'cluster' => env('PUSHER_APP_CLUSTER'),
            'useTLS' => true
        );
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );
        $data['confirm']=true;
        $data['message'] = 'new order added!! do you want to reload this page';
        $pusher->trigger($my_channel, $my_event, $data);
    }
}
