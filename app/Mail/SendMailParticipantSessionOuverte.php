<?php

namespace App\Mail;

use App\Models\InscriptionSessionOuverte;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailParticipantSessionOuverte extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(InscriptionSessionOuverte $data, $session, $formation)
    {
        $this->data = $data;
        $this->session = $session;
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
                    ->subject('Demande d\'inscription à la session #' . $this->session . 'intitulée ' . $this->formation)
                     ->markdown('emails.send-mail-inscription-session-participant', [
                        'data' => $this->data,
                     ]);
    }
}
