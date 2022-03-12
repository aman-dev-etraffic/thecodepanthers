<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApprovedUserProfile extends Mailable
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
        return $this->subject('Profile Approved')
                ->view('emails.approve_user_profile')->with('mailData', $this->new_user);
    }
}
