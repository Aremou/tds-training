<?php

namespace App\Mail;

use App\Models\Formation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Models\SessionOuverte;
use Illuminate\Queue\SerializesModels;
use App\Models\InscriptionSessionOuverte;

class SendMailNewsletterSessionOuverte extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(SessionOuverte $data, Formation $formation)
    {
        $this->data = $data;
        $this->formation = $formation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@technodatasolutions.bj')
                    ->subject('Ouverte d\une nouvelle session intitulée ' . $this->formation['nom'])
                    ->markdown('emails.send-mail-newsletter-session-ouverte', [
                        'data' => $this->data,
                        'formation' => $this->formation,
                    ]);
    }
}
