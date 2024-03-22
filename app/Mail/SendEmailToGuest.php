<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEmailToGuest extends Mailable
{
    use Queueable, SerializesModels;

    public $voucherData;

    public $userData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($voucherData,$userData)
    {
        
        $this->voucherData = $voucherData;

        $this->userData = $userData;
    
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: "Your Voucher to BVR Bali Holiday Rentals",
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.send-email-to-guest',
            with: [
                'voucherData' => $this->voucherData,
                'userData' => $this->userData,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
