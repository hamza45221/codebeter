<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProjectFormMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS', 'info@codebeter.com'), $this->data['fullname'])
            ->replyTo($this->data['email'], $this->data['fullname'])
            ->subject('New Project Inquiry')
            ->view('mail.project')
            ->with(['data' => $this->data]);
    }
}
