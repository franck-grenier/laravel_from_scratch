<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotifController extends Controller
{
    public function show(Request $request)
    {
        return view('spatial.notifs', [
            'notifs' => tap($request->user()->unreadNotifications)->MarkAsRead()
        ]);

    }
}
