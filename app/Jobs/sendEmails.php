<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class sendEmails implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private Notification $notif;

    /**
     * Create a new job instance with the email to send.
     *
     * @return void
     */
    public function __construct(Notification $notif)
    {
        $this->notif = $notif;
    }

    /**
     * Send the email
     *
     * @return void
     */
    public function handle()
    {
        Mail::send($this->notif);
    }
}
