<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifications\TestNotification;
use App\Models\User;
use Pusher\Pusher;
use Auth;

class SendNotification extends Controller
{
    public function create()
    {
        return view('client.notification.send');
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $data = $request->only([
            'title',
            'content',
        ]);
        $user->notify(new TestNotification($data));
        $options = array(
            'cluster' => 'ap1',
            'encrypted' => true,
            // 'authTransport' => 'jsonp',
            // 'authEndpoint'=> 'http://myserver.com/pusher_jsonp_auth'
        );
        $pusher = new Pusher(
            '8a6adeb53a54a1e5d748',
            'dd0d1d9ea686b4aab052',
            '1020659',
            $options
        );
        $event = 'message1';
        $pusher->trigger('NotificationEvent', $event, $data);

        return view('client.notification.send');
    }
}
