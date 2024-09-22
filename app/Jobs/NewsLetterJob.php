<?php

namespace App\Jobs;

use App\Mail\NewsLetterMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class NewsLetterJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $emails;
    public $data;

    public function __construct($emails, $data)
    {
        $this->emails = $emails;
        $this->data = $data;
    }

    public function handle()
    {
        Mail::to($this->emails)->send(new NewsLetterMail($this->data));
    }
}
