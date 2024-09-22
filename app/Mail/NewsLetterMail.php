<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewsLetterMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mail_data;

    public function __construct($mail_data)
    {
        $this->mail_data = $mail_data;
    }

    public function envelope()
    {
        return new Envelope(
            from: new Address(settings()->newsletter_email, env('MAIL_FROM_NAME')),
            subject: $this->mail_data['subject'],
        );
    }

    public function content()
    {
        return new Content(
            view: 'mail.news_letter',
        );
    }

}
