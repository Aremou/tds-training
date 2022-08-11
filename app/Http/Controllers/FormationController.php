<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailDemandeDevisFormateur;
use App\Mail\SendMailDemandeDevisParticipant;

class FormationController extends Controller
{
    public function send_devis_formation(Request $request){
        $request->validate([
            'formation' => 'required',
            'nbr_personne' => 'required|min:1',
            'email' => 'required',
            'civilite' => 'required',
            'prenom' => 'required',
            'nom' => 'required',
            'telephone' => 'required',
            'statut' => 'required',
            'code_postal' => 'required',
            'ville' => 'required',
            'pays' => 'required',
        ]);

        if($request->statut == 'entreprise'){
            $request->validate([
                'societe' => 'required',
                'fonction' => 'required',
            ]);
        }

        $data = [
            'formation' => $request->formation,
            'nbr_personne' => $request->nbr_personne,
            'renseignement' => $request->renseignement,
            'email' => $request->email,
            'civilite' => $request->civilite,
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'telephone' => $request->telephone,
            'statut' => $request->statut,
            'code_postal' => $request->code_postal,
            'societe' => $request->societe,
            'fonction' => $request->fonction,
            'ville' => $request->ville,
            'pays' => $request->pays,
        ];

        Mail::to($request->email)->send(new SendMailDemandeDevisParticipant($data));

        Mail::to('sidriz@technodatasolutions.bj')->send(new SendMailDemandeDevisFormateur($data));

        flashy()->success('Inscription envoyée avec succès');

        // return redirect()->route('root_formation_inscription');

    }
}
