<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApproveUserPortfolio extends Mailable
{
    use Queueable, SerializesModels;
    public $new_user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($new_user)
    {
        $this->new_user = $new_user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('portfolio Approved')
                ->view('emails.approve_user_portfolio')->with('mailData', $this->new_user);
    }
}
