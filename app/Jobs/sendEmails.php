<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;

class sendEmails implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private Mailable $email;

    /**
     * Create a new job instance with the email to send.
     *
     * @return void
     */
    public function __construct(Mailable $email)
    {
        $this->email = $email;
    }

    /**
     * Send the email
     *
     * @return void
     */
    public function handle()
    {
        Redis::throttle('SendEmails')
            ->allow(1)
            ->every(10)
            ->then(function () {
                Mail::send($this->email);
            }, function () {
                return $this->release(10);
            });
    }
}
