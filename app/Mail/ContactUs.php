<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    protected const SUBJECT = 'Thanks for your message !';

    private string $message;
    private string $email;
    private string $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $name, string $email, string $message)
    {
        $this->message = $message;
        $this->email = $email;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->email)
            ->subject(self::SUBJECT)
            ->view('emails.contactus',
                [
                    'userMessage' => $this->message,
                    'name' => $this->name
                ]);
    }
}
