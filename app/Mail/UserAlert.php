<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserAlert extends Mailable
{
    use Queueable, SerializesModels;
    protected $product;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($product)
    {
        $this->product = $product;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'User Alert',
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
            view: 'lowstock-report-email',
            with: [
                'product' => $this->product
                // 'orderPrice' => $this->order->price,
            ],
        );
        // return $this->from(env('MAIL_FROM_ADDRESS'))->view('lowstock-report-email')->with('product', $this->product);
    }

    /**
     * Get the attachments for the messa ge.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
