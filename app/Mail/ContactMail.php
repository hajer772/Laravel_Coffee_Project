<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    public function envelope()
    {
        return new Envelope(
            from: new Address($this->contact->email, $this->contact->name),
            subject: 'New Contact From Website',
        );
    }

    public function content()
    {
        return new Content(
            view: 'mail.mail_request',
        );
    }


    public function attachments()
    {
//        $file = $this->contact->file()->first();
//        if ($file) {
//            $path = $file->getRawOriginal('path');
//            return [
//                Attachment::fromStorage($path),
//            ];
//        }

        //for attaching from request direct
//        if(isset($this->request_data['file']))
//            return Attachment::fromData(fn() => file_get_contents($this->request_data['file']), $this->request_data['file']->getClientOriginalName())->withMime($this->request_data['file']->getClientMimeType());
        return [
        ];
    }
}
