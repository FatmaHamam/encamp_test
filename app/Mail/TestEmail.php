<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'support@encampadventures.com';
        $subject = 'Sales Enquiry - Dawki';
        $name = 'Kamal Dev';

        return $this->view('emails.test')
                    ->from($address, $name)                                        
                    ->subject($subject)
                    ->with([ 'test_message' => $this->data['message'] ]);
    }
}
