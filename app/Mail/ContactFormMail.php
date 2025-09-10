<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Data dari form yang akan dikirim.
     *
     * @var array
     */
    public $formData;

    /**
     * Buat instance message baru.
     *
     * @param array $formData
     * @return void
     */
    public function __construct(array $formData)
    {
        $this->formData = $formData;
    }

    /**
     * Dapatkan "amplop" pesan (subjek, pengirim, dll).
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address(env('MAIL_FROM_ADDRESS', 'noreply@example.com'), env('MAIL_FROM_NAME', 'My Portfolio')),
            replyTo: [
                new Address($this->formData['email'], $this->formData['name'])
            ],
            subject: 'New Message from Portfolio Contact Form',
        );
    }

    /**
     * Dapatkan konten pesan (view yang akan dirender).
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.contact-form',
        );
    }

    /**
     * Dapatkan lampiran untuk pesan.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}