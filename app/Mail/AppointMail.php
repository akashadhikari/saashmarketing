<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
// use Illuminate\Contracts\Queue\ShouldQueue;

class AppointMail extends Mailable
{
    use Queueable, SerializesModels;

    public $appoint;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($appoint)
    {
        $this->data = $appoint;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->view('appoint.placed')
                    ->from('info@saashmarketing.com')
                    ->to($this->data->email,$this->data->name)
                    ->subject('Appointment has been fixed')
                    ->with('data', $this->data->email);

    }
}
