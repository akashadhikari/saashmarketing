<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnquiryMail extends Mailable
{
    use Queueable, SerializesModels;
    public $price;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($price,$basics)
    {
        $this->data = $price;
        $this->details = $basics;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->from('info@saashmarketing.com')
                    ->subject('Enquiry Price')
                    ->view('mails.enquirymail')
                    ->with(
                        ['data' => $this->data,
                         'details' => $this->details
                            ]);
    }
}
