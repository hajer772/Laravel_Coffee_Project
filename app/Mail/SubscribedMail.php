<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class SubscribedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subscriber;

    public function __construct($subscriber)
    {
        $this->subscriber = $subscriber;
    }

    public function envelope()
    {
        return new Envelope(
            from: new Address(settings()->newsletter_email, env('MAIL_FROM_NAME')),
            subject: settings()->website_title,
        );
    }

    public function content()
    {
        return new Content(
            view: 'mail.subscribed_mail',
        );
    }

    public function attachments()
    {
        return [];
    }
}
