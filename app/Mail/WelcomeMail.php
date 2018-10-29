<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

        public $request;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Welcome to LandLagos')
                    ->view('emails.welcomeemail');
                    //send message with attachment
                    // ->attach(public_path().'/pdf/landlagos-form.pdf', [
                    //     'as' => 'landlagos-form.pdf',
                    //     'mime' => 'landlagos/pdf',
                    // ])
                    /* ->attach(public_path().'/pdf/landlagos-form.pdf', [
                        'as' => 'landlagos-form.pdf',
                        'mime' => 'landlagos/pdf',
                    ]); */
    }
}
