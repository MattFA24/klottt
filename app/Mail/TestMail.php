<?php

namespace App\Mail;

use App\Models\User; // <-- IMPORT THE USER MODEL
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user; 


    public function __construct(User $user) 
    {
        $this->user = $user; 
    }


    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Welcome to Cloud Computing 2025',
            from: "jevonganteng@mattf.team2lesgo.site",
           
        );
    }

 
    public function content(): Content
    {
        return new Content(
           
            view: 'email.registration', 
            
        
            with: [
                'user' => $this->user,
            ],
        );
    }


    public function attachments(): array
    {
        return [];
    }
}

