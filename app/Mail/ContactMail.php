<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $kontak;

    /**
     * Create a new message instance.
     */
    public function __construct($kontak)
    {
        $this->kontak = $kontak;
    }

    public function build()
    {
        return $this->subject('Pesan Contact')
            ->view('emails.contact');
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
