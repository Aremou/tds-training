<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMessage extends Mailable
{
    use Queueable;
    use SerializesModels;

    /**
     * Elements de contact.
     *
     * @var array
     */
    public $sendmessage;
    public $fr;
    public $nom;
    public $obj;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nom, $obj, $fr, $sendmessage)
    {
        $this->fr = $fr;
        $this->obj = $obj;
        $this->nom = $nom;
        $this->sendmessage = $sendmessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@technodatasolutions.bj')->view('emails.send-message')
                                                                            ->subject('Message d\'un utilisateur')
                                                                            ->with([
                                                                                'nom' => $this->nom,
                                                                                'email' => $this->fr,
                                                                                'objet' => $this->obj,
                                                                                'msg' => $this->sendmessage,
                                                                            ]);
    }
}
