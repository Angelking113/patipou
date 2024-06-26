<?php

namespace App\Mail;

use App\Models\Donation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DonationConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $donation;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Donation $donation)
    {
        $this->donation = $donation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.donation-confirmation')
                    ->subject('Confirmación de Donación');
    }
}
